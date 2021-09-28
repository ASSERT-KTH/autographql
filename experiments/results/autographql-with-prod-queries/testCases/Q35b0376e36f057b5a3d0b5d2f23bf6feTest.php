<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q35b0376e36f057b5a3d0b5d2f23bf6feTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment BasicProductFields on Product {\n  id\n  name\n  thumbnail {\n    url\n    alt\n    __typename\n  }\n  thumbnail2x: thumbnail(size: 510) {\n    url\n    __typename\n  }\n  __typename\n}\n\nfragment SelectedAttributeFields on SelectedAttribute {\n  attribute {\n    id\n    name\n    __typename\n  }\n  values {\n    id\n    name\n    __typename\n  }\n  __typename\n}\n\nfragment Price on TaxedMoney {\n  gross {\n    amount\n    currency\n    __typename\n  }\n  net {\n    amount\n    currency\n    __typename\n  }\n  __typename\n}\n\nfragment ProductVariantFields on ProductVariant {\n  id\n  sku\n  name\n  isAvailable\n  quantityAvailable(countryCode: $countryCode)\n  images {\n    id\n    url\n    alt\n    __typename\n  }\n  pricing {\n    onSale\n    priceUndiscounted {\n      ...Price\n      __typename\n    }\n    price {\n      ...Price\n      __typename\n    }\n    __typename\n  }\n  attributes {\n    attribute {\n      id\n      name\n      slug\n      __typename\n    }\n    values {\n      id\n      name\n      value: name\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nfragment ProductPricingField on Product {\n  pricing {\n    onSale\n    priceRangeUndiscounted {\n      start {\n        ...Price\n        __typename\n      }\n      stop {\n        ...Price\n        __typename\n      }\n      __typename\n    }\n    priceRange {\n      start {\n        ...Price\n        __typename\n      }\n      stop {\n        ...Price\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nquery ProductDetails($id: ID!, $countryCode: CountryCode) {\n  product(id: $id) {\n    ...BasicProductFields\n    ...ProductPricingField\n    descriptionJson\n    category {\n      id\n      name\n      products(first: 3) {\n        edges {\n          node {\n            ...BasicProductFields\n            ...ProductPricingField\n            __typename\n          }\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    images {\n      id\n      alt\n      url\n      __typename\n    }\n    attributes {\n      ...SelectedAttributeFields\n      __typename\n    }\n    variants {\n      ...ProductVariantFields\n      __typename\n    }\n    seoDescription\n    seoTitle\n    isAvailable\n    isAvailableForPurchase\n    availableForPurchase\n    __typename\n  }\n}\n", "variables": {"id": "UHJvZHVjdDoxMjU="}, "operationName": "ProductDetails", "timesCalled": 2, "createdAt": "2021-09-04 19:01:50.176901+00:00", "updatedAt": "2021-09-04 20:28:48.593388+00:00"}
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
        
        $this->assertArrayHasKey('name', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['name']);
        
        $this->assertIsString($responseContent['product']['name']);
        
        $this->assertArrayHasKey('thumbnail', $responseContent['product']);
        
        if ($responseContent['product']['thumbnail']) {
        
        $this->assertEquals('Image' , $responseContent['product']['thumbnail']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['product']['thumbnail']);
        
        $this->assertNotNull($responseContent['product']['thumbnail']['url']);
        
        $this->assertIsString($responseContent['product']['thumbnail']['url']);
        
        $this->assertArrayHasKey('alt', $responseContent['product']['thumbnail']);
        
        if ($responseContent['product']['thumbnail']['alt']) {
        
        $this->assertIsString($responseContent['product']['thumbnail']['alt']);
        
        }
        
        }
        
        $this->assertArrayHasKey('thumbnail2x', $responseContent['product']);
        
        if ($responseContent['product']['thumbnail2x']) {
        
        $this->assertEquals('Image' , $responseContent['product']['thumbnail2x']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['product']['thumbnail2x']);
        
        $this->assertNotNull($responseContent['product']['thumbnail2x']['url']);
        
        $this->assertIsString($responseContent['product']['thumbnail2x']['url']);
        
        }
        
        $this->assertArrayHasKey('pricing', $responseContent['product']);
        
        if ($responseContent['product']['pricing']) {
        
        $this->assertEquals('ProductPricingInfo' , $responseContent['product']['pricing']['__typename']);
        
        $this->assertArrayHasKey('onSale', $responseContent['product']['pricing']);
        
        if ($responseContent['product']['pricing']['onSale']) {
        
        $this->assertIsBool($responseContent['product']['pricing']['onSale']);
        
        }
        
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
        
        $this->assertArrayHasKey('net', $responseContent['product']['pricing']['priceRangeUndiscounted']['start']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRangeUndiscounted']['start']['net']);
        
        $this->assertEquals('Money' , $responseContent['product']['pricing']['priceRangeUndiscounted']['start']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['pricing']['priceRangeUndiscounted']['start']['net']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRangeUndiscounted']['start']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['pricing']['priceRangeUndiscounted']['start']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['pricing']['priceRangeUndiscounted']['start']['net']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRangeUndiscounted']['start']['net']['currency']);
        
        $this->assertIsString($responseContent['product']['pricing']['priceRangeUndiscounted']['start']['net']['currency']);
        
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
        
        $this->assertArrayHasKey('net', $responseContent['product']['pricing']['priceRangeUndiscounted']['stop']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['net']);
        
        $this->assertEquals('Money' , $responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['net']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['net']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['net']['currency']);
        
        $this->assertIsString($responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['net']['currency']);
        
        }
        
        }
        
        $this->assertArrayHasKey('priceRange', $responseContent['product']['pricing']);
        
        if ($responseContent['product']['pricing']['priceRange']) {
        
        $this->assertEquals('TaxedMoneyRange' , $responseContent['product']['pricing']['priceRange']['__typename']);
        
        $this->assertArrayHasKey('start', $responseContent['product']['pricing']['priceRange']);
        
        if ($responseContent['product']['pricing']['priceRange']['start']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['product']['pricing']['priceRange']['start']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['product']['pricing']['priceRange']['start']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRange']['start']['gross']);
        
        $this->assertEquals('Money' , $responseContent['product']['pricing']['priceRange']['start']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['pricing']['priceRange']['start']['gross']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRange']['start']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['pricing']['priceRange']['start']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['pricing']['priceRange']['start']['gross']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRange']['start']['gross']['currency']);
        
        $this->assertIsString($responseContent['product']['pricing']['priceRange']['start']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['product']['pricing']['priceRange']['start']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRange']['start']['net']);
        
        $this->assertEquals('Money' , $responseContent['product']['pricing']['priceRange']['start']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['pricing']['priceRange']['start']['net']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRange']['start']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['pricing']['priceRange']['start']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['pricing']['priceRange']['start']['net']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRange']['start']['net']['currency']);
        
        $this->assertIsString($responseContent['product']['pricing']['priceRange']['start']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('stop', $responseContent['product']['pricing']['priceRange']);
        
        if ($responseContent['product']['pricing']['priceRange']['stop']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['product']['pricing']['priceRange']['stop']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['product']['pricing']['priceRange']['stop']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRange']['stop']['gross']);
        
        $this->assertEquals('Money' , $responseContent['product']['pricing']['priceRange']['stop']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['pricing']['priceRange']['stop']['gross']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRange']['stop']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['pricing']['priceRange']['stop']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['pricing']['priceRange']['stop']['gross']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRange']['stop']['gross']['currency']);
        
        $this->assertIsString($responseContent['product']['pricing']['priceRange']['stop']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['product']['pricing']['priceRange']['stop']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRange']['stop']['net']);
        
        $this->assertEquals('Money' , $responseContent['product']['pricing']['priceRange']['stop']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['pricing']['priceRange']['stop']['net']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRange']['stop']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['pricing']['priceRange']['stop']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['pricing']['priceRange']['stop']['net']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRange']['stop']['net']['currency']);
        
        $this->assertIsString($responseContent['product']['pricing']['priceRange']['stop']['net']['currency']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('descriptionJson', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['descriptionJson']);
        
        $this->assertArrayHasKey('category', $responseContent['product']);
        
        if ($responseContent['product']['category']) {
        
        $this->assertEquals('Category' , $responseContent['product']['category']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['category']);
        
        $this->assertNotNull($responseContent['product']['category']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['category']);
        
        $this->assertNotNull($responseContent['product']['category']['name']);
        
        $this->assertIsString($responseContent['product']['category']['name']);
        
        $this->assertArrayHasKey('products', $responseContent['product']['category']);
        
        if ($responseContent['product']['category']['products']) {
        
        $this->assertEquals('ProductCountableConnection' , $responseContent['product']['category']['products']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['product']['category']['products']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges']);
        
        $this->assertIsArray($responseContent['product']['category']['products']['edges']);
        
        for($g = 0; $g < count($responseContent['product']['category']['products']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]);
        
        $this->assertEquals('ProductCountableEdge' , $responseContent['product']['category']['products']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['product']['category']['products']['edges'][$g]);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']);
        
        $this->assertEquals('Product' , $responseContent['product']['category']['products']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['category']['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['category']['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['product']['category']['products']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('thumbnail', $responseContent['product']['category']['products']['edges'][$g]['node']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['thumbnail']) {
        
        $this->assertEquals('Image' , $responseContent['product']['category']['products']['edges'][$g]['node']['thumbnail']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['product']['category']['products']['edges'][$g]['node']['thumbnail']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['thumbnail']['url']);
        
        $this->assertIsString($responseContent['product']['category']['products']['edges'][$g]['node']['thumbnail']['url']);
        
        $this->assertArrayHasKey('alt', $responseContent['product']['category']['products']['edges'][$g]['node']['thumbnail']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['thumbnail']['alt']) {
        
        $this->assertIsString($responseContent['product']['category']['products']['edges'][$g]['node']['thumbnail']['alt']);
        
        }
        
        }
        
        $this->assertArrayHasKey('thumbnail2x', $responseContent['product']['category']['products']['edges'][$g]['node']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['thumbnail2x']) {
        
        $this->assertEquals('Image' , $responseContent['product']['category']['products']['edges'][$g]['node']['thumbnail2x']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['product']['category']['products']['edges'][$g]['node']['thumbnail2x']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['thumbnail2x']['url']);
        
        $this->assertIsString($responseContent['product']['category']['products']['edges'][$g]['node']['thumbnail2x']['url']);
        
        }
        
        $this->assertArrayHasKey('pricing', $responseContent['product']['category']['products']['edges'][$g]['node']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']) {
        
        $this->assertEquals('ProductPricingInfo' , $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['__typename']);
        
        $this->assertArrayHasKey('onSale', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['onSale']) {
        
        $this->assertIsBool($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['onSale']);
        
        }
        
        $this->assertArrayHasKey('priceRangeUndiscounted', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']) {
        
        $this->assertEquals('TaxedMoneyRange' , $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['__typename']);
        
        $this->assertArrayHasKey('start', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertEquals('Money' , $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['currency']);
        
        $this->assertIsString($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']);
        
        $this->assertEquals('Money' , $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']['currency']);
        
        $this->assertIsString($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('stop', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertEquals('Money' , $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['currency']);
        
        $this->assertIsString($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']);
        
        $this->assertEquals('Money' , $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']['currency']);
        
        $this->assertIsString($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']['currency']);
        
        }
        
        }
        
        $this->assertArrayHasKey('priceRange', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']) {
        
        $this->assertEquals('TaxedMoneyRange' , $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['__typename']);
        
        $this->assertArrayHasKey('start', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']);
        
        $this->assertEquals('Money' , $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['currency']);
        
        $this->assertIsString($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']);
        
        $this->assertEquals('Money' , $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['currency']);
        
        $this->assertIsString($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('stop', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']);
        
        $this->assertEquals('Money' , $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['currency']);
        
        $this->assertIsString($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']);
        
        $this->assertEquals('Money' , $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']['currency']);
        
        $this->assertIsString($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']['currency']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('images', $responseContent['product']);
        
        if ($responseContent['product']['images']) {
        
        $this->assertIsArray($responseContent['product']['images']);
        
        for($g = 0; $g < count($responseContent['product']['images']); $g++) {
        
        if ($responseContent['product']['images'][$g]) {
        
        $this->assertEquals('ProductImage' , $responseContent['product']['images'][$g]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['images'][$g]);
        
        $this->assertNotNull($responseContent['product']['images'][$g]['id']);
        
        $this->assertArrayHasKey('alt', $responseContent['product']['images'][$g]);
        
        $this->assertNotNull($responseContent['product']['images'][$g]['alt']);
        
        $this->assertIsString($responseContent['product']['images'][$g]['alt']);
        
        $this->assertArrayHasKey('url', $responseContent['product']['images'][$g]);
        
        $this->assertNotNull($responseContent['product']['images'][$g]['url']);
        
        $this->assertIsString($responseContent['product']['images'][$g]['url']);
        
        }
        
        }
        
        }
        
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
        
        $this->assertArrayHasKey('name', $responseContent['product']['attributes'][$g]['attribute']);
        
        if ($responseContent['product']['attributes'][$g]['attribute']['name']) {
        
        $this->assertIsString($responseContent['product']['attributes'][$g]['attribute']['name']);
        
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
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('variants', $responseContent['product']);
        
        if ($responseContent['product']['variants']) {
        
        $this->assertIsArray($responseContent['product']['variants']);
        
        for($g = 0; $g < count($responseContent['product']['variants']); $g++) {
        
        if ($responseContent['product']['variants'][$g]) {
        
        $this->assertEquals('ProductVariant' , $responseContent['product']['variants'][$g]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['variants'][$g]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['id']);
        
        $this->assertArrayHasKey('sku', $responseContent['product']['variants'][$g]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['sku']);
        
        $this->assertIsString($responseContent['product']['variants'][$g]['sku']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['variants'][$g]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['name']);
        
        $this->assertIsString($responseContent['product']['variants'][$g]['name']);
        
        $this->assertArrayHasKey('quantityAvailable', $responseContent['product']['variants'][$g]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['quantityAvailable']);
        
        $this->assertIsInt($responseContent['product']['variants'][$g]['quantityAvailable']);
        
        $this->assertArrayHasKey('images', $responseContent['product']['variants'][$g]);
        
        if ($responseContent['product']['variants'][$g]['images']) {
        
        $this->assertIsArray($responseContent['product']['variants'][$g]['images']);
        
        for($f = 0; $f < count($responseContent['product']['variants'][$g]['images']); $f++) {
        
        if ($responseContent['product']['variants'][$g]['images'][$f]) {
        
        $this->assertEquals('ProductImage' , $responseContent['product']['variants'][$g]['images'][$f]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['variants'][$g]['images'][$f]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['images'][$f]['id']);
        
        $this->assertArrayHasKey('url', $responseContent['product']['variants'][$g]['images'][$f]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['images'][$f]['url']);
        
        $this->assertIsString($responseContent['product']['variants'][$g]['images'][$f]['url']);
        
        $this->assertArrayHasKey('alt', $responseContent['product']['variants'][$g]['images'][$f]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['images'][$f]['alt']);
        
        $this->assertIsString($responseContent['product']['variants'][$g]['images'][$f]['alt']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('pricing', $responseContent['product']['variants'][$g]);
        
        if ($responseContent['product']['variants'][$g]['pricing']) {
        
        $this->assertEquals('VariantPricingInfo' , $responseContent['product']['variants'][$g]['pricing']['__typename']);
        
        $this->assertArrayHasKey('onSale', $responseContent['product']['variants'][$g]['pricing']);
        
        if ($responseContent['product']['variants'][$g]['pricing']['onSale']) {
        
        $this->assertIsBool($responseContent['product']['variants'][$g]['pricing']['onSale']);
        
        }
        
        $this->assertArrayHasKey('priceUndiscounted', $responseContent['product']['variants'][$g]['pricing']);
        
        if ($responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['gross']);
        
        $this->assertEquals('Money' , $responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['gross']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['gross']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['gross']['currency']);
        
        $this->assertIsString($responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['net']);
        
        $this->assertEquals('Money' , $responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['net']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['net']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['net']['currency']);
        
        $this->assertIsString($responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('price', $responseContent['product']['variants'][$g]['pricing']);
        
        if ($responseContent['product']['variants'][$g]['pricing']['price']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['product']['variants'][$g]['pricing']['price']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['product']['variants'][$g]['pricing']['price']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['price']['gross']);
        
        $this->assertEquals('Money' , $responseContent['product']['variants'][$g]['pricing']['price']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['variants'][$g]['pricing']['price']['gross']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['price']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['variants'][$g]['pricing']['price']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['variants'][$g]['pricing']['price']['gross']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['price']['gross']['currency']);
        
        $this->assertIsString($responseContent['product']['variants'][$g]['pricing']['price']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['product']['variants'][$g]['pricing']['price']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['price']['net']);
        
        $this->assertEquals('Money' , $responseContent['product']['variants'][$g]['pricing']['price']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['variants'][$g]['pricing']['price']['net']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['price']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['variants'][$g]['pricing']['price']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['variants'][$g]['pricing']['price']['net']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['price']['net']['currency']);
        
        $this->assertIsString($responseContent['product']['variants'][$g]['pricing']['price']['net']['currency']);
        
        }
        
        }
        
        $this->assertArrayHasKey('attributes', $responseContent['product']['variants'][$g]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['attributes']);
        
        $this->assertIsArray($responseContent['product']['variants'][$g]['attributes']);
        
        for($f = 0; $f < count($responseContent['product']['variants'][$g]['attributes']); $f++) {
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['attributes'][$f]);
        
        $this->assertEquals('SelectedAttribute' , $responseContent['product']['variants'][$g]['attributes'][$f]['__typename']);
        
        $this->assertArrayHasKey('attribute', $responseContent['product']['variants'][$g]['attributes'][$f]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['attributes'][$f]['attribute']);
        
        $this->assertEquals('Attribute' , $responseContent['product']['variants'][$g]['attributes'][$f]['attribute']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['variants'][$g]['attributes'][$f]['attribute']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['attributes'][$f]['attribute']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['variants'][$g]['attributes'][$f]['attribute']);
        
        if ($responseContent['product']['variants'][$g]['attributes'][$f]['attribute']['name']) {
        
        $this->assertIsString($responseContent['product']['variants'][$g]['attributes'][$f]['attribute']['name']);
        
        }
        
        $this->assertArrayHasKey('slug', $responseContent['product']['variants'][$g]['attributes'][$f]['attribute']);
        
        if ($responseContent['product']['variants'][$g]['attributes'][$f]['attribute']['slug']) {
        
        $this->assertIsString($responseContent['product']['variants'][$g]['attributes'][$f]['attribute']['slug']);
        
        }
        
        $this->assertArrayHasKey('values', $responseContent['product']['variants'][$g]['attributes'][$f]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['attributes'][$f]['values']);
        
        $this->assertIsArray($responseContent['product']['variants'][$g]['attributes'][$f]['values']);
        
        for($e = 0; $e < count($responseContent['product']['variants'][$g]['attributes'][$f]['values']); $e++) {
        
        if ($responseContent['product']['variants'][$g]['attributes'][$f]['values'][$e]) {
        
        $this->assertEquals('AttributeValue' , $responseContent['product']['variants'][$g]['attributes'][$f]['values'][$e]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['variants'][$g]['attributes'][$f]['values'][$e]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['attributes'][$f]['values'][$e]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['variants'][$g]['attributes'][$f]['values'][$e]);
        
        if ($responseContent['product']['variants'][$g]['attributes'][$f]['values'][$e]['name']) {
        
        $this->assertIsString($responseContent['product']['variants'][$g]['attributes'][$f]['values'][$e]['name']);
        
        }
        
        $this->assertArrayHasKey('value', $responseContent['product']['variants'][$g]['attributes'][$f]['values'][$e]);
        
        if ($responseContent['product']['variants'][$g]['attributes'][$f]['values'][$e]['value']) {
        
        $this->assertIsString($responseContent['product']['variants'][$g]['attributes'][$f]['values'][$e]['value']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('seoDescription', $responseContent['product']);
        
        if ($responseContent['product']['seoDescription']) {
        
        $this->assertIsString($responseContent['product']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('seoTitle', $responseContent['product']);
        
        if ($responseContent['product']['seoTitle']) {
        
        $this->assertIsString($responseContent['product']['seoTitle']);
        
        }
        
        $this->assertArrayHasKey('isAvailable', $responseContent['product']);
        
        if ($responseContent['product']['isAvailable']) {
        
        $this->assertIsBool($responseContent['product']['isAvailable']);
        
        }
        
        $this->assertArrayHasKey('isAvailableForPurchase', $responseContent['product']);
        
        if ($responseContent['product']['isAvailableForPurchase']) {
        
        $this->assertIsBool($responseContent['product']['isAvailableForPurchase']);
        
        }
        
        $this->assertArrayHasKey('availableForPurchase', $responseContent['product']);
        
        if ($responseContent['product']['availableForPurchase']) {
        
        }
        
        }
        

    }
}