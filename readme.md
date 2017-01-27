# Bukalapak QA Engineer Online Test

Laravel 5.4 (Laravel Dusk)


### Install

Clone this repository
```
git clone https://github.com/icannugraha/bukalapak-qa-online-test.git
```
Change to project directory
```
cd bukalapak-qa-online-test (or whatever you name it)
```
Install dependencies
```
composer install
```
Configure .env file
```
cp .env.example .env
```
Then setup your Database connection (connection, database name, credential)
```
DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD
```
Database Migration
```
php artisan migrate
```
Seed Database
```
php artisan db:seed
```
Run Laravel Dusk
```
php artisan dusk
```
It will open up your browser and do the transaction test automatically.
```
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
It shows that the browser did not display the expected result which should be ` REX ` in `body` & element that has `delivery_service` class attribute