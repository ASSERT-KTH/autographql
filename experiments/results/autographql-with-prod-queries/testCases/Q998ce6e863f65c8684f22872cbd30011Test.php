<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q998ce6e863f65c8684f22872cbd30011Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment Money on Money {\n  amount\n  currency\n  __typename\n}\n\nfragment CategoryFragment on Category {\n  id\n  name\n  children {\n    totalCount\n    __typename\n  }\n  products {\n    totalCount\n    __typename\n  }\n  __typename\n}\n\nfragment MetadataItem on MetadataItem {\n  key\n  value\n  __typename\n}\n\nfragment MetadataFragment on ObjectWithMetadata {\n  metadata {\n    ...MetadataItem\n    __typename\n  }\n  privateMetadata {\n    ...MetadataItem\n    __typename\n  }\n  __typename\n}\n\nfragment CategoryDetailsFragment on Category {\n  id\n  ...MetadataFragment\n  backgroundImage {\n    alt\n    url\n    __typename\n  }\n  name\n  slug\n  descriptionJson\n  seoDescription\n  seoTitle\n  parent {\n    id\n    __typename\n  }\n  __typename\n}\n\nfragment PageInfoFragment on PageInfo {\n  endCursor\n  hasNextPage\n  hasPreviousPage\n  startCursor\n  __typename\n}\n\nquery CategoryDetails($id: ID!, $first: Int, $after: String, $last: Int, $before: String) {\n  category(id: $id) {\n    ...CategoryDetailsFragment\n    children(first: $first, after: $after, last: $last, before: $before) {\n      edges {\n        node {\n          ...CategoryFragment\n          __typename\n        }\n        __typename\n      }\n      pageInfo {\n        ...PageInfoFragment\n        __typename\n      }\n      __typename\n    }\n    products(first: $first, after: $after, last: $last, before: $before) {\n      pageInfo {\n        ...PageInfoFragment\n        __typename\n      }\n      edges {\n        cursor\n        node {\n          id\n          name\n          isAvailable\n          thumbnail {\n            url\n            __typename\n          }\n          productType {\n            id\n            name\n            __typename\n          }\n          pricing {\n            priceRangeUndiscounted {\n              start {\n                gross {\n                  ...Money\n                  __typename\n                }\n                __typename\n              }\n              stop {\n                gross {\n                  ...Money\n                  __typename\n                }\n                __typename\n              }\n              __typename\n            }\n            __typename\n          }\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 20, "id": "Q2F0ZWdvcnk6Nw=="}, "operationName": "CategoryDetails", "timesCalled": 2, "createdAt": "2021-09-04 18:52:49.176050+00:00", "updatedAt": "2021-09-04 20:28:56.416884+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('category', $responseContent);
        
        if ($responseContent['category']) {
        
        $this->assertEquals('Category' , $responseContent['category']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['category']);
        
        $this->assertNotNull($responseContent['category']['id']);
        
        $this->assertArrayHasKey('metadata', $responseContent['category']);
        
        $this->assertNotNull($responseContent['category']['metadata']);
        
        $this->assertIsArray($responseContent['category']['metadata']);
        
        for($g = 0; $g < count($responseContent['category']['metadata']); $g++) {
        
        if ($responseContent['category']['metadata'][$g]) {
        
        $this->assertEquals('MetadataItem' , $responseContent['category']['metadata'][$g]['__typename']);
        
        $this->assertArrayHasKey('key', $responseContent['category']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['category']['metadata'][$g]['key']);
        
        $this->assertIsString($responseContent['category']['metadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['category']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['category']['metadata'][$g]['value']);
        
        $this->assertIsString($responseContent['category']['metadata'][$g]['value']);
        
        }
        
        }
        
        $this->assertArrayHasKey('privateMetadata', $responseContent['category']);
        
        $this->assertNotNull($responseContent['category']['privateMetadata']);
        
        $this->assertIsArray($responseContent['category']['privateMetadata']);
        
        for($g = 0; $g < count($responseContent['category']['privateMetadata']); $g++) {
        
        if ($responseContent['category']['privateMetadata'][$g]) {
        
        $this->assertEquals('MetadataItem' , $responseContent['category']['privateMetadata'][$g]['__typename']);
        
        $this->assertArrayHasKey('key', $responseContent['category']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['category']['privateMetadata'][$g]['key']);
        
        $this->assertIsString($responseContent['category']['privateMetadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['category']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['category']['privateMetadata'][$g]['value']);
        
        $this->assertIsString($responseContent['category']['privateMetadata'][$g]['value']);
        
        }
        
        }
        
        $this->assertArrayHasKey('backgroundImage', $responseContent['category']);
        
        if ($responseContent['category']['backgroundImage']) {
        
        $this->assertEquals('Image' , $responseContent['category']['backgroundImage']['__typename']);
        
        $this->assertArrayHasKey('alt', $responseContent['category']['backgroundImage']);
        
        if ($responseContent['category']['backgroundImage']['alt']) {
        
        $this->assertIsString($responseContent['category']['backgroundImage']['alt']);
        
        }
        
        $this->assertArrayHasKey('url', $responseContent['category']['backgroundImage']);
        
        $this->assertNotNull($responseContent['category']['backgroundImage']['url']);
        
        $this->assertIsString($responseContent['category']['backgroundImage']['url']);
        
        }
        
        $this->assertArrayHasKey('name', $responseContent['category']);
        
        $this->assertNotNull($responseContent['category']['name']);
        
        $this->assertIsString($responseContent['category']['name']);
        
        $this->assertArrayHasKey('slug', $responseContent['category']);
        
        $this->assertNotNull($responseContent['category']['slug']);
        
        $this->assertIsString($responseContent['category']['slug']);
        
        $this->assertArrayHasKey('descriptionJson', $responseContent['category']);
        
        $this->assertNotNull($responseContent['category']['descriptionJson']);
        
        $this->assertArrayHasKey('seoDescription', $responseContent['category']);
        
        if ($responseContent['category']['seoDescription']) {
        
        $this->assertIsString($responseContent['category']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('seoTitle', $responseContent['category']);
        
        if ($responseContent['category']['seoTitle']) {
        
        $this->assertIsString($responseContent['category']['seoTitle']);
        
        }
        
        $this->assertArrayHasKey('parent', $responseContent['category']);
        
        if ($responseContent['category']['parent']) {
        
        $this->assertEquals('Category' , $responseContent['category']['parent']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['category']['parent']);
        
        $this->assertNotNull($responseContent['category']['parent']['id']);
        
        }
        
        $this->assertArrayHasKey('children', $responseContent['category']);
        
        if ($responseContent['category']['children']) {
        
        $this->assertEquals('CategoryCountableConnection' , $responseContent['category']['children']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['category']['children']);
        
        $this->assertNotNull($responseContent['category']['children']['edges']);
        
        $this->assertIsArray($responseContent['category']['children']['edges']);
        
        for($g = 0; $g < count($responseContent['category']['children']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['category']['children']['edges'][$g]);
        
        $this->assertEquals('CategoryCountableEdge' , $responseContent['category']['children']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['category']['children']['edges'][$g]);
        
        $this->assertNotNull($responseContent['category']['children']['edges'][$g]['node']);
        
        $this->assertEquals('Category' , $responseContent['category']['children']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['category']['children']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['category']['children']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['category']['children']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['category']['children']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['category']['children']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('children', $responseContent['category']['children']['edges'][$g]['node']);
        
        if ($responseContent['category']['children']['edges'][$g]['node']['children']) {
        
        $this->assertEquals('CategoryCountableConnection' , $responseContent['category']['children']['edges'][$g]['node']['children']['__typename']);
        
        $this->assertArrayHasKey('totalCount', $responseContent['category']['children']['edges'][$g]['node']['children']);
        
        if ($responseContent['category']['children']['edges'][$g]['node']['children']['totalCount']) {
        
        $this->assertIsInt($responseContent['category']['children']['edges'][$g]['node']['children']['totalCount']);
        
        }
        
        }
        
        $this->assertArrayHasKey('products', $responseContent['category']['children']['edges'][$g]['node']);
        
        if ($responseContent['category']['children']['edges'][$g]['node']['products']) {
        
        $this->assertEquals('ProductCountableConnection' , $responseContent['category']['children']['edges'][$g]['node']['products']['__typename']);
        
        $this->assertArrayHasKey('totalCount', $responseContent['category']['children']['edges'][$g]['node']['products']);
        
        if ($responseContent['category']['children']['edges'][$g]['node']['products']['totalCount']) {
        
        $this->assertIsInt($responseContent['category']['children']['edges'][$g]['node']['products']['totalCount']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['category']['children']);
        
        $this->assertNotNull($responseContent['category']['children']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['category']['children']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['category']['children']['pageInfo']);
        
        if ($responseContent['category']['children']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['category']['children']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['category']['children']['pageInfo']);
        
        $this->assertNotNull($responseContent['category']['children']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['category']['children']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['category']['children']['pageInfo']);
        
        $this->assertNotNull($responseContent['category']['children']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['category']['children']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['category']['children']['pageInfo']);
        
        if ($responseContent['category']['children']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['category']['children']['pageInfo']['startCursor']);
        
        }
        
        }
        
        $this->assertArrayHasKey('products', $responseContent['category']);
        
        if ($responseContent['category']['products']) {
        
        $this->assertEquals('ProductCountableConnection' , $responseContent['category']['products']['__typename']);
        
        $this->assertArrayHasKey('pageInfo', $responseContent['category']['products']);
        
        $this->assertNotNull($responseContent['category']['products']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['category']['products']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['category']['products']['pageInfo']);
        
        if ($responseContent['category']['products']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['category']['products']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['category']['products']['pageInfo']);
        
        $this->assertNotNull($responseContent['category']['products']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['category']['products']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['category']['products']['pageInfo']);
        
        $this->assertNotNull($responseContent['category']['products']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['category']['products']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['category']['products']['pageInfo']);
        
        if ($responseContent['category']['products']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['category']['products']['pageInfo']['startCursor']);
        
        }
        
        $this->assertArrayHasKey('edges', $responseContent['category']['products']);
        
        $this->assertNotNull($responseContent['category']['products']['edges']);
        
        $this->assertIsArray($responseContent['category']['products']['edges']);
        
        for($g = 0; $g < count($responseContent['category']['products']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]);
        
        $this->assertEquals('ProductCountableEdge' , $responseContent['category']['products']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('cursor', $responseContent['category']['products']['edges'][$g]);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['cursor']);
        
        $this->assertIsString($responseContent['category']['products']['edges'][$g]['cursor']);
        
        $this->assertArrayHasKey('node', $responseContent['category']['products']['edges'][$g]);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']);
        
        $this->assertEquals('Product' , $responseContent['category']['products']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['category']['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['category']['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['category']['products']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('isAvailable', $responseContent['category']['products']['edges'][$g]['node']);
        
        if ($responseContent['category']['products']['edges'][$g]['node']['isAvailable']) {
        
        $this->assertIsBool($responseContent['category']['products']['edges'][$g]['node']['isAvailable']);
        
        }
        
        $this->assertArrayHasKey('thumbnail', $responseContent['category']['products']['edges'][$g]['node']);
        
        if ($responseContent['category']['products']['edges'][$g]['node']['thumbnail']) {
        
        $this->assertEquals('Image' , $responseContent['category']['products']['edges'][$g]['node']['thumbnail']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['category']['products']['edges'][$g]['node']['thumbnail']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['thumbnail']['url']);
        
        $this->assertIsString($responseContent['category']['products']['edges'][$g]['node']['thumbnail']['url']);
        
        }
        
        $this->assertArrayHasKey('productType', $responseContent['category']['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['productType']);
        
        $this->assertEquals('ProductType' , $responseContent['category']['products']['edges'][$g]['node']['productType']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['category']['products']['edges'][$g]['node']['productType']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['productType']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['category']['products']['edges'][$g]['node']['productType']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['productType']['name']);
        
        $this->assertIsString($responseContent['category']['products']['edges'][$g]['node']['productType']['name']);
        
        $this->assertArrayHasKey('pricing', $responseContent['category']['products']['edges'][$g]['node']);
        
        if ($responseContent['category']['products']['edges'][$g]['node']['pricing']) {
        
        $this->assertEquals('ProductPricingInfo' , $responseContent['category']['products']['edges'][$g]['node']['pricing']['__typename']);
        
        $this->assertArrayHasKey('priceRangeUndiscounted', $responseContent['category']['products']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']) {
        
        $this->assertEquals('TaxedMoneyRange' , $responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['__typename']);
        
        $this->assertArrayHasKey('start', $responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']);
        
        if ($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertEquals('Money' , $responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['currency']);
        
        $this->assertIsString($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['currency']);
        
        }
        
        $this->assertArrayHasKey('stop', $responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']);
        
        if ($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertEquals('Money' , $responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['currency']);
        
        $this->assertIsString($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['currency']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}