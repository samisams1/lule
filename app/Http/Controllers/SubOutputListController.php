<?php

namespace App\Http\Controllers;
use App\Http\Requests\SubOutputListRequest;
use App\Model\SubOutputList;
use Illuminate\Http\Request;

use App\Http\Resources\Output\SubOutputListCollection;
use App\Http\Resources\Output\SubOutputListResource;
use Symfony\Component\HttpFoundation\Response;
class SubOutputListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return  $rubOutputList = SubOutputList::with('SuboutComeList')->get();
         //return   SubOutputListCollection::collection(SubOutputList::with('OutputList')->get());
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
          $subOutputList = new SubOutputList;
        $subOutputList->name =  $request->name;
        $subOutputList->year =  $request->year;
        $subOutputList->subout_come_list_id =  $request->subout_come_list_id;
        $subOutputList->output_list_id =  $request->output_list_id;
        $subOutputList->description =  $request->description;
        $subOutputList->created_by =  "samisams";
        $subOutputList->updated_by =  " ";
        $subOutputList->save();
         return  response([
            'data'=>new SubOutputListResource($subOutputList)
            ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\SubOutputList  $subOutputList
     * @return \Illuminate\Http\Response
     */
    public function show(SubOutputList $subOutputList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\SubOutputList  $subOutputList
     * @return \Illuminate\Http\Response
     */
    public function edit(SubOutputList $subOutputList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\SubOutputList  $subOutputList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubOutputList $subOutputList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\SubOutputList  $subOutputList
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubOutputList $subOutputList)
    {
        //
    }
}
