<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q26f3840614ac5aa1bd63cc80a43d0e85Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "query Home {\n  salesToday: ordersTotal(period: TODAY) {\n    gross {\n      amount\n      currency\n      __typename\n    }\n    __typename\n  }\n  ordersToday: orders(created: TODAY) {\n    totalCount\n    __typename\n  }\n  ordersToFulfill: orders(status: READY_TO_FULFILL) {\n    totalCount\n    __typename\n  }\n  ordersToCapture: orders(status: READY_TO_CAPTURE) {\n    totalCount\n    __typename\n  }\n  productsOutOfStock: products(stockAvailability: OUT_OF_STOCK) {\n    totalCount\n    __typename\n  }\n  productTopToday: reportProductSales(period: TODAY, first: 5) {\n    edges {\n      node {\n        id\n        revenue(period: TODAY) {\n          gross {\n            amount\n            currency\n            __typename\n          }\n          __typename\n        }\n        attributes {\n          values {\n            id\n            name\n            __typename\n          }\n          __typename\n        }\n        product {\n          id\n          name\n          thumbnail {\n            url\n            __typename\n          }\n          __typename\n        }\n        quantityOrdered\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  activities: homepageEvents(last: 10) {\n    edges {\n      node {\n        amount\n        composedId\n        date\n        email\n        emailType\n        id\n        message\n        orderNumber\n        oversoldItems\n        quantity\n        type\n        user {\n          id\n          email\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {}, "operationName": "Home", "timesCalled": 20, "createdAt": "2021-09-04 12:45:50.931893+00:00", "updatedAt": "2021-09-05 13:52:13.256241+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('salesToday', $responseContent);
        
        if ($responseContent['salesToday']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['salesToday']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['salesToday']);
        
        $this->assertNotNull($responseContent['salesToday']['gross']);
        
        $this->assertEquals('Money' , $responseContent['salesToday']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['salesToday']['gross']);
        
        $this->assertNotNull($responseContent['salesToday']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['salesToday']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['salesToday']['gross']);
        
        $this->assertNotNull($responseContent['salesToday']['gross']['currency']);
        
        $this->assertIsString($responseContent['salesToday']['gross']['currency']);
        
        }
        
        $this->assertArrayHasKey('ordersToday', $responseContent);
        
        if ($responseContent['ordersToday']) {
        
        $this->assertEquals('OrderCountableConnection' , $responseContent['ordersToday']['__typename']);
        
        $this->assertArrayHasKey('totalCount', $responseContent['ordersToday']);
        
        if ($responseContent['ordersToday']['totalCount']) {
        
        $this->assertIsInt($responseContent['ordersToday']['totalCount']);
        
        }
        
        }
        
        $this->assertArrayHasKey('ordersToFulfill', $responseContent);
        
        if ($responseContent['ordersToFulfill']) {
        
        $this->assertEquals('OrderCountableConnection' , $responseContent['ordersToFulfill']['__typename']);
        
        $this->assertArrayHasKey('totalCount', $responseContent['ordersToFulfill']);
        
        if ($responseContent['ordersToFulfill']['totalCount']) {
        
        $this->assertIsInt($responseContent['ordersToFulfill']['totalCount']);
        
        }
        
        }
        
        $this->assertArrayHasKey('ordersToCapture', $responseContent);
        
        if ($responseContent['ordersToCapture']) {
        
        $this->assertEquals('OrderCountableConnection' , $responseContent['ordersToCapture']['__typename']);
        
        $this->assertArrayHasKey('totalCount', $responseContent['ordersToCapture']);
        
        if ($responseContent['ordersToCapture']['totalCount']) {
        
        $this->assertIsInt($responseContent['ordersToCapture']['totalCount']);
        
        }
        
        }
        
        $this->assertArrayHasKey('productsOutOfStock', $responseContent);
        
        if ($responseContent['productsOutOfStock']) {
        
        $this->assertEquals('ProductCountableConnection' , $responseContent['productsOutOfStock']['__typename']);
        
        $this->assertArrayHasKey('totalCount', $responseContent['productsOutOfStock']);
        
        if ($responseContent['productsOutOfStock']['totalCount']) {
        
        $this->assertIsInt($responseContent['productsOutOfStock']['totalCount']);
        
        }
        
        }
        
        $this->assertArrayHasKey('productTopToday', $responseContent);
        
        if ($responseContent['productTopToday']) {
        
        $this->assertEquals('ProductVariantCountableConnection' , $responseContent['productTopToday']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['productTopToday']);
        
        $this->assertNotNull($responseContent['productTopToday']['edges']);
        
        $this->assertIsArray($responseContent['productTopToday']['edges']);
        
        for($g = 0; $g < count($responseContent['productTopToday']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['productTopToday']['edges'][$g]);
        
        $this->assertEquals('ProductVariantCountableEdge' , $responseContent['productTopToday']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['productTopToday']['edges'][$g]);
        
        $this->assertNotNull($responseContent['productTopToday']['edges'][$g]['node']);
        
        $this->assertEquals('ProductVariant' , $responseContent['productTopToday']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productTopToday']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productTopToday']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('revenue', $responseContent['productTopToday']['edges'][$g]['node']);
        
        if ($responseContent['productTopToday']['edges'][$g]['node']['revenue']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['productTopToday']['edges'][$g]['node']['revenue']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['productTopToday']['edges'][$g]['node']['revenue']);
        
        $this->assertNotNull($responseContent['productTopToday']['edges'][$g]['node']['revenue']['gross']);
        
        $this->assertEquals('Money' , $responseContent['productTopToday']['edges'][$g]['node']['revenue']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['productTopToday']['edges'][$g]['node']['revenue']['gross']);
        
        $this->assertNotNull($responseContent['productTopToday']['edges'][$g]['node']['revenue']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['productTopToday']['edges'][$g]['node']['revenue']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['productTopToday']['edges'][$g]['node']['revenue']['gross']);
        
        $this->assertNotNull($responseContent['productTopToday']['edges'][$g]['node']['revenue']['gross']['currency']);
        
        $this->assertIsString($responseContent['productTopToday']['edges'][$g]['node']['revenue']['gross']['currency']);
        
        }
        
        $this->assertArrayHasKey('attributes', $responseContent['productTopToday']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productTopToday']['edges'][$g]['node']['attributes']);
        
        $this->assertIsArray($responseContent['productTopToday']['edges'][$g]['node']['attributes']);
        
        for($f = 0; $f < count($responseContent['productTopToday']['edges'][$g]['node']['attributes']); $f++) {
        
        $this->assertNotNull($responseContent['productTopToday']['edges'][$g]['node']['attributes'][$f]);
        
        $this->assertEquals('SelectedAttribute' , $responseContent['productTopToday']['edges'][$g]['node']['attributes'][$f]['__typename']);
        
        $this->assertArrayHasKey('values', $responseContent['productTopToday']['edges'][$g]['node']['attributes'][$f]);
        
        $this->assertNotNull($responseContent['productTopToday']['edges'][$g]['node']['attributes'][$f]['values']);
        
        $this->assertIsArray($responseContent['productTopToday']['edges'][$g]['node']['attributes'][$f]['values']);
        
        for($e = 0; $e < count($responseContent['productTopToday']['edges'][$g]['node']['attributes'][$f]['values']); $e++) {
        
        if ($responseContent['productTopToday']['edges'][$g]['node']['attributes'][$f]['values'][$e]) {
        
        $this->assertEquals('AttributeValue' , $responseContent['productTopToday']['edges'][$g]['node']['attributes'][$f]['values'][$e]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productTopToday']['edges'][$g]['node']['attributes'][$f]['values'][$e]);
        
        $this->assertNotNull($responseContent['productTopToday']['edges'][$g]['node']['attributes'][$f]['values'][$e]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productTopToday']['edges'][$g]['node']['attributes'][$f]['values'][$e]);
        
        if ($responseContent['productTopToday']['edges'][$g]['node']['attributes'][$f]['values'][$e]['name']) {
        
        $this->assertIsString($responseContent['productTopToday']['edges'][$g]['node']['attributes'][$f]['values'][$e]['name']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('product', $responseContent['productTopToday']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productTopToday']['edges'][$g]['node']['product']);
        
        $this->assertEquals('Product' , $responseContent['productTopToday']['edges'][$g]['node']['product']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productTopToday']['edges'][$g]['node']['product']);
        
        $this->assertNotNull($responseContent['productTopToday']['edges'][$g]['node']['product']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productTopToday']['edges'][$g]['node']['product']);
        
        $this->assertNotNull($responseContent['productTopToday']['edges'][$g]['node']['product']['name']);
        
        $this->assertIsString($responseContent['productTopToday']['edges'][$g]['node']['product']['name']);
        
        $this->assertArrayHasKey('thumbnail', $responseContent['productTopToday']['edges'][$g]['node']['product']);
        
        if ($responseContent['productTopToday']['edges'][$g]['node']['product']['thumbnail']) {
        
        $this->assertEquals('Image' , $responseContent['productTopToday']['edges'][$g]['node']['product']['thumbnail']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['productTopToday']['edges'][$g]['node']['product']['thumbnail']);
        
        $this->assertNotNull($responseContent['productTopToday']['edges'][$g]['node']['product']['thumbnail']['url']);
        
        $this->assertIsString($responseContent['productTopToday']['edges'][$g]['node']['product']['thumbnail']['url']);
        
        }
        
        $this->assertArrayHasKey('quantityOrdered', $responseContent['productTopToday']['edges'][$g]['node']);
        
        if ($responseContent['productTopToday']['edges'][$g]['node']['quantityOrdered']) {
        
        $this->assertIsInt($responseContent['productTopToday']['edges'][$g]['node']['quantityOrdered']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('activities', $responseContent);
        
        if ($responseContent['activities']) {
        
        $this->assertEquals('OrderEventCountableConnection' , $responseContent['activities']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['activities']);
        
        $this->assertNotNull($responseContent['activities']['edges']);
        
        $this->assertIsArray($responseContent['activities']['edges']);
        
        for($g = 0; $g < count($responseContent['activities']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['activities']['edges'][$g]);
        
        $this->assertEquals('OrderEventCountableEdge' , $responseContent['activities']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['activities']['edges'][$g]);
        
        $this->assertNotNull($responseContent['activities']['edges'][$g]['node']);
        
        $this->assertEquals('OrderEvent' , $responseContent['activities']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['activities']['edges'][$g]['node']);
        
        if ($responseContent['activities']['edges'][$g]['node']['amount']) {
        
        $this->assertIsNumeric($responseContent['activities']['edges'][$g]['node']['amount']);
        
        }
        
        $this->assertArrayHasKey('composedId', $responseContent['activities']['edges'][$g]['node']);
        
        if ($responseContent['activities']['edges'][$g]['node']['composedId']) {
        
        $this->assertIsString($responseContent['activities']['edges'][$g]['node']['composedId']);
        
        }
        
        $this->assertArrayHasKey('date', $responseContent['activities']['edges'][$g]['node']);
        
        if ($responseContent['activities']['edges'][$g]['node']['date']) {
        
        }
        
        $this->assertArrayHasKey('email', $responseContent['activities']['edges'][$g]['node']);
        
        if ($responseContent['activities']['edges'][$g]['node']['email']) {
        
        $this->assertIsString($responseContent['activities']['edges'][$g]['node']['email']);
        
        }
        
        $this->assertArrayHasKey('emailType', $responseContent['activities']['edges'][$g]['node']);
        
        if ($responseContent['activities']['edges'][$g]['node']['emailType']) {
        
        $this->assertContains($responseContent['activities']['edges'][$g]['node']['emailType'], ['PAYMENT_CONFIRMATION', 'SHIPPING_CONFIRMATION', 'TRACKING_UPDATED', 'ORDER_CONFIRMATION', 'ORDER_CANCEL', 'ORDER_REFUND', 'FULFILLMENT_CONFIRMATION', 'DIGITAL_LINKS']);
        
        }
        
        $this->assertArrayHasKey('id', $responseContent['activities']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['activities']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('message', $responseContent['activities']['edges'][$g]['node']);
        
        if ($responseContent['activities']['edges'][$g]['node']['message']) {
        
        $this->assertIsString($responseContent['activities']['edges'][$g]['node']['message']);
        
        }
        
        $this->assertArrayHasKey('orderNumber', $responseContent['activities']['edges'][$g]['node']);
        
        if ($responseContent['activities']['edges'][$g]['node']['orderNumber']) {
        
        $this->assertIsString($responseContent['activities']['edges'][$g]['node']['orderNumber']);
        
        }
        
        $this->assertArrayHasKey('oversoldItems', $responseContent['activities']['edges'][$g]['node']);
        
        if ($responseContent['activities']['edges'][$g]['node']['oversoldItems']) {
        
        $this->assertIsArray($responseContent['activities']['edges'][$g]['node']['oversoldItems']);
        
        for($f = 0; $f < count($responseContent['activities']['edges'][$g]['node']['oversoldItems']); $f++) {
        
        if ($responseContent['activities']['edges'][$g]['node']['oversoldItems'][$f]) {
        
        $this->assertIsString($responseContent['activities']['edges'][$g]['node']['oversoldItems'][$f]);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('quantity', $responseContent['activities']['edges'][$g]['node']);
        
        if ($responseContent['activities']['edges'][$g]['node']['quantity']) {
        
        $this->assertIsInt($responseContent['activities']['edges'][$g]['node']['quantity']);
        
        }
        
        $this->assertArrayHasKey('type', $responseContent['activities']['edges'][$g]['node']);
        
        if ($responseContent['activities']['edges'][$g]['node']['type']) {
        
        $this->assertContains($responseContent['activities']['edges'][$g]['node']['type'], ['DRAFT_CREATED', 'DRAFT_ADDED_PRODUCTS', 'DRAFT_REMOVED_PRODUCTS', 'PLACED', 'PLACED_FROM_DRAFT', 'OVERSOLD_ITEMS', 'CANCELED', 'ORDER_MARKED_AS_PAID', 'ORDER_FULLY_PAID', 'UPDATED_ADDRESS', 'EMAIL_SENT', 'PAYMENT_AUTHORIZED', 'PAYMENT_CAPTURED', 'EXTERNAL_SERVICE_NOTIFICATION', 'PAYMENT_REFUNDED', 'PAYMENT_VOIDED', 'PAYMENT_FAILED', 'INVOICE_REQUESTED', 'INVOICE_GENERATED', 'INVOICE_UPDATED', 'INVOICE_SENT', 'FULFILLMENT_CANCELED', 'FULFILLMENT_RESTOCKED_ITEMS', 'FULFILLMENT_FULFILLED_ITEMS', 'TRACKING_UPDATED', 'NOTE_ADDED', 'OTHER']);
        
        }
        
        $this->assertArrayHasKey('user', $responseContent['activities']['edges'][$g]['node']);
        
        if ($responseContent['activities']['edges'][$g]['node']['user']) {
        
        $this->assertEquals('User' , $responseContent['activities']['edges'][$g]['node']['user']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['activities']['edges'][$g]['node']['user']);
        
        $this->assertNotNull($responseContent['activities']['edges'][$g]['node']['user']['id']);
        
        $this->assertArrayHasKey('email', $responseContent['activities']['edges'][$g]['node']['user']);
        
        $this->assertNotNull($responseContent['activities']['edges'][$g]['node']['user']['email']);
        
        $this->assertIsString($responseContent['activities']['edges'][$g]['node']['user']['email']);
        
        }
        
        }
        
        }
        

    }
}