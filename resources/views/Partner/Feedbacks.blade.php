@extends('layouts.PartnerCompany')

@section('content-header')
    <h1>
        Feedbacks
        <small>View Feedbacks</small>
    </h1>
@endsection

@section ('content')

<div class="row">
        <div class="col-xs-12">
            <div class="box box-warning">
                <div class="box-header">
                    <div class="row">
                        <div class="col-xs-2">
                          <span><i class="fa fa-bullhorn"></i></span>
                          <h3 class="box-title">Feedbacks</h3>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped"> 
                        {{-- ^id="example1"  --}}
                        <thead>
                            <tr>
                                    <th>#</th>
                                    <th>Report ID</th>
                                    <th>Complaint</th>
                                    <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($feedbacks as $feedback)
                                <tr class="text-center">
                                    <td></td>
                                    <td>{{$feedback->ReportId}}</td>
                                    <td>{{$feedback->Feedback}}</td>
                                    <td>{{$feedback->DateSubmitted}}</td>
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
