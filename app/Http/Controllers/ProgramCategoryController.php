<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProgrammCategoryRequest;
use App\Http\Resources\Program\ProgramCategoryResource;
use App\Http\Resources\Program\ProgramCategoryCollection;
use App\Model\ProgramCategory;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class ProgramCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // return  ProgramCategory::all();
       //  return  $projects = Project::with('ProjectCategory.ProgrammesprogramCategory')->get();
          return   ProgramCategoryCollection::collection(ProgramCategory::all());
       
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
    public function store(ProgrammCategoryRequest $request)
    {
        $programCategory = new ProgramCategory;
        $programCategory->name =  $request->name;
        $programCategory->description =  $request->description;
        $programCategory->created_by =  $request->created_by;
        $programCategory->updated_by =  $request->updated_by;
        $programCategory->save();
        return response([
            'data' => new ProgramCategoryResource($programCategory)
            ],201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\ProgramCategory  $programCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProgramCategory $programCategory)
    {
        return $programCategory['val'];
       //  return new ProgramCategoryResource($programCategory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ProgramCategory  $programCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProgramCategory $programCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ProgramCategory  $programCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProgramCategory $programCategory)
    {
        $request['description'] = $request->description;
        unset($request['description']);
        $programCategory->update($request->all());
        return  response([
            'data'=>new ProgramCategoryResource($programCategory)
            ],Response::HTTP_CREATED);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ProgramCategory  $programCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProgramCategory $programCategory)
    {
        //
    }
}
