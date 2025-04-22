@extends('layouts.admin')

@section('title', 'Interventions')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Liste des Interventions</h3>
                    {{-- <button type="button" class="btn btn-block bg-gradient-success">
                        <a href="{{ route('intervention.create') }}">Enregistrer une intervention</a>
                    </button> --}}
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <div class="btn-group mb-2" role="group" aria-label="Button group with nested dropdown">
                        <a href="{{ route('intervention.create') }}"> <button type="button"
                                class="btn btn-success">Enregistrer une nouvelle Intervention</button></a>
                    </div>
                    <div class="btn-group mb-2" role="group" aria-label="Button group with nested dropdown">
                        <a href="{{ route('intervention.create') }}"> <button type="button"
                                class="btn btn-dark">Recherche par Site</button></a>
                    </div>
                    <div class="btn-group mb-2" role="group" aria-label="Button group with nested dropdown">
                        <a href="{{ route('intervention.create') }}"> <button type="button"
                                class="btn btn-dark">Recherche par Intervenant</button></a>
                    </div>



                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            {{-- <td>
                                <button type="button" class="btn btn-block bg-gradient-success">Créer un nouveau
                                    client</button>
                            </td> --}}
                            <tr>
                                <th>Intitulé</th>
                                <th>Description</th>
                                <th>Statut </th>
                                <th>Date ammorce </th>
                                <th>Technicien en charge</th>
                                <th>Incident</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allInterventions as $Intervention)

                            @switch($Intervention->statut)
                            @case('Terminé')
                            {{ $var2 = 'btn btn-success'; }}
                            @break
                            @case('En cours')
                            {{ $var2 = 'btn btn-warning'; }}
                            @break
                            @case('En attendant')
                            {{ $var2 = 'btn btn-primary'; }}
                            @break
                            @default
                            {{ $var2 = 'btn btn-success'; }}
                            @endswitch

                            <tr>
                                <td> {{ $Intervention->Title }}</td>
                                <td> {{ $Intervention->Description }} </td>
                                <td>
                                    <button type="button" class="{{ $var2 }} mb-2">
                                        {{$Intervention->statut}} </button>
                                </td>
                                <td> {{ $Intervention->date_debut }} </td>
                                <td> {{ $Intervention->user_id}} </td>
                                <td> {{ $Intervention->incident_id }} </td>
                                <td>
                                    <div class="btn-group mb-2" role="group" aria-label="Basic mixed styles example">
                                        <a href="{{ route('intervention.delete',$Intervention->id)}}"> <button
                                                type="button" class="btn btn-danger">Supprimer</button></a>
                                        <a href="{{ route('intervention.edit',$Intervention->id) }}"><button
                                                type="button" class="btn btn-warning">Modifier</button></a>
                                        <a href="{{route('intervention.show',$Intervention->id)}}"><button type="button"
                                                class="btn btn-success">Voir</button></a>
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Intitulé</th>
                                <th>Description</th>
                                <th>Statut </th>
                                <th>Date ammorce </th>
                                <th>Technicien en charge</th>
                                <th>Incident</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>


@endsection

@section('AutresScripts')
<script>
    const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
const Default = {
  scrollbarTheme: 'os-theme-light',
  scrollbarAutoHide: 'leave',
  scrollbarClickScroll: true,
};
document.addEventListener('DOMContentLoaded', function () {
  const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
  if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
    OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
      scrollbars: {
        theme: Default.scrollbarTheme,
        autoHide: Default.scrollbarAutoHide,
        clickScroll: Default.scrollbarClickScroll,
      },
    });
  }
});
</script>
<!--end::OverlayScrollbars Configure-->
<!--begin::Bootstrap Tooltips-->
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
const tooltipList = [...tooltipTriggerList].map(
  (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl),
);
</script>
<!--end::Bootstrap Tooltips-->
<!--begin::Bootstrap Toasts-->
<script>
    const toastTriggerList = document.querySelectorAll('[data-bs-toggle="toast"]');
toastTriggerList.forEach((btn) => {
  btn.addEventListener('click', (event) => {
    event.preventDefault();
    const toastEle = document.getElementById(btn.getAttribute('data-bs-target'));
    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastEle);
    toastBootstrap.show();
  });
});
</script>
@endsection
