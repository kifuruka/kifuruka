<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use App\Http\Resources\Activity as Resource;
// use App\Http\Resources\Activity as Resource;


class ActivityController extends Controller
{

// |--------------------------------------------------------------------------
// | 全データの取得
// |--------------------------------------------------------------------------

    public function index()
    {
        $activity = Resource::collection(Activity::all());
        return $activity;
    }

    //createを削除


// |--------------------------------------------------------------------------
// | データの作成
// |--------------------------------------------------------------------------

    public function store(Request $request)
    {
        $activitiy = new Activity();
        $activitiy -> fill($request -> json() -> all());
        $activitiy -> save();
        return new Resoucre($activitiy);

    }


// |--------------------------------------------------------------------------
// | 詳細データの取得
// |--------------------------------------------------------------------------


    // public function show($id)
    public function show(Activity $activity)
    {
        // return Activity::find($id);
        return new Resource($activity);
    }

    //editを削除

// |--------------------------------------------------------------------------
// | 検索機能
// |--------------------------------------------------------------------------

    // public function like(Like $like)
    // {
    //     return new Resource($like);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        //
    }
}
