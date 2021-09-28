<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class {{ className }} extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = {{ query }};

        {% if authToken != '' %}
        $response = $client->request('POST', '{{ graphQLURL }}', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => '{{ authToken }}']]);
        {% else %}
        $response = $client->request('POST', graphQLURL, ['body' => $query, 'headers' => ['Content-Type' => 'application/json']]);
        {% endif %}
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        {% for assertion in allAssertions %}
        {{ assertion }}
        {% endfor %}

    }
}
