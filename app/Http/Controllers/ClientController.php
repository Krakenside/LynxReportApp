<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //lister les clients
        $clients = Client::all();
        $msg = ' ';

        return view('Client.index')->with('clts', $clients)->with('msg',$msg);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

        //creer un client
        return view('Client.create');
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
        $LibClt = $request['Libclt'];

        // verifions si la personne a enregistrer existe deja
        $persEx = Client::where('Societe_clt', $LibClt);
        if ($persEx == NULL) {
            $msg = 'Ce client Existe deja ';
            return view('Client.index')->with('msg', $msg);
        } else {
            //on enregistre le client
            $clt  = new Client;
            $clt->Societe_clt  = $request['Libclt'];
            $clt->tel_clt  = $request['Telclt'];
            $clt->Bureau_clt = $request['BurClt'];
            $clt->car_clt = $request['CarClt'];
            $clt->lieu_clt = $request['LieuClt'];
            $clt->save();
            $msg = 'Client ' . $request['Libclt'] . ' enregistré avec succes !';
            $clients = Client::all();

            return view('Client.index')->with('msg', $msg)->with('clts', $clients);
        }
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
        $client = Client::find($id);
        return view('Client.update', compact('client'));
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
        $client = Client::find($id);
        return view('Client.update', compact('client'));
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
        //retrouver l'enregistrement concerné
        $clt = Client::find($id);

        //mise a jour des elements
        $clt->Societe_clt = $request['Libcltup'];
        $clt->tel_clt  = $request['Telcltup'];
        $clt->Bureau_clt = $request['BurCltup'];
        $clt->car_clt = $request['CarCltup'];
        $clt->lieu_clt = $request['LieuCltup'];
        $clt->update();
        $msg = 'Client ' . $request['Libcltup'] . ' Modifié avec succes !';
        $clients = Client::all();

        return view('Client.index')->with('msg', $msg)->with('clts', $clients);
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
        $clt = Client::find($id);
        $clt->delete();
    }
}
