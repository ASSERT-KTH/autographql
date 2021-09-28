<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q5b0bd08125d856ad9af03dcd13e373d3Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment AttributeFragment on Attribute {\n  id\n  name\n  slug\n  visibleInStorefront\n  filterableInDashboard\n  filterableInStorefront\n  __typename\n}\n\nfragment PageInfoFragment on PageInfo {\n  endCursor\n  hasNextPage\n  hasPreviousPage\n  startCursor\n  __typename\n}\n\nquery AttributeList($filter: AttributeFilterInput, $before: String, $after: String, $first: Int, $last: Int, $sort: AttributeSortingInput) {\n  attributes(filter: $filter, before: $before, after: $after, first: $first, last: $last, sortBy: $sort) {\n    edges {\n      node {\n        ...AttributeFragment\n        values {\n          id\n          name\n          slug\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      ...PageInfoFragment\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 20, "filter": {}, "sort": {"direction": "ASC", "field": "NAME"}}, "operationName": "AttributeList", "timesCalled": 7, "createdAt": "2021-09-04 13:17:54.885516+00:00", "updatedAt": "2021-09-04 20:28:51.286232+00:00"}
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
        
        $this->assertArrayHasKey('visibleInStorefront', $responseContent['attributes']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['attributes']['edges'][$g]['node']['visibleInStorefront']);
        
        $this->assertIsBool($responseContent['attributes']['edges'][$g]['node']['visibleInStorefront']);
        
        $this->assertArrayHasKey('filterableInDashboard', $responseContent['attributes']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['attributes']['edges'][$g]['node']['filterableInDashboard']);
        
        $this->assertIsBool($responseContent['attributes']['edges'][$g]['node']['filterableInDashboard']);
        
        $this->assertArrayHasKey('filterableInStorefront', $responseContent['attributes']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['attributes']['edges'][$g]['node']['filterableInStorefront']);
        
        $this->assertIsBool($responseContent['attributes']['edges'][$g]['node']['filterableInStorefront']);
        
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
        
        $this->assertArrayHasKey('pageInfo', $responseContent['attributes']);
        
        $this->assertNotNull($responseContent['attributes']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['attributes']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['attributes']['pageInfo']);
        
        if ($responseContent['attributes']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['attributes']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['attributes']['pageInfo']);
        
        $this->assertNotNull($responseContent['attributes']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['attributes']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['attributes']['pageInfo']);
        
        $this->assertNotNull($responseContent['attributes']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['attributes']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['attributes']['pageInfo']);
        
        if ($responseContent['attributes']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['attributes']['pageInfo']['startCursor']);
        
        }
        
        }
        

    }
}