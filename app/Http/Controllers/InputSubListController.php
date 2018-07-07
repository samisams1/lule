<?php

namespace App\Http\Controllers;

use App\Model\InputSubList;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class InputSubListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return  $inputSubList = InputSubList::with('InputList.InputType')->get();
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
     * @param  \App\Model\InputSubList  $inputSubList
     * @return \Illuminate\Http\Response
     */
    public function show(InputSubList $inputSubList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\InputSubList  $inputSubList
     * @return \Illuminate\Http\Response
     */
    public function edit(InputSubList $inputSubList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\InputSubList  $inputSubList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InputSubList $inputSubList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\InputSubList  $inputSubList
     * @return \Illuminate\Http\Response
     */
    public function destroy(InputSubList $inputSubList)
    {
        //
    }
}
