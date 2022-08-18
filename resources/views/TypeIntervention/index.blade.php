@extends('layouts.partials.main')
@section('content-pr')
    @if ($msg)
        {{ $msg }}
    @else
        {{ 'no message' }}
    @endif

    <div class="content">
        <!-- Dynamic Table Full -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Type <small>Table</small></h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">ID</th>
                            <th>Libelle </th>

                            <th style="width: 15%;">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($TypeInt as $Int)
                            <tr>
                                <td class="text-center fs-sm">{{ $Int->id }}</td>
                                <td class="fw-semibold fs-sm">{{ $Int->Libelle_Intervention }}</td>

                                <td>
                                    <div class="btn-group">
                                        <form action="{{ url('/TypeIntervention/Edit/' . $Int->id) }}">
                                            <button type="submit"
                                                class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled"
                                                data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </button>
                                        </form>
                                        <form action="{{ url('/TypeIntervention/Edit/' . $Int->id) }}">
                                            <button type="submit"
                                                class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled"
                                                data-bs-toggle="tooltip" title="" data-bs-original-title="Delete">
                                                <i class="fa fa-fw fa-times"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>

                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
