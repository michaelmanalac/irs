<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function account() {
        return $this->hasOne('App\Account', 'account_id');
    }
}
