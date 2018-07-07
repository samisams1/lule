<?php

namespace App\Http\Controllers;
use App\Http\Requests\SubActivityRequest;
use App\Model\SubActivityList;
use Illuminate\Http\Request;
use App\Http\Resources\Activity\SubActivityListResource;
use App\Http\Resources\Activity\SubActivityListCollection;
use Symfony\Component\HttpFoundation\Response;
class SubActivityListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
 
        return   SubActivityListCollection::collection(SubActivityList::with('ActivityList','SubOutputList','Kebele')->get());
      // return  $activityList = SubActivityList::with('SubOutputList')->get();
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
        $subActivityList = new SubActivityList;
        $subActivityList->name =  $request->name;
        $subActivityList->activity_list_id =  $request->activity_list_id;
        $subActivityList->description =  $request->description;
        $subActivityList->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\SubActivityList  $subActivityList
     * @return \Illuminate\Http\Response
     */
    public function show(SubActivityList $subActivityList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\SubActivityList  $subActivityList
     * @return \Illuminate\Http\Response
     */
    public function edit(SubActivityList $subActivityList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\SubActivityList  $subActivityList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubActivityList $subActivityList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\SubActivityList  $subActivityList
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubActivityList $subActivityList)
    {
        //
    }
}
