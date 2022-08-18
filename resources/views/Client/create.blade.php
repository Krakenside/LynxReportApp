@extends('layouts.partials.main')
@section('Titre')
    Enregistrer un client
@endsection
@section('content-pr')
    <!-- With Text -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Enregistrer Un client</h3>
        </div>
        <div class="block-content block-content-full">
            <form action="{{ route('saveclt') }}" method="POST" ">
                        @csrf

                        <div class="row">
                            <div class="col-lg-4">
                                <p class="fs-sm text-muted">
                                    Enregistrer un client de Lynx-Network
                                </p>
                            </div>
                            <div class="col-lg-8 col-xl-5">
                                <div class="mb-4">
                                    <div class="input-group">
                                        <span class="input-group-text">Societe</span>
                                        <input type="text" class="form-control" id="example-group1-input1"
                                            name="Libclt">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="example-group1-input2"
                                            name="Telclt">
                                        <span class="input-group-text">Telephone</span>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="input-group">
                                        <span class="input-group-text input-group-text-alt">Bureau</span>
                                        <input type="text" class="form-control form-control-alt" id="example-group1-input1-alt"
                                            name="BurClt">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group">
                                        <span class="input-group-text input-group-text-alt">Caractère </span>
                                        <input type="text" class="form-control form-control-alt" id="example-group1-input1-alt"
                                            name="CarClt">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-alt" id="example-group1-input2-alt"
                                            name="LieuClt">
                                        <span class="input-group-text input-group-text-alt">Lieu</span>
                                    </div>
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
