<?php

namespace App\Http\Controllers;
use App\Http\Resources\Output\OutputListCollection;
use App\Http\Resources\Output\OutputListResource;

use App\Http\Requests\ActivityRequest;
use App\Model\OutputList;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class OutputListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return  $outputList = OutputList::with('OutputCategory')->get();
      //  return   OutputListCollection::collection(OutputList::with('OutputCategory')->get());
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
        $outputList = new OutputList;
        $outputList->name =  $request->name;
        $outputList->outcome_id =  $request->outcome_id;
        $outputList->output_category_id =  $request->output_category_id;
        $outputList->description =  $request->description;
        $outputList->created_by =  "samisams";
        $outputList->updated_by =  " ";
         $outputList->save();
        return  response([
            'data'=>new OutputListResource($outputList)
            ],Response::HTTP_CREATED);
         
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\OutputList  $outputList
     * @return \Illuminate\Http\Response
     */
    public function show(OutputList $outputList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\OutputList  $outputList
     * @return \Illuminate\Http\Response
     */
    public function edit(OutputList $outputList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\OutputList  $outputList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OutputList $outputList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\OutputList  $outputList
     * @return \Illuminate\Http\Response
     */
    public function destroy(OutputList $outputList)
    {
        //
    }
}
