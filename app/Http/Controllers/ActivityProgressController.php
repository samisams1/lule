use Symfony\Component\HttpFoundation\Response;<?php

namespace App\Http\Controllers;
use App\Http\Requests\ActivityRequest;
use App\Model\ActivityProgress;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class ActivityProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             $activityCategory = new ActivityCategory;
        $activityCategory->name =  $request->name;
        $activityCategory->project_id =  $request->project_id;
        $activityCategory->description =  $request->description;
        $activityCategory->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\ActivityProgress  $activityProgress
     * @return \Illuminate\Http\Response
     */
    public function show(ActivityProgress $activityProgress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ActivityProgress  $activityProgress
     * @return \Illuminate\Http\Response
     */
    public function edit(ActivityProgress $activityProgress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ActivityProgress  $activityProgress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ActivityProgress $activityProgress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ActivityProgress  $activityProgress
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActivityProgress $activityProgress)
    {
        //
    }
}
