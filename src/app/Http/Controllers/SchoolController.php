<?php

namespace App\Http\Controllers;


use App\Models\School;
// use App\School as hoge; <=とすると、Schoolをhogeで使うことができる。
use Illuminate\Http\Request;
use DB;
class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  index リスト取得のための関数
    public function index()
    {
    // DB::enableQueryLog();
     $school =  School::all();
    //  dd(DB::getQueryLog());
        return $school;
    }



    //createを削除



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  データを新しく作るための関数
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */

    // 詳細表示
    public function show(School $school)
    {
        return 'hello World';
    }



    //editを削除
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */

    //  更新

    public function update(Request $request, School $school)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */

    //  削除
    public function destroy(School $school)
    {
        //
    }

    // テスト様
    // public function test(School $school)
    // {
    //     return response()->json(compact('user'));
    // }
}
