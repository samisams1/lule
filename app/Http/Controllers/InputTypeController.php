<?php

namespace App\Http\Controllers;
use App\Model\ActivityCategory;
use App\Model\InputType;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class InputTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return InputType::All();
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
     * @param  \App\Model\InputType  $inputType
     * @return \Illuminate\Http\Response
     */
    public function show(InputType $inputType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\InputType  $inputType
     * @return \Illuminate\Http\Response
     */
    public function edit(InputType $inputType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\InputType  $inputType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InputType $inputType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\InputType  $inputType
     * @return \Illuminate\Http\Response
     */
    public function destroy(InputType $inputType)
    {
        //
    }
}
