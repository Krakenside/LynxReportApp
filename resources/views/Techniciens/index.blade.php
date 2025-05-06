@extends('layouts.admin')

@section('title', 'Techiciens')

@section('content')
<div class="container-fluid">
    <div class="row">
        @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <div class="col-12">
            <div class="card">
                {{-- <button type="button" class="btn btn-primary mb-2"> <a href="{{route('Client.create')}}">Créer un
                        nouveau client</a></button> --}}
                <div class="card-header">

                    <h3 class="card-title">Liste des Techniciens de LYNX NETWORK</h3>
                    {{-- <button type="button" class="btn btn-primary mb-2"> <a href="{{route('Client.create')}}">Créer
                            un
                            nouveau client</a></button> --}}
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                    <div class="btn-group mb-2" role="group" aria-label="Button group with nested dropdown">
                        <a href="{{route('Client.create')}}"> <button type="button" class="btn btn-success">Enregistrer
                                une nouveau technicien</button></a>
                    </div>

                    {{-- <div class="btn-group mb-2" role="group" aria-label="Button group with nested dropdown">
                        <a href="{{ route('intervention.create') }}"> <button type="button"
                                class="btn btn-dark">Recherche par Intervenant</button></a>
                    </div> --}}


                    <table id="example1" class="table table-bordered table-striped">
                        <thead>

                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>E-mail</th>
                                <th>Poste occupé</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($techniciens as $technicien)
                            <tr>
                                <td>{{ $technicien->name }}</td>
                                <td> {{ $technicien->prenom }} </td>
                                <td>{{ $technicien->email }} </td>
                                <td>{{ $technicien->posteOcc }} </td>
                                <td>
                                    <div class="btn-group mb-2" role="group"
                                        aria-label="Btnon group with nested dropdown">
                                        <a href="{{route('Technicien.show',$technicien->id)}}">

                                            <button type="button" class="btn btn-success mr-2 bg-black"><i
                                                    class="fa fa-eye"></i></button></a>
                                        {{-- <button type="button" class="btn btn-success mr-2"><i
                                                class="fa fa-info"></i></button></a> --}}
                                        <a href="{{ route('Technicien.edit',$technicien->id) }}">
                                            <button type="button" class="btn btn-warning mr-1"><i
                                                    class="fa fa-edit"></i></button></a>
                                        <form action="{{ route('Technicien.delete',$technicien->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('Technicien.delete',$technicien->id)}}">
                                                <button type="submit" class="btn btn-danger ml-1"><i class="fa fa-trash"></i></button>
                                            </a>
                                        </form>




                                    </div>
                                </td>
                                {{-- <td>
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h4 class="card-title w-100">
                                                <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                                                    Actions pour ce Technicien
                                                </a>
                                            </h4>
                                        </div>

                                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                            <div class="card-body">
                                                {{ $technicien->Interventions->count() }} Interventions pour ce
                                                technicien
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Intitulé</th>
                                                            <th>Lieux</th>
                                                            <th>Statut</th>
                                                            <th>Date Intervention</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($technicien->Interventions as $Interv)
                                                        <tr>
                                                            <td>{{ $Interv->Title }} <a
                                                                    href="{{route('intervention.show',$Interv->id)}}"><button
                                                                        type="button"
                                                                        class="btn btn-success">Détails</button></a>
                                                            </td>
                                                            <div style="display: none">
                                                                @switch($Interv->statut)
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
                                                            </div>
                                                            <td>
                                                                <button type="button" class="{{ $var2 }} mb-2">
                                                                    {{ $Interv->statut }} </button>
                                                            </td>
                                                            <td>{{ $Interv->Signalement->site->sit_geo}}</td>
                                                            <td>{{ $Interv->date_debut }}</td>


                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </td> --}}
                            </tr>
                            @endforeach


                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>E-mail</th>
                                <th>Poste occupé</th>
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
