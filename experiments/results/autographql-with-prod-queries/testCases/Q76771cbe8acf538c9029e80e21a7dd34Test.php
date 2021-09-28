<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q76771cbe8acf538c9029e80e21a7dd34Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment AddressFragment on Address {\n  city\n  cityArea\n  companyName\n  country {\n    __typename\n    code\n    country\n  }\n  countryArea\n  firstName\n  id\n  lastName\n  phone\n  postalCode\n  streetAddress1\n  streetAddress2\n  __typename\n}\n\nfragment WarehouseFragment on Warehouse {\n  id\n  name\n  __typename\n}\n\nfragment WarehouseWithShippingFragment on Warehouse {\n  ...WarehouseFragment\n  shippingZones(first: 100) {\n    edges {\n      node {\n        id\n        name\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nfragment WarehouseDetailsFragment on Warehouse {\n  ...WarehouseWithShippingFragment\n  address {\n    ...AddressFragment\n    __typename\n  }\n  __typename\n}\n\nquery WarehouseDetails($id: ID!) {\n  warehouse(id: $id) {\n    ...WarehouseDetailsFragment\n    __typename\n  }\n}\n", "variables": {"id": "V2FyZWhvdXNlOmYzM2U2YzQ0LTU4YjctNGRkYS1hODA0LTU3M2ZhMTA1OGVjYg=="}, "operationName": "WarehouseDetails", "timesCalled": 2, "createdAt": "2021-09-04 19:41:34.883634+00:00", "updatedAt": "2021-09-04 20:28:53.722628+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('warehouse', $responseContent);
        
        if ($responseContent['warehouse']) {
        
        $this->assertEquals('Warehouse' , $responseContent['warehouse']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['warehouse']);
        
        $this->assertNotNull($responseContent['warehouse']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['warehouse']);
        
        $this->assertNotNull($responseContent['warehouse']['name']);
        
        $this->assertIsString($responseContent['warehouse']['name']);
        
        $this->assertArrayHasKey('shippingZones', $responseContent['warehouse']);
        
        $this->assertNotNull($responseContent['warehouse']['shippingZones']);
        
        $this->assertEquals('ShippingZoneCountableConnection' , $responseContent['warehouse']['shippingZones']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['warehouse']['shippingZones']);
        
        $this->assertNotNull($responseContent['warehouse']['shippingZones']['edges']);
        
        $this->assertIsArray($responseContent['warehouse']['shippingZones']['edges']);
        
        for($g = 0; $g < count($responseContent['warehouse']['shippingZones']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['warehouse']['shippingZones']['edges'][$g]);
        
        $this->assertEquals('ShippingZoneCountableEdge' , $responseContent['warehouse']['shippingZones']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['warehouse']['shippingZones']['edges'][$g]);
        
        $this->assertNotNull($responseContent['warehouse']['shippingZones']['edges'][$g]['node']);
        
        $this->assertEquals('ShippingZone' , $responseContent['warehouse']['shippingZones']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['warehouse']['shippingZones']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['warehouse']['shippingZones']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['warehouse']['shippingZones']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['warehouse']['shippingZones']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['warehouse']['shippingZones']['edges'][$g]['node']['name']);
        
        }
        
        $this->assertArrayHasKey('address', $responseContent['warehouse']);
        
        $this->assertNotNull($responseContent['warehouse']['address']);
        
        $this->assertEquals('Address' , $responseContent['warehouse']['address']['__typename']);
        
        $this->assertArrayHasKey('city', $responseContent['warehouse']['address']);
        
        $this->assertNotNull($responseContent['warehouse']['address']['city']);
        
        $this->assertIsString($responseContent['warehouse']['address']['city']);
        
        $this->assertArrayHasKey('cityArea', $responseContent['warehouse']['address']);
        
        $this->assertNotNull($responseContent['warehouse']['address']['cityArea']);
        
        $this->assertIsString($responseContent['warehouse']['address']['cityArea']);
        
        $this->assertArrayHasKey('companyName', $responseContent['warehouse']['address']);
        
        $this->assertNotNull($responseContent['warehouse']['address']['companyName']);
        
        $this->assertIsString($responseContent['warehouse']['address']['companyName']);
        
        $this->assertArrayHasKey('country', $responseContent['warehouse']['address']);
        
        $this->assertNotNull($responseContent['warehouse']['address']['country']);
        
        $this->assertEquals('CountryDisplay' , $responseContent['warehouse']['address']['country']['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['warehouse']['address']['country']);
        
        $this->assertNotNull($responseContent['warehouse']['address']['country']['code']);
        
        $this->assertIsString($responseContent['warehouse']['address']['country']['code']);
        
        $this->assertArrayHasKey('country', $responseContent['warehouse']['address']['country']);
        
        $this->assertNotNull($responseContent['warehouse']['address']['country']['country']);
        
        $this->assertIsString($responseContent['warehouse']['address']['country']['country']);
        
        $this->assertArrayHasKey('countryArea', $responseContent['warehouse']['address']);
        
        $this->assertNotNull($responseContent['warehouse']['address']['countryArea']);
        
        $this->assertIsString($responseContent['warehouse']['address']['countryArea']);
        
        $this->assertArrayHasKey('firstName', $responseContent['warehouse']['address']);
        
        $this->assertNotNull($responseContent['warehouse']['address']['firstName']);
        
        $this->assertIsString($responseContent['warehouse']['address']['firstName']);
        
        $this->assertArrayHasKey('id', $responseContent['warehouse']['address']);
        
        $this->assertNotNull($responseContent['warehouse']['address']['id']);
        
        $this->assertArrayHasKey('lastName', $responseContent['warehouse']['address']);
        
        $this->assertNotNull($responseContent['warehouse']['address']['lastName']);
        
        $this->assertIsString($responseContent['warehouse']['address']['lastName']);
        
        $this->assertArrayHasKey('phone', $responseContent['warehouse']['address']);
        
        if ($responseContent['warehouse']['address']['phone']) {
        
        $this->assertIsString($responseContent['warehouse']['address']['phone']);
        
        }
        
        $this->assertArrayHasKey('postalCode', $responseContent['warehouse']['address']);
        
        $this->assertNotNull($responseContent['warehouse']['address']['postalCode']);
        
        $this->assertIsString($responseContent['warehouse']['address']['postalCode']);
        
        $this->assertArrayHasKey('streetAddress1', $responseContent['warehouse']['address']);
        
        $this->assertNotNull($responseContent['warehouse']['address']['streetAddress1']);
        
        $this->assertIsString($responseContent['warehouse']['address']['streetAddress1']);
        
        $this->assertArrayHasKey('streetAddress2', $responseContent['warehouse']['address']);
        
        $this->assertNotNull($responseContent['warehouse']['address']['streetAddress2']);
        
        $this->assertIsString($responseContent['warehouse']['address']['streetAddress2']);
        
        }
        

    }
}