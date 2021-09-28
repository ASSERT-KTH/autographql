<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q3e407d14211359739374cfad8da056c6Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment AddressFragment on Address {\n  city\n  cityArea\n  companyName\n  country {\n    __typename\n    code\n    country\n  }\n  countryArea\n  firstName\n  id\n  lastName\n  phone\n  postalCode\n  streetAddress1\n  streetAddress2\n  __typename\n}\n\nfragment ShopFragment on Shop {\n  authorizationKeys {\n    key\n    name\n    __typename\n  }\n  companyAddress {\n    ...AddressFragment\n    __typename\n  }\n  countries {\n    code\n    country\n    __typename\n  }\n  customerSetPasswordUrl\n  defaultMailSenderAddress\n  defaultMailSenderName\n  description\n  domain {\n    host\n    __typename\n  }\n  name\n  __typename\n}\n\nquery SiteSettings {\n  shop {\n    ...ShopFragment\n    __typename\n  }\n}\n", "variables": {}, "operationName": "SiteSettings", "timesCalled": 3, "createdAt": "2021-09-04 13:09:33.696228+00:00", "updatedAt": "2021-09-04 20:28:49.236924+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('shop', $responseContent);
        
        $this->assertNotNull($responseContent['shop']);
        
        $this->assertEquals('Shop' , $responseContent['shop']['__typename']);
        
        $this->assertArrayHasKey('authorizationKeys', $responseContent['shop']);
        
        $this->assertNotNull($responseContent['shop']['authorizationKeys']);
        
        $this->assertIsArray($responseContent['shop']['authorizationKeys']);
        
        for($g = 0; $g < count($responseContent['shop']['authorizationKeys']); $g++) {
        
        if ($responseContent['shop']['authorizationKeys'][$g]) {
        
        $this->assertEquals('AuthorizationKey' , $responseContent['shop']['authorizationKeys'][$g]['__typename']);
        
        $this->assertArrayHasKey('key', $responseContent['shop']['authorizationKeys'][$g]);
        
        $this->assertNotNull($responseContent['shop']['authorizationKeys'][$g]['key']);
        
        $this->assertIsString($responseContent['shop']['authorizationKeys'][$g]['key']);
        
        $this->assertArrayHasKey('name', $responseContent['shop']['authorizationKeys'][$g]);
        
        $this->assertNotNull($responseContent['shop']['authorizationKeys'][$g]['name']);
        
        $this->assertContains($responseContent['shop']['authorizationKeys'][$g]['name'], ['FACEBOOK', 'GOOGLE_OAUTH2']);
        
        }
        
        }
        
        $this->assertArrayHasKey('companyAddress', $responseContent['shop']);
        
        if ($responseContent['shop']['companyAddress']) {
        
        $this->assertEquals('Address' , $responseContent['shop']['companyAddress']['__typename']);
        
        $this->assertArrayHasKey('city', $responseContent['shop']['companyAddress']);
        
        $this->assertNotNull($responseContent['shop']['companyAddress']['city']);
        
        $this->assertIsString($responseContent['shop']['companyAddress']['city']);
        
        $this->assertArrayHasKey('cityArea', $responseContent['shop']['companyAddress']);
        
        $this->assertNotNull($responseContent['shop']['companyAddress']['cityArea']);
        
        $this->assertIsString($responseContent['shop']['companyAddress']['cityArea']);
        
        $this->assertArrayHasKey('companyName', $responseContent['shop']['companyAddress']);
        
        $this->assertNotNull($responseContent['shop']['companyAddress']['companyName']);
        
        $this->assertIsString($responseContent['shop']['companyAddress']['companyName']);
        
        $this->assertArrayHasKey('country', $responseContent['shop']['companyAddress']);
        
        $this->assertNotNull($responseContent['shop']['companyAddress']['country']);
        
        $this->assertEquals('CountryDisplay' , $responseContent['shop']['companyAddress']['country']['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['shop']['companyAddress']['country']);
        
        $this->assertNotNull($responseContent['shop']['companyAddress']['country']['code']);
        
        $this->assertIsString($responseContent['shop']['companyAddress']['country']['code']);
        
        $this->assertArrayHasKey('country', $responseContent['shop']['companyAddress']['country']);
        
        $this->assertNotNull($responseContent['shop']['companyAddress']['country']['country']);
        
        $this->assertIsString($responseContent['shop']['companyAddress']['country']['country']);
        
        $this->assertArrayHasKey('countryArea', $responseContent['shop']['companyAddress']);
        
        $this->assertNotNull($responseContent['shop']['companyAddress']['countryArea']);
        
        $this->assertIsString($responseContent['shop']['companyAddress']['countryArea']);
        
        $this->assertArrayHasKey('firstName', $responseContent['shop']['companyAddress']);
        
        $this->assertNotNull($responseContent['shop']['companyAddress']['firstName']);
        
        $this->assertIsString($responseContent['shop']['companyAddress']['firstName']);
        
        $this->assertArrayHasKey('id', $responseContent['shop']['companyAddress']);
        
        $this->assertNotNull($responseContent['shop']['companyAddress']['id']);
        
        $this->assertArrayHasKey('lastName', $responseContent['shop']['companyAddress']);
        
        $this->assertNotNull($responseContent['shop']['companyAddress']['lastName']);
        
        $this->assertIsString($responseContent['shop']['companyAddress']['lastName']);
        
        $this->assertArrayHasKey('phone', $responseContent['shop']['companyAddress']);
        
        if ($responseContent['shop']['companyAddress']['phone']) {
        
        $this->assertIsString($responseContent['shop']['companyAddress']['phone']);
        
        }
        
        $this->assertArrayHasKey('postalCode', $responseContent['shop']['companyAddress']);
        
        $this->assertNotNull($responseContent['shop']['companyAddress']['postalCode']);
        
        $this->assertIsString($responseContent['shop']['companyAddress']['postalCode']);
        
        $this->assertArrayHasKey('streetAddress1', $responseContent['shop']['companyAddress']);
        
        $this->assertNotNull($responseContent['shop']['companyAddress']['streetAddress1']);
        
        $this->assertIsString($responseContent['shop']['companyAddress']['streetAddress1']);
        
        $this->assertArrayHasKey('streetAddress2', $responseContent['shop']['companyAddress']);
        
        $this->assertNotNull($responseContent['shop']['companyAddress']['streetAddress2']);
        
        $this->assertIsString($responseContent['shop']['companyAddress']['streetAddress2']);
        
        }
        
        $this->assertArrayHasKey('countries', $responseContent['shop']);
        
        $this->assertNotNull($responseContent['shop']['countries']);
        
        $this->assertIsArray($responseContent['shop']['countries']);
        
        for($g = 0; $g < count($responseContent['shop']['countries']); $g++) {
        
        $this->assertNotNull($responseContent['shop']['countries'][$g]);
        
        $this->assertEquals('CountryDisplay' , $responseContent['shop']['countries'][$g]['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['shop']['countries'][$g]);
        
        $this->assertNotNull($responseContent['shop']['countries'][$g]['code']);
        
        $this->assertIsString($responseContent['shop']['countries'][$g]['code']);
        
        $this->assertArrayHasKey('country', $responseContent['shop']['countries'][$g]);
        
        $this->assertNotNull($responseContent['shop']['countries'][$g]['country']);
        
        $this->assertIsString($responseContent['shop']['countries'][$g]['country']);
        
        }
        
        $this->assertArrayHasKey('customerSetPasswordUrl', $responseContent['shop']);
        
        if ($responseContent['shop']['customerSetPasswordUrl']) {
        
        $this->assertIsString($responseContent['shop']['customerSetPasswordUrl']);
        
        }
        
        $this->assertArrayHasKey('defaultMailSenderAddress', $responseContent['shop']);
        
        if ($responseContent['shop']['defaultMailSenderAddress']) {
        
        $this->assertIsString($responseContent['shop']['defaultMailSenderAddress']);
        
        }
        
        $this->assertArrayHasKey('defaultMailSenderName', $responseContent['shop']);
        
        if ($responseContent['shop']['defaultMailSenderName']) {
        
        $this->assertIsString($responseContent['shop']['defaultMailSenderName']);
        
        }
        
        $this->assertArrayHasKey('description', $responseContent['shop']);
        
        if ($responseContent['shop']['description']) {
        
        $this->assertIsString($responseContent['shop']['description']);
        
        }
        
        $this->assertArrayHasKey('domain', $responseContent['shop']);
        
        $this->assertNotNull($responseContent['shop']['domain']);
        
        $this->assertEquals('Domain' , $responseContent['shop']['domain']['__typename']);
        
        $this->assertArrayHasKey('host', $responseContent['shop']['domain']);
        
        $this->assertNotNull($responseContent['shop']['domain']['host']);
        
        $this->assertIsString($responseContent['shop']['domain']['host']);
        
        $this->assertArrayHasKey('name', $responseContent['shop']);
        
        $this->assertNotNull($responseContent['shop']['name']);
        
        $this->assertIsString($responseContent['shop']['name']);
        

    }
}