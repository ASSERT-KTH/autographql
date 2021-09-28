from assertionDictionary import assertionDict


class CreateAssertions:

    def __init__(self, possValuesDict):
        self.possValuesDict = possValuesDict

    def createAssertions(self, node, listWithVariables, path='', listWithAssertions=None, newName=None):

        if listWithAssertions is None:
            listWithAssertions = []

        type = node.type
        kind = node.kind
        name = node.name
        non_null = node.non_null
        objectHasTypename = node.hasTypename
        if newName != None:
            myPath = "[" + newName + "]"
            name = newName
        else:
            if name == None:
                name = ''
                myPath = ''
            else:
                myPath = "['" + name + "']"
                listWithAssertions.append("$this->assertArrayHasKey('" + name + "', $responseContent" + path + ');')

        if non_null:
            listWithAssertions.append("$this->assertNotNull($responseContent" + path + myPath + ');')
            if type in assertionDict:
                listWithAssertions.append("$this->" + assertionDict[type] + "($responseContent" + path + myPath + ');')
            if kind in assertionDict:
                if kind == 'OBJECT':
                    if objectHasTypename:
                        listWithAssertions.append("$this->" + assertionDict[
                            kind] + "('" + type +"' , $responseContent" + path + myPath + "['__typename']);")
                elif kind == 'INTERFACE' or kind == 'UNION':
                    if objectHasTypename:
                        listWithAssertions.append("$this->" + assertionDict[
                            kind] + "($responseContent" + path + myPath + "['__typename'], " + str(self.possValuesDict[type]) + ");")
                elif kind == 'ENUM':
                    listWithAssertions.append("$this->" + assertionDict[
                        kind] + "($responseContent" + path + myPath + ", " + str(self.possValuesDict[type]) + ");")
                else:
                    listWithAssertions.append(
                        "$this->" + assertionDict[kind] + "($responseContent" + path + myPath + ');')
            if kind == 'LIST':
                variabel = listWithVariables.pop()
                listWithAssertions.append(
                    "for(" + variabel + " = 0; " + variabel + " < count($responseContent" + path + myPath + "); " + variabel + "++) {")
                if node.children != []:
                    for child in node.children:
                        listWithAssertions = CreateAssertions.createAssertions(self, child, listWithVariables,
                                                                               path + myPath, listWithAssertions,
                                                                               variabel)
                listWithAssertions.append('}')
                listWithVariables.append(variabel)
            else:
                if node.children != []:
                    for child in node.children:
                        listWithAssertions = CreateAssertions.createAssertions(self, child, listWithVariables,
                                                                               path + myPath, listWithAssertions)
        else:
            if kind == 'INLINE_FRAGMENT':
                if objectHasTypename:
                    listWithAssertions.append("if ($responseContent" + path + myPath + "['__typename'] == '" + type + "') {")
                else:
                    return listWithAssertions
            else:
                listWithAssertions.append("if ($responseContent" + path + myPath + ') {')
            if type in assertionDict:
                listWithAssertions.append("$this->" + assertionDict[type] + "($responseContent" + path + myPath + ');')
            if kind in assertionDict:
                if kind == 'OBJECT':
                    if objectHasTypename:
                        listWithAssertions.append("$this->" + assertionDict[
                            kind] + "('" + type +"' , $responseContent" + path + myPath + "['__typename']);")
                elif kind == 'INTERFACE' or kind == 'UNION':
                    if objectHasTypename:
                        listWithAssertions.append("$this->" + assertionDict[
                            kind] + "($responseContent" + path + myPath + "['__typename'], " + str(self.possValuesDict[type]) + ");")
                elif kind == 'ENUM':
                    listWithAssertions.append("$this->" + assertionDict[
                        kind] + "($responseContent" + path + myPath + ", " + str(self.possValuesDict[type]) + ");")
                else:
                    listWithAssertions.append(
                        "$this->" + assertionDict[kind] + "($responseContent" + path + myPath + ');')
            if kind == 'LIST':
                variabel = listWithVariables.pop()
                listWithAssertions.append(
                    "for(" + variabel + " = 0; " + variabel + " < count($responseContent" + path + myPath + "); " + variabel + "++) {")
                if node.children != []:
                    for child in node.children:
                        listWithAssertions = CreateAssertions.createAssertions(self, child, listWithVariables,
                                                                               path + myPath, listWithAssertions,
                                                                               variabel)
                listWithAssertions.append('}')
                listWithVariables.append(variabel)
            else:
                if node.children != []:
                    for child in node.children:
                        listWithAssertions = CreateAssertions.createAssertions(self, child, listWithVariables,
                                                                               path + myPath, listWithAssertions)
            listWithAssertions.append('}')

        return listWithAssertions

    def printTree(self, node):

        print('Name of this node: ' + node.name + ' Kind of node: ' + node.kind + ' type of node: ' + node.type if node.name != None else ' Type of this node: ' + node.type)
        print('Children of this node: ')
        for ch in node.children:
            print(ch.name if ch.name != None else ch.type)
        for child in node.children:
            CreateAssertions.printTree(self, child)
