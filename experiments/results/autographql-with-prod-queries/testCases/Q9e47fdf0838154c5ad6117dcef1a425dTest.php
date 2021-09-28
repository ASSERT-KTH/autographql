<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q9e47fdf0838154c5ad6117dcef1a425dTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment PageInfoFragment on PageInfo {\n  endCursor\n  hasNextPage\n  hasPreviousPage\n  startCursor\n  __typename\n}\n\nfragment SaleTranslationFragment on Sale {\n  id\n  name\n  translation(languageCode: $language) {\n    id\n    language {\n      code\n      language\n      __typename\n    }\n    name\n    __typename\n  }\n  __typename\n}\n\nquery SaleTranslations($language: LanguageCodeEnum!, $first: Int, $after: String, $last: Int, $before: String, $filter: SaleFilterInput) {\n  sales(before: $before, after: $after, first: $first, last: $last, filter: $filter) {\n    edges {\n      node {\n        ...SaleTranslationFragment\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      ...PageInfoFragment\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 20, "filter": {}, "language": "HI"}, "operationName": "SaleTranslations", "timesCalled": 2, "createdAt": "2021-09-04 13:38:49.721976+00:00", "updatedAt": "2021-09-04 20:28:57.093667+00:00"}
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
        
        $this->assertArrayHasKey('translation', $responseContent['sales']['edges'][$g]['node']);
        
        if ($responseContent['sales']['edges'][$g]['node']['translation']) {
        
        $this->assertEquals('SaleTranslation' , $responseContent['sales']['edges'][$g]['node']['translation']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['sales']['edges'][$g]['node']['translation']);
        
        $this->assertNotNull($responseContent['sales']['edges'][$g]['node']['translation']['id']);
        
        $this->assertArrayHasKey('language', $responseContent['sales']['edges'][$g]['node']['translation']);
        
        $this->assertNotNull($responseContent['sales']['edges'][$g]['node']['translation']['language']);
        
        $this->assertEquals('LanguageDisplay' , $responseContent['sales']['edges'][$g]['node']['translation']['language']['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['sales']['edges'][$g]['node']['translation']['language']);
        
        $this->assertNotNull($responseContent['sales']['edges'][$g]['node']['translation']['language']['code']);
        
        $this->assertContains($responseContent['sales']['edges'][$g]['node']['translation']['language']['code'], ['AR', 'AZ', 'BG', 'BN', 'CA', 'CS', 'DA', 'DE', 'EL', 'EN', 'ES', 'ES_CO', 'ET', 'FA', 'FI', 'FR', 'HI', 'HU', 'HY', 'ID', 'IS', 'IT', 'JA', 'KA', 'KM', 'KO', 'LT', 'MN', 'MY', 'NB', 'NL', 'PL', 'PT', 'PT_BR', 'RO', 'RU', 'SK', 'SL', 'SQ', 'SR', 'SV', 'SW', 'TA', 'TH', 'TR', 'UK', 'VI', 'ZH_HANS', 'ZH_HANT']);
        
        $this->assertArrayHasKey('language', $responseContent['sales']['edges'][$g]['node']['translation']['language']);
        
        $this->assertNotNull($responseContent['sales']['edges'][$g]['node']['translation']['language']['language']);
        
        $this->assertIsString($responseContent['sales']['edges'][$g]['node']['translation']['language']['language']);
        
        $this->assertArrayHasKey('name', $responseContent['sales']['edges'][$g]['node']['translation']);
        
        if ($responseContent['sales']['edges'][$g]['node']['translation']['name']) {
        
        $this->assertIsString($responseContent['sales']['edges'][$g]['node']['translation']['name']);
        
        }
        
        }
        
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