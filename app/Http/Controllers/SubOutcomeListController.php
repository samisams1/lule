<?php

namespace App\Http\Controllers;
use App\Http\Requests\SubOutcomeListRequest;
use App\Model\SubOutcomeList;
use Illuminate\Http\Request;
use App\Http\Resources\Outcome\SubOutcomeListResource;
use App\Http\Resources\Outcome\SubOutcomeListCollection;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Response;
class SubOutcomeListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // return  $subOutcomeList = SubOutcomeList::with('OutcomeList.OutcomeCategory.Project.ProjectCategory.Programmes.ProgramCategory')->get();
        return   SubOutcomeListCollection::collection(SubOutcomeList::with('OutcomeList.OutcomeCategory')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             $subOutcomeList = new SubOutcomeList;
        $subOutcomeList->name =  $request->name;
        $subOutcomeList->outcome_list_id =  $request->outcome_list_id;
        $subOutcomeList->description =  $request->description;
        $subOutcomeList->created_by =  "samisams";
        $subOutcomeList->updated_by =  " ";
        $subOutcomeList->save();
        return response ([
            'data' => new SubOutcomeListResource($subOutcomeList)
            ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\SubOutcomeList  $subOutcomeList
     * @return \Illuminate\Http\Response
     */
    public function show(SubOutcomeList $subOutcomeList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\SubOutcomeList  $subOutcomeList
     * @return \Illuminate\Http\Response
     */
    public function edit(SubOutcomeList $subOutcomeList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\SubOutcomeList  $subOutcomeList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubOutcomeList $subOutcomeList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\SubOutcomeList  $subOutcomeList
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubOutcomeList $subOutcomeList)
    {
        //
    }
}
