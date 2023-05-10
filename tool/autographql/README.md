# AutoGraphQL

**AutoGraphQL uses production queries and GraphQL schemas to generate tests that target the GraphQL API implementation of applications.**

---

# Configure and extend your project to log the queries

- use `./middleware/` as a sample written in TS for adding middleware and extending your project to track the queries being made and generate the `queries` directory, which is the expected input of the tool

# Experiments with [Saleor](https://github.com/mirumee/saleor)

- Set up saleor logging configurations
- Create a [JWT token](https://docs.saleor.io/docs/2.9.0/api/authenticate/#creating-a-jwt-token) for Saleor
- Generate and execute workloads! ✨

## Fetch queries
eventually, you need to take the resulted `queries` directory out and place it beside `./runQueries.py`. In the `Saleor` scenario, you need to follow these steps:
- `docker exec -it <container-id-for-saleor-platform_api_1> /bin/bash`
- `python3 manage.py fetch_all_query_entries`
- `docker cp <container-id-for-saleor-platform_api_1>:/app/queries /path/in/host/queries/`

## Generate tests with AutoGraphQL
- Make sure you did place the `./queries/` directory. Otherwise, you will get error
- `AutoGraphQL` and `./runQueries.py` expect a `./testCases/` If you want your tests to be generated. If you only want some reports on coverage, skip to the next step
- Open `./config.py`. Set your GraphQL endpoint as `graphql_url`. Also, if your project GraphQL api requires authentication for making queries, provide one as `authorization_token`
- `pip3 install -r requirements.txt`
- `python3 runQueries.py True`

## Run generated tests
The tests are generated in `./testCases/` with `PHPUnit`. So, you need to take the remaining steps having `PHP`:
- Install and set up [composer](https://getcomposer.org/). you can use this [Link](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-composer-on-ubuntu-20-04) for ubuntu
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
