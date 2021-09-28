<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q49afa8b5f53c5302b7eeea9db36e364dTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment PluginFragment on Plugin {\n  id\n  name\n  description\n  active\n  __typename\n}\n\nfragment PluginsDetailsFragment on Plugin {\n  ...PluginFragment\n  configuration {\n    name\n    type\n    value\n    helpText\n    label\n    __typename\n  }\n  __typename\n}\n\nquery Plugin($id: ID!) {\n  plugin(id: $id) {\n    ...PluginsDetailsFragment\n    __typename\n  }\n}\n", "variables": {"id": "mirumee.payments.razorpay"}, "operationName": "Plugin", "timesCalled": 2, "createdAt": "2021-09-04 20:12:35.801219+00:00", "updatedAt": "2021-09-04 20:28:49.970616+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('plugin', $responseContent);
        
        if ($responseContent['plugin']) {
        
        $this->assertEquals('Plugin' , $responseContent['plugin']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['plugin']);
        
        $this->assertNotNull($responseContent['plugin']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['plugin']);
        
        $this->assertNotNull($responseContent['plugin']['name']);
        
        $this->assertIsString($responseContent['plugin']['name']);
        
        $this->assertArrayHasKey('description', $responseContent['plugin']);
        
        $this->assertNotNull($responseContent['plugin']['description']);
        
        $this->assertIsString($responseContent['plugin']['description']);
        
        $this->assertArrayHasKey('active', $responseContent['plugin']);
        
        $this->assertNotNull($responseContent['plugin']['active']);
        
        $this->assertIsBool($responseContent['plugin']['active']);
        
        $this->assertArrayHasKey('configuration', $responseContent['plugin']);
        
        if ($responseContent['plugin']['configuration']) {
        
        $this->assertIsArray($responseContent['plugin']['configuration']);
        
        for($g = 0; $g < count($responseContent['plugin']['configuration']); $g++) {
        
        if ($responseContent['plugin']['configuration'][$g]) {
        
        $this->assertEquals('ConfigurationItem' , $responseContent['plugin']['configuration'][$g]['__typename']);
        
        $this->assertArrayHasKey('name', $responseContent['plugin']['configuration'][$g]);
        
        $this->assertNotNull($responseContent['plugin']['configuration'][$g]['name']);
        
        $this->assertIsString($responseContent['plugin']['configuration'][$g]['name']);
        
        $this->assertArrayHasKey('type', $responseContent['plugin']['configuration'][$g]);
        
        if ($responseContent['plugin']['configuration'][$g]['type']) {
        
        $this->assertContains($responseContent['plugin']['configuration'][$g]['type'], ['STRING', 'BOOLEAN', 'SECRET', 'PASSWORD']);
        
        }
        
        $this->assertArrayHasKey('value', $responseContent['plugin']['configuration'][$g]);
        
        if ($responseContent['plugin']['configuration'][$g]['value']) {
        
        $this->assertIsString($responseContent['plugin']['configuration'][$g]['value']);
        
        }
        
        $this->assertArrayHasKey('helpText', $responseContent['plugin']['configuration'][$g]);
        
        if ($responseContent['plugin']['configuration'][$g]['helpText']) {
        
        $this->assertIsString($responseContent['plugin']['configuration'][$g]['helpText']);
        
        }
        
        $this->assertArrayHasKey('label', $responseContent['plugin']['configuration'][$g]);
        
        if ($responseContent['plugin']['configuration'][$g]['label']) {
        
        $this->assertIsString($responseContent['plugin']['configuration'][$g]['label']);
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}