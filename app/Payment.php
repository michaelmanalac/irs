<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function payment_method() {
        return $this->belongsTo('App\PaymentMethod', 'payment_type_id');
    }

    public function payment_type() {
        return $this->belongsTo('App\PaymentType', 'payment_type_id');
    }

    public function transaction() {
        return $this->belongsTo('App\Transaction', 'transaction_id');
    }

}
