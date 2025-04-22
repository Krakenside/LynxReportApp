<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Site;
use App\Models\Incident;
use App\Models\Declencheur;
use Illuminate\Http\Request;

class DeclencheurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $decls = Declencheur::all();
        return view('Declencheur.index', compact('decls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //creer une ressource
        $sites = Site::all();
        $clients = Client::all();

        return view('Declencheur.create')->with([
            'sites' => $sites,
            'clients' => $clients,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //On recupere toutes les valeurs saisies et on les valides
        $validated = $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'required|string|max:255',
            'dateHeure' => 'required|date',
            'type' => 'required|in:Incident,Installation,Signalement_Dysfonctionement',
            'interlocuteur' => 'nullable|string|max:100',
            'numInter' => 'nullable|string|max:20',
            'site_id' => 'nullable|integer|exists:sites,id',
            'systeme_concerné' => 'required|string|max:255',
            'etat_syst' => 'required|in:En panne,Defectueux,Hors service,Fonctionnel',
            'client_id' => 'nullable|integer|exists:clients,id'
        ]);
        // if($validated == null){
        //     return redirect()->back()->with('error', 'Erreur de validation des données !');
        // };
        dd($validated);

        //On genere une nouvelle instance et on lui passe les attributs validés
        $newDEC = new Declencheur([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'dateHeure' => $request->input('dateHeure'),
            'type' => $request->input('type'),
            'interlocuteur' => $request->input('interlocuteur'),
            'numInter' => $request->input('numInter'),
            'site_id' => $request->input('site_id'),
            'systeme_concerné' => $request->input('systeme_concerné'),
            'etat_syst' => $request->input('etat_syst'),
            'client_id' => $request->input('client_id')
        ]);
        // Insertion des données
        $newDEC->save();
        //redirection vers la liste + mesage succes
        return redirect()->route('signalement.index')->with('success', 'Signalement crée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Declencheur $declencheur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Declencheur $declencheur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Declencheur $declencheur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Declencheur $declencheur)
    {
        //
    }
}
