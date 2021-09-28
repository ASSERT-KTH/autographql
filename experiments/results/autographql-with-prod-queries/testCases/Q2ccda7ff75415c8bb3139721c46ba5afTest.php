<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q2ccda7ff75415c8bb3139721c46ba5afTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "query InitialProductFilterData($categories: [ID!], $collections: [ID!], $productTypes: [ID!]) {\n  attributes(first: 100, filter: {filterableInDashboard: true}) {\n    edges {\n      node {\n        id\n        name\n        slug\n        values {\n          id\n          name\n          slug\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  categories(first: 100, filter: {ids: $categories}) {\n    edges {\n      node {\n        id\n        name\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  collections(first: 100, filter: {ids: $collections}) {\n    edges {\n      node {\n        id\n        name\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  productTypes(first: 100, filter: {ids: $productTypes}) {\n    edges {\n      node {\n        id\n        name\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {}, "operationName": "InitialProductFilterData", "timesCalled": 21, "createdAt": "2021-09-04 13:06:09.352659+00:00", "updatedAt": "2021-09-04 20:28:47.576439+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('attributes', $responseContent);
        
        if ($responseContent['attributes']) {
        
        $this->assertEquals('AttributeCountableConnection' , $responseContent['attributes']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['attributes']);
        
        $this->assertNotNull($responseContent['attributes']['edges']);
        
        $this->assertIsArray($responseContent['attributes']['edges']);
        
        for($g = 0; $g < count($responseContent['attributes']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['attributes']['edges'][$g]);
        
        $this->assertEquals('AttributeCountableEdge' , $responseContent['attributes']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['attributes']['edges'][$g]);
        
        $this->assertNotNull($responseContent['attributes']['edges'][$g]['node']);
        
        $this->assertEquals('Attribute' , $responseContent['attributes']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['attributes']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['attributes']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['attributes']['edges'][$g]['node']);
        
        if ($responseContent['attributes']['edges'][$g]['node']['name']) {
        
        $this->assertIsString($responseContent['attributes']['edges'][$g]['node']['name']);
        
        }
        
        $this->assertArrayHasKey('slug', $responseContent['attributes']['edges'][$g]['node']);
        
        if ($responseContent['attributes']['edges'][$g]['node']['slug']) {
        
        $this->assertIsString($responseContent['attributes']['edges'][$g]['node']['slug']);
        
        }
        
        $this->assertArrayHasKey('values', $responseContent['attributes']['edges'][$g]['node']);
        
        if ($responseContent['attributes']['edges'][$g]['node']['values']) {
        
        $this->assertIsArray($responseContent['attributes']['edges'][$g]['node']['values']);
        
        for($f = 0; $f < count($responseContent['attributes']['edges'][$g]['node']['values']); $f++) {
        
        if ($responseContent['attributes']['edges'][$g]['node']['values'][$f]) {
        
        $this->assertEquals('AttributeValue' , $responseContent['attributes']['edges'][$g]['node']['values'][$f]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['attributes']['edges'][$g]['node']['values'][$f]);
        
        $this->assertNotNull($responseContent['attributes']['edges'][$g]['node']['values'][$f]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['attributes']['edges'][$g]['node']['values'][$f]);
        
        if ($responseContent['attributes']['edges'][$g]['node']['values'][$f]['name']) {
        
        $this->assertIsString($responseContent['attributes']['edges'][$g]['node']['values'][$f]['name']);
        
        }
        
        $this->assertArrayHasKey('slug', $responseContent['attributes']['edges'][$g]['node']['values'][$f]);
        
        if ($responseContent['attributes']['edges'][$g]['node']['values'][$f]['slug']) {
        
        $this->assertIsString($responseContent['attributes']['edges'][$g]['node']['values'][$f]['slug']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('categories', $responseContent);
        
        if ($responseContent['categories']) {
        
        $this->assertEquals('CategoryCountableConnection' , $responseContent['categories']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['categories']);
        
        $this->assertNotNull($responseContent['categories']['edges']);
        
        $this->assertIsArray($responseContent['categories']['edges']);
        
        for($g = 0; $g < count($responseContent['categories']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]);
        
        $this->assertEquals('CategoryCountableEdge' , $responseContent['categories']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['categories']['edges'][$g]);
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]['node']);
        
        $this->assertEquals('Category' , $responseContent['categories']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['categories']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['categories']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['categories']['edges'][$g]['node']['name']);
        
        }
        
        }
        
        $this->assertArrayHasKey('collections', $responseContent);
        
        if ($responseContent['collections']) {
        
        $this->assertEquals('CollectionCountableConnection' , $responseContent['collections']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['collections']);
        
        $this->assertNotNull($responseContent['collections']['edges']);
        
        $this->assertIsArray($responseContent['collections']['edges']);
        
        for($g = 0; $g < count($responseContent['collections']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['collections']['edges'][$g]);
        
        $this->assertEquals('CollectionCountableEdge' , $responseContent['collections']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['collections']['edges'][$g]);
        
        $this->assertNotNull($responseContent['collections']['edges'][$g]['node']);
        
        $this->assertEquals('Collection' , $responseContent['collections']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['collections']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['collections']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['collections']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['collections']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['collections']['edges'][$g]['node']['name']);
        
        }
        
        }
        
        $this->assertArrayHasKey('productTypes', $responseContent);
        
        if ($responseContent['productTypes']) {
        
        $this->assertEquals('ProductTypeCountableConnection' , $responseContent['productTypes']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['productTypes']);
        
        $this->assertNotNull($responseContent['productTypes']['edges']);
        
        $this->assertIsArray($responseContent['productTypes']['edges']);
        
        for($g = 0; $g < count($responseContent['productTypes']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]);
        
        $this->assertEquals('ProductTypeCountableEdge' , $responseContent['productTypes']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['productTypes']['edges'][$g]);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']);
        
        $this->assertEquals('ProductType' , $responseContent['productTypes']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productTypes']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productTypes']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['productTypes']['edges'][$g]['node']['name']);
        
        }
        
        }
        

    }
}