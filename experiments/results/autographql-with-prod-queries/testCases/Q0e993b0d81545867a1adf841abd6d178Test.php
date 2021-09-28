<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q0e993b0d81545867a1adf841abd6d178Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment Money on Money {\n  amount\n  currency\n  __typename\n}\n\nfragment ProductImageFragment on ProductImage {\n  id\n  alt\n  sortOrder\n  url\n  __typename\n}\n\nfragment StockFragment on Stock {\n  id\n  quantity\n  quantityAllocated\n  warehouse {\n    id\n    name\n    __typename\n  }\n  __typename\n}\n\nfragment WeightFragment on Weight {\n  unit\n  value\n  __typename\n}\n\nfragment MetadataItem on MetadataItem {\n  key\n  value\n  __typename\n}\n\nfragment MetadataFragment on ObjectWithMetadata {\n  metadata {\n    ...MetadataItem\n    __typename\n  }\n  privateMetadata {\n    ...MetadataItem\n    __typename\n  }\n  __typename\n}\n\nfragment ProductVariant on ProductVariant {\n  id\n  ...MetadataFragment\n  attributes {\n    attribute {\n      id\n      name\n      slug\n      valueRequired\n      values {\n        id\n        name\n        slug\n        __typename\n      }\n      __typename\n    }\n    values {\n      id\n      name\n      slug\n      __typename\n    }\n    __typename\n  }\n  costPrice {\n    ...Money\n    __typename\n  }\n  images {\n    id\n    url\n    __typename\n  }\n  name\n  price {\n    ...Money\n    __typename\n  }\n  product {\n    id\n    defaultVariant {\n      id\n      __typename\n    }\n    images {\n      ...ProductImageFragment\n      __typename\n    }\n    name\n    thumbnail {\n      url\n      __typename\n    }\n    variants {\n      id\n      name\n      sku\n      images {\n        id\n        url\n        __typename\n      }\n      __typename\n    }\n    defaultVariant {\n      id\n      __typename\n    }\n    __typename\n  }\n  sku\n  stocks {\n    ...StockFragment\n    __typename\n  }\n  trackInventory\n  weight {\n    ...WeightFragment\n    __typename\n  }\n  __typename\n}\n\nquery ProductVariantDetails($id: ID!) {\n  productVariant(id: $id) {\n    ...ProductVariant\n    __typename\n  }\n}\n", "variables": {"id": "UHJvZHVjdFZhcmlhbnQ6MzI0"}, "operationName": "ProductVariantDetails", "timesCalled": 2, "createdAt": "2021-09-04 19:03:46.222297+00:00", "updatedAt": "2021-09-04 20:28:45.169198+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('productVariant', $responseContent);
        
        if ($responseContent['productVariant']) {
        
        $this->assertEquals('ProductVariant' , $responseContent['productVariant']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariant']);
        
        $this->assertNotNull($responseContent['productVariant']['id']);
        
        $this->assertArrayHasKey('metadata', $responseContent['productVariant']);
        
        $this->assertNotNull($responseContent['productVariant']['metadata']);
        
        $this->assertIsArray($responseContent['productVariant']['metadata']);
        
        for($g = 0; $g < count($responseContent['productVariant']['metadata']); $g++) {
        
        if ($responseContent['productVariant']['metadata'][$g]) {
        
        $this->assertEquals('MetadataItem' , $responseContent['productVariant']['metadata'][$g]['__typename']);
        
        $this->assertArrayHasKey('key', $responseContent['productVariant']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['metadata'][$g]['key']);
        
        $this->assertIsString($responseContent['productVariant']['metadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['productVariant']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['metadata'][$g]['value']);
        
        $this->assertIsString($responseContent['productVariant']['metadata'][$g]['value']);
        
        }
        
        }
        
        $this->assertArrayHasKey('privateMetadata', $responseContent['productVariant']);
        
        $this->assertNotNull($responseContent['productVariant']['privateMetadata']);
        
        $this->assertIsArray($responseContent['productVariant']['privateMetadata']);
        
        for($g = 0; $g < count($responseContent['productVariant']['privateMetadata']); $g++) {
        
        if ($responseContent['productVariant']['privateMetadata'][$g]) {
        
        $this->assertEquals('MetadataItem' , $responseContent['productVariant']['privateMetadata'][$g]['__typename']);
        
        $this->assertArrayHasKey('key', $responseContent['productVariant']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['privateMetadata'][$g]['key']);
        
        $this->assertIsString($responseContent['productVariant']['privateMetadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['productVariant']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['privateMetadata'][$g]['value']);
        
        $this->assertIsString($responseContent['productVariant']['privateMetadata'][$g]['value']);
        
        }
        
        }
        
        $this->assertArrayHasKey('attributes', $responseContent['productVariant']);
        
        $this->assertNotNull($responseContent['productVariant']['attributes']);
        
        $this->assertIsArray($responseContent['productVariant']['attributes']);
        
        for($g = 0; $g < count($responseContent['productVariant']['attributes']); $g++) {
        
        $this->assertNotNull($responseContent['productVariant']['attributes'][$g]);
        
        $this->assertEquals('SelectedAttribute' , $responseContent['productVariant']['attributes'][$g]['__typename']);
        
        $this->assertArrayHasKey('attribute', $responseContent['productVariant']['attributes'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['attributes'][$g]['attribute']);
        
        $this->assertEquals('Attribute' , $responseContent['productVariant']['attributes'][$g]['attribute']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariant']['attributes'][$g]['attribute']);
        
        $this->assertNotNull($responseContent['productVariant']['attributes'][$g]['attribute']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productVariant']['attributes'][$g]['attribute']);
        
        if ($responseContent['productVariant']['attributes'][$g]['attribute']['name']) {
        
        $this->assertIsString($responseContent['productVariant']['attributes'][$g]['attribute']['name']);
        
        }
        
        $this->assertArrayHasKey('slug', $responseContent['productVariant']['attributes'][$g]['attribute']);
        
        if ($responseContent['productVariant']['attributes'][$g]['attribute']['slug']) {
        
        $this->assertIsString($responseContent['productVariant']['attributes'][$g]['attribute']['slug']);
        
        }
        
        $this->assertArrayHasKey('valueRequired', $responseContent['productVariant']['attributes'][$g]['attribute']);
        
        $this->assertNotNull($responseContent['productVariant']['attributes'][$g]['attribute']['valueRequired']);
        
        $this->assertIsBool($responseContent['productVariant']['attributes'][$g]['attribute']['valueRequired']);
        
        $this->assertArrayHasKey('values', $responseContent['productVariant']['attributes'][$g]['attribute']);
        
        if ($responseContent['productVariant']['attributes'][$g]['attribute']['values']) {
        
        $this->assertIsArray($responseContent['productVariant']['attributes'][$g]['attribute']['values']);
        
        for($f = 0; $f < count($responseContent['productVariant']['attributes'][$g]['attribute']['values']); $f++) {
        
        if ($responseContent['productVariant']['attributes'][$g]['attribute']['values'][$f]) {
        
        $this->assertEquals('AttributeValue' , $responseContent['productVariant']['attributes'][$g]['attribute']['values'][$f]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariant']['attributes'][$g]['attribute']['values'][$f]);
        
        $this->assertNotNull($responseContent['productVariant']['attributes'][$g]['attribute']['values'][$f]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productVariant']['attributes'][$g]['attribute']['values'][$f]);
        
        if ($responseContent['productVariant']['attributes'][$g]['attribute']['values'][$f]['name']) {
        
        $this->assertIsString($responseContent['productVariant']['attributes'][$g]['attribute']['values'][$f]['name']);
        
        }
        
        $this->assertArrayHasKey('slug', $responseContent['productVariant']['attributes'][$g]['attribute']['values'][$f]);
        
        if ($responseContent['productVariant']['attributes'][$g]['attribute']['values'][$f]['slug']) {
        
        $this->assertIsString($responseContent['productVariant']['attributes'][$g]['attribute']['values'][$f]['slug']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('values', $responseContent['productVariant']['attributes'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['attributes'][$g]['values']);
        
        $this->assertIsArray($responseContent['productVariant']['attributes'][$g]['values']);
        
        for($f = 0; $f < count($responseContent['productVariant']['attributes'][$g]['values']); $f++) {
        
        if ($responseContent['productVariant']['attributes'][$g]['values'][$f]) {
        
        $this->assertEquals('AttributeValue' , $responseContent['productVariant']['attributes'][$g]['values'][$f]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariant']['attributes'][$g]['values'][$f]);
        
        $this->assertNotNull($responseContent['productVariant']['attributes'][$g]['values'][$f]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productVariant']['attributes'][$g]['values'][$f]);
        
        if ($responseContent['productVariant']['attributes'][$g]['values'][$f]['name']) {
        
        $this->assertIsString($responseContent['productVariant']['attributes'][$g]['values'][$f]['name']);
        
        }
        
        $this->assertArrayHasKey('slug', $responseContent['productVariant']['attributes'][$g]['values'][$f]);
        
        if ($responseContent['productVariant']['attributes'][$g]['values'][$f]['slug']) {
        
        $this->assertIsString($responseContent['productVariant']['attributes'][$g]['values'][$f]['slug']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('costPrice', $responseContent['productVariant']);
        
        if ($responseContent['productVariant']['costPrice']) {
        
        $this->assertEquals('Money' , $responseContent['productVariant']['costPrice']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['productVariant']['costPrice']);
        
        $this->assertNotNull($responseContent['productVariant']['costPrice']['amount']);
        
        $this->assertIsNumeric($responseContent['productVariant']['costPrice']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['productVariant']['costPrice']);
        
        $this->assertNotNull($responseContent['productVariant']['costPrice']['currency']);
        
        $this->assertIsString($responseContent['productVariant']['costPrice']['currency']);
        
        }
        
        $this->assertArrayHasKey('images', $responseContent['productVariant']);
        
        if ($responseContent['productVariant']['images']) {
        
        $this->assertIsArray($responseContent['productVariant']['images']);
        
        for($g = 0; $g < count($responseContent['productVariant']['images']); $g++) {
        
        if ($responseContent['productVariant']['images'][$g]) {
        
        $this->assertEquals('ProductImage' , $responseContent['productVariant']['images'][$g]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariant']['images'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['images'][$g]['id']);
        
        $this->assertArrayHasKey('url', $responseContent['productVariant']['images'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['images'][$g]['url']);
        
        $this->assertIsString($responseContent['productVariant']['images'][$g]['url']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('name', $responseContent['productVariant']);
        
        $this->assertNotNull($responseContent['productVariant']['name']);
        
        $this->assertIsString($responseContent['productVariant']['name']);
        
        $this->assertArrayHasKey('price', $responseContent['productVariant']);
        
        if ($responseContent['productVariant']['price']) {
        
        $this->assertEquals('Money' , $responseContent['productVariant']['price']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['productVariant']['price']);
        
        $this->assertNotNull($responseContent['productVariant']['price']['amount']);
        
        $this->assertIsNumeric($responseContent['productVariant']['price']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['productVariant']['price']);
        
        $this->assertNotNull($responseContent['productVariant']['price']['currency']);
        
        $this->assertIsString($responseContent['productVariant']['price']['currency']);
        
        }
        
        $this->assertArrayHasKey('product', $responseContent['productVariant']);
        
        $this->assertNotNull($responseContent['productVariant']['product']);
        
        $this->assertEquals('Product' , $responseContent['productVariant']['product']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariant']['product']);
        
        $this->assertNotNull($responseContent['productVariant']['product']['id']);
        
        $this->assertArrayHasKey('defaultVariant', $responseContent['productVariant']['product']);
        
        if ($responseContent['productVariant']['product']['defaultVariant']) {
        
        $this->assertEquals('ProductVariant' , $responseContent['productVariant']['product']['defaultVariant']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariant']['product']['defaultVariant']);
        
        $this->assertNotNull($responseContent['productVariant']['product']['defaultVariant']['id']);
        
        }
        
        $this->assertArrayHasKey('images', $responseContent['productVariant']['product']);
        
        if ($responseContent['productVariant']['product']['images']) {
        
        $this->assertIsArray($responseContent['productVariant']['product']['images']);
        
        for($g = 0; $g < count($responseContent['productVariant']['product']['images']); $g++) {
        
        if ($responseContent['productVariant']['product']['images'][$g]) {
        
        $this->assertEquals('ProductImage' , $responseContent['productVariant']['product']['images'][$g]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariant']['product']['images'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['product']['images'][$g]['id']);
        
        $this->assertArrayHasKey('alt', $responseContent['productVariant']['product']['images'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['product']['images'][$g]['alt']);
        
        $this->assertIsString($responseContent['productVariant']['product']['images'][$g]['alt']);
        
        $this->assertArrayHasKey('sortOrder', $responseContent['productVariant']['product']['images'][$g]);
        
        if ($responseContent['productVariant']['product']['images'][$g]['sortOrder']) {
        
        $this->assertIsInt($responseContent['productVariant']['product']['images'][$g]['sortOrder']);
        
        }
        
        $this->assertArrayHasKey('url', $responseContent['productVariant']['product']['images'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['product']['images'][$g]['url']);
        
        $this->assertIsString($responseContent['productVariant']['product']['images'][$g]['url']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('name', $responseContent['productVariant']['product']);
        
        $this->assertNotNull($responseContent['productVariant']['product']['name']);
        
        $this->assertIsString($responseContent['productVariant']['product']['name']);
        
        $this->assertArrayHasKey('thumbnail', $responseContent['productVariant']['product']);
        
        if ($responseContent['productVariant']['product']['thumbnail']) {
        
        $this->assertEquals('Image' , $responseContent['productVariant']['product']['thumbnail']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['productVariant']['product']['thumbnail']);
        
        $this->assertNotNull($responseContent['productVariant']['product']['thumbnail']['url']);
        
        $this->assertIsString($responseContent['productVariant']['product']['thumbnail']['url']);
        
        }
        
        $this->assertArrayHasKey('variants', $responseContent['productVariant']['product']);
        
        if ($responseContent['productVariant']['product']['variants']) {
        
        $this->assertIsArray($responseContent['productVariant']['product']['variants']);
        
        for($g = 0; $g < count($responseContent['productVariant']['product']['variants']); $g++) {
        
        if ($responseContent['productVariant']['product']['variants'][$g]) {
        
        $this->assertEquals('ProductVariant' , $responseContent['productVariant']['product']['variants'][$g]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariant']['product']['variants'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['product']['variants'][$g]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productVariant']['product']['variants'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['product']['variants'][$g]['name']);
        
        $this->assertIsString($responseContent['productVariant']['product']['variants'][$g]['name']);
        
        $this->assertArrayHasKey('sku', $responseContent['productVariant']['product']['variants'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['product']['variants'][$g]['sku']);
        
        $this->assertIsString($responseContent['productVariant']['product']['variants'][$g]['sku']);
        
        $this->assertArrayHasKey('images', $responseContent['productVariant']['product']['variants'][$g]);
        
        if ($responseContent['productVariant']['product']['variants'][$g]['images']) {
        
        $this->assertIsArray($responseContent['productVariant']['product']['variants'][$g]['images']);
        
        for($f = 0; $f < count($responseContent['productVariant']['product']['variants'][$g]['images']); $f++) {
        
        if ($responseContent['productVariant']['product']['variants'][$g]['images'][$f]) {
        
        $this->assertEquals('ProductImage' , $responseContent['productVariant']['product']['variants'][$g]['images'][$f]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariant']['product']['variants'][$g]['images'][$f]);
        
        $this->assertNotNull($responseContent['productVariant']['product']['variants'][$g]['images'][$f]['id']);
        
        $this->assertArrayHasKey('url', $responseContent['productVariant']['product']['variants'][$g]['images'][$f]);
        
        $this->assertNotNull($responseContent['productVariant']['product']['variants'][$g]['images'][$f]['url']);
        
        $this->assertIsString($responseContent['productVariant']['product']['variants'][$g]['images'][$f]['url']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('defaultVariant', $responseContent['productVariant']['product']);
        
        if ($responseContent['productVariant']['product']['defaultVariant']) {
        
        $this->assertEquals('ProductVariant' , $responseContent['productVariant']['product']['defaultVariant']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariant']['product']['defaultVariant']);
        
        $this->assertNotNull($responseContent['productVariant']['product']['defaultVariant']['id']);
        
        }
        
        $this->assertArrayHasKey('sku', $responseContent['productVariant']);
        
        $this->assertNotNull($responseContent['productVariant']['sku']);
        
        $this->assertIsString($responseContent['productVariant']['sku']);
        
        $this->assertArrayHasKey('stocks', $responseContent['productVariant']);
        
        if ($responseContent['productVariant']['stocks']) {
        
        $this->assertIsArray($responseContent['productVariant']['stocks']);
        
        for($g = 0; $g < count($responseContent['productVariant']['stocks']); $g++) {
        
        if ($responseContent['productVariant']['stocks'][$g]) {
        
        $this->assertEquals('Stock' , $responseContent['productVariant']['stocks'][$g]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariant']['stocks'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['stocks'][$g]['id']);
        
        $this->assertArrayHasKey('quantity', $responseContent['productVariant']['stocks'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['stocks'][$g]['quantity']);
        
        $this->assertIsInt($responseContent['productVariant']['stocks'][$g]['quantity']);
        
        $this->assertArrayHasKey('quantityAllocated', $responseContent['productVariant']['stocks'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['stocks'][$g]['quantityAllocated']);
        
        $this->assertIsInt($responseContent['productVariant']['stocks'][$g]['quantityAllocated']);
        
        $this->assertArrayHasKey('warehouse', $responseContent['productVariant']['stocks'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['stocks'][$g]['warehouse']);
        
        $this->assertEquals('Warehouse' , $responseContent['productVariant']['stocks'][$g]['warehouse']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariant']['stocks'][$g]['warehouse']);
        
        $this->assertNotNull($responseContent['productVariant']['stocks'][$g]['warehouse']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productVariant']['stocks'][$g]['warehouse']);
        
        $this->assertNotNull($responseContent['productVariant']['stocks'][$g]['warehouse']['name']);
        
        $this->assertIsString($responseContent['productVariant']['stocks'][$g]['warehouse']['name']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('trackInventory', $responseContent['productVariant']);
        
        $this->assertNotNull($responseContent['productVariant']['trackInventory']);
        
        $this->assertIsBool($responseContent['productVariant']['trackInventory']);
        
        $this->assertArrayHasKey('weight', $responseContent['productVariant']);
        
        if ($responseContent['productVariant']['weight']) {
        
        $this->assertEquals('Weight' , $responseContent['productVariant']['weight']['__typename']);
        
        $this->assertArrayHasKey('unit', $responseContent['productVariant']['weight']);
        
        $this->assertNotNull($responseContent['productVariant']['weight']['unit']);
        
        $this->assertContains($responseContent['productVariant']['weight']['unit'], ['KG', 'LB', 'OZ', 'G']);
        
        $this->assertArrayHasKey('value', $responseContent['productVariant']['weight']);
        
        $this->assertNotNull($responseContent['productVariant']['weight']['value']);
        
        $this->assertIsNumeric($responseContent['productVariant']['weight']['value']);
        
        }
        
        }
        

    }
}