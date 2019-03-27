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

Route::group(['prefix'=>'v1'],function(){

    Route::post('auth/register','AuthController@register');
    Route::post('auth/login','AuthController@login');
    Route::post('auth/refresh','AuthController@refresh');
    Route::get('/school', 'SchoolController@index');
    Route::get('/school/{id}', 'SchoolController@show');
    Route::get('/search', 'SchoolController@search');

    Route::group(['middleware' =>'auth'],function(){

        Route::post('auth/logout','AuthController@logout');
        Route::post('auth/me','AuthController@me');
        // Route::get('auth/test','AuthController@me');

    });

});







// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::group(["prefix" => "v1", "middleware" => "api"], function () {
//     // Route::post("/auth/register", "Auth\RegisterController@register");
//     Route::post("/auth/register", "Auth\RegisterController@create");
//     // Route::post("/auth/login", "Auth\LoginController@login");
//     Route::post("/auth/login", "AuthController@login");
//     Route::post("/password/email", "Auth\ForgotPasswordController@sendResetLinkEmail");
//     Route::post("/password/reset/{token}", "Auth\ResetPasswordController@reset");
//     Route::get("/email/verify/{ID}", "Auth\VerificationController@verify")->name("verification.verify");
//     Route::post("/email/resend", "Auth\VerificationController@resend")->name("verification.resend");
//     Route::get("/test", "UserParentController@index");
//     Route::post("/book", "BookController@store");
//     Route::get("/events", "EventController@index");
//     Route::post("/events", "EventController@store");
//     Route::get("/events/{EVENT_ID}", "EventController@show");
//     Route::patch("/events/{EVENT_ID}", "EventController@update");
//     Route::delete("/events/{EVENT_ID}", "EventController@destroy");
//     Route::get("/events/search/top", "SearchController@searchTop");
//     Route::get("/events/search/eventList", "SearchController@searchEventList");
//     Route::get("/events/search/eventDetail", "SearchController@searchEventDetail");
//     Route::group(["middleware" => ["jwt.auth"]], function () {
//         Route::post("/auth/logout", "Auth\AuthController@logout");
//         Route::post("/auth/refresh", "Auth\AuthController@refresh");
//         Route::get("/auth/me", "UserParentController@me");
//     });
// });

// // Route::group([

// //     'middleware' => 'api',
// //     'prefix' => 'auth'
// // ], function ($router) {
// //     Route::post('login', 'AuthController@login');
// //     Route::post('logout', "AuthController@logout");
// //     Route::post('refresh', 'AuthController@refresh');
// //     Route::post("me", "AuthController@me"); 
// // });

// // Route::group(['prefix'=>'v1'],function(){
 
// //     Route::post('/auth/register', 'AuthController@register');


// //     Route::get('/school/{id}', 'SchoolController@show');
// //     Route::post('/store','SchoolController@store');   
// //     Route::get('works/{work}', 'WorkController@show');
// //     Route::post('works/{work}/entries', 'WorkController@enter');
// //     Route::get('myworks', 'MyWorkController@index');
// //     Route::post('myworks', 'MyWorkController@store');
// //     Route::get('myworks/{work}', 'MyWorkController@show');
// //     Route::put('myworks/{work}', 'MyWorkController@update')
// //     ->middleware('can:update-mywork,work');
// //     Route::put('myworks/{work}', 'MyWorkController@update')
// //         ->middleware('can:update,work');
    
// // });



// // Route::group(["middleware" => ["jwt.auth"]], function () {
// //     Route::get("/auth/me/user", "UserParentController@me");
// //     Route::get("/auth/me/user/detail", "UserParentController@getAuthenticatedUser");
// //     Route::post("/users", "UserParentController@store");
// // });






