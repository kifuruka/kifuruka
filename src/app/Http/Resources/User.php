<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{

    public function toArray($request)
    {
        return[
            "id"              => $this->id,
            'account_name'    => $this->account_name,
            'email'           => $this->email,
            'password'        => $this->password,

            "UserDetail"     => [
                "id"              => $this->UserDetails->id,
                'user_first_name' => $this->UserDetails->user_first_name,
                'user_last_name'  => $this->UserDetails->user_last_name,
                'user_first_kana' => $this->UserDetails->user_first_kana,
                'user_last_kana'  => $this->UserDetails->user_last_kana,
                'tel'             => $this->UserDetails->tel,
                'sex'             => $this->UserDetails->sex,
                'birthday'        => $this->UserDetails->birthday,
                'user_img'        => $this->UserDetails->user_img,
                'postal_code'     => $this->UserDetails->postal_code,
                'u_state'         => $this->UserDetails->u_state,
                'u_city'          => $this->UserDetails->u_city,
                'u_address1'      => $this->UserDetails->u_address1,
                'u_address2'      => $this->UserDetails->u_address2,
            ]
        ];
    }
}
