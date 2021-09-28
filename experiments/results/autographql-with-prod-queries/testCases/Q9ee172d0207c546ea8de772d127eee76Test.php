<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q9ee172d0207c546ea8de772d127eee76Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "query AppsList($before: String, $after: String, $first: Int, $last: Int, $sort: AppSortingInput, $filter: AppFilterInput) {\n  apps(before: $before, after: $after, first: $first, last: $last, sortBy: $sort, filter: $filter) {\n    pageInfo {\n      hasNextPage\n      hasPreviousPage\n      startCursor\n      endCursor\n      __typename\n    }\n    totalCount\n    edges {\n      node {\n        id\n        name\n        isActive\n        type\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 100, "sort": {"direction": "DESC", "field": "CREATION_DATE"}, "filter": {"type": "LOCAL"}}, "operationName": "AppsList", "timesCalled": 2, "createdAt": "2021-09-04 13:39:07.760736+00:00", "updatedAt": "2021-09-04 20:28:57.140734+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('apps', $responseContent);
        
        if ($responseContent['apps']) {
        
        $this->assertEquals('AppCountableConnection' , $responseContent['apps']['__typename']);
        
        $this->assertArrayHasKey('pageInfo', $responseContent['apps']);
        
        $this->assertNotNull($responseContent['apps']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['apps']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['apps']['pageInfo']);
        
        $this->assertNotNull($responseContent['apps']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['apps']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['apps']['pageInfo']);
        
        $this->assertNotNull($responseContent['apps']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['apps']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['apps']['pageInfo']);
        
        if ($responseContent['apps']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['apps']['pageInfo']['startCursor']);
        
        }
        
        $this->assertArrayHasKey('endCursor', $responseContent['apps']['pageInfo']);
        
        if ($responseContent['apps']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['apps']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('totalCount', $responseContent['apps']);
        
        if ($responseContent['apps']['totalCount']) {
        
        $this->assertIsInt($responseContent['apps']['totalCount']);
        
        }
        
        $this->assertArrayHasKey('edges', $responseContent['apps']);
        
        $this->assertNotNull($responseContent['apps']['edges']);
        
        $this->assertIsArray($responseContent['apps']['edges']);
        
        for($g = 0; $g < count($responseContent['apps']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['apps']['edges'][$g]);
        
        $this->assertEquals('AppCountableEdge' , $responseContent['apps']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['apps']['edges'][$g]);
        
        $this->assertNotNull($responseContent['apps']['edges'][$g]['node']);
        
        $this->assertEquals('App' , $responseContent['apps']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['apps']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['apps']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['apps']['edges'][$g]['node']);
        
        if ($responseContent['apps']['edges'][$g]['node']['name']) {
        
        $this->assertIsString($responseContent['apps']['edges'][$g]['node']['name']);
        
        }
        
        $this->assertArrayHasKey('isActive', $responseContent['apps']['edges'][$g]['node']);
        
        if ($responseContent['apps']['edges'][$g]['node']['isActive']) {
        
        $this->assertIsBool($responseContent['apps']['edges'][$g]['node']['isActive']);
        
        }
        
        $this->assertArrayHasKey('type', $responseContent['apps']['edges'][$g]['node']);
        
        if ($responseContent['apps']['edges'][$g]['node']['type']) {
        
        $this->assertContains($responseContent['apps']['edges'][$g]['node']['type'], ['LOCAL', 'THIRDPARTY']);
        
        }
        
        }
        
        }
        

    }
}