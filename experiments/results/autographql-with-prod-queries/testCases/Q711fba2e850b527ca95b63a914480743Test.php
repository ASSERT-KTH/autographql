<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q711fba2e850b527ca95b63a914480743Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment PageInfoFragment on PageInfo {\n  endCursor\n  hasNextPage\n  hasPreviousPage\n  startCursor\n  __typename\n}\n\nfragment VoucherFragment on Voucher {\n  id\n  code\n  startDate\n  endDate\n  usageLimit\n  discountValueType\n  discountValue\n  countries {\n    code\n    country\n    __typename\n  }\n  minSpent {\n    currency\n    amount\n    __typename\n  }\n  minCheckoutItemsQuantity\n  __typename\n}\n\nquery VoucherList($after: String, $before: String, $first: Int, $last: Int, $filter: VoucherFilterInput, $sort: VoucherSortingInput) {\n  vouchers(after: $after, before: $before, first: $first, last: $last, filter: $filter, sortBy: $sort) {\n    edges {\n      node {\n        ...VoucherFragment\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      ...PageInfoFragment\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 20, "filter": {"started": {"gte": "2021-09-03T00:00:00+02:00", "lte": "2021-09-04T00:00:00+02:00"}, "timesUsed": null}, "sort": {"direction": "ASC", "field": "CODE"}}, "operationName": "VoucherList", "timesCalled": 2, "createdAt": "2021-09-04 19:17:44.482038+00:00", "updatedAt": "2021-09-04 20:28:52.823120+00:00"}
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
        
        $this->assertArrayHasKey('code', $responseContent['vouchers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']['code']);
        
        $this->assertIsString($responseContent['vouchers']['edges'][$g]['node']['code']);
        
        $this->assertArrayHasKey('startDate', $responseContent['vouchers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']['startDate']);
        
        $this->assertArrayHasKey('endDate', $responseContent['vouchers']['edges'][$g]['node']);
        
        if ($responseContent['vouchers']['edges'][$g]['node']['endDate']) {
        
        }
        
        $this->assertArrayHasKey('usageLimit', $responseContent['vouchers']['edges'][$g]['node']);
        
        if ($responseContent['vouchers']['edges'][$g]['node']['usageLimit']) {
        
        $this->assertIsInt($responseContent['vouchers']['edges'][$g]['node']['usageLimit']);
        
        }
        
        $this->assertArrayHasKey('discountValueType', $responseContent['vouchers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']['discountValueType']);
        
        $this->assertContains($responseContent['vouchers']['edges'][$g]['node']['discountValueType'], ['FIXED', 'PERCENTAGE']);
        
        $this->assertArrayHasKey('discountValue', $responseContent['vouchers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']['discountValue']);
        
        $this->assertIsNumeric($responseContent['vouchers']['edges'][$g]['node']['discountValue']);
        
        $this->assertArrayHasKey('countries', $responseContent['vouchers']['edges'][$g]['node']);
        
        if ($responseContent['vouchers']['edges'][$g]['node']['countries']) {
        
        $this->assertIsArray($responseContent['vouchers']['edges'][$g]['node']['countries']);
        
        for($f = 0; $f < count($responseContent['vouchers']['edges'][$g]['node']['countries']); $f++) {
        
        if ($responseContent['vouchers']['edges'][$g]['node']['countries'][$f]) {
        
        $this->assertEquals('CountryDisplay' , $responseContent['vouchers']['edges'][$g]['node']['countries'][$f]['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['vouchers']['edges'][$g]['node']['countries'][$f]);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']['countries'][$f]['code']);
        
        $this->assertIsString($responseContent['vouchers']['edges'][$g]['node']['countries'][$f]['code']);
        
        $this->assertArrayHasKey('country', $responseContent['vouchers']['edges'][$g]['node']['countries'][$f]);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']['countries'][$f]['country']);
        
        $this->assertIsString($responseContent['vouchers']['edges'][$g]['node']['countries'][$f]['country']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('minSpent', $responseContent['vouchers']['edges'][$g]['node']);
        
        if ($responseContent['vouchers']['edges'][$g]['node']['minSpent']) {
        
        $this->assertEquals('Money' , $responseContent['vouchers']['edges'][$g]['node']['minSpent']['__typename']);
        
        $this->assertArrayHasKey('currency', $responseContent['vouchers']['edges'][$g]['node']['minSpent']);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']['minSpent']['currency']);
        
        $this->assertIsString($responseContent['vouchers']['edges'][$g]['node']['minSpent']['currency']);
        
        $this->assertArrayHasKey('amount', $responseContent['vouchers']['edges'][$g]['node']['minSpent']);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']['minSpent']['amount']);
        
        $this->assertIsNumeric($responseContent['vouchers']['edges'][$g]['node']['minSpent']['amount']);
        
        }
        
        $this->assertArrayHasKey('minCheckoutItemsQuantity', $responseContent['vouchers']['edges'][$g]['node']);
        
        if ($responseContent['vouchers']['edges'][$g]['node']['minCheckoutItemsQuantity']) {
        
        $this->assertIsInt($responseContent['vouchers']['edges'][$g]['node']['minCheckoutItemsQuantity']);
        
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