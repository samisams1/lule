<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProgrammRequest;
use App\Model\Programmes;
use Illuminate\Http\Request;
use App\Http\Resources\Program\ProgramResource;
use App\Http\Resources\Program\ProgramCollection;
use Symfony\Component\HttpFoundation\Response;
class ProgrammesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
      //  return  $programmes = Programmes::with('ProgramCategory')->get();
      return   ProgramCollection::collection(Programmes::with('ProgramCategory')->get());
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
        $programmes = new Programmes;
        $programmes->name =  $request->name;
        $programmes->program_category_id =  $request->program_category_id;
        $programmes->description =  $request->description;
        $programmes->goal =  $request->goal;
        $programmes->budget =  $request->budget;
        $programmes->budget =  $request->budget;
        $programmes->starting_year =  $request->starting_year;
        $programmes->ending_year =  $request->ending_year;
        $programmes->specific_objective =  $request->specific_objective;
        $programmes->objective_log_term =  $request->objective_log_term;
        $programmes->status =  "active";
        $programmes->created_by =  "samisams";
        $programmes->updated_by =  " ";
        $programmes->save();
        return  response([
            'data'=>new ProgramResource($programmes)
            ],Response::HTTP_CREATED);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Programmes  $programmes
     * @return \Illuminate\Http\Response
     */
    public function show(Programmes $programmes)
    {
        return $ProgramCategory;
        return new ProgramCategoryResource($programmes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Programmes  $programmes
     * @return \Illuminate\Http\Response
     */
    public function edit(Programmes $programmes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Programmes  $programmes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programmes $programmes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Programmes  $programmes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programmes $programmes)
    {
        //
    }
}
