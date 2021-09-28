<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q8e3d79736525520c9788e69dca22add3Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment PageInfoFragment on PageInfo {\n  endCursor\n  hasNextPage\n  hasPreviousPage\n  startCursor\n  __typename\n}\n\nfragment ShippingZoneFragment on ShippingZone {\n  id\n  countries {\n    code\n    country\n    __typename\n  }\n  name\n  __typename\n}\n\nquery ShippingZones($first: Int, $after: String, $last: Int, $before: String) {\n  shippingZones(first: $first, after: $after, last: $last, before: $before) {\n    edges {\n      node {\n        ...ShippingZoneFragment\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      ...PageInfoFragment\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 20}, "operationName": "ShippingZones", "timesCalled": 17, "createdAt": "2021-09-04 13:12:53.849680+00:00", "updatedAt": "2021-09-04 20:28:56.026312+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('shippingZones', $responseContent);
        
        if ($responseContent['shippingZones']) {
        
        $this->assertEquals('ShippingZoneCountableConnection' , $responseContent['shippingZones']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['shippingZones']);
        
        $this->assertNotNull($responseContent['shippingZones']['edges']);
        
        $this->assertIsArray($responseContent['shippingZones']['edges']);
        
        for($g = 0; $g < count($responseContent['shippingZones']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['shippingZones']['edges'][$g]);
        
        $this->assertEquals('ShippingZoneCountableEdge' , $responseContent['shippingZones']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['shippingZones']['edges'][$g]);
        
        $this->assertNotNull($responseContent['shippingZones']['edges'][$g]['node']);
        
        $this->assertEquals('ShippingZone' , $responseContent['shippingZones']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['shippingZones']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['shippingZones']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('countries', $responseContent['shippingZones']['edges'][$g]['node']);
        
        if ($responseContent['shippingZones']['edges'][$g]['node']['countries']) {
        
        $this->assertIsArray($responseContent['shippingZones']['edges'][$g]['node']['countries']);
        
        for($f = 0; $f < count($responseContent['shippingZones']['edges'][$g]['node']['countries']); $f++) {
        
        if ($responseContent['shippingZones']['edges'][$g]['node']['countries'][$f]) {
        
        $this->assertEquals('CountryDisplay' , $responseContent['shippingZones']['edges'][$g]['node']['countries'][$f]['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['shippingZones']['edges'][$g]['node']['countries'][$f]);
        
        $this->assertNotNull($responseContent['shippingZones']['edges'][$g]['node']['countries'][$f]['code']);
        
        $this->assertIsString($responseContent['shippingZones']['edges'][$g]['node']['countries'][$f]['code']);
        
        $this->assertArrayHasKey('country', $responseContent['shippingZones']['edges'][$g]['node']['countries'][$f]);
        
        $this->assertNotNull($responseContent['shippingZones']['edges'][$g]['node']['countries'][$f]['country']);
        
        $this->assertIsString($responseContent['shippingZones']['edges'][$g]['node']['countries'][$f]['country']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('name', $responseContent['shippingZones']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['shippingZones']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['shippingZones']['edges'][$g]['node']['name']);
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['shippingZones']);
        
        $this->assertNotNull($responseContent['shippingZones']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['shippingZones']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['shippingZones']['pageInfo']);
        
        if ($responseContent['shippingZones']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['shippingZones']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['shippingZones']['pageInfo']);
        
        $this->assertNotNull($responseContent['shippingZones']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['shippingZones']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['shippingZones']['pageInfo']);
        
        $this->assertNotNull($responseContent['shippingZones']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['shippingZones']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['shippingZones']['pageInfo']);
        
        if ($responseContent['shippingZones']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['shippingZones']['pageInfo']['startCursor']);
        
        }
        
        }
        

    }
}