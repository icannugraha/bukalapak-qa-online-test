<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = array(
        'trx_id',
		'address_ship',
		'date_order',
		'seller_name',
		'delivery_service',
    );
}
