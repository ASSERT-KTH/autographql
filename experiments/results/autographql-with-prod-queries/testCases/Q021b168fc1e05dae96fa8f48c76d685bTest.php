<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q021b168fc1e05dae96fa8f48c76d685bTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment AddressFragment on Address {\n  city\n  cityArea\n  companyName\n  country {\n    __typename\n    code\n    country\n  }\n  countryArea\n  firstName\n  id\n  lastName\n  phone\n  postalCode\n  streetAddress1\n  streetAddress2\n  __typename\n}\n\nquery OrderDraftList($first: Int, $after: String, $last: Int, $before: String, $filter: OrderDraftFilterInput, $sort: OrderSortingInput) {\n  draftOrders(before: $before, after: $after, first: $first, last: $last, filter: $filter, sortBy: $sort) {\n    edges {\n      node {\n        __typename\n        billingAddress {\n          ...AddressFragment\n          __typename\n        }\n        created\n        id\n        number\n        paymentStatus\n        status\n        total {\n          __typename\n          gross {\n            __typename\n            amount\n            currency\n          }\n        }\n        userEmail\n      }\n      __typename\n    }\n    pageInfo {\n      hasPreviousPage\n      hasNextPage\n      startCursor\n      endCursor\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 20, "filter": {"created": null}, "sort": {"direction": "DESC", "field": "NUMBER"}}, "operationName": "OrderDraftList", "timesCalled": 14, "createdAt": "2021-09-04 12:51:06.996449+00:00", "updatedAt": "2021-09-05 14:24:39.263248+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('draftOrders', $responseContent);
        
        if ($responseContent['draftOrders']) {
        
        $this->assertEquals('OrderCountableConnection' , $responseContent['draftOrders']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['draftOrders']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges']);
        
        $this->assertIsArray($responseContent['draftOrders']['edges']);
        
        for($g = 0; $g < count($responseContent['draftOrders']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]);
        
        $this->assertEquals('OrderCountableEdge' , $responseContent['draftOrders']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['draftOrders']['edges'][$g]);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']);
        
        $this->assertEquals('Order' , $responseContent['draftOrders']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('billingAddress', $responseContent['draftOrders']['edges'][$g]['node']);
        
        if ($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']) {
        
        $this->assertEquals('Address' , $responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['__typename']);
        
        $this->assertArrayHasKey('city', $responseContent['draftOrders']['edges'][$g]['node']['billingAddress']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['city']);
        
        $this->assertIsString($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['city']);
        
        $this->assertArrayHasKey('cityArea', $responseContent['draftOrders']['edges'][$g]['node']['billingAddress']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['cityArea']);
        
        $this->assertIsString($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['cityArea']);
        
        $this->assertArrayHasKey('companyName', $responseContent['draftOrders']['edges'][$g]['node']['billingAddress']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['companyName']);
        
        $this->assertIsString($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['companyName']);
        
        $this->assertArrayHasKey('country', $responseContent['draftOrders']['edges'][$g]['node']['billingAddress']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['country']);
        
        $this->assertEquals('CountryDisplay' , $responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['country']['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['country']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['country']['code']);
        
        $this->assertIsString($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['country']['code']);
        
        $this->assertArrayHasKey('country', $responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['country']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['country']['country']);
        
        $this->assertIsString($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['country']['country']);
        
        $this->assertArrayHasKey('countryArea', $responseContent['draftOrders']['edges'][$g]['node']['billingAddress']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['countryArea']);
        
        $this->assertIsString($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['countryArea']);
        
        $this->assertArrayHasKey('firstName', $responseContent['draftOrders']['edges'][$g]['node']['billingAddress']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['firstName']);
        
        $this->assertIsString($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['firstName']);
        
        $this->assertArrayHasKey('id', $responseContent['draftOrders']['edges'][$g]['node']['billingAddress']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['id']);
        
        $this->assertArrayHasKey('lastName', $responseContent['draftOrders']['edges'][$g]['node']['billingAddress']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['lastName']);
        
        $this->assertIsString($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['lastName']);
        
        $this->assertArrayHasKey('phone', $responseContent['draftOrders']['edges'][$g]['node']['billingAddress']);
        
        if ($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['phone']) {
        
        $this->assertIsString($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['phone']);
        
        }
        
        $this->assertArrayHasKey('postalCode', $responseContent['draftOrders']['edges'][$g]['node']['billingAddress']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['postalCode']);
        
        $this->assertIsString($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['postalCode']);
        
        $this->assertArrayHasKey('streetAddress1', $responseContent['draftOrders']['edges'][$g]['node']['billingAddress']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['streetAddress1']);
        
        $this->assertIsString($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['streetAddress1']);
        
        $this->assertArrayHasKey('streetAddress2', $responseContent['draftOrders']['edges'][$g]['node']['billingAddress']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['streetAddress2']);
        
        $this->assertIsString($responseContent['draftOrders']['edges'][$g]['node']['billingAddress']['streetAddress2']);
        
        }
        
        $this->assertArrayHasKey('created', $responseContent['draftOrders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']['created']);
        
        $this->assertArrayHasKey('id', $responseContent['draftOrders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('number', $responseContent['draftOrders']['edges'][$g]['node']);
        
        if ($responseContent['draftOrders']['edges'][$g]['node']['number']) {
        
        $this->assertIsString($responseContent['draftOrders']['edges'][$g]['node']['number']);
        
        }
        
        $this->assertArrayHasKey('paymentStatus', $responseContent['draftOrders']['edges'][$g]['node']);
        
        if ($responseContent['draftOrders']['edges'][$g]['node']['paymentStatus']) {
        
        $this->assertContains($responseContent['draftOrders']['edges'][$g]['node']['paymentStatus'], ['NOT_CHARGED', 'PENDING', 'PARTIALLY_CHARGED', 'FULLY_CHARGED', 'PARTIALLY_REFUNDED', 'FULLY_REFUNDED', 'REFUSED', 'CANCELLED']);
        
        }
        
        $this->assertArrayHasKey('status', $responseContent['draftOrders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']['status']);
        
        $this->assertContains($responseContent['draftOrders']['edges'][$g]['node']['status'], ['DRAFT', 'UNFULFILLED', 'PARTIALLY_FULFILLED', 'FULFILLED', 'CANCELED']);
        
        $this->assertArrayHasKey('total', $responseContent['draftOrders']['edges'][$g]['node']);
        
        if ($responseContent['draftOrders']['edges'][$g]['node']['total']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['draftOrders']['edges'][$g]['node']['total']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['draftOrders']['edges'][$g]['node']['total']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']['total']['gross']);
        
        $this->assertEquals('Money' , $responseContent['draftOrders']['edges'][$g]['node']['total']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['draftOrders']['edges'][$g]['node']['total']['gross']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']['total']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['draftOrders']['edges'][$g]['node']['total']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['draftOrders']['edges'][$g]['node']['total']['gross']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']['total']['gross']['currency']);
        
        $this->assertIsString($responseContent['draftOrders']['edges'][$g]['node']['total']['gross']['currency']);
        
        }
        
        $this->assertArrayHasKey('userEmail', $responseContent['draftOrders']['edges'][$g]['node']);
        
        if ($responseContent['draftOrders']['edges'][$g]['node']['userEmail']) {
        
        $this->assertIsString($responseContent['draftOrders']['edges'][$g]['node']['userEmail']);
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['draftOrders']);
        
        $this->assertNotNull($responseContent['draftOrders']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['draftOrders']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['draftOrders']['pageInfo']);
        
        $this->assertNotNull($responseContent['draftOrders']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['draftOrders']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['draftOrders']['pageInfo']);
        
        $this->assertNotNull($responseContent['draftOrders']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['draftOrders']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['draftOrders']['pageInfo']);
        
        if ($responseContent['draftOrders']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['draftOrders']['pageInfo']['startCursor']);
        
        }
        
        $this->assertArrayHasKey('endCursor', $responseContent['draftOrders']['pageInfo']);
        
        if ($responseContent['draftOrders']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['draftOrders']['pageInfo']['endCursor']);
        
        }
        
        }
        

    }
}