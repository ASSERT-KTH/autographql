<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q8c0020ac85ec5333a76ef9e977518099Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment Money on Money {\n  amount\n  currency\n  __typename\n}\n\nfragment ProductVariantAttributesFragment on Product {\n  id\n  attributes {\n    attribute {\n      id\n      slug\n      name\n      inputType\n      valueRequired\n      values {\n        id\n        name\n        slug\n        __typename\n      }\n      __typename\n    }\n    values {\n      id\n      name\n      slug\n      __typename\n    }\n    __typename\n  }\n  productType {\n    id\n    variantAttributes {\n      id\n      name\n      values {\n        id\n        name\n        slug\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  pricing {\n    priceRangeUndiscounted {\n      start {\n        gross {\n          ...Money\n          __typename\n        }\n        __typename\n      }\n      stop {\n        gross {\n          ...Money\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nfragment WarehouseFragment on Warehouse {\n  id\n  name\n  __typename\n}\n\nquery CreateMultipleVariantsData($id: ID!) {\n  product(id: $id) {\n    ...ProductVariantAttributesFragment\n    __typename\n  }\n  warehouses(first: 20) {\n    edges {\n      node {\n        ...WarehouseFragment\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"id": "UHJvZHVjdDoxMjU="}, "operationName": "CreateMultipleVariantsData", "timesCalled": 3, "createdAt": "2021-09-04 13:41:43.560628+00:00", "updatedAt": "2021-09-04 20:28:55.639280+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('product', $responseContent);
        
        if ($responseContent['product']) {
        
        $this->assertEquals('Product' , $responseContent['product']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['id']);
        
        $this->assertArrayHasKey('attributes', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['attributes']);
        
        $this->assertIsArray($responseContent['product']['attributes']);
        
        for($g = 0; $g < count($responseContent['product']['attributes']); $g++) {
        
        $this->assertNotNull($responseContent['product']['attributes'][$g]);
        
        $this->assertEquals('SelectedAttribute' , $responseContent['product']['attributes'][$g]['__typename']);
        
        $this->assertArrayHasKey('attribute', $responseContent['product']['attributes'][$g]);
        
        $this->assertNotNull($responseContent['product']['attributes'][$g]['attribute']);
        
        $this->assertEquals('Attribute' , $responseContent['product']['attributes'][$g]['attribute']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['attributes'][$g]['attribute']);
        
        $this->assertNotNull($responseContent['product']['attributes'][$g]['attribute']['id']);
        
        $this->assertArrayHasKey('slug', $responseContent['product']['attributes'][$g]['attribute']);
        
        if ($responseContent['product']['attributes'][$g]['attribute']['slug']) {
        
        $this->assertIsString($responseContent['product']['attributes'][$g]['attribute']['slug']);
        
        }
        
        $this->assertArrayHasKey('name', $responseContent['product']['attributes'][$g]['attribute']);
        
        if ($responseContent['product']['attributes'][$g]['attribute']['name']) {
        
        $this->assertIsString($responseContent['product']['attributes'][$g]['attribute']['name']);
        
        }
        
        $this->assertArrayHasKey('inputType', $responseContent['product']['attributes'][$g]['attribute']);
        
        if ($responseContent['product']['attributes'][$g]['attribute']['inputType']) {
        
        $this->assertContains($responseContent['product']['attributes'][$g]['attribute']['inputType'], ['DROPDOWN', 'MULTISELECT']);
        
        }
        
        $this->assertArrayHasKey('valueRequired', $responseContent['product']['attributes'][$g]['attribute']);
        
        $this->assertNotNull($responseContent['product']['attributes'][$g]['attribute']['valueRequired']);
        
        $this->assertIsBool($responseContent['product']['attributes'][$g]['attribute']['valueRequired']);
        
        $this->assertArrayHasKey('values', $responseContent['product']['attributes'][$g]['attribute']);
        
        if ($responseContent['product']['attributes'][$g]['attribute']['values']) {
        
        $this->assertIsArray($responseContent['product']['attributes'][$g]['attribute']['values']);
        
        for($f = 0; $f < count($responseContent['product']['attributes'][$g]['attribute']['values']); $f++) {
        
        if ($responseContent['product']['attributes'][$g]['attribute']['values'][$f]) {
        
        $this->assertEquals('AttributeValue' , $responseContent['product']['attributes'][$g]['attribute']['values'][$f]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['attributes'][$g]['attribute']['values'][$f]);
        
        $this->assertNotNull($responseContent['product']['attributes'][$g]['attribute']['values'][$f]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['attributes'][$g]['attribute']['values'][$f]);
        
        if ($responseContent['product']['attributes'][$g]['attribute']['values'][$f]['name']) {
        
        $this->assertIsString($responseContent['product']['attributes'][$g]['attribute']['values'][$f]['name']);
        
        }
        
        $this->assertArrayHasKey('slug', $responseContent['product']['attributes'][$g]['attribute']['values'][$f]);
        
        if ($responseContent['product']['attributes'][$g]['attribute']['values'][$f]['slug']) {
        
        $this->assertIsString($responseContent['product']['attributes'][$g]['attribute']['values'][$f]['slug']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('values', $responseContent['product']['attributes'][$g]);
        
        $this->assertNotNull($responseContent['product']['attributes'][$g]['values']);
        
        $this->assertIsArray($responseContent['product']['attributes'][$g]['values']);
        
        for($f = 0; $f < count($responseContent['product']['attributes'][$g]['values']); $f++) {
        
        if ($responseContent['product']['attributes'][$g]['values'][$f]) {
        
        $this->assertEquals('AttributeValue' , $responseContent['product']['attributes'][$g]['values'][$f]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['attributes'][$g]['values'][$f]);
        
        $this->assertNotNull($responseContent['product']['attributes'][$g]['values'][$f]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['attributes'][$g]['values'][$f]);
        
        if ($responseContent['product']['attributes'][$g]['values'][$f]['name']) {
        
        $this->assertIsString($responseContent['product']['attributes'][$g]['values'][$f]['name']);
        
        }
        
        $this->assertArrayHasKey('slug', $responseContent['product']['attributes'][$g]['values'][$f]);
        
        if ($responseContent['product']['attributes'][$g]['values'][$f]['slug']) {
        
        $this->assertIsString($responseContent['product']['attributes'][$g]['values'][$f]['slug']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('productType', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['productType']);
        
        $this->assertEquals('ProductType' , $responseContent['product']['productType']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['productType']);
        
        $this->assertNotNull($responseContent['product']['productType']['id']);
        
        $this->assertArrayHasKey('variantAttributes', $responseContent['product']['productType']);
        
        if ($responseContent['product']['productType']['variantAttributes']) {
        
        $this->assertIsArray($responseContent['product']['productType']['variantAttributes']);
        
        for($g = 0; $g < count($responseContent['product']['productType']['variantAttributes']); $g++) {
        
        if ($responseContent['product']['productType']['variantAttributes'][$g]) {
        
        $this->assertEquals('Attribute' , $responseContent['product']['productType']['variantAttributes'][$g]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['productType']['variantAttributes'][$g]);
        
        $this->assertNotNull($responseContent['product']['productType']['variantAttributes'][$g]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['productType']['variantAttributes'][$g]);
        
        if ($responseContent['product']['productType']['variantAttributes'][$g]['name']) {
        
        $this->assertIsString($responseContent['product']['productType']['variantAttributes'][$g]['name']);
        
        }
        
        $this->assertArrayHasKey('values', $responseContent['product']['productType']['variantAttributes'][$g]);
        
        if ($responseContent['product']['productType']['variantAttributes'][$g]['values']) {
        
        $this->assertIsArray($responseContent['product']['productType']['variantAttributes'][$g]['values']);
        
        for($f = 0; $f < count($responseContent['product']['productType']['variantAttributes'][$g]['values']); $f++) {
        
        if ($responseContent['product']['productType']['variantAttributes'][$g]['values'][$f]) {
        
        $this->assertEquals('AttributeValue' , $responseContent['product']['productType']['variantAttributes'][$g]['values'][$f]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['productType']['variantAttributes'][$g]['values'][$f]);
        
        $this->assertNotNull($responseContent['product']['productType']['variantAttributes'][$g]['values'][$f]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['productType']['variantAttributes'][$g]['values'][$f]);
        
        if ($responseContent['product']['productType']['variantAttributes'][$g]['values'][$f]['name']) {
        
        $this->assertIsString($responseContent['product']['productType']['variantAttributes'][$g]['values'][$f]['name']);
        
        }
        
        $this->assertArrayHasKey('slug', $responseContent['product']['productType']['variantAttributes'][$g]['values'][$f]);
        
        if ($responseContent['product']['productType']['variantAttributes'][$g]['values'][$f]['slug']) {
        
        $this->assertIsString($responseContent['product']['productType']['variantAttributes'][$g]['values'][$f]['slug']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('pricing', $responseContent['product']);
        
        if ($responseContent['product']['pricing']) {
        
        $this->assertEquals('ProductPricingInfo' , $responseContent['product']['pricing']['__typename']);
        
        $this->assertArrayHasKey('priceRangeUndiscounted', $responseContent['product']['pricing']);
        
        if ($responseContent['product']['pricing']['priceRangeUndiscounted']) {
        
        $this->assertEquals('TaxedMoneyRange' , $responseContent['product']['pricing']['priceRangeUndiscounted']['__typename']);
        
        $this->assertArrayHasKey('start', $responseContent['product']['pricing']['priceRangeUndiscounted']);
        
        if ($responseContent['product']['pricing']['priceRangeUndiscounted']['start']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['product']['pricing']['priceRangeUndiscounted']['start']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['product']['pricing']['priceRangeUndiscounted']['start']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertEquals('Money' , $responseContent['product']['pricing']['priceRangeUndiscounted']['start']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRangeUndiscounted']['start']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['pricing']['priceRangeUndiscounted']['start']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRangeUndiscounted']['start']['gross']['currency']);
        
        $this->assertIsString($responseContent['product']['pricing']['priceRangeUndiscounted']['start']['gross']['currency']);
        
        }
        
        $this->assertArrayHasKey('stop', $responseContent['product']['pricing']['priceRangeUndiscounted']);
        
        if ($responseContent['product']['pricing']['priceRangeUndiscounted']['stop']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['product']['pricing']['priceRangeUndiscounted']['stop']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertEquals('Money' , $responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['gross']['currency']);
        
        $this->assertIsString($responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['gross']['currency']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('warehouses', $responseContent);
        
        if ($responseContent['warehouses']) {
        
        $this->assertEquals('WarehouseCountableConnection' , $responseContent['warehouses']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['warehouses']);
        
        $this->assertNotNull($responseContent['warehouses']['edges']);
        
        $this->assertIsArray($responseContent['warehouses']['edges']);
        
        for($g = 0; $g < count($responseContent['warehouses']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]);
        
        $this->assertEquals('WarehouseCountableEdge' , $responseContent['warehouses']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['warehouses']['edges'][$g]);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']);
        
        $this->assertEquals('Warehouse' , $responseContent['warehouses']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['warehouses']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['warehouses']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['warehouses']['edges'][$g]['node']['name']);
        
        }
        
        }
        

    }
}