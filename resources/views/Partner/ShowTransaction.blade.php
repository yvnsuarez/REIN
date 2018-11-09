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
<div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                                <div class="card-header">
                                        <strong class="card-title">Transaction No. {{$reports->ID}}</strong>
                                    @if ($reports->status === 'Done')
                                    <a href="{{action('Web\PartnerCompany\TransactionLogsController@singleTransactionPDF', $reports->ID)}}">
                                        <button class="btn btn-outline-secondary btn-sm pull-right"><i class="fa fa-print"></i> Print</button>
                                    </a>
                                    @endif
                                </div>
                            <ul class="list-group list-group-flush">
                                <b class="text-center">Transaction Details</b>
                                        <li class="list-group-item">
                                            <b>Motorist: </b> {{$motorist->FirstName}} {{$motorist->LastName}}<br/>
                                            <b>Address: </b> {{$motorist->Address}} {{$motorist->City}} {{$motorist->ZipCode}}
                                            <b>Contact No: </b> {{$motorist->MobileNo}}
                                            <b>Email: </b> {{$motorist->Email}}
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
                                                <br/>
                                                <br/>
                                            @if ($reports->status === 'Done' OR $reports->status === 'Assigned' OR $reports->status === 'Ongoing' OR $reports->status === 'Sent Report')
                                            <b>Assistant Details: </b> {{$assistant->FirstName}} {{$assistant->LastName}}<br/>
                                            <b>Address: </b> {{$assistant->Address}} {{$assistant->City}} {{$assistant->ZipCode}}
                                            <b>Contact No: </b> {{$assistant->MobileNo}}
                                            <b>Email: </b> {{$assistant->Email}}
                                            @endif
                                        </li>
                            
                                @if ($reports->status === 'Done')
                                <b class="text-center">Payment Details</b>
                                        <li class="list-group-item">
                                            <b>Type: </b>{{$payment->PaymentType}}
                                                <br/>
                                            <b>Status: </b>{{$payment->Status}}
                                                <br/>
                                            <b>Date: </b>{{$payment->DatePaid}}
                                        </li>
                                    <br/>
                                @endif

                                </ul>
                                    <div class="card-footer">
                                        <div class="pull-left">
                                            <a href="{{ url('/partner/transactionlogs') }}" class="btn btn-warning btn-sm">Back</a>
                                        </div>
                                        </div>

                        </div>
                    </div>
                    <div class="col-lg-2">
                        </div>
                    </div>
                </div>
@endsection