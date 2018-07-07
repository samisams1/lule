<?php

namespace App\Http\Controllers;

use App\Model\InputDetail;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class InputDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return   $InputDetail = InputDetail::with('InputSubList')->get();
      //   //   //  return    $InputDetail = InputDetail::select('input_details.*')
       //    ->join('input_sub_lists','input_sub_lists.id','=','input_details.sub_input_list_id')->where('sub_input_list_id','=','11')->get();


        
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
     * @param  \App\Model\InputDetail  $inputDetail
     * @return \Illuminate\Http\Response
     */
    public function show(InputDetail $inputDetail)
    {
        //
    }
      public function show_input()
    {
        return "samisams";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\InputDetail  $inputDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(InputDetail $inputDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\InputDetail  $inputDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InputDetail $inputDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\InputDetail  $inputDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(InputDetail $inputDetail)
    {
        //
    }
}
