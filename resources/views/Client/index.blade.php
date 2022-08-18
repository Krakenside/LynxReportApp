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
                <h3 class="block-title">Clients <small>Table</small></h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">ID</th>
                            <th>Nom </th>
                            <th class="d-none d-sm-table-cell" style="width: 30%;">Bureau</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Emplacement</th>
                            <th style="width: 15%;">Type entreprise</th>
                            <th style="width: 15%;">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clts as $clt)
                            <tr>
                                <td class="text-center fs-sm">{{ $clt->id }}</td>
                                <td class="fw-semibold fs-sm">{{ $clt->Societe_clt }}</td>
                                <td class="d-none d-sm-table-cell fs-sm">
                                    {{ $clt->Bureau_clt }}
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">{{ $clt->lieu_clt }}</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">{{ $clt->car_clt }}</span>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <form action="{{ url('/Client/edit/'.$clt->id) }}">
                                            <button type="submit"
                                                class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled"
                                                data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </button>
                                        </form>
                                        <form action="{{ url('/Client/delete/'.$clt->id) }}">
                                        <button type="submit" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled"
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
        <!-- END Dynamic Table Full -->

        <!-- Dynamic Table Full Pagination -->

        <!-- END Dynamic Table Full Pagination -->

        <!-- Dynamic Table Simple -->

        <!-- END Dynamic Table Simple -->

        <!-- Dynamic Table with Export Buttons -->



        <!-- Dynamic Table Responsive -->
    </div>
@endsection
