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

nano .env
```

2. Then setup your Database connection (connection, database name, credential)
```shell
# .env EXAMPLE
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_dusk
DB_USERNAME=root
DB_PASSWORD=root
```

## Migration

1. Database Migration
```shell
php artisan migrate

# it will create this following tables:
# +------------------------+
# | Tables_in_laravel_dusk |
# +------------------------+
# | migrations             |
# | transactions           |
# +------------------------+
```
2. Seed Database
```shell
php artisan db:seed

# it will seed `transactions` table with this following data:
# +----+-----------+-----------------------+------------+-------------+------------------+------------+------------+
# | id | trx_id    | address_ship          | date_order | seller_name | delivery_service | created_at | updated_at |
# +----+-----------+-----------------------+------------+-------------+------------------+------------+------------+
# |  1 | 01023A9AA | KAMPUNG DATOK KERAMAT | 21/08/2016 | FURHAN      | JNE              | NULL       | NULL       |
# |  2 | 01023A9AC | JALAN GURNEY          | 21/08/2016 | FURHAN      | REX              | NULL       | NULL       |
# |  3 | 01023A9AD | UTM KUALA LUMPUR      | 21/08/2016 | FURHAN      | POS              | NULL       | NULL       |
# +----+-----------+-----------------------+------------+-------------+------------------+------------+------------+

```

## Run Laravel Dusk
1. Generate and set `APP_KEY` to the project
```shell
php artisan key:generate

# Application key <your-app-key> set successfully.
```


2. Run the App
```shell
php artisan serve
```

3. Open new Terminal/Shell/CMD and Run Laravel Dusk
```shell
php artisan dusk
```

4. It will open your browser and do the transaction test automatically. This is the test result:
```shell
PHPUnit 5.7.8 by Sebastian Bergmann and contributors.

F                                                                   1 / 1 (100%)

Time: 1.42 seconds, Memory: 10.00MB

There was 1 failure:

1) Tests\Browser\TransactionTest::testTransactionDetail
Did not see expected text [REX] within element [body .delivery_service].
Failed asserting that false is true.

/home/username/code/laravel/laravel-dusk-simple-test/vendor/laravel/dusk/src/Concerns/MakesAssertions.php:139
/home/username/code/laravel/laravel-dusk-simple-test/tests/Browser/TransactionTest.php:25
/home/username/code/laravel/laravel-dusk-simple-test/vendor/laravel/dusk/src/TestCase.php:88
/home/username/code/laravel/laravel-dusk-simple-test/tests/Browser/TransactionTest.php:28

FAILURES!
Tests: 1, Assertions: 4, Failures: 1.
```

5. The test result explains that the browser is not displaying `REX` within `body` element that has `delivery_service` class attribute.

##### That's all. Thank you.
