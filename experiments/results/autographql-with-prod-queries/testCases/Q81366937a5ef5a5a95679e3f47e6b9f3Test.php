<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q81366937a5ef5a5a95679e3f47e6b9f3Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment PageInfoFragment on PageInfo {\n  endCursor\n  hasNextPage\n  hasPreviousPage\n  startCursor\n  __typename\n}\n\nquery SearchAvailableAttributes($id: ID!, $after: String, $first: Int!, $query: String!) {\n  productType(id: $id) {\n    id\n    availableAttributes(after: $after, first: $first, filter: {search: $query}) {\n      edges {\n        node {\n          id\n          name\n          slug\n          __typename\n        }\n        __typename\n      }\n      pageInfo {\n        ...PageInfoFragment\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"after": null, "first": 20, "query": "f", "id": "UHJvZHVjdFR5cGU6MTY="}, "operationName": "SearchAvailableAttributes", "timesCalled": 3, "createdAt": "2021-09-04 13:26:04.380214+00:00", "updatedAt": "2021-09-04 20:28:54.865614+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('productType', $responseContent);
        
        if ($responseContent['productType']) {
        
        $this->assertEquals('ProductType' , $responseContent['productType']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productType']);
        
        $this->assertNotNull($responseContent['productType']['id']);
        
        $this->assertArrayHasKey('availableAttributes', $responseContent['productType']);
        
        if ($responseContent['productType']['availableAttributes']) {
        
        $this->assertEquals('AttributeCountableConnection' , $responseContent['productType']['availableAttributes']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['productType']['availableAttributes']);
        
        $this->assertNotNull($responseContent['productType']['availableAttributes']['edges']);
        
        $this->assertIsArray($responseContent['productType']['availableAttributes']['edges']);
        
        for($g = 0; $g < count($responseContent['productType']['availableAttributes']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['productType']['availableAttributes']['edges'][$g]);
        
        $this->assertEquals('AttributeCountableEdge' , $responseContent['productType']['availableAttributes']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['productType']['availableAttributes']['edges'][$g]);
        
        $this->assertNotNull($responseContent['productType']['availableAttributes']['edges'][$g]['node']);
        
        $this->assertEquals('Attribute' , $responseContent['productType']['availableAttributes']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productType']['availableAttributes']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productType']['availableAttributes']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productType']['availableAttributes']['edges'][$g]['node']);
        
        if ($responseContent['productType']['availableAttributes']['edges'][$g]['node']['name']) {
        
        $this->assertIsString($responseContent['productType']['availableAttributes']['edges'][$g]['node']['name']);
        
        }
        
        $this->assertArrayHasKey('slug', $responseContent['productType']['availableAttributes']['edges'][$g]['node']);
        
        if ($responseContent['productType']['availableAttributes']['edges'][$g]['node']['slug']) {
        
        $this->assertIsString($responseContent['productType']['availableAttributes']['edges'][$g]['node']['slug']);
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['productType']['availableAttributes']);
        
        $this->assertNotNull($responseContent['productType']['availableAttributes']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['productType']['availableAttributes']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['productType']['availableAttributes']['pageInfo']);
        
        if ($responseContent['productType']['availableAttributes']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['productType']['availableAttributes']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['productType']['availableAttributes']['pageInfo']);
        
        $this->assertNotNull($responseContent['productType']['availableAttributes']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['productType']['availableAttributes']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['productType']['availableAttributes']['pageInfo']);
        
        $this->assertNotNull($responseContent['productType']['availableAttributes']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['productType']['availableAttributes']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['productType']['availableAttributes']['pageInfo']);
        
        if ($responseContent['productType']['availableAttributes']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['productType']['availableAttributes']['pageInfo']['startCursor']);
        
        }
        
        }
        
        }
        

    }
}