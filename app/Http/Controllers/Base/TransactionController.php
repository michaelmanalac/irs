<?php

namespace App\Http\Controllers\Base;

use App\Account;
use App\Transaction;
use App\TransactionType;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['clients'] = Account::where('account_type_id', 2)->get();
        $data['transaction_types'] = TransactionType::all();
        return view('base.transactions.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Get transaction type monthly interest
        $transactionType = TransactionType::find($request->input('transaction_type'));

        $transaction = new Transaction;
        $transaction->transaction_type_id = $request->input('transaction_type');
        $transaction->amount = $request->input('amount');
        $transaction->balance = $request->input('amount');
        $transaction->monthly_interest = $transactionType->monthly_interest;
        $transaction->account_id = $request->input('client');
        $transaction->created_by = Auth::id();
        $transaction->transaction_status_id = 1;
        $transaction->save();

        return redirect('cashier/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Get saved transaction information
        $transaction = Transaction::find($id);

        if ( $transaction ) {
                $data['transaction_id'] = $transaction->id;
                $data['amount'] = $transaction->amount;
                $data['client'] = $transaction->account_id;
                $data['transaction_type_id'] = $transaction->transaction_type_id;
                $data['transaction_type_name'] = $transaction->transaction_type->name;
                $data['transaction_type_mi'] = $transaction->transaction_type->monthly_interest;
        } else {
            die('Transaction does\'t exist.');
        }

        $data['transaction_types'] = TransactionType::all();
        $data['clients'] = Account::where('account_type_id', 2)->get();
        return view('base.transactions.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Get transaction type monthly interest
        $transactionType = TransactionType::find($request->input('transaction_type'));

        $transaction = Transaction::find($id);
        $transaction->transaction_type_id = $request->input('transaction_type');
        $transaction->amount = $request->input('amount');
        $transaction->monthly_interest = $transactionType->monthly_interest;
        $transaction->account_id = $request->input('client');
        $transaction->created_by = Auth::id();
        $transaction->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
