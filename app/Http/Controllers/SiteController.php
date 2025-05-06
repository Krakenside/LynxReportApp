<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\Client;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //lister tous les intervetions pour un site donné
    public function showInterventions(Site $site)
    {
        //On recupere tous les interventions pour un site donné
        // $interventions = $site->interventions()->get();
        $interventions = $site->Declencheurs()->with('Interventions')->get();
        return view('Sites.ShowIntervention', compact('interventions', 'site'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sites = Site::all();
        return view('Sites.index', compact('sites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $clients = Client::all();
        return view('Sites.create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //On recupere toutes les valeurs saisies et on les valides
        $validated = $request->validate([
            'libelle' => 'required|string|max:100',
            'sit_geo' => 'required|string|max:255',
            'client_id' => 'required|integer'

        ]);

        //On genere une nouvelle instance et on lui passe les attributs validés
        //on affecte les valeurs recues aux colonnes conernées
        $new_site = new Site([
            'libelle' => $request->input('libelle'),
            'sit_geo' => $request->input('sit_geo'),
            'nomResp' => $request->input('nomResp'),
            'contactResp' => $request->input('contactResp'),
            'client_id' => $request->input('client_id'),
        ]);

        // Insertion des données
        $new_site->save();

        //redirection vers la liste + mesage succes
        return redirect()->route('Sites.index',)->with('success', 'Site crée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Site $site)
    {
        //
        return view('Sites.show', compact('site'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Site $site)
    {
        //Modifier un site
        return view('Sites.edit', compact('site'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Site $site)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Site $site)
    {
        //
    }
}
