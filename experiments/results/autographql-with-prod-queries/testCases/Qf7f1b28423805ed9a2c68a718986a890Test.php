<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qf7f1b28423805ed9a2c68a718986a890Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "query CustomerCreateData {\n  shop {\n    countries {\n      code\n      country\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {}, "operationName": "CustomerCreateData", "timesCalled": 2, "createdAt": "2021-09-04 19:17:54.612874+00:00", "updatedAt": "2021-09-04 20:29:06.281504+00:00"}
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
        

    }
}