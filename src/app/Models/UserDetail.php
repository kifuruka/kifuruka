<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    // protected $table ="userDetails";

    protected $fillable = [
        'user_id',
        'user_first_name',
        'user_last_name',
        'user_first_kana',
        'user_last_kana',
        'tel',
        'sex',
        'birthday',
        'user_img',
        'postal_code',
        'u_state',
        'u_city',
        'u_address1',
        'u_address2',
    ];

    public function user(){
        return $this -> belongsTo('\App\User');
        // return $this -> hasOne('\App\Models\UserDetails');
    }

}
