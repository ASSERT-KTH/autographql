<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q5ee02229bef753abacac72cd4f73b763Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment PageInfoFragment on PageInfo {\n  endCursor\n  hasNextPage\n  hasPreviousPage\n  startCursor\n  __typename\n}\n\nfragment CollectionTranslationFragment on Collection {\n  id\n  name\n  descriptionJson\n  seoDescription\n  seoTitle\n  translation(languageCode: $language) {\n    id\n    descriptionJson\n    language {\n      language\n      __typename\n    }\n    name\n    seoDescription\n    seoTitle\n    __typename\n  }\n  __typename\n}\n\nquery CollectionTranslations($language: LanguageCodeEnum!, $first: Int, $after: String, $last: Int, $before: String, $filter: CollectionFilterInput) {\n  collections(before: $before, after: $after, first: $first, last: $last, filter: $filter) {\n    edges {\n      node {\n        ...CollectionTranslationFragment\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      ...PageInfoFragment\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 20, "filter": {}, "language": "HI"}, "operationName": "CollectionTranslations", "timesCalled": 5, "createdAt": "2021-09-04 13:18:55.772931+00:00", "updatedAt": "2021-09-04 20:28:51.474830+00:00"}
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
        
        $this->assertArrayHasKey('name', $responseContent['collections']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['collections']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['collections']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('descriptionJson', $responseContent['collections']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['collections']['edges'][$g]['node']['descriptionJson']);
        
        $this->assertArrayHasKey('seoDescription', $responseContent['collections']['edges'][$g]['node']);
        
        if ($responseContent['collections']['edges'][$g]['node']['seoDescription']) {
        
        $this->assertIsString($responseContent['collections']['edges'][$g]['node']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('seoTitle', $responseContent['collections']['edges'][$g]['node']);
        
        if ($responseContent['collections']['edges'][$g]['node']['seoTitle']) {
        
        $this->assertIsString($responseContent['collections']['edges'][$g]['node']['seoTitle']);
        
        }
        
        $this->assertArrayHasKey('translation', $responseContent['collections']['edges'][$g]['node']);
        
        if ($responseContent['collections']['edges'][$g]['node']['translation']) {
        
        $this->assertEquals('CollectionTranslation' , $responseContent['collections']['edges'][$g]['node']['translation']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['collections']['edges'][$g]['node']['translation']);
        
        $this->assertNotNull($responseContent['collections']['edges'][$g]['node']['translation']['id']);
        
        $this->assertArrayHasKey('descriptionJson', $responseContent['collections']['edges'][$g]['node']['translation']);
        
        $this->assertNotNull($responseContent['collections']['edges'][$g]['node']['translation']['descriptionJson']);
        
        $this->assertArrayHasKey('language', $responseContent['collections']['edges'][$g]['node']['translation']);
        
        $this->assertNotNull($responseContent['collections']['edges'][$g]['node']['translation']['language']);
        
        $this->assertEquals('LanguageDisplay' , $responseContent['collections']['edges'][$g]['node']['translation']['language']['__typename']);
        
        $this->assertArrayHasKey('language', $responseContent['collections']['edges'][$g]['node']['translation']['language']);
        
        $this->assertNotNull($responseContent['collections']['edges'][$g]['node']['translation']['language']['language']);
        
        $this->assertIsString($responseContent['collections']['edges'][$g]['node']['translation']['language']['language']);
        
        $this->assertArrayHasKey('name', $responseContent['collections']['edges'][$g]['node']['translation']);
        
        $this->assertNotNull($responseContent['collections']['edges'][$g]['node']['translation']['name']);
        
        $this->assertIsString($responseContent['collections']['edges'][$g]['node']['translation']['name']);
        
        $this->assertArrayHasKey('seoDescription', $responseContent['collections']['edges'][$g]['node']['translation']);
        
        if ($responseContent['collections']['edges'][$g]['node']['translation']['seoDescription']) {
        
        $this->assertIsString($responseContent['collections']['edges'][$g]['node']['translation']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('seoTitle', $responseContent['collections']['edges'][$g]['node']['translation']);
        
        if ($responseContent['collections']['edges'][$g]['node']['translation']['seoTitle']) {
        
        $this->assertIsString($responseContent['collections']['edges'][$g]['node']['translation']['seoTitle']);
        
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