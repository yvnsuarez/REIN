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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Insert Motorist Name</strong>
                                {{ link_to_route('motorists.edit', 'Suspend Motorist', [$user->id], ['class'=>'fa fa-user-plus btn btn-outline-secondary btn-sm pull-right'])}} 
                            </div>
                          
                            <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><b>Mobile Number: </b> {{$user->MobileNo}}</li>
                                        <li class="list-group-item"><b>Birthday: </b>{{$user->Birthday}}</li>
                                        <li class="list-group-item"><b>Address: </b>{{$user->Address}}</li>
                                        <li class="list-group-item"><b>City: </b>{{$user->City}}</li>
                                        <li class="list-group-item"><b>Zip Code: </b>{{$user->zipCode}}</li>
                                        <li class="list-group-item"><b>Contact Number: </b>{{$user->Email}}</li> 
                            </ul>
                            <div class="card-footer">
                                <div class="pull-left">
                                    <a href="{{ route('motorists.index') }}" class="btn btn-warning btn-sm">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection