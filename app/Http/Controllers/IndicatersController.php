<?php

namespace App\Http\Controllers;
use App\Http\Requests\IndicatersRequest;
use App\Model\Indicaters;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class IndicatersController extends Controller
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
             $indicaters = new Indicaters;
        $indicaters->name =  $request->name;
        $indicaters->project_id =  $request->project_id;
        $indicaters->description =  $request->description;
        $indicaters->save();
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
     * @param  \App\Model\Indicaters  $indicaters
     * @return \Illuminate\Http\Response
     */
    public function show(Indicaters $indicaters)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Indicaters  $indicaters
     * @return \Illuminate\Http\Response
     */
    public function edit(Indicaters $indicaters)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Indicaters  $indicaters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Indicaters $indicaters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Indicaters  $indicaters
     * @return \Illuminate\Http\Response
     */
    public function destroy(Indicaters $indicaters)
    {
        //
    }
}
