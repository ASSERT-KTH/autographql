<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q6deda9218aaf52178b2491582467814aTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment AttributeFragment on Attribute {\n  id\n  name\n  slug\n  visibleInStorefront\n  filterableInDashboard\n  filterableInStorefront\n  __typename\n}\n\nfragment MetadataItem on MetadataItem {\n  key\n  value\n  __typename\n}\n\nfragment MetadataFragment on ObjectWithMetadata {\n  metadata {\n    ...MetadataItem\n    __typename\n  }\n  privateMetadata {\n    ...MetadataItem\n    __typename\n  }\n  __typename\n}\n\nfragment AttributeDetailsFragment on Attribute {\n  ...AttributeFragment\n  ...MetadataFragment\n  availableInGrid\n  inputType\n  storefrontSearchPosition\n  valueRequired\n  values {\n    id\n    name\n    slug\n    type\n    __typename\n  }\n  __typename\n}\n\nquery AttributeDetails($id: ID!) {\n  attribute(id: $id) {\n    ...AttributeDetailsFragment\n    __typename\n  }\n}\n", "variables": {"id": "QXR0cmlidXRlOjI3"}, "operationName": "AttributeDetails", "timesCalled": 2, "createdAt": "2021-09-04 13:25:29.011544+00:00", "updatedAt": "2021-09-04 20:28:52.644330+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('attribute', $responseContent);
        
        if ($responseContent['attribute']) {
        
        $this->assertEquals('Attribute' , $responseContent['attribute']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['attribute']);
        
        $this->assertNotNull($responseContent['attribute']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['attribute']);
        
        if ($responseContent['attribute']['name']) {
        
        $this->assertIsString($responseContent['attribute']['name']);
        
        }
        
        $this->assertArrayHasKey('slug', $responseContent['attribute']);
        
        if ($responseContent['attribute']['slug']) {
        
        $this->assertIsString($responseContent['attribute']['slug']);
        
        }
        
        $this->assertArrayHasKey('visibleInStorefront', $responseContent['attribute']);
        
        $this->assertNotNull($responseContent['attribute']['visibleInStorefront']);
        
        $this->assertIsBool($responseContent['attribute']['visibleInStorefront']);
        
        $this->assertArrayHasKey('filterableInDashboard', $responseContent['attribute']);
        
        $this->assertNotNull($responseContent['attribute']['filterableInDashboard']);
        
        $this->assertIsBool($responseContent['attribute']['filterableInDashboard']);
        
        $this->assertArrayHasKey('filterableInStorefront', $responseContent['attribute']);
        
        $this->assertNotNull($responseContent['attribute']['filterableInStorefront']);
        
        $this->assertIsBool($responseContent['attribute']['filterableInStorefront']);
        
        $this->assertArrayHasKey('metadata', $responseContent['attribute']);
        
        $this->assertNotNull($responseContent['attribute']['metadata']);
        
        $this->assertIsArray($responseContent['attribute']['metadata']);
        
        for($g = 0; $g < count($responseContent['attribute']['metadata']); $g++) {
        
        if ($responseContent['attribute']['metadata'][$g]) {
        
        $this->assertEquals('MetadataItem' , $responseContent['attribute']['metadata'][$g]['__typename']);
        
        $this->assertArrayHasKey('key', $responseContent['attribute']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['attribute']['metadata'][$g]['key']);
        
        $this->assertIsString($responseContent['attribute']['metadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['attribute']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['attribute']['metadata'][$g]['value']);
        
        $this->assertIsString($responseContent['attribute']['metadata'][$g]['value']);
        
        }
        
        }
        
        $this->assertArrayHasKey('privateMetadata', $responseContent['attribute']);
        
        $this->assertNotNull($responseContent['attribute']['privateMetadata']);
        
        $this->assertIsArray($responseContent['attribute']['privateMetadata']);
        
        for($g = 0; $g < count($responseContent['attribute']['privateMetadata']); $g++) {
        
        if ($responseContent['attribute']['privateMetadata'][$g]) {
        
        $this->assertEquals('MetadataItem' , $responseContent['attribute']['privateMetadata'][$g]['__typename']);
        
        $this->assertArrayHasKey('key', $responseContent['attribute']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['attribute']['privateMetadata'][$g]['key']);
        
        $this->assertIsString($responseContent['attribute']['privateMetadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['attribute']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['attribute']['privateMetadata'][$g]['value']);
        
        $this->assertIsString($responseContent['attribute']['privateMetadata'][$g]['value']);
        
        }
        
        }
        
        $this->assertArrayHasKey('availableInGrid', $responseContent['attribute']);
        
        $this->assertNotNull($responseContent['attribute']['availableInGrid']);
        
        $this->assertIsBool($responseContent['attribute']['availableInGrid']);
        
        $this->assertArrayHasKey('inputType', $responseContent['attribute']);
        
        if ($responseContent['attribute']['inputType']) {
        
        $this->assertContains($responseContent['attribute']['inputType'], ['DROPDOWN', 'MULTISELECT']);
        
        }
        
        $this->assertArrayHasKey('storefrontSearchPosition', $responseContent['attribute']);
        
        $this->assertNotNull($responseContent['attribute']['storefrontSearchPosition']);
        
        $this->assertIsInt($responseContent['attribute']['storefrontSearchPosition']);
        
        $this->assertArrayHasKey('valueRequired', $responseContent['attribute']);
        
        $this->assertNotNull($responseContent['attribute']['valueRequired']);
        
        $this->assertIsBool($responseContent['attribute']['valueRequired']);
        
        $this->assertArrayHasKey('values', $responseContent['attribute']);
        
        if ($responseContent['attribute']['values']) {
        
        $this->assertIsArray($responseContent['attribute']['values']);
        
        for($g = 0; $g < count($responseContent['attribute']['values']); $g++) {
        
        if ($responseContent['attribute']['values'][$g]) {
        
        $this->assertEquals('AttributeValue' , $responseContent['attribute']['values'][$g]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['attribute']['values'][$g]);
        
        $this->assertNotNull($responseContent['attribute']['values'][$g]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['attribute']['values'][$g]);
        
        if ($responseContent['attribute']['values'][$g]['name']) {
        
        $this->assertIsString($responseContent['attribute']['values'][$g]['name']);
        
        }
        
        $this->assertArrayHasKey('slug', $responseContent['attribute']['values'][$g]);
        
        if ($responseContent['attribute']['values'][$g]['slug']) {
        
        $this->assertIsString($responseContent['attribute']['values'][$g]['slug']);
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}