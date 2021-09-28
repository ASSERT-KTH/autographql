<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q6baa9a2d4ae45bb097910892a4435b63Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment CategoryTranslationFragment on Category {\n  id\n  name\n  descriptionJson\n  seoDescription\n  seoTitle\n  translation(languageCode: $language) {\n    id\n    descriptionJson\n    language {\n      language\n      __typename\n    }\n    name\n    seoDescription\n    seoTitle\n    __typename\n  }\n  __typename\n}\n\nquery CategoryTranslationDetails($id: ID!, $language: LanguageCodeEnum!) {\n  category(id: $id) {\n    ...CategoryTranslationFragment\n    __typename\n  }\n}\n", "variables": {"id": "Q2F0ZWdvcnk6Nw==", "language": "HI"}, "operationName": "CategoryTranslationDetails", "timesCalled": 5, "createdAt": "2021-09-04 13:18:34.344799+00:00", "updatedAt": "2021-09-04 20:28:52.305509+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('category', $responseContent);
        
        if ($responseContent['category']) {
        
        $this->assertEquals('Category' , $responseContent['category']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['category']);
        
        $this->assertNotNull($responseContent['category']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['category']);
        
        $this->assertNotNull($responseContent['category']['name']);
        
        $this->assertIsString($responseContent['category']['name']);
        
        $this->assertArrayHasKey('descriptionJson', $responseContent['category']);
        
        $this->assertNotNull($responseContent['category']['descriptionJson']);
        
        $this->assertArrayHasKey('seoDescription', $responseContent['category']);
        
        if ($responseContent['category']['seoDescription']) {
        
        $this->assertIsString($responseContent['category']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('seoTitle', $responseContent['category']);
        
        if ($responseContent['category']['seoTitle']) {
        
        $this->assertIsString($responseContent['category']['seoTitle']);
        
        }
        
        $this->assertArrayHasKey('translation', $responseContent['category']);
        
        if ($responseContent['category']['translation']) {
        
        $this->assertEquals('CategoryTranslation' , $responseContent['category']['translation']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['category']['translation']);
        
        $this->assertNotNull($responseContent['category']['translation']['id']);
        
        $this->assertArrayHasKey('descriptionJson', $responseContent['category']['translation']);
        
        $this->assertNotNull($responseContent['category']['translation']['descriptionJson']);
        
        $this->assertArrayHasKey('language', $responseContent['category']['translation']);
        
        $this->assertNotNull($responseContent['category']['translation']['language']);
        
        $this->assertEquals('LanguageDisplay' , $responseContent['category']['translation']['language']['__typename']);
        
        $this->assertArrayHasKey('language', $responseContent['category']['translation']['language']);
        
        $this->assertNotNull($responseContent['category']['translation']['language']['language']);
        
        $this->assertIsString($responseContent['category']['translation']['language']['language']);
        
        $this->assertArrayHasKey('name', $responseContent['category']['translation']);
        
        $this->assertNotNull($responseContent['category']['translation']['name']);
        
        $this->assertIsString($responseContent['category']['translation']['name']);
        
        $this->assertArrayHasKey('seoDescription', $responseContent['category']['translation']);
        
        if ($responseContent['category']['translation']['seoDescription']) {
        
        $this->assertIsString($responseContent['category']['translation']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('seoTitle', $responseContent['category']['translation']);
        
        if ($responseContent['category']['translation']['seoTitle']) {
        
        $this->assertIsString($responseContent['category']['translation']['seoTitle']);
        
        }
        
        }
        
        }
        

    }
}