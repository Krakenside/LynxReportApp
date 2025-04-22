@extends('layouts.admin')

@section('title', 'Signalement')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> Liste des signalements </h3>
                    <button type="button" class="btn btn-block bg-gradient-success">
                        <a href="{{ route('signalement.create') }}">Enregistrer un nouveau signalement</a>
                    </button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">


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
                                <th>Client</th>
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
                                <td> {{ $dec->client->designation }} </td>

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
                                <th>Client</th>
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
