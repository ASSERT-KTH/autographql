from CodeNode import *
class CreateDictionaries:

    def __init__(self, schema):
        self.schema = schema
        self.fragmentDictionary = {}

    def possibleValuesDictionary(self):
        dictionary = {}
        for type in self.schema['types']:
            if str.lower(type['kind']) == 'interface':
                possibleTypes = []
                for field in type['possibleTypes']:
                    possibleTypes.append(field['name'])
                dictionary[type['name']] = possibleTypes
            elif str.lower(type['kind']) == 'enum':
                possibleTypes = []
                for field in type['enumValues']:
                    possibleTypes.append(field['name'])
                dictionary[type['name']] = possibleTypes
        return dictionary

    def schemaCoverageDictionary(self):
        dictionary = {}
        for type in self.schema['types']:
            if type['fields'] != None and not '_' in type['name']:
                for field in type['fields']:
                    dictionary[type['name'].lower()+field['name'].lower()] = [0,False,'']
        return dictionary

    def createFragmentDictionary(self, tree, walker):
        fragmentName = tree.name
        parentNode = CodeNode(None, 'OBJECT', tree.type_condition.name, False)
        for child in tree.selections:
            if child.name == '__typename':
                parentNode.setHasTypename()
                break
        rootNode = walker.walk(tree, parentNode, parentNode.type)
        # This means that this fragment contains a fragment which haven't been defined yet
        if not rootNode:
            return False
        for child in rootNode:
            parentNode.addChild(child)
        self.fragmentDictionary[fragmentName] = parentNode
        return True
