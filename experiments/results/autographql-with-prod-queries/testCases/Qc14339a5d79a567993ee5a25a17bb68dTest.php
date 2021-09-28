<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qc14339a5d79a567993ee5a25a17bb68dTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment BasicProductFields on Product {\n  id\n  name\n  thumbnail {\n    url\n    alt\n    __typename\n  }\n  thumbnail2x: thumbnail(size: 510) {\n    url\n    __typename\n  }\n  __typename\n}\n\nfragment Price on TaxedMoney {\n  gross {\n    amount\n    currency\n    __typename\n  }\n  net {\n    amount\n    currency\n    __typename\n  }\n  __typename\n}\n\nfragment ProductPricingField on Product {\n  pricing {\n    onSale\n    priceRangeUndiscounted {\n      start {\n        ...Price\n        __typename\n      }\n      stop {\n        ...Price\n        __typename\n      }\n      __typename\n    }\n    priceRange {\n      start {\n        ...Price\n        __typename\n      }\n      stop {\n        ...Price\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nquery CategoryProducts($id: ID!, $attributes: [AttributeInput], $after: String, $pageSize: Int, $sortBy: ProductOrder, $priceLte: Float, $priceGte: Float) {\n  products(after: $after, first: $pageSize, sortBy: $sortBy, filter: {attributes: $attributes, categories: [$id], minimalPrice: {gte: $priceGte, lte: $priceLte}}) {\n    totalCount\n    edges {\n      node {\n        ...BasicProductFields\n        ...ProductPricingField\n        category {\n          id\n          name\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      endCursor\n      hasNextPage\n      hasPreviousPage\n      startCursor\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"attributes": [{"slug": "shoe-size", "value": "44"}, {"slug": "material", "value": "polyester"}, {"slug": "size", "value": "xl"}], "pageSize": 6, "priceGte": null, "priceLte": null, "sortBy": {"field": "NAME", "direction": "DESC"}, "id": "Q2F0ZWdvcnk6OQ=="}, "operationName": "CategoryProducts", "timesCalled": 1, "createdAt": "2021-09-05 13:54:50.847859+00:00", "updatedAt": "2021-09-05 13:54:50.847873+00:00"}
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
        
        $this->assertArrayHasKey('totalCount', $responseContent['products']);
        
        if ($responseContent['products']['totalCount']) {
        
        $this->assertIsInt($responseContent['products']['totalCount']);
        
        }
        
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
        
        $this->assertArrayHasKey('alt', $responseContent['products']['edges'][$g]['node']['thumbnail']);
        
        if ($responseContent['products']['edges'][$g]['node']['thumbnail']['alt']) {
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['thumbnail']['alt']);
        
        }
        
        }
        
        $this->assertArrayHasKey('thumbnail2x', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['thumbnail2x']) {
        
        $this->assertEquals('Image' , $responseContent['products']['edges'][$g]['node']['thumbnail2x']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['products']['edges'][$g]['node']['thumbnail2x']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['thumbnail2x']['url']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['thumbnail2x']['url']);
        
        }
        
        $this->assertArrayHasKey('pricing', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']) {
        
        $this->assertEquals('ProductPricingInfo' , $responseContent['products']['edges'][$g]['node']['pricing']['__typename']);
        
        $this->assertArrayHasKey('onSale', $responseContent['products']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']['onSale']) {
        
        $this->assertIsBool($responseContent['products']['edges'][$g]['node']['pricing']['onSale']);
        
        }
        
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
        
        $this->assertArrayHasKey('net', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']);
        
        $this->assertEquals('Money' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']['currency']);
        
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
        
        $this->assertArrayHasKey('net', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']);
        
        $this->assertEquals('Money' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']['currency']);
        
        }
        
        }
        
        $this->assertArrayHasKey('priceRange', $responseContent['products']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']) {
        
        $this->assertEquals('TaxedMoneyRange' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['__typename']);
        
        $this->assertArrayHasKey('start', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']);
        
        $this->assertEquals('Money' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']);
        
        $this->assertEquals('Money' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('stop', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']);
        
        $this->assertEquals('Money' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']);
        
        $this->assertEquals('Money' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']['currency']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('category', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['category']) {
        
        $this->assertEquals('Category' , $responseContent['products']['edges'][$g]['node']['category']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['products']['edges'][$g]['node']['category']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['category']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['products']['edges'][$g]['node']['category']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['category']['name']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['category']['name']);
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['products']);
        
        $this->assertNotNull($responseContent['products']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['products']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['products']['pageInfo']);
        
        if ($responseContent['products']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['products']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['products']['pageInfo']);
        
        $this->assertNotNull($responseContent['products']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['products']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['products']['pageInfo']);
        
        $this->assertNotNull($responseContent['products']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['products']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['products']['pageInfo']);
        
        if ($responseContent['products']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['products']['pageInfo']['startCursor']);
        
        }
        
        }
        

    }
}