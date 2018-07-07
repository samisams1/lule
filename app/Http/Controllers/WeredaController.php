<?php

namespace App\Http\Controllers;
use App\Http\Requests\WeredaRequest;
use App\Model\Wereda;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class WeredaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return  $wereda = Wereda::with('Zone.Region.Cluster')->get();
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
        $wereda = new Wereda;
        $wereda->name =  $request->name;
        $wereda->zone_id =  $request->zone_id;
        $wereda->description =  $request->description;
        $wereda->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Wereda  $wereda
     * @return \Illuminate\Http\Response
     */
    public function show(Wereda $wereda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Wereda  $wereda
     * @return \Illuminate\Http\Response
     */
    public function edit(Wereda $wereda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Wereda  $wereda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wereda $wereda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Wereda  $wereda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wereda $wereda)
    {
        //
    }
}
