@extends('layouts.PartnerCompany')

@section('content-header')
    <h1>
        Company Name
        <small>Transactions</small>
    </h1>
@endsection

@section ('content')

<div class="row">
        <div class="col-xs-12">
            <div class="box box-warning">
                <div class="box-header">
                    <div class="row">
                        <div class="col-xs-2">
                          <span><i class="fa fa-book"></i></span>
                          <h3 class="box-title">Reports</h3>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped"> 
                        {{-- ^id="example1"  --}}
                        <thead>
                            <tr>
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
                                    <td>{{$report->DateRequested}}</td>
                                    <td>{{$report->DateUpdated}}</td>
                                    <td>
                                        {{-- MODAL FOR VIEWING OF REPORT --}}
                                        <div class="links">
                                            <a href="/reports/{{$report->id}}">
                                                    <button class="btn btn-warning">View</button>
                                                </a>
                                            </div>
                                        </td>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        
        @endsection

