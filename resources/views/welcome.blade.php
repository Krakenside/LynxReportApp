@extends('layouts.partials.main')
@section('content-pr')
    <!-- Dynamic Table Full -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title"> <small></small></h3>
        </div>
        {{-- <div class="block-content block-content-full">
          <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
          <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
            <thead>
              <tr>
                <th class="text-center" style="width: 80px;">ID</th>
                <th>Name</th>
                <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                <th style="width: 15%;">Registered</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center fs-sm">1</td>
                <td class="fw-semibold fs-sm">Jose Wagner</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client1<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">4 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">2</td>
                <td class="fw-semibold fs-sm">Lori Moore</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client2<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">4 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">3</td>
                <td class="fw-semibold fs-sm">Carol Ray</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client3<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">6 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">4</td>
                <td class="fw-semibold fs-sm">Jose Parker</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client4<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">10 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">5</td>
                <td class="fw-semibold fs-sm">Melissa Rice</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client5<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">9 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">6</td>
                <td class="fw-semibold fs-sm">Adam McCoy</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client6<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">9 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">7</td>
                <td class="fw-semibold fs-sm">Jose Mills</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client7<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">2 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">8</td>
                <td class="fw-semibold fs-sm">Wayne Garcia</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client8<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">6 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">9</td>
                <td class="fw-semibold fs-sm">Danielle Jones</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client9<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">9 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">10</td>
                <td class="fw-semibold fs-sm">Betty Kelley</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client10<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">9 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">11</td>
                <td class="fw-semibold fs-sm">Laura Carr</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client11<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">2 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">12</td>
                <td class="fw-semibold fs-sm">Alice Moore</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client12<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">7 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">13</td>
                <td class="fw-semibold fs-sm">Carl Wells</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client13<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">2 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">14</td>
                <td class="fw-semibold fs-sm">Wayne Garcia</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client14<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">6 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">15</td>
                <td class="fw-semibold fs-sm">Andrea Gardner</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client15<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">6 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">16</td>
                <td class="fw-semibold fs-sm">Ralph Murray</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client16<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">5 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">17</td>
                <td class="fw-semibold fs-sm">Adam McCoy</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client17<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">3 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">18</td>
                <td class="fw-semibold fs-sm">Andrea Gardner</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client18<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">7 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">19</td>
                <td class="fw-semibold fs-sm">Sara Fields</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client19<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">4 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">20</td>
                <td class="fw-semibold fs-sm">Jose Parker</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client20<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">10 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">21</td>
                <td class="fw-semibold fs-sm">Carol White</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client21<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">3 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">22</td>
                <td class="fw-semibold fs-sm">Amanda Powell</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client22<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">9 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">23</td>
                <td class="fw-semibold fs-sm">Jack Estrada</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client23<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">2 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">24</td>
                <td class="fw-semibold fs-sm">Scott Young</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client24<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">4 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">25</td>
                <td class="fw-semibold fs-sm">Helen Jacobs</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client25<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">9 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">26</td>
                <td class="fw-semibold fs-sm">Carol Ray</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client26<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">8 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">27</td>
                <td class="fw-semibold fs-sm">Thomas Riley</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client27<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">8 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">28</td>
                <td class="fw-semibold fs-sm">Lisa Jenkins</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client28<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">6 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">29</td>
                <td class="fw-semibold fs-sm">David Fuller</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client29<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">10 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">30</td>
                <td class="fw-semibold fs-sm">Justin Hunt</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client30<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">4 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">31</td>
                <td class="fw-semibold fs-sm">Danielle Jones</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client31<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">9 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">32</td>
                <td class="fw-semibold fs-sm">David Fuller</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client32<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">2 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">33</td>
                <td class="fw-semibold fs-sm">Henry Harrison</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client33<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">5 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">34</td>
                <td class="fw-semibold fs-sm">Jesse Fisher</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client34<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">6 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">35</td>
                <td class="fw-semibold fs-sm">Albert Ray</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client35<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">2 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">36</td>
                <td class="fw-semibold fs-sm">Helen Jacobs</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client36<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">8 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">37</td>
                <td class="fw-semibold fs-sm">Amber Harvey</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client37<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">8 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">38</td>
                <td class="fw-semibold fs-sm">Adam McCoy</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client38<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">2 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">39</td>
                <td class="fw-semibold fs-sm">Amber Harvey</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client39<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">7 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">40</td>
                <td class="fw-semibold fs-sm">Helen Jacobs</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client40<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">2 days ago</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div> --}}
    </div>
    <!-- END Dynamic Table Full -->

    <!-- Dynamic Table Full Pagination -->
    {{-- <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Dynamic Table <small>Full pagination</small></h3>
        </div>
        <div class="block-content block-content-full">
          <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
          <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
            <thead>
              <tr>
                <th class="text-center" style="width: 80px;">ID</th>
                <th>Name</th>
                <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                <th style="width: 15%;">Registered</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center fs-sm">1</td>
                <td class="fw-semibold fs-sm">Alice Moore</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client1<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">8 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">2</td>
                <td class="fw-semibold fs-sm">Megan Fuller</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client2<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">7 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">3</td>
                <td class="fw-semibold fs-sm">Megan Fuller</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client3<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">3 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">4</td>
                <td class="fw-semibold fs-sm">Carl Wells</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client4<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">4 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">5</td>
                <td class="fw-semibold fs-sm">Jeffrey Shaw</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client5<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">5 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">6</td>
                <td class="fw-semibold fs-sm">Carol Ray</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client6<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">6 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">7</td>
                <td class="fw-semibold fs-sm">Andrea Gardner</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client7<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">10 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">8</td>
                <td class="fw-semibold fs-sm">Jack Greene</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client8<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">10 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">9</td>
                <td class="fw-semibold fs-sm">Jose Parker</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client9<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">10 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">10</td>
                <td class="fw-semibold fs-sm">Melissa Rice</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client10<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">7 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">11</td>
                <td class="fw-semibold fs-sm">Barbara Scott</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client11<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">4 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">12</td>
                <td class="fw-semibold fs-sm">Alice Moore</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client12<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">10 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">13</td>
                <td class="fw-semibold fs-sm">Lori Moore</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client13<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">10 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">14</td>
                <td class="fw-semibold fs-sm">Jose Mills</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client14<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">10 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">15</td>
                <td class="fw-semibold fs-sm">Megan Fuller</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client15<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">2 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">16</td>
                <td class="fw-semibold fs-sm">Megan Fuller</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client16<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">4 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">17</td>
                <td class="fw-semibold fs-sm">Amber Harvey</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client17<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">6 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">18</td>
                <td class="fw-semibold fs-sm">Ryan Flores</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client18<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">6 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">19</td>
                <td class="fw-semibold fs-sm">Lori Moore</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client19<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">9 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">20</td>
                <td class="fw-semibold fs-sm">Andrea Gardner</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client20<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">6 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">21</td>
                <td class="fw-semibold fs-sm">Jose Mills</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client21<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">4 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">22</td>
                <td class="fw-semibold fs-sm">Justin Hunt</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client22<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">5 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">23</td>
                <td class="fw-semibold fs-sm">Andrea Gardner</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client23<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">3 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">24</td>
                <td class="fw-semibold fs-sm">Amanda Powell</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client24<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">9 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">25</td>
                <td class="fw-semibold fs-sm">Ryan Flores</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client25<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">5 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">26</td>
                <td class="fw-semibold fs-sm">Amber Harvey</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client26<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">10 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">27</td>
                <td class="fw-semibold fs-sm">Jose Wagner</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client27<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">9 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">28</td>
                <td class="fw-semibold fs-sm">Albert Ray</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client28<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">2 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">29</td>
                <td class="fw-semibold fs-sm">Danielle Jones</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client29<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">5 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">30</td>
                <td class="fw-semibold fs-sm">Thomas Riley</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client30<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">5 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">31</td>
                <td class="fw-semibold fs-sm">Amanda Powell</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client31<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">6 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">32</td>
                <td class="fw-semibold fs-sm">Albert Ray</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client32<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">9 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">33</td>
                <td class="fw-semibold fs-sm">Jose Parker</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client33<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">3 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">34</td>
                <td class="fw-semibold fs-sm">Jesse Fisher</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client34<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">6 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">35</td>
                <td class="fw-semibold fs-sm">Justin Hunt</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client35<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">8 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">36</td>
                <td class="fw-semibold fs-sm">Alice Moore</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client36<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">8 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">37</td>
                <td class="fw-semibold fs-sm">Sara Fields</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client37<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">6 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">38</td>
                <td class="fw-semibold fs-sm">Brian Cruz</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client38<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">10 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">39</td>
                <td class="fw-semibold fs-sm">Jack Greene</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client39<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">4 days ago</span>
                </td>
              </tr>
              <tr>
                <td class="text-center fs-sm">40</td>
                <td class="fw-semibold fs-sm">Jack Greene</td>
                <td class="d-none d-sm-table-cell fs-sm">
                  client40<span class="text-muted">@example.com</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td>
                  <span class="text-muted fs-sm">10 days ago</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div> --}}
    <!-- END Dynamic Table Full Pagination -->

    <!-- Dynamic Table Simple -->
    {{-- <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Dynamic Table <small>With only sorting and pagination</small></h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-simple class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-simple">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">ID</th>
                        <th>Name</th>
                        <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                        <th style="width: 15%;">Registered</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center fs-sm">1</td>
                        <td class="fw-semibold fs-sm">Susan Day</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client1<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">5 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">2</td>
                        <td class="fw-semibold fs-sm">Adam McCoy</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client2<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">3 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">3</td>
                        <td class="fw-semibold fs-sm">Danielle Jones</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client3<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">7 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">4</td>
                        <td class="fw-semibold fs-sm">Jose Mills</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client4<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">7 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">5</td>
                        <td class="fw-semibold fs-sm">Jose Wagner</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client5<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">2 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">6</td>
                        <td class="fw-semibold fs-sm">Adam McCoy</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client6<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">6 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">7</td>
                        <td class="fw-semibold fs-sm">Scott Young</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client7<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">3 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">8</td>
                        <td class="fw-semibold fs-sm">Jose Parker</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client8<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">10 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">9</td>
                        <td class="fw-semibold fs-sm">Wayne Garcia</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client9<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">5 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">10</td>
                        <td class="fw-semibold fs-sm">David Fuller</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client10<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">8 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">11</td>
                        <td class="fw-semibold fs-sm">Sara Fields</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client11<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">7 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">12</td>
                        <td class="fw-semibold fs-sm">Amanda Powell</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client12<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">6 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">13</td>
                        <td class="fw-semibold fs-sm">Amber Harvey</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client13<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">5 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">14</td>
                        <td class="fw-semibold fs-sm">Amanda Powell</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client14<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">10 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">15</td>
                        <td class="fw-semibold fs-sm">Scott Young</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client15<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">8 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">16</td>
                        <td class="fw-semibold fs-sm">Melissa Rice</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client16<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">3 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">17</td>
                        <td class="fw-semibold fs-sm">Jose Wagner</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client17<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">2 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">18</td>
                        <td class="fw-semibold fs-sm">Laura Carr</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client18<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">10 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">19</td>
                        <td class="fw-semibold fs-sm">Justin Hunt</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client19<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">4 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">20</td>
                        <td class="fw-semibold fs-sm">Jack Greene</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client20<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">3 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">21</td>
                        <td class="fw-semibold fs-sm">Barbara Scott</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client21<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">3 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">22</td>
                        <td class="fw-semibold fs-sm">Betty Kelley</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client22<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">5 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">23</td>
                        <td class="fw-semibold fs-sm">Lisa Jenkins</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client23<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">8 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">24</td>
                        <td class="fw-semibold fs-sm">Adam McCoy</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client24<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">5 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">25</td>
                        <td class="fw-semibold fs-sm">Lisa Jenkins</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client25<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">9 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">26</td>
                        <td class="fw-semibold fs-sm">Carl Wells</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client26<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">5 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">27</td>
                        <td class="fw-semibold fs-sm">Laura Carr</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client27<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">3 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">28</td>
                        <td class="fw-semibold fs-sm">Marie Duncan</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client28<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">8 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">29</td>
                        <td class="fw-semibold fs-sm">Amanda Powell</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client29<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">9 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">30</td>
                        <td class="fw-semibold fs-sm">Susan Day</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client30<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">2 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">31</td>
                        <td class="fw-semibold fs-sm">Thomas Riley</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client31<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">5 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">32</td>
                        <td class="fw-semibold fs-sm">Ralph Murray</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client32<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">5 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">33</td>
                        <td class="fw-semibold fs-sm">Brian Stevens</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client33<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">8 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">34</td>
                        <td class="fw-semibold fs-sm">Justin Hunt</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client34<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">8 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">35</td>
                        <td class="fw-semibold fs-sm">Susan Day</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client35<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">10 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">36</td>
                        <td class="fw-semibold fs-sm">Ralph Murray</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client36<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">3 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">37</td>
                        <td class="fw-semibold fs-sm">Jose Parker</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client37<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">9 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">38</td>
                        <td class="fw-semibold fs-sm">Sara Fields</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client38<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">3 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">39</td>
                        <td class="fw-semibold fs-sm">Lori Grant</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client39<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">4 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">40</td>
                        <td class="fw-semibold fs-sm">Jesse Fisher</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client40<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">2 days ago</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> --}}
    <!-- END Dynamic Table Simple -->

    <!-- Dynamic Table with Export Buttons -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Dynamic Table <small>Export Buttons</small></h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">ID</th>
                        <th>Name</th>
                        <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                        <th style="width: 15%;">Registered</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center fs-sm">1</td>
                        <td class="fw-semibold fs-sm">Brian Cruz</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client1<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">4 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">2</td>
                        <td class="fw-semibold fs-sm">Jose Wagner</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client2<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">8 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">3</td>
                        <td class="fw-semibold fs-sm">Jack Estrada</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client3<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">9 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">4</td>
                        <td class="fw-semibold fs-sm">Jesse Fisher</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client4<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">7 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">5</td>
                        <td class="fw-semibold fs-sm">Lori Moore</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client5<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">4 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">6</td>
                        <td class="fw-semibold fs-sm">Ryan Flores</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client6<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">6 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">7</td>
                        <td class="fw-semibold fs-sm">Ryan Flores</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client7<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">9 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">8</td>
                        <td class="fw-semibold fs-sm">Amanda Powell</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client8<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">2 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">9</td>
                        <td class="fw-semibold fs-sm">Thomas Riley</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client9<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">8 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">10</td>
                        <td class="fw-semibold fs-sm">Jack Greene</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client10<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">8 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">11</td>
                        <td class="fw-semibold fs-sm">Jose Parker</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client11<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">8 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">12</td>
                        <td class="fw-semibold fs-sm">Brian Cruz</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client12<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">5 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">13</td>
                        <td class="fw-semibold fs-sm">Jack Greene</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client13<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">6 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">14</td>
                        <td class="fw-semibold fs-sm">Carol Ray</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client14<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">6 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">15</td>
                        <td class="fw-semibold fs-sm">Jeffrey Shaw</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client15<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">9 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">16</td>
                        <td class="fw-semibold fs-sm">Justin Hunt</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client16<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">9 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">17</td>
                        <td class="fw-semibold fs-sm">Jeffrey Shaw</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client17<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">6 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">18</td>
                        <td class="fw-semibold fs-sm">Scott Young</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client18<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">6 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">19</td>
                        <td class="fw-semibold fs-sm">Lori Grant</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client19<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">3 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">20</td>
                        <td class="fw-semibold fs-sm">Marie Duncan</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client20<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">6 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">21</td>
                        <td class="fw-semibold fs-sm">Adam McCoy</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client21<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">8 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">22</td>
                        <td class="fw-semibold fs-sm">Henry Harrison</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client22<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">4 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">23</td>
                        <td class="fw-semibold fs-sm">Jose Wagner</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client23<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">5 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">24</td>
                        <td class="fw-semibold fs-sm">Susan Day</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client24<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">10 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">25</td>
                        <td class="fw-semibold fs-sm">Justin Hunt</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client25<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">5 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">26</td>
                        <td class="fw-semibold fs-sm">Marie Duncan</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client26<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">4 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">27</td>
                        <td class="fw-semibold fs-sm">Andrea Gardner</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client27<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">2 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">28</td>
                        <td class="fw-semibold fs-sm">Brian Cruz</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client28<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">2 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">29</td>
                        <td class="fw-semibold fs-sm">Barbara Scott</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client29<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">8 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">30</td>
                        <td class="fw-semibold fs-sm">Adam McCoy</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client30<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">3 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">31</td>
                        <td class="fw-semibold fs-sm">Jeffrey Shaw</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client31<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">3 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">32</td>
                        <td class="fw-semibold fs-sm">Brian Cruz</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client32<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">2 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">33</td>
                        <td class="fw-semibold fs-sm">Megan Fuller</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client33<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">3 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">34</td>
                        <td class="fw-semibold fs-sm">Ryan Flores</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client34<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">6 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">35</td>
                        <td class="fw-semibold fs-sm">Wayne Garcia</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client35<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">10 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">36</td>
                        <td class="fw-semibold fs-sm">Carol Ray</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client36<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">9 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">37</td>
                        <td class="fw-semibold fs-sm">Carol White</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client37<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">8 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">38</td>
                        <td class="fw-semibold fs-sm">Brian Stevens</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client38<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">8 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">39</td>
                        <td class="fw-semibold fs-sm">Justin Hunt</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client39<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">2 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">40</td>
                        <td class="fw-semibold fs-sm">Marie Duncan</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            client40<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">4 days ago</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table with Export Buttons -->

    <!-- Dynamic Table Responsive -->
    {{-- <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                Dynamic Table <small>DataTables Responsive Mode</small>
            </h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-responsive class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-responsive">
                <thead>
                    <tr>
                        <th class="text-center"></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th style="width: 15%;">Access</th>
                        <th style="width: 15%;">Registered</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center fs-sm">1</td>
                        <td class="fw-semibold fs-sm">Brian Stevens</td>
                        <td class="fs-sm">customer1@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">9 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">2</td>
                        <td class="fw-semibold fs-sm">Henry Harrison</td>
                        <td class="fs-sm">customer2@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">7 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">3</td>
                        <td class="fw-semibold fs-sm">Danielle Jones</td>
                        <td class="fs-sm">customer3@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">5 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">4</td>
                        <td class="fw-semibold fs-sm">Ralph Murray</td>
                        <td class="fs-sm">customer4@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">6 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">5</td>
                        <td class="fw-semibold fs-sm">Lisa Jenkins</td>
                        <td class="fs-sm">customer5@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">2 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">6</td>
                        <td class="fw-semibold fs-sm">Ralph Murray</td>
                        <td class="fs-sm">customer6@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">7 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">7</td>
                        <td class="fw-semibold fs-sm">David Fuller</td>
                        <td class="fs-sm">customer7@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">10 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">8</td>
                        <td class="fw-semibold fs-sm">Justin Hunt</td>
                        <td class="fs-sm">customer8@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">5 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">9</td>
                        <td class="fw-semibold fs-sm">Justin Hunt</td>
                        <td class="fs-sm">customer9@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">9 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">10</td>
                        <td class="fw-semibold fs-sm">Adam McCoy</td>
                        <td class="fs-sm">customer10@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">2 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">11</td>
                        <td class="fw-semibold fs-sm">Ryan Flores</td>
                        <td class="fs-sm">customer11@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">3 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">12</td>
                        <td class="fw-semibold fs-sm">Carol Ray</td>
                        <td class="fs-sm">customer12@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">10 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">13</td>
                        <td class="fw-semibold fs-sm">Amber Harvey</td>
                        <td class="fs-sm">customer13@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">7 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">14</td>
                        <td class="fw-semibold fs-sm">Andrea Gardner</td>
                        <td class="fs-sm">customer14@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">10 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">15</td>
                        <td class="fw-semibold fs-sm">David Fuller</td>
                        <td class="fs-sm">customer15@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">4 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">16</td>
                        <td class="fw-semibold fs-sm">Susan Day</td>
                        <td class="fs-sm">customer16@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">7 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">17</td>
                        <td class="fw-semibold fs-sm">Jack Estrada</td>
                        <td class="fs-sm">customer17@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">2 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">18</td>
                        <td class="fw-semibold fs-sm">Albert Ray</td>
                        <td class="fs-sm">customer18@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">8 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">19</td>
                        <td class="fw-semibold fs-sm">Ralph Murray</td>
                        <td class="fs-sm">customer19@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">2 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">20</td>
                        <td class="fw-semibold fs-sm">Amber Harvey</td>
                        <td class="fs-sm">customer20@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">4 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">21</td>
                        <td class="fw-semibold fs-sm">Henry Harrison</td>
                        <td class="fs-sm">customer21@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">6 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">22</td>
                        <td class="fw-semibold fs-sm">Brian Stevens</td>
                        <td class="fs-sm">customer22@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">4 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">23</td>
                        <td class="fw-semibold fs-sm">Lori Grant</td>
                        <td class="fs-sm">customer23@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">9 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">24</td>
                        <td class="fw-semibold fs-sm">Henry Harrison</td>
                        <td class="fs-sm">customer24@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">7 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">25</td>
                        <td class="fw-semibold fs-sm">Helen Jacobs</td>
                        <td class="fs-sm">customer25@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">9 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">26</td>
                        <td class="fw-semibold fs-sm">Melissa Rice</td>
                        <td class="fs-sm">customer26@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">5 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">27</td>
                        <td class="fw-semibold fs-sm">Marie Duncan</td>
                        <td class="fs-sm">customer27@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">8 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">28</td>
                        <td class="fw-semibold fs-sm">Jose Wagner</td>
                        <td class="fs-sm">customer28@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">8 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">29</td>
                        <td class="fw-semibold fs-sm">Adam McCoy</td>
                        <td class="fs-sm">customer29@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">5 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">30</td>
                        <td class="fw-semibold fs-sm">Lori Grant</td>
                        <td class="fs-sm">customer30@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">6 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">31</td>
                        <td class="fw-semibold fs-sm">Ralph Murray</td>
                        <td class="fs-sm">customer31@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">2 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">32</td>
                        <td class="fw-semibold fs-sm">Jack Greene</td>
                        <td class="fs-sm">customer32@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">2 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">33</td>
                        <td class="fw-semibold fs-sm">Laura Carr</td>
                        <td class="fs-sm">customer33@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">3 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">34</td>
                        <td class="fw-semibold fs-sm">Melissa Rice</td>
                        <td class="fs-sm">customer34@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">2 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">35</td>
                        <td class="fw-semibold fs-sm">Betty Kelley</td>
                        <td class="fs-sm">customer35@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">2 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">36</td>
                        <td class="fw-semibold fs-sm">Alice Moore</td>
                        <td class="fs-sm">customer36@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">2 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">37</td>
                        <td class="fw-semibold fs-sm">Susan Day</td>
                        <td class="fs-sm">customer37@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">7 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">38</td>
                        <td class="fw-semibold fs-sm">Jack Greene</td>
                        <td class="fs-sm">customer38@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">5 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">39</td>
                        <td class="fw-semibold fs-sm">Carol Ray</td>
                        <td class="fs-sm">customer39@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">9 days ago</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">40</td>
                        <td class="fw-semibold fs-sm">Lori Moore</td>
                        <td class="fs-sm">customer40@example.com</td>
                        <td>
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                        </td>
                        <td>
                            <span class="text-muted fs-sm">9 days ago</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> --}}
    <!-- Dynamic Table Responsive -->
@endsection
