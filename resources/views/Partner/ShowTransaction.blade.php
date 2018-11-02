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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Report No. {{$reports->ID}}</strong>
                                <a href="{{action('Web\PartnerCompany\TransactionLogsController@singleTransactionPDF', $reports->ID)}}">
                                        <button class="btn btn-outline-secondary btn-sm pull-right"><i class="fa fa-print"></i> Print</button>
                                    </a>
                            </div>
                          
                            <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><b>Partner: </b> {{$reports->partner}}</li>
                                        <li class="list-group-item"><b>Motorist: </b>{{$reports->motorist}}</li>
                                        <li class="list-group-item"><b>Assitant: </b>{{$reports->assistant}}</li>
                                        <li class="list-group-item"><b>Special Instruction: </b>{{$reports->instruction}}</li>
                                        <li class="list-group-item"><b>Service Type: </b>{{$reports->servicetype}}</li>
                                        <li class="list-group-item"><b>Image: </b>{{$reports->image}}</li>
                                        <li class="list-group-item"><b>Location: </b>{{$reports->Lat}}, {{$reports->Long}}</li>
                                        <li class="list-group-item"><b>Service Comment: </b>{{$reports->comment}}</li>
                                        <li class="list-group-item"><b>Additional Charge: </b>{{$reports->addcharge}}</li>
                                        <li class="list-group-item"><b>Total Service Price: </b>{{$reports->totalservice}}</li>
                                        <li class="list-group-item"><b>Service Status: </b>{{$reports->status}}</li>
                                        <li class="list-group-item"><b>Date Submitted: </b>{{$reports->DateSubmitted    }}</li>
                                        <li class="list-group-item"><b>Date Updated: </b>{{$reports->DateUpdated}}</li>
                                    
                                </ul>
                                <div class="card-footer">
                                        <div class="pull-left">
                                            <a href="{{ url('/partner/transactionlogs') }}" class="btn btn-warning btn-sm">Back</a>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
@endsection