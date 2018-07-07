<?php

namespace App\Http\Controllers;
use App\Http\Requests\KebeleRequest;
use App\Model\Kebele;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class KebeleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return  $zone = Kebele::with('Wereda.Zone.Region.Cluster')->get();
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
             $kebele = new Kebele;
        $kebele->name =  $request->name;
        $kebele->wereda_id =  $request->wereda_id;
        $kebele->description =  $request->description;
        $kebele->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Kebele  $kebele
     * @return \Illuminate\Http\Response
     */
    public function show(Kebele $kebele)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Kebele  $kebele
     * @return \Illuminate\Http\Response
     */
    public function edit(Kebele $kebele)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Kebele  $kebele
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kebele $kebele)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Kebele  $kebele
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kebele $kebele)
    {
        //
    }
}
