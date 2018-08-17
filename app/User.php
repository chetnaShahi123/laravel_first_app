<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Phone;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userProfiles(Type $var = null)
    {
        # code...
    }

    // protected $dateFormat = 'U';

    public function phone() {
        // return $this->hasOne('App\Models\Phone');
        return $this->hasOne(Phone::class);
    }
}
