@extends('layouts.admin')

@section('title', 'Signalement')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> Liste des signalements </h3>
                    {{-- <button type="button" class="btn btn-block bg-gradient-success">
                        <a href="{{ route('signalement.create') }}">Enregistrer un nouveau signalement</a>
                    </button> --}}
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <div class="btn-group mb-2" role="group" aria-label="Button group with nested dropdown">
                        <a href="{{ route('signalement.create') }}"> <button type="button"
                                class="btn btn-success">Enregistrer un nouveau signalement</button></a>
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
                                <th>Heure signalement </th>
                                <th>Site concerné </th>
                                <th>Type</th>
                                <th>Interlocuteur</th>
                                {{-- <th>Client</th> --}}
                                <th>Actions </th>

                                <th>Interventions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($decls as $dec)
                            <tr>
                                <td> {{ $dec->title }}</td>
                                <td> {{ $dec->description }} </td>
                                <td>{{ $dec->dateHeure }}</td>
                                <td> {{ $dec->site->libelle }} </td>
                                <td> {{ $dec->type }} </td>
                                <td> {{ $dec->interlocuteur }} </td>
                                <td>
                                    <div class="btn-group mb-2" role="group"
                                        aria-label="Btnon group with nested dropdown">
                                        <a href="{{route('signalement.show',$dec->id)}}">
                                            <button type="button" class="btn btn-success mr-2 bg-black"><i
                                                    class="fa fa-eye"></i></button></a>
                                        <a href="{{ route('signalement.edit',$dec->id) }}">
                                            <button type="button" class="btn btn-warning mr-1"><i
                                                    class="fa fa-edit"></i></button></a>
                                        <a href="{{ route('signalement.delete',$dec->id)}}">
                                            <button type="button" class="btn btn-danger ml-1"><i
                                                    class="fa fa-trash"></i></button></a>


                                    </div>
                                </td>
                                {{-- <td> {{ $dec->site->Client->designation}} </td> --}}
                                {{-- <td>
                                    <div class="btn-group-vertical">
                                        <div class="btn-group mb-2" role="group"
                                            aria-label="Btnon group with nested dropdown">
                                            <a href="{{ route('signalement.delete',$dec->id)}}"> <button type="button"
                                                    class="btn btn-danger">Supprimer</button></a>
                                            <a href="{{ route('signalement.edit',$dec->id) }}"><button type="button"
                                                    class="btn btn-warning">Modifier</button></a>
                                            <a href="{{route('signalement.show',$dec->id)}}"><button type="button"
                                                    class="btn btn-success">Voir</button></a>
                                        </div>
                                    </div>

                                </td> --}}


                                {{-- <td>
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h4 class="card-title w-100">
                                                <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                                                    Interventions suite a cette alerte
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                            <div class="card-body">
                                                {{ $dec->Interventions->count() }} Interventions(s) suite a cette alerte
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Libelle</th>
                                                            <th>Date</th>
                                                            <th>Statut</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($dec->Interventions as $interv)
                                                        <tr>
                                                            <td>{{ $interv->Title }}</td>
                                                            <td>{{ $interv->date_debut }}</td>
                                                            <td>{{ $interv->statut }}</td>

                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </td> --}}

                                </td>
                                <td><a href="{{ route('signalement.showInterventions',$dec->id) }}"><button
                                            class="btn btn-primary"> Interventions pour ce signalement
                                        </button></a> </td>

                            </tr>
                            @endforeach

                            {{-- <tr>
                                <td>Trident</td>
                                <td>Internet
                                    Explorer 5.0
                                </td>
                                <td>Win 95+</td>
                                <td>5</td>
                                <td>C</td>
                            </tr>

                            <tr>
                                <td>Other browsers</td>
                                <td>All others</td>
                                <td>-</td>
                                <td>-</td>
                                <td>U</td>
                            </tr> --}}
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Intitulé</th>
                                <th>Description</th>
                                <th>Heure signalement </th>
                                <th>Site concerné </th>
                                <th>Type</th>
                                <th>Interlocuteur</th>
                                {{-- <th>Client</th> --}}
                                <th>Actions</th>
                                <th>Interventions</th>

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
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
</script>
