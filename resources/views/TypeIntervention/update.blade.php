@extends('layouts.partials.main')
@section('Titre')
    Editer les infos
@endsection

@section('content-pr')
    <!-- With Text -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Metre a jour les infos de {{ $TypeEdit->Libelle_Intervention }}</h3>
        </div>
        <div class="block-content block-content-full">
            <form action="{{ url('/TypeIntervention/Update/' . $TypeEdit->id) }}" method="POST">
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
                                <span class="input-group-text">Libelle </span>
                                <input type="text" class="form-control" id="example-group1-input1" name="LibTechED"
                                    value="{{ $TypeEdit->Libelle_Intervention }}">
                            </div>
                        </div>


                    </div>

            </form>
        </div>
    </div>
    <!-- END With Text -->
@endsection
