<?php

namespace App\Http\Controllers;
use App\Http\Requests\ActivityRequest;
use App\Model\Cluster;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class ClusterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  $cluster = cluster::with('Country')->get();
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
             $cluster = new Cluster;
        $cluster->name =  $request->name;
        $cluster->description =  $request->description;
        $cluster->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Cluster  $cluster
     * @return \Illuminate\Http\Response
     */
    public function show(Cluster $cluster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Cluster  $cluster
     * @return \Illuminate\Http\Response
     */
    public function edit(Cluster $cluster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Cluster  $cluster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cluster $cluster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Cluster  $cluster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cluster $cluster)
    {
        //
    }
}
