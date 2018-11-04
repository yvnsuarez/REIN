@extends('layouts.Admin')

@section('content-header')
<div class="breadcrumbs-inner">
    <div class="row m-0">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>All User Activities</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<br/>
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">User Activities</strong>
                            {{-- <a href="{{action('Web\Admin\TransactionLogsController@fullTransactionPDF')}}">
                                <button class="btn btn-outline-secondary btn-sm pull-right""><i class="fa fa-print"></i> Print</button>
                            </a> --}}
                        </div>
                        @if(count($userlogs) > 0)
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr class="text-center">
                                            <th>No.</th>
                                            <th>Causer</th>
                                            <th>Type</th>
                                            <th>Target User</th>
                                            <th>Report</th>
                                            <th>Payment</th>
                                            <th>Description</th>
                                            <th>Date</th>
                                            <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                @foreach($userlogs as $userlog)
                                    <tr class="text-center">
                                            <td></td>
                                            <td>{{$userlog->UserID}}</td>
                                            <td>{{$userlog->Type}}</td>
                                            <td>{{$userlog->TargetUser}}</td>
                                            <td>{{$userlog->ReportsID}}</td>
                                            <td>{{$userlog->PaymentsID}}</td>
                                            <td>{{$userlog->Description}}</td>
                                            <td>{{$userlog->Date}}</td>
                                            <td>
                                                {{-- MODAL FOR VIEWING OF REPORT --}}
                                                <div class="links">
                                                    <a href="/admin/useractivity/{{$userlog->ID}}">
                                                            <button class="fa fa-info btn btn-outline-secondary btn-sm" data-toggle="tooltip" title="View Activity"></button>
                                                        </a>
                                                    </div>
                                                </td>
                                            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Causer</th>
                                            <th>Type</th>
                                            <th>Target User</th>
                                            <th>Report</th>
                                            <th>Payment</th>
                                            <th>Description</th>
                                            <th>Date</th>
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
