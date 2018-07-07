<?php

namespace App\Http\Controllers;
use App\Http\Requests\SuboutputCategoryRequest;
use App\Model\SuboutputCategory;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class SuboutputCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return SuboutputCategory::All();
       return  $outputCategory = OutputCategory::with('OutputCategory')->get();
        return   OutComeListCollection::collection(OutComeList::with('OutcomeCategory')->get());
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
             $suboutputCategory = new SuboutputCategory;
        $suboutputCategory->name =  $request->name;
        $suboutputCategory->project_id =  $request->project_id;
        $suboutputCategory->description =  $request->description;
        $suboutputCategory->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\SuboutputCategory  $suboutputCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SuboutputCategory $suboutputCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\SuboutputCategory  $suboutputCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SuboutputCategory $suboutputCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\SuboutputCategory  $suboutputCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuboutputCategory $suboutputCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\SuboutputCategory  $suboutputCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuboutputCategory $suboutputCategory)
    {
        //
    }
}
