<?php

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
			'trx_id' => '01023A9AA',
			'address_ship' => 'KAMPUNG DATOK KERAMAT',
			'date_order' => '21/08/2016',
			'seller_name' => 'FURHAN',
			'delivery_service' => 'JNE'
    	]);

    	DB::table('transactions')->insert([
			'trx_id' => '01023A9AC',
			'address_ship' => 'JALAN GURNEY',
			'date_order' => '21/08/2016',
			'seller_name' => 'FURHAN',
			'delivery_service' => 'REX'
    	]);

    	DB::table('transactions')->insert([
			'trx_id' => '01023A9AD',
			'address_ship' => 'UTM KUALA LUMPUR',
			'date_order' => '21/08/2016',
			'seller_name' => 'FURHAN',
			'delivery_service' => 'POS'
    	]);
    }
}
