<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qd0c4352c93965c47b4fd9bfa5f3fc27dTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment PageInfoFragment on PageInfo {\n  endCursor\n  hasNextPage\n  hasPreviousPage\n  startCursor\n  __typename\n}\n\nfragment VoucherTranslationFragment on Voucher {\n  id\n  name\n  translation(languageCode: $language) {\n    id\n    language {\n      code\n      language\n      __typename\n    }\n    name\n    __typename\n  }\n  __typename\n}\n\nquery VoucherTranslations($language: LanguageCodeEnum!, $first: Int, $after: String, $last: Int, $before: String, $filter: VoucherFilterInput) {\n  vouchers(before: $before, after: $after, first: $first, last: $last, filter: $filter) {\n    edges {\n      node {\n        ...VoucherTranslationFragment\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      ...PageInfoFragment\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 20, "filter": {}, "language": "HI"}, "operationName": "VoucherTranslations", "timesCalled": 2, "createdAt": "2021-09-04 13:38:49.278483+00:00", "updatedAt": "2021-09-04 20:29:00.916118+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('vouchers', $responseContent);
        
        if ($responseContent['vouchers']) {
        
        $this->assertEquals('VoucherCountableConnection' , $responseContent['vouchers']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['vouchers']);
        
        $this->assertNotNull($responseContent['vouchers']['edges']);
        
        $this->assertIsArray($responseContent['vouchers']['edges']);
        
        for($g = 0; $g < count($responseContent['vouchers']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]);
        
        $this->assertEquals('VoucherCountableEdge' , $responseContent['vouchers']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['vouchers']['edges'][$g]);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']);
        
        $this->assertEquals('Voucher' , $responseContent['vouchers']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['vouchers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['vouchers']['edges'][$g]['node']);
        
        if ($responseContent['vouchers']['edges'][$g]['node']['name']) {
        
        $this->assertIsString($responseContent['vouchers']['edges'][$g]['node']['name']);
        
        }
        
        $this->assertArrayHasKey('translation', $responseContent['vouchers']['edges'][$g]['node']);
        
        if ($responseContent['vouchers']['edges'][$g]['node']['translation']) {
        
        $this->assertEquals('VoucherTranslation' , $responseContent['vouchers']['edges'][$g]['node']['translation']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['vouchers']['edges'][$g]['node']['translation']);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']['translation']['id']);
        
        $this->assertArrayHasKey('language', $responseContent['vouchers']['edges'][$g]['node']['translation']);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']['translation']['language']);
        
        $this->assertEquals('LanguageDisplay' , $responseContent['vouchers']['edges'][$g]['node']['translation']['language']['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['vouchers']['edges'][$g]['node']['translation']['language']);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']['translation']['language']['code']);
        
        $this->assertContains($responseContent['vouchers']['edges'][$g]['node']['translation']['language']['code'], ['AR', 'AZ', 'BG', 'BN', 'CA', 'CS', 'DA', 'DE', 'EL', 'EN', 'ES', 'ES_CO', 'ET', 'FA', 'FI', 'FR', 'HI', 'HU', 'HY', 'ID', 'IS', 'IT', 'JA', 'KA', 'KM', 'KO', 'LT', 'MN', 'MY', 'NB', 'NL', 'PL', 'PT', 'PT_BR', 'RO', 'RU', 'SK', 'SL', 'SQ', 'SR', 'SV', 'SW', 'TA', 'TH', 'TR', 'UK', 'VI', 'ZH_HANS', 'ZH_HANT']);
        
        $this->assertArrayHasKey('language', $responseContent['vouchers']['edges'][$g]['node']['translation']['language']);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']['translation']['language']['language']);
        
        $this->assertIsString($responseContent['vouchers']['edges'][$g]['node']['translation']['language']['language']);
        
        $this->assertArrayHasKey('name', $responseContent['vouchers']['edges'][$g]['node']['translation']);
        
        if ($responseContent['vouchers']['edges'][$g]['node']['translation']['name']) {
        
        $this->assertIsString($responseContent['vouchers']['edges'][$g]['node']['translation']['name']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['vouchers']);
        
        $this->assertNotNull($responseContent['vouchers']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['vouchers']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['vouchers']['pageInfo']);
        
        if ($responseContent['vouchers']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['vouchers']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['vouchers']['pageInfo']);
        
        $this->assertNotNull($responseContent['vouchers']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['vouchers']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['vouchers']['pageInfo']);
        
        $this->assertNotNull($responseContent['vouchers']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['vouchers']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['vouchers']['pageInfo']);
        
        if ($responseContent['vouchers']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['vouchers']['pageInfo']['startCursor']);
        
        }
        
        }
        

    }
}