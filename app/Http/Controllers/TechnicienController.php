<?php

namespace App\Http\Controllers;

use App\Models\Technicien;
use Illuminate\Http\Request;

class TechnicienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //listing des techniciens
        $techs = Technicien::all();
        return view('Technicians.index')->with('techs', $techs)->with('msg', '   ');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Technicians.create');
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
        $tech = new Technicien;
        $tech->Nom_tech = $request['NomTech'];
        $tech->Prenom_tech = $request['PrenTech'];
        $tech->DtN_tech = $request['DtnTech'];
        $tech->Tel_tech = $request['TelTech'];
        $tech->Adr_tech = $request['AdrTech'];
        $tech->Departement_tech = $request['DepartementTech'];

        $tech->save();
        $msg = 'Le technicien ' . $request['NomTech'] . ' Ajouté avec succes';
        $techs = Technicien::all();
        // return view('Technicians.index');
        return view('Technicians.index')->with('msg', $msg)->with('techs', $techs);
        //    TechnicienController.index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $tech = Technicien::find($id);
        return view('Technicians.show')->with('tech', $tech);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $techEd = Technicien::find($id);
        return view('Technicians.update')->with('techEd', $techEd);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $techEd =  Technicien::find($id);
        // dd($tech);
        // dd($request);
        $techEd->Nom_tech = $request['NomTechEd'];
        $techEd->Prenom_tech = $request['PrenTechEd'];
        $techEd->DtN_tech = $request['DtnTechEd'];
        // var_dump($request['DtnTechEd']);
        $techEd->Tel_tech = $request['TelTechEd'];
        $techEd->Adr_tech = $request['AdrTechEd'];
        $techEd->Departement_tech = $request['DepartementTechEd'];
        // dd($techEd);
        $techEd->save();
        $msg = 'Le technicien ' . $request['NomTechEd'] . ' Modifié avec succes';
        $techs = Technicien::all();
        // return view('Technicians.index');
        return view('Technicians.index')->with('msg', $msg)->with('techs', $techs);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
