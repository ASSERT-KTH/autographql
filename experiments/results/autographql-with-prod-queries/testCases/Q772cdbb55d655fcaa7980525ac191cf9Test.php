<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q772cdbb55d655fcaa7980525ac191cf9Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment PageInfoFragment on PageInfo {\n  endCursor\n  hasNextPage\n  hasPreviousPage\n  startCursor\n  __typename\n}\n\nfragment ProductTranslationFragment on Product {\n  id\n  name\n  descriptionJson\n  seoDescription\n  seoTitle\n  translation(languageCode: $language) {\n    id\n    descriptionJson\n    language {\n      code\n      language\n      __typename\n    }\n    name\n    seoDescription\n    seoTitle\n    __typename\n  }\n  __typename\n}\n\nquery ProductTranslations($language: LanguageCodeEnum!, $first: Int, $after: String, $last: Int, $before: String, $filter: ProductFilterInput) {\n  products(before: $before, after: $after, first: $first, last: $last, filter: $filter) {\n    edges {\n      node {\n        ...ProductTranslationFragment\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      ...PageInfoFragment\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 20, "filter": {}, "language": "HI"}, "operationName": "ProductTranslations", "timesCalled": 2, "createdAt": "2021-09-04 13:38:50.121396+00:00", "updatedAt": "2021-09-04 20:28:53.760887+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
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
        
        $this->assertArrayHasKey('name', $responseContent['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('descriptionJson', $responseContent['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['descriptionJson']);
        
        $this->assertArrayHasKey('seoDescription', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['seoDescription']) {
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('seoTitle', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['seoTitle']) {
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['seoTitle']);
        
        }
        
        $this->assertArrayHasKey('translation', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['translation']) {
        
        $this->assertEquals('ProductTranslation' , $responseContent['products']['edges'][$g]['node']['translation']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['products']['edges'][$g]['node']['translation']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['translation']['id']);
        
        $this->assertArrayHasKey('descriptionJson', $responseContent['products']['edges'][$g]['node']['translation']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['translation']['descriptionJson']);
        
        $this->assertArrayHasKey('language', $responseContent['products']['edges'][$g]['node']['translation']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['translation']['language']);
        
        $this->assertEquals('LanguageDisplay' , $responseContent['products']['edges'][$g]['node']['translation']['language']['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['products']['edges'][$g]['node']['translation']['language']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['translation']['language']['code']);
        
        $this->assertContains($responseContent['products']['edges'][$g]['node']['translation']['language']['code'], ['AR', 'AZ', 'BG', 'BN', 'CA', 'CS', 'DA', 'DE', 'EL', 'EN', 'ES', 'ES_CO', 'ET', 'FA', 'FI', 'FR', 'HI', 'HU', 'HY', 'ID', 'IS', 'IT', 'JA', 'KA', 'KM', 'KO', 'LT', 'MN', 'MY', 'NB', 'NL', 'PL', 'PT', 'PT_BR', 'RO', 'RU', 'SK', 'SL', 'SQ', 'SR', 'SV', 'SW', 'TA', 'TH', 'TR', 'UK', 'VI', 'ZH_HANS', 'ZH_HANT']);
        
        $this->assertArrayHasKey('language', $responseContent['products']['edges'][$g]['node']['translation']['language']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['translation']['language']['language']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['translation']['language']['language']);
        
        $this->assertArrayHasKey('name', $responseContent['products']['edges'][$g]['node']['translation']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['translation']['name']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['translation']['name']);
        
        $this->assertArrayHasKey('seoDescription', $responseContent['products']['edges'][$g]['node']['translation']);
        
        if ($responseContent['products']['edges'][$g]['node']['translation']['seoDescription']) {
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['translation']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('seoTitle', $responseContent['products']['edges'][$g]['node']['translation']);
        
        if ($responseContent['products']['edges'][$g]['node']['translation']['seoTitle']) {
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['translation']['seoTitle']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['products']);
        
        $this->assertNotNull($responseContent['products']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['products']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['products']['pageInfo']);
        
        if ($responseContent['products']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['products']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['products']['pageInfo']);
        
        $this->assertNotNull($responseContent['products']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['products']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['products']['pageInfo']);
        
        $this->assertNotNull($responseContent['products']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['products']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['products']['pageInfo']);
        
        if ($responseContent['products']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['products']['pageInfo']['startCursor']);
        
        }
        
        }
        

    }
}