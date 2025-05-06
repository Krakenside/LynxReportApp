<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;
use Ramsey\Uuid\Type\Integer;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clients = Client::all();
        return view('Clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $client_type = Client::all();
        return view('Clients.create', compact('client_type'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //enregistrer un nouveau client
        // dd($request->all());
        $validated = $request->validate([
            'designation' => 'required|string|max:100',
            'type' => 'required|string',
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|max:20',
            'adr_mail' => 'required|string'
        ]);
        // Client::create($validated);
        $newCLient = new Client([
            'designation' => $request->input('designation'),
            'type' => $request->input('type'),
            'adresse' => $request->input('adresse'),
            'telephone' => $request->input('telephone'),
            'adr_mail' => $request->input('adr_mail')
        ]);
        $newCLient->save();
        return redirect()->route('Clients.index')->with('success', 'Client crée avec succès !');
    }

    //Fonction pour afficher les sites d'un client donné
    public function showSites(Client $client)
    {
        //

        return view('Clients.show', compact('client'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // on recupère le client par son id
        $client = Client::find($id);
        //On retourne la vue avec les infos du client
        return view('Clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $client = Client::find($id);
        return view('Clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}
