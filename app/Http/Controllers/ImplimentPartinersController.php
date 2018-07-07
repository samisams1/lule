<?php

namespace App\Http\Controllers;
use App\Http\Requests\ImplimentPartinersRequest;
use App\Model\ImplimentPartiners;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class ImplimentPartinersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return ImplimentPartiners::All();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
             $implimentPartiners = new ImplimentPartiners;
        $implimentPartiners->name =  $request->name;
        $implimentPartiners->description =  $request->description;
        $implimentPartiners->save();
    }

    /**
     * Store a newly created resource in storage.
     *s
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
     * @param  \App\Model\ImplimentPartiners  $implimentPartiners
     * @return \Illuminate\Http\Response
     */
    public function show(ImplimentPartiners $implimentPartiners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ImplimentPartiners  $implimentPartiners
     * @return \Illuminate\Http\Response
     */
    public function edit(ImplimentPartiners $implimentPartiners)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ImplimentPartiners  $implimentPartiners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImplimentPartiners $implimentPartiners)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ImplimentPartiners  $implimentPartiners
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImplimentPartiners $implimentPartiners)
    {
        //
    }
}
