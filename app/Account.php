<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $hidden = ['password', 'remember_token'];

    public function user() {
        return $this->hasOne('App\User', 'account_id');
    }

    public function account_type() {
        return $this->belongsTo('App\AccountType', 'account_type_id');
    }
}
