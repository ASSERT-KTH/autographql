#!/usr/bin/env python

graphql_url = 'http://localhost:8000/graphql/'

# JWT ***
with open('./JWT-token.txt', 'r') as file:
    token = file.read().replace('\n', '')
authorization_token = "JWT " + token

schema_query = { "query": """query {
__schema {
    types {
        name 
        kind
        possibleTypes {
            name
            }
        enumValues {
            name
            }
        fields {
            name
            type {
                name
                kind
                ofType {
                    name
                    kind
                    ofType {
                        name
                        kind
                        ofType {
                            name
                            kind
                            ofType {
                                name
                                kind
                                ofType {
                                    name
                                    kind
                                    ofType {
                                        name
                                        kind
                                        ofType {
                                            name
                                            kind
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}"""}

test_template = 'BaseTestCase.php'
