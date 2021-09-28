<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qf8c6cf2386b1528ca104347ee9d60d72Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "query CheckExportFileStatus($id: ID!) {\n  exportFile(id: $id) {\n    id\n    status\n    __typename\n  }\n}\n", "variables": {"id": "RXhwb3J0RmlsZTox"}, "operationName": "CheckExportFileStatus", "timesCalled": 2, "createdAt": "2021-09-04 13:07:57.729810+00:00", "updatedAt": "2021-09-04 20:29:06.427229+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('exportFile', $responseContent);
        
        if ($responseContent['exportFile']) {
        
        $this->assertEquals('ExportFile' , $responseContent['exportFile']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['exportFile']);
        
        $this->assertNotNull($responseContent['exportFile']['id']);
        
        $this->assertArrayHasKey('status', $responseContent['exportFile']);
        
        $this->assertNotNull($responseContent['exportFile']['status']);
        
        $this->assertContains($responseContent['exportFile']['status'], ['PENDING', 'SUCCESS', 'FAILED', 'DELETED']);
        
        }
        

    }
}