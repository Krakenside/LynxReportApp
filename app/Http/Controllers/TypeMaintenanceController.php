<?php

namespace App\Http\Controllers;

use App\Models\TypeMaintenance;
use Illuminate\Http\Request;

class TypeMaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $allTypeMaint = TypeMaintenance::all();
        $msg = '';
        return view('TypeMaintenance.index', compact('allTypeMaint', 'msg'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeMaintenance  $typeMaintenance
     * @return \Illuminate\Http\Response
     */
    public function show(TypeMaintenance $typeMaintenance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeMaintenance  $typeMaintenance
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeMaintenance $typeMaintenance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeMaintenance  $typeMaintenance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeMaintenance $typeMaintenance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeMaintenance  $typeMaintenance
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeMaintenance $typeMaintenance)
    {
        //
    }
}
