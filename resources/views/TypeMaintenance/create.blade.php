@extends('layouts.partials.main')
@section('Titre')
    Enregistrer un client
@endsection
@section('content-pr')
    <!-- With Text -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Enregistrer Un Technicien</h3>
        </div>
        <div class="block-content block-content-full">
            <form action="{{ route('TechStore') }}" method="POST" ">
                                @csrf

                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="fs-sm text-muted">
                                            Enregistrer un technicien de Lynx-Network
                                        </p>
                                    </div>
                                    <div class="col-lg-8 col-xl-5">
                                        <div class="mb-4">
                                            <div class="input-group">
                                                <span class="input-group-text">Nom </span>
                                                <input type="text" class="form-control" id="example-group1-input1"
                                                    name="NomTech">
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="example-group1-input2"
                                                    name="PrenTech">
                                                <span class="input-group-text">Prenom</span>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <div class="input-group">
                                                <span class="input-group-text input-group-text-alt">Date de Naissance</span>
                                                <input type="date" class="form-control form-control-alt" id="example-group1-input1-alt"
                                                    name="DtnTech">
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="input-group">
                                                <span class="input-group-text input-group-text-alt">Numero de telephone  </span>
                                                <input type="text" class="form-control form-control-alt" id="example-group1-input1-alt"
                                                    name="TelTech">
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-alt" id="example-group1-input2-alt"
                                                    name="AdrTech">
                                                <span class="input-group-text input-group-text-alt">Adresse</span>
                                            </div>
                                        </div>
                                        <div class="row push">
                                            <div class="col-lg-4">
                                              <p class="fs-sm text-muted">
                                                Departement
                                              </p>
                                            </div>
                                            <select class="form-select" id="example-select-floating" name="DepartementTech" aria-label="Floating label select example">
                                              <option selected="">Select an option</option>
                                              <option value="BDE">Bureau d'etudes</option>
                                              <option value="INS">Installateur</option>
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
