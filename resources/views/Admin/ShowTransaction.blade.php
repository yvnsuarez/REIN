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
                                        <strong class="card-title">Transaction No. {{$reports->ID}}</strong>
                                    <a href="{{action('Web\Admin\TransactionLogsController@singleTransactionPDF', $reports->ID)}}">
                                        <button class="btn btn-outline-secondary btn-sm pull-right"><i class="fa fa-print"></i> Print</button>
                                    </a>
                                </div>
                            <ul class="list-group list-group-flush">
                                @if ($reports->status === 'Accepted' || $reports->status === 'Assigned'
                                || $reports->status === 'Declined' || $reports->status === 'Done'
                                || $reports->status === 'Ongoing' || $reports->status === 'Sent Report')
                                <b class="text-center">Partner Company Details</b>
                                        <li class="list-group-item">
                                            <b>Business Name: </b> {{$partner->BusinessName}}<br/>
                                            <b>Address: </b> {{$partner->Address}} {{$partner->City}} {{$partner->ZipCode}}<br/>
                                            <b>Email: </b> {{$partner->Email}}<br/>
                                            <b>Contact No: </b> {{$partner->MobileNo}} <br/>
                                        </li>
                            @endif
                                <b class="text-center">Transaction Details</b>
                                        <li class="list-group-item">
                                            <b>Motorist: </b> {{$motorist->FirstName}} {{$motorist->LastName}}<br/>
                                            <b>Contact No: </b> {{$motorist->MobileNo}}
                                            <b>Email: </b> {{$motorist->Email}}<br/>
                                                <br/>
                                                <br/>
                                            <b>Car Details: </b><br/>
                                            <b>Plate No: </b>{{$car->PlateNo}}<br/>
                                            <b>Type: </b>{{$car->CarType}}<br/>
                                            <b>Brand: </b>{{$car->Brand}}<br/>
                                            <b>Model: </b>{{$car->YearModel}} {{$car->Model}}<br/>
                                            <b>Color: </b>{{$car->Color}}
                                                <br/>
                                                <br/>
                                            <b>Service Type: </b>{{$reports->servicetype}}<br/>
                                            <b>Service Instruction: </b>{{$reports->instruction}}<br/>
                                            <b>Service Place: </b>{{$reports->Lat}}, {{$reports->Lon}}<br/>
                                            <b>Total Service Charge: </b>{{$reports->totalservice}}
                            @if ($reports->status === 'Assigned' OR $reports->status === 'Ongoing' OR $reports->status === 'Done' OR $reports->status === 'Sent Report')
                                                <br/>
                                                <br/>
                                            <b>Assistant Details: </b> {{$assistant->FirstName}} {{$assistant->LastName}}<br/>
                                            <b>Contact No: </b> {{$assistant->MobileNo}}<br/>
                                            <b>Email: </b> {{$assistant->Email}}<br/>
                                        </li>
                            @endif
                            @if ($reports->status === 'Done')
                                <b class="text-center">Payment Details</b>
                                        <li class="list-group-item">
                                            <b>Type: </b>{{$payment->PaymentType}}
                                                <br/>
                                            <b>Status: </b>{{$payment->Status}}
                                                <br/>
                                            <b>Date: </b>{{$payment->DatePaid}}
                                        </li>
                            @endif
                                </ul>
                                    <div class="card-footer">
                                        <div class="pull-left">
                                        <a href="{{ url('/admin/transactionlogs') }}" class="btn btn-warning btn-sm">Back</a>
                                        </div>
                                        </div>

                        </div>
                    </div>
                    <div class="col-lg-2">
                        </div>
                    </div>
                </div>
@endsection