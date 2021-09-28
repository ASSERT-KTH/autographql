<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q2367594ce4f75fb39d1d780a31269703Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment ProductImageFragment on ProductImage {\n  id\n  alt\n  sortOrder\n  url\n  __typename\n}\n\nfragment Money on Money {\n  amount\n  currency\n  __typename\n}\n\nfragment ProductVariantAttributesFragment on Product {\n  id\n  attributes {\n    attribute {\n      id\n      slug\n      name\n      inputType\n      valueRequired\n      values {\n        id\n        name\n        slug\n        __typename\n      }\n      __typename\n    }\n    values {\n      id\n      name\n      slug\n      __typename\n    }\n    __typename\n  }\n  productType {\n    id\n    variantAttributes {\n      id\n      name\n      values {\n        id\n        name\n        slug\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  pricing {\n    priceRangeUndiscounted {\n      start {\n        gross {\n          ...Money\n          __typename\n        }\n        __typename\n      }\n      stop {\n        gross {\n          ...Money\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nfragment StockFragment on Stock {\n  id\n  quantity\n  quantityAllocated\n  warehouse {\n    id\n    name\n    __typename\n  }\n  __typename\n}\n\nfragment WeightFragment on Weight {\n  unit\n  value\n  __typename\n}\n\nfragment MetadataItem on MetadataItem {\n  key\n  value\n  __typename\n}\n\nfragment MetadataFragment on ObjectWithMetadata {\n  metadata {\n    ...MetadataItem\n    __typename\n  }\n  privateMetadata {\n    ...MetadataItem\n    __typename\n  }\n  __typename\n}\n\nfragment TaxTypeFragment on TaxType {\n  description\n  taxCode\n  __typename\n}\n\nfragment Product on Product {\n  ...ProductVariantAttributesFragment\n  ...MetadataFragment\n  name\n  slug\n  descriptionJson\n  seoTitle\n  seoDescription\n  defaultVariant {\n    id\n    __typename\n  }\n  category {\n    id\n    name\n    __typename\n  }\n  collections {\n    id\n    name\n    __typename\n  }\n  margin {\n    start\n    stop\n    __typename\n  }\n  purchaseCost {\n    start {\n      ...Money\n      __typename\n    }\n    stop {\n      ...Money\n      __typename\n    }\n    __typename\n  }\n  isAvailableForPurchase\n  isAvailable\n  isPublished\n  chargeTaxes\n  publicationDate\n  pricing {\n    priceRangeUndiscounted {\n      start {\n        gross {\n          ...Money\n          __typename\n        }\n        __typename\n      }\n      stop {\n        gross {\n          ...Money\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  images {\n    ...ProductImageFragment\n    __typename\n  }\n  variants {\n    id\n    sku\n    name\n    price {\n      ...Money\n      __typename\n    }\n    margin\n    stocks {\n      ...StockFragment\n      __typename\n    }\n    trackInventory\n    __typename\n  }\n  productType {\n    id\n    name\n    hasVariants\n    taxType {\n      ...TaxTypeFragment\n      __typename\n    }\n    __typename\n  }\n  weight {\n    ...WeightFragment\n    __typename\n  }\n  taxType {\n    ...TaxTypeFragment\n    __typename\n  }\n  availableForPurchase\n  visibleInListings\n  __typename\n}\n\nquery ProductDetails($id: ID!) {\n  product(id: $id) {\n    ...Product\n    __typename\n  }\n  taxTypes {\n    ...TaxTypeFragment\n    __typename\n  }\n}\n", "variables": {"id": "UHJvZHVjdDoxMjU="}, "operationName": "ProductDetails", "timesCalled": 2, "createdAt": "2021-09-04 18:58:19.784634+00:00", "updatedAt": "2021-09-04 20:28:46.984428+00:00"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MzA2ODY2OTIsImV4cCI6MTYzMDY4Njk5MiwidG9rZW4iOiJkUWV3MWVIRG1pZUEiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.M6D9gSNXGeQEq_uDlRIzGnRrswsVt1Tm_04E95sQv-E']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('product', $responseContent);
        
        if ($responseContent['product']) {
        
        $this->assertEquals('Product' , $responseContent['product']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['id']);
        
        $this->assertArrayHasKey('attributes', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['attributes']);
        
        $this->assertIsArray($responseContent['product']['attributes']);
        
        for($g = 0; $g < count($responseContent['product']['attributes']); $g++) {
        
        $this->assertNotNull($responseContent['product']['attributes'][$g]);
        
        $this->assertEquals('SelectedAttribute' , $responseContent['product']['attributes'][$g]['__typename']);
        
        $this->assertArrayHasKey('attribute', $responseContent['product']['attributes'][$g]);
        
        $this->assertNotNull($responseContent['product']['attributes'][$g]['attribute']);
        
        $this->assertEquals('Attribute' , $responseContent['product']['attributes'][$g]['attribute']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['attributes'][$g]['attribute']);
        
        $this->assertNotNull($responseContent['product']['attributes'][$g]['attribute']['id']);
        
        $this->assertArrayHasKey('slug', $responseContent['product']['attributes'][$g]['attribute']);
        
        if ($responseContent['product']['attributes'][$g]['attribute']['slug']) {
        
        $this->assertIsString($responseContent['product']['attributes'][$g]['attribute']['slug']);
        
        }
        
        $this->assertArrayHasKey('name', $responseContent['product']['attributes'][$g]['attribute']);
        
        if ($responseContent['product']['attributes'][$g]['attribute']['name']) {
        
        $this->assertIsString($responseContent['product']['attributes'][$g]['attribute']['name']);
        
        }
        
        $this->assertArrayHasKey('inputType', $responseContent['product']['attributes'][$g]['attribute']);
        
        if ($responseContent['product']['attributes'][$g]['attribute']['inputType']) {
        
        $this->assertContains($responseContent['product']['attributes'][$g]['attribute']['inputType'], ['DROPDOWN', 'MULTISELECT']);
        
        }
        
        $this->assertArrayHasKey('valueRequired', $responseContent['product']['attributes'][$g]['attribute']);
        
        $this->assertNotNull($responseContent['product']['attributes'][$g]['attribute']['valueRequired']);
        
        $this->assertIsBool($responseContent['product']['attributes'][$g]['attribute']['valueRequired']);
        
        $this->assertArrayHasKey('values', $responseContent['product']['attributes'][$g]['attribute']);
        
        if ($responseContent['product']['attributes'][$g]['attribute']['values']) {
        
        $this->assertIsArray($responseContent['product']['attributes'][$g]['attribute']['values']);
        
        for($f = 0; $f < count($responseContent['product']['attributes'][$g]['attribute']['values']); $f++) {
        
        if ($responseContent['product']['attributes'][$g]['attribute']['values'][$f]) {
        
        $this->assertEquals('AttributeValue' , $responseContent['product']['attributes'][$g]['attribute']['values'][$f]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['attributes'][$g]['attribute']['values'][$f]);
        
        $this->assertNotNull($responseContent['product']['attributes'][$g]['attribute']['values'][$f]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['attributes'][$g]['attribute']['values'][$f]);
        
        if ($responseContent['product']['attributes'][$g]['attribute']['values'][$f]['name']) {
        
        $this->assertIsString($responseContent['product']['attributes'][$g]['attribute']['values'][$f]['name']);
        
        }
        
        $this->assertArrayHasKey('slug', $responseContent['product']['attributes'][$g]['attribute']['values'][$f]);
        
        if ($responseContent['product']['attributes'][$g]['attribute']['values'][$f]['slug']) {
        
        $this->assertIsString($responseContent['product']['attributes'][$g]['attribute']['values'][$f]['slug']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('values', $responseContent['product']['attributes'][$g]);
        
        $this->assertNotNull($responseContent['product']['attributes'][$g]['values']);
        
        $this->assertIsArray($responseContent['product']['attributes'][$g]['values']);
        
        for($f = 0; $f < count($responseContent['product']['attributes'][$g]['values']); $f++) {
        
        if ($responseContent['product']['attributes'][$g]['values'][$f]) {
        
        $this->assertEquals('AttributeValue' , $responseContent['product']['attributes'][$g]['values'][$f]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['attributes'][$g]['values'][$f]);
        
        $this->assertNotNull($responseContent['product']['attributes'][$g]['values'][$f]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['attributes'][$g]['values'][$f]);
        
        if ($responseContent['product']['attributes'][$g]['values'][$f]['name']) {
        
        $this->assertIsString($responseContent['product']['attributes'][$g]['values'][$f]['name']);
        
        }
        
        $this->assertArrayHasKey('slug', $responseContent['product']['attributes'][$g]['values'][$f]);
        
        if ($responseContent['product']['attributes'][$g]['values'][$f]['slug']) {
        
        $this->assertIsString($responseContent['product']['attributes'][$g]['values'][$f]['slug']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('productType', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['productType']);
        
        $this->assertEquals('ProductType' , $responseContent['product']['productType']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['productType']);
        
        $this->assertNotNull($responseContent['product']['productType']['id']);
        
        $this->assertArrayHasKey('variantAttributes', $responseContent['product']['productType']);
        
        if ($responseContent['product']['productType']['variantAttributes']) {
        
        $this->assertIsArray($responseContent['product']['productType']['variantAttributes']);
        
        for($g = 0; $g < count($responseContent['product']['productType']['variantAttributes']); $g++) {
        
        if ($responseContent['product']['productType']['variantAttributes'][$g]) {
        
        $this->assertEquals('Attribute' , $responseContent['product']['productType']['variantAttributes'][$g]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['productType']['variantAttributes'][$g]);
        
        $this->assertNotNull($responseContent['product']['productType']['variantAttributes'][$g]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['productType']['variantAttributes'][$g]);
        
        if ($responseContent['product']['productType']['variantAttributes'][$g]['name']) {
        
        $this->assertIsString($responseContent['product']['productType']['variantAttributes'][$g]['name']);
        
        }
        
        $this->assertArrayHasKey('values', $responseContent['product']['productType']['variantAttributes'][$g]);
        
        if ($responseContent['product']['productType']['variantAttributes'][$g]['values']) {
        
        $this->assertIsArray($responseContent['product']['productType']['variantAttributes'][$g]['values']);
        
        for($f = 0; $f < count($responseContent['product']['productType']['variantAttributes'][$g]['values']); $f++) {
        
        if ($responseContent['product']['productType']['variantAttributes'][$g]['values'][$f]) {
        
        $this->assertEquals('AttributeValue' , $responseContent['product']['productType']['variantAttributes'][$g]['values'][$f]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['productType']['variantAttributes'][$g]['values'][$f]);
        
        $this->assertNotNull($responseContent['product']['productType']['variantAttributes'][$g]['values'][$f]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['productType']['variantAttributes'][$g]['values'][$f]);
        
        if ($responseContent['product']['productType']['variantAttributes'][$g]['values'][$f]['name']) {
        
        $this->assertIsString($responseContent['product']['productType']['variantAttributes'][$g]['values'][$f]['name']);
        
        }
        
        $this->assertArrayHasKey('slug', $responseContent['product']['productType']['variantAttributes'][$g]['values'][$f]);
        
        if ($responseContent['product']['productType']['variantAttributes'][$g]['values'][$f]['slug']) {
        
        $this->assertIsString($responseContent['product']['productType']['variantAttributes'][$g]['values'][$f]['slug']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('pricing', $responseContent['product']);
        
        if ($responseContent['product']['pricing']) {
        
        $this->assertEquals('ProductPricingInfo' , $responseContent['product']['pricing']['__typename']);
        
        $this->assertArrayHasKey('priceRangeUndiscounted', $responseContent['product']['pricing']);
        
        if ($responseContent['product']['pricing']['priceRangeUndiscounted']) {
        
        $this->assertEquals('TaxedMoneyRange' , $responseContent['product']['pricing']['priceRangeUndiscounted']['__typename']);
        
        $this->assertArrayHasKey('start', $responseContent['product']['pricing']['priceRangeUndiscounted']);
        
        if ($responseContent['product']['pricing']['priceRangeUndiscounted']['start']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['product']['pricing']['priceRangeUndiscounted']['start']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['product']['pricing']['priceRangeUndiscounted']['start']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertEquals('Money' , $responseContent['product']['pricing']['priceRangeUndiscounted']['start']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRangeUndiscounted']['start']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['pricing']['priceRangeUndiscounted']['start']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRangeUndiscounted']['start']['gross']['currency']);
        
        $this->assertIsString($responseContent['product']['pricing']['priceRangeUndiscounted']['start']['gross']['currency']);
        
        }
        
        $this->assertArrayHasKey('stop', $responseContent['product']['pricing']['priceRangeUndiscounted']);
        
        if ($responseContent['product']['pricing']['priceRangeUndiscounted']['stop']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['product']['pricing']['priceRangeUndiscounted']['stop']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertEquals('Money' , $responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['gross']['currency']);
        
        $this->assertIsString($responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['gross']['currency']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('metadata', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['metadata']);
        
        $this->assertIsArray($responseContent['product']['metadata']);
        
        for($g = 0; $g < count($responseContent['product']['metadata']); $g++) {
        
        if ($responseContent['product']['metadata'][$g]) {
        
        $this->assertEquals('MetadataItem' , $responseContent['product']['metadata'][$g]['__typename']);
        
        $this->assertArrayHasKey('key', $responseContent['product']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['product']['metadata'][$g]['key']);
        
        $this->assertIsString($responseContent['product']['metadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['product']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['product']['metadata'][$g]['value']);
        
        $this->assertIsString($responseContent['product']['metadata'][$g]['value']);
        
        }
        
        }
        
        $this->assertArrayHasKey('privateMetadata', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['privateMetadata']);
        
        $this->assertIsArray($responseContent['product']['privateMetadata']);
        
        for($g = 0; $g < count($responseContent['product']['privateMetadata']); $g++) {
        
        if ($responseContent['product']['privateMetadata'][$g]) {
        
        $this->assertEquals('MetadataItem' , $responseContent['product']['privateMetadata'][$g]['__typename']);
        
        $this->assertArrayHasKey('key', $responseContent['product']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['product']['privateMetadata'][$g]['key']);
        
        $this->assertIsString($responseContent['product']['privateMetadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['product']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['product']['privateMetadata'][$g]['value']);
        
        $this->assertIsString($responseContent['product']['privateMetadata'][$g]['value']);
        
        }
        
        }
        
        $this->assertArrayHasKey('name', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['name']);
        
        $this->assertIsString($responseContent['product']['name']);
        
        $this->assertArrayHasKey('slug', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['slug']);
        
        $this->assertIsString($responseContent['product']['slug']);
        
        $this->assertArrayHasKey('descriptionJson', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['descriptionJson']);
        
        $this->assertArrayHasKey('seoTitle', $responseContent['product']);
        
        if ($responseContent['product']['seoTitle']) {
        
        $this->assertIsString($responseContent['product']['seoTitle']);
        
        }
        
        $this->assertArrayHasKey('seoDescription', $responseContent['product']);
        
        if ($responseContent['product']['seoDescription']) {
        
        $this->assertIsString($responseContent['product']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('defaultVariant', $responseContent['product']);
        
        if ($responseContent['product']['defaultVariant']) {
        
        $this->assertEquals('ProductVariant' , $responseContent['product']['defaultVariant']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['defaultVariant']);
        
        $this->assertNotNull($responseContent['product']['defaultVariant']['id']);
        
        }
        
        $this->assertArrayHasKey('category', $responseContent['product']);
        
        if ($responseContent['product']['category']) {
        
        $this->assertEquals('Category' , $responseContent['product']['category']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['category']);
        
        $this->assertNotNull($responseContent['product']['category']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['category']);
        
        $this->assertNotNull($responseContent['product']['category']['name']);
        
        $this->assertIsString($responseContent['product']['category']['name']);
        
        }
        
        $this->assertArrayHasKey('collections', $responseContent['product']);
        
        if ($responseContent['product']['collections']) {
        
        $this->assertIsArray($responseContent['product']['collections']);
        
        for($g = 0; $g < count($responseContent['product']['collections']); $g++) {
        
        if ($responseContent['product']['collections'][$g]) {
        
        $this->assertEquals('Collection' , $responseContent['product']['collections'][$g]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['collections'][$g]);
        
        $this->assertNotNull($responseContent['product']['collections'][$g]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['collections'][$g]);
        
        $this->assertNotNull($responseContent['product']['collections'][$g]['name']);
        
        $this->assertIsString($responseContent['product']['collections'][$g]['name']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('margin', $responseContent['product']);
        
        if ($responseContent['product']['margin']) {
        
        $this->assertEquals('Margin' , $responseContent['product']['margin']['__typename']);
        
        $this->assertArrayHasKey('start', $responseContent['product']['margin']);
        
        if ($responseContent['product']['margin']['start']) {
        
        $this->assertIsInt($responseContent['product']['margin']['start']);
        
        }
        
        $this->assertArrayHasKey('stop', $responseContent['product']['margin']);
        
        if ($responseContent['product']['margin']['stop']) {
        
        $this->assertIsInt($responseContent['product']['margin']['stop']);
        
        }
        
        }
        
        $this->assertArrayHasKey('purchaseCost', $responseContent['product']);
        
        if ($responseContent['product']['purchaseCost']) {
        
        $this->assertEquals('MoneyRange' , $responseContent['product']['purchaseCost']['__typename']);
        
        $this->assertArrayHasKey('start', $responseContent['product']['purchaseCost']);
        
        if ($responseContent['product']['purchaseCost']['start']) {
        
        $this->assertEquals('Money' , $responseContent['product']['purchaseCost']['start']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['purchaseCost']['start']);
        
        $this->assertNotNull($responseContent['product']['purchaseCost']['start']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['purchaseCost']['start']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['purchaseCost']['start']);
        
        $this->assertNotNull($responseContent['product']['purchaseCost']['start']['currency']);
        
        $this->assertIsString($responseContent['product']['purchaseCost']['start']['currency']);
        
        }
        
        $this->assertArrayHasKey('stop', $responseContent['product']['purchaseCost']);
        
        if ($responseContent['product']['purchaseCost']['stop']) {
        
        $this->assertEquals('Money' , $responseContent['product']['purchaseCost']['stop']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['purchaseCost']['stop']);
        
        $this->assertNotNull($responseContent['product']['purchaseCost']['stop']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['purchaseCost']['stop']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['purchaseCost']['stop']);
        
        $this->assertNotNull($responseContent['product']['purchaseCost']['stop']['currency']);
        
        $this->assertIsString($responseContent['product']['purchaseCost']['stop']['currency']);
        
        }
        
        }
        
        $this->assertArrayHasKey('isAvailableForPurchase', $responseContent['product']);
        
        if ($responseContent['product']['isAvailableForPurchase']) {
        
        $this->assertIsBool($responseContent['product']['isAvailableForPurchase']);
        
        }
        
        $this->assertArrayHasKey('isAvailable', $responseContent['product']);
        
        if ($responseContent['product']['isAvailable']) {
        
        $this->assertIsBool($responseContent['product']['isAvailable']);
        
        }
        
        $this->assertArrayHasKey('isPublished', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['isPublished']);
        
        $this->assertIsBool($responseContent['product']['isPublished']);
        
        $this->assertArrayHasKey('chargeTaxes', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['chargeTaxes']);
        
        $this->assertIsBool($responseContent['product']['chargeTaxes']);
        
        $this->assertArrayHasKey('publicationDate', $responseContent['product']);
        
        if ($responseContent['product']['publicationDate']) {
        
        }
        
        $this->assertArrayHasKey('pricing', $responseContent['product']);
        
        if ($responseContent['product']['pricing']) {
        
        $this->assertEquals('ProductPricingInfo' , $responseContent['product']['pricing']['__typename']);
        
        $this->assertArrayHasKey('priceRangeUndiscounted', $responseContent['product']['pricing']);
        
        if ($responseContent['product']['pricing']['priceRangeUndiscounted']) {
        
        $this->assertEquals('TaxedMoneyRange' , $responseContent['product']['pricing']['priceRangeUndiscounted']['__typename']);
        
        $this->assertArrayHasKey('start', $responseContent['product']['pricing']['priceRangeUndiscounted']);
        
        if ($responseContent['product']['pricing']['priceRangeUndiscounted']['start']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['product']['pricing']['priceRangeUndiscounted']['start']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['product']['pricing']['priceRangeUndiscounted']['start']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertEquals('Money' , $responseContent['product']['pricing']['priceRangeUndiscounted']['start']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRangeUndiscounted']['start']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['pricing']['priceRangeUndiscounted']['start']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRangeUndiscounted']['start']['gross']['currency']);
        
        $this->assertIsString($responseContent['product']['pricing']['priceRangeUndiscounted']['start']['gross']['currency']);
        
        }
        
        $this->assertArrayHasKey('stop', $responseContent['product']['pricing']['priceRangeUndiscounted']);
        
        if ($responseContent['product']['pricing']['priceRangeUndiscounted']['stop']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['product']['pricing']['priceRangeUndiscounted']['stop']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertEquals('Money' , $responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertNotNull($responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['gross']['currency']);
        
        $this->assertIsString($responseContent['product']['pricing']['priceRangeUndiscounted']['stop']['gross']['currency']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('images', $responseContent['product']);
        
        if ($responseContent['product']['images']) {
        
        $this->assertIsArray($responseContent['product']['images']);
        
        for($g = 0; $g < count($responseContent['product']['images']); $g++) {
        
        if ($responseContent['product']['images'][$g]) {
        
        $this->assertEquals('ProductImage' , $responseContent['product']['images'][$g]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['images'][$g]);
        
        $this->assertNotNull($responseContent['product']['images'][$g]['id']);
        
        $this->assertArrayHasKey('alt', $responseContent['product']['images'][$g]);
        
        $this->assertNotNull($responseContent['product']['images'][$g]['alt']);
        
        $this->assertIsString($responseContent['product']['images'][$g]['alt']);
        
        $this->assertArrayHasKey('sortOrder', $responseContent['product']['images'][$g]);
        
        if ($responseContent['product']['images'][$g]['sortOrder']) {
        
        $this->assertIsInt($responseContent['product']['images'][$g]['sortOrder']);
        
        }
        
        $this->assertArrayHasKey('url', $responseContent['product']['images'][$g]);
        
        $this->assertNotNull($responseContent['product']['images'][$g]['url']);
        
        $this->assertIsString($responseContent['product']['images'][$g]['url']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('variants', $responseContent['product']);
        
        if ($responseContent['product']['variants']) {
        
        $this->assertIsArray($responseContent['product']['variants']);
        
        for($g = 0; $g < count($responseContent['product']['variants']); $g++) {
        
        if ($responseContent['product']['variants'][$g]) {
        
        $this->assertEquals('ProductVariant' , $responseContent['product']['variants'][$g]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['variants'][$g]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['id']);
        
        $this->assertArrayHasKey('sku', $responseContent['product']['variants'][$g]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['sku']);
        
        $this->assertIsString($responseContent['product']['variants'][$g]['sku']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['variants'][$g]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['name']);
        
        $this->assertIsString($responseContent['product']['variants'][$g]['name']);
        
        $this->assertArrayHasKey('price', $responseContent['product']['variants'][$g]);
        
        if ($responseContent['product']['variants'][$g]['price']) {
        
        $this->assertEquals('Money' , $responseContent['product']['variants'][$g]['price']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['variants'][$g]['price']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['price']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['variants'][$g]['price']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['product']['variants'][$g]['price']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['price']['currency']);
        
        $this->assertIsString($responseContent['product']['variants'][$g]['price']['currency']);
        
        }
        
        $this->assertArrayHasKey('margin', $responseContent['product']['variants'][$g]);
        
        if ($responseContent['product']['variants'][$g]['margin']) {
        
        $this->assertIsInt($responseContent['product']['variants'][$g]['margin']);
        
        }
        
        $this->assertArrayHasKey('stocks', $responseContent['product']['variants'][$g]);
        
        if ($responseContent['product']['variants'][$g]['stocks']) {
        
        $this->assertIsArray($responseContent['product']['variants'][$g]['stocks']);
        
        for($f = 0; $f < count($responseContent['product']['variants'][$g]['stocks']); $f++) {
        
        if ($responseContent['product']['variants'][$g]['stocks'][$f]) {
        
        $this->assertEquals('Stock' , $responseContent['product']['variants'][$g]['stocks'][$f]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['variants'][$g]['stocks'][$f]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['stocks'][$f]['id']);
        
        $this->assertArrayHasKey('quantity', $responseContent['product']['variants'][$g]['stocks'][$f]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['stocks'][$f]['quantity']);
        
        $this->assertIsInt($responseContent['product']['variants'][$g]['stocks'][$f]['quantity']);
        
        $this->assertArrayHasKey('quantityAllocated', $responseContent['product']['variants'][$g]['stocks'][$f]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['stocks'][$f]['quantityAllocated']);
        
        $this->assertIsInt($responseContent['product']['variants'][$g]['stocks'][$f]['quantityAllocated']);
        
        $this->assertArrayHasKey('warehouse', $responseContent['product']['variants'][$g]['stocks'][$f]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['stocks'][$f]['warehouse']);
        
        $this->assertEquals('Warehouse' , $responseContent['product']['variants'][$g]['stocks'][$f]['warehouse']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['variants'][$g]['stocks'][$f]['warehouse']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['stocks'][$f]['warehouse']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['variants'][$g]['stocks'][$f]['warehouse']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['stocks'][$f]['warehouse']['name']);
        
        $this->assertIsString($responseContent['product']['variants'][$g]['stocks'][$f]['warehouse']['name']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('trackInventory', $responseContent['product']['variants'][$g]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['trackInventory']);
        
        $this->assertIsBool($responseContent['product']['variants'][$g]['trackInventory']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('productType', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['productType']);
        
        $this->assertEquals('ProductType' , $responseContent['product']['productType']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['productType']);
        
        $this->assertNotNull($responseContent['product']['productType']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['productType']);
        
        $this->assertNotNull($responseContent['product']['productType']['name']);
        
        $this->assertIsString($responseContent['product']['productType']['name']);
        
        $this->assertArrayHasKey('hasVariants', $responseContent['product']['productType']);
        
        $this->assertNotNull($responseContent['product']['productType']['hasVariants']);
        
        $this->assertIsBool($responseContent['product']['productType']['hasVariants']);
        
        $this->assertArrayHasKey('taxType', $responseContent['product']['productType']);
        
        if ($responseContent['product']['productType']['taxType']) {
        
        $this->assertEquals('TaxType' , $responseContent['product']['productType']['taxType']['__typename']);
        
        $this->assertArrayHasKey('description', $responseContent['product']['productType']['taxType']);
        
        if ($responseContent['product']['productType']['taxType']['description']) {
        
        $this->assertIsString($responseContent['product']['productType']['taxType']['description']);
        
        }
        
        $this->assertArrayHasKey('taxCode', $responseContent['product']['productType']['taxType']);
        
        if ($responseContent['product']['productType']['taxType']['taxCode']) {
        
        $this->assertIsString($responseContent['product']['productType']['taxType']['taxCode']);
        
        }
        
        }
        
        $this->assertArrayHasKey('weight', $responseContent['product']);
        
        if ($responseContent['product']['weight']) {
        
        $this->assertEquals('Weight' , $responseContent['product']['weight']['__typename']);
        
        $this->assertArrayHasKey('unit', $responseContent['product']['weight']);
        
        $this->assertNotNull($responseContent['product']['weight']['unit']);
        
        $this->assertContains($responseContent['product']['weight']['unit'], ['KG', 'LB', 'OZ', 'G']);
        
        $this->assertArrayHasKey('value', $responseContent['product']['weight']);
        
        $this->assertNotNull($responseContent['product']['weight']['value']);
        
        $this->assertIsNumeric($responseContent['product']['weight']['value']);
        
        }
        
        $this->assertArrayHasKey('taxType', $responseContent['product']);
        
        if ($responseContent['product']['taxType']) {
        
        $this->assertEquals('TaxType' , $responseContent['product']['taxType']['__typename']);
        
        $this->assertArrayHasKey('description', $responseContent['product']['taxType']);
        
        if ($responseContent['product']['taxType']['description']) {
        
        $this->assertIsString($responseContent['product']['taxType']['description']);
        
        }
        
        $this->assertArrayHasKey('taxCode', $responseContent['product']['taxType']);
        
        if ($responseContent['product']['taxType']['taxCode']) {
        
        $this->assertIsString($responseContent['product']['taxType']['taxCode']);
        
        }
        
        }
        
        $this->assertArrayHasKey('availableForPurchase', $responseContent['product']);
        
        if ($responseContent['product']['availableForPurchase']) {
        
        }
        
        $this->assertArrayHasKey('visibleInListings', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['visibleInListings']);
        
        $this->assertIsBool($responseContent['product']['visibleInListings']);
        
        }
        
        $this->assertArrayHasKey('taxTypes', $responseContent);
        
        if ($responseContent['taxTypes']) {
        
        $this->assertIsArray($responseContent['taxTypes']);
        
        for($g = 0; $g < count($responseContent['taxTypes']); $g++) {
        
        if ($responseContent['taxTypes'][$g]) {
        
        $this->assertEquals('TaxType' , $responseContent['taxTypes'][$g]['__typename']);
        
        $this->assertArrayHasKey('description', $responseContent['taxTypes'][$g]);
        
        if ($responseContent['taxTypes'][$g]['description']) {
        
        $this->assertIsString($responseContent['taxTypes'][$g]['description']);
        
        }
        
        $this->assertArrayHasKey('taxCode', $responseContent['taxTypes'][$g]);
        
        if ($responseContent['taxTypes'][$g]['taxCode']) {
        
        $this->assertIsString($responseContent['taxTypes'][$g]['taxCode']);
        
        }
        
        }
        
        }
        
        }
        

    }
}