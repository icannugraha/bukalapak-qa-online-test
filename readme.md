# Laravel Dusk - Simple Test

Laravel 5.4 (Laravel Dusk)


## Getting Started

1. Clone this repository
```shell
git clone https://github.com/ienugr/laravel-dusk-simple-test.git
```

2. Change to project directory
```shell
cd laravel-dusk-simple-test # or whatever you name it
```

3. Install dependencies
```shell
composer install
```

## Environment Setup

1. Configure .env file
```shell
cp .env.example .env
```

2. Then setup your Database connection (connection, database name, credential)
```shell
DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD
```

## Migration

1. Database Migration
```shell
php artisan migrate
```
2. Seed Database
```shell
php artisan db:seed
```

## Run Laravel Dusk

1. Run Laravel Dusk
```shell
php artisan dusk
```

2. It will open your browser and do the transaction test automatically. This is the test result:
```shell
PHPUnit 5.7.8 by Sebastian Bergmann and contributors.

F                                                                  1 / 1 (100%)

Time: 11.3 seconds, Memory: 10.00MB

There was 1 failure:

1) Tests\Browser\TransactionTest::testTransactionDetail
Did not see expected text [REX] within element [body .delivery_service].
Failed asserting that false is true.

...\vendor\laravel\dusk\src\Concerns\MakesAssertions.php:139
...\vendor\laravel\dusk\src\Concerns\MakesAssertions.php:110
...\tests\Browser\TransactionTest.php:25
...\vendor\laravel\dusk\src\TestCase.php:88
...\tests\Browser\TransactionTest.php:28

FAILURES!
Tests: 1, Assertions: 4, Failures: 1.

```

3. It shows that the browser did not display the expected result which should be ` REX ` in `body` & element that has `delivery_service` class attribute
