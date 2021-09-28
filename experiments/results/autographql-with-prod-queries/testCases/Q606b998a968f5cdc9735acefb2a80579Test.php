<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q606b998a968f5cdc9735acefb2a80579Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment CustomerFragment on User {\n  id\n  email\n  firstName\n  lastName\n  __typename\n}\n\nfragment AddressFragment on Address {\n  city\n  cityArea\n  companyName\n  country {\n    __typename\n    code\n    country\n  }\n  countryArea\n  firstName\n  id\n  lastName\n  phone\n  postalCode\n  streetAddress1\n  streetAddress2\n  __typename\n}\n\nfragment CustomerAddressesFragment on User {\n  ...CustomerFragment\n  addresses {\n    ...AddressFragment\n    __typename\n  }\n  defaultBillingAddress {\n    id\n    __typename\n  }\n  defaultShippingAddress {\n    id\n    __typename\n  }\n  __typename\n}\n\nquery CustomerAddresses($id: ID!) {\n  user(id: $id) {\n    ...CustomerAddressesFragment\n    __typename\n  }\n}\n", "variables": {"id": "VXNlcjo0"}, "operationName": "CustomerAddresses", "timesCalled": 2, "createdAt": "2021-09-04 19:58:15.943542+00:00", "updatedAt": "2021-09-04 20:28:51.534903+00:00"}
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
        
        $this->assertArrayHasKey('addresses', $responseContent['user']);
        
        if ($responseContent['user']['addresses']) {
        
        $this->assertIsArray($responseContent['user']['addresses']);
        
        for($g = 0; $g < count($responseContent['user']['addresses']); $g++) {
        
        if ($responseContent['user']['addresses'][$g]) {
        
        $this->assertEquals('Address' , $responseContent['user']['addresses'][$g]['__typename']);
        
        $this->assertArrayHasKey('city', $responseContent['user']['addresses'][$g]);
        
        $this->assertNotNull($responseContent['user']['addresses'][$g]['city']);
        
        $this->assertIsString($responseContent['user']['addresses'][$g]['city']);
        
        $this->assertArrayHasKey('cityArea', $responseContent['user']['addresses'][$g]);
        
        $this->assertNotNull($responseContent['user']['addresses'][$g]['cityArea']);
        
        $this->assertIsString($responseContent['user']['addresses'][$g]['cityArea']);
        
        $this->assertArrayHasKey('companyName', $responseContent['user']['addresses'][$g]);
        
        $this->assertNotNull($responseContent['user']['addresses'][$g]['companyName']);
        
        $this->assertIsString($responseContent['user']['addresses'][$g]['companyName']);
        
        $this->assertArrayHasKey('country', $responseContent['user']['addresses'][$g]);
        
        $this->assertNotNull($responseContent['user']['addresses'][$g]['country']);
        
        $this->assertEquals('CountryDisplay' , $responseContent['user']['addresses'][$g]['country']['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['user']['addresses'][$g]['country']);
        
        $this->assertNotNull($responseContent['user']['addresses'][$g]['country']['code']);
        
        $this->assertIsString($responseContent['user']['addresses'][$g]['country']['code']);
        
        $this->assertArrayHasKey('country', $responseContent['user']['addresses'][$g]['country']);
        
        $this->assertNotNull($responseContent['user']['addresses'][$g]['country']['country']);
        
        $this->assertIsString($responseContent['user']['addresses'][$g]['country']['country']);
        
        $this->assertArrayHasKey('countryArea', $responseContent['user']['addresses'][$g]);
        
        $this->assertNotNull($responseContent['user']['addresses'][$g]['countryArea']);
        
        $this->assertIsString($responseContent['user']['addresses'][$g]['countryArea']);
        
        $this->assertArrayHasKey('firstName', $responseContent['user']['addresses'][$g]);
        
        $this->assertNotNull($responseContent['user']['addresses'][$g]['firstName']);
        
        $this->assertIsString($responseContent['user']['addresses'][$g]['firstName']);
        
        $this->assertArrayHasKey('id', $responseContent['user']['addresses'][$g]);
        
        $this->assertNotNull($responseContent['user']['addresses'][$g]['id']);
        
        $this->assertArrayHasKey('lastName', $responseContent['user']['addresses'][$g]);
        
        $this->assertNotNull($responseContent['user']['addresses'][$g]['lastName']);
        
        $this->assertIsString($responseContent['user']['addresses'][$g]['lastName']);
        
        $this->assertArrayHasKey('phone', $responseContent['user']['addresses'][$g]);
        
        if ($responseContent['user']['addresses'][$g]['phone']) {
        
        $this->assertIsString($responseContent['user']['addresses'][$g]['phone']);
        
        }
        
        $this->assertArrayHasKey('postalCode', $responseContent['user']['addresses'][$g]);
        
        $this->assertNotNull($responseContent['user']['addresses'][$g]['postalCode']);
        
        $this->assertIsString($responseContent['user']['addresses'][$g]['postalCode']);
        
        $this->assertArrayHasKey('streetAddress1', $responseContent['user']['addresses'][$g]);
        
        $this->assertNotNull($responseContent['user']['addresses'][$g]['streetAddress1']);
        
        $this->assertIsString($responseContent['user']['addresses'][$g]['streetAddress1']);
        
        $this->assertArrayHasKey('streetAddress2', $responseContent['user']['addresses'][$g]);
        
        $this->assertNotNull($responseContent['user']['addresses'][$g]['streetAddress2']);
        
        $this->assertIsString($responseContent['user']['addresses'][$g]['streetAddress2']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('defaultBillingAddress', $responseContent['user']);
        
        if ($responseContent['user']['defaultBillingAddress']) {
        
        $this->assertEquals('Address' , $responseContent['user']['defaultBillingAddress']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['user']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['id']);
        
        }
        
        $this->assertArrayHasKey('defaultShippingAddress', $responseContent['user']);
        
        if ($responseContent['user']['defaultShippingAddress']) {
        
        $this->assertEquals('Address' , $responseContent['user']['defaultShippingAddress']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['user']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['id']);
        
        }
        
        }
        

    }
}