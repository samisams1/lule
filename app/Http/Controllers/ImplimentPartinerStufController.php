<?php

namespace App\Http\Controllers;
use App\Http\Requests\ActivityRequest;
use App\Model\ImplimentPartinerStuf;
use App\Model\ImplimentPartiners;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class ImplimentPartinerStufController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return  $implimentPartinerStuf = ImplimentPartinerStuf::with('ImplimentPartiners')->get();
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
     * @param  \App\Model\ImplimentPartinerStuf  $implimentPartinerStuf
     * @return \Illuminate\Http\Response
     */
    public function show(ImplimentPartinerStuf $implimentPartinerStuf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ImplimentPartinerStuf  $implimentPartinerStuf
     * @return \Illuminate\Http\Response
     */
    public function edit(ImplimentPartinerStuf $implimentPartinerStuf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ImplimentPartinerStuf  $implimentPartinerStuf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImplimentPartinerStuf $implimentPartinerStuf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ImplimentPartinerStuf  $implimentPartinerStuf
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImplimentPartinerStuf $implimentPartinerStuf)
    {
        //
    }
}
