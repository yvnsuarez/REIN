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
<div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-8">
            <div class="card">
                                <div class="card-header">
                                        <strong class="card-title">User Activity No. {{$userlogs->ID}}</strong>
                                </div>
                            <ul class="list-group list-group-flush">
                                <b class="text-center">Causer Details</b>
                                        <li class="list-group-item">
                                        @if ($causer->FirstName != null OR $causer->FirstName != null)
                                            <b>Full Name: </b> {{$causer->FirstName}} {{$causer->LastName}}<br/>
                                        @elseif ($causer->BusinessName != null)
                                            <b>Business Name: </b> {{$causer->BusinessName}}<br/>
                                        @endif
                                            <b>Address: </b> {{$causer->Address}} {{$causer->City}} {{$causer->ZipCode}}<br/>
                                            <b>Email: </b> {{$causer->Email}}<br/>
                                            <b>Contact No: </b> {{$causer->MobileNo}} <br/>
                                        </li>
                                <b class="text-center">Activity Details</b>
                                        <li class="list-group-item">
                                            <b>Type: </b> {{$userlogs->Type}}<br/>
                                            <b>Description: </b> {{$userlogs->Description}}<br/>
                                            <b>Date: </b>{{$userlogs->Date}}<br/>
                                        </li>
                                @if ($userlogs->TargetUser != null)
                                <b class="text-center">Target User Details</b>
                                <li class="list-group-item">
                                        @if ($targetuser->FirstName != null OR $targetuser->FirstName != null)
                                            <b>Full Name: </b> {{$targetuser->FirstName}} {{$targetuser->LastName}}<br/>
                                        @elseif ($targetuser->BusinessName != null)
                                            <b>Business Name: </b> {{$targetuser->BusinessName}}<br/>
                                        @endif
                                            <b>Address: </b> {{$targetuser->Address}} {{$targetuser->City}} {{$targetuser->ZipCode}}<br/>
                                            <b>Email: </b> {{$targetuser->Email}}<br/>
                                            <b>Contact No: </b> {{$targetuser->MobileNo}} <br/>
                                        </li>
                                @endif
                                @if ($userlogs->ReportsID != null)
                                <b class="text-center">Transaction Details</b>
                                        <li class="list-group-item">
                                            <b>Service Type: </b> {{$report->servicetype}}<br/>
                                            <b>Status: </b> {{$report->status}}<br/>
                                        </li>
                                @endif
                                @if ($userlogs->PaymentsID != null)
                                <b class="text-center">Payment Details</b>
                                        <li class="list-group-item">
                                            <b>Service Fee: </b> {{$report->totalservice}}<br/>
                                            <b>Type: </b> {{$payment->PaymentType}}<br/>
                                            <b>Status: </b> {{$payment->Status}}<br/>
                                        </li>
                                @endif
                                </ul>
                                    <div class="card-footer">
                                        <div class="pull-left">
                                        <a href="{{ url('/admin/useractivity') }}" class="btn btn-warning btn-sm">Back</a>
                                        </div>
                                        </div>

                        </div>
                    </div>
                    <div class="col-lg-2">
                        </div>
                    </div>
                </div>
                                        <!-- <li class="list-group-item"><b>Target User: </b>{{$userlogs->TargetUser}}</li>
                                        <li class="list-group-item"><b>Transaction: </b>{{$userlogs->ReportsID}}</li>
                                        <li class="list-group-item"><b>Date: </b>{{$userlogs->Date}}</li> -->

                
@endsection