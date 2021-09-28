<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q71a60e6c55925ba2af282bdab2ada220Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment CollectionFragment on Collection {\n  id\n  isPublished\n  name\n  __typename\n}\n\nquery CollectionList($first: Int, $after: String, $last: Int, $before: String, $filter: CollectionFilterInput, $sort: CollectionSortingInput) {\n  collections(first: $first, after: $after, before: $before, last: $last, filter: $filter, sortBy: $sort) {\n    edges {\n      node {\n        ...CollectionFragment\n        products {\n          totalCount\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      endCursor\n      hasNextPage\n      hasPreviousPage\n      startCursor\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 20, "filter": {}, "sort": {"direction": "ASC", "field": "NAME"}}, "operationName": "CollectionList", "timesCalled": 13, "createdAt": "2021-09-04 13:04:14.531391+00:00", "updatedAt": "2021-09-04 20:28:52.865364+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
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
        
        $this->assertArrayHasKey('isPublished', $responseContent['collections']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['collections']['edges'][$g]['node']['isPublished']);
        
        $this->assertIsBool($responseContent['collections']['edges'][$g]['node']['isPublished']);
        
        $this->assertArrayHasKey('name', $responseContent['collections']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['collections']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['collections']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('products', $responseContent['collections']['edges'][$g]['node']);
        
        if ($responseContent['collections']['edges'][$g]['node']['products']) {
        
        $this->assertEquals('ProductCountableConnection' , $responseContent['collections']['edges'][$g]['node']['products']['__typename']);
        
        $this->assertArrayHasKey('totalCount', $responseContent['collections']['edges'][$g]['node']['products']);
        
        if ($responseContent['collections']['edges'][$g]['node']['products']['totalCount']) {
        
        $this->assertIsInt($responseContent['collections']['edges'][$g]['node']['products']['totalCount']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['collections']);
        
        $this->assertNotNull($responseContent['collections']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['collections']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['collections']['pageInfo']);
        
        if ($responseContent['collections']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['collections']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['collections']['pageInfo']);
        
        $this->assertNotNull($responseContent['collections']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['collections']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['collections']['pageInfo']);
        
        $this->assertNotNull($responseContent['collections']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['collections']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['collections']['pageInfo']);
        
        if ($responseContent['collections']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['collections']['pageInfo']['startCursor']);
        
        }
        
        }
        

    }
}