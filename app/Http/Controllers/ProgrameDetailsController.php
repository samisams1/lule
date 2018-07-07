<?php

namespace App\Http\Controllers;
use App\Http\Requests\ActivityRequest;
use App\Model\ProgrammDetail;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class ProgrameDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProgrammDetail::All();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return ProgrameDetails::All();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             $programmDetail = new ProgrammDetail;
        $programmDetail->name =  $request->name;
        $programmDetail->project_id =  $request->project_id;
        $programmDetail->description =  $request->description;
        $programmDetail->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\ProgrameDetails  $programeDetails
     * @return \Illuminate\Http\Response
     */
    public function show(ProgrameDetails $programeDetails)
    {
        return $programeDetails;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ProgrameDetails  $programeDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(ProgrameDetails $programeDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ProgrameDetails  $programeDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProgrameDetails $programeDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ProgrameDetails  $programeDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProgrameDetails $programeDetails)
    {
        //
    }
}
