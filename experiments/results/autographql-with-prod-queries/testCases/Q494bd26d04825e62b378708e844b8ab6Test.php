<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q494bd26d04825e62b378708e844b8ab6Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment PageInfoFragment on PageInfo {\n  endCursor\n  hasNextPage\n  hasPreviousPage\n  startCursor\n  __typename\n}\n\nquery GridAttributes($first: Int!, $after: String, $ids: [ID!]!) {\n  availableInGrid: attributes(first: $first, after: $after, filter: {availableInGrid: true, isVariantOnly: false}) {\n    edges {\n      node {\n        id\n        name\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      ...PageInfoFragment\n      __typename\n    }\n    totalCount\n    __typename\n  }\n  grid: attributes(first: 25, filter: {ids: $ids}) {\n    edges {\n      node {\n        id\n        name\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 6, "ids": [], "after": "WyIwIiwgInNpemUiXQ=="}, "operationName": "GridAttributes", "timesCalled": 3, "createdAt": "2021-09-04 13:06:14.998921+00:00", "updatedAt": "2021-09-04 20:28:49.924121+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('availableInGrid', $responseContent);
        
        if ($responseContent['availableInGrid']) {
        
        $this->assertEquals('AttributeCountableConnection' , $responseContent['availableInGrid']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['availableInGrid']);
        
        $this->assertNotNull($responseContent['availableInGrid']['edges']);
        
        $this->assertIsArray($responseContent['availableInGrid']['edges']);
        
        for($g = 0; $g < count($responseContent['availableInGrid']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['availableInGrid']['edges'][$g]);
        
        $this->assertEquals('AttributeCountableEdge' , $responseContent['availableInGrid']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['availableInGrid']['edges'][$g]);
        
        $this->assertNotNull($responseContent['availableInGrid']['edges'][$g]['node']);
        
        $this->assertEquals('Attribute' , $responseContent['availableInGrid']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['availableInGrid']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['availableInGrid']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['availableInGrid']['edges'][$g]['node']);
        
        if ($responseContent['availableInGrid']['edges'][$g]['node']['name']) {
        
        $this->assertIsString($responseContent['availableInGrid']['edges'][$g]['node']['name']);
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['availableInGrid']);
        
        $this->assertNotNull($responseContent['availableInGrid']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['availableInGrid']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['availableInGrid']['pageInfo']);
        
        if ($responseContent['availableInGrid']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['availableInGrid']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['availableInGrid']['pageInfo']);
        
        $this->assertNotNull($responseContent['availableInGrid']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['availableInGrid']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['availableInGrid']['pageInfo']);
        
        $this->assertNotNull($responseContent['availableInGrid']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['availableInGrid']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['availableInGrid']['pageInfo']);
        
        if ($responseContent['availableInGrid']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['availableInGrid']['pageInfo']['startCursor']);
        
        }
        
        $this->assertArrayHasKey('totalCount', $responseContent['availableInGrid']);
        
        if ($responseContent['availableInGrid']['totalCount']) {
        
        $this->assertIsInt($responseContent['availableInGrid']['totalCount']);
        
        }
        
        }
        
        $this->assertArrayHasKey('grid', $responseContent);
        
        if ($responseContent['grid']) {
        
        $this->assertEquals('AttributeCountableConnection' , $responseContent['grid']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['grid']);
        
        $this->assertNotNull($responseContent['grid']['edges']);
        
        $this->assertIsArray($responseContent['grid']['edges']);
        
        for($g = 0; $g < count($responseContent['grid']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['grid']['edges'][$g]);
        
        $this->assertEquals('AttributeCountableEdge' , $responseContent['grid']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['grid']['edges'][$g]);
        
        $this->assertNotNull($responseContent['grid']['edges'][$g]['node']);
        
        $this->assertEquals('Attribute' , $responseContent['grid']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['grid']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['grid']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['grid']['edges'][$g]['node']);
        
        if ($responseContent['grid']['edges'][$g]['node']['name']) {
        
        $this->assertIsString($responseContent['grid']['edges'][$g]['node']['name']);
        
        }
        
        }
        
        }
        

    }
}