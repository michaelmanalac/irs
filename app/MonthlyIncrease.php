<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonthlyIncrease extends Model
{
    public function transaction() {
        return $this->hasOne('App\Transaction', 'transaction_id');
    }
}
