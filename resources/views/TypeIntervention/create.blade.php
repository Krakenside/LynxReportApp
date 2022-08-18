@extends('layouts.partials.main')
@section('Titre')
    Enregistrer un type d'intervention
@endsection
@section('content-pr')
    <!-- With Text -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Enregistrer un type d'intervention </h3>
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
                                                        <span class="input-group-text">Libelle  </span>
                                                        <input type="text" class="form-control" id="example-group1-input1"
                                                            name="LibTypeInt">
                                                    </div>
                                                </div>
                                                
                                           
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END With Text -->
@endsection
