<?php

namespace App\Http\Controllers;
use App\Http\Requests\BeneficiaryProfileRequest;
use App\Model\BeneficiaryProfile;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class BeneficiaryProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BeneficiaryProfile::All();
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
             $beneficiaryProfile = new BeneficiaryProfile;
        $beneficiaryProfile->name =  $request->name;
        $beneficiaryProfile->description =  $request->description;
        $beneficiaryProfile->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\BeneficiaryProfile  $beneficiaryProfile
     * @return \Illuminate\Http\Response
     */
    public function show(BeneficiaryProfile $beneficiaryProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\BeneficiaryProfile  $beneficiaryProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(BeneficiaryProfile $beneficiaryProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\BeneficiaryProfile  $beneficiaryProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BeneficiaryProfile $beneficiaryProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\BeneficiaryProfile  $beneficiaryProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(BeneficiaryProfile $beneficiaryProfile)
    {
        //
    }
}
