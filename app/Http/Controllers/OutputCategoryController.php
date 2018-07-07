use Symfony\Component\HttpFoundation\Response;<?php

namespace App\Http\Controllers;
use App\Http\Resources\Output\OutputCategoryCollection;
use App\Http\Resources\Output\OutputCategoryResource;

use App\Http\Requests\ActivityRequest;
use App\Model\Project;
use App\Model\OutputCategory;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class OutputCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return  $outputCategory = OutputCategory::with('Project.ProjectCategory.Programmes')->get();
        return   OutputCategoryCollection::collection(OutputCategory::all());
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
     * @param  \App\Model\OutputCategory  $outputCategory
     * @return \Illuminate\Http\Response
     */
    public function show(OutputCategory $outputCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\OutputCategory  $outputCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(OutputCategory $outputCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\OutputCategory  $outputCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OutputCategory $outputCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\OutputCategory  $outputCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(OutputCategory $outputCategory)
    {
        //
    }
}
