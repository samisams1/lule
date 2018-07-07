<?php

namespace App\Http\Controllers;
use App\Http\Requests\ActivityListRequest;
use App\Model\ActivityList;
use App\Model\OutputList;
use Illuminate\Http\Request;
use App\Http\Resources\Activity\ActivityListResource;
use App\Http\Resources\Activity\ActivityListCollection;
use Symfony\Component\HttpFoundation\Response;
class ActivityListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //  return   ActivityListCollection::collection(ActivityList::with('OutputList')->get());
        return  $activityList = ActivityList::with('ActivityCategory')->get();
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
        $activityList = new ActivityList;
        $activityList->name =  $request->name;
        $activityList->activity_category_id =  $request->activity_category_id;
        $activityList->description =  $request->description;
        $activityList->created_by =  "samisams";
        $activityList->updated_by =  " ";
        $activityList->save();
          return  response([
            'data'=>new ActivityListResource($activityList)
            ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\ActivityList  $activityList
     * @return \Illuminate\Http\Response
     */
    public function show(ActivityList $activityList)
    {
        return $activityList;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ActivityList  $activityList
     * @return \Illuminate\Http\Response
     */
    public function edit(ActivityList $activityList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ActivityList  $activityList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ActivityList $activityList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ActivityList  $activityList
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActivityList $activityList)
    {
        //
    }
}
