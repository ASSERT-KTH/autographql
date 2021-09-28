<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q9c25a29203d65b70abfb3d0cc64ce288Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "query OrdersByUser($perPage: Int!, $after: String) {\n  me {\n    id\n    orders(first: $perPage, after: $after) {\n      pageInfo {\n        hasNextPage\n        endCursor\n        __typename\n      }\n      edges {\n        node {\n          id\n          token\n          number\n          statusDisplay\n          created\n          total {\n            gross {\n              amount\n              currency\n              __typename\n            }\n            net {\n              amount\n              currency\n              __typename\n            }\n            __typename\n          }\n          lines {\n            id\n            variant {\n              id\n              product {\n                name\n                id\n                __typename\n              }\n              __typename\n            }\n            thumbnail {\n              alt\n              url\n              __typename\n            }\n            thumbnail2x: thumbnail(size: 510) {\n              url\n              __typename\n            }\n            __typename\n          }\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"perPage": 5, "after": "WyIyMiJd"}, "operationName": "OrdersByUser", "timesCalled": 1, "createdAt": "2021-09-05 14:27:49.993703+00:00", "updatedAt": "2021-09-05 14:27:49.993718+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('me', $responseContent);
        
        if ($responseContent['me']) {
        
        $this->assertEquals('User' , $responseContent['me']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['me']);
        
        $this->assertNotNull($responseContent['me']['id']);
        
        $this->assertArrayHasKey('orders', $responseContent['me']);
        
        if ($responseContent['me']['orders']) {
        
        $this->assertEquals('OrderCountableConnection' , $responseContent['me']['orders']['__typename']);
        
        $this->assertArrayHasKey('pageInfo', $responseContent['me']['orders']);
        
        $this->assertNotNull($responseContent['me']['orders']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['me']['orders']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['me']['orders']['pageInfo']);
        
        $this->assertNotNull($responseContent['me']['orders']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['me']['orders']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['me']['orders']['pageInfo']);
        
        if ($responseContent['me']['orders']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['me']['orders']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('edges', $responseContent['me']['orders']);
        
        $this->assertNotNull($responseContent['me']['orders']['edges']);
        
        $this->assertIsArray($responseContent['me']['orders']['edges']);
        
        for($g = 0; $g < count($responseContent['me']['orders']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['me']['orders']['edges'][$g]);
        
        $this->assertEquals('OrderCountableEdge' , $responseContent['me']['orders']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['me']['orders']['edges'][$g]);
        
        $this->assertNotNull($responseContent['me']['orders']['edges'][$g]['node']);
        
        $this->assertEquals('Order' , $responseContent['me']['orders']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['me']['orders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['me']['orders']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('token', $responseContent['me']['orders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['me']['orders']['edges'][$g]['node']['token']);
        
        $this->assertIsString($responseContent['me']['orders']['edges'][$g]['node']['token']);
        
        $this->assertArrayHasKey('number', $responseContent['me']['orders']['edges'][$g]['node']);
        
        if ($responseContent['me']['orders']['edges'][$g]['node']['number']) {
        
        $this->assertIsString($responseContent['me']['orders']['edges'][$g]['node']['number']);
        
        }
        
        $this->assertArrayHasKey('statusDisplay', $responseContent['me']['orders']['edges'][$g]['node']);
        
        if ($responseContent['me']['orders']['edges'][$g]['node']['statusDisplay']) {
        
        $this->assertIsString($responseContent['me']['orders']['edges'][$g]['node']['statusDisplay']);
        
        }
        
        $this->assertArrayHasKey('created', $responseContent['me']['orders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['me']['orders']['edges'][$g]['node']['created']);
        
        $this->assertArrayHasKey('total', $responseContent['me']['orders']['edges'][$g]['node']);
        
        if ($responseContent['me']['orders']['edges'][$g]['node']['total']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['me']['orders']['edges'][$g]['node']['total']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['me']['orders']['edges'][$g]['node']['total']);
        
        $this->assertNotNull($responseContent['me']['orders']['edges'][$g]['node']['total']['gross']);
        
        $this->assertEquals('Money' , $responseContent['me']['orders']['edges'][$g]['node']['total']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['orders']['edges'][$g]['node']['total']['gross']);
        
        $this->assertNotNull($responseContent['me']['orders']['edges'][$g]['node']['total']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['orders']['edges'][$g]['node']['total']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['orders']['edges'][$g]['node']['total']['gross']);
        
        $this->assertNotNull($responseContent['me']['orders']['edges'][$g]['node']['total']['gross']['currency']);
        
        $this->assertIsString($responseContent['me']['orders']['edges'][$g]['node']['total']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['me']['orders']['edges'][$g]['node']['total']);
        
        $this->assertNotNull($responseContent['me']['orders']['edges'][$g]['node']['total']['net']);
        
        $this->assertEquals('Money' , $responseContent['me']['orders']['edges'][$g]['node']['total']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['orders']['edges'][$g]['node']['total']['net']);
        
        $this->assertNotNull($responseContent['me']['orders']['edges'][$g]['node']['total']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['orders']['edges'][$g]['node']['total']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['orders']['edges'][$g]['node']['total']['net']);
        
        $this->assertNotNull($responseContent['me']['orders']['edges'][$g]['node']['total']['net']['currency']);
        
        $this->assertIsString($responseContent['me']['orders']['edges'][$g]['node']['total']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('lines', $responseContent['me']['orders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['me']['orders']['edges'][$g]['node']['lines']);
        
        $this->assertIsArray($responseContent['me']['orders']['edges'][$g]['node']['lines']);
        
        for($f = 0; $f < count($responseContent['me']['orders']['edges'][$g]['node']['lines']); $f++) {
        
        if ($responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]) {
        
        $this->assertEquals('OrderLine' , $responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]);
        
        $this->assertNotNull($responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['id']);
        
        $this->assertArrayHasKey('variant', $responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]);
        
        if ($responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['variant']) {
        
        $this->assertEquals('ProductVariant' , $responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['variant']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['variant']);
        
        $this->assertNotNull($responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['variant']['id']);
        
        $this->assertArrayHasKey('product', $responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['variant']);
        
        $this->assertNotNull($responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['variant']['product']);
        
        $this->assertEquals('Product' , $responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['variant']['product']['__typename']);
        
        $this->assertArrayHasKey('name', $responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['variant']['product']);
        
        $this->assertNotNull($responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['variant']['product']['name']);
        
        $this->assertIsString($responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['variant']['product']['name']);
        
        $this->assertArrayHasKey('id', $responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['variant']['product']);
        
        $this->assertNotNull($responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['variant']['product']['id']);
        
        }
        
        $this->assertArrayHasKey('thumbnail', $responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]);
        
        if ($responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['thumbnail']) {
        
        $this->assertEquals('Image' , $responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['thumbnail']['__typename']);
        
        $this->assertArrayHasKey('alt', $responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['thumbnail']);
        
        if ($responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['thumbnail']['alt']) {
        
        $this->assertIsString($responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['thumbnail']['alt']);
        
        }
        
        $this->assertArrayHasKey('url', $responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['thumbnail']);
        
        $this->assertNotNull($responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['thumbnail']['url']);
        
        $this->assertIsString($responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['thumbnail']['url']);
        
        }
        
        $this->assertArrayHasKey('thumbnail2x', $responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]);
        
        if ($responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['thumbnail2x']) {
        
        $this->assertEquals('Image' , $responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['thumbnail2x']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['thumbnail2x']);
        
        $this->assertNotNull($responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['thumbnail2x']['url']);
        
        $this->assertIsString($responseContent['me']['orders']['edges'][$g]['node']['lines'][$f]['thumbnail2x']['url']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}