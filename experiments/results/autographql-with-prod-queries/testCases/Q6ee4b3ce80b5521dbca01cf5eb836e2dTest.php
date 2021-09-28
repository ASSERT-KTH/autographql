<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q6ee4b3ce80b5521dbca01cf5eb836e2dTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment PageInfoFragment on PageInfo {\n  endCursor\n  hasNextPage\n  hasPreviousPage\n  startCursor\n  __typename\n}\n\nfragment SaleFragment on Sale {\n  id\n  name\n  type\n  startDate\n  endDate\n  value\n  __typename\n}\n\nquery SaleList($after: String, $before: String, $first: Int, $last: Int, $filter: SaleFilterInput, $sort: SaleSortingInput) {\n  sales(after: $after, before: $before, first: $first, last: $last, filter: $filter, sortBy: $sort) {\n    edges {\n      node {\n        ...SaleFragment\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      ...PageInfoFragment\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 20, "filter": {"started": null}, "sort": {"direction": "ASC", "field": "NAME"}}, "operationName": "SaleList", "timesCalled": 7, "createdAt": "2021-09-04 13:31:15.667725+00:00", "updatedAt": "2021-09-04 20:28:52.698147+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('sales', $responseContent);
        
        if ($responseContent['sales']) {
        
        $this->assertEquals('SaleCountableConnection' , $responseContent['sales']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['sales']);
        
        $this->assertNotNull($responseContent['sales']['edges']);
        
        $this->assertIsArray($responseContent['sales']['edges']);
        
        for($g = 0; $g < count($responseContent['sales']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['sales']['edges'][$g]);
        
        $this->assertEquals('SaleCountableEdge' , $responseContent['sales']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['sales']['edges'][$g]);
        
        $this->assertNotNull($responseContent['sales']['edges'][$g]['node']);
        
        $this->assertEquals('Sale' , $responseContent['sales']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['sales']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['sales']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['sales']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['sales']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['sales']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('type', $responseContent['sales']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['sales']['edges'][$g]['node']['type']);
        
        $this->assertContains($responseContent['sales']['edges'][$g]['node']['type'], ['FIXED', 'PERCENTAGE']);
        
        $this->assertArrayHasKey('startDate', $responseContent['sales']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['sales']['edges'][$g]['node']['startDate']);
        
        $this->assertArrayHasKey('endDate', $responseContent['sales']['edges'][$g]['node']);
        
        if ($responseContent['sales']['edges'][$g]['node']['endDate']) {
        
        }
        
        $this->assertArrayHasKey('value', $responseContent['sales']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['sales']['edges'][$g]['node']['value']);
        
        $this->assertIsNumeric($responseContent['sales']['edges'][$g]['node']['value']);
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['sales']);
        
        $this->assertNotNull($responseContent['sales']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['sales']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['sales']['pageInfo']);
        
        if ($responseContent['sales']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['sales']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['sales']['pageInfo']);
        
        $this->assertNotNull($responseContent['sales']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['sales']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['sales']['pageInfo']);
        
        $this->assertNotNull($responseContent['sales']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['sales']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['sales']['pageInfo']);
        
        if ($responseContent['sales']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['sales']['pageInfo']['startCursor']);
        
        }
        
        }
        

    }
}