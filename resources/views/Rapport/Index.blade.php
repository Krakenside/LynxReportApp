@extends('layouts.partials.main')
@section('content-pr')
@if ($msg != NULL)
{{ $msg }}
@else
{{ 'no message' }}
@endif

<div class="content">

    {{-- <input type="datetime" name="" id=""> --}}
    <!-- Dynamic Table Full -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Table <small>Rapports</small></h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">ID</th>
                        <th>Client </th>
                        <th class="d-none d-sm-table-cell" style="width: 30%;">Date</th>

                        <th style="width: 15%;">Intitulé</th>
                        <th style="width: 15%;">Actions</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($allRaps as $Rap)
                    {{-- {{dd($Rap->client())}} --}}



                    <tr>
                        <td class="text-center fs-sm">{{ $Rap->id }}</td>
                        <td class="fw-semibold fs-sm">{{ $Rap->Client->Societe_clt }}</td>
                        <td class="fw-semibold fs-sm">{{ $Rap->Date_rap }}</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            {{ $Rap->Intitule_rap }}
                        </td>


                        <td>
                            <div class="btn-group">
                                <form action="{{ url('/Technicien/Edit/' . $Rap->id) }}">
                                    <button type="submit" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </button>
                                </form>
                                <form action="{{ url('/Technicien/Edit/' . $Rap->id) }}">
                                    <button type="submit" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete">
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
