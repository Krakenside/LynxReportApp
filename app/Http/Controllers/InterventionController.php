<?php

namespace App\Http\Controllers;

use App\Models\Declencheur;
use App\Models\User;
use App\Models\Intervention;
use Illuminate\Http\Request;

class InterventionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $allInterventions = Intervention::all();
        return view('Interventions.index', compact('allInterventions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $AllSignalements = Declencheur::all(); // Get all signalements
        $AllTechniciens = User::where('type', 'Technicien')->get(); // Get all users with type 'Technicien'
        return view('Interventions.create', compact('AllSignalements', 'AllTechniciens'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validate the request data
        $validated = $request->validate([
            'Title' => 'required|string|max:100',
            'Description' => 'required|max:2000',
            'statut' => 'required|string',
            'date_debut' => 'required|date',
            'date_fin' => 'date',
            'incident_id' => 'required|integer',
            'user_id' => 'integer',
        ]);
        // Create a new intervention instance
        $new_intervention = new Intervention([
            'Title' => $request->input('Title'),
            'Description' => $request->input('Description'),
            'statut' => $request->input('statut'),
            'date_debut' => $request->input('date_debut'),
            'date_fin' => $request->input('date_fin'),
            'incident_id' => $request->input('incident_id'),
            'user_id' => $request->input('user_id'),
        ]);
        $new_intervention->save(); // Save the new intervention to the database

        // Redirect to the index page with a success message
        return redirect()->route('intervention.index')->with('success', 'Intervention crée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Intervention $intervention)
    {
        //
        return view('Interventions.show', compact('intervention'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Intervention $intervention)
    {
        //
        return view('Interventions.edit', compact('intervention'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Intervention $intervention)
    {
        //
        // Validate the request data
        $validated = $request->validate([
            'Title' => 'required|string|max:100',
            'Description' => 'required|string|max:255',
            'statut' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'incident_id' => 'required|integer',
            'user_id' => 'required|integer',
        ]);
        // Update the intervention instance
        $intervention->Title = $request->input('Title');
        $intervention->Description = $request->input('Description');
        $intervention->statut = $request->input('statut');
        $intervention->date_debut = $request->input('date_debut');
        $intervention->date_fin = $request->input('date_fin');
        $intervention->incident_id = $request->input('incident_id');
        $intervention->user_id = $request->input('user_id');

        $intervention->save(); // Save the updated intervention to the database

        // Redirect to the index page with a success message
        return redirect()->route('interventions.index')->with('success', 'Intervention mise à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Intervention $intervention)
    {
        //
        $intervention->delete(); // Delete the intervention
        return redirect()->route('int')->with('success', 'Intervention supprimée avec succès');
    }
}
