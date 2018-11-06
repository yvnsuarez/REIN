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
                            <strong class="card-title">Requests</strong>
                        </div>
                        <?php $i = 1; ?>
                        @if(count($reports) > 0)
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr class="text-center">
                                            <th class="serial">#</th>
                                            <th>Motorist</th>
                                            <th>Instruction</th>
                                            <th>Service Type</th>
                                            <th>Service Status</th>
                                            <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    @foreach($reports as $report)
                                    <tr class="text-center">
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
                        </div> <!-- /.table-stats -->
                        @else
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                            <th class="serial">#</th>
                                            <th>Motorist</th>
                                            <th>Instruction</th>
                                            <th>Service Type</th>
                                            <th>Service Status</th>
                                            <th>ACTION</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="text-center">
                                <p>No records found.</p>
                            </div>
                    </div> <!-- /.table-stats -->
                        @endif
                    </div>
                </div>
@endsection
