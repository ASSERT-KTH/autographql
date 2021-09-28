<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qe9bbe4aa16cd58a2b98074811a65e6a5Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment BasicProductFields on Product {\n  id\n  name\n  thumbnail {\n    url\n    alt\n    __typename\n  }\n  thumbnail2x: thumbnail(size: 510) {\n    url\n    __typename\n  }\n  __typename\n}\n\nfragment Price on TaxedMoney {\n  gross {\n    amount\n    currency\n    __typename\n  }\n  net {\n    amount\n    currency\n    __typename\n  }\n  __typename\n}\n\nfragment ProductPricingField on Product {\n  pricing {\n    onSale\n    priceRangeUndiscounted {\n      start {\n        ...Price\n        __typename\n      }\n      stop {\n        ...Price\n        __typename\n      }\n      __typename\n    }\n    priceRange {\n      start {\n        ...Price\n        __typename\n      }\n      stop {\n        ...Price\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nquery CollectionProducts($id: ID!, $attributes: [AttributeInput], $after: String, $pageSize: Int, $sortBy: ProductOrder, $priceLte: Float, $priceGte: Float) {\n  collection(id: $id) {\n    id\n    products(after: $after, first: $pageSize, sortBy: $sortBy, filter: {attributes: $attributes, minimalPrice: {gte: $priceGte, lte: $priceLte}}) {\n      totalCount\n      edges {\n        node {\n          ...BasicProductFields\n          ...ProductPricingField\n          category {\n            id\n            name\n            __typename\n          }\n          __typename\n        }\n        __typename\n      }\n      pageInfo {\n        endCursor\n        hasNextPage\n        hasPreviousPage\n        startCursor\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"attributes": [{"slug": "color", "value": "blue"}], "pageSize": 6, "priceGte": null, "priceLte": null, "sortBy": null, "id": "Q29sbGVjdGlvbjoz"}, "operationName": "CollectionProducts", "timesCalled": 2, "createdAt": "2021-09-04 20:23:45.352094+00:00", "updatedAt": "2021-09-04 20:29:04.259563+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('collection', $responseContent);
        
        if ($responseContent['collection']) {
        
        $this->assertEquals('Collection' , $responseContent['collection']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['collection']);
        
        $this->assertNotNull($responseContent['collection']['id']);
        
        $this->assertArrayHasKey('products', $responseContent['collection']);
        
        if ($responseContent['collection']['products']) {
        
        $this->assertEquals('ProductCountableConnection' , $responseContent['collection']['products']['__typename']);
        
        $this->assertArrayHasKey('totalCount', $responseContent['collection']['products']);
        
        if ($responseContent['collection']['products']['totalCount']) {
        
        $this->assertIsInt($responseContent['collection']['products']['totalCount']);
        
        }
        
        $this->assertArrayHasKey('edges', $responseContent['collection']['products']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges']);
        
        $this->assertIsArray($responseContent['collection']['products']['edges']);
        
        for($g = 0; $g < count($responseContent['collection']['products']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]);
        
        $this->assertEquals('ProductCountableEdge' , $responseContent['collection']['products']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['collection']['products']['edges'][$g]);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']);
        
        $this->assertEquals('Product' , $responseContent['collection']['products']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['collection']['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['collection']['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['collection']['products']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('thumbnail', $responseContent['collection']['products']['edges'][$g]['node']);
        
        if ($responseContent['collection']['products']['edges'][$g]['node']['thumbnail']) {
        
        $this->assertEquals('Image' , $responseContent['collection']['products']['edges'][$g]['node']['thumbnail']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['collection']['products']['edges'][$g]['node']['thumbnail']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['thumbnail']['url']);
        
        $this->assertIsString($responseContent['collection']['products']['edges'][$g]['node']['thumbnail']['url']);
        
        $this->assertArrayHasKey('alt', $responseContent['collection']['products']['edges'][$g]['node']['thumbnail']);
        
        if ($responseContent['collection']['products']['edges'][$g]['node']['thumbnail']['alt']) {
        
        $this->assertIsString($responseContent['collection']['products']['edges'][$g]['node']['thumbnail']['alt']);
        
        }
        
        }
        
        $this->assertArrayHasKey('thumbnail2x', $responseContent['collection']['products']['edges'][$g]['node']);
        
        if ($responseContent['collection']['products']['edges'][$g]['node']['thumbnail2x']) {
        
        $this->assertEquals('Image' , $responseContent['collection']['products']['edges'][$g]['node']['thumbnail2x']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['collection']['products']['edges'][$g]['node']['thumbnail2x']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['thumbnail2x']['url']);
        
        $this->assertIsString($responseContent['collection']['products']['edges'][$g]['node']['thumbnail2x']['url']);
        
        }
        
        $this->assertArrayHasKey('pricing', $responseContent['collection']['products']['edges'][$g]['node']);
        
        if ($responseContent['collection']['products']['edges'][$g]['node']['pricing']) {
        
        $this->assertEquals('ProductPricingInfo' , $responseContent['collection']['products']['edges'][$g]['node']['pricing']['__typename']);
        
        $this->assertArrayHasKey('onSale', $responseContent['collection']['products']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['collection']['products']['edges'][$g]['node']['pricing']['onSale']) {
        
        $this->assertIsBool($responseContent['collection']['products']['edges'][$g]['node']['pricing']['onSale']);
        
        }
        
        $this->assertArrayHasKey('priceRangeUndiscounted', $responseContent['collection']['products']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']) {
        
        $this->assertEquals('TaxedMoneyRange' , $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['__typename']);
        
        $this->assertArrayHasKey('start', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']);
        
        if ($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertEquals('Money' , $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['currency']);
        
        $this->assertIsString($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']);
        
        $this->assertEquals('Money' , $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']['currency']);
        
        $this->assertIsString($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('stop', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']);
        
        if ($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertEquals('Money' , $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['currency']);
        
        $this->assertIsString($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']);
        
        $this->assertEquals('Money' , $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']['currency']);
        
        $this->assertIsString($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']['currency']);
        
        }
        
        }
        
        $this->assertArrayHasKey('priceRange', $responseContent['collection']['products']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']) {
        
        $this->assertEquals('TaxedMoneyRange' , $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['__typename']);
        
        $this->assertArrayHasKey('start', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']);
        
        if ($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['start']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['start']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']);
        
        $this->assertEquals('Money' , $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['currency']);
        
        $this->assertIsString($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['start']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']);
        
        $this->assertEquals('Money' , $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['currency']);
        
        $this->assertIsString($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('stop', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']);
        
        if ($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']);
        
        $this->assertEquals('Money' , $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['currency']);
        
        $this->assertIsString($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']);
        
        $this->assertEquals('Money' , $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']['currency']);
        
        $this->assertIsString($responseContent['collection']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']['currency']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('category', $responseContent['collection']['products']['edges'][$g]['node']);
        
        if ($responseContent['collection']['products']['edges'][$g]['node']['category']) {
        
        $this->assertEquals('Category' , $responseContent['collection']['products']['edges'][$g]['node']['category']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['collection']['products']['edges'][$g]['node']['category']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['category']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['collection']['products']['edges'][$g]['node']['category']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['category']['name']);
        
        $this->assertIsString($responseContent['collection']['products']['edges'][$g]['node']['category']['name']);
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['collection']['products']);
        
        $this->assertNotNull($responseContent['collection']['products']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['collection']['products']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['collection']['products']['pageInfo']);
        
        if ($responseContent['collection']['products']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['collection']['products']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['collection']['products']['pageInfo']);
        
        $this->assertNotNull($responseContent['collection']['products']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['collection']['products']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['collection']['products']['pageInfo']);
        
        $this->assertNotNull($responseContent['collection']['products']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['collection']['products']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['collection']['products']['pageInfo']);
        
        if ($responseContent['collection']['products']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['collection']['products']['pageInfo']['startCursor']);
        
        }
        
        }
        
        }
        

    }
}