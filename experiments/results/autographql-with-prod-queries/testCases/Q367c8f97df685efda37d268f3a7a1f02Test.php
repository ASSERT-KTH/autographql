<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q367c8f97df685efda37d268f3a7a1f02Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment AddressFragment on Address {\n  city\n  cityArea\n  companyName\n  country {\n    __typename\n    code\n    country\n  }\n  countryArea\n  firstName\n  id\n  lastName\n  phone\n  postalCode\n  streetAddress1\n  streetAddress2\n  __typename\n}\n\nquery OrderList($first: Int, $after: String, $last: Int, $before: String, $filter: OrderFilterInput, $sort: OrderSortingInput) {\n  orders(before: $before, after: $after, first: $first, last: $last, filter: $filter, sortBy: $sort) {\n    edges {\n      node {\n        __typename\n        billingAddress {\n          ...AddressFragment\n          __typename\n        }\n        created\n        id\n        number\n        paymentStatus\n        status\n        total {\n          __typename\n          gross {\n            __typename\n            amount\n            currency\n          }\n        }\n        userEmail\n      }\n      __typename\n    }\n    pageInfo {\n      hasPreviousPage\n      hasNextPage\n      startCursor\n      endCursor\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 20, "filter": {"created": null, "status": ["CANCELED", "UNFULFILLED", "READY_TO_CAPTURE"]}, "sort": {"direction": "DESC", "field": "NUMBER"}}, "operationName": "OrderList", "timesCalled": 2, "createdAt": "2021-09-04 20:15:13.912708+00:00", "updatedAt": "2021-09-04 20:28:48.788209+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('orders', $responseContent);
        
        if ($responseContent['orders']) {
        
        $this->assertEquals('OrderCountableConnection' , $responseContent['orders']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['orders']);
        
        $this->assertNotNull($responseContent['orders']['edges']);
        
        $this->assertIsArray($responseContent['orders']['edges']);
        
        for($g = 0; $g < count($responseContent['orders']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]);
        
        $this->assertEquals('OrderCountableEdge' , $responseContent['orders']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['orders']['edges'][$g]);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']);
        
        $this->assertEquals('Order' , $responseContent['orders']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('billingAddress', $responseContent['orders']['edges'][$g]['node']);
        
        if ($responseContent['orders']['edges'][$g]['node']['billingAddress']) {
        
        $this->assertEquals('Address' , $responseContent['orders']['edges'][$g]['node']['billingAddress']['__typename']);
        
        $this->assertArrayHasKey('city', $responseContent['orders']['edges'][$g]['node']['billingAddress']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['billingAddress']['city']);
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['billingAddress']['city']);
        
        $this->assertArrayHasKey('cityArea', $responseContent['orders']['edges'][$g]['node']['billingAddress']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['billingAddress']['cityArea']);
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['billingAddress']['cityArea']);
        
        $this->assertArrayHasKey('companyName', $responseContent['orders']['edges'][$g]['node']['billingAddress']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['billingAddress']['companyName']);
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['billingAddress']['companyName']);
        
        $this->assertArrayHasKey('country', $responseContent['orders']['edges'][$g]['node']['billingAddress']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['billingAddress']['country']);
        
        $this->assertEquals('CountryDisplay' , $responseContent['orders']['edges'][$g]['node']['billingAddress']['country']['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['orders']['edges'][$g]['node']['billingAddress']['country']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['billingAddress']['country']['code']);
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['billingAddress']['country']['code']);
        
        $this->assertArrayHasKey('country', $responseContent['orders']['edges'][$g]['node']['billingAddress']['country']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['billingAddress']['country']['country']);
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['billingAddress']['country']['country']);
        
        $this->assertArrayHasKey('countryArea', $responseContent['orders']['edges'][$g]['node']['billingAddress']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['billingAddress']['countryArea']);
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['billingAddress']['countryArea']);
        
        $this->assertArrayHasKey('firstName', $responseContent['orders']['edges'][$g]['node']['billingAddress']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['billingAddress']['firstName']);
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['billingAddress']['firstName']);
        
        $this->assertArrayHasKey('id', $responseContent['orders']['edges'][$g]['node']['billingAddress']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['billingAddress']['id']);
        
        $this->assertArrayHasKey('lastName', $responseContent['orders']['edges'][$g]['node']['billingAddress']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['billingAddress']['lastName']);
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['billingAddress']['lastName']);
        
        $this->assertArrayHasKey('phone', $responseContent['orders']['edges'][$g]['node']['billingAddress']);
        
        if ($responseContent['orders']['edges'][$g]['node']['billingAddress']['phone']) {
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['billingAddress']['phone']);
        
        }
        
        $this->assertArrayHasKey('postalCode', $responseContent['orders']['edges'][$g]['node']['billingAddress']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['billingAddress']['postalCode']);
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['billingAddress']['postalCode']);
        
        $this->assertArrayHasKey('streetAddress1', $responseContent['orders']['edges'][$g]['node']['billingAddress']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['billingAddress']['streetAddress1']);
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['billingAddress']['streetAddress1']);
        
        $this->assertArrayHasKey('streetAddress2', $responseContent['orders']['edges'][$g]['node']['billingAddress']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['billingAddress']['streetAddress2']);
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['billingAddress']['streetAddress2']);
        
        }
        
        $this->assertArrayHasKey('created', $responseContent['orders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['created']);
        
        $this->assertArrayHasKey('id', $responseContent['orders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('number', $responseContent['orders']['edges'][$g]['node']);
        
        if ($responseContent['orders']['edges'][$g]['node']['number']) {
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['number']);
        
        }
        
        $this->assertArrayHasKey('paymentStatus', $responseContent['orders']['edges'][$g]['node']);
        
        if ($responseContent['orders']['edges'][$g]['node']['paymentStatus']) {
        
        $this->assertContains($responseContent['orders']['edges'][$g]['node']['paymentStatus'], ['NOT_CHARGED', 'PENDING', 'PARTIALLY_CHARGED', 'FULLY_CHARGED', 'PARTIALLY_REFUNDED', 'FULLY_REFUNDED', 'REFUSED', 'CANCELLED']);
        
        }
        
        $this->assertArrayHasKey('status', $responseContent['orders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['status']);
        
        $this->assertContains($responseContent['orders']['edges'][$g]['node']['status'], ['DRAFT', 'UNFULFILLED', 'PARTIALLY_FULFILLED', 'FULFILLED', 'CANCELED']);
        
        $this->assertArrayHasKey('total', $responseContent['orders']['edges'][$g]['node']);
        
        if ($responseContent['orders']['edges'][$g]['node']['total']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['orders']['edges'][$g]['node']['total']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['orders']['edges'][$g]['node']['total']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['total']['gross']);
        
        $this->assertEquals('Money' , $responseContent['orders']['edges'][$g]['node']['total']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['orders']['edges'][$g]['node']['total']['gross']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['total']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['orders']['edges'][$g]['node']['total']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orders']['edges'][$g]['node']['total']['gross']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['total']['gross']['currency']);
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['total']['gross']['currency']);
        
        }
        
        $this->assertArrayHasKey('userEmail', $responseContent['orders']['edges'][$g]['node']);
        
        if ($responseContent['orders']['edges'][$g]['node']['userEmail']) {
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['userEmail']);
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['orders']);
        
        $this->assertNotNull($responseContent['orders']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['orders']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['orders']['pageInfo']);
        
        $this->assertNotNull($responseContent['orders']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['orders']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['orders']['pageInfo']);
        
        $this->assertNotNull($responseContent['orders']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['orders']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['orders']['pageInfo']);
        
        if ($responseContent['orders']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['orders']['pageInfo']['startCursor']);
        
        }
        
        $this->assertArrayHasKey('endCursor', $responseContent['orders']['pageInfo']);
        
        if ($responseContent['orders']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['orders']['pageInfo']['endCursor']);
        
        }
        
        }
        

    }
}