@extends('layouts.Admin')

@section('content-header')
<div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>View Information</h1>
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
                                        <strong class="card-title">Motorist Details</strong>
                                        {{ link_to_route('motorists.edit', 'Suspend Motorist', [$user->id], ['class'=>'fa fa-user-plus btn btn-outline-secondary btn-sm pull-right'])}} 
                                </div>
                                <ul class="list-group list-group-flush">
                                <b class="text-center">Personal Information</b>
                                        <li class="list-group-item">
                                            <b>Motorist: </b> {{$user->FirstName}} {{$user->LastName}}<br/>
                                            <b>Address: </b> {{$user->Address}} {{$user->City}} {{$user->ZipCode}}
                                            <b>Contact No: </b> {{$user->MobileNo}}
                                            <b>Email: </b> {{$user->email}}
                                        </li>
                                 <b class="text-center">Car Information</b>
                                        <li class="list-group-item">
                                            <b>Plate No: </b>{{$car->PlateNo}}<br/>
                                            <b>Type: </b>{{$car->CarType}}<br/>
                                            <b>Brand: </b>{{$car->Brand}}<br/>
                                            <b>Model: </b>{{$car->YearModel}} {{$car->Model}}<br/>
                                            <b>Color: </b>{{$car->Color}}
                                        </li>
                                <b class="text-center">Status</b>
                                        <li class="list-group-item">
                                            {{$user->Status}}
                                        </li>
                                </ul>
                                <b class="text-center">Service Cancellation</b>
                                        <li class="list-group-item">
                                            <b>Number of Cancellation: {{$cancellation}}</b>  
                                        </li>
                                </ul>
                                    <div class="card-footer">
                                        <div class="pull-left">
                                        <a href="{{ route('motorists.index') }}" class="btn btn-warning btn-sm">Back</a>
                                        </div>
                                        </div>

                        </div>
                    </div>
                    <div class="col-lg-2">
                        </div>
                    </div>
                </div>
@endsection