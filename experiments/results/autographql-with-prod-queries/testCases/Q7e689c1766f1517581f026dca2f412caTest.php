<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q7e689c1766f1517581f026dca2f412caTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "query ProductTypeCreateData {\n  shop {\n    defaultWeightUnit\n    __typename\n  }\n  taxTypes {\n    taxCode\n    description\n    __typename\n  }\n}\n", "variables": {}, "operationName": "ProductTypeCreateData", "timesCalled": 2, "createdAt": "2021-09-04 13:23:43.327775+00:00", "updatedAt": "2021-09-04 20:28:54.426211+00:00"}
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
        
        $this->assertArrayHasKey('defaultWeightUnit', $responseContent['shop']);
        
        if ($responseContent['shop']['defaultWeightUnit']) {
        
        $this->assertContains($responseContent['shop']['defaultWeightUnit'], ['KG', 'LB', 'OZ', 'G']);
        
        }
        
        $this->assertArrayHasKey('taxTypes', $responseContent);
        
        if ($responseContent['taxTypes']) {
        
        $this->assertIsArray($responseContent['taxTypes']);
        
        for($g = 0; $g < count($responseContent['taxTypes']); $g++) {
        
        if ($responseContent['taxTypes'][$g]) {
        
        $this->assertEquals('TaxType' , $responseContent['taxTypes'][$g]['__typename']);
        
        $this->assertArrayHasKey('taxCode', $responseContent['taxTypes'][$g]);
        
        if ($responseContent['taxTypes'][$g]['taxCode']) {
        
        $this->assertIsString($responseContent['taxTypes'][$g]['taxCode']);
        
        }
        
        $this->assertArrayHasKey('description', $responseContent['taxTypes'][$g]);
        
        if ($responseContent['taxTypes'][$g]['description']) {
        
        $this->assertIsString($responseContent['taxTypes'][$g]['description']);
        
        }
        
        }
        
        }
        
        }
        

    }
}