<?php

namespace App\Http\Controllers;

use App\Model\SubActivityProgress;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class SubActivityProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return SubActivityProgress::All();
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
     * @param  \App\Model\SubActivityProgress  $subActivityProgress
     * @return \Illuminate\Http\Response
     */
    public function show(SubActivityProgress $subActivityProgress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\SubActivityProgress  $subActivityProgress
     * @return \Illuminate\Http\Response
     */
    public function edit(SubActivityProgress $subActivityProgress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\SubActivityProgress  $subActivityProgress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubActivityProgress $subActivityProgress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\SubActivityProgress  $subActivityProgress
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubActivityProgress $subActivityProgress)
    {
        //
    }
}
