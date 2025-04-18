@extends('layouts.admin')

@section('title', 'Clients')

@section('content')
<div class="container-fluid">
    <div class="row">
        @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <div class="col-12">
            <div class="card">
                <button type="button" class="btn btn-primary mb-2"> <a href="{{route('Client.create')}}">Créer un
                        nouveau client</a></button>
                <div class="card-header">

                    <h3 class="card-title">Liste des clients de LYNX NETWORK</h3>
                    {{-- <button type="button" class="btn btn-primary mb-2"> <a href="{{route('Client.create')}}">Créer
                            un
                            nouveau client</a></button> --}}
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
                                <th>Désignation</th>
                                <th>Type</th>
                                <th>Adresse </th>
                                <th>Contact</th>
                                <th>E-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                            <tr>
                                <td>{{ $client->designation }}</td>
                                <td> {{ $client->type }} </td>
                                <td> {{ $client->adresse }} </td>
                                <td> {{ $client->telephone }} </td>
                                <td>{{ $client->adr_mail }} </td>
                            </tr>
                            @endforeach


                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Désignation</th>
                                <th>Type</th>
                                <th>Adresse </th>
                                <th>Contact</th>
                                <th>E-mail</th>
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
