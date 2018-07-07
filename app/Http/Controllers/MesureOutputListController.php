<?php

namespace App\Http\Controllers;
use App\Http\Requests\ActivityRequest;
use App\Model\MesureOutputList;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class MesureOutputListController extends Controller
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
     * @param  \App\Model\MesureOutputList  $mesureOutputList
     * @return \Illuminate\Http\Response
     */
    public function show(MesureOutputList $mesureOutputList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\MesureOutputList  $mesureOutputList
     * @return \Illuminate\Http\Response
     */
    public function edit(MesureOutputList $mesureOutputList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\MesureOutputList  $mesureOutputList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MesureOutputList $mesureOutputList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\MesureOutputList  $mesureOutputList
     * @return \Illuminate\Http\Response
     */
    public function destroy(MesureOutputList $mesureOutputList)
    {
        //
    }
}
