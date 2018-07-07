<?php

namespace App\Http\Controllers;

use App\Model\ProjectStuf;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class ProjectStufController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return  $region = ProjectStuf::with('ImplimentPartiners')->get();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\ProjectStuf  $projectStuf
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectStuf $projectStuf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ProjectStuf  $projectStuf
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectStuf $projectStuf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ProjectStuf  $projectStuf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectStuf $projectStuf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ProjectStuf  $projectStuf
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectStuf $projectStuf)
    {
        //
    }
}
