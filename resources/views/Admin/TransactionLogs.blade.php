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
<br/>
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Transactions</strong>
                            {{-- <a href="{{action('Web\Admin\TransactionLogsController@fullTransactionPDF')}}">
                                <button class="btn btn-outline-secondary btn-sm pull-right""><i class="fa fa-print"></i> Print</button>
                            </a> --}}
                        </div>
                        <?php $i = 1; ?>
                        @if(count($reports) > 0)
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr class="text-center">
                                            <th class="serial">#</th>
                                            <th>Motorist</th>
                                            <th>Service Type</th>
                                            <th>Total Service Price</th>
                                            <th>Service Status</th>
                                            <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                @foreach($reports as $report)
                                    <tr class="text-center">
                                            <td>{{ $i++ }}</td>
                                            <td>{{$report->userID}}</td>
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
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr class="text-center">
                                                <th class="serial">#</th>
                                                <th>Motorist</th>
                                                <th>Service Type</th>
                                                <th>Total Service Price</th>
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
