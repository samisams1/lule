<?php

namespace App\Http\Controllers;
use App\Http\Requests\GroupMemberRequest;
use App\Model\GroupMember;
use App\Model\GroupBeneficiary;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class GroupMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //return GroupMember::All();
        return  $groupMember = GroupMember::with('BeneficiaryProfile','GroupBeneficiary')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return GroupMember::All();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             $groupMember = new GroupMember;
        $groupMember->name =  $request->name;
        $groupMember->group_id =  $request->group_id;
        $groupMember->profile_id =  $request->profile_id;
        $groupMember->description =  $request->description;
        $groupMember->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\GroupMember  $groupMember
     * @return \Illuminate\Http\Response
     */
    public function show(GroupMember $groupMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\GroupMember  $groupMember
     * @return \Illuminate\Http\Response
     */
    public function edit(GroupMember $groupMember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\GroupMember  $groupMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GroupMember $groupMember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\GroupMember  $groupMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(GroupMember $groupMember)
    {
        //
    }
}
