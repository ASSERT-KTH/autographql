<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qf574387795d556bba800658b040ab48fTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment Money on Money {\n  amount\n  currency\n  __typename\n}\n\nfragment ProductFragment on Product {\n  id\n  name\n  thumbnail {\n    url\n    __typename\n  }\n  isAvailable\n  isPublished\n  productType {\n    id\n    name\n    hasVariants\n    __typename\n  }\n  __typename\n}\n\nquery ProductList($first: Int, $after: String, $last: Int, $before: String, $filter: ProductFilterInput, $sort: ProductOrder) {\n  products(before: $before, after: $after, first: $first, last: $last, filter: $filter, sortBy: $sort) {\n    edges {\n      node {\n        ...ProductFragment\n        attributes {\n          attribute {\n            id\n            __typename\n          }\n          values {\n            id\n            name\n            __typename\n          }\n          __typename\n        }\n        pricing {\n          priceRangeUndiscounted {\n            start {\n              gross {\n                ...Money\n                __typename\n              }\n              __typename\n            }\n            stop {\n              gross {\n                ...Money\n                __typename\n              }\n              __typename\n            }\n            __typename\n          }\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      hasPreviousPage\n      hasNextPage\n      startCursor\n      endCursor\n      __typename\n    }\n    totalCount\n    __typename\n  }\n}\n", "variables": {"first": 100, "filter": {"attributes": null, "categories": null, "collections": null, "isPublished": true, "price": null, "productTypes": null, "stockAvailability": null}, "sort": {"direction": "ASC", "field": "NAME"}}, "operationName": "ProductList", "timesCalled": 2, "createdAt": "2021-09-04 19:55:11.871121+00:00", "updatedAt": "2021-09-04 20:29:05.573160+00:00"}
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
        
        $this->assertArrayHasKey('thumbnail', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['thumbnail']) {
        
        $this->assertEquals('Image' , $responseContent['products']['edges'][$g]['node']['thumbnail']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['products']['edges'][$g]['node']['thumbnail']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['thumbnail']['url']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['thumbnail']['url']);
        
        }
        
        $this->assertArrayHasKey('isAvailable', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['isAvailable']) {
        
        $this->assertIsBool($responseContent['products']['edges'][$g]['node']['isAvailable']);
        
        }
        
        $this->assertArrayHasKey('isPublished', $responseContent['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['isPublished']);
        
        $this->assertIsBool($responseContent['products']['edges'][$g]['node']['isPublished']);
        
        $this->assertArrayHasKey('productType', $responseContent['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['productType']);
        
        $this->assertEquals('ProductType' , $responseContent['products']['edges'][$g]['node']['productType']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['products']['edges'][$g]['node']['productType']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['productType']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['products']['edges'][$g]['node']['productType']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['productType']['name']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['productType']['name']);
        
        $this->assertArrayHasKey('hasVariants', $responseContent['products']['edges'][$g]['node']['productType']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['productType']['hasVariants']);
        
        $this->assertIsBool($responseContent['products']['edges'][$g]['node']['productType']['hasVariants']);
        
        $this->assertArrayHasKey('attributes', $responseContent['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['attributes']);
        
        $this->assertIsArray($responseContent['products']['edges'][$g]['node']['attributes']);
        
        for($f = 0; $f < count($responseContent['products']['edges'][$g]['node']['attributes']); $f++) {
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['attributes'][$f]);
        
        $this->assertEquals('SelectedAttribute' , $responseContent['products']['edges'][$g]['node']['attributes'][$f]['__typename']);
        
        $this->assertArrayHasKey('attribute', $responseContent['products']['edges'][$g]['node']['attributes'][$f]);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['attributes'][$f]['attribute']);
        
        $this->assertEquals('Attribute' , $responseContent['products']['edges'][$g]['node']['attributes'][$f]['attribute']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['products']['edges'][$g]['node']['attributes'][$f]['attribute']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['attributes'][$f]['attribute']['id']);
        
        $this->assertArrayHasKey('values', $responseContent['products']['edges'][$g]['node']['attributes'][$f]);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['attributes'][$f]['values']);
        
        $this->assertIsArray($responseContent['products']['edges'][$g]['node']['attributes'][$f]['values']);
        
        for($e = 0; $e < count($responseContent['products']['edges'][$g]['node']['attributes'][$f]['values']); $e++) {
        
        if ($responseContent['products']['edges'][$g]['node']['attributes'][$f]['values'][$e]) {
        
        $this->assertEquals('AttributeValue' , $responseContent['products']['edges'][$g]['node']['attributes'][$f]['values'][$e]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['products']['edges'][$g]['node']['attributes'][$f]['values'][$e]);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['attributes'][$f]['values'][$e]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['products']['edges'][$g]['node']['attributes'][$f]['values'][$e]);
        
        if ($responseContent['products']['edges'][$g]['node']['attributes'][$f]['values'][$e]['name']) {
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['attributes'][$f]['values'][$e]['name']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('pricing', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']) {
        
        $this->assertEquals('ProductPricingInfo' , $responseContent['products']['edges'][$g]['node']['pricing']['__typename']);
        
        $this->assertArrayHasKey('priceRangeUndiscounted', $responseContent['products']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']) {
        
        $this->assertEquals('TaxedMoneyRange' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['__typename']);
        
        $this->assertArrayHasKey('start', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertEquals('Money' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['currency']);
        
        }
        
        $this->assertArrayHasKey('stop', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertEquals('Money' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['currency']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['products']);
        
        $this->assertNotNull($responseContent['products']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['products']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['products']['pageInfo']);
        
        $this->assertNotNull($responseContent['products']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['products']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['products']['pageInfo']);
        
        $this->assertNotNull($responseContent['products']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['products']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['products']['pageInfo']);
        
        if ($responseContent['products']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['products']['pageInfo']['startCursor']);
        
        }
        
        $this->assertArrayHasKey('endCursor', $responseContent['products']['pageInfo']);
        
        if ($responseContent['products']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['products']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('totalCount', $responseContent['products']);
        
        if ($responseContent['products']['totalCount']) {
        
        $this->assertIsInt($responseContent['products']['totalCount']);
        
        }
        
        }
        

    }
}