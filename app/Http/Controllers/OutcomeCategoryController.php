<?php

namespace App\Http\Controllers;
use App\Http\Resources\Outcome\OutcomeCategoryResource;
use App\Http\Resources\Outcome\OutcomeCategoryCollection;

use App\Http\Requests\OutcomeCategoryRequest;
use App\Model\OutcomeCategory;
use App\Model\Project;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class OutcomeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   //   return  $outcomeCategory = OutcomeCategory::with('Project.ProjectCategory.Programmes.ProgramCategory')->get();
         return   OutcomeCategoryCollection::collection(OutcomeCategory::with('Project')->get());
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
        $outcomeCategory = new OutcomeCategory;
        $outcomeCategory->name =  $request->name;
        $outcomeCategory->project_id =  $request->project_id;
        $outcomeCategory->description =  $request->description;
        $outcomeCategory->created_by =  "samisams";
        $outcomeCategory->updated_by =  " ";
        $outcomeCategory->save();
           return  response([
            'data'=>new OutcomeCategoryResource($outcomeCategory)
            ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\OutcomeCategory  $outcomeCategory
     * @return \Illuminate\Http\Response
     */
    public function show(OutcomeCategory $outcomeCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\OutcomeCategory  $outcomeCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(OutcomeCategory $outcomeCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\OutcomeCategory  $outcomeCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OutcomeCategory $outcomeCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\OutcomeCategory  $outcomeCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(OutcomeCategory $outcomeCategory)
    {
        //
    }
}
