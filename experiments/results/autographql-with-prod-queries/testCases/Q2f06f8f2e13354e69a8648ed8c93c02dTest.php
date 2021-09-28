<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q2f06f8f2e13354e69a8648ed8c93c02dTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment PageInfoFragment on PageInfo {\n  endCursor\n  hasNextPage\n  hasPreviousPage\n  startCursor\n  __typename\n}\n\nfragment TaxTypeFragment on TaxType {\n  description\n  taxCode\n  __typename\n}\n\nquery SearchProductTypes($after: String, $first: Int!, $query: String!) {\n  search: productTypes(after: $after, first: $first, filter: {search: $query}) {\n    edges {\n      node {\n        id\n        name\n        hasVariants\n        productAttributes {\n          id\n          inputType\n          slug\n          name\n          valueRequired\n          values {\n            id\n            name\n            slug\n            __typename\n          }\n          __typename\n        }\n        taxType {\n          ...TaxTypeFragment\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      ...PageInfoFragment\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"after": null, "first": 20, "query": "Misc"}, "operationName": "SearchProductTypes", "timesCalled": 3, "createdAt": "2021-09-04 13:40:51.017780+00:00", "updatedAt": "2021-09-04 20:28:47.757268+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('search', $responseContent);
        
        if ($responseContent['search']) {
        
        $this->assertEquals('ProductTypeCountableConnection' , $responseContent['search']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['search']);
        
        $this->assertNotNull($responseContent['search']['edges']);
        
        $this->assertIsArray($responseContent['search']['edges']);
        
        for($g = 0; $g < count($responseContent['search']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['search']['edges'][$g]);
        
        $this->assertEquals('ProductTypeCountableEdge' , $responseContent['search']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['search']['edges'][$g]);
        
        $this->assertNotNull($responseContent['search']['edges'][$g]['node']);
        
        $this->assertEquals('ProductType' , $responseContent['search']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['search']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['search']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['search']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['search']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['search']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('hasVariants', $responseContent['search']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['search']['edges'][$g]['node']['hasVariants']);
        
        $this->assertIsBool($responseContent['search']['edges'][$g]['node']['hasVariants']);
        
        $this->assertArrayHasKey('productAttributes', $responseContent['search']['edges'][$g]['node']);
        
        if ($responseContent['search']['edges'][$g]['node']['productAttributes']) {
        
        $this->assertIsArray($responseContent['search']['edges'][$g]['node']['productAttributes']);
        
        for($f = 0; $f < count($responseContent['search']['edges'][$g]['node']['productAttributes']); $f++) {
        
        if ($responseContent['search']['edges'][$g]['node']['productAttributes'][$f]) {
        
        $this->assertEquals('Attribute' , $responseContent['search']['edges'][$g]['node']['productAttributes'][$f]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['search']['edges'][$g]['node']['productAttributes'][$f]);
        
        $this->assertNotNull($responseContent['search']['edges'][$g]['node']['productAttributes'][$f]['id']);
        
        $this->assertArrayHasKey('inputType', $responseContent['search']['edges'][$g]['node']['productAttributes'][$f]);
        
        if ($responseContent['search']['edges'][$g]['node']['productAttributes'][$f]['inputType']) {
        
        $this->assertContains($responseContent['search']['edges'][$g]['node']['productAttributes'][$f]['inputType'], ['DROPDOWN', 'MULTISELECT']);
        
        }
        
        $this->assertArrayHasKey('slug', $responseContent['search']['edges'][$g]['node']['productAttributes'][$f]);
        
        if ($responseContent['search']['edges'][$g]['node']['productAttributes'][$f]['slug']) {
        
        $this->assertIsString($responseContent['search']['edges'][$g]['node']['productAttributes'][$f]['slug']);
        
        }
        
        $this->assertArrayHasKey('name', $responseContent['search']['edges'][$g]['node']['productAttributes'][$f]);
        
        if ($responseContent['search']['edges'][$g]['node']['productAttributes'][$f]['name']) {
        
        $this->assertIsString($responseContent['search']['edges'][$g]['node']['productAttributes'][$f]['name']);
        
        }
        
        $this->assertArrayHasKey('valueRequired', $responseContent['search']['edges'][$g]['node']['productAttributes'][$f]);
        
        $this->assertNotNull($responseContent['search']['edges'][$g]['node']['productAttributes'][$f]['valueRequired']);
        
        $this->assertIsBool($responseContent['search']['edges'][$g]['node']['productAttributes'][$f]['valueRequired']);
        
        $this->assertArrayHasKey('values', $responseContent['search']['edges'][$g]['node']['productAttributes'][$f]);
        
        if ($responseContent['search']['edges'][$g]['node']['productAttributes'][$f]['values']) {
        
        $this->assertIsArray($responseContent['search']['edges'][$g]['node']['productAttributes'][$f]['values']);
        
        for($e = 0; $e < count($responseContent['search']['edges'][$g]['node']['productAttributes'][$f]['values']); $e++) {
        
        if ($responseContent['search']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]) {
        
        $this->assertEquals('AttributeValue' , $responseContent['search']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['search']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]);
        
        $this->assertNotNull($responseContent['search']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['search']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]);
        
        if ($responseContent['search']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]['name']) {
        
        $this->assertIsString($responseContent['search']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]['name']);
        
        }
        
        $this->assertArrayHasKey('slug', $responseContent['search']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]);
        
        if ($responseContent['search']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]['slug']) {
        
        $this->assertIsString($responseContent['search']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]['slug']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('taxType', $responseContent['search']['edges'][$g]['node']);
        
        if ($responseContent['search']['edges'][$g]['node']['taxType']) {
        
        $this->assertEquals('TaxType' , $responseContent['search']['edges'][$g]['node']['taxType']['__typename']);
        
        $this->assertArrayHasKey('description', $responseContent['search']['edges'][$g]['node']['taxType']);
        
        if ($responseContent['search']['edges'][$g]['node']['taxType']['description']) {
        
        $this->assertIsString($responseContent['search']['edges'][$g]['node']['taxType']['description']);
        
        }
        
        $this->assertArrayHasKey('taxCode', $responseContent['search']['edges'][$g]['node']['taxType']);
        
        if ($responseContent['search']['edges'][$g]['node']['taxType']['taxCode']) {
        
        $this->assertIsString($responseContent['search']['edges'][$g]['node']['taxType']['taxCode']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['search']);
        
        $this->assertNotNull($responseContent['search']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['search']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['search']['pageInfo']);
        
        if ($responseContent['search']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['search']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['search']['pageInfo']);
        
        $this->assertNotNull($responseContent['search']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['search']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['search']['pageInfo']);
        
        $this->assertNotNull($responseContent['search']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['search']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['search']['pageInfo']);
        
        if ($responseContent['search']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['search']['pageInfo']['startCursor']);
        
        }
        
        }
        

    }
}