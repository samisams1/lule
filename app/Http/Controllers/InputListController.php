<?php

namespace App\Http\Controllers;

use App\Model\InputList;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class InputListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       return  $inputList = InputList::with('InputType')->get();
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
     * @param  \App\Model\InputList  $inputList
     * @return \Illuminate\Http\Response
     */
    public function show(InputList $inputList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\InputList  $inputList
     * @return \Illuminate\Http\Response
     */
    public function edit(InputList $inputList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\InputList  $inputList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InputList $inputList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\InputList  $inputList
     * @return \Illuminate\Http\Response
     */
    public function destroy(InputList $inputList)
    {
        //
    }
}
