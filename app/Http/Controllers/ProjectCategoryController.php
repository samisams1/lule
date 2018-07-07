<?php
namespace App\Http\Controllers;
use App\Http\Resources\ProjectCategory\ProjectCategoryCollection;
use App\Http\Resources\ProjectCategory\ProjectCategoryResource;

use App\Http\Requests\ProjectCategoryRequest;
use App\Model\ProjectCategory;
use App\Model\Programmes;
use App\Model\Project;
use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;

class ProjectCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
     return  $projectCategory = ProjectCategory::with('Programmes.programCategory')->get();
       //  return   ProjectCategoryCollection::collection(ProjectCategory::with('Programmes.ProgramCategory')->get());
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response>
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
        $projectCategory = new ProjectCategory;
        $projectCategory->name =  $request->name;

        $projectCategory->programmes_id =  $request->programmes_id;
        $projectCategory->description =  $request->description;
         $projectCategory->created_by =  "samisams";
         $projectCategory->updated_by =  " ";

        $projectCategory->save();
         return response([
            'data' => new ProjectCategoryResource($projectCategory)
            ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectCategory $projectCategory)
    {
         return new  ProjectCategoryResource($projectCategory);
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectCategory $projectCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectCategory $projectCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectCategory $projectCategory)
    {
        //
    }
}
