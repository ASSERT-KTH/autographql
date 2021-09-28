<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q2fdb73f4d7715e1cb20264d981b4f963Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment PageInfoFragment on PageInfo {\n  endCursor\n  hasNextPage\n  hasPreviousPage\n  startCursor\n  __typename\n}\n\nfragment PermissionGroupFragment on Group {\n  id\n  name\n  userCanManage\n  users {\n    id\n    firstName\n    lastName\n    __typename\n  }\n  __typename\n}\n\nquery PermissionGroupList($after: String, $before: String, $first: Int, $last: Int, $filter: PermissionGroupFilterInput, $sort: PermissionGroupSortingInput) {\n  permissionGroups(after: $after, before: $before, first: $first, last: $last, filter: $filter, sortBy: $sort) {\n    edges {\n      node {\n        ...PermissionGroupFragment\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      ...PageInfoFragment\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 20, "sort": {"direction": "ASC", "field": "NAME"}}, "operationName": "PermissionGroupList", "timesCalled": 31, "createdAt": "2021-09-04 13:14:17.673398+00:00", "updatedAt": "2021-09-05 13:37:37.138466+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('permissionGroups', $responseContent);
        
        if ($responseContent['permissionGroups']) {
        
        $this->assertEquals('GroupCountableConnection' , $responseContent['permissionGroups']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['permissionGroups']);
        
        $this->assertNotNull($responseContent['permissionGroups']['edges']);
        
        $this->assertIsArray($responseContent['permissionGroups']['edges']);
        
        for($g = 0; $g < count($responseContent['permissionGroups']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['permissionGroups']['edges'][$g]);
        
        $this->assertEquals('GroupCountableEdge' , $responseContent['permissionGroups']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['permissionGroups']['edges'][$g]);
        
        $this->assertNotNull($responseContent['permissionGroups']['edges'][$g]['node']);
        
        $this->assertEquals('Group' , $responseContent['permissionGroups']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['permissionGroups']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['permissionGroups']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['permissionGroups']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['permissionGroups']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['permissionGroups']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('userCanManage', $responseContent['permissionGroups']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['permissionGroups']['edges'][$g]['node']['userCanManage']);
        
        $this->assertIsBool($responseContent['permissionGroups']['edges'][$g]['node']['userCanManage']);
        
        $this->assertArrayHasKey('users', $responseContent['permissionGroups']['edges'][$g]['node']);
        
        if ($responseContent['permissionGroups']['edges'][$g]['node']['users']) {
        
        $this->assertIsArray($responseContent['permissionGroups']['edges'][$g]['node']['users']);
        
        for($f = 0; $f < count($responseContent['permissionGroups']['edges'][$g]['node']['users']); $f++) {
        
        if ($responseContent['permissionGroups']['edges'][$g]['node']['users'][$f]) {
        
        $this->assertEquals('User' , $responseContent['permissionGroups']['edges'][$g]['node']['users'][$f]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['permissionGroups']['edges'][$g]['node']['users'][$f]);
        
        $this->assertNotNull($responseContent['permissionGroups']['edges'][$g]['node']['users'][$f]['id']);
        
        $this->assertArrayHasKey('firstName', $responseContent['permissionGroups']['edges'][$g]['node']['users'][$f]);
        
        $this->assertNotNull($responseContent['permissionGroups']['edges'][$g]['node']['users'][$f]['firstName']);
        
        $this->assertIsString($responseContent['permissionGroups']['edges'][$g]['node']['users'][$f]['firstName']);
        
        $this->assertArrayHasKey('lastName', $responseContent['permissionGroups']['edges'][$g]['node']['users'][$f]);
        
        $this->assertNotNull($responseContent['permissionGroups']['edges'][$g]['node']['users'][$f]['lastName']);
        
        $this->assertIsString($responseContent['permissionGroups']['edges'][$g]['node']['users'][$f]['lastName']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['permissionGroups']);
        
        $this->assertNotNull($responseContent['permissionGroups']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['permissionGroups']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['permissionGroups']['pageInfo']);
        
        if ($responseContent['permissionGroups']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['permissionGroups']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['permissionGroups']['pageInfo']);
        
        $this->assertNotNull($responseContent['permissionGroups']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['permissionGroups']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['permissionGroups']['pageInfo']);
        
        $this->assertNotNull($responseContent['permissionGroups']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['permissionGroups']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['permissionGroups']['pageInfo']);
        
        if ($responseContent['permissionGroups']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['permissionGroups']['pageInfo']['startCursor']);
        
        }
        
        }
        

    }
}