<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q903717b29f4f507da042550a6f28c226Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "query AppsInstallations {\n  appsInstallations {\n    status\n    message\n    appName\n    manifestUrl\n    id\n    __typename\n  }\n}\n", "variables": {}, "operationName": "AppsInstallations", "timesCalled": 17, "createdAt": "2021-09-04 13:16:02.491922+00:00", "updatedAt": "2021-09-05 13:36:17.231795+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('appsInstallations', $responseContent);
        
        $this->assertNotNull($responseContent['appsInstallations']);
        
        $this->assertIsArray($responseContent['appsInstallations']);
        
        for($g = 0; $g < count($responseContent['appsInstallations']); $g++) {
        
        $this->assertNotNull($responseContent['appsInstallations'][$g]);
        
        $this->assertEquals('AppInstallation' , $responseContent['appsInstallations'][$g]['__typename']);
        
        $this->assertArrayHasKey('status', $responseContent['appsInstallations'][$g]);
        
        $this->assertNotNull($responseContent['appsInstallations'][$g]['status']);
        
        $this->assertContains($responseContent['appsInstallations'][$g]['status'], ['PENDING', 'SUCCESS', 'FAILED', 'DELETED']);
        
        $this->assertArrayHasKey('message', $responseContent['appsInstallations'][$g]);
        
        if ($responseContent['appsInstallations'][$g]['message']) {
        
        $this->assertIsString($responseContent['appsInstallations'][$g]['message']);
        
        }
        
        $this->assertArrayHasKey('appName', $responseContent['appsInstallations'][$g]);
        
        $this->assertNotNull($responseContent['appsInstallations'][$g]['appName']);
        
        $this->assertIsString($responseContent['appsInstallations'][$g]['appName']);
        
        $this->assertArrayHasKey('manifestUrl', $responseContent['appsInstallations'][$g]);
        
        $this->assertNotNull($responseContent['appsInstallations'][$g]['manifestUrl']);
        
        $this->assertIsString($responseContent['appsInstallations'][$g]['manifestUrl']);
        
        $this->assertArrayHasKey('id', $responseContent['appsInstallations'][$g]);
        
        $this->assertNotNull($responseContent['appsInstallations'][$g]['id']);
        
        }
        

    }
}