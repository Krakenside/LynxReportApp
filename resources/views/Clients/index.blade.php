@extends('layouts.admin')

@section('title', 'Clients')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Liste des clients de LYNX NETWORK</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
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
