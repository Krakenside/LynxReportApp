<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Rapport;
use App\Models\Technicien;
use Illuminate\Http\Request;

class RapportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $allRaps = Rapport::all();
        // dd($allRaps);
        // foreach ($allRaps as $rap) {
        //     dd($rap->id);
        // }
        $msg = "";
        return view('Rapport.Index')->with('allRaps', $allRaps)->with('msg', '   ');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $allClient = Client::all();
        $allTech = Technicien::all();
        return view('Rapport.create', compact('allClient', 'allTech'));
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
        // dd($request);
        $newRapport = new Rapport();
        $newRapport->Intitule_rap = $request->Intitule_rap;
        $newRapport->DateH_rap = $request->DateH_rap;
        $newRapport->Date_rap = date("Y-m-d");
        $newRapport->Nom_Int_rap = $request->Nom_Int_rap;
        $newRapport->Constat_rap = $request->Constat_rap;
        $newRapport->Solution_rap = $request->Solution_rap;
        $newRapport->Observations_rap = $request->Observations_rap;
        $newRapport->a_facturer_rap = $request->a_facturer_rap;
        $newRapport->Verification = $request->Verification;
        $newRapport->Deplacement = $request->Deplacement;
        $newRapport->Installation = $request->Installation;
        $newRapport->Configuration = $request->Configuration;
        $newRapport->Autre = $request->Autre;
        $newRapport->Maintenance_Materielle = $request->Maintenance_Materielle;
        $newRapport->Maintenance_Logicielle = $request->Maintenance_Logicielle;
        $newRapport->client_id = $request->client_id;
        $newRapport->Tech_id =  $request->Tech_id;

        $client = Client::find($request->client_id);
        // $client->Rapports()->save($newRapport);
        $newRapport->Client()->associate($client);
        $newRapport->save();
        $msg = 'Le technicien ' . $request['NomTech'] . ' Ajouté avec succes';

        return redirect()->route('RapportIndex', ['msg' => $msg]);
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
