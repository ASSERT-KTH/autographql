<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qdcca38867f6c5248b362cadae731e3acTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "query ShopInfo {\n  shop {\n    countries {\n      country\n      code\n      __typename\n    }\n    defaultCountry {\n      code\n      country\n      __typename\n    }\n    defaultCurrency\n    defaultWeightUnit\n    displayGrossPrices\n    domain {\n      host\n      url\n      __typename\n    }\n    languages {\n      code\n      language\n      __typename\n    }\n    includeTaxesInPrices\n    name\n    trackInventoryByDefault\n    permissions {\n      code\n      name\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {}, "operationName": "ShopInfo", "timesCalled": 8, "createdAt": "2021-09-04 12:44:56.745338+00:00", "updatedAt": "2021-09-05 13:38:01.796072+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('shop', $responseContent);
        
        $this->assertNotNull($responseContent['shop']);
        
        $this->assertEquals('Shop' , $responseContent['shop']['__typename']);
        
        $this->assertArrayHasKey('countries', $responseContent['shop']);
        
        $this->assertNotNull($responseContent['shop']['countries']);
        
        $this->assertIsArray($responseContent['shop']['countries']);
        
        for($g = 0; $g < count($responseContent['shop']['countries']); $g++) {
        
        $this->assertNotNull($responseContent['shop']['countries'][$g]);
        
        $this->assertEquals('CountryDisplay' , $responseContent['shop']['countries'][$g]['__typename']);
        
        $this->assertArrayHasKey('country', $responseContent['shop']['countries'][$g]);
        
        $this->assertNotNull($responseContent['shop']['countries'][$g]['country']);
        
        $this->assertIsString($responseContent['shop']['countries'][$g]['country']);
        
        $this->assertArrayHasKey('code', $responseContent['shop']['countries'][$g]);
        
        $this->assertNotNull($responseContent['shop']['countries'][$g]['code']);
        
        $this->assertIsString($responseContent['shop']['countries'][$g]['code']);
        
        }
        
        $this->assertArrayHasKey('defaultCountry', $responseContent['shop']);
        
        if ($responseContent['shop']['defaultCountry']) {
        
        $this->assertEquals('CountryDisplay' , $responseContent['shop']['defaultCountry']['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['shop']['defaultCountry']);
        
        $this->assertNotNull($responseContent['shop']['defaultCountry']['code']);
        
        $this->assertIsString($responseContent['shop']['defaultCountry']['code']);
        
        $this->assertArrayHasKey('country', $responseContent['shop']['defaultCountry']);
        
        $this->assertNotNull($responseContent['shop']['defaultCountry']['country']);
        
        $this->assertIsString($responseContent['shop']['defaultCountry']['country']);
        
        }
        
        $this->assertArrayHasKey('defaultWeightUnit', $responseContent['shop']);
        
        if ($responseContent['shop']['defaultWeightUnit']) {
        
        $this->assertContains($responseContent['shop']['defaultWeightUnit'], ['KG', 'LB', 'OZ', 'G']);
        
        }
        
        $this->assertArrayHasKey('displayGrossPrices', $responseContent['shop']);
        
        $this->assertNotNull($responseContent['shop']['displayGrossPrices']);
        
        $this->assertIsBool($responseContent['shop']['displayGrossPrices']);
        
        $this->assertArrayHasKey('domain', $responseContent['shop']);
        
        $this->assertNotNull($responseContent['shop']['domain']);
        
        $this->assertEquals('Domain' , $responseContent['shop']['domain']['__typename']);
        
        $this->assertArrayHasKey('host', $responseContent['shop']['domain']);
        
        $this->assertNotNull($responseContent['shop']['domain']['host']);
        
        $this->assertIsString($responseContent['shop']['domain']['host']);
        
        $this->assertArrayHasKey('url', $responseContent['shop']['domain']);
        
        $this->assertNotNull($responseContent['shop']['domain']['url']);
        
        $this->assertIsString($responseContent['shop']['domain']['url']);
        
        $this->assertArrayHasKey('languages', $responseContent['shop']);
        
        $this->assertNotNull($responseContent['shop']['languages']);
        
        $this->assertIsArray($responseContent['shop']['languages']);
        
        for($g = 0; $g < count($responseContent['shop']['languages']); $g++) {
        
        if ($responseContent['shop']['languages'][$g]) {
        
        $this->assertEquals('LanguageDisplay' , $responseContent['shop']['languages'][$g]['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['shop']['languages'][$g]);
        
        $this->assertNotNull($responseContent['shop']['languages'][$g]['code']);
        
        $this->assertContains($responseContent['shop']['languages'][$g]['code'], ['AR', 'AZ', 'BG', 'BN', 'CA', 'CS', 'DA', 'DE', 'EL', 'EN', 'ES', 'ES_CO', 'ET', 'FA', 'FI', 'FR', 'HI', 'HU', 'HY', 'ID', 'IS', 'IT', 'JA', 'KA', 'KM', 'KO', 'LT', 'MN', 'MY', 'NB', 'NL', 'PL', 'PT', 'PT_BR', 'RO', 'RU', 'SK', 'SL', 'SQ', 'SR', 'SV', 'SW', 'TA', 'TH', 'TR', 'UK', 'VI', 'ZH_HANS', 'ZH_HANT']);
        
        $this->assertArrayHasKey('language', $responseContent['shop']['languages'][$g]);
        
        $this->assertNotNull($responseContent['shop']['languages'][$g]['language']);
        
        $this->assertIsString($responseContent['shop']['languages'][$g]['language']);
        
        }
        
        }
        
        $this->assertArrayHasKey('includeTaxesInPrices', $responseContent['shop']);
        
        $this->assertNotNull($responseContent['shop']['includeTaxesInPrices']);
        
        $this->assertIsBool($responseContent['shop']['includeTaxesInPrices']);
        
        $this->assertArrayHasKey('name', $responseContent['shop']);
        
        $this->assertNotNull($responseContent['shop']['name']);
        
        $this->assertIsString($responseContent['shop']['name']);
        
        $this->assertArrayHasKey('trackInventoryByDefault', $responseContent['shop']);
        
        if ($responseContent['shop']['trackInventoryByDefault']) {
        
        $this->assertIsBool($responseContent['shop']['trackInventoryByDefault']);
        
        }
        
        $this->assertArrayHasKey('permissions', $responseContent['shop']);
        
        $this->assertNotNull($responseContent['shop']['permissions']);
        
        $this->assertIsArray($responseContent['shop']['permissions']);
        
        for($g = 0; $g < count($responseContent['shop']['permissions']); $g++) {
        
        if ($responseContent['shop']['permissions'][$g]) {
        
        $this->assertEquals('Permission' , $responseContent['shop']['permissions'][$g]['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['shop']['permissions'][$g]);
        
        $this->assertNotNull($responseContent['shop']['permissions'][$g]['code']);
        
        $this->assertContains($responseContent['shop']['permissions'][$g]['code'], ['MANAGE_USERS', 'MANAGE_STAFF', 'MANAGE_SERVICE_ACCOUNTS', 'MANAGE_APPS', 'MANAGE_DISCOUNTS', 'MANAGE_PLUGINS', 'MANAGE_GIFT_CARD', 'MANAGE_MENUS', 'MANAGE_ORDERS', 'MANAGE_PAGES', 'MANAGE_PRODUCTS', 'MANAGE_PRODUCT_TYPES_AND_ATTRIBUTES', 'MANAGE_SHIPPING', 'MANAGE_SETTINGS', 'MANAGE_TRANSLATIONS', 'MANAGE_CHECKOUTS']);
        
        $this->assertArrayHasKey('name', $responseContent['shop']['permissions'][$g]);
        
        $this->assertNotNull($responseContent['shop']['permissions'][$g]['name']);
        
        $this->assertIsString($responseContent['shop']['permissions'][$g]['name']);
        
        }
        
        }
        

    }
}