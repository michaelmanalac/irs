<?php

namespace App\Http\Controllers\Base;

use App\Payment;
use App\PaymentMethod;
use App\PaymentType;
use App\Transaction;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Routing\Controller;
use Auth;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['payment_methods'] = PaymentMethod::all();
        $data['payment_types'] = PaymentType::all();
        return view('base.payments.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $tid
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $tid)
    {
        // Get account id from transaction
        $transaction = Transaction::find($tid);

        $payment = new Payment;
        $payment->amount = $request->input('amount');
        $payment->account_id = $transaction->account_id;
        $payment->payment_type_id = $request->input('payment_type');
        $payment->payment_method_id = $request->input('payment_method');
        $payment->transaction_id = $tid;
        $payment->created_by = Auth::id();
        $payment->save();

        $transaction->balance = $transaction->balance - $request->input('amount');
        if ( $transaction->balance == 0 ) {
            $transaction->transaction_status_id = 2;
        }
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
     * @param  int  $tid
     * @param  int  $pid
     * @return \Illuminate\Http\Response
     */
    public function edit($tid, $pid)
    {
        $payment = Payment::find($pid);

        if ( $payment ) {
            $data['payment_id'] = $payment->id;
            $data['transaction_id'] = $payment->transaction_id;
            $data['amount'] = $payment->amount;
            $data['payment_method_id'] = $payment->payment_method->id;
            $data['payment_method_name'] = $payment->payment_method->name;
            $data['payment_type_id'] = $payment->payment_type->id;
            $data['payment_type_name'] = $payment->payment_type->name;
        } else {
            die('Payment doesn\'t exist.');
        }

        $data['payment_methods'] = PaymentMethod::all();
        $data['payment_types'] = PaymentType::all();
        return view('base.payments.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tid, $pid)
    {
        // Get account id from transaction
        $transaction = Transaction::find($tid);


        $payment = Payment::find($pid);
        $pastAmount = $payment->amount;
        $payment->amount = $request->input('amount');
        $payment->account_id = $transaction->account_id;
        $payment->payment_type_id = $request->input('payment_type');
        $payment->payment_method_id = $request->input('payment_method');
        $payment->transaction_id = $tid;
        $payment->created_by = Auth::id();
        $payment->save();

        $paymentDifference = $pastAmount - $request->input('amount');

        if ( $paymentDifference < 0 ) {
            $transaction->balance = $transaction->balance - abs($paymentDifference);
        } else {
            $transaction->balance = $transaction->balance + $paymentDifference;
        }

        if ( $transaction->balance == 0 ) {
            $transaction->transaction_status_id = 2;
        } else {
            $transaction->transaction_status_id = 1;
        }
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
