<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q6c3028f0ffd35c86b052d84aaf78f09eTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "query Collection($id: ID!) {\n  collection(id: $id) {\n    id\n    slug\n    name\n    seoDescription\n    seoTitle\n    backgroundImage {\n      url\n      __typename\n    }\n    __typename\n  }\n  attributes(filter: {inCollection: $id, filterableInStorefront: true}, first: 100) {\n    edges {\n      node {\n        id\n        name\n        slug\n        values {\n          id\n          name\n          slug\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"attributes": {}, "pageSize": 6, "priceGte": null, "priceLte": null, "sortBy": null, "id": "Q29sbGVjdGlvbjoy"}, "operationName": "Collection", "timesCalled": 2, "createdAt": "2021-09-04 12:36:00.436064+00:00", "updatedAt": "2021-09-04 20:28:52.374357+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('collection', $responseContent);
        
        if ($responseContent['collection']) {
        
        $this->assertEquals('Collection' , $responseContent['collection']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['collection']);
        
        $this->assertNotNull($responseContent['collection']['id']);
        
        $this->assertArrayHasKey('slug', $responseContent['collection']);
        
        $this->assertNotNull($responseContent['collection']['slug']);
        
        $this->assertIsString($responseContent['collection']['slug']);
        
        $this->assertArrayHasKey('name', $responseContent['collection']);
        
        $this->assertNotNull($responseContent['collection']['name']);
        
        $this->assertIsString($responseContent['collection']['name']);
        
        $this->assertArrayHasKey('seoDescription', $responseContent['collection']);
        
        if ($responseContent['collection']['seoDescription']) {
        
        $this->assertIsString($responseContent['collection']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('seoTitle', $responseContent['collection']);
        
        if ($responseContent['collection']['seoTitle']) {
        
        $this->assertIsString($responseContent['collection']['seoTitle']);
        
        }
        
        $this->assertArrayHasKey('backgroundImage', $responseContent['collection']);
        
        if ($responseContent['collection']['backgroundImage']) {
        
        $this->assertEquals('Image' , $responseContent['collection']['backgroundImage']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['collection']['backgroundImage']);
        
        $this->assertNotNull($responseContent['collection']['backgroundImage']['url']);
        
        $this->assertIsString($responseContent['collection']['backgroundImage']['url']);
        
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