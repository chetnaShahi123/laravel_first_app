<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Phone extends Model
{
    //
    public function user() {
       // return $this->belongsTo('App\User');
       return $this->belongsTo(User::class);
    }
}
