<?php

namespace App\Http\Controllers;
// 名前空間でファイルの位置を特定している

use App\User;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// vendor/laravel/framework/src/Illuminateにある
use App\Http\Controllers\Controller;

class AuthController extends Controller
{

    public function register(Request $request){

        $user = new User;
        // $user->account_name = 'aaa';
        $user->account_name = $request->account_name;
        $user->email     = $request->email;
        $user->password  = bcrypt($request->password);
        $user->save();

        return $user;
            // bcrypt(ビークリプト)とは？
            // もともと入れたパスワードをハッシュ化しているが、単純にハッシュかするだけではすぐに解読されてしまう。
            // そのため、毎回違う文字列を追加してハッシュを繰り返してあげれば問題なよね？ということで、それを行う便利関数のこと。
    }

    

    public function login(Request $request) {
        $credentials = request(['email', 'password']);
        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => '認証失敗'], 401);
        }
        return $this->respondWithToken($token);
    }

    public function logout()
    {
        auth()->logout();
        return response()->json(['message' => 'ログアウトしました。']);
    }
 
    public function me()
    {
        return response()->json(auth()->user());
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }


    // ここで帰ってきた内容をjsonにしてくれている
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
  


  
}

    // public function login(Request $request){

    //     $credentials = request(['email', 'password']);
    //     if (! $token = auth()->attempt($credentials)) {
    //         return response()->json(['error' => '認証失敗'], 401);
    //     }
    //     return $this->respondWithToken($token);
    // }
    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */



    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */

         /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */

         /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    /**
     * Create a new AuthController instance.
     * 新しいAuthControllerのインスタンスを作成
     * @return void
     */

    // public function __construct()
    // {
    //     $this->middleware('auth:api', ['except' => ['login']]);
    // }