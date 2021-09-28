<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q54f752bcb7a95c0f876896097000f5ddTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment PermissionGroupFragment on Group {\n  id\n  name\n  userCanManage\n  users {\n    id\n    firstName\n    lastName\n    __typename\n  }\n  __typename\n}\n\nfragment PermissionFragment on Permission {\n  code\n  name\n  __typename\n}\n\nfragment StaffMemberFragment on User {\n  id\n  email\n  firstName\n  isActive\n  lastName\n  __typename\n}\n\nfragment PermissionGroupDetailsFragment on Group {\n  ...PermissionGroupFragment\n  permissions {\n    ...PermissionFragment\n    __typename\n  }\n  users {\n    ...StaffMemberFragment\n    avatar(size: 48) {\n      url\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nquery PermissionGroupDetails($id: ID!, $userId: ID!) {\n  permissionGroup(id: $id) {\n    ...PermissionGroupDetailsFragment\n    __typename\n  }\n  user(id: $userId) {\n    editableGroups {\n      id\n      __typename\n    }\n    userPermissions {\n      code\n      sourcePermissionGroups(userId: $userId) {\n        id\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"id": "R3JvdXA6Mg==", "userId": "VXNlcjoyNg=="}, "operationName": "PermissionGroupDetails", "timesCalled": 1, "createdAt": "2021-09-05 13:37:39.605854+00:00", "updatedAt": "2021-09-05 13:37:39.605881+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('permissionGroup', $responseContent);
        
        if ($responseContent['permissionGroup']) {
        
        $this->assertEquals('Group' , $responseContent['permissionGroup']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['permissionGroup']);
        
        $this->assertNotNull($responseContent['permissionGroup']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['permissionGroup']);
        
        $this->assertNotNull($responseContent['permissionGroup']['name']);
        
        $this->assertIsString($responseContent['permissionGroup']['name']);
        
        $this->assertArrayHasKey('userCanManage', $responseContent['permissionGroup']);
        
        $this->assertNotNull($responseContent['permissionGroup']['userCanManage']);
        
        $this->assertIsBool($responseContent['permissionGroup']['userCanManage']);
        
        $this->assertArrayHasKey('users', $responseContent['permissionGroup']);
        
        if ($responseContent['permissionGroup']['users']) {
        
        $this->assertIsArray($responseContent['permissionGroup']['users']);
        
        for($g = 0; $g < count($responseContent['permissionGroup']['users']); $g++) {
        
        if ($responseContent['permissionGroup']['users'][$g]) {
        
        $this->assertEquals('User' , $responseContent['permissionGroup']['users'][$g]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['permissionGroup']['users'][$g]);
        
        $this->assertNotNull($responseContent['permissionGroup']['users'][$g]['id']);
        
        $this->assertArrayHasKey('firstName', $responseContent['permissionGroup']['users'][$g]);
        
        $this->assertNotNull($responseContent['permissionGroup']['users'][$g]['firstName']);
        
        $this->assertIsString($responseContent['permissionGroup']['users'][$g]['firstName']);
        
        $this->assertArrayHasKey('lastName', $responseContent['permissionGroup']['users'][$g]);
        
        $this->assertNotNull($responseContent['permissionGroup']['users'][$g]['lastName']);
        
        $this->assertIsString($responseContent['permissionGroup']['users'][$g]['lastName']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('permissions', $responseContent['permissionGroup']);
        
        if ($responseContent['permissionGroup']['permissions']) {
        
        $this->assertIsArray($responseContent['permissionGroup']['permissions']);
        
        for($g = 0; $g < count($responseContent['permissionGroup']['permissions']); $g++) {
        
        if ($responseContent['permissionGroup']['permissions'][$g]) {
        
        $this->assertEquals('Permission' , $responseContent['permissionGroup']['permissions'][$g]['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['permissionGroup']['permissions'][$g]);
        
        $this->assertNotNull($responseContent['permissionGroup']['permissions'][$g]['code']);
        
        $this->assertContains($responseContent['permissionGroup']['permissions'][$g]['code'], ['MANAGE_USERS', 'MANAGE_STAFF', 'MANAGE_SERVICE_ACCOUNTS', 'MANAGE_APPS', 'MANAGE_DISCOUNTS', 'MANAGE_PLUGINS', 'MANAGE_GIFT_CARD', 'MANAGE_MENUS', 'MANAGE_ORDERS', 'MANAGE_PAGES', 'MANAGE_PRODUCTS', 'MANAGE_PRODUCT_TYPES_AND_ATTRIBUTES', 'MANAGE_SHIPPING', 'MANAGE_SETTINGS', 'MANAGE_TRANSLATIONS', 'MANAGE_CHECKOUTS']);
        
        $this->assertArrayHasKey('name', $responseContent['permissionGroup']['permissions'][$g]);
        
        $this->assertNotNull($responseContent['permissionGroup']['permissions'][$g]['name']);
        
        $this->assertIsString($responseContent['permissionGroup']['permissions'][$g]['name']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('users', $responseContent['permissionGroup']);
        
        if ($responseContent['permissionGroup']['users']) {
        
        $this->assertIsArray($responseContent['permissionGroup']['users']);
        
        for($g = 0; $g < count($responseContent['permissionGroup']['users']); $g++) {
        
        if ($responseContent['permissionGroup']['users'][$g]) {
        
        $this->assertEquals('User' , $responseContent['permissionGroup']['users'][$g]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['permissionGroup']['users'][$g]);
        
        $this->assertNotNull($responseContent['permissionGroup']['users'][$g]['id']);
        
        $this->assertArrayHasKey('email', $responseContent['permissionGroup']['users'][$g]);
        
        $this->assertNotNull($responseContent['permissionGroup']['users'][$g]['email']);
        
        $this->assertIsString($responseContent['permissionGroup']['users'][$g]['email']);
        
        $this->assertArrayHasKey('firstName', $responseContent['permissionGroup']['users'][$g]);
        
        $this->assertNotNull($responseContent['permissionGroup']['users'][$g]['firstName']);
        
        $this->assertIsString($responseContent['permissionGroup']['users'][$g]['firstName']);
        
        $this->assertArrayHasKey('isActive', $responseContent['permissionGroup']['users'][$g]);
        
        $this->assertNotNull($responseContent['permissionGroup']['users'][$g]['isActive']);
        
        $this->assertIsBool($responseContent['permissionGroup']['users'][$g]['isActive']);
        
        $this->assertArrayHasKey('lastName', $responseContent['permissionGroup']['users'][$g]);
        
        $this->assertNotNull($responseContent['permissionGroup']['users'][$g]['lastName']);
        
        $this->assertIsString($responseContent['permissionGroup']['users'][$g]['lastName']);
        
        $this->assertArrayHasKey('avatar', $responseContent['permissionGroup']['users'][$g]);
        
        if ($responseContent['permissionGroup']['users'][$g]['avatar']) {
        
        $this->assertEquals('Image' , $responseContent['permissionGroup']['users'][$g]['avatar']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['permissionGroup']['users'][$g]['avatar']);
        
        $this->assertNotNull($responseContent['permissionGroup']['users'][$g]['avatar']['url']);
        
        $this->assertIsString($responseContent['permissionGroup']['users'][$g]['avatar']['url']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('user', $responseContent);
        
        if ($responseContent['user']) {
        
        $this->assertEquals('User' , $responseContent['user']['__typename']);
        
        $this->assertArrayHasKey('editableGroups', $responseContent['user']);
        
        if ($responseContent['user']['editableGroups']) {
        
        $this->assertIsArray($responseContent['user']['editableGroups']);
        
        for($g = 0; $g < count($responseContent['user']['editableGroups']); $g++) {
        
        if ($responseContent['user']['editableGroups'][$g]) {
        
        $this->assertEquals('Group' , $responseContent['user']['editableGroups'][$g]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['user']['editableGroups'][$g]);
        
        $this->assertNotNull($responseContent['user']['editableGroups'][$g]['id']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('userPermissions', $responseContent['user']);
        
        if ($responseContent['user']['userPermissions']) {
        
        $this->assertIsArray($responseContent['user']['userPermissions']);
        
        for($g = 0; $g < count($responseContent['user']['userPermissions']); $g++) {
        
        if ($responseContent['user']['userPermissions'][$g]) {
        
        $this->assertEquals('UserPermission' , $responseContent['user']['userPermissions'][$g]['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['user']['userPermissions'][$g]);
        
        $this->assertNotNull($responseContent['user']['userPermissions'][$g]['code']);
        
        $this->assertContains($responseContent['user']['userPermissions'][$g]['code'], ['MANAGE_USERS', 'MANAGE_STAFF', 'MANAGE_SERVICE_ACCOUNTS', 'MANAGE_APPS', 'MANAGE_DISCOUNTS', 'MANAGE_PLUGINS', 'MANAGE_GIFT_CARD', 'MANAGE_MENUS', 'MANAGE_ORDERS', 'MANAGE_PAGES', 'MANAGE_PRODUCTS', 'MANAGE_PRODUCT_TYPES_AND_ATTRIBUTES', 'MANAGE_SHIPPING', 'MANAGE_SETTINGS', 'MANAGE_TRANSLATIONS', 'MANAGE_CHECKOUTS']);
        
        $this->assertArrayHasKey('sourcePermissionGroups', $responseContent['user']['userPermissions'][$g]);
        
        if ($responseContent['user']['userPermissions'][$g]['sourcePermissionGroups']) {
        
        $this->assertIsArray($responseContent['user']['userPermissions'][$g]['sourcePermissionGroups']);
        
        for($f = 0; $f < count($responseContent['user']['userPermissions'][$g]['sourcePermissionGroups']); $f++) {
        
        $this->assertNotNull($responseContent['user']['userPermissions'][$g]['sourcePermissionGroups'][$f]);
        
        $this->assertEquals('Group' , $responseContent['user']['userPermissions'][$g]['sourcePermissionGroups'][$f]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['user']['userPermissions'][$g]['sourcePermissionGroups'][$f]);
        
        $this->assertNotNull($responseContent['user']['userPermissions'][$g]['sourcePermissionGroups'][$f]['id']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}