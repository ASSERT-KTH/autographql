class SchemaSearcher:

    def __init__(self, schema, schemaCoverageDict):
        self.schema = schema
        self.schemaCoverageDict = schemaCoverageDict
        self.lengthSchema = len(schemaCoverageDict)
        self.currentId = 'id'

    def getTypes(self, objectName, wantedField):
        for type in self.schema['types']:
            if type['name'].lower() == objectName.lower():
                for field in type['fields']:
                    if field['name'].lower() == wantedField.lower():
                        if objectName.lower()+wantedField.lower() in self.schemaCoverageDict:
                            self.schemaCoverageDict[objectName.lower()+wantedField.lower()][0] += 1
                            self.schemaCoverageDict[objectName.lower()+wantedField.lower()][1] = True
                            self.schemaCoverageDict[objectName.lower()+wantedField.lower()][2] = self.currentId
                        else:
                            print('Something is not covered: ' + objectName + ' ' + wantedField)
                        groundNode = field
                        nodeList = []
                        # Base case for first node, which is special because it has 'type' and not 'ofType'

                        # Check if next type is NON_NULL, because then we'll iterate twice
                        if field['type']['kind'] == 'NON_NULL':
                            nodeList.append({
                                'name': field['name'],
                                'non_null': True,
                                'kind': field['type']['ofType']['kind'],
                                'type': field['type']['ofType']['name']
                            })
                            # Check if we actually need to iterate any more
                            if field['type']['ofType']['ofType'] == None:
                                return nodeList
                            else:
                                groundNode = field['type']['ofType']['ofType']
                        else:
                            # If next type isn't NON_NULL, then we're done with this node
                            nodeList.append({
                                'name': field['name'],
                                'non_null': False,
                                'kind': field['type']['kind'],
                                'type': field['type']['name']
                            })

                            # Check if we actually need to iterate any more
                            if field['type']['ofType'] == None:
                                return nodeList
                            else:
                                groundNode = field['type']['ofType']

                        # First case done, time to iterate

                        while(groundNode['ofType'] != None):
                            if groundNode['kind'] == 'NON_NULL':
                                nodeList.append({
                                    'name': groundNode['name'],
                                    'non_null': True,
                                    'kind': groundNode['ofType']['kind'],
                                    'type': groundNode['ofType']['name']
                                })
                                if groundNode['ofType']['ofType'] == None:
                                    groundNode = None
                                    break
                                groundNode = groundNode['ofType']['ofType']
                            else:
                                nodeList.append({
                                    'name': groundNode['name'],
                                    'non_null': False,
                                    'kind': groundNode['kind'],
                                    'type': groundNode['name']
                                })
                                groundNode = groundNode['ofType']

                        # Catch the last case
                        if groundNode != None:
                            nodeList.append({
                                        'name': groundNode['name'],
                                        'non_null': False,
                                        'kind': groundNode['kind'],
                                        'type': groundNode['name']
                                    })
                        return nodeList

    def calculateSchemaCoverage(self):
        covered = 0
        for entry in self.schemaCoverageDict:
            if self.schemaCoverageDict[entry][1]:
                covered+=1
        return covered/self.lengthSchema

    def calculateMutations(self):
        total = 0
        for type in self.schema['types']:
            if type['name'].lower() == 'mutation':
                total = len(type['fields'])
                break
        return total/self.lengthSchema


    def calculateInputTypes(self):
        total = 0
        for type in self.schema['types']:
            if type['kind'] == 'INPUT_OBJECT':
                total += 1
        return total/self.lengthSchema

    def calculateObjects(self):
        total = 0
        for type in self.schema['types']:
            if type['name'] == 'Query' or '__' in type['name']:
                continue
            if type['kind'] == 'OBJECT':
                total += 1
        return total

    def setId(self, id):
        self.currentId = id
