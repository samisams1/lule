<?php

namespace App\Http\Controllers;
use App\Http\Requests\ActivityRequest;
use App\Model\inputBneficiary;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class InputBneficiaryController extends Controller
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
     * @param  \App\Model\inputBneficiary  $inputBneficiary
     * @return \Illuminate\Http\Response
     */
    public function show(inputBneficiary $inputBneficiary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\inputBneficiary  $inputBneficiary
     * @return \Illuminate\Http\Response
     */
    public function edit(inputBneficiary $inputBneficiary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\inputBneficiary  $inputBneficiary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inputBneficiary $inputBneficiary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\inputBneficiary  $inputBneficiary
     * @return \Illuminate\Http\Response
     */
    public function destroy(inputBneficiary $inputBneficiary)
    {
        //
    }
}
