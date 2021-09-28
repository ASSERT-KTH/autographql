<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qae3b2f4d21fe53aa9ce0b29d621d849aTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment Price on TaxedMoney {\n  gross {\n    amount\n    currency\n    __typename\n  }\n  net {\n    amount\n    currency\n    __typename\n  }\n  __typename\n}\n\nfragment ProductVariant on ProductVariant {\n  id\n  name\n  sku\n  quantityAvailable\n  isAvailable\n  pricing {\n    onSale\n    priceUndiscounted {\n      ...Price\n      __typename\n    }\n    price {\n      ...Price\n      __typename\n    }\n    __typename\n  }\n  attributes {\n    attribute {\n      id\n      name\n      __typename\n    }\n    values {\n      id\n      name\n      value: name\n      __typename\n    }\n    __typename\n  }\n  product {\n    id\n    name\n    thumbnail {\n      url\n      alt\n      __typename\n    }\n    thumbnail2x: thumbnail(size: 510) {\n      url\n      __typename\n    }\n    productType {\n      id\n      isShippingRequired\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nfragment CheckoutLine on CheckoutLine {\n  id\n  quantity\n  totalPrice {\n    ...Price\n    __typename\n  }\n  variant {\n    ...ProductVariant\n    __typename\n  }\n  __typename\n}\n\nfragment Address on Address {\n  id\n  firstName\n  lastName\n  companyName\n  streetAddress1\n  streetAddress2\n  city\n  postalCode\n  country {\n    code\n    country\n    __typename\n  }\n  countryArea\n  phone\n  isDefaultBillingAddress\n  isDefaultShippingAddress\n  __typename\n}\n\nfragment ShippingMethod on ShippingMethod {\n  id\n  name\n  price {\n    currency\n    amount\n    __typename\n  }\n  __typename\n}\n\nfragment PaymentGateway on PaymentGateway {\n  id\n  name\n  config {\n    field\n    value\n    __typename\n  }\n  currencies\n  __typename\n}\n\nfragment Checkout on Checkout {\n  token\n  id\n  totalPrice {\n    ...Price\n    __typename\n  }\n  subtotalPrice {\n    ...Price\n    __typename\n  }\n  billingAddress {\n    ...Address\n    __typename\n  }\n  shippingAddress {\n    ...Address\n    __typename\n  }\n  email\n  availableShippingMethods {\n    ...ShippingMethod\n    __typename\n  }\n  shippingMethod {\n    ...ShippingMethod\n    __typename\n  }\n  shippingPrice {\n    ...Price\n    __typename\n  }\n  lines {\n    ...CheckoutLine\n    __typename\n  }\n  isShippingRequired\n  discount {\n    currency\n    amount\n    __typename\n  }\n  discountName\n  translatedDiscountName\n  voucherCode\n  availablePaymentGateways {\n    ...PaymentGateway\n    __typename\n  }\n  __typename\n}\n\nquery UserCheckoutDetails {\n  me {\n    id\n    checkout {\n      ...Checkout\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {}, "operationName": "UserCheckoutDetails", "timesCalled": 15, "createdAt": "2021-09-04 12:40:39.970517+00:00", "updatedAt": "2021-09-05 14:31:44.032072+00:00"}
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
        
        $this->assertArrayHasKey('checkout', $responseContent['me']);
        
        if ($responseContent['me']['checkout']) {
        
        $this->assertEquals('Checkout' , $responseContent['me']['checkout']['__typename']);
        
        $this->assertArrayHasKey('token', $responseContent['me']['checkout']);
        
        $this->assertNotNull($responseContent['me']['checkout']['token']);
        
        $this->assertArrayHasKey('id', $responseContent['me']['checkout']);
        
        $this->assertNotNull($responseContent['me']['checkout']['id']);
        
        $this->assertArrayHasKey('totalPrice', $responseContent['me']['checkout']);
        
        if ($responseContent['me']['checkout']['totalPrice']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['me']['checkout']['totalPrice']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['me']['checkout']['totalPrice']);
        
        $this->assertNotNull($responseContent['me']['checkout']['totalPrice']['gross']);
        
        $this->assertEquals('Money' , $responseContent['me']['checkout']['totalPrice']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['totalPrice']['gross']);
        
        $this->assertNotNull($responseContent['me']['checkout']['totalPrice']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['totalPrice']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['totalPrice']['gross']);
        
        $this->assertNotNull($responseContent['me']['checkout']['totalPrice']['gross']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['totalPrice']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['me']['checkout']['totalPrice']);
        
        $this->assertNotNull($responseContent['me']['checkout']['totalPrice']['net']);
        
        $this->assertEquals('Money' , $responseContent['me']['checkout']['totalPrice']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['totalPrice']['net']);
        
        $this->assertNotNull($responseContent['me']['checkout']['totalPrice']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['totalPrice']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['totalPrice']['net']);
        
        $this->assertNotNull($responseContent['me']['checkout']['totalPrice']['net']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['totalPrice']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('subtotalPrice', $responseContent['me']['checkout']);
        
        if ($responseContent['me']['checkout']['subtotalPrice']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['me']['checkout']['subtotalPrice']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['me']['checkout']['subtotalPrice']);
        
        $this->assertNotNull($responseContent['me']['checkout']['subtotalPrice']['gross']);
        
        $this->assertEquals('Money' , $responseContent['me']['checkout']['subtotalPrice']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['subtotalPrice']['gross']);
        
        $this->assertNotNull($responseContent['me']['checkout']['subtotalPrice']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['subtotalPrice']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['subtotalPrice']['gross']);
        
        $this->assertNotNull($responseContent['me']['checkout']['subtotalPrice']['gross']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['subtotalPrice']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['me']['checkout']['subtotalPrice']);
        
        $this->assertNotNull($responseContent['me']['checkout']['subtotalPrice']['net']);
        
        $this->assertEquals('Money' , $responseContent['me']['checkout']['subtotalPrice']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['subtotalPrice']['net']);
        
        $this->assertNotNull($responseContent['me']['checkout']['subtotalPrice']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['subtotalPrice']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['subtotalPrice']['net']);
        
        $this->assertNotNull($responseContent['me']['checkout']['subtotalPrice']['net']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['subtotalPrice']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('billingAddress', $responseContent['me']['checkout']);
        
        if ($responseContent['me']['checkout']['billingAddress']) {
        
        $this->assertEquals('Address' , $responseContent['me']['checkout']['billingAddress']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['me']['checkout']['billingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['billingAddress']['id']);
        
        $this->assertArrayHasKey('firstName', $responseContent['me']['checkout']['billingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['billingAddress']['firstName']);
        
        $this->assertIsString($responseContent['me']['checkout']['billingAddress']['firstName']);
        
        $this->assertArrayHasKey('lastName', $responseContent['me']['checkout']['billingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['billingAddress']['lastName']);
        
        $this->assertIsString($responseContent['me']['checkout']['billingAddress']['lastName']);
        
        $this->assertArrayHasKey('companyName', $responseContent['me']['checkout']['billingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['billingAddress']['companyName']);
        
        $this->assertIsString($responseContent['me']['checkout']['billingAddress']['companyName']);
        
        $this->assertArrayHasKey('streetAddress1', $responseContent['me']['checkout']['billingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['billingAddress']['streetAddress1']);
        
        $this->assertIsString($responseContent['me']['checkout']['billingAddress']['streetAddress1']);
        
        $this->assertArrayHasKey('streetAddress2', $responseContent['me']['checkout']['billingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['billingAddress']['streetAddress2']);
        
        $this->assertIsString($responseContent['me']['checkout']['billingAddress']['streetAddress2']);
        
        $this->assertArrayHasKey('city', $responseContent['me']['checkout']['billingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['billingAddress']['city']);
        
        $this->assertIsString($responseContent['me']['checkout']['billingAddress']['city']);
        
        $this->assertArrayHasKey('postalCode', $responseContent['me']['checkout']['billingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['billingAddress']['postalCode']);
        
        $this->assertIsString($responseContent['me']['checkout']['billingAddress']['postalCode']);
        
        $this->assertArrayHasKey('country', $responseContent['me']['checkout']['billingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['billingAddress']['country']);
        
        $this->assertEquals('CountryDisplay' , $responseContent['me']['checkout']['billingAddress']['country']['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['me']['checkout']['billingAddress']['country']);
        
        $this->assertNotNull($responseContent['me']['checkout']['billingAddress']['country']['code']);
        
        $this->assertIsString($responseContent['me']['checkout']['billingAddress']['country']['code']);
        
        $this->assertArrayHasKey('country', $responseContent['me']['checkout']['billingAddress']['country']);
        
        $this->assertNotNull($responseContent['me']['checkout']['billingAddress']['country']['country']);
        
        $this->assertIsString($responseContent['me']['checkout']['billingAddress']['country']['country']);
        
        $this->assertArrayHasKey('countryArea', $responseContent['me']['checkout']['billingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['billingAddress']['countryArea']);
        
        $this->assertIsString($responseContent['me']['checkout']['billingAddress']['countryArea']);
        
        $this->assertArrayHasKey('phone', $responseContent['me']['checkout']['billingAddress']);
        
        if ($responseContent['me']['checkout']['billingAddress']['phone']) {
        
        $this->assertIsString($responseContent['me']['checkout']['billingAddress']['phone']);
        
        }
        
        $this->assertArrayHasKey('isDefaultBillingAddress', $responseContent['me']['checkout']['billingAddress']);
        
        if ($responseContent['me']['checkout']['billingAddress']['isDefaultBillingAddress']) {
        
        $this->assertIsBool($responseContent['me']['checkout']['billingAddress']['isDefaultBillingAddress']);
        
        }
        
        $this->assertArrayHasKey('isDefaultShippingAddress', $responseContent['me']['checkout']['billingAddress']);
        
        if ($responseContent['me']['checkout']['billingAddress']['isDefaultShippingAddress']) {
        
        $this->assertIsBool($responseContent['me']['checkout']['billingAddress']['isDefaultShippingAddress']);
        
        }
        
        }
        
        $this->assertArrayHasKey('shippingAddress', $responseContent['me']['checkout']);
        
        if ($responseContent['me']['checkout']['shippingAddress']) {
        
        $this->assertEquals('Address' , $responseContent['me']['checkout']['shippingAddress']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['me']['checkout']['shippingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingAddress']['id']);
        
        $this->assertArrayHasKey('firstName', $responseContent['me']['checkout']['shippingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingAddress']['firstName']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingAddress']['firstName']);
        
        $this->assertArrayHasKey('lastName', $responseContent['me']['checkout']['shippingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingAddress']['lastName']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingAddress']['lastName']);
        
        $this->assertArrayHasKey('companyName', $responseContent['me']['checkout']['shippingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingAddress']['companyName']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingAddress']['companyName']);
        
        $this->assertArrayHasKey('streetAddress1', $responseContent['me']['checkout']['shippingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingAddress']['streetAddress1']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingAddress']['streetAddress1']);
        
        $this->assertArrayHasKey('streetAddress2', $responseContent['me']['checkout']['shippingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingAddress']['streetAddress2']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingAddress']['streetAddress2']);
        
        $this->assertArrayHasKey('city', $responseContent['me']['checkout']['shippingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingAddress']['city']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingAddress']['city']);
        
        $this->assertArrayHasKey('postalCode', $responseContent['me']['checkout']['shippingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingAddress']['postalCode']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingAddress']['postalCode']);
        
        $this->assertArrayHasKey('country', $responseContent['me']['checkout']['shippingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingAddress']['country']);
        
        $this->assertEquals('CountryDisplay' , $responseContent['me']['checkout']['shippingAddress']['country']['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['me']['checkout']['shippingAddress']['country']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingAddress']['country']['code']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingAddress']['country']['code']);
        
        $this->assertArrayHasKey('country', $responseContent['me']['checkout']['shippingAddress']['country']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingAddress']['country']['country']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingAddress']['country']['country']);
        
        $this->assertArrayHasKey('countryArea', $responseContent['me']['checkout']['shippingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingAddress']['countryArea']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingAddress']['countryArea']);
        
        $this->assertArrayHasKey('phone', $responseContent['me']['checkout']['shippingAddress']);
        
        if ($responseContent['me']['checkout']['shippingAddress']['phone']) {
        
        $this->assertIsString($responseContent['me']['checkout']['shippingAddress']['phone']);
        
        }
        
        $this->assertArrayHasKey('isDefaultBillingAddress', $responseContent['me']['checkout']['shippingAddress']);
        
        if ($responseContent['me']['checkout']['shippingAddress']['isDefaultBillingAddress']) {
        
        $this->assertIsBool($responseContent['me']['checkout']['shippingAddress']['isDefaultBillingAddress']);
        
        }
        
        $this->assertArrayHasKey('isDefaultShippingAddress', $responseContent['me']['checkout']['shippingAddress']);
        
        if ($responseContent['me']['checkout']['shippingAddress']['isDefaultShippingAddress']) {
        
        $this->assertIsBool($responseContent['me']['checkout']['shippingAddress']['isDefaultShippingAddress']);
        
        }
        
        }
        
        $this->assertArrayHasKey('email', $responseContent['me']['checkout']);
        
        $this->assertNotNull($responseContent['me']['checkout']['email']);
        
        $this->assertIsString($responseContent['me']['checkout']['email']);
        
        $this->assertArrayHasKey('availableShippingMethods', $responseContent['me']['checkout']);
        
        $this->assertNotNull($responseContent['me']['checkout']['availableShippingMethods']);
        
        $this->assertIsArray($responseContent['me']['checkout']['availableShippingMethods']);
        
        for($g = 0; $g < count($responseContent['me']['checkout']['availableShippingMethods']); $g++) {
        
        if ($responseContent['me']['checkout']['availableShippingMethods'][$g]) {
        
        $this->assertEquals('ShippingMethod' , $responseContent['me']['checkout']['availableShippingMethods'][$g]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['me']['checkout']['availableShippingMethods'][$g]);
        
        $this->assertNotNull($responseContent['me']['checkout']['availableShippingMethods'][$g]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['me']['checkout']['availableShippingMethods'][$g]);
        
        $this->assertNotNull($responseContent['me']['checkout']['availableShippingMethods'][$g]['name']);
        
        $this->assertIsString($responseContent['me']['checkout']['availableShippingMethods'][$g]['name']);
        
        $this->assertArrayHasKey('price', $responseContent['me']['checkout']['availableShippingMethods'][$g]);
        
        if ($responseContent['me']['checkout']['availableShippingMethods'][$g]['price']) {
        
        $this->assertEquals('Money' , $responseContent['me']['checkout']['availableShippingMethods'][$g]['price']['__typename']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['availableShippingMethods'][$g]['price']);
        
        $this->assertNotNull($responseContent['me']['checkout']['availableShippingMethods'][$g]['price']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['availableShippingMethods'][$g]['price']['currency']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['availableShippingMethods'][$g]['price']);
        
        $this->assertNotNull($responseContent['me']['checkout']['availableShippingMethods'][$g]['price']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['availableShippingMethods'][$g]['price']['amount']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('shippingMethod', $responseContent['me']['checkout']);
        
        if ($responseContent['me']['checkout']['shippingMethod']) {
        
        $this->assertEquals('ShippingMethod' , $responseContent['me']['checkout']['shippingMethod']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['me']['checkout']['shippingMethod']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingMethod']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['me']['checkout']['shippingMethod']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingMethod']['name']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingMethod']['name']);
        
        $this->assertArrayHasKey('price', $responseContent['me']['checkout']['shippingMethod']);
        
        if ($responseContent['me']['checkout']['shippingMethod']['price']) {
        
        $this->assertEquals('Money' , $responseContent['me']['checkout']['shippingMethod']['price']['__typename']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['shippingMethod']['price']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingMethod']['price']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingMethod']['price']['currency']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['shippingMethod']['price']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingMethod']['price']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['shippingMethod']['price']['amount']);
        
        }
        
        }
        
        $this->assertArrayHasKey('shippingPrice', $responseContent['me']['checkout']);
        
        if ($responseContent['me']['checkout']['shippingPrice']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['me']['checkout']['shippingPrice']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['me']['checkout']['shippingPrice']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingPrice']['gross']);
        
        $this->assertEquals('Money' , $responseContent['me']['checkout']['shippingPrice']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['shippingPrice']['gross']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingPrice']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['shippingPrice']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['shippingPrice']['gross']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingPrice']['gross']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingPrice']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['me']['checkout']['shippingPrice']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingPrice']['net']);
        
        $this->assertEquals('Money' , $responseContent['me']['checkout']['shippingPrice']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['shippingPrice']['net']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingPrice']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['shippingPrice']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['shippingPrice']['net']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingPrice']['net']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingPrice']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('lines', $responseContent['me']['checkout']);
        
        if ($responseContent['me']['checkout']['lines']) {
        
        $this->assertIsArray($responseContent['me']['checkout']['lines']);
        
        for($g = 0; $g < count($responseContent['me']['checkout']['lines']); $g++) {
        
        if ($responseContent['me']['checkout']['lines'][$g]) {
        
        $this->assertEquals('CheckoutLine' , $responseContent['me']['checkout']['lines'][$g]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['me']['checkout']['lines'][$g]);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['id']);
        
        $this->assertArrayHasKey('quantity', $responseContent['me']['checkout']['lines'][$g]);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['quantity']);
        
        $this->assertIsInt($responseContent['me']['checkout']['lines'][$g]['quantity']);
        
        $this->assertArrayHasKey('totalPrice', $responseContent['me']['checkout']['lines'][$g]);
        
        if ($responseContent['me']['checkout']['lines'][$g]['totalPrice']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['me']['checkout']['lines'][$g]['totalPrice']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['me']['checkout']['lines'][$g]['totalPrice']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['totalPrice']['gross']);
        
        $this->assertEquals('Money' , $responseContent['me']['checkout']['lines'][$g]['totalPrice']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['lines'][$g]['totalPrice']['gross']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['totalPrice']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['lines'][$g]['totalPrice']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['lines'][$g]['totalPrice']['gross']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['totalPrice']['gross']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['totalPrice']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['me']['checkout']['lines'][$g]['totalPrice']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['totalPrice']['net']);
        
        $this->assertEquals('Money' , $responseContent['me']['checkout']['lines'][$g]['totalPrice']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['lines'][$g]['totalPrice']['net']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['totalPrice']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['lines'][$g]['totalPrice']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['lines'][$g]['totalPrice']['net']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['totalPrice']['net']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['totalPrice']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('variant', $responseContent['me']['checkout']['lines'][$g]);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']);
        
        $this->assertEquals('ProductVariant' , $responseContent['me']['checkout']['lines'][$g]['variant']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['me']['checkout']['lines'][$g]['variant']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['me']['checkout']['lines'][$g]['variant']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['name']);
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['variant']['name']);
        
        $this->assertArrayHasKey('sku', $responseContent['me']['checkout']['lines'][$g]['variant']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['sku']);
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['variant']['sku']);
        
        $this->assertArrayHasKey('quantityAvailable', $responseContent['me']['checkout']['lines'][$g]['variant']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['quantityAvailable']);
        
        $this->assertIsInt($responseContent['me']['checkout']['lines'][$g]['variant']['quantityAvailable']);
        
        $this->assertArrayHasKey('pricing', $responseContent['me']['checkout']['lines'][$g]['variant']);
        
        if ($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']) {
        
        $this->assertEquals('VariantPricingInfo' , $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['__typename']);
        
        $this->assertArrayHasKey('onSale', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']);
        
        if ($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['onSale']) {
        
        $this->assertIsBool($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['onSale']);
        
        }
        
        $this->assertArrayHasKey('priceUndiscounted', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']);
        
        if ($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']);
        
        $this->assertEquals('Money' , $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']);
        
        $this->assertEquals('Money' , $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('price', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']);
        
        if ($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['gross']);
        
        $this->assertEquals('Money' , $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['gross']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['gross']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['gross']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['net']);
        
        $this->assertEquals('Money' , $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['net']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['net']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['net']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['net']['currency']);
        
        }
        
        }
        
        $this->assertArrayHasKey('attributes', $responseContent['me']['checkout']['lines'][$g]['variant']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['attributes']);
        
        $this->assertIsArray($responseContent['me']['checkout']['lines'][$g]['variant']['attributes']);
        
        for($f = 0; $f < count($responseContent['me']['checkout']['lines'][$g]['variant']['attributes']); $f++) {
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['attributes'][$f]);
        
        $this->assertEquals('SelectedAttribute' , $responseContent['me']['checkout']['lines'][$g]['variant']['attributes'][$f]['__typename']);
        
        $this->assertArrayHasKey('attribute', $responseContent['me']['checkout']['lines'][$g]['variant']['attributes'][$f]);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['attributes'][$f]['attribute']);
        
        $this->assertEquals('Attribute' , $responseContent['me']['checkout']['lines'][$g]['variant']['attributes'][$f]['attribute']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['me']['checkout']['lines'][$g]['variant']['attributes'][$f]['attribute']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['attributes'][$f]['attribute']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['me']['checkout']['lines'][$g]['variant']['attributes'][$f]['attribute']);
        
        if ($responseContent['me']['checkout']['lines'][$g]['variant']['attributes'][$f]['attribute']['name']) {
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['variant']['attributes'][$f]['attribute']['name']);
        
        }
        
        $this->assertArrayHasKey('values', $responseContent['me']['checkout']['lines'][$g]['variant']['attributes'][$f]);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['attributes'][$f]['values']);
        
        $this->assertIsArray($responseContent['me']['checkout']['lines'][$g]['variant']['attributes'][$f]['values']);
        
        for($e = 0; $e < count($responseContent['me']['checkout']['lines'][$g]['variant']['attributes'][$f]['values']); $e++) {
        
        if ($responseContent['me']['checkout']['lines'][$g]['variant']['attributes'][$f]['values'][$e]) {
        
        $this->assertEquals('AttributeValue' , $responseContent['me']['checkout']['lines'][$g]['variant']['attributes'][$f]['values'][$e]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['me']['checkout']['lines'][$g]['variant']['attributes'][$f]['values'][$e]);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['attributes'][$f]['values'][$e]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['me']['checkout']['lines'][$g]['variant']['attributes'][$f]['values'][$e]);
        
        if ($responseContent['me']['checkout']['lines'][$g]['variant']['attributes'][$f]['values'][$e]['name']) {
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['variant']['attributes'][$f]['values'][$e]['name']);
        
        }
        
        $this->assertArrayHasKey('value', $responseContent['me']['checkout']['lines'][$g]['variant']['attributes'][$f]['values'][$e]);
        
        if ($responseContent['me']['checkout']['lines'][$g]['variant']['attributes'][$f]['values'][$e]['value']) {
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['variant']['attributes'][$f]['values'][$e]['value']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('product', $responseContent['me']['checkout']['lines'][$g]['variant']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['product']);
        
        $this->assertEquals('Product' , $responseContent['me']['checkout']['lines'][$g]['variant']['product']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['me']['checkout']['lines'][$g]['variant']['product']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['product']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['me']['checkout']['lines'][$g]['variant']['product']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['product']['name']);
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['variant']['product']['name']);
        
        $this->assertArrayHasKey('thumbnail', $responseContent['me']['checkout']['lines'][$g]['variant']['product']);
        
        if ($responseContent['me']['checkout']['lines'][$g]['variant']['product']['thumbnail']) {
        
        $this->assertEquals('Image' , $responseContent['me']['checkout']['lines'][$g]['variant']['product']['thumbnail']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['me']['checkout']['lines'][$g]['variant']['product']['thumbnail']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['product']['thumbnail']['url']);
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['variant']['product']['thumbnail']['url']);
        
        $this->assertArrayHasKey('alt', $responseContent['me']['checkout']['lines'][$g]['variant']['product']['thumbnail']);
        
        if ($responseContent['me']['checkout']['lines'][$g]['variant']['product']['thumbnail']['alt']) {
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['variant']['product']['thumbnail']['alt']);
        
        }
        
        }
        
        $this->assertArrayHasKey('thumbnail2x', $responseContent['me']['checkout']['lines'][$g]['variant']['product']);
        
        if ($responseContent['me']['checkout']['lines'][$g]['variant']['product']['thumbnail2x']) {
        
        $this->assertEquals('Image' , $responseContent['me']['checkout']['lines'][$g]['variant']['product']['thumbnail2x']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['me']['checkout']['lines'][$g]['variant']['product']['thumbnail2x']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['product']['thumbnail2x']['url']);
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['variant']['product']['thumbnail2x']['url']);
        
        }
        
        $this->assertArrayHasKey('productType', $responseContent['me']['checkout']['lines'][$g]['variant']['product']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['product']['productType']);
        
        $this->assertEquals('ProductType' , $responseContent['me']['checkout']['lines'][$g]['variant']['product']['productType']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['me']['checkout']['lines'][$g]['variant']['product']['productType']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['product']['productType']['id']);
        
        $this->assertArrayHasKey('isShippingRequired', $responseContent['me']['checkout']['lines'][$g]['variant']['product']['productType']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['product']['productType']['isShippingRequired']);
        
        $this->assertIsBool($responseContent['me']['checkout']['lines'][$g]['variant']['product']['productType']['isShippingRequired']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('isShippingRequired', $responseContent['me']['checkout']);
        
        $this->assertNotNull($responseContent['me']['checkout']['isShippingRequired']);
        
        $this->assertIsBool($responseContent['me']['checkout']['isShippingRequired']);
        
        $this->assertArrayHasKey('discount', $responseContent['me']['checkout']);
        
        if ($responseContent['me']['checkout']['discount']) {
        
        $this->assertEquals('Money' , $responseContent['me']['checkout']['discount']['__typename']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['discount']);
        
        $this->assertNotNull($responseContent['me']['checkout']['discount']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['discount']['currency']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['discount']);
        
        $this->assertNotNull($responseContent['me']['checkout']['discount']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['discount']['amount']);
        
        }
        
        $this->assertArrayHasKey('discountName', $responseContent['me']['checkout']);
        
        if ($responseContent['me']['checkout']['discountName']) {
        
        $this->assertIsString($responseContent['me']['checkout']['discountName']);
        
        }
        
        $this->assertArrayHasKey('translatedDiscountName', $responseContent['me']['checkout']);
        
        if ($responseContent['me']['checkout']['translatedDiscountName']) {
        
        $this->assertIsString($responseContent['me']['checkout']['translatedDiscountName']);
        
        }
        
        $this->assertArrayHasKey('voucherCode', $responseContent['me']['checkout']);
        
        if ($responseContent['me']['checkout']['voucherCode']) {
        
        $this->assertIsString($responseContent['me']['checkout']['voucherCode']);
        
        }
        
        $this->assertArrayHasKey('availablePaymentGateways', $responseContent['me']['checkout']);
        
        $this->assertNotNull($responseContent['me']['checkout']['availablePaymentGateways']);
        
        $this->assertIsArray($responseContent['me']['checkout']['availablePaymentGateways']);
        
        for($g = 0; $g < count($responseContent['me']['checkout']['availablePaymentGateways']); $g++) {
        
        $this->assertNotNull($responseContent['me']['checkout']['availablePaymentGateways'][$g]);
        
        $this->assertEquals('PaymentGateway' , $responseContent['me']['checkout']['availablePaymentGateways'][$g]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['me']['checkout']['availablePaymentGateways'][$g]);
        
        $this->assertNotNull($responseContent['me']['checkout']['availablePaymentGateways'][$g]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['me']['checkout']['availablePaymentGateways'][$g]);
        
        $this->assertNotNull($responseContent['me']['checkout']['availablePaymentGateways'][$g]['name']);
        
        $this->assertIsString($responseContent['me']['checkout']['availablePaymentGateways'][$g]['name']);
        
        $this->assertArrayHasKey('config', $responseContent['me']['checkout']['availablePaymentGateways'][$g]);
        
        $this->assertNotNull($responseContent['me']['checkout']['availablePaymentGateways'][$g]['config']);
        
        $this->assertIsArray($responseContent['me']['checkout']['availablePaymentGateways'][$g]['config']);
        
        for($f = 0; $f < count($responseContent['me']['checkout']['availablePaymentGateways'][$g]['config']); $f++) {
        
        $this->assertNotNull($responseContent['me']['checkout']['availablePaymentGateways'][$g]['config'][$f]);
        
        $this->assertEquals('GatewayConfigLine' , $responseContent['me']['checkout']['availablePaymentGateways'][$g]['config'][$f]['__typename']);
        
        $this->assertArrayHasKey('field', $responseContent['me']['checkout']['availablePaymentGateways'][$g]['config'][$f]);
        
        $this->assertNotNull($responseContent['me']['checkout']['availablePaymentGateways'][$g]['config'][$f]['field']);
        
        $this->assertIsString($responseContent['me']['checkout']['availablePaymentGateways'][$g]['config'][$f]['field']);
        
        $this->assertArrayHasKey('value', $responseContent['me']['checkout']['availablePaymentGateways'][$g]['config'][$f]);
        
        if ($responseContent['me']['checkout']['availablePaymentGateways'][$g]['config'][$f]['value']) {
        
        $this->assertIsString($responseContent['me']['checkout']['availablePaymentGateways'][$g]['config'][$f]['value']);
        
        }
        
        }
        
        $this->assertArrayHasKey('currencies', $responseContent['me']['checkout']['availablePaymentGateways'][$g]);
        
        $this->assertNotNull($responseContent['me']['checkout']['availablePaymentGateways'][$g]['currencies']);
        
        $this->assertIsArray($responseContent['me']['checkout']['availablePaymentGateways'][$g]['currencies']);
        
        for($f = 0; $f < count($responseContent['me']['checkout']['availablePaymentGateways'][$g]['currencies']); $f++) {
        
        if ($responseContent['me']['checkout']['availablePaymentGateways'][$g]['currencies'][$f]) {
        
        $this->assertIsString($responseContent['me']['checkout']['availablePaymentGateways'][$g]['currencies'][$f]);
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}