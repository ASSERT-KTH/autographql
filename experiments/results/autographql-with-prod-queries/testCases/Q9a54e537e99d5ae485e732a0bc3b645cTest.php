<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q9a54e537e99d5ae485e732a0bc3b645cTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "query SearchCatalog($first: Int!, $query: String!) {\n  categories(first: $first, filter: {search: $query}) {\n    edges {\n      node {\n        id\n        name\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  collections(first: $first, filter: {search: $query}) {\n    edges {\n      node {\n        id\n        name\n        isPublished\n        publicationDate\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  products(first: $first, filter: {search: $query}) {\n    edges {\n      node {\n        id\n        category {\n          id\n          name\n          __typename\n        }\n        name\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 5, "query": "sta"}, "operationName": "SearchCatalog", "timesCalled": 2, "createdAt": "2021-09-04 19:14:32.970912+00:00", "updatedAt": "2021-09-04 20:28:56.741552+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
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
        
        $this->assertArrayHasKey('isPublished', $responseContent['collections']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['collections']['edges'][$g]['node']['isPublished']);
        
        $this->assertIsBool($responseContent['collections']['edges'][$g]['node']['isPublished']);
        
        $this->assertArrayHasKey('publicationDate', $responseContent['collections']['edges'][$g]['node']);
        
        if ($responseContent['collections']['edges'][$g]['node']['publicationDate']) {
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('products', $responseContent);
        
        if ($responseContent['products']) {
        
        $this->assertEquals('ProductCountableConnection' , $responseContent['products']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['products']);
        
        $this->assertNotNull($responseContent['products']['edges']);
        
        $this->assertIsArray($responseContent['products']['edges']);
        
        for($g = 0; $g < count($responseContent['products']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['products']['edges'][$g]);
        
        $this->assertEquals('ProductCountableEdge' , $responseContent['products']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['products']['edges'][$g]);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']);
        
        $this->assertEquals('Product' , $responseContent['products']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('category', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['category']) {
        
        $this->assertEquals('Category' , $responseContent['products']['edges'][$g]['node']['category']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['products']['edges'][$g]['node']['category']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['category']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['products']['edges'][$g]['node']['category']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['category']['name']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['category']['name']);
        
        }
        
        $this->assertArrayHasKey('name', $responseContent['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['name']);
        
        }
        
        }
        

    }
}