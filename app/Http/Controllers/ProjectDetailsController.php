<?php

namespace App\Http\Controllers;
use App\Http\Requests\ActivityRequest;
use App\Model\ProjectDetails;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class ProjectDetailsController extends Controller
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
     * @param  \App\Model\ProjectDetails  $projectDetails
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectDetails $projectDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ProjectDetails  $projectDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectDetails $projectDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ProjectDetails  $projectDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectDetails $projectDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ProjectDetails  $projectDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectDetails $projectDetails)
    {
        //
    }
}
