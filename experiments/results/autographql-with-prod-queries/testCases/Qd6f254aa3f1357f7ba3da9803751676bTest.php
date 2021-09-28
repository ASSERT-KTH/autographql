<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qd6f254aa3f1357f7ba3da9803751676bTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment Address on Address {\n  id\n  firstName\n  lastName\n  companyName\n  streetAddress1\n  streetAddress2\n  city\n  postalCode\n  country {\n    code\n    country\n    __typename\n  }\n  countryArea\n  phone\n  isDefaultBillingAddress\n  isDefaultShippingAddress\n  __typename\n}\n\nfragment User on User {\n  id\n  email\n  firstName\n  lastName\n  isStaff\n  defaultShippingAddress {\n    ...Address\n    __typename\n  }\n  defaultBillingAddress {\n    ...Address\n    __typename\n  }\n  addresses {\n    ...Address\n    __typename\n  }\n  __typename\n}\n\nquery UserDetails {\n  me {\n    ...User\n    __typename\n  }\n}\n", "variables": {}, "operationName": "UserDetails", "timesCalled": 8, "createdAt": "2021-09-04 12:32:56.174770+00:00", "updatedAt": "2021-09-04 20:29:01.566389+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('me', $responseContent);
        
        if ($responseContent['me']) {
        
        $this->assertEquals('User' , $responseContent['me']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['me']);
        
        $this->assertNotNull($responseContent['me']['id']);
        
        $this->assertArrayHasKey('email', $responseContent['me']);
        
        $this->assertNotNull($responseContent['me']['email']);
        
        $this->assertIsString($responseContent['me']['email']);
        
        $this->assertArrayHasKey('firstName', $responseContent['me']);
        
        $this->assertNotNull($responseContent['me']['firstName']);
        
        $this->assertIsString($responseContent['me']['firstName']);
        
        $this->assertArrayHasKey('lastName', $responseContent['me']);
        
        $this->assertNotNull($responseContent['me']['lastName']);
        
        $this->assertIsString($responseContent['me']['lastName']);
        
        $this->assertArrayHasKey('isStaff', $responseContent['me']);
        
        $this->assertNotNull($responseContent['me']['isStaff']);
        
        $this->assertIsBool($responseContent['me']['isStaff']);
        
        $this->assertArrayHasKey('defaultShippingAddress', $responseContent['me']);
        
        if ($responseContent['me']['defaultShippingAddress']) {
        
        $this->assertEquals('Address' , $responseContent['me']['defaultShippingAddress']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['me']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['me']['defaultShippingAddress']['id']);
        
        $this->assertArrayHasKey('firstName', $responseContent['me']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['me']['defaultShippingAddress']['firstName']);
        
        $this->assertIsString($responseContent['me']['defaultShippingAddress']['firstName']);
        
        $this->assertArrayHasKey('lastName', $responseContent['me']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['me']['defaultShippingAddress']['lastName']);
        
        $this->assertIsString($responseContent['me']['defaultShippingAddress']['lastName']);
        
        $this->assertArrayHasKey('companyName', $responseContent['me']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['me']['defaultShippingAddress']['companyName']);
        
        $this->assertIsString($responseContent['me']['defaultShippingAddress']['companyName']);
        
        $this->assertArrayHasKey('streetAddress1', $responseContent['me']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['me']['defaultShippingAddress']['streetAddress1']);
        
        $this->assertIsString($responseContent['me']['defaultShippingAddress']['streetAddress1']);
        
        $this->assertArrayHasKey('streetAddress2', $responseContent['me']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['me']['defaultShippingAddress']['streetAddress2']);
        
        $this->assertIsString($responseContent['me']['defaultShippingAddress']['streetAddress2']);
        
        $this->assertArrayHasKey('city', $responseContent['me']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['me']['defaultShippingAddress']['city']);
        
        $this->assertIsString($responseContent['me']['defaultShippingAddress']['city']);
        
        $this->assertArrayHasKey('postalCode', $responseContent['me']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['me']['defaultShippingAddress']['postalCode']);
        
        $this->assertIsString($responseContent['me']['defaultShippingAddress']['postalCode']);
        
        $this->assertArrayHasKey('country', $responseContent['me']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['me']['defaultShippingAddress']['country']);
        
        $this->assertEquals('CountryDisplay' , $responseContent['me']['defaultShippingAddress']['country']['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['me']['defaultShippingAddress']['country']);
        
        $this->assertNotNull($responseContent['me']['defaultShippingAddress']['country']['code']);
        
        $this->assertIsString($responseContent['me']['defaultShippingAddress']['country']['code']);
        
        $this->assertArrayHasKey('country', $responseContent['me']['defaultShippingAddress']['country']);
        
        $this->assertNotNull($responseContent['me']['defaultShippingAddress']['country']['country']);
        
        $this->assertIsString($responseContent['me']['defaultShippingAddress']['country']['country']);
        
        $this->assertArrayHasKey('countryArea', $responseContent['me']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['me']['defaultShippingAddress']['countryArea']);
        
        $this->assertIsString($responseContent['me']['defaultShippingAddress']['countryArea']);
        
        $this->assertArrayHasKey('phone', $responseContent['me']['defaultShippingAddress']);
        
        if ($responseContent['me']['defaultShippingAddress']['phone']) {
        
        $this->assertIsString($responseContent['me']['defaultShippingAddress']['phone']);
        
        }
        
        $this->assertArrayHasKey('isDefaultBillingAddress', $responseContent['me']['defaultShippingAddress']);
        
        if ($responseContent['me']['defaultShippingAddress']['isDefaultBillingAddress']) {
        
        $this->assertIsBool($responseContent['me']['defaultShippingAddress']['isDefaultBillingAddress']);
        
        }
        
        $this->assertArrayHasKey('isDefaultShippingAddress', $responseContent['me']['defaultShippingAddress']);
        
        if ($responseContent['me']['defaultShippingAddress']['isDefaultShippingAddress']) {
        
        $this->assertIsBool($responseContent['me']['defaultShippingAddress']['isDefaultShippingAddress']);
        
        }
        
        }
        
        $this->assertArrayHasKey('defaultBillingAddress', $responseContent['me']);
        
        if ($responseContent['me']['defaultBillingAddress']) {
        
        $this->assertEquals('Address' , $responseContent['me']['defaultBillingAddress']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['me']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['me']['defaultBillingAddress']['id']);
        
        $this->assertArrayHasKey('firstName', $responseContent['me']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['me']['defaultBillingAddress']['firstName']);
        
        $this->assertIsString($responseContent['me']['defaultBillingAddress']['firstName']);
        
        $this->assertArrayHasKey('lastName', $responseContent['me']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['me']['defaultBillingAddress']['lastName']);
        
        $this->assertIsString($responseContent['me']['defaultBillingAddress']['lastName']);
        
        $this->assertArrayHasKey('companyName', $responseContent['me']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['me']['defaultBillingAddress']['companyName']);
        
        $this->assertIsString($responseContent['me']['defaultBillingAddress']['companyName']);
        
        $this->assertArrayHasKey('streetAddress1', $responseContent['me']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['me']['defaultBillingAddress']['streetAddress1']);
        
        $this->assertIsString($responseContent['me']['defaultBillingAddress']['streetAddress1']);
        
        $this->assertArrayHasKey('streetAddress2', $responseContent['me']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['me']['defaultBillingAddress']['streetAddress2']);
        
        $this->assertIsString($responseContent['me']['defaultBillingAddress']['streetAddress2']);
        
        $this->assertArrayHasKey('city', $responseContent['me']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['me']['defaultBillingAddress']['city']);
        
        $this->assertIsString($responseContent['me']['defaultBillingAddress']['city']);
        
        $this->assertArrayHasKey('postalCode', $responseContent['me']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['me']['defaultBillingAddress']['postalCode']);
        
        $this->assertIsString($responseContent['me']['defaultBillingAddress']['postalCode']);
        
        $this->assertArrayHasKey('country', $responseContent['me']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['me']['defaultBillingAddress']['country']);
        
        $this->assertEquals('CountryDisplay' , $responseContent['me']['defaultBillingAddress']['country']['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['me']['defaultBillingAddress']['country']);
        
        $this->assertNotNull($responseContent['me']['defaultBillingAddress']['country']['code']);
        
        $this->assertIsString($responseContent['me']['defaultBillingAddress']['country']['code']);
        
        $this->assertArrayHasKey('country', $responseContent['me']['defaultBillingAddress']['country']);
        
        $this->assertNotNull($responseContent['me']['defaultBillingAddress']['country']['country']);
        
        $this->assertIsString($responseContent['me']['defaultBillingAddress']['country']['country']);
        
        $this->assertArrayHasKey('countryArea', $responseContent['me']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['me']['defaultBillingAddress']['countryArea']);
        
        $this->assertIsString($responseContent['me']['defaultBillingAddress']['countryArea']);
        
        $this->assertArrayHasKey('phone', $responseContent['me']['defaultBillingAddress']);
        
        if ($responseContent['me']['defaultBillingAddress']['phone']) {
        
        $this->assertIsString($responseContent['me']['defaultBillingAddress']['phone']);
        
        }
        
        $this->assertArrayHasKey('isDefaultBillingAddress', $responseContent['me']['defaultBillingAddress']);
        
        if ($responseContent['me']['defaultBillingAddress']['isDefaultBillingAddress']) {
        
        $this->assertIsBool($responseContent['me']['defaultBillingAddress']['isDefaultBillingAddress']);
        
        }
        
        $this->assertArrayHasKey('isDefaultShippingAddress', $responseContent['me']['defaultBillingAddress']);
        
        if ($responseContent['me']['defaultBillingAddress']['isDefaultShippingAddress']) {
        
        $this->assertIsBool($responseContent['me']['defaultBillingAddress']['isDefaultShippingAddress']);
        
        }
        
        }
        
        $this->assertArrayHasKey('addresses', $responseContent['me']);
        
        if ($responseContent['me']['addresses']) {
        
        $this->assertIsArray($responseContent['me']['addresses']);
        
        for($g = 0; $g < count($responseContent['me']['addresses']); $g++) {
        
        if ($responseContent['me']['addresses'][$g]) {
        
        $this->assertEquals('Address' , $responseContent['me']['addresses'][$g]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['me']['addresses'][$g]);
        
        $this->assertNotNull($responseContent['me']['addresses'][$g]['id']);
        
        $this->assertArrayHasKey('firstName', $responseContent['me']['addresses'][$g]);
        
        $this->assertNotNull($responseContent['me']['addresses'][$g]['firstName']);
        
        $this->assertIsString($responseContent['me']['addresses'][$g]['firstName']);
        
        $this->assertArrayHasKey('lastName', $responseContent['me']['addresses'][$g]);
        
        $this->assertNotNull($responseContent['me']['addresses'][$g]['lastName']);
        
        $this->assertIsString($responseContent['me']['addresses'][$g]['lastName']);
        
        $this->assertArrayHasKey('companyName', $responseContent['me']['addresses'][$g]);
        
        $this->assertNotNull($responseContent['me']['addresses'][$g]['companyName']);
        
        $this->assertIsString($responseContent['me']['addresses'][$g]['companyName']);
        
        $this->assertArrayHasKey('streetAddress1', $responseContent['me']['addresses'][$g]);
        
        $this->assertNotNull($responseContent['me']['addresses'][$g]['streetAddress1']);
        
        $this->assertIsString($responseContent['me']['addresses'][$g]['streetAddress1']);
        
        $this->assertArrayHasKey('streetAddress2', $responseContent['me']['addresses'][$g]);
        
        $this->assertNotNull($responseContent['me']['addresses'][$g]['streetAddress2']);
        
        $this->assertIsString($responseContent['me']['addresses'][$g]['streetAddress2']);
        
        $this->assertArrayHasKey('city', $responseContent['me']['addresses'][$g]);
        
        $this->assertNotNull($responseContent['me']['addresses'][$g]['city']);
        
        $this->assertIsString($responseContent['me']['addresses'][$g]['city']);
        
        $this->assertArrayHasKey('postalCode', $responseContent['me']['addresses'][$g]);
        
        $this->assertNotNull($responseContent['me']['addresses'][$g]['postalCode']);
        
        $this->assertIsString($responseContent['me']['addresses'][$g]['postalCode']);
        
        $this->assertArrayHasKey('country', $responseContent['me']['addresses'][$g]);
        
        $this->assertNotNull($responseContent['me']['addresses'][$g]['country']);
        
        $this->assertEquals('CountryDisplay' , $responseContent['me']['addresses'][$g]['country']['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['me']['addresses'][$g]['country']);
        
        $this->assertNotNull($responseContent['me']['addresses'][$g]['country']['code']);
        
        $this->assertIsString($responseContent['me']['addresses'][$g]['country']['code']);
        
        $this->assertArrayHasKey('country', $responseContent['me']['addresses'][$g]['country']);
        
        $this->assertNotNull($responseContent['me']['addresses'][$g]['country']['country']);
        
        $this->assertIsString($responseContent['me']['addresses'][$g]['country']['country']);
        
        $this->assertArrayHasKey('countryArea', $responseContent['me']['addresses'][$g]);
        
        $this->assertNotNull($responseContent['me']['addresses'][$g]['countryArea']);
        
        $this->assertIsString($responseContent['me']['addresses'][$g]['countryArea']);
        
        $this->assertArrayHasKey('phone', $responseContent['me']['addresses'][$g]);
        
        if ($responseContent['me']['addresses'][$g]['phone']) {
        
        $this->assertIsString($responseContent['me']['addresses'][$g]['phone']);
        
        }
        
        $this->assertArrayHasKey('isDefaultBillingAddress', $responseContent['me']['addresses'][$g]);
        
        if ($responseContent['me']['addresses'][$g]['isDefaultBillingAddress']) {
        
        $this->assertIsBool($responseContent['me']['addresses'][$g]['isDefaultBillingAddress']);
        
        }
        
        $this->assertArrayHasKey('isDefaultShippingAddress', $responseContent['me']['addresses'][$g]);
        
        if ($responseContent['me']['addresses'][$g]['isDefaultShippingAddress']) {
        
        $this->assertIsBool($responseContent['me']['addresses'][$g]['isDefaultShippingAddress']);
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}