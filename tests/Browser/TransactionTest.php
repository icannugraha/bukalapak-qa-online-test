<?php

namespace Tests\Browser;

use App\Transaction;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;

class TransactionTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testTransactionDetail()
    {
        $transaction = Transaction::where('trx_id', '01023A9AC')->first();

        $this->browse(function ($browser) use ($transaction) {
            $browser->visit('/01023A9AC')
                    ->assertSeeIn('.jumbotron', 'Transaction Successful!') /* Check if it displays 'Transaction Successful' message */
                    ->assertSeeIn('.transaction_id', $transaction->trx_id) /* check if it displays the correct transaction ID */
                    ->assertSeeIn('.seller_name', $transaction->seller_name) /* check if it displays the correct seller name based on the trx_id */
                    ->assertSeeIn('.delivery_service', $transaction->delivery_service) /* check if it displays the correct delivery service based on the trx_id */
                    ->assertSeeIn('.order_date', $transaction->date_order) /* check if it displays the correct date order based on the trx_id */
                    ->assertSeeIn('.address_shipment', $transaction->address_ship); /* check if it displays the correct address based on the trx_id */
        });
    }
}
