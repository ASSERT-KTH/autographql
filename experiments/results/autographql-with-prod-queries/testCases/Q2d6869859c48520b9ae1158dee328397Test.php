<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q2d6869859c48520b9ae1158dee328397Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment CustomerFragment on User {\n  id\n  email\n  firstName\n  lastName\n  __typename\n}\n\nfragment AddressFragment on Address {\n  city\n  cityArea\n  companyName\n  country {\n    __typename\n    code\n    country\n  }\n  countryArea\n  firstName\n  id\n  lastName\n  phone\n  postalCode\n  streetAddress1\n  streetAddress2\n  __typename\n}\n\nfragment CustomerDetailsFragment on User {\n  ...CustomerFragment\n  dateJoined\n  lastLogin\n  defaultShippingAddress {\n    ...AddressFragment\n    __typename\n  }\n  defaultBillingAddress {\n    ...AddressFragment\n    __typename\n  }\n  note\n  isActive\n  __typename\n}\n\nquery CustomerDetails($id: ID!) {\n  user(id: $id) {\n    ...CustomerDetailsFragment\n    orders(last: 5) {\n      edges {\n        node {\n          id\n          created\n          number\n          paymentStatus\n          total {\n            gross {\n              currency\n              amount\n              __typename\n            }\n            __typename\n          }\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    lastPlacedOrder: orders(last: 1) {\n      edges {\n        node {\n          id\n          created\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"id": "VXNlcjoxMA=="}, "operationName": "CustomerDetails", "timesCalled": 1, "createdAt": "2021-09-05 13:38:34.029431+00:00", "updatedAt": "2021-09-05 13:38:34.029443+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('user', $responseContent);
        
        if ($responseContent['user']) {
        
        $this->assertEquals('User' , $responseContent['user']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['user']);
        
        $this->assertNotNull($responseContent['user']['id']);
        
        $this->assertArrayHasKey('email', $responseContent['user']);
        
        $this->assertNotNull($responseContent['user']['email']);
        
        $this->assertIsString($responseContent['user']['email']);
        
        $this->assertArrayHasKey('firstName', $responseContent['user']);
        
        $this->assertNotNull($responseContent['user']['firstName']);
        
        $this->assertIsString($responseContent['user']['firstName']);
        
        $this->assertArrayHasKey('lastName', $responseContent['user']);
        
        $this->assertNotNull($responseContent['user']['lastName']);
        
        $this->assertIsString($responseContent['user']['lastName']);
        
        $this->assertArrayHasKey('dateJoined', $responseContent['user']);
        
        $this->assertNotNull($responseContent['user']['dateJoined']);
        
        $this->assertArrayHasKey('lastLogin', $responseContent['user']);
        
        if ($responseContent['user']['lastLogin']) {
        
        }
        
        $this->assertArrayHasKey('defaultShippingAddress', $responseContent['user']);
        
        if ($responseContent['user']['defaultShippingAddress']) {
        
        $this->assertEquals('Address' , $responseContent['user']['defaultShippingAddress']['__typename']);
        
        $this->assertArrayHasKey('city', $responseContent['user']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['city']);
        
        $this->assertIsString($responseContent['user']['defaultShippingAddress']['city']);
        
        $this->assertArrayHasKey('cityArea', $responseContent['user']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['cityArea']);
        
        $this->assertIsString($responseContent['user']['defaultShippingAddress']['cityArea']);
        
        $this->assertArrayHasKey('companyName', $responseContent['user']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['companyName']);
        
        $this->assertIsString($responseContent['user']['defaultShippingAddress']['companyName']);
        
        $this->assertArrayHasKey('country', $responseContent['user']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['country']);
        
        $this->assertEquals('CountryDisplay' , $responseContent['user']['defaultShippingAddress']['country']['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['user']['defaultShippingAddress']['country']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['country']['code']);
        
        $this->assertIsString($responseContent['user']['defaultShippingAddress']['country']['code']);
        
        $this->assertArrayHasKey('country', $responseContent['user']['defaultShippingAddress']['country']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['country']['country']);
        
        $this->assertIsString($responseContent['user']['defaultShippingAddress']['country']['country']);
        
        $this->assertArrayHasKey('countryArea', $responseContent['user']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['countryArea']);
        
        $this->assertIsString($responseContent['user']['defaultShippingAddress']['countryArea']);
        
        $this->assertArrayHasKey('firstName', $responseContent['user']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['firstName']);
        
        $this->assertIsString($responseContent['user']['defaultShippingAddress']['firstName']);
        
        $this->assertArrayHasKey('id', $responseContent['user']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['id']);
        
        $this->assertArrayHasKey('lastName', $responseContent['user']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['lastName']);
        
        $this->assertIsString($responseContent['user']['defaultShippingAddress']['lastName']);
        
        $this->assertArrayHasKey('phone', $responseContent['user']['defaultShippingAddress']);
        
        if ($responseContent['user']['defaultShippingAddress']['phone']) {
        
        $this->assertIsString($responseContent['user']['defaultShippingAddress']['phone']);
        
        }
        
        $this->assertArrayHasKey('postalCode', $responseContent['user']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['postalCode']);
        
        $this->assertIsString($responseContent['user']['defaultShippingAddress']['postalCode']);
        
        $this->assertArrayHasKey('streetAddress1', $responseContent['user']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['streetAddress1']);
        
        $this->assertIsString($responseContent['user']['defaultShippingAddress']['streetAddress1']);
        
        $this->assertArrayHasKey('streetAddress2', $responseContent['user']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['streetAddress2']);
        
        $this->assertIsString($responseContent['user']['defaultShippingAddress']['streetAddress2']);
        
        }
        
        $this->assertArrayHasKey('defaultBillingAddress', $responseContent['user']);
        
        if ($responseContent['user']['defaultBillingAddress']) {
        
        $this->assertEquals('Address' , $responseContent['user']['defaultBillingAddress']['__typename']);
        
        $this->assertArrayHasKey('city', $responseContent['user']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['city']);
        
        $this->assertIsString($responseContent['user']['defaultBillingAddress']['city']);
        
        $this->assertArrayHasKey('cityArea', $responseContent['user']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['cityArea']);
        
        $this->assertIsString($responseContent['user']['defaultBillingAddress']['cityArea']);
        
        $this->assertArrayHasKey('companyName', $responseContent['user']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['companyName']);
        
        $this->assertIsString($responseContent['user']['defaultBillingAddress']['companyName']);
        
        $this->assertArrayHasKey('country', $responseContent['user']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['country']);
        
        $this->assertEquals('CountryDisplay' , $responseContent['user']['defaultBillingAddress']['country']['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['user']['defaultBillingAddress']['country']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['country']['code']);
        
        $this->assertIsString($responseContent['user']['defaultBillingAddress']['country']['code']);
        
        $this->assertArrayHasKey('country', $responseContent['user']['defaultBillingAddress']['country']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['country']['country']);
        
        $this->assertIsString($responseContent['user']['defaultBillingAddress']['country']['country']);
        
        $this->assertArrayHasKey('countryArea', $responseContent['user']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['countryArea']);
        
        $this->assertIsString($responseContent['user']['defaultBillingAddress']['countryArea']);
        
        $this->assertArrayHasKey('firstName', $responseContent['user']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['firstName']);
        
        $this->assertIsString($responseContent['user']['defaultBillingAddress']['firstName']);
        
        $this->assertArrayHasKey('id', $responseContent['user']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['id']);
        
        $this->assertArrayHasKey('lastName', $responseContent['user']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['lastName']);
        
        $this->assertIsString($responseContent['user']['defaultBillingAddress']['lastName']);
        
        $this->assertArrayHasKey('phone', $responseContent['user']['defaultBillingAddress']);
        
        if ($responseContent['user']['defaultBillingAddress']['phone']) {
        
        $this->assertIsString($responseContent['user']['defaultBillingAddress']['phone']);
        
        }
        
        $this->assertArrayHasKey('postalCode', $responseContent['user']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['postalCode']);
        
        $this->assertIsString($responseContent['user']['defaultBillingAddress']['postalCode']);
        
        $this->assertArrayHasKey('streetAddress1', $responseContent['user']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['streetAddress1']);
        
        $this->assertIsString($responseContent['user']['defaultBillingAddress']['streetAddress1']);
        
        $this->assertArrayHasKey('streetAddress2', $responseContent['user']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['streetAddress2']);
        
        $this->assertIsString($responseContent['user']['defaultBillingAddress']['streetAddress2']);
        
        }
        
        $this->assertArrayHasKey('note', $responseContent['user']);
        
        if ($responseContent['user']['note']) {
        
        $this->assertIsString($responseContent['user']['note']);
        
        }
        
        $this->assertArrayHasKey('isActive', $responseContent['user']);
        
        $this->assertNotNull($responseContent['user']['isActive']);
        
        $this->assertIsBool($responseContent['user']['isActive']);
        
        $this->assertArrayHasKey('orders', $responseContent['user']);
        
        if ($responseContent['user']['orders']) {
        
        $this->assertEquals('OrderCountableConnection' , $responseContent['user']['orders']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['user']['orders']);
        
        $this->assertNotNull($responseContent['user']['orders']['edges']);
        
        $this->assertIsArray($responseContent['user']['orders']['edges']);
        
        for($g = 0; $g < count($responseContent['user']['orders']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['user']['orders']['edges'][$g]);
        
        $this->assertEquals('OrderCountableEdge' , $responseContent['user']['orders']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['user']['orders']['edges'][$g]);
        
        $this->assertNotNull($responseContent['user']['orders']['edges'][$g]['node']);
        
        $this->assertEquals('Order' , $responseContent['user']['orders']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['user']['orders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['user']['orders']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('created', $responseContent['user']['orders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['user']['orders']['edges'][$g]['node']['created']);
        
        $this->assertArrayHasKey('number', $responseContent['user']['orders']['edges'][$g]['node']);
        
        if ($responseContent['user']['orders']['edges'][$g]['node']['number']) {
        
        $this->assertIsString($responseContent['user']['orders']['edges'][$g]['node']['number']);
        
        }
        
        $this->assertArrayHasKey('paymentStatus', $responseContent['user']['orders']['edges'][$g]['node']);
        
        if ($responseContent['user']['orders']['edges'][$g]['node']['paymentStatus']) {
        
        $this->assertContains($responseContent['user']['orders']['edges'][$g]['node']['paymentStatus'], ['NOT_CHARGED', 'PENDING', 'PARTIALLY_CHARGED', 'FULLY_CHARGED', 'PARTIALLY_REFUNDED', 'FULLY_REFUNDED', 'REFUSED', 'CANCELLED']);
        
        }
        
        $this->assertArrayHasKey('total', $responseContent['user']['orders']['edges'][$g]['node']);
        
        if ($responseContent['user']['orders']['edges'][$g]['node']['total']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['user']['orders']['edges'][$g]['node']['total']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['user']['orders']['edges'][$g]['node']['total']);
        
        $this->assertNotNull($responseContent['user']['orders']['edges'][$g]['node']['total']['gross']);
        
        $this->assertEquals('Money' , $responseContent['user']['orders']['edges'][$g]['node']['total']['gross']['__typename']);
        
        $this->assertArrayHasKey('currency', $responseContent['user']['orders']['edges'][$g]['node']['total']['gross']);
        
        $this->assertNotNull($responseContent['user']['orders']['edges'][$g]['node']['total']['gross']['currency']);
        
        $this->assertIsString($responseContent['user']['orders']['edges'][$g]['node']['total']['gross']['currency']);
        
        $this->assertArrayHasKey('amount', $responseContent['user']['orders']['edges'][$g]['node']['total']['gross']);
        
        $this->assertNotNull($responseContent['user']['orders']['edges'][$g]['node']['total']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['user']['orders']['edges'][$g]['node']['total']['gross']['amount']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('lastPlacedOrder', $responseContent['user']);
        
        if ($responseContent['user']['lastPlacedOrder']) {
        
        $this->assertEquals('OrderCountableConnection' , $responseContent['user']['lastPlacedOrder']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['user']['lastPlacedOrder']);
        
        $this->assertNotNull($responseContent['user']['lastPlacedOrder']['edges']);
        
        $this->assertIsArray($responseContent['user']['lastPlacedOrder']['edges']);
        
        for($g = 0; $g < count($responseContent['user']['lastPlacedOrder']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['user']['lastPlacedOrder']['edges'][$g]);
        
        $this->assertEquals('OrderCountableEdge' , $responseContent['user']['lastPlacedOrder']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['user']['lastPlacedOrder']['edges'][$g]);
        
        $this->assertNotNull($responseContent['user']['lastPlacedOrder']['edges'][$g]['node']);
        
        $this->assertEquals('Order' , $responseContent['user']['lastPlacedOrder']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['user']['lastPlacedOrder']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['user']['lastPlacedOrder']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('created', $responseContent['user']['lastPlacedOrder']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['user']['lastPlacedOrder']['edges'][$g]['node']['created']);
        
        }
        
        }
        
        }
        

    }
}