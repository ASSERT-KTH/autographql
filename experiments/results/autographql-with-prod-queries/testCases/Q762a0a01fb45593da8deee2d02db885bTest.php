<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q762a0a01fb45593da8deee2d02db885bTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment PageInfoFragment on PageInfo {\n  endCursor\n  hasNextPage\n  hasPreviousPage\n  startCursor\n  __typename\n}\n\nfragment PageTranslationFragment on Page {\n  id\n  contentJson\n  seoDescription\n  seoTitle\n  title\n  translation(languageCode: $language) {\n    id\n    contentJson\n    seoDescription\n    seoTitle\n    title\n    language {\n      code\n      language\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nquery PageTranslations($language: LanguageCodeEnum!, $first: Int, $after: String, $last: Int, $before: String, $filter: PageFilterInput) {\n  pages(before: $before, after: $after, first: $first, last: $last, filter: $filter) {\n    edges {\n      node {\n        ...PageTranslationFragment\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      ...PageInfoFragment\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 20, "filter": {}, "language": "EN"}, "operationName": "PageTranslations", "timesCalled": 2, "createdAt": "2021-09-04 19:57:31.511916+00:00", "updatedAt": "2021-09-04 20:28:53.685748+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('pages', $responseContent);
        
        if ($responseContent['pages']) {
        
        $this->assertEquals('PageCountableConnection' , $responseContent['pages']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['pages']);
        
        $this->assertNotNull($responseContent['pages']['edges']);
        
        $this->assertIsArray($responseContent['pages']['edges']);
        
        for($g = 0; $g < count($responseContent['pages']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['pages']['edges'][$g]);
        
        $this->assertEquals('PageCountableEdge' , $responseContent['pages']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['pages']['edges'][$g]);
        
        $this->assertNotNull($responseContent['pages']['edges'][$g]['node']);
        
        $this->assertEquals('Page' , $responseContent['pages']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['pages']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['pages']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('contentJson', $responseContent['pages']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['pages']['edges'][$g]['node']['contentJson']);
        
        $this->assertArrayHasKey('seoDescription', $responseContent['pages']['edges'][$g]['node']);
        
        if ($responseContent['pages']['edges'][$g]['node']['seoDescription']) {
        
        $this->assertIsString($responseContent['pages']['edges'][$g]['node']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('seoTitle', $responseContent['pages']['edges'][$g]['node']);
        
        if ($responseContent['pages']['edges'][$g]['node']['seoTitle']) {
        
        $this->assertIsString($responseContent['pages']['edges'][$g]['node']['seoTitle']);
        
        }
        
        $this->assertArrayHasKey('title', $responseContent['pages']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['pages']['edges'][$g]['node']['title']);
        
        $this->assertIsString($responseContent['pages']['edges'][$g]['node']['title']);
        
        $this->assertArrayHasKey('translation', $responseContent['pages']['edges'][$g]['node']);
        
        if ($responseContent['pages']['edges'][$g]['node']['translation']) {
        
        $this->assertEquals('PageTranslation' , $responseContent['pages']['edges'][$g]['node']['translation']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['pages']['edges'][$g]['node']['translation']);
        
        $this->assertNotNull($responseContent['pages']['edges'][$g]['node']['translation']['id']);
        
        $this->assertArrayHasKey('contentJson', $responseContent['pages']['edges'][$g]['node']['translation']);
        
        $this->assertNotNull($responseContent['pages']['edges'][$g]['node']['translation']['contentJson']);
        
        $this->assertArrayHasKey('seoDescription', $responseContent['pages']['edges'][$g]['node']['translation']);
        
        if ($responseContent['pages']['edges'][$g]['node']['translation']['seoDescription']) {
        
        $this->assertIsString($responseContent['pages']['edges'][$g]['node']['translation']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('seoTitle', $responseContent['pages']['edges'][$g]['node']['translation']);
        
        if ($responseContent['pages']['edges'][$g]['node']['translation']['seoTitle']) {
        
        $this->assertIsString($responseContent['pages']['edges'][$g]['node']['translation']['seoTitle']);
        
        }
        
        $this->assertArrayHasKey('title', $responseContent['pages']['edges'][$g]['node']['translation']);
        
        $this->assertNotNull($responseContent['pages']['edges'][$g]['node']['translation']['title']);
        
        $this->assertIsString($responseContent['pages']['edges'][$g]['node']['translation']['title']);
        
        $this->assertArrayHasKey('language', $responseContent['pages']['edges'][$g]['node']['translation']);
        
        $this->assertNotNull($responseContent['pages']['edges'][$g]['node']['translation']['language']);
        
        $this->assertEquals('LanguageDisplay' , $responseContent['pages']['edges'][$g]['node']['translation']['language']['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['pages']['edges'][$g]['node']['translation']['language']);
        
        $this->assertNotNull($responseContent['pages']['edges'][$g]['node']['translation']['language']['code']);
        
        $this->assertContains($responseContent['pages']['edges'][$g]['node']['translation']['language']['code'], ['AR', 'AZ', 'BG', 'BN', 'CA', 'CS', 'DA', 'DE', 'EL', 'EN', 'ES', 'ES_CO', 'ET', 'FA', 'FI', 'FR', 'HI', 'HU', 'HY', 'ID', 'IS', 'IT', 'JA', 'KA', 'KM', 'KO', 'LT', 'MN', 'MY', 'NB', 'NL', 'PL', 'PT', 'PT_BR', 'RO', 'RU', 'SK', 'SL', 'SQ', 'SR', 'SV', 'SW', 'TA', 'TH', 'TR', 'UK', 'VI', 'ZH_HANS', 'ZH_HANT']);
        
        $this->assertArrayHasKey('language', $responseContent['pages']['edges'][$g]['node']['translation']['language']);
        
        $this->assertNotNull($responseContent['pages']['edges'][$g]['node']['translation']['language']['language']);
        
        $this->assertIsString($responseContent['pages']['edges'][$g]['node']['translation']['language']['language']);
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['pages']);
        
        $this->assertNotNull($responseContent['pages']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['pages']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['pages']['pageInfo']);
        
        if ($responseContent['pages']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['pages']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['pages']['pageInfo']);
        
        $this->assertNotNull($responseContent['pages']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['pages']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['pages']['pageInfo']);
        
        $this->assertNotNull($responseContent['pages']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['pages']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['pages']['pageInfo']);
        
        if ($responseContent['pages']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['pages']['pageInfo']['startCursor']);
        
        }
        
        }
        

    }
}