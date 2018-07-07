<?php

namespace App\Http\Controllers;
use App\Http\Requests\MonthRequest;
use App\Model\Month;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class MonthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return  $month = Month::with('Quarter.Year')->get();
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
        $month = new Month;
        $month->name =  $request->name;
        $month->quarter_id =  $request->quarter_id;
        $month->description =  $request->description;
        $month->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Month  $month
     * @return \Illuminate\Http\Response
     */
    public function show(Month $month)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Month  $month
     * @return \Illuminate\Http\Response
     */
    public function edit(Month $month)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Month  $month
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Month $month)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Month  $month
     * @return \Illuminate\Http\Response
     */
    public function destroy(Month $month)
    {
        //
    }
}
