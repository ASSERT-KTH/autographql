<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q8cb612220e815b62a8016475f5cb7288Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment CountryFragment on CountryDisplay {\n  country\n  code\n  __typename\n}\n\nfragment CountryWithTaxesFragment on CountryDisplay {\n  ...CountryFragment\n  vat {\n    standardRate\n    reducedRates {\n      rateType\n      rate\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nfragment ShopTaxesFragment on Shop {\n  chargeTaxesOnShipping\n  includeTaxesInPrices\n  displayGrossPrices\n  __typename\n}\n\nquery CountryList {\n  shop {\n    ...ShopTaxesFragment\n    countries {\n      ...CountryWithTaxesFragment\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {}, "operationName": "CountryList", "timesCalled": 5, "createdAt": "2021-09-04 13:17:19.268251+00:00", "updatedAt": "2021-09-04 20:28:55.739213+00:00"}
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
        
        $this->assertArrayHasKey('chargeTaxesOnShipping', $responseContent['shop']);
        
        $this->assertNotNull($responseContent['shop']['chargeTaxesOnShipping']);
        
        $this->assertIsBool($responseContent['shop']['chargeTaxesOnShipping']);
        
        $this->assertArrayHasKey('includeTaxesInPrices', $responseContent['shop']);
        
        $this->assertNotNull($responseContent['shop']['includeTaxesInPrices']);
        
        $this->assertIsBool($responseContent['shop']['includeTaxesInPrices']);
        
        $this->assertArrayHasKey('displayGrossPrices', $responseContent['shop']);
        
        $this->assertNotNull($responseContent['shop']['displayGrossPrices']);
        
        $this->assertIsBool($responseContent['shop']['displayGrossPrices']);
        
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
        
        $this->assertArrayHasKey('vat', $responseContent['shop']['countries'][$g]);
        
        if ($responseContent['shop']['countries'][$g]['vat']) {
        
        $this->assertEquals('VAT' , $responseContent['shop']['countries'][$g]['vat']['__typename']);
        
        $this->assertArrayHasKey('standardRate', $responseContent['shop']['countries'][$g]['vat']);
        
        if ($responseContent['shop']['countries'][$g]['vat']['standardRate']) {
        
        $this->assertIsNumeric($responseContent['shop']['countries'][$g]['vat']['standardRate']);
        
        }
        
        $this->assertArrayHasKey('reducedRates', $responseContent['shop']['countries'][$g]['vat']);
        
        $this->assertNotNull($responseContent['shop']['countries'][$g]['vat']['reducedRates']);
        
        $this->assertIsArray($responseContent['shop']['countries'][$g]['vat']['reducedRates']);
        
        for($f = 0; $f < count($responseContent['shop']['countries'][$g]['vat']['reducedRates']); $f++) {
        
        if ($responseContent['shop']['countries'][$g]['vat']['reducedRates'][$f]) {
        
        $this->assertEquals('ReducedRate' , $responseContent['shop']['countries'][$g]['vat']['reducedRates'][$f]['__typename']);
        
        $this->assertArrayHasKey('rateType', $responseContent['shop']['countries'][$g]['vat']['reducedRates'][$f]);
        
        $this->assertNotNull($responseContent['shop']['countries'][$g]['vat']['reducedRates'][$f]['rateType']);
        
        $this->assertContains($responseContent['shop']['countries'][$g]['vat']['reducedRates'][$f]['rateType'], ['ACCOMMODATION', 'ADMISSION_TO_CULTURAL_EVENTS', 'ADMISSION_TO_ENTERTAINMENT_EVENTS', 'ADMISSION_TO_SPORTING_EVENTS', 'ADVERTISING', 'AGRICULTURAL_SUPPLIES', 'BABY_FOODSTUFFS', 'BIKES', 'BOOKS', 'CHILDRENS_CLOTHING', 'DOMESTIC_FUEL', 'DOMESTIC_SERVICES', 'E_BOOKS', 'FOODSTUFFS', 'HOTELS', 'MEDICAL', 'NEWSPAPERS', 'PASSENGER_TRANSPORT', 'PHARMACEUTICALS', 'PROPERTY_RENOVATIONS', 'RESTAURANTS', 'SOCIAL_HOUSING', 'STANDARD', 'WATER', 'WINE']);
        
        $this->assertArrayHasKey('rate', $responseContent['shop']['countries'][$g]['vat']['reducedRates'][$f]);
        
        $this->assertNotNull($responseContent['shop']['countries'][$g]['vat']['reducedRates'][$f]['rate']);
        
        $this->assertIsNumeric($responseContent['shop']['countries'][$g]['vat']['reducedRates'][$f]['rate']);
        
        }
        
        }
        
        }
        
        }
        

    }
}