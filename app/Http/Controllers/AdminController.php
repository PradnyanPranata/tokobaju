<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showTransactions()
{
    $transactions = Transaction::with(['user', 'product'])->get();
    return view('admin.transaksi', compact('transactions'));
}

}
