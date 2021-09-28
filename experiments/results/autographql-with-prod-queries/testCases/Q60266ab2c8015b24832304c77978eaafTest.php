<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q60266ab2c8015b24832304c77978eaafTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment WebhookFragment on Webhook {\n  id\n  name\n  isActive\n  app {\n    id\n    name\n    __typename\n  }\n  __typename\n}\n\nquery WebhookDetails($id: ID!) {\n  webhook(id: $id) {\n    ...WebhookFragment\n    events {\n      eventType\n      __typename\n    }\n    secretKey\n    targetUrl\n    __typename\n  }\n}\n", "variables": {"id": "V2ViaG9vazox"}, "operationName": "WebhookDetails", "timesCalled": 7, "createdAt": "2021-09-04 13:30:21.781928+00:00", "updatedAt": "2021-09-04 20:28:51.508510+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('webhook', $responseContent);
        
        if ($responseContent['webhook']) {
        
        $this->assertEquals('Webhook' , $responseContent['webhook']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['webhook']);
        
        $this->assertNotNull($responseContent['webhook']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['webhook']);
        
        $this->assertNotNull($responseContent['webhook']['name']);
        
        $this->assertIsString($responseContent['webhook']['name']);
        
        $this->assertArrayHasKey('isActive', $responseContent['webhook']);
        
        $this->assertNotNull($responseContent['webhook']['isActive']);
        
        $this->assertIsBool($responseContent['webhook']['isActive']);
        
        $this->assertArrayHasKey('app', $responseContent['webhook']);
        
        $this->assertNotNull($responseContent['webhook']['app']);
        
        $this->assertEquals('App' , $responseContent['webhook']['app']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['webhook']['app']);
        
        $this->assertNotNull($responseContent['webhook']['app']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['webhook']['app']);
        
        if ($responseContent['webhook']['app']['name']) {
        
        $this->assertIsString($responseContent['webhook']['app']['name']);
        
        }
        
        $this->assertArrayHasKey('events', $responseContent['webhook']);
        
        $this->assertNotNull($responseContent['webhook']['events']);
        
        $this->assertIsArray($responseContent['webhook']['events']);
        
        for($g = 0; $g < count($responseContent['webhook']['events']); $g++) {
        
        $this->assertNotNull($responseContent['webhook']['events'][$g]);
        
        $this->assertEquals('WebhookEvent' , $responseContent['webhook']['events'][$g]['__typename']);
        
        $this->assertArrayHasKey('eventType', $responseContent['webhook']['events'][$g]);
        
        $this->assertNotNull($responseContent['webhook']['events'][$g]['eventType']);
        
        $this->assertContains($responseContent['webhook']['events'][$g]['eventType'], ['ANY_EVENTS', 'ORDER_CREATED', 'ORDER_FULLY_PAID', 'ORDER_UPDATED', 'ORDER_CANCELLED', 'ORDER_FULFILLED', 'INVOICE_REQUESTED', 'INVOICE_DELETED', 'INVOICE_SENT', 'CUSTOMER_CREATED', 'PRODUCT_CREATED', 'PRODUCT_UPDATED', 'CHECKOUT_QUANTITY_CHANGED', 'CHECKOUT_CREATED', 'CHECKOUT_UPDATED', 'FULFILLMENT_CREATED']);
        
        }
        
        $this->assertArrayHasKey('secretKey', $responseContent['webhook']);
        
        if ($responseContent['webhook']['secretKey']) {
        
        $this->assertIsString($responseContent['webhook']['secretKey']);
        
        }
        
        $this->assertArrayHasKey('targetUrl', $responseContent['webhook']);
        
        $this->assertNotNull($responseContent['webhook']['targetUrl']);
        
        $this->assertIsString($responseContent['webhook']['targetUrl']);
        
        }
        

    }
}