<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q5700cfe7825458d69461b748fbaea1e3Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "query Category($id: ID!) {\n  category(id: $id) {\n    seoDescription\n    seoTitle\n    id\n    name\n    backgroundImage {\n      url\n      __typename\n    }\n    ancestors(last: 5) {\n      edges {\n        node {\n          id\n          name\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  attributes(filter: {inCategory: $id, filterableInStorefront: true}, first: 100) {\n    edges {\n      node {\n        id\n        name\n        slug\n        values {\n          id\n          name\n          slug\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"attributes": {}, "pageSize": 6, "priceGte": null, "priceLte": null, "sortBy": null, "id": "Q2F0ZWdvcnk6OQ=="}, "operationName": "Category", "timesCalled": 3, "createdAt": "2021-09-04 12:35:06.481020+00:00", "updatedAt": "2021-09-05 13:53:34.726661+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('category', $responseContent);
        
        if ($responseContent['category']) {
        
        $this->assertEquals('Category' , $responseContent['category']['__typename']);
        
        $this->assertArrayHasKey('seoDescription', $responseContent['category']);
        
        if ($responseContent['category']['seoDescription']) {
        
        $this->assertIsString($responseContent['category']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('seoTitle', $responseContent['category']);
        
        if ($responseContent['category']['seoTitle']) {
        
        $this->assertIsString($responseContent['category']['seoTitle']);
        
        }
        
        $this->assertArrayHasKey('id', $responseContent['category']);
        
        $this->assertNotNull($responseContent['category']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['category']);
        
        $this->assertNotNull($responseContent['category']['name']);
        
        $this->assertIsString($responseContent['category']['name']);
        
        $this->assertArrayHasKey('backgroundImage', $responseContent['category']);
        
        if ($responseContent['category']['backgroundImage']) {
        
        $this->assertEquals('Image' , $responseContent['category']['backgroundImage']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['category']['backgroundImage']);
        
        $this->assertNotNull($responseContent['category']['backgroundImage']['url']);
        
        $this->assertIsString($responseContent['category']['backgroundImage']['url']);
        
        }
        
        $this->assertArrayHasKey('ancestors', $responseContent['category']);
        
        if ($responseContent['category']['ancestors']) {
        
        $this->assertEquals('CategoryCountableConnection' , $responseContent['category']['ancestors']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['category']['ancestors']);
        
        $this->assertNotNull($responseContent['category']['ancestors']['edges']);
        
        $this->assertIsArray($responseContent['category']['ancestors']['edges']);
        
        for($g = 0; $g < count($responseContent['category']['ancestors']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['category']['ancestors']['edges'][$g]);
        
        $this->assertEquals('CategoryCountableEdge' , $responseContent['category']['ancestors']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['category']['ancestors']['edges'][$g]);
        
        $this->assertNotNull($responseContent['category']['ancestors']['edges'][$g]['node']);
        
        $this->assertEquals('Category' , $responseContent['category']['ancestors']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['category']['ancestors']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['category']['ancestors']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['category']['ancestors']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['category']['ancestors']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['category']['ancestors']['edges'][$g]['node']['name']);
        
        }
        
        }
        
        }
        
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
        

    }
}