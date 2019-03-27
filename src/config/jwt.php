<?php

/*
 * This file is part of jwt-auth./これはjwt-authのファイルです。
 *
 * (c) Sean Tymon <tymon148@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * /ライセンス情報について、ソースコードとともに配布されたファイル
 */

return [

    /*
    |--------------------------------------------------------------------------
    | JWT Authentication Secret  /  JWT認証シークレット
    |--------------------------------------------------------------------------
    |
    | Don't forget to set this in your .env file, as it will be used to sign
    | your tokens. A helper command is provided for this:
    | `php artisan jwt:secret`
    |  トークンに署名するために使用されるので、これを.envファイルに設定することを忘れないでください。
    |  このために、ヘルパーコマンドが用意されています。
    |  `php artisan jwt:secret`
    |   
    | Note: This will be used for Symmetric algorithms only (HMAC),
    | since RSA and ECDSA use a private/public key combo (See below).
    |  注：これは対称アルゴリズムのみ（HMAC）に使用されます。
    |  RSAとECDSAは秘密鍵と公開鍵のコンボを使用するため（下記参照）。
    */

    'secret' => env('JWT_SECRET'),

    /*
    |--------------------------------------------------------------------------
    | JWT Authentication Keys  /  JWT認証キー
    |--------------------------------------------------------------------------
    |
    | The algorithm you are using, will determine whether your tokens are
    | signed with a random string (defined in `JWT_SECRET`) or using the
    | following public & private keys.
    |
    | Symmetric Algorithms:
    | HS256, HS384 & HS512 will use `JWT_SECRET`.
    |
    | Asymmetric Algorithms:
    | RS256, RS384 & RS512 / ES256, ES384 & ES512 will use the keys below.
    |  
    |  使用しているアルゴリズムによって、トークンが正しいかどうかが決まります。
    |  ランダムな文字列（ `JWT_SECRET`で定義）で署名するか、以下の公開鍵と秘密鍵を使って署名します。
    |  
    |  対称アルゴリズム
    |  HS256、HS384、HS512は `JWT_SECRET`を使います。
    |  非対称アルゴリズム
    |  RS256、RS384およびRS512 / ES256、ES384およびES512は以下のキーを使用します。
    */

    'keys' => [

        /*
        |--------------------------------------------------------------------------
        | Public Key  /  公開鍵
        |--------------------------------------------------------------------------
        |
        | A path or resource to your public key.
        |
        | E.g. 'file://path/to/public/key'
        |
        */

        'public' => env('JWT_PUBLIC_KEY'),

        /*
        |--------------------------------------------------------------------------
        | Private Key  /  秘密鍵
        |--------------------------------------------------------------------------
        |
        | A path or resource to your private key.
        |
        | E.g. 'file://path/to/private/key'
        |
        */

        'private' => env('JWT_PRIVATE_KEY'),

        /*
        |--------------------------------------------------------------------------
        | Passphrase  /  パスフレーズ
        |--------------------------------------------------------------------------
        |
        | The passphrase for your private key. Can be null if none set.
        |  あなたの秘密鍵のパスフレーズ。 何も設定されていない場合はnullにすることができます。
        */

        'passphrase' => env('JWT_PASSPHRASE'),

    ],

    /*
    |--------------------------------------------------------------------------
    | JWT time to live (ttl) /  JWTの有効期間
    |--------------------------------------------------------------------------
    |
    | Specify the length of time (in minutes) that the token will be valid for.
    | Defaults to 1 hour.
    |
    | You can also set this to null, to yield a never expiring token.
    | Some people may want this behaviour for e.g. a mobile app.
    | This is not particularly recommended, so make sure you have appropriate
    | systems in place to revoke the token if necessary.
    | Notice: If you set this to null you should remove 'exp' element from 'required_claims' list.
    | 
    | トークンが有効になる期間を分単位で指定します。
    | デフォルトは1時間です。
    | 期限切れにならないトークンを生成するために、これをnullに設定することもできます。
    | IE.google.モバイルアプリにこの動作が欲しいという人もいます。 
    | これは特に推奨されていません、従って適切な方法を確かめて下さい
    | 必要に応じてトークンを無効にするためのシステムを配置します。
    | 
    | Notice：これをnullに設定した場合、 'required_claims'リストから 'exp'要素を削除する必要があります。
    */

    'ttl' => env('JWT_TTL', 60),

    /*
    |--------------------------------------------------------------------------
    | Refresh time to live / トークンを更新できる期間
    |--------------------------------------------------------------------------
    |
    | Specify the length of time (in minutes) that the token can be refreshed
    | within. I.E. The user can refresh their token within a 2 week window of
    | the original token being created until they must re-authenticate.
    | Defaults to 2 weeks.
    |
    | You can also set this to null, to yield an infinite refresh time.
    | Some may want this instead of never expiring tokens for e.g. a mobile app.
    | This is not particularly recommended, so make sure you have appropriate
    | systems in place to revoke the token if necessary.
    |
    | トークンを更新できる期間を分単位で指定します。 I.E. ユーザーは、2週間以内にトークンを更新できます。
    | 再認証が必要になるまで、元のトークンが作成されます。
    | デフォルトは2週間です。
    | これをnullに設定して、無限のリフレッシュ時間を得ることもできます。
    | IE.google.モバイルアプリにこの動作が欲しいという人もいます。 
    | これは特に推奨されていません、従って適切な方法を確かめて下さい
    | 必要に応じてトークンを無効にするためのシステムを配置します。
    */

    'refresh_ttl' => env('JWT_REFRESH_TTL', 20160),

    /*
    |--------------------------------------------------------------------------
    | JWT hashing algorithm  /  ハッシュのアルゴリズム
    |--------------------------------------------------------------------------
    |
    | Specify the hashing algorithm that will be used to sign the token.
    |
    | See here: https://github.com/namshi/jose/tree/master/src/Namshi/JOSE/Signer/OpenSSL
    | for possible values.
    |
    */

    'algo' => env('JWT_ALGO', 'HS256'),

    /*
    |--------------------------------------------------------------------------
    | Required Claims / 必須要求
    |--------------------------------------------------------------------------
    |
    | Specify the required claims that must exist in any token.
    | A TokenInvalidException will be thrown if any of these claims are not
    | present in the payload.
    | 任意のトークンに存在しなければならない必須の要求を指定してください。
    | そうでない場合はTokenInvalidExceptionがスローされます。
    | ペイロードに存在します。
    */

    'required_claims' => [
        'iss',
        'iat',
        'exp',
        'nbf',
        'sub',
        'jti',
    ],

    /*
    |--------------------------------------------------------------------------
    | Persistent Claims  / 永続要求
    |--------------------------------------------------------------------------
    |
    | Specify the claim keys to be persisted when refreshing a token.
    | `sub` and `iat` will automatically be persisted, in
    | addition to the these claims.
    |
    | Note: If a claim does not exist then it will be ignored.
    |
    */

    'persistent_claims' => [
        // 'foo',
        // 'bar',
    ],

    /*
    |--------------------------------------------------------------------------
    | Lock Subject / 件名をロック(複数認証)
    |--------------------------------------------------------------------------
    |
    | This will determine whether a `prv` claim is automatically added to
    | the token. The purpose of this is to ensure that if you have multiple
    | authentication models e.g. `App\User` & `App\OtherPerson`, then we
    | should prevent one authentication request from impersonating another,
    | if 2 tokens happen to have the same id across the 2 different models.
    |
    | Under specific circumstances, you may want to disable this behaviour
    | e.g. if you only have one authentication model, then you would save
    | a little on token size.
    | これは `prv`クレームが自動的にトークンに追加されるかどうかを決定します。
    | これの目的は、あなたが複数の認証モデルを持っている場合に確実にすることです。
    | 2つのトークンが2つの異なるモデルにまたがって同じIDを持っている場合、 `App \ User`と`
    | App \ OtherPerson`を使用して、1つの認証要求で別の認証要求が偽装されるのを防ぐ必要があります。
    | 特定の状況下では、この動作を無効にすることをお勧めします。 
    | 認証モデルが1つしかない場合は、トークンサイズを少し節約できます。

    */

    'lock_subject' => true,

    /*
    |--------------------------------------------------------------------------
    | Leeway / ゆとりを持たせる
    |--------------------------------------------------------------------------
    |
    | This property gives the jwt timestamp claims some "leeway".
    | Meaning that if you have any unavoidable slight clock skew on
    | any of your servers then this will afford you some level of cushioning.
    |
    | This applies to the claims `iat`, `nbf` and `exp`.
    |
    | Specify in seconds - only if you know you need it.
    | このプロパティは、jwtタイムスタンプに「ゆとりを持たせることを」を要求します。
    | あなたのサーバーのいずれかに避けられないわずかなクロックスキューがある場合、これはあなたに
    | ある程度のクッションを与えるでしょう。
    | これはClaims「iat」、「nbf」および「exp」に適用されます。
    | 数秒で指定してください（あなたがそれを必要としていることがわかっている場合にのみ）
    */

    'leeway' => env('JWT_LEEWAY', 0),

    /*
    |--------------------------------------------------------------------------
    | Blacklist Enabled  /  ブラックリスト設定
    |--------------------------------------------------------------------------
    |
    | In order to invalidate tokens, you must have the blacklist enabled.
    | If you do not want or need this functionality, then set this to false.
    | 
    | トークンを無効にするには、ブラックリストを有効にする必要があります。
    | この機能が欲しくないか必要ない場合は、これをfalseに設定してください。
    */

    'blacklist_enabled' => env('JWT_BLACKLIST_ENABLED', true),

    /*
    | -------------------------------------------------------------------------
    | Blacklist Grace Period / ブラックリストの猶予期間
    | -------------------------------------------------------------------------
    |
    | When multiple concurrent requests are made with the same JWT,
    | it is possible that some of them fail, due to token regeneration
    | on every request.
    |
    | Set grace period in seconds to prevent parallel request failure.
    |
    | 同じJWTを使用して複数の同時要求が行われると、すべての要求でトークンが再生成されるために、
    | 一部の要求が失敗する可能性があります。
    | 並列要求の失敗を防ぐために猶予期間を秒単位で設定します。
    */

    'blacklist_grace_period' => env('JWT_BLACKLIST_GRACE_PERIOD', 0),

    /*
    |--------------------------------------------------------------------------
    | Cookies encryption
    |--------------------------------------------------------------------------
    |
    | By default Laravel encrypt cookies for security reason.
    | If you decide to not decrypt cookies, you will have to configure Laravel
    | to not encrypt your cookie token by adding its name into the $except
    | array available in the middleware "EncryptCookies" provided by Laravel.
    | see https://laravel.com/docs/master/responses#cookies-and-encryption
    | for details.
    |
    | Set it to true if you want to decrypt cookies.
    |
    */

    'decrypt_cookies' => false,

    /*
    |--------------------------------------------------------------------------
    | Providers / クッキーの暗号化
    |--------------------------------------------------------------------------
    |
    | Specify the various providers used throughout the package.
    | パッケージ全体で使用されるさまざまなプロバイダを指定します。
    */

    'providers' => [

        /*
        |--------------------------------------------------------------------------
        | JWT Provider
        |--------------------------------------------------------------------------
        |
        | Specify the provider that is used to create and decode the tokens.
        | トークンの作成とデコードに使用されるプロバイダーを指定
        */

        'jwt' => Tymon\JWTAuth\Providers\JWT\Lcobucci::class,

        /*
        |--------------------------------------------------------------------------
        | Authentication Provider
        |--------------------------------------------------------------------------
        |
        | Specify the provider that is used to authenticate users.
        | ユーザーの認証に使用されるプロバイダーを指定
        */

        'auth' => Tymon\JWTAuth\Providers\Auth\Illuminate::class,

        /*
        |--------------------------------------------------------------------------
        | Storage Provider
        |--------------------------------------------------------------------------
        |
        | Specify the provider that is used to store tokens in the blacklist.
        | ブラックリストにトークンを格納するために使用されるプロバイダを指定
        */

        'storage' => Tymon\JWTAuth\Providers\Storage\Illuminate::class,

    ],

];
