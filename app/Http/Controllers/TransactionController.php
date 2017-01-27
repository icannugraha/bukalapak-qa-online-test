<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Transaction;

class TransactionController extends Controller
{
    public function index($trx_id)
    {
    	$transaction = Transaction::where('trx_id', $trx_id)->first();

    	return view('transaction.index', compact('transaction'));
    }
}
