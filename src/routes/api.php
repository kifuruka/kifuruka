<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// 設定情報をWEBで確認できる
// phpinfo();exit;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix'=>'v1'],function(){
    Route::get('/school', 'SchoolController@index');
});
// ユーザー認証・登録

// Route::patch("/events/{EVENT_ID}", "EventController@update");
// Route::delete("/events/{EVENT_ID}", "EventController@destroy");

// Route::group(["middleware" => ["jwt.auth"]], function () {
//     Route::post("/auth/logout", "Auth\AuthController@logout");
//     Route::post("/auth/refresh", "Auth\AuthController@refresh");
//     Route::get("/auth/me", "Auth\AuthController@me");
//     Route::get("/auth/me/user", "UserParentController@me");
//     Route::get("/auth/me/user/detail", "UserParentController@getAuthenticatedUser");
//     Route::post("/users", "UserParentController@store");
// });




// 必要なAPI一覧

// 更新 update

// 学校
// ・学校表示GET school
// ・活動表示GET activity
// ・寄付を表示GET donation

// マイページ関係
// ・お気に入り登録 POST RegisterRecomend
// ・お気に入り一覧 GET Recomend
// ・自分の母校の登録 POST AlumaSchoolRegister
// ・自分の母校の一覧 GET MyAlumaSchoolsList
// ・自分の卒業した活動 POST AlumaActivityRegister
// ・自分の卒業した活動の一覧 GET AlumaActivityList




