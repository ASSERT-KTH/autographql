# AutoGraphQL

**AutoGraphQL uses production queries and GraphQL schemas to generate tests that target the GraphQL API implementation of applications.**

---

# Experiments with [Saleor](https://github.com/mirumee/saleor)

- Set up saleor logging configurations, [like so](https://github.com/louisezetterlund/saleor-platform)
- Create a [JWT token](https://docs.saleor.io/docs/2.9.0/api/authenticate/#creating-a-jwt-token) for Saleor
- Generate and execute workloads! ✨

## Fetch queries
- `docker exec -it <container-id-for-saleor-platform_api_1> /bin/bash`
- `python3 manage.py fetch_all_query_entries`
- `docker cp <container-id-for-saleor-platform_api_1>:/app/queries /path/in/host/queries/`

## Generate tests with AutoGraphQL
- Create directory `./testCases/`
- Make sure the queries are saved in `./queries/`
- Create a `./JWT-token.txt` with your Saleor JWT token
- `pip3 install -r requirements.txt`
- `python3 runQueries.py True`

## Run generated tests
- Install and set up [composer](https://getcomposer.org/)
- In the directory with the tests, add `composer.json` with following code:
```
{
  "name": "saleor/saleor",
  "require": {
    "guzzlehttp/guzzle": "^6.0",
    "phpunit/phpunit": "^9.5.6"
  },
  "autoload": {
    "psr-4": {
      "App\\": "src/"
    }
  }
}
```
- [Install PHPUnit](https://phpunit.de/index.html) and run `composer update`
- Run tests from `saleor-platform/saleor/` with `<dir-with-tests>/vendor/bin/phpunit <dir-with-tests>/`
