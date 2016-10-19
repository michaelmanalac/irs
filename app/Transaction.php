<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function transaction_type() {
        return $this->belongsTo('App\TransactionType');
    }

    public function payments() {
        return $this->hasMany('App\Payment', 'transaction_id');
    }

    public function monthly_increases() {
        return $this->hasMany('App\MonthlyIncrease', 'transaction_id');
    }
}
