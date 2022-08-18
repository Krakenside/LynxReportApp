<?php

namespace App\Http\Controllers;

use App\Models\TypeIntervention;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class TypeInterventionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //afficher tous les type d'interventions
        $TypeInt = TypeIntervention::all();

        return view('TypeIntervention.index')->with('TypesInt', $TypeInt);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        //
        return view('TypeIntervention.create');
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
        $TypesIntN = new TypeIntervention;

        $TypesIntN->Libelle_Intervention = $request['LibTypeInt'];
        $TypesIntN->save();
        $msg = 'Type intervention : ' . $TypesIntN->Libelle_Intervention . ' a été ajouté avec success ';
        $TypeInt = TypeIntervention::all();
        return view('Technicians.index')->with('msg', $msg)->with('TypeInt', $TypeInt);
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
        $typeS = TypeIntervention::find($id);
        return view('TypeIntervention.show')->with('typeS', $typeS);
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

        $TypeEdit = TypeIntervention::find($id);
        return view('TypeIntervention.update')->with('TypeEdit', $TypeEdit);
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
        $TypeEdit = TypeIntervention::find($id);

        $TypeEdit->Libelle_Intervention = $request['LibTechED'];
        $TypeEdit->save();
        $TypeInt = TypeIntervention::all();

        $msg = 'Mise a jour appliquée avec success ! ';
        return view('TypeIntervention.index')->with('msg', $msg)->with('TypeInt', $TypeInt);
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
