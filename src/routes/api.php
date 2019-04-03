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

Route::group(['prefix'=>'v1','middleware' => 'api'],function(){
    // Route::group(['middleware' => 'api'], function() { // });
    Route::post('auth/register','AuthController@register')->name('api.jwt.register');
    Route::post('/auth/login','AuthController@login')->name('api.jwt.login');
    Route::get('/school', 'SchoolController@index');
    Route::get('/school/{id}', 'SchoolController@show');
    Route::get('/activity', 'ActivityController@index');
    Route::get('/activity/{activity}', 'ActivityController@show');
    // Route::get('/activity/{index}','ActivityController@like');
    Route::get('unauthorized', function() {
        return response()->json([
            'status' => 'error','message' => 'Unauthorized'
        ], 401);})->name('api.jwt.unauthorized');
        
    Route::group(['middleware' => 'auth:api'], function(){
        Route::get('user', 'AuthController@user')->name('api.jwt.user');
        Route::get('refresh','AuthController@refresh')->name('api.jwt.refresh');
        Route::get('logout','AuthController@logout')->name('api.jwt.logout');
        Route::get('me', 'AuthController@me');
    
    });
    // TODO:未定義ルート
    // Route::get('/search', 'SchoolController@search');
    
});
