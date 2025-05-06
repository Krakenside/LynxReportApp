@extends('layouts.admin')

@section('title', 'Nouveau site')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Enregistrer un nouveau signalement</h1>
        </div>
    </div>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Remplir les informations correspondantes </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{ route('signalement.store')}}">
            @method('POST')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="libelle_site">Intitulé</label>
                    <input class="form-control form-control-lg" id="libelle_site" type="text" placeholder="Désignation"
                        aria-label=".form-control-lg example" name="libelle" maxlength="30" required>
                    <div class="col-sm-6">

                        <!-- textarea -->
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3"
                                placeholder="Breve description du probleme"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Date et heure </label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-clock"></i></span>
                            </div>
                            <input type='datetime-local' class="form-control float-right" id="dateHeure"
                                placeholder="Date et heure" name="dateHeure" required>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label for="type">Type de signalement</label>
                        <select class="form-control" name="type" id="type">

                            <option value="Incident">Incident</option>
                            <option value="Installation">Installation</option>
                            <option value="Signalement_Dysfonctionement">Signalement Dysfonctionement</option>
                        </select>
                    </div>


                    <label for="nmResp_site">Nom Interlocuteur </label>
                    <input class="form-control form-control-lg" id="interlocuteur" type="text"
                        placeholder="Nom du responsable ou contact sur place" aria-label=".form-control-lg example"
                        name="interlocuteur" maxlength="30">

                    <div class="form-group">
                        <label>Telephone Interlocuteur</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="tel" class="form-control" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}"
                                name="numInter" id="numInter">
                        </div>
                        <!-- /.input group -->
                    </div>

                    <div class="form-group">
                        <label for="client_id">Site concerné</label>
                        <select class="form-control" name="site_id" id="site_id">
                            @foreach ($sites as $site)
                            <option value="{{ $site->id}}"> {{ $site->libelle }}</option>
                            @endforeach

                        </select>
                    </div>
                    <label for="systeme_concerné">Systeme concerné</label>
                    <input class="form-control form-control-lg" id="systeme_concerné" type="text"
                        placeholder="Systeme concerné" aria-label=".form-control-lg example" name="systeme_concerné"
                        maxlength="30" required>

                    <div class="form-group">
                        <label for="client_id">Etat du systeme</label>
                        <select class="form-control" name="etat_syst" id="etat_syst">

                            <option value="En panne">En panne</option>
                            <option value="Defectueux">Défectueux</option>
                            <option value="Hors service">Hors service</option>
                            <option value="Fonctionnel">Fonctionnel</option>
                        </select>
                    </div>
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
