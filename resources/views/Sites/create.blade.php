@extends('layouts.admin')

@section('title', 'Nouveau site')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Enregistrer un nouveau site d'intervention</h1>
        </div>
    </div>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Remplir les informations correspondantes </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{ route('Site.store')}}">
            @method('POST')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="libelle_site">Libellé</label>
                    <input class="form-control form-control-lg" id="libelle_site" type="text" placeholder="Désignation"
                        aria-label=".form-control-lg example" name="libelle" maxlength="30" required>

                    <label for="sit_geo">Situation Géographique site </label>
                    <input class="form-control form-control-lg" id="sit_geo" type="text"
                        placeholder="Adresse géographique" aria-label=".form-control-lg example" name="sit_geo"
                        max="255">

                    <label for="nmResp_site">Nom du responsable site</label>
                    <input class="form-control form-control-lg" id="nmResp_site" type="text"
                        placeholder="Nom du responsable ou contact sur place" aria-label=".form-control-lg example"
                        name="nomResp" maxlength="50" required='false"'>

                    <label for="telResp_site">Télephone responsable site </label>
                    <input class="form-control form-control-lg" id="telResp_site" type="tel" placeholder="N° Telephone"
                        aria-label=".form-control-lg example" name="contactResp" maxlength="20" required='false'>

                    <div class="form-group">
                        <label for="client_id">Client concerné</label>
                        <select class="form-control" name="client_id" id="client_id">
                            @foreach ($clients as $client)
                            <option value="{{ $client->id }}"> {{ $client->designation }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </form>
    </div>

</div>
@endsection
