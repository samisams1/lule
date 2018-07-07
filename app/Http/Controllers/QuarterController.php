<?php

namespace App\Http\Controllers;
use App\Http\Requests\QuarterRequest;
use App\Model\Quarter;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class QuarterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  $year = Quarter::with('Year')->get();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quarter = new Quarter;
        $quarter->name =  $request->name;
        $quarter->year_id =  $request->year_id;
        $quarter->description =  $request->description;
        $quarter->save();
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
     * @param  \App\Model\Quarter  $quarter
     * @return \Illuminate\Http\Response
     */
    public function show(Quarter $quarter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Quarter  $quarter
     * @return \Illuminate\Http\Response
     */
    public function edit(Quarter $quarter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Quarter  $quarter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quarter $quarter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Quarter  $quarter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quarter $quarter)
    {
        //
    }
}
