<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;
use App\Http\Resources\School as Resource;
// use DB;

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
        $school = Resource::collection(School::all());
        return $school;
    }

    // ---------------------------------------------
    //createを削除
    // ---------------------------------------------

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  データを新しく作るための関数
    public function store(Request $request)
    {
        $school = new School();
        // $fillableから渡されたデータをすべてfillに入れる
        // $school ->$request->json()->all();
        $school ->fill($request->json()->all());
        $school -> save();
        return new Resource($school);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */

    // 詳細表示
    public function show($id)
    {
        
        // return School::find($id);
        return new Resource(School::find($id));
 
    }


    // ---------------------------------------------
    //editを削除
    // ---------------------------------------------


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

    
    public function search(Request $request)
    {
        $item = School::where('school_name',$request->input)->get();
        // $item = Activity::where('activity_name',$request->input)->get();
        $param =['input'=>$request->input,'item'=>$item];
        return $param;
    }
}
