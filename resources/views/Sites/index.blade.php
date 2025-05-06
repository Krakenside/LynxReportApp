@extends('layouts.admin')

@section('title', 'Clients')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Liste des Sites d'interventions de LYNX NETWORK</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="btn-group mb-2" role="group" aria-label="Button group with nested dropdown">
                        <a href="{{ route('Sites.create') }}"> <button type="button" class="btn btn-success">Enregistrer
                                une nouveau site </button></a>
                    </div>
                    {{-- <div class="btn-group mb-2" role="group" aria-label="Button group with nested dropdown">
                        <a href="{{route('Client.create')}}"> <button type="button" class="btn btn-success">Enregistrer
                                une nouveau technicien</button></a>
                    </div> --}}

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            {{-- <td>
                                <button type="button" class="btn btn-block bg-gradient-success">Créer un nouveau
                                    client</button>
                            </td> --}}
                            <tr>
                                <th>Nom du site</th>
                                <th>Situation géographique</th>
                                <th>Nom responsable </th>
                                <th>Contact responsable</th>
                                <th>Client</th>
                                <th>Actions</th>
                                {{-- <th>Autres actions </th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sites as $site)
                            <tr>
                                <td> {{ $site->libelle }}</td>
                                <td> {{ $site->sit_geo }} </td>
                                <td> {{ $site->nomResp }} </td>
                                <td> {{ $site->contactResp }} </td>
                                <td> {{ $site->Client->designation }} </td>
                                <td>
                                    <div class="btn-group mb-2" role="group"
                                        aria-label="Btnon group with nested dropdown">
                                        <a href="{{route('Site.show',$site->id)}}">
                                            <button type="button" class="btn btn-success mr-2 bg-black"><i
                                                    class="fa fa-eye"></i></button></a>
                                        <a href="{{ route('Site.edit',$site->id) }}">
                                            <button type="button" class="btn btn-warning mr-1"><i
                                                    class="fa fa-edit"></i></button></a>
                                        <a href="{{ route('Site.delete',$site->id)}}">
                                            <button type="button" class="btn btn-danger ml-1"><i
                                                    class="fa fa-trash"></i></button></a>


                                    </div>
                                </td>
                                {{-- <td>
                                    <form action="{{ route('Site.delete', $site->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('Site.edit', $site->id) }}"
                                            class="btn btn-primary">Modifier</a>
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>
                                </td>
                                <td>
                                    <div class="btn-group-vertical">
                                        <div class="btn-group mb-2" role="group"
                                            aria-label="Btnon group with nested dropdown">
                                            {{-- <a href="{{ route('signalement.delete',$dec->id)}}"> <button
                                                    type="button" class="btn btn-danger">Supprimer</button></a>
                                            <a href="{{ route('signalement.edit',$dec->id) }}"><button type="button"
                                                    class="btn btn-warning">Modifier</button></a>
                                            <a href="{{route('Site.showInterventions',$site->id)}}"><button
                                                    type="button" class="btn btn-success">Voir les interventions pour ce
                                                    site</button></a>
                                        </div>
                                </td>
                                <td>
                                    {{ }} Incidents
                                    @foreach ($site->Declencheurs as $declencheur)
                                    {{ $declencheur->Interventions->count() }} Interventions
                                    @foreach ($declencheur->Interventions as $decIN )
                                    {{ $decIN->Title }} Intitulé
                                    {{ $decIN->date_debut }}Date Intervention
                                    {{ $decIN->Description }}Action
                                    {{ $decIN->Statut }}Statut <br>
                                    @endforeach
                                    @endforeach

                                </td>
                                <td>
                                    <div class="card-body">
                                        {{ $site->Declencheurs->count() }} Incidents signalés
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Intitulé</th>
                                                    <th>Date Intervention</th>
                                                    <th>Action</th>
                                                    <td>Status</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($site->Declencheurs as $declencheur)
                                                @foreach ($declencheur->Interventions as $decIN )
                                                <tr>
                                                    <td>{{ $decIN->Title}}</td>
                                                    <td>{{ $decIN->date_debut }}</td>
                                                    <td>{{ $decIN->Description }}</td>
                                                    <td>{{ $decIN->statut }}</td>

                                                </tr>
                                                @endforeach
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </td> --}}
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
                                <th>Nom du site</th>
                                <th>Situation géographique</th>
                                <th>Nom responsable </th>
                                <th>Contact responsable</th>
                                <th>Client</th>
                                <th>Actions</th>
                                {{-- <th>Autres actions </th> --}}
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
