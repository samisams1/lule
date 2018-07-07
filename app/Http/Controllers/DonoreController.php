<?php

namespace App\Http\Controllers;

use App\Model\Donore;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class DonoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return  $activityCategory = Donore::all();
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
     * @param  \App\Model\Donore  $donore
     * @return \Illuminate\Http\Response
     */
    public function show(Donore $donore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Donore  $donore
     * @return \Illuminate\Http\Response
     */
    public function edit(Donore $donore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Donore  $donore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donore $donore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Donore  $donore
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donore $donore)
    {
        //
    }
}
