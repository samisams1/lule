<?php

namespace App\Http\Controllers;
use App\Http\Requests\GroupBeneficiaryRequest;
use App\Model\GroupBeneficiary;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class GroupBeneficiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return GroupBeneficiary::All();
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
             $groupBeneficiary = new GroupBeneficiary;
        $groupBeneficiary->name =  $request->name;
        $groupBeneficiary->description =  $request->description;
        $groupBeneficiary->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\GroupBeneficiary  $groupBeneficiary
     * @return \Illuminate\Http\Response
     */
    public function show(GroupBeneficiary $groupBeneficiary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\GroupBeneficiary  $groupBeneficiary
     * @return \Illuminate\Http\Response
     */
    public function edit(GroupBeneficiary $groupBeneficiary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\GroupBeneficiary  $groupBeneficiary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GroupBeneficiary $groupBeneficiary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\GroupBeneficiary  $groupBeneficiary
     * @return \Illuminate\Http\Response
     */
    public function destroy(GroupBeneficiary $groupBeneficiary)
    {
        //
    }
}
