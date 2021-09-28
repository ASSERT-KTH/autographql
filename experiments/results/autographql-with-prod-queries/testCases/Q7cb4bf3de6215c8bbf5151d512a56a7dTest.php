<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q7cb4bf3de6215c8bbf5151d512a56a7dTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment OrderPrice on TaxedMoney {\n  gross {\n    amount\n    currency\n    __typename\n  }\n  net {\n    amount\n    currency\n    __typename\n  }\n  __typename\n}\n\nfragment Address on Address {\n  id\n  firstName\n  lastName\n  companyName\n  streetAddress1\n  streetAddress2\n  city\n  postalCode\n  country {\n    code\n    country\n    __typename\n  }\n  countryArea\n  phone\n  isDefaultBillingAddress\n  isDefaultShippingAddress\n  __typename\n}\n\nfragment Price on TaxedMoney {\n  gross {\n    amount\n    currency\n    __typename\n  }\n  net {\n    amount\n    currency\n    __typename\n  }\n  __typename\n}\n\nfragment ProductVariant on ProductVariant {\n  id\n  name\n  sku\n  quantityAvailable\n  isAvailable\n  pricing {\n    onSale\n    priceUndiscounted {\n      ...Price\n      __typename\n    }\n    price {\n      ...Price\n      __typename\n    }\n    __typename\n  }\n  attributes {\n    attribute {\n      id\n      name\n      __typename\n    }\n    values {\n      id\n      name\n      value: name\n      __typename\n    }\n    __typename\n  }\n  product {\n    id\n    name\n    thumbnail {\n      url\n      alt\n      __typename\n    }\n    thumbnail2x: thumbnail(size: 510) {\n      url\n      __typename\n    }\n    productType {\n      id\n      isShippingRequired\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nfragment OrderDetail on Order {\n  userEmail\n  paymentStatus\n  paymentStatusDisplay\n  status\n  statusDisplay\n  id\n  token\n  number\n  shippingAddress {\n    ...Address\n    __typename\n  }\n  lines {\n    productName\n    quantity\n    variant {\n      ...ProductVariant\n      __typename\n    }\n    unitPrice {\n      currency\n      ...OrderPrice\n      __typename\n    }\n    totalPrice {\n      currency\n      ...OrderPrice\n      __typename\n    }\n    __typename\n  }\n  subtotal {\n    ...OrderPrice\n    __typename\n  }\n  total {\n    ...OrderPrice\n    __typename\n  }\n  shippingPrice {\n    ...OrderPrice\n    __typename\n  }\n  __typename\n}\n\nfragment InvoiceFragment on Invoice {\n  id\n  number\n  createdAt\n  url\n  status\n  __typename\n}\n\nquery UserOrderByToken($token: UUID!) {\n  orderByToken(token: $token) {\n    ...OrderDetail\n    invoices {\n      ...InvoiceFragment\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"token": "98fc6f45-a24c-401a-becb-9e1700302596"}, "operationName": "UserOrderByToken", "timesCalled": 5, "createdAt": "2021-09-05 14:27:02.226955+00:00", "updatedAt": "2021-09-05 14:31:43.391716+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('orderByToken', $responseContent);
        
        if ($responseContent['orderByToken']) {
        
        $this->assertEquals('Order' , $responseContent['orderByToken']['__typename']);
        
        $this->assertArrayHasKey('userEmail', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['userEmail']) {
        
        $this->assertIsString($responseContent['orderByToken']['userEmail']);
        
        }
        
        $this->assertArrayHasKey('paymentStatus', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['paymentStatus']) {
        
        $this->assertContains($responseContent['orderByToken']['paymentStatus'], ['NOT_CHARGED', 'PENDING', 'PARTIALLY_CHARGED', 'FULLY_CHARGED', 'PARTIALLY_REFUNDED', 'FULLY_REFUNDED', 'REFUSED', 'CANCELLED']);
        
        }
        
        $this->assertArrayHasKey('paymentStatusDisplay', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['paymentStatusDisplay']) {
        
        $this->assertIsString($responseContent['orderByToken']['paymentStatusDisplay']);
        
        }
        
        $this->assertArrayHasKey('status', $responseContent['orderByToken']);
        
        $this->assertNotNull($responseContent['orderByToken']['status']);
        
        $this->assertContains($responseContent['orderByToken']['status'], ['DRAFT', 'UNFULFILLED', 'PARTIALLY_FULFILLED', 'FULFILLED', 'CANCELED']);
        
        $this->assertArrayHasKey('statusDisplay', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['statusDisplay']) {
        
        $this->assertIsString($responseContent['orderByToken']['statusDisplay']);
        
        }
        
        $this->assertArrayHasKey('id', $responseContent['orderByToken']);
        
        $this->assertNotNull($responseContent['orderByToken']['id']);
        
        $this->assertArrayHasKey('token', $responseContent['orderByToken']);
        
        $this->assertNotNull($responseContent['orderByToken']['token']);
        
        $this->assertIsString($responseContent['orderByToken']['token']);
        
        $this->assertArrayHasKey('number', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['number']) {
        
        $this->assertIsString($responseContent['orderByToken']['number']);
        
        }
        
        $this->assertArrayHasKey('shippingAddress', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['shippingAddress']) {
        
        $this->assertEquals('Address' , $responseContent['orderByToken']['shippingAddress']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['orderByToken']['shippingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['id']);
        
        $this->assertArrayHasKey('firstName', $responseContent['orderByToken']['shippingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['firstName']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['firstName']);
        
        $this->assertArrayHasKey('lastName', $responseContent['orderByToken']['shippingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['lastName']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['lastName']);
        
        $this->assertArrayHasKey('companyName', $responseContent['orderByToken']['shippingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['companyName']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['companyName']);
        
        $this->assertArrayHasKey('streetAddress1', $responseContent['orderByToken']['shippingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['streetAddress1']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['streetAddress1']);
        
        $this->assertArrayHasKey('streetAddress2', $responseContent['orderByToken']['shippingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['streetAddress2']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['streetAddress2']);
        
        $this->assertArrayHasKey('city', $responseContent['orderByToken']['shippingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['city']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['city']);
        
        $this->assertArrayHasKey('postalCode', $responseContent['orderByToken']['shippingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['postalCode']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['postalCode']);
        
        $this->assertArrayHasKey('country', $responseContent['orderByToken']['shippingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['country']);
        
        $this->assertEquals('CountryDisplay' , $responseContent['orderByToken']['shippingAddress']['country']['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['orderByToken']['shippingAddress']['country']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['country']['code']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['country']['code']);
        
        $this->assertArrayHasKey('country', $responseContent['orderByToken']['shippingAddress']['country']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['country']['country']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['country']['country']);
        
        $this->assertArrayHasKey('countryArea', $responseContent['orderByToken']['shippingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['countryArea']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['countryArea']);
        
        $this->assertArrayHasKey('phone', $responseContent['orderByToken']['shippingAddress']);
        
        if ($responseContent['orderByToken']['shippingAddress']['phone']) {
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['phone']);
        
        }
        
        $this->assertArrayHasKey('isDefaultBillingAddress', $responseContent['orderByToken']['shippingAddress']);
        
        if ($responseContent['orderByToken']['shippingAddress']['isDefaultBillingAddress']) {
        
        $this->assertIsBool($responseContent['orderByToken']['shippingAddress']['isDefaultBillingAddress']);
        
        }
        
        $this->assertArrayHasKey('isDefaultShippingAddress', $responseContent['orderByToken']['shippingAddress']);
        
        if ($responseContent['orderByToken']['shippingAddress']['isDefaultShippingAddress']) {
        
        $this->assertIsBool($responseContent['orderByToken']['shippingAddress']['isDefaultShippingAddress']);
        
        }
        
        }
        
        $this->assertArrayHasKey('lines', $responseContent['orderByToken']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines']);
        
        $this->assertIsArray($responseContent['orderByToken']['lines']);
        
        for($g = 0; $g < count($responseContent['orderByToken']['lines']); $g++) {
        
        if ($responseContent['orderByToken']['lines'][$g]) {
        
        $this->assertEquals('OrderLine' , $responseContent['orderByToken']['lines'][$g]['__typename']);
        
        $this->assertArrayHasKey('productName', $responseContent['orderByToken']['lines'][$g]);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['productName']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['productName']);
        
        $this->assertArrayHasKey('quantity', $responseContent['orderByToken']['lines'][$g]);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['quantity']);
        
        $this->assertIsInt($responseContent['orderByToken']['lines'][$g]['quantity']);
        
        $this->assertArrayHasKey('variant', $responseContent['orderByToken']['lines'][$g]);
        
        if ($responseContent['orderByToken']['lines'][$g]['variant']) {
        
        $this->assertEquals('ProductVariant' , $responseContent['orderByToken']['lines'][$g]['variant']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['orderByToken']['lines'][$g]['variant']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['orderByToken']['lines'][$g]['variant']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['name']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['variant']['name']);
        
        $this->assertArrayHasKey('sku', $responseContent['orderByToken']['lines'][$g]['variant']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['sku']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['variant']['sku']);
        
        $this->assertArrayHasKey('quantityAvailable', $responseContent['orderByToken']['lines'][$g]['variant']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['quantityAvailable']);
        
        $this->assertIsInt($responseContent['orderByToken']['lines'][$g]['variant']['quantityAvailable']);
        
        $this->assertArrayHasKey('pricing', $responseContent['orderByToken']['lines'][$g]['variant']);
        
        if ($responseContent['orderByToken']['lines'][$g]['variant']['pricing']) {
        
        $this->assertEquals('VariantPricingInfo' , $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['__typename']);
        
        $this->assertArrayHasKey('onSale', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']);
        
        if ($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['onSale']) {
        
        $this->assertIsBool($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['onSale']);
        
        }
        
        $this->assertArrayHasKey('priceUndiscounted', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']);
        
        if ($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']);
        
        $this->assertEquals('Money' , $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']);
        
        $this->assertEquals('Money' , $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('price', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']);
        
        if ($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['gross']);
        
        $this->assertEquals('Money' , $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['gross']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['net']);
        
        $this->assertEquals('Money' , $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['net']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['net']['currency']);
        
        }
        
        }
        
        $this->assertArrayHasKey('attributes', $responseContent['orderByToken']['lines'][$g]['variant']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['attributes']);
        
        $this->assertIsArray($responseContent['orderByToken']['lines'][$g]['variant']['attributes']);
        
        for($f = 0; $f < count($responseContent['orderByToken']['lines'][$g]['variant']['attributes']); $f++) {
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['attributes'][$f]);
        
        $this->assertEquals('SelectedAttribute' , $responseContent['orderByToken']['lines'][$g]['variant']['attributes'][$f]['__typename']);
        
        $this->assertArrayHasKey('attribute', $responseContent['orderByToken']['lines'][$g]['variant']['attributes'][$f]);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['attributes'][$f]['attribute']);
        
        $this->assertEquals('Attribute' , $responseContent['orderByToken']['lines'][$g]['variant']['attributes'][$f]['attribute']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['orderByToken']['lines'][$g]['variant']['attributes'][$f]['attribute']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['attributes'][$f]['attribute']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['orderByToken']['lines'][$g]['variant']['attributes'][$f]['attribute']);
        
        if ($responseContent['orderByToken']['lines'][$g]['variant']['attributes'][$f]['attribute']['name']) {
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['variant']['attributes'][$f]['attribute']['name']);
        
        }
        
        $this->assertArrayHasKey('values', $responseContent['orderByToken']['lines'][$g]['variant']['attributes'][$f]);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['attributes'][$f]['values']);
        
        $this->assertIsArray($responseContent['orderByToken']['lines'][$g]['variant']['attributes'][$f]['values']);
        
        for($e = 0; $e < count($responseContent['orderByToken']['lines'][$g]['variant']['attributes'][$f]['values']); $e++) {
        
        if ($responseContent['orderByToken']['lines'][$g]['variant']['attributes'][$f]['values'][$e]) {
        
        $this->assertEquals('AttributeValue' , $responseContent['orderByToken']['lines'][$g]['variant']['attributes'][$f]['values'][$e]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['orderByToken']['lines'][$g]['variant']['attributes'][$f]['values'][$e]);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['attributes'][$f]['values'][$e]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['orderByToken']['lines'][$g]['variant']['attributes'][$f]['values'][$e]);
        
        if ($responseContent['orderByToken']['lines'][$g]['variant']['attributes'][$f]['values'][$e]['name']) {
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['variant']['attributes'][$f]['values'][$e]['name']);
        
        }
        
        $this->assertArrayHasKey('value', $responseContent['orderByToken']['lines'][$g]['variant']['attributes'][$f]['values'][$e]);
        
        if ($responseContent['orderByToken']['lines'][$g]['variant']['attributes'][$f]['values'][$e]['value']) {
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['variant']['attributes'][$f]['values'][$e]['value']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('product', $responseContent['orderByToken']['lines'][$g]['variant']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['product']);
        
        $this->assertEquals('Product' , $responseContent['orderByToken']['lines'][$g]['variant']['product']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['orderByToken']['lines'][$g]['variant']['product']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['product']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['orderByToken']['lines'][$g]['variant']['product']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['product']['name']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['variant']['product']['name']);
        
        $this->assertArrayHasKey('thumbnail', $responseContent['orderByToken']['lines'][$g]['variant']['product']);
        
        if ($responseContent['orderByToken']['lines'][$g]['variant']['product']['thumbnail']) {
        
        $this->assertEquals('Image' , $responseContent['orderByToken']['lines'][$g]['variant']['product']['thumbnail']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['orderByToken']['lines'][$g]['variant']['product']['thumbnail']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['product']['thumbnail']['url']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['variant']['product']['thumbnail']['url']);
        
        $this->assertArrayHasKey('alt', $responseContent['orderByToken']['lines'][$g]['variant']['product']['thumbnail']);
        
        if ($responseContent['orderByToken']['lines'][$g]['variant']['product']['thumbnail']['alt']) {
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['variant']['product']['thumbnail']['alt']);
        
        }
        
        }
        
        $this->assertArrayHasKey('thumbnail2x', $responseContent['orderByToken']['lines'][$g]['variant']['product']);
        
        if ($responseContent['orderByToken']['lines'][$g]['variant']['product']['thumbnail2x']) {
        
        $this->assertEquals('Image' , $responseContent['orderByToken']['lines'][$g]['variant']['product']['thumbnail2x']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['orderByToken']['lines'][$g]['variant']['product']['thumbnail2x']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['product']['thumbnail2x']['url']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['variant']['product']['thumbnail2x']['url']);
        
        }
        
        $this->assertArrayHasKey('productType', $responseContent['orderByToken']['lines'][$g]['variant']['product']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['product']['productType']);
        
        $this->assertEquals('ProductType' , $responseContent['orderByToken']['lines'][$g]['variant']['product']['productType']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['orderByToken']['lines'][$g]['variant']['product']['productType']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['product']['productType']['id']);
        
        $this->assertArrayHasKey('isShippingRequired', $responseContent['orderByToken']['lines'][$g]['variant']['product']['productType']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['product']['productType']['isShippingRequired']);
        
        $this->assertIsBool($responseContent['orderByToken']['lines'][$g]['variant']['product']['productType']['isShippingRequired']);
        
        }
        
        $this->assertArrayHasKey('unitPrice', $responseContent['orderByToken']['lines'][$g]);
        
        if ($responseContent['orderByToken']['lines'][$g]['unitPrice']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['orderByToken']['lines'][$g]['unitPrice']['__typename']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['lines'][$g]['unitPrice']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['unitPrice']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['unitPrice']['currency']);
        
        $this->assertArrayHasKey('gross', $responseContent['orderByToken']['lines'][$g]['unitPrice']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['unitPrice']['gross']);
        
        $this->assertEquals('Money' , $responseContent['orderByToken']['lines'][$g]['unitPrice']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['lines'][$g]['unitPrice']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['unitPrice']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['lines'][$g]['unitPrice']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['lines'][$g]['unitPrice']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['unitPrice']['gross']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['unitPrice']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['orderByToken']['lines'][$g]['unitPrice']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['unitPrice']['net']);
        
        $this->assertEquals('Money' , $responseContent['orderByToken']['lines'][$g]['unitPrice']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['lines'][$g]['unitPrice']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['unitPrice']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['lines'][$g]['unitPrice']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['lines'][$g]['unitPrice']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['unitPrice']['net']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['unitPrice']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('totalPrice', $responseContent['orderByToken']['lines'][$g]);
        
        if ($responseContent['orderByToken']['lines'][$g]['totalPrice']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['orderByToken']['lines'][$g]['totalPrice']['__typename']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['lines'][$g]['totalPrice']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['totalPrice']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['totalPrice']['currency']);
        
        $this->assertArrayHasKey('gross', $responseContent['orderByToken']['lines'][$g]['totalPrice']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['totalPrice']['gross']);
        
        $this->assertEquals('Money' , $responseContent['orderByToken']['lines'][$g]['totalPrice']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['lines'][$g]['totalPrice']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['totalPrice']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['lines'][$g]['totalPrice']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['lines'][$g]['totalPrice']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['totalPrice']['gross']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['totalPrice']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['orderByToken']['lines'][$g]['totalPrice']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['totalPrice']['net']);
        
        $this->assertEquals('Money' , $responseContent['orderByToken']['lines'][$g]['totalPrice']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['lines'][$g]['totalPrice']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['totalPrice']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['lines'][$g]['totalPrice']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['lines'][$g]['totalPrice']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['totalPrice']['net']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['totalPrice']['net']['currency']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('subtotal', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['subtotal']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['orderByToken']['subtotal']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['orderByToken']['subtotal']);
        
        $this->assertNotNull($responseContent['orderByToken']['subtotal']['gross']);
        
        $this->assertEquals('Money' , $responseContent['orderByToken']['subtotal']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['subtotal']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['subtotal']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['subtotal']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['subtotal']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['subtotal']['gross']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['subtotal']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['orderByToken']['subtotal']);
        
        $this->assertNotNull($responseContent['orderByToken']['subtotal']['net']);
        
        $this->assertEquals('Money' , $responseContent['orderByToken']['subtotal']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['subtotal']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['subtotal']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['subtotal']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['subtotal']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['subtotal']['net']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['subtotal']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('total', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['total']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['orderByToken']['total']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['orderByToken']['total']);
        
        $this->assertNotNull($responseContent['orderByToken']['total']['gross']);
        
        $this->assertEquals('Money' , $responseContent['orderByToken']['total']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['total']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['total']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['total']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['total']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['total']['gross']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['total']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['orderByToken']['total']);
        
        $this->assertNotNull($responseContent['orderByToken']['total']['net']);
        
        $this->assertEquals('Money' , $responseContent['orderByToken']['total']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['total']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['total']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['total']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['total']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['total']['net']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['total']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('shippingPrice', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['shippingPrice']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['orderByToken']['shippingPrice']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['orderByToken']['shippingPrice']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingPrice']['gross']);
        
        $this->assertEquals('Money' , $responseContent['orderByToken']['shippingPrice']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['shippingPrice']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingPrice']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['shippingPrice']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['shippingPrice']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingPrice']['gross']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingPrice']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['orderByToken']['shippingPrice']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingPrice']['net']);
        
        $this->assertEquals('Money' , $responseContent['orderByToken']['shippingPrice']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['shippingPrice']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingPrice']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['shippingPrice']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['shippingPrice']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingPrice']['net']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingPrice']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('invoices', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['invoices']) {
        
        $this->assertIsArray($responseContent['orderByToken']['invoices']);
        
        for($g = 0; $g < count($responseContent['orderByToken']['invoices']); $g++) {
        
        if ($responseContent['orderByToken']['invoices'][$g]) {
        
        $this->assertEquals('Invoice' , $responseContent['orderByToken']['invoices'][$g]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['orderByToken']['invoices'][$g]);
        
        $this->assertNotNull($responseContent['orderByToken']['invoices'][$g]['id']);
        
        $this->assertArrayHasKey('number', $responseContent['orderByToken']['invoices'][$g]);
        
        if ($responseContent['orderByToken']['invoices'][$g]['number']) {
        
        $this->assertIsString($responseContent['orderByToken']['invoices'][$g]['number']);
        
        }
        
        $this->assertArrayHasKey('createdAt', $responseContent['orderByToken']['invoices'][$g]);
        
        $this->assertNotNull($responseContent['orderByToken']['invoices'][$g]['createdAt']);
        
        $this->assertArrayHasKey('url', $responseContent['orderByToken']['invoices'][$g]);
        
        if ($responseContent['orderByToken']['invoices'][$g]['url']) {
        
        $this->assertIsString($responseContent['orderByToken']['invoices'][$g]['url']);
        
        }
        
        $this->assertArrayHasKey('status', $responseContent['orderByToken']['invoices'][$g]);
        
        $this->assertNotNull($responseContent['orderByToken']['invoices'][$g]['status']);
        
        $this->assertContains($responseContent['orderByToken']['invoices'][$g]['status'], ['PENDING', 'SUCCESS', 'FAILED', 'DELETED']);
        
        }
        
        }
        
        }
        
        }
        

    }
}