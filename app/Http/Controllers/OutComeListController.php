<?php

namespace App\Http\Controllers;
use App\Http\Requests\OutComeListRequest;
use App\Model\OutComeList;
use Illuminate\Http\Request;
use App\Http\Resources\Outcome\OutcomeListResource;
use App\Http\Resources\Outcome\OutcomeListCollection;
use Symfony\Component\HttpFoundation\Response;
class OutComeListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
       return  $OutComeList = OutComeList::with('OutcomeCategory.Project.ProjectCategory.Programmes.ProgramCategory')->get();
        //return   OutComeListCollection::collection(OutComeList::with('OutcomeCategory')->get());
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
        $outComeList = new OutComeList;
        $outComeList->name =  $request->name;
        $outComeList->outcome_category_id =  $request->outcome_category_id;
        $outComeList->description =  $request->description;
         $outComeList->created_by =  "samisams";
        $outComeList->updated_by =  " ";
        $outComeList->save();
        return  response([
            'data'=>new OutcomeListResource($outComeList)
            ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\OutComeList  $outComeList
     * @return \Illuminate\Http\Response
     */
    public function show(OutComeList $outComeList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\OutComeList  $outComeList
     * @return \Illuminate\Http\Response
     */
    public function edit(OutComeList $outComeList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\OutComeList  $outComeList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OutComeList $outComeList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\OutComeList  $outComeList
     * @return \Illuminate\Http\Response
     */
    public function destroy(OutComeList $outComeList)
    {
        //
    }
}
