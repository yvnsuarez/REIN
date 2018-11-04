@extends('layouts.PartnerCompany')

@section('content-header')
<div class="breadcrumbs-inner">
    <div class="row m-0">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>All Feedbacks</h1>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection

@section('content')
    <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                                <div class="card-header">
                                        <strong class="card-title">Assign Assistant</strong>
                          
                            <ul class="list-group list-group-flush">
                                <b class="text-center">Report Details</b>
                                        <li class="list-group-item">
                                            <b>Motorist: </b> {{$motorist->FirstName}} {{$motorist->LastName}}
                                                <br/>
                                                <br/>
                                            <b>Service Type: </b>{{$report->servicetype}}
                                                <br/>
                                            <b>Service Instruction: </b>{{$report->instruction}}
                                                <br/>
                                            <b>Service Place: </b>{{$report->Lat}}, {{$report->Lon}}
                                                <br/>
                                            <b>Total Service Charge: </b>{{$report->totalservice}}
                                                <br/>
                                                <br/>
                                            <b>Assistant: </b> {{$assistant->FirstName}} {{$assistant->LastName}}
                                                <br/>
                                            
                                        </li>
                                <b class="text-center">Feedback Details</b>
                                        <li class="list-group-item">
                                            <b>Review: </b>{{$feedbacks->review}}
                                                <br/>
                                            <b>Date Submitted: </b>{{$feedbacks->DateSubmitted}}
                                        </li>
                                    
                                </ul>
                            </br>
                                        <div class="pull-left">
                                            <a href="{{ url('/partner/feedbacks') }}" class="btn btn-warning btn-sm">Back</a>
                                        </div>

                        </div>
                    </div>
                    <div class="col-lg-2">
                        </div>
                    </div>
                </div>
@endsection