<?php

namespace App\Http\Controllers\Base;

use App\Transaction;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Routing\Controller;
use App\Account;
use App\TransactionType;
use App\PaymentMethod;
use App\PaymentType;

class CashierController extends Controller
{
    public function dashboard() {
        $data['transactions'] = Transaction::all();
        return view('base.dashboard.cashier.dashboard', $data);
    }

    public function addTransaction() {
        $data['clients'] = Account::where('account_type_id', 2)->get();
        $data['transaction_types'] = TransactionType::all();
        return view('base.dashboard.cashier.transactions', $data);
    }

    public function addPayment(){
        $data['payment_methods'] = PaymentMethod::all();
        $data['payment_types'] = PaymentType::all();
        return view('base.dashboard.cashier.payments', $data);
    }
}
