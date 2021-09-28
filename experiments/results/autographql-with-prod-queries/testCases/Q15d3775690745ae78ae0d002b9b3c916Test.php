<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q15d3775690745ae78ae0d002b9b3c916Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment AppFragment on App {\n  id\n  name\n  created\n  isActive\n  type\n  homepageUrl\n  appUrl\n  configurationUrl\n  supportUrl\n  version\n  accessToken\n  privateMetadata {\n    key\n    value\n    __typename\n  }\n  metadata {\n    key\n    value\n    __typename\n  }\n  tokens {\n    authToken\n    id\n    name\n    __typename\n  }\n  webhooks {\n    ...WebhookFragment\n    __typename\n  }\n  __typename\n}\n\nfragment WebhookFragment on Webhook {\n  id\n  name\n  isActive\n  app {\n    id\n    name\n    __typename\n  }\n  __typename\n}\n\nquery App($id: ID!) {\n  app(id: $id) {\n    ...AppFragment\n    aboutApp\n    permissions {\n      code\n      name\n      __typename\n    }\n    dataPrivacy\n    dataPrivacyUrl\n    __typename\n  }\n}\n", "variables": {"id": "QXBwOjE="}, "operationName": "App", "timesCalled": 20, "createdAt": "2021-09-04 13:27:41.134248+00:00", "updatedAt": "2021-09-04 20:28:45.812389+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('app', $responseContent);
        
        if ($responseContent['app']) {
        
        $this->assertEquals('App' , $responseContent['app']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['app']);
        
        $this->assertNotNull($responseContent['app']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['app']);
        
        if ($responseContent['app']['name']) {
        
        $this->assertIsString($responseContent['app']['name']);
        
        }
        
        $this->assertArrayHasKey('created', $responseContent['app']);
        
        if ($responseContent['app']['created']) {
        
        }
        
        $this->assertArrayHasKey('isActive', $responseContent['app']);
        
        if ($responseContent['app']['isActive']) {
        
        $this->assertIsBool($responseContent['app']['isActive']);
        
        }
        
        $this->assertArrayHasKey('type', $responseContent['app']);
        
        if ($responseContent['app']['type']) {
        
        $this->assertContains($responseContent['app']['type'], ['LOCAL', 'THIRDPARTY']);
        
        }
        
        $this->assertArrayHasKey('homepageUrl', $responseContent['app']);
        
        if ($responseContent['app']['homepageUrl']) {
        
        $this->assertIsString($responseContent['app']['homepageUrl']);
        
        }
        
        $this->assertArrayHasKey('appUrl', $responseContent['app']);
        
        if ($responseContent['app']['appUrl']) {
        
        $this->assertIsString($responseContent['app']['appUrl']);
        
        }
        
        $this->assertArrayHasKey('configurationUrl', $responseContent['app']);
        
        if ($responseContent['app']['configurationUrl']) {
        
        $this->assertIsString($responseContent['app']['configurationUrl']);
        
        }
        
        $this->assertArrayHasKey('supportUrl', $responseContent['app']);
        
        if ($responseContent['app']['supportUrl']) {
        
        $this->assertIsString($responseContent['app']['supportUrl']);
        
        }
        
        $this->assertArrayHasKey('version', $responseContent['app']);
        
        if ($responseContent['app']['version']) {
        
        $this->assertIsString($responseContent['app']['version']);
        
        }
        
        $this->assertArrayHasKey('accessToken', $responseContent['app']);
        
        if ($responseContent['app']['accessToken']) {
        
        $this->assertIsString($responseContent['app']['accessToken']);
        
        }
        
        $this->assertArrayHasKey('privateMetadata', $responseContent['app']);
        
        $this->assertNotNull($responseContent['app']['privateMetadata']);
        
        $this->assertIsArray($responseContent['app']['privateMetadata']);
        
        for($g = 0; $g < count($responseContent['app']['privateMetadata']); $g++) {
        
        if ($responseContent['app']['privateMetadata'][$g]) {
        
        $this->assertEquals('MetadataItem' , $responseContent['app']['privateMetadata'][$g]['__typename']);
        
        $this->assertArrayHasKey('key', $responseContent['app']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['app']['privateMetadata'][$g]['key']);
        
        $this->assertIsString($responseContent['app']['privateMetadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['app']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['app']['privateMetadata'][$g]['value']);
        
        $this->assertIsString($responseContent['app']['privateMetadata'][$g]['value']);
        
        }
        
        }
        
        $this->assertArrayHasKey('metadata', $responseContent['app']);
        
        $this->assertNotNull($responseContent['app']['metadata']);
        
        $this->assertIsArray($responseContent['app']['metadata']);
        
        for($g = 0; $g < count($responseContent['app']['metadata']); $g++) {
        
        if ($responseContent['app']['metadata'][$g]) {
        
        $this->assertEquals('MetadataItem' , $responseContent['app']['metadata'][$g]['__typename']);
        
        $this->assertArrayHasKey('key', $responseContent['app']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['app']['metadata'][$g]['key']);
        
        $this->assertIsString($responseContent['app']['metadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['app']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['app']['metadata'][$g]['value']);
        
        $this->assertIsString($responseContent['app']['metadata'][$g]['value']);
        
        }
        
        }
        
        $this->assertArrayHasKey('tokens', $responseContent['app']);
        
        if ($responseContent['app']['tokens']) {
        
        $this->assertIsArray($responseContent['app']['tokens']);
        
        for($g = 0; $g < count($responseContent['app']['tokens']); $g++) {
        
        if ($responseContent['app']['tokens'][$g]) {
        
        $this->assertEquals('AppToken' , $responseContent['app']['tokens'][$g]['__typename']);
        
        $this->assertArrayHasKey('authToken', $responseContent['app']['tokens'][$g]);
        
        if ($responseContent['app']['tokens'][$g]['authToken']) {
        
        $this->assertIsString($responseContent['app']['tokens'][$g]['authToken']);
        
        }
        
        $this->assertArrayHasKey('id', $responseContent['app']['tokens'][$g]);
        
        $this->assertNotNull($responseContent['app']['tokens'][$g]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['app']['tokens'][$g]);
        
        if ($responseContent['app']['tokens'][$g]['name']) {
        
        $this->assertIsString($responseContent['app']['tokens'][$g]['name']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('webhooks', $responseContent['app']);
        
        if ($responseContent['app']['webhooks']) {
        
        $this->assertIsArray($responseContent['app']['webhooks']);
        
        for($g = 0; $g < count($responseContent['app']['webhooks']); $g++) {
        
        if ($responseContent['app']['webhooks'][$g]) {
        
        $this->assertEquals('Webhook' , $responseContent['app']['webhooks'][$g]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['app']['webhooks'][$g]);
        
        $this->assertNotNull($responseContent['app']['webhooks'][$g]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['app']['webhooks'][$g]);
        
        $this->assertNotNull($responseContent['app']['webhooks'][$g]['name']);
        
        $this->assertIsString($responseContent['app']['webhooks'][$g]['name']);
        
        $this->assertArrayHasKey('isActive', $responseContent['app']['webhooks'][$g]);
        
        $this->assertNotNull($responseContent['app']['webhooks'][$g]['isActive']);
        
        $this->assertIsBool($responseContent['app']['webhooks'][$g]['isActive']);
        
        $this->assertArrayHasKey('app', $responseContent['app']['webhooks'][$g]);
        
        $this->assertNotNull($responseContent['app']['webhooks'][$g]['app']);
        
        $this->assertEquals('App' , $responseContent['app']['webhooks'][$g]['app']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['app']['webhooks'][$g]['app']);
        
        $this->assertNotNull($responseContent['app']['webhooks'][$g]['app']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['app']['webhooks'][$g]['app']);
        
        if ($responseContent['app']['webhooks'][$g]['app']['name']) {
        
        $this->assertIsString($responseContent['app']['webhooks'][$g]['app']['name']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('aboutApp', $responseContent['app']);
        
        if ($responseContent['app']['aboutApp']) {
        
        $this->assertIsString($responseContent['app']['aboutApp']);
        
        }
        
        $this->assertArrayHasKey('permissions', $responseContent['app']);
        
        if ($responseContent['app']['permissions']) {
        
        $this->assertIsArray($responseContent['app']['permissions']);
        
        for($g = 0; $g < count($responseContent['app']['permissions']); $g++) {
        
        if ($responseContent['app']['permissions'][$g]) {
        
        $this->assertEquals('Permission' , $responseContent['app']['permissions'][$g]['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['app']['permissions'][$g]);
        
        $this->assertNotNull($responseContent['app']['permissions'][$g]['code']);
        
        $this->assertContains($responseContent['app']['permissions'][$g]['code'], ['MANAGE_USERS', 'MANAGE_STAFF', 'MANAGE_SERVICE_ACCOUNTS', 'MANAGE_APPS', 'MANAGE_DISCOUNTS', 'MANAGE_PLUGINS', 'MANAGE_GIFT_CARD', 'MANAGE_MENUS', 'MANAGE_ORDERS', 'MANAGE_PAGES', 'MANAGE_PRODUCTS', 'MANAGE_PRODUCT_TYPES_AND_ATTRIBUTES', 'MANAGE_SHIPPING', 'MANAGE_SETTINGS', 'MANAGE_TRANSLATIONS', 'MANAGE_CHECKOUTS']);
        
        $this->assertArrayHasKey('name', $responseContent['app']['permissions'][$g]);
        
        $this->assertNotNull($responseContent['app']['permissions'][$g]['name']);
        
        $this->assertIsString($responseContent['app']['permissions'][$g]['name']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('dataPrivacy', $responseContent['app']);
        
        if ($responseContent['app']['dataPrivacy']) {
        
        $this->assertIsString($responseContent['app']['dataPrivacy']);
        
        }
        
        $this->assertArrayHasKey('dataPrivacyUrl', $responseContent['app']);
        
        if ($responseContent['app']['dataPrivacyUrl']) {
        
        $this->assertIsString($responseContent['app']['dataPrivacyUrl']);
        
        }
        
        }
        

    }
}