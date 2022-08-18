@extends('layouts.partials.main')
@section('Titre')
    <title> Editer Un client </title>
@endsection
@section('content-pr')
    <!-- With Text -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Enregistrer Un client</h3>
        </div>
        <div class="block-content block-content-full">
            <form action="{{ url('/Client/update/'.$client->id) }}" method="POST" ">
                        @csrf

                        <div class="row">
                            <div class="col-lg-4">
                                <p class="fs-sm text-muted">
                                    Modifier un client de Lynx-Network
                                </p>
                            </div>
                            <div class="col-lg-8 col-xl-5">
                                <div class="mb-4">
                                    <div class="input-group">
                                        <span class="input-group-text">Societe</span>
                                        <input type="text" class="form-control" id="example-group1-input1"
                                            name="Libcltup" value="{{ $client->Societe_clt  }}">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="example-group1-input2"
                                            name="Telcltup" value="{{$client->tel_clt }}">
                                        <span class="input-group-text">Telephone</span>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="input-group">
                                        <span class="input-group-text input-group-text-alt">Bureau</span>
                                        <input type="text" class="form-control form-control-alt" id="example-group1-input1-alt"
                                            name="BurCltup" value="{{$client->Bureau_clt }}">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group">
                                        <span class="input-group-text input-group-text-alt">Caractère </span>
                                        <input type="text" class="form-control form-control-alt" id="example-group1-input1-alt"
                                            name="CarCltup" value="{{$client->car_clt }}">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-alt" id="example-group1-input2-alt"
                                            name="LieuCltup" value="{{$client->lieu_clt }}">
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
