import os
import requests
import json
import jinja2
import config as cfg
import sys
import csv
from SchemaSearcher import *
from AstWalker import *
from graphql.parser import GraphQLParser
from CreateAssertions import *
from CreateDictionaries import *

def main():

    moreDetails = False

    if len(sys.argv) > 1 and sys.argv[1] == 'True':
        moreDetails = True
        print("You have chosen to get some more details of your schema coverage. This will be provided in a file in root "
              "called 'individualSchemaCoverage.csv'. The overview of the covered schema will be printed to a file "
              "called 'schemaCoverageDictionary.csv'.")
        with open('individualSchemaCoverage.csv', 'w') as csvfile:
            csvwriter = csv.writer(csvfile)
            csvwriter.writerow(['testID','individualCoverage'])


    templateLoader = jinja2.FileSystemLoader(searchpath="")
    templateEnv = jinja2.Environment(loader=templateLoader)
    template = templateEnv.get_template(cfg.test_template)

    parser = GraphQLParser()
    encoder = json.JSONEncoder()

    types = requests.post(cfg.graphql_url, data=encoder.encode(cfg.schema_query),
                         headers={'content-type': 'application/json'})

    schema = json.loads(types.content)['data']['__schema']

    #jsonschema = json.dumps(schema)
    #jsonFile = open('schema.json', 'w+')
    #jsonFile.write(jsonschema)

    createDict = CreateDictionaries(schema)
    possValuesDict = createDict.possibleValuesDictionary()
    schemaCoverageDict = createDict.schemaCoverageDictionary()

    searcher = SchemaSearcher(schema, schemaCoverageDict)
    walker = AstWalker(searcher)
    createAssertions = CreateAssertions(possValuesDict)

    for f in os.listdir('queries/'):
        id = f.split('.json')[0]
        if id == '.DS_Store':
            continue
        testName = 'Q' + ''.join(id.split('-')) + 'Test'
        payload = open('queries/' + f).read()
        jsonPayload = "<<<'JSON'\n" + payload + "\nJSON"

        try:
            dict = json.loads(payload)
        except:
            print("Couldn't load " + id)
            continue

        try:
            astree = parser.parse(dict['query'])
        except:
            print('Something is wrong with test ' + id)
            continue

        mutation = False
        query = None

        # Checking there are no mutations in query
        for tree in astree.definitions:
            if type(tree) == graphql.ast.Mutation:
                print(id + ' contains mutations and will not be used')
                mutation = True
                break

        # Skipping current query if contains mutations
        if mutation:
            continue

        searcher.setId(id)

        # Checking other types in query
        for tree in astree.definitions:
            if type(tree) == graphql.ast.FragmentDefinition:
                success = createDict.createFragmentDictionary(tree, walker)
                if success:
                    walker.fragmentDictionary = createDict.fragmentDictionary
                else:
                    astree.definitions.append(tree)
                    continue
            elif type(tree) == graphql.ast.Query or type(tree) == None:
                query = tree

        rootNode = walker.walk(query, None)

        if moreDetails:
            createSchemaDict = CreateDictionaries(schema)
            individualSchemaCoverageDict = createSchemaDict.schemaCoverageDictionary()
            schemaSearcher = SchemaSearcher(schema, individualSchemaCoverageDict)
            schemaWalker = AstWalker(schemaSearcher)
            schemaWalker.fragmentDictionary = createDict.fragmentDictionary
            schemaWalker.walk(query, None)
            with open('individualSchemaCoverage.csv', 'a') as csvfile:
                csvwriter = csv.writer(csvfile)
                csvwriter.writerow([id, (schemaSearcher.calculateSchemaCoverage() * 100)])


        variables = ['$a', '$b', '$c', '$d', '$e', '$f', '$g']

        try:
            assertions = []
            for node in rootNode:
                nodeAssertions = createAssertions.createAssertions(node, variables)
                for line in nodeAssertions:
                    assertions.append(line)
            output = template.render(className=testName, query=jsonPayload,
                                     allAssertions=assertions, graphQLURL = cfg.graphql_url, authToken = cfg.authorization_token)
            testfile = open('testCases/' + testName + '.php', 'w')
            testfile.write(output)
            testfile.close()
        except:
            continue

    if moreDetails:
        with open('schemaCoverageDictionary.csv', 'w') as csvfile:
            csvwriter = csv.writer(csvfile)
            csvwriter.writerow(['schemaTuple', 'visited', 'timesVisited', 'id'])
            for line in schemaCoverageDict:
                csvwriter.writerow([line, schemaCoverageDict[line][1], schemaCoverageDict[line][0], schemaCoverageDict[line][2]])

    print("The schema coverage for the generated test suite is: " + str(searcher.calculateSchemaCoverage()*100) + ' %' +
          " where mutations are: " + str(searcher.calculateMutations()*100) + ' % of the schema and input objects are: ' +
          str(searcher.calculateInputTypes()*100) + ' % of the schema.')

if __name__ == '__main__':
    main()
