<?php

namespace App\Http\Controllers;

use App\Model\ProjectImplimenter;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class ProjectImplimenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  $projectImplimenter = ProjectImplimenter::with('Project','ImplimentPartiners')->get();
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
     * @param  \App\Model\ProjectImplimenter  $projectImplimenter
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectImplimenter $projectImplimenter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ProjectImplimenter  $projectImplimenter
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectImplimenter $projectImplimenter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ProjectImplimenter  $projectImplimenter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectImplimenter $projectImplimenter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ProjectImplimenter  $projectImplimenter
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectImplimenter $projectImplimenter)
    {
        //
    }
}
