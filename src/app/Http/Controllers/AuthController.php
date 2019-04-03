<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Auth;

use App\Http\Resources\User as Resource;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\UserDetail as UserDetail;

// vendor/laravel/framework/src/Illuminateにある

class AuthController extends Controller
{

// |--------------------------------------------------------------------------
// | 新規登録
// |--------------------------------------------------------------------------
    
    public function register(Request $request){

        $validator = Validator::make($request->all(), [
            'account_name'          => 'required|string|max:100',
            'email'                 => 'required|email|max:255|unique:users',
            'password'              => 'required|string|min:8|max:255|confirmed',
            'password_confirmation' => 'required|string|min:8|max:255',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status'   => 'error',
                'messages' => $validator->messages()
            ], 200);
        }

        $user = new User;
        $user->account_name = $request->account_name;
        $user->email        = $request->email;
        // TODO:fillがうまくいかない
        // $user = fill($request->all());
        $user->password = bcrypt($request->password);
        $user->save();

        return response()->json(['status' => 'success','data' => $user], 200);

        // return $user;
            // bcrypt(ビークリプト)とは？
            // もともと入れたパスワードをハッシュ化しているが、単純にハッシュかするだけではすぐに解読されてしまう。
            // そのため、毎回違う文字列を追加してハッシュを繰り返してあげれば問題なよね？ということで、それを行う便利関数のこと。
    }

// |--------------------------------------------------------------------------
// | ログイン
// |--------------------------------------------------------------------------

    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8|max:255',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'messages' => $validator->messages()
            ], 200);
        }
        
        if (!$token = Auth::guard('api')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // return $user = new Resource($user);
        $user = User::with('userdetail')->get()->where('email',$request->email)->first();
        return $this->respondWithToken($token,$user);     
    }

    protected function respondWithToken($token,$user){   
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::guard('api')->factory()->getTTL() * 60,
            'user' => $user
        ]);
    }

//     $user =User::where('email',$request->email)->first();    
//     return response()->json([
//         'user' => $user, 
//         'token' => $this->respondWithToken($token)->original
//     ]);     
// }


// |--------------------------------------------------------------------------
// | ユーザー情報の取得
// |--------------------------------------------------------------------------

    // public function user(){
    //     return response()->json(Auth::guard('api')->user());
    // }

    public function me()
    {
        return response()->json(auth()->user());
    }


// |--------------------------------------------------------------------------
// | トークンの更新
// |--------------------------------------------------------------------------

    public function refresh(){
        return $this->respondWithToken(Auth::guard('api')->refresh());
    }

// |--------------------------------------------------------------------------
// | ログアウト
// |--------------------------------------------------------------------------

    public function logout(){
        Auth::guard('api')->logout();
        return response()->json([
            'status' => 'success',
            'message' => 'ログアウトしました。'
        ], 200);
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