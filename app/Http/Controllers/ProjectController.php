<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProjectsRequest;
use App\Model\Project;
use Illuminate\Http\Request;
use App\Http\Resources\Project\ProjectCollection;
use App\Http\Resources\Project\ProjectResource;
use Symfony\Component\HttpFoundation\Response;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return   ProjectCollection::collection(Project::with('ProjectCategory','Region')->get());
        //return  $projects = Project::with('ProjectCategory.Programmes.programCategory')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $project = new Project;
        $project->name =  "ddd";
         $project->description =  "ddd";
        $project->project_category_id =  $request->project_category_id;
         $project->region_id =  $request->region_id;
        $project->goal =  $request->goal;
        $project->objective_long_term =  $request->objective_long_term;
        $project->specific_objective =  $request->specific_objective;
        $project->total_plan =  $request->total_plan ;
        $project->total_budget =  $request->total_budget ;
        $project->start_date =  "2018-07-02";
        $project->end_date =  $request->end_date;
        $project->status =  "active";
        $project->created_by =  "samisams";
        $project->updated_by =  " ";
        $project->save();
          return  response([
            'data'=>new ProjectResource($project)
            ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
