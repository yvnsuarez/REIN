@extends('layouts.PartnerCompany')

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
{{-- <div class="row">
    <div class="col-lg-2">
            
    </div>
    <div class="col-lg-8">
            {!! Form::open(['method'=>'GET','url'=>'admin','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
                            
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" name="search" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default-sm" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
            {!! Form::close() !!}
    </div>
    <div class="col-lg-2">
    </div>
</div> --}}
<br/>
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Transactions</strong>
                        </div>
                        @if(count($reports) == 0)
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                            <th>Partner</th>
                                            <th>Motorist</th>
                                            <th>Assistant</th>
                                            <th>Instruction</th>
                                            <th>Service Type</th>
                                            <th>Image</th>
                                            <th>Location</th>
                                            <th>Service Status</th>
                                            <th>Service Comment</th>
                                            <th>Additional Charge</th>
                                            <th>Total Service Price</th>
                                            <th>Date Requested</th>
                                            <th>Date Updated</th>
                                            <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                @foreach($reports as $report)
                                    <tr class="text-center">
                                            <td>{{$report->Partner}}</td>
                                            <td>{{$report->Motorist}}</td>
                                            <td>{{$report->Assistant}}</td>
                                            <td>{{$report->Instruction}}</td>
                                            <td>{{$report->ServiceType}}</td>
                                            <td>{{$report->Image}}</td>
                                            <td>{{$report->Location}}</td>
                                            <td>{{$report->ServiceStatus}}</td>
                                            <td>{{$report->ServiceComment}}</td>
                                            <td>{{$report->AdditionalCharge}}</td>
                                            <td>{{$report->TotalServicePrice}}</td>
                                            <td>{{$report->DateSubmitted}}</td>
                                            <td>{{$report->DateUpdated}}</td>
                                            <td>
                                                {{-- MODAL FOR VIEWING OF REPORT --}}
                                                <div class="links">
                                                    <a href="/admin/reports/{{$report->id}}">
                                                            <button class="btn btn-warning">View</button>
                                                        </a>
                                                    </div>
                                                </td>
                                            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- /.table-stats -->
                        @endif
                    </div>
                </div>
@endsection
