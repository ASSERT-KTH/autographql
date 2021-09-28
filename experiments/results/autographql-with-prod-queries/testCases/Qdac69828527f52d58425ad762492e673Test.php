<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qdac69828527f52d58425ad762492e673Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "query CheckIfOrderExists($id: ID!) {\n  order(id: $id) {\n    id\n    status\n    __typename\n  }\n}\n", "variables": {"id": "T3JkZXI6NA=="}, "operationName": "CheckIfOrderExists", "timesCalled": 3, "createdAt": "2021-09-04 19:14:18.836563+00:00", "updatedAt": "2021-09-04 20:29:02.383871+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('order', $responseContent);
        
        if ($responseContent['order']) {
        
        $this->assertEquals('Order' , $responseContent['order']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['order']);
        
        $this->assertNotNull($responseContent['order']['id']);
        
        $this->assertArrayHasKey('status', $responseContent['order']);
        
        $this->assertNotNull($responseContent['order']['status']);
        
        $this->assertContains($responseContent['order']['status'], ['DRAFT', 'UNFULFILLED', 'PARTIALLY_FULFILLED', 'FULFILLED', 'CANCELED']);
        
        }
        

    }
}