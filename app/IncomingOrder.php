<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncomingOrder extends Model
{
    public function customer(){
        return $this->hasOne('App\Customer', 'id' , 'customer_id');
    }
}
