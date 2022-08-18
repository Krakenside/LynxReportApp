@extends('layouts.partials.main')
@section('Titre')
    Editer les infos
@endsection

@section('content-pr')
    <!-- With Text -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Metre a jour les infos de {{ $techEd->Nom_tech }}</h3>
        </div>
        <div class="block-content block-content-full">
            <form action="{{ url('/Technicien/Update/' . $techEd->id) }}" method="POST">
                @csrf
                {{-- {{dd($techEd)}} --}}
                <div class="row">
                    <div class="col-lg-4">
                        <p class="fs-sm text-muted">
                            Modifier les infos
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="mb-4">
                            <div class="input-group">
                                <span class="input-group-text">Nom </span>
                                <input type="text" class="form-control" id="example-group1-input1" name="NomTechEd"
                                    value="{{ $techEd->Nom_tech }}">
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="input-group">
                                <input type="text" class="form-control" id="example-group1-input2" name="PrenTechEd"
                                    value="{{ $techEd->Prenom_tech }}">
                                <span class="input-group-text">Prenom</span>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="input-group">
                                <span class="input-group-text input-group-text-alt">Date de Naissance</span>
                                <input type="date" class="form-control form-control-alt" id="example-group1-input1-alt"
                                    name="DtnTechEd" value="{{ $techEd->DtN_tech }}">
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="input-group">
                                <span class="input-group-text input-group-text-alt">Numero de telephone </span>
                                <input type="text" class="form-control form-control-alt" id="example-group1-input1-alt"
                                    name="TelTechEd" value="{{ $techEd->Tel_tech }}">
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-alt" id="example-group1-input2-alt"
                                    name="AdrTechEd" value="{{ $techEd->Adr_tech }}">
                                <span class="input-group-text input-group-text-alt">Adresse</span>
                            </div>
                        </div>
                        <div class="row push">
                            <div class="col-lg-4">
                                <p class="fs-sm text-muted">
                                    Departement
                                </p>
                            </div>
                            <select class="form-select" id="example-select-floating" name="DepartementTechEd"
                                aria-label="Floating label select example">
                                <option>Select an option</option>
                                <option value="BDE"
                                    @if ($techEd->Departement_tech == 'BDE') {{ 'selected = "seleted"' }} @endif>Bureau
                                    d'etudes</option>
                                <option value="INS"
                                    @if ($techEd->Departement_tech == 'INS') {{ 'selected = "seleted"' }} @endif>Installateur
                                </option>

                            </select>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <input type="Submit" class="btn btn-success" value="Enregistrer">
                            <div class="mt-2">

                            </div>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </div>
    <!-- END With Text -->
@endsection
