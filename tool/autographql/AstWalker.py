import graphql
from CodeNode import *
class AstWalker:

    def __init__(self, searcher):
        self.searcher = searcher
        self.fragmentDictionary = None

    def walk(self, node, parentCodeNode, parentObject='Query'):
        codeNodes = []
        if hasattr(node, 'selections') and node.selections:
            for child in node.selections:
                if type(child) == graphql.ast.InlineFragment:
                    thisNode = CodeNode(None, 'INLINE_FRAGMENT', child.type_condition.name, False)
                    codeNodes.append(thisNode)
                    childNodes = AstWalker.walk(self, child, thisNode, thisNode.type)
                    if childNodes == None:
                        return None
                    for c in childNodes:
                        thisNode.addChild(c)
                    continue
                elif type(child) == graphql.ast.FragmentSpread:
                    try:
                        for fragmentChild in self.fragmentDictionary[child.name].children:
                            codeNodes.append(fragmentChild)
                        if self.fragmentDictionary[child.name].hasTypename:
                            parentCodeNode.setHasTypename()
                    except:
                        return False
                    continue

                if child.name == '__typename':
                    parentCodeNode.setHasTypename()
                    continue
                if type(node) == graphql.ast.Query:
                    nodesToBe = self.searcher.getTypes('Query', child.name)
                    if child.alias and nodesToBe:
                        nodesToBe[0]['name'] = child.alias
                else:
                    nodesToBe = self.searcher.getTypes(parentObject, child.name)
                    if child.alias:
                        nodesToBe[0]['name'] = child.alias
                unconnectedNodes = []

                if nodesToBe != None:
                    for object in nodesToBe:
                        objectNode = CodeNode(object['name'], object['kind'], object['type'], object['non_null'])
                        unconnectedNodes.append(objectNode)

                    if len(unconnectedNodes) > 2:
                        for i in range(0,len(unconnectedNodes)-1):
                            unconnectedNodes[i].addChild(unconnectedNodes[i+1])
                    elif len(unconnectedNodes) == 2:
                        unconnectedNodes[0].addChild(unconnectedNodes[1])

                    nextNode = unconnectedNodes[len(unconnectedNodes)-1]
                    codeNode = unconnectedNodes[0]
                    codeNodes.append(codeNode)

                    childNodes = AstWalker.walk(self, child, nextNode, nextNode.type)
                    if childNodes == None:
                        return None
                    elif childNodes == False:
                        return False
                    for c in childNodes:
                        nextNode.addChild(c)
                else:
                    continue

        return codeNodes
