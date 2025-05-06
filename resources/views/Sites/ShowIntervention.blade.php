@extends('layouts.admin')

@section('title', 'Interventions pour un site donné')

@section('content')
{{-- {{ $site->Declencheurs->count() }} Déclencheurs
@foreach ($site->Declencheurs as $declencheur)
{{ $declencheur->Interventions->count() }} Interventions
@foreach ($declencheur->Interventions as $decIN )
{{ $decIN->Title }} Titre
{{ $decIN->date_debut }}Date <br>
@endforeach
@endforeach --}}

<div class="container-fluid">

                       

                    @endsection
