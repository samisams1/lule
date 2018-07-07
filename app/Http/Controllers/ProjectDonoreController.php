<?php

namespace App\Http\Controllers;
use App\Http\Requests\ActivityRequest;
use App\Model\ProjectDonore;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class ProjectDonoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return  $projectDonore = ProjectDonore::with('Project','Donore')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
             $activityCategory = new ActivityCategory;
        $activityCategory->name =  $request->name;
        $activityCategory->project_id =  $request->project_id;
        $activityCategory->description =  $request->description;
        $activityCategory->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\ProjectDonore  $projectDonore
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectDonore $projectDonore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ProjectDonore  $projectDonore
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectDonore $projectDonore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ProjectDonore  $projectDonore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectDonore $projectDonore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ProjectDonore  $projectDonore
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectDonore $projectDonore)
    {
        //
    }
}
