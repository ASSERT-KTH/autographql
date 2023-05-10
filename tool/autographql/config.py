#!/usr/bin/env python

graphql_url = "" # example: "http://localhost:8000/graphql/"

# JWT ***
authorization_token = "" # example: "Bearer $TOKEN"

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
