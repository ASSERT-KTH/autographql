<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q0b1947142ef1541b839c3af0f4dafb5bTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment PageInfoFragment on PageInfo {\n  endCursor\n  hasNextPage\n  hasPreviousPage\n  startCursor\n  __typename\n}\n\nfragment AttributeTranslationFragment on Attribute {\n  id\n  name\n  translation(languageCode: $language) {\n    id\n    name\n    __typename\n  }\n  values {\n    id\n    name\n    translation(languageCode: $language) {\n      id\n      name\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nfragment ProductTypeTranslationFragment on ProductType {\n  id\n  name\n  productAttributes {\n    ...AttributeTranslationFragment\n    __typename\n  }\n  variantAttributes {\n    ...AttributeTranslationFragment\n    __typename\n  }\n  __typename\n}\n\nquery ProductTypeTranslations($language: LanguageCodeEnum!, $first: Int, $after: String, $last: Int, $before: String, $filter: ProductTypeFilterInput) {\n  productTypes(before: $before, after: $after, first: $first, last: $last, filter: $filter) {\n    edges {\n      node {\n        ...ProductTypeTranslationFragment\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      ...PageInfoFragment\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 20, "filter": {}, "language": "HI"}, "operationName": "ProductTypeTranslations", "timesCalled": 2, "createdAt": "2021-09-04 13:38:47.908201+00:00", "updatedAt": "2021-09-04 20:28:44.745255+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
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
        
        $this->assertArrayHasKey('productAttributes', $responseContent['productTypes']['edges'][$g]['node']);
        
        if ($responseContent['productTypes']['edges'][$g]['node']['productAttributes']) {
        
        $this->assertIsArray($responseContent['productTypes']['edges'][$g]['node']['productAttributes']);
        
        for($f = 0; $f < count($responseContent['productTypes']['edges'][$g]['node']['productAttributes']); $f++) {
        
        if ($responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]) {
        
        $this->assertEquals('Attribute' , $responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]);
        
        if ($responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['name']) {
        
        $this->assertIsString($responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['name']);
        
        }
        
        $this->assertArrayHasKey('translation', $responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]);
        
        if ($responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['translation']) {
        
        $this->assertEquals('AttributeTranslation' , $responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['translation']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['translation']);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['translation']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['translation']);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['translation']['name']);
        
        $this->assertIsString($responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['translation']['name']);
        
        }
        
        $this->assertArrayHasKey('values', $responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]);
        
        if ($responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['values']) {
        
        $this->assertIsArray($responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['values']);
        
        for($e = 0; $e < count($responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['values']); $e++) {
        
        if ($responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]) {
        
        $this->assertEquals('AttributeValue' , $responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]);
        
        if ($responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]['name']) {
        
        $this->assertIsString($responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]['name']);
        
        }
        
        $this->assertArrayHasKey('translation', $responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]);
        
        if ($responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]['translation']) {
        
        $this->assertEquals('AttributeValueTranslation' , $responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]['translation']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]['translation']);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]['translation']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]['translation']);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]['translation']['name']);
        
        $this->assertIsString($responseContent['productTypes']['edges'][$g]['node']['productAttributes'][$f]['values'][$e]['translation']['name']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('variantAttributes', $responseContent['productTypes']['edges'][$g]['node']);
        
        if ($responseContent['productTypes']['edges'][$g]['node']['variantAttributes']) {
        
        $this->assertIsArray($responseContent['productTypes']['edges'][$g]['node']['variantAttributes']);
        
        for($f = 0; $f < count($responseContent['productTypes']['edges'][$g]['node']['variantAttributes']); $f++) {
        
        if ($responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]) {
        
        $this->assertEquals('Attribute' , $responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]);
        
        if ($responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['name']) {
        
        $this->assertIsString($responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['name']);
        
        }
        
        $this->assertArrayHasKey('translation', $responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]);
        
        if ($responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['translation']) {
        
        $this->assertEquals('AttributeTranslation' , $responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['translation']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['translation']);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['translation']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['translation']);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['translation']['name']);
        
        $this->assertIsString($responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['translation']['name']);
        
        }
        
        $this->assertArrayHasKey('values', $responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]);
        
        if ($responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['values']) {
        
        $this->assertIsArray($responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['values']);
        
        for($e = 0; $e < count($responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['values']); $e++) {
        
        if ($responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['values'][$e]) {
        
        $this->assertEquals('AttributeValue' , $responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['values'][$e]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['values'][$e]);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['values'][$e]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['values'][$e]);
        
        if ($responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['values'][$e]['name']) {
        
        $this->assertIsString($responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['values'][$e]['name']);
        
        }
        
        $this->assertArrayHasKey('translation', $responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['values'][$e]);
        
        if ($responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['values'][$e]['translation']) {
        
        $this->assertEquals('AttributeValueTranslation' , $responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['values'][$e]['translation']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['values'][$e]['translation']);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['values'][$e]['translation']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['values'][$e]['translation']);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['values'][$e]['translation']['name']);
        
        $this->assertIsString($responseContent['productTypes']['edges'][$g]['node']['variantAttributes'][$f]['values'][$e]['translation']['name']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['productTypes']);
        
        $this->assertNotNull($responseContent['productTypes']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['productTypes']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['productTypes']['pageInfo']);
        
        if ($responseContent['productTypes']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['productTypes']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['productTypes']['pageInfo']);
        
        $this->assertNotNull($responseContent['productTypes']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['productTypes']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['productTypes']['pageInfo']);
        
        $this->assertNotNull($responseContent['productTypes']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['productTypes']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['productTypes']['pageInfo']);
        
        if ($responseContent['productTypes']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['productTypes']['pageInfo']['startCursor']);
        
        }
        
        }
        

    }
}