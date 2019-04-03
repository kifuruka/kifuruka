<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    // テーブル名の指定
    protected $table = "schools";

    // Activity_tableとの紐付け
    public function activities()
    {
        return $this -> hasMany('\App\Models\Activity');
    }



    // fill()に入れるデータをここで指定している
    protected $fillable = [
        
        'school_name',
        'top_contents',
        'tel',
        'school_img',
        'url',
        'postal_code',
        's_state',
        's_city',
        's_address1',
        's_address2',
        'school_type'
    ];

}
