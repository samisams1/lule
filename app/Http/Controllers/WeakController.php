<?php

namespace App\Http\Controllers;
use App\Http\Requests\WeakRequest;
use App\Model\Weak;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class WeakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return  $weak = Weak::with('Month.Quarter.Year')->get();
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
        $weak = new Weak;
        $weak->name =  $request->name;
        $weak->month_id =  $request->month_id;
        $weak->description =  $request->description;
        $weak->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Weak  $weak
     * @return \Illuminate\Http\Response
     */
    public function show(Weak $weak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Weak  $weak
     * @return \Illuminate\Http\Response
     */
    public function edit(Weak $weak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Weak  $weak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Weak $weak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Weak  $weak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Weak $weak)
    {
        //
    }
}
