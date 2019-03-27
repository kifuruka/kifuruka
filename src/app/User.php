<?php


namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $fillable = [
        'account_name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     * JWTのサブジェクトクレームに格納される識別子を取得します。
     * @return mixed
     */

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     * JWTに追加するカスタムクレームを含むキー値配列を返します。
     * @return array
     */
    
    public function getJWTCustomClaims()
    {
        return [];
    }

}
