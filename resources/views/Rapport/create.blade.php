@extends('layouts.partials.main')
@section('Titre')
Enregistrer un Rapport 
@endsection
@section('content-pr')
<!-- With Text -->
<div class="block block-rounded">
    <div class="block-header block-header-default">
        <h3 class="block-title">Enregistrer Un Rapport D'intervention</h3>
    </div>
    <div class="block-content block-content-full">
        <form action="{{ route('rapportStore') }}" method="POST">
            @csrf

            <div class=" row">
                <div class="col-lg-4">
                    <p class="fs-sm text-muted">
                        Enregistrer un Rapport d'intervention
                    </p>
                </div>
                <div class="col-lg-8 col-xl-5">
                    <div class="mb-4">
                        <div class="input-group">
                            <span class="input-group-text">Intitule </span>
                            <input type="text" class="form-control" id="example-group1-input1" name="Intitule_rap">
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="input-group">
                            <input type="date" class="form-control" id="example-group1-input2" name="DateH_rap">
                            <span class="input-group-text">Date et Heure</span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="input-group">
                            <input type="text" class="form-control" id="example-group1-input2" name="Nom_Int_rap">
                            <span class="input-group-text">Nom Interlocuteur</span>
                        </div>
                    </div>
                    <div class="form-floating mb-4">
                        <textarea class="form-control" id="example-textarea-floating" name="Constat_rap" style="height: 200px" placeholder="Decrivez le probleme"></textarea>
                        <label for="example-textarea-floating">Constat</label>
                    </div>
                    <div class="form-floating mb-4">
                        <textarea class="form-control" id="example-textarea-floating" name="Solution_rap" style="height: 200px" placeholder="Leave a comment here"></textarea>
                        <label for="example-textarea-floating">Solution</label>
                    </div>
                    <div class="form-floating mb-4">
                        <textarea class="form-control" id="example-textarea-floating" name="Observations_rap" style="height: 200px" placeholder="Leave a comment here"></textarea>
                        <label for="example-textarea-floating">Observation</label>
                    </div>
                    <div class="form-floating mb-4">
                        <select class="form-select" id="example-select-floating" name="Maintenance_Materielle" aria-label="Floating label select example">

                            <option value="0">Oui</option>
                            <option value="1" selected>Non</option>
                            {{-- <option value="3">Three</option> --}}
                        </select>
                        <label for="example-select-floating">Maintenance Materielle</label>
                    </div>
                    <div class="form-floating mb-4">
                        <select class="form-select" id="example-select-floating" name="Maintenance_Logicielle" aria-label="Floating label select example">
                            {{-- <option selected="">Faire un choix</option> --}}
                            <option value="1">Oui</option>
                            <option value="2" selected>Non</option>
                            {{-- <option value="3">Three</option> --}}
                        </select>
                        <label for="example-select-floating">Maintenance Logicielle</label>
                    </div>
                    <div class="form-floating mb-4">
                        <select class="form-select" id="example-select-floating" name="Verification" aria-label="Floating label select example">
                            {{-- <option selected="">Faire un choix</option> --}}
                            <option value="1">Oui</option>
                            <option value="2" selected>Non</option>
                            {{-- <option value="3">Three</option> --}}
                        </select>
                        <label for="example-select-floating">Verification</label>
                    </div>
                    <div class="form-floating mb-4">
                        <select class="form-select" id="example-select-floating" name="Deplacement" aria-label="Floating label select example">
                            {{-- <option selected="">Faire un choix</option> --}}
                            <option value="1">Oui</option>
                            <option value="2" selected>Non</option>
                            {{-- <option value="3">Three</option> --}}
                        </select>
                        <label for="example-select-floating">Configuration</label>
                    </div>
                    <div class="form-floating mb-4">
                        <select class="form-select" id="example-select-floating" name="Configuration" aria-label="Floating label select example">
                            {{-- <option selected="">Faire un choix</option> --}}
                            <option value="1">Oui</option>
                            <option value="2" selected>Non</option>
                            {{-- <option value="3">Three</option> --}}
                        </select>
                        <label for="example-select-floating">Reparation</label>
                    </div>
                    <div class="form-floating mb-4">
                        <select class="form-select" id="example-select-floating" name="Installation" aria-label="Floating label select example">
                            {{-- <option selected="">Faire un choix</option> --}}
                            <option value="1">Oui</option>
                            <option value="2" selected>Non</option>
                            {{-- <option value="3">Three</option> --}}
                        </select>
                        <label for="example-select-floating">Installation</label>
                    </div>
                    <div class="form-floating mb-4">
                        <select class="form-select" id="example-select-floating" name="Deplacement" aria-label="Floating label select example">
                            {{-- <option selected="">Faire un choix</option> --}}
                            <option value="1">Oui</option>
                            <option value="2" selected>Non</option>
                            {{-- <option value="3">Three</option> --}}
                        </select>
                        <label for="example-select-floating">Deplacé</label>
                    </div>
                    <div class="form-floating mb-4">
                        <select class="form-select" id="example-select-floating" name="Autre" aria-label="Floating label select example">
                            {{-- <option selected="">Faire un choix</option> --}}
                            <option value="1">Oui</option>
                            <option value="2" selected>Non</option>
                            {{-- <option value="3">Three</option> --}}
                        </select>
                        <label for="example-select-floating">Autres</label>
                    </div>
                    <div class="form-floating mb-4">
                        <select class="form-select" id="example-select-floating" name="a_facturer_rap" aria-label="Floating label select example">
                            {{-- <option selected="">Faire un choix</option> --}}
                            <option value="1">Oui</option>
                            <option value="2" selected>Non</option>
                            {{-- <option value="3">Three</option> --}}
                        </select>
                        <label for="example-select-floating">A Facturer</label>
                    </div>
                    {{-- <div class="mb-4">
                    <div class="input-group">
                        <span class="input-group-text input-group-text-alt">Date de Naissance</span>
                        <input type="date" class="form-control form-control-alt" id="example-group1-input1-alt" name="DtnTech">
                    </div>
                </div> --}}
                    {{-- <div class="mb-4">
                    <div class="input-group">
                        <span class="input-group-text input-group-text-alt">Numero de telephone </span>
                        <input type="text" class="form-control form-control-alt" id="example-group1-input1-alt" name="TelTech">
                    </div>
                </div> --}}
                    {{-- <div class="mb-4">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-alt" id="example-group1-input2-alt" name="AdrTech">
                        <span class="input-group-text input-group-text-alt">Adresse</span>
                    </div>
                </div> --}}
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="fs-sm text-muted">
                                Client
                            </p>
                        </div>
                        <select class="form-select" id="example-select-floating" name="client_id" aria-label="Floating label select example">
                            <option selected="">Faire un choix</option>
                            @foreach ($allClient as $clt )

                            <option value="{{$clt->id}}">{{$clt->Societe_clt}}</option>
                            @endforeach
                            {{-- <option value="3">Three</option> --}}
                        </select>
                    </div>
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="fs-sm text-muted">
                                Technicien
                            </p>
                        </div>
                        <select class="form-select" id="example-select-floating" name="Tech_id" aria-label="Floating label select example">
                            <option selected="">Faire un choix</option>
                            @foreach ($allTech as $tech )

                            <option value="{{$tech->id}}">{{$tech->Nom_tech}}</option>
                            @endforeach
                            {{-- <option value="3">Three</option> --}}
                        </select>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <input type="Submit" class="btn btn-success" value="Enregistrer">
                        <div class="mt-2">
                            {{-- <code>Enregistrer</code> --}}
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
<!-- END With Text -->
@endsection
