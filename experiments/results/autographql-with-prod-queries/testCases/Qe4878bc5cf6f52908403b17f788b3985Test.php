<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qe4878bc5cf6f52908403b17f788b3985Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment MenuItemFragment on MenuItem {\n  category {\n    id\n    name\n    __typename\n  }\n  collection {\n    id\n    name\n    __typename\n  }\n  id\n  level\n  name\n  page {\n    id\n    title\n    __typename\n  }\n  url\n  __typename\n}\n\nfragment MenuItemNestedFragment on MenuItem {\n  ...MenuItemFragment\n  children {\n    ...MenuItemFragment\n    children {\n      ...MenuItemFragment\n      children {\n        ...MenuItemFragment\n        children {\n          ...MenuItemFragment\n          children {\n            ...MenuItemFragment\n            children {\n              ...MenuItemFragment\n              __typename\n            }\n            __typename\n          }\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nfragment MenuDetailsFragment on Menu {\n  id\n  items {\n    ...MenuItemNestedFragment\n    __typename\n  }\n  name\n  __typename\n}\n\nquery MenuDetails($id: ID!) {\n  menu(id: $id) {\n    ...MenuDetailsFragment\n    __typename\n  }\n}\n", "variables": {"id": "TWVudToy"}, "operationName": "MenuDetails", "timesCalled": 2, "createdAt": "2021-09-04 20:23:26.094909+00:00", "updatedAt": "2021-09-04 20:29:03.343361+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('menu', $responseContent);
        
        if ($responseContent['menu']) {
        
        $this->assertEquals('Menu' , $responseContent['menu']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['menu']);
        
        $this->assertNotNull($responseContent['menu']['id']);
        
        $this->assertArrayHasKey('items', $responseContent['menu']);
        
        if ($responseContent['menu']['items']) {
        
        $this->assertIsArray($responseContent['menu']['items']);
        
        for($g = 0; $g < count($responseContent['menu']['items']); $g++) {
        
        if ($responseContent['menu']['items'][$g]) {
        
        $this->assertEquals('MenuItem' , $responseContent['menu']['items'][$g]['__typename']);
        
        $this->assertArrayHasKey('category', $responseContent['menu']['items'][$g]);
        
        if ($responseContent['menu']['items'][$g]['category']) {
        
        $this->assertEquals('Category' , $responseContent['menu']['items'][$g]['category']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['category']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['category']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['menu']['items'][$g]['category']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['category']['name']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['category']['name']);
        
        }
        
        $this->assertArrayHasKey('collection', $responseContent['menu']['items'][$g]);
        
        if ($responseContent['menu']['items'][$g]['collection']) {
        
        $this->assertEquals('Collection' , $responseContent['menu']['items'][$g]['collection']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['collection']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['collection']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['menu']['items'][$g]['collection']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['collection']['name']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['collection']['name']);
        
        }
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['id']);
        
        $this->assertArrayHasKey('level', $responseContent['menu']['items'][$g]);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['level']);
        
        $this->assertIsInt($responseContent['menu']['items'][$g]['level']);
        
        $this->assertArrayHasKey('name', $responseContent['menu']['items'][$g]);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['name']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['name']);
        
        $this->assertArrayHasKey('page', $responseContent['menu']['items'][$g]);
        
        if ($responseContent['menu']['items'][$g]['page']) {
        
        $this->assertEquals('Page' , $responseContent['menu']['items'][$g]['page']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['page']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['page']['id']);
        
        $this->assertArrayHasKey('title', $responseContent['menu']['items'][$g]['page']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['page']['title']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['page']['title']);
        
        }
        
        $this->assertArrayHasKey('url', $responseContent['menu']['items'][$g]);
        
        if ($responseContent['menu']['items'][$g]['url']) {
        
        $this->assertIsString($responseContent['menu']['items'][$g]['url']);
        
        }
        
        $this->assertArrayHasKey('children', $responseContent['menu']['items'][$g]);
        
        if ($responseContent['menu']['items'][$g]['children']) {
        
        $this->assertIsArray($responseContent['menu']['items'][$g]['children']);
        
        for($f = 0; $f < count($responseContent['menu']['items'][$g]['children']); $f++) {
        
        if ($responseContent['menu']['items'][$g]['children'][$f]) {
        
        $this->assertEquals('MenuItem' , $responseContent['menu']['items'][$g]['children'][$f]['__typename']);
        
        $this->assertArrayHasKey('category', $responseContent['menu']['items'][$g]['children'][$f]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['category']) {
        
        $this->assertEquals('Category' , $responseContent['menu']['items'][$g]['children'][$f]['category']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['children'][$f]['category']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['category']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['menu']['items'][$g]['children'][$f]['category']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['category']['name']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['category']['name']);
        
        }
        
        $this->assertArrayHasKey('collection', $responseContent['menu']['items'][$g]['children'][$f]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['collection']) {
        
        $this->assertEquals('Collection' , $responseContent['menu']['items'][$g]['children'][$f]['collection']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['children'][$f]['collection']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['collection']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['menu']['items'][$g]['children'][$f]['collection']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['collection']['name']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['collection']['name']);
        
        }
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['children'][$f]);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['id']);
        
        $this->assertArrayHasKey('level', $responseContent['menu']['items'][$g]['children'][$f]);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['level']);
        
        $this->assertIsInt($responseContent['menu']['items'][$g]['children'][$f]['level']);
        
        $this->assertArrayHasKey('name', $responseContent['menu']['items'][$g]['children'][$f]);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['name']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['name']);
        
        $this->assertArrayHasKey('page', $responseContent['menu']['items'][$g]['children'][$f]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['page']) {
        
        $this->assertEquals('Page' , $responseContent['menu']['items'][$g]['children'][$f]['page']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['children'][$f]['page']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['page']['id']);
        
        $this->assertArrayHasKey('title', $responseContent['menu']['items'][$g]['children'][$f]['page']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['page']['title']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['page']['title']);
        
        }
        
        $this->assertArrayHasKey('url', $responseContent['menu']['items'][$g]['children'][$f]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['url']) {
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['url']);
        
        }
        
        $this->assertArrayHasKey('children', $responseContent['menu']['items'][$g]['children'][$f]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children']) {
        
        $this->assertIsArray($responseContent['menu']['items'][$g]['children'][$f]['children']);
        
        for($e = 0; $e < count($responseContent['menu']['items'][$g]['children'][$f]['children']); $e++) {
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]) {
        
        $this->assertEquals('MenuItem' , $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['__typename']);
        
        $this->assertArrayHasKey('category', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['category']) {
        
        $this->assertEquals('Category' , $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['category']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['category']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['category']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['category']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['category']['name']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['category']['name']);
        
        }
        
        $this->assertArrayHasKey('collection', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['collection']) {
        
        $this->assertEquals('Collection' , $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['collection']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['collection']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['collection']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['collection']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['collection']['name']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['collection']['name']);
        
        }
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['id']);
        
        $this->assertArrayHasKey('level', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['level']);
        
        $this->assertIsInt($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['level']);
        
        $this->assertArrayHasKey('name', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['name']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['name']);
        
        $this->assertArrayHasKey('page', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['page']) {
        
        $this->assertEquals('Page' , $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['page']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['page']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['page']['id']);
        
        $this->assertArrayHasKey('title', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['page']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['page']['title']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['page']['title']);
        
        }
        
        $this->assertArrayHasKey('url', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['url']) {
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['url']);
        
        }
        
        $this->assertArrayHasKey('children', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children']) {
        
        $this->assertIsArray($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children']);
        
        for($d = 0; $d < count($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children']); $d++) {
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]) {
        
        $this->assertEquals('MenuItem' , $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['__typename']);
        
        $this->assertArrayHasKey('category', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['category']) {
        
        $this->assertEquals('Category' , $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['category']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['category']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['category']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['category']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['category']['name']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['category']['name']);
        
        }
        
        $this->assertArrayHasKey('collection', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['collection']) {
        
        $this->assertEquals('Collection' , $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['collection']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['collection']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['collection']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['collection']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['collection']['name']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['collection']['name']);
        
        }
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['id']);
        
        $this->assertArrayHasKey('level', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['level']);
        
        $this->assertIsInt($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['level']);
        
        $this->assertArrayHasKey('name', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['name']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['name']);
        
        $this->assertArrayHasKey('page', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['page']) {
        
        $this->assertEquals('Page' , $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['page']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['page']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['page']['id']);
        
        $this->assertArrayHasKey('title', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['page']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['page']['title']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['page']['title']);
        
        }
        
        $this->assertArrayHasKey('url', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['url']) {
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['url']);
        
        }
        
        $this->assertArrayHasKey('children', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children']) {
        
        $this->assertIsArray($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children']);
        
        for($c = 0; $c < count($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children']); $c++) {
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]) {
        
        $this->assertEquals('MenuItem' , $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['__typename']);
        
        $this->assertArrayHasKey('category', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['category']) {
        
        $this->assertEquals('Category' , $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['category']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['category']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['category']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['category']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['category']['name']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['category']['name']);
        
        }
        
        $this->assertArrayHasKey('collection', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['collection']) {
        
        $this->assertEquals('Collection' , $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['collection']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['collection']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['collection']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['collection']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['collection']['name']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['collection']['name']);
        
        }
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['id']);
        
        $this->assertArrayHasKey('level', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['level']);
        
        $this->assertIsInt($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['level']);
        
        $this->assertArrayHasKey('name', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['name']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['name']);
        
        $this->assertArrayHasKey('page', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['page']) {
        
        $this->assertEquals('Page' , $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['page']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['page']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['page']['id']);
        
        $this->assertArrayHasKey('title', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['page']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['page']['title']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['page']['title']);
        
        }
        
        $this->assertArrayHasKey('url', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['url']) {
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['url']);
        
        }
        
        $this->assertArrayHasKey('children', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children']) {
        
        $this->assertIsArray($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children']);
        
        for($b = 0; $b < count($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children']); $b++) {
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]) {
        
        $this->assertEquals('MenuItem' , $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['__typename']);
        
        $this->assertArrayHasKey('category', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['category']) {
        
        $this->assertEquals('Category' , $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['category']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['category']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['category']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['category']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['category']['name']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['category']['name']);
        
        }
        
        $this->assertArrayHasKey('collection', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['collection']) {
        
        $this->assertEquals('Collection' , $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['collection']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['collection']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['collection']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['collection']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['collection']['name']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['collection']['name']);
        
        }
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['id']);
        
        $this->assertArrayHasKey('level', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['level']);
        
        $this->assertIsInt($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['level']);
        
        $this->assertArrayHasKey('name', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['name']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['name']);
        
        $this->assertArrayHasKey('page', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['page']) {
        
        $this->assertEquals('Page' , $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['page']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['page']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['page']['id']);
        
        $this->assertArrayHasKey('title', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['page']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['page']['title']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['page']['title']);
        
        }
        
        $this->assertArrayHasKey('url', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['url']) {
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['url']);
        
        }
        
        $this->assertArrayHasKey('children', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children']) {
        
        $this->assertIsArray($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children']);
        
        for($a = 0; $a < count($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children']); $a++) {
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]) {
        
        $this->assertEquals('MenuItem' , $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['__typename']);
        
        $this->assertArrayHasKey('category', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['category']) {
        
        $this->assertEquals('Category' , $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['category']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['category']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['category']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['category']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['category']['name']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['category']['name']);
        
        }
        
        $this->assertArrayHasKey('collection', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['collection']) {
        
        $this->assertEquals('Collection' , $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['collection']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['collection']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['collection']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['collection']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['collection']['name']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['collection']['name']);
        
        }
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['id']);
        
        $this->assertArrayHasKey('level', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['level']);
        
        $this->assertIsInt($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['level']);
        
        $this->assertArrayHasKey('name', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['name']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['name']);
        
        $this->assertArrayHasKey('page', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['page']) {
        
        $this->assertEquals('Page' , $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['page']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['page']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['page']['id']);
        
        $this->assertArrayHasKey('title', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['page']);
        
        $this->assertNotNull($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['page']['title']);
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['page']['title']);
        
        }
        
        $this->assertArrayHasKey('url', $responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]);
        
        if ($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['url']) {
        
        $this->assertIsString($responseContent['menu']['items'][$g]['children'][$f]['children'][$e]['children'][$d]['children'][$c]['children'][$b]['children'][$a]['url']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('name', $responseContent['menu']);
        
        $this->assertNotNull($responseContent['menu']['name']);
        
        $this->assertIsString($responseContent['menu']['name']);
        
        }
        

    }
}