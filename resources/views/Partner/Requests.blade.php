@extends('layouts.PartnerCompany')

@section('content-header')
<div class="breadcrumbs-inner">
    <div class="row m-0">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>All Requests</h1>
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
                                <strong class="card-title">Feedbacks</strong>
                            </div>
                            <div class="card-body">
                            <?php $i = 1; ?>
                            @if(count($reports) > 0)
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th class="serial">No.</th>
                                            <th>Motorist</th>
                                            <th>Instruction</th>
                                            <th>Service Type</th>
                                            <th>Service Status</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($reports as $report)
                                        <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{$report->userID}}</td>
                                        <td>{{$report->instruction}}</td>
                                        <td>{{$report->servicetype}}</td>
                                        <td>{{$report->status}}</td>
                                        @if($report->status == "Pending")
                                        <td>
                                            <a href="requests/{{$report->ID}}/accept" class="btn btn-outline-success btn-sm fas fa fa-check-circle" data-toggle="tooltip" title="Accept Request"> Accept</a>
                                                <br/>
                                                <br/>
                                            <a href="requests/{{$report->ID}}/decline" class="btn btn-outline-danger btn-sm fa fa-times-circle" data-toggle="tooltip" title="Decline Request"> Decline</a>
                                        </td>
                                        @elseif($report->status == "Accepted") 
                                        <td><a href="requests/{{$report->ID}}/assign" class="btn btn-outline-success btn-sm fa fa-user-circle" data-toggle="tooltip" title="Assign Request"> Assign</a></td>
                                        @else
                                        @endif
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
                                            <th>Instruction</th>
                                            <th>Service Type</th>
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
