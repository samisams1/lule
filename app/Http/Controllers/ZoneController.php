<?php

namespace App\Http\Controllers;
use App\Http\Requests\ZoneRequest;
use App\Model\Zone;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return Zone::All();
         return  $zone = Zone::with('Region.Cluster')->get();
           // return  $region = Region::with('Cluster')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Zone::All();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $zone = new Zone;
        $zone->name =  $request->name;
        $zone->region_id =  $request->region_id;
        $zone->description =  $request->description;
        $zone->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function show(Zone $zone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function edit(Zone $zone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zone $zone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zone $zone)
    {
        //
    }
}
