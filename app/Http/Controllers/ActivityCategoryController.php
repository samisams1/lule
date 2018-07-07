<?php

namespace App\Http\Controllers;
use App\Http\Requests\ActivityRequest;
use App\Model\ActivityCategory;
use App\Model\Project;
use App\Http\Resources\Activity\ActivityCategoryResource;
use App\Http\Resources\Activity\ActivityCategoryCollection;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class ActivityCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
      return  $activityCategory = ActivityCategory::all();
   // return  $activityCategory = ActivityCategory::with('Project.ProjectCategory.Programmes.ProgramCategory')->get();
   //  return   ActivityCategoryCollection::collection(ActivityCategory::with('Project')->get());
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
        $activityCategory = new ActivityCategory;
        $activityCategory->name =  $request->name;
        $activityCategory->description =  $request->description;
         $activityCategory->created_by =  "samisams";
        $activityCategory->updated_by =  " ";
        $activityCategory->save();
          return  response([
            'data'=>new ActivityCategoryResource($activityCategory)
            ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\ActivityCategory  $activityCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ActivityCategory $activityCategory)
    {
        return $activityCategory;
       
 return new ActivityCategoryResource($activityCategory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ActivityCategory  $activityCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ActivityCategory $activityCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ActivityCategory  $activityCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ActivityCategory $activityCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ActivityCategory  $activityCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActivityCategory $activityCategory)
    {
        //
    }
}
