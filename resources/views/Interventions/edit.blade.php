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



                    {{-- <label for="mail_clt">Adresse email </label>
                    <input type="email" class="form-control" id="mail_clt" placeholder="Enter email" name="adr_mail"
                        required> --}}
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </form>
    </div>
    <!-- /.card -->

    {{-- <div class="card card-warning card-outline mb-4">
        <!--begin::Header-->
        <div class="card-header">
            <div class="card-title">Horizontal Form</div>
        </div>
        <!--end::Header-->
        <!--begin::Form-->
        <form>
            <!--begin::Body-->
            <div class="card-body">
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" />
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                value="option1" checked />
                            <label class="form-check-label" for="gridRadios1"> First radio </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                value="option2" />
                            <label class="form-check-label" for="gridRadios2"> Second radio </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3"
                                value="option3" disabled />
                            <label class="form-check-label" for="gridRadios3">
                                Third disabled radio
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="row mb-3">
                    <div class="col-sm-10 offset-sm-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" />
                            <label class="form-check-label" for="gridCheck1">
                                Example checkbox
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Body-->
            <!--begin::Footer-->
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Sign in</button>
                <button type="submit" class="btn float-end">Cancel</button>
            </div>
            <!--end::Footer-->
        </form>
        <!--end::Form-->
    </div> --}}
    <!--end::Horizontal Form-->
</div>
@endsection
