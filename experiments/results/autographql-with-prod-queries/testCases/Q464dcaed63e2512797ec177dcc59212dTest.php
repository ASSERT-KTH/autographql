<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q464dcaed63e2512797ec177dcc59212dTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment Price on TaxedMoney {\n  gross {\n    amount\n    currency\n    __typename\n  }\n  net {\n    amount\n    currency\n    __typename\n  }\n  __typename\n}\n\nfragment ProductVariant on ProductVariant {\n  id\n  name\n  sku\n  quantityAvailable\n  isAvailable\n  pricing {\n    onSale\n    priceUndiscounted {\n      ...Price\n      __typename\n    }\n    price {\n      ...Price\n      __typename\n    }\n    __typename\n  }\n  attributes {\n    attribute {\n      id\n      name\n      __typename\n    }\n    values {\n      id\n      name\n      value: name\n      __typename\n    }\n    __typename\n  }\n  product {\n    id\n    name\n    thumbnail {\n      url\n      alt\n      __typename\n    }\n    thumbnail2x: thumbnail(size: 510) {\n      url\n      __typename\n    }\n    productType {\n      id\n      isShippingRequired\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nquery CheckoutProductVariants($ids: [ID]) {\n  productVariants(ids: $ids, first: 100) {\n    edges {\n      node {\n        ...ProductVariant\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"ids": ["UHJvZHVjdFZhcmlhbnQ6MTk2"]}, "operationName": "CheckoutProductVariants", "timesCalled": 2, "createdAt": "2021-09-04 19:36:45.896586+00:00", "updatedAt": "2021-09-04 20:28:49.588995+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('productVariants', $responseContent);
        
        if ($responseContent['productVariants']) {
        
        $this->assertEquals('ProductVariantCountableConnection' , $responseContent['productVariants']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['productVariants']);
        
        $this->assertNotNull($responseContent['productVariants']['edges']);
        
        $this->assertIsArray($responseContent['productVariants']['edges']);
        
        for($g = 0; $g < count($responseContent['productVariants']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]);
        
        $this->assertEquals('ProductVariantCountableEdge' , $responseContent['productVariants']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['productVariants']['edges'][$g]);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']);
        
        $this->assertEquals('ProductVariant' , $responseContent['productVariants']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariants']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productVariants']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('sku', $responseContent['productVariants']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['sku']);
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['sku']);
        
        $this->assertArrayHasKey('quantityAvailable', $responseContent['productVariants']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['quantityAvailable']);
        
        $this->assertIsInt($responseContent['productVariants']['edges'][$g]['node']['quantityAvailable']);
        
        $this->assertArrayHasKey('pricing', $responseContent['productVariants']['edges'][$g]['node']);
        
        if ($responseContent['productVariants']['edges'][$g]['node']['pricing']) {
        
        $this->assertEquals('VariantPricingInfo' , $responseContent['productVariants']['edges'][$g]['node']['pricing']['__typename']);
        
        $this->assertArrayHasKey('onSale', $responseContent['productVariants']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['productVariants']['edges'][$g]['node']['pricing']['onSale']) {
        
        $this->assertIsBool($responseContent['productVariants']['edges'][$g]['node']['pricing']['onSale']);
        
        }
        
        $this->assertArrayHasKey('priceUndiscounted', $responseContent['productVariants']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']['gross']);
        
        $this->assertEquals('Money' , $responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']['gross']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']['gross']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']['gross']['currency']);
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']['net']);
        
        $this->assertEquals('Money' , $responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']['net']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']['net']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']['net']['currency']);
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('price', $responseContent['productVariants']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['productVariants']['edges'][$g]['node']['pricing']['price']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['productVariants']['edges'][$g]['node']['pricing']['price']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['productVariants']['edges'][$g]['node']['pricing']['price']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['pricing']['price']['gross']);
        
        $this->assertEquals('Money' , $responseContent['productVariants']['edges'][$g]['node']['pricing']['price']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['productVariants']['edges'][$g]['node']['pricing']['price']['gross']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['pricing']['price']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['productVariants']['edges'][$g]['node']['pricing']['price']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['productVariants']['edges'][$g]['node']['pricing']['price']['gross']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['pricing']['price']['gross']['currency']);
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['pricing']['price']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['productVariants']['edges'][$g]['node']['pricing']['price']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['pricing']['price']['net']);
        
        $this->assertEquals('Money' , $responseContent['productVariants']['edges'][$g]['node']['pricing']['price']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['productVariants']['edges'][$g]['node']['pricing']['price']['net']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['pricing']['price']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['productVariants']['edges'][$g]['node']['pricing']['price']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['productVariants']['edges'][$g]['node']['pricing']['price']['net']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['pricing']['price']['net']['currency']);
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['pricing']['price']['net']['currency']);
        
        }
        
        }
        
        $this->assertArrayHasKey('attributes', $responseContent['productVariants']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['attributes']);
        
        $this->assertIsArray($responseContent['productVariants']['edges'][$g]['node']['attributes']);
        
        for($f = 0; $f < count($responseContent['productVariants']['edges'][$g]['node']['attributes']); $f++) {
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]);
        
        $this->assertEquals('SelectedAttribute' , $responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['__typename']);
        
        $this->assertArrayHasKey('attribute', $responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['attribute']);
        
        $this->assertEquals('Attribute' , $responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['attribute']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['attribute']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['attribute']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['attribute']);
        
        if ($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['attribute']['name']) {
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['attribute']['name']);
        
        }
        
        $this->assertArrayHasKey('values', $responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values']);
        
        $this->assertIsArray($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values']);
        
        for($e = 0; $e < count($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values']); $e++) {
        
        if ($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values'][$e]) {
        
        $this->assertEquals('AttributeValue' , $responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values'][$e]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values'][$e]);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values'][$e]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values'][$e]);
        
        if ($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values'][$e]['name']) {
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values'][$e]['name']);
        
        }
        
        $this->assertArrayHasKey('value', $responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values'][$e]);
        
        if ($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values'][$e]['value']) {
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values'][$e]['value']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('product', $responseContent['productVariants']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['product']);
        
        $this->assertEquals('Product' , $responseContent['productVariants']['edges'][$g]['node']['product']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariants']['edges'][$g]['node']['product']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['product']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productVariants']['edges'][$g]['node']['product']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['product']['name']);
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['product']['name']);
        
        $this->assertArrayHasKey('thumbnail', $responseContent['productVariants']['edges'][$g]['node']['product']);
        
        if ($responseContent['productVariants']['edges'][$g]['node']['product']['thumbnail']) {
        
        $this->assertEquals('Image' , $responseContent['productVariants']['edges'][$g]['node']['product']['thumbnail']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['productVariants']['edges'][$g]['node']['product']['thumbnail']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['product']['thumbnail']['url']);
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['product']['thumbnail']['url']);
        
        $this->assertArrayHasKey('alt', $responseContent['productVariants']['edges'][$g]['node']['product']['thumbnail']);
        
        if ($responseContent['productVariants']['edges'][$g]['node']['product']['thumbnail']['alt']) {
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['product']['thumbnail']['alt']);
        
        }
        
        }
        
        $this->assertArrayHasKey('thumbnail2x', $responseContent['productVariants']['edges'][$g]['node']['product']);
        
        if ($responseContent['productVariants']['edges'][$g]['node']['product']['thumbnail2x']) {
        
        $this->assertEquals('Image' , $responseContent['productVariants']['edges'][$g]['node']['product']['thumbnail2x']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['productVariants']['edges'][$g]['node']['product']['thumbnail2x']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['product']['thumbnail2x']['url']);
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['product']['thumbnail2x']['url']);
        
        }
        
        $this->assertArrayHasKey('productType', $responseContent['productVariants']['edges'][$g]['node']['product']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['product']['productType']);
        
        $this->assertEquals('ProductType' , $responseContent['productVariants']['edges'][$g]['node']['product']['productType']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariants']['edges'][$g]['node']['product']['productType']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['product']['productType']['id']);
        
        $this->assertArrayHasKey('isShippingRequired', $responseContent['productVariants']['edges'][$g]['node']['product']['productType']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['product']['productType']['isShippingRequired']);
        
        $this->assertIsBool($responseContent['productVariants']['edges'][$g]['node']['product']['productType']['isShippingRequired']);
        
        }
        
        }
        

    }
}