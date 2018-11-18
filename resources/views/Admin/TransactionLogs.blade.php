@extends('layouts.Admin')

@section('content-header')
<div class="breadcrumbs-inner">
    <div class="row m-0">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>All Transactions</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="animated fadeIn">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Transactions</strong>
                            </div>
                            <div class="card-body">
                            <?php $i = 1; ?>
                            @if(count($reports) > 0)
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="serial">No.</th>
                                            <th>Motorist</th>
                                            <th>Service Type</th>
                                            <th>Total Service Price</th>
                                            <th>Service Status</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($reports as $report)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{$report->user->FirstName}} {{$report->user->LastName}}</td>
                                            <td>{{$report->servicetype}}</td>
                                            <td>{{$report->totalservice}}</td>
                                            <td>{{$report->status}}</td>
                                            <td>
                                                {{-- MODAL FOR VIEWING OF REPORT --}}
                                                <div class="links">
                                                    <a href="/admin/transactionlogs/{{$report->ID}}">
                                                            <button class="fa fa-info btn btn-outline-secondary btn-sm" data-toggle="tooltip" title="View Transaction"></button>
                                                        </a>
                                                    </div>
                                                </td>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @else
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="serial">No.</th>
                                                <th>Motorist</th>
                                                <th>Service Type</th>
                                                <th>Total Service Price</th>
                                                <th>Service Status</th>
                                                <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                </table>
                              @endif
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>


@endsection
