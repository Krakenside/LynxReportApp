@extends('layouts.admin')

@section('title', 'Nouveau site')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Enregistrer une nouvelle intervention</h1>
        </div>
    </div>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Remplir les informations correspondantes </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{ route('intervention.store')}}">
            @method('POST')
            @csrf

            <div class="card-body">
                <div class="form-group">
                    <label for="libelle_site">Intitulé</label>
                    <input class="form-control form-control-lg" id="libelle_site" type="text"
                        placeholder="Intitulé de l'intervention" aria-label=".form-control-lg example" name="Title"
                        maxlength="30" required>
                    <div class="col-sm-6">

                        <!-- textarea -->
                        <div class="form-group">
                            <label>Description de l'action</label>
                            <textarea class="form-control" rows="5" placeholder="Description de l'action"
                                name="Description" id="Description"></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="type">Statut de l'intervention</label>
                    <select class="form-control" name="statut" id="statut">
                        <option value="En cours">En cours</option>
                        <option value="En attendant">En attendant</option>
                        <option value="Terminé">Terminé</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Date et heure début </label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-clock"></i></span>
                        </div>
                        <input type='datetime-local' class="form-control float-right" id="date_debut"
                            placeholder="Date et heure debut action" name="date_debut" required>
                    </div>
                    <div class="form-group">
                        <label>Date et heure fin action </label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-clock"></i>
                                </span>
                            </div>
                            <input type='datetime-local' class="form-control float-right" id="date_fin"
                                placeholder="Date et heure" name="date_fin" required>
                        </div>


                        <div class="form-group">
                            <label for="client_id">Incident </label>
                            <select class="form-control" name="incident_id" id="incident_id">
                                @foreach ($AllSignalements as $signalement)
                                <option value="{{ $signalement->id }}"> {{ $signalement->title }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="client_id">Technicien en charge de l'action</label>
                            <select class="form-control" name="user_id" id="user_id">
                                @foreach ($AllTechniciens as $tech)
                                <option value="{{ $tech->id }}"> {{ $tech->name }}</option>
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
