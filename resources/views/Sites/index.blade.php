@extends('layouts.admin')

@section('title', 'Clients')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Liste des Sites d'interventions de LYNX NETWORK</h3>
                    <button type="button" class="btn btn-block bg-gradient-success">
                        <a href="{{ route('Sites.create') }}">Enregistrer un nouveau site</a>
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
                                <th>Nom du site</th>
                                <th>Situation géographique</th>
                                <th>Nom responsable </th>
                                <th>Contact responsable</th>
                                <th>Client</th>
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
