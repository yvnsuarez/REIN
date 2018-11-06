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
                                        <strong class="card-title">Partner Company Details</strong>
                                </div>
                            <ul class="list-group list-group-flush">
                                    <b class="text-center">Business Information</b>
                                        <li class="list-group-item">
                                            <b>Business Name: </b> {{$user->BusinessName}}
                                                <br/>
                                            <b>Address: </b>{{$user->Address}} {{$user->City}} {{$user->ZipCode}}
                                                <br/>
                                            <b>Contact No: </b>{{$user->MobileNo}}
                                                <br/>
                                            <b>Email: </b>{{$user->email}}
                                                <br/>                                      
                                        </li>
                                    <b class="text-center">Business Requirements Details</b>
                                        <li class="list-group-item">
                                            <b>Business Registration Number: </b>{{$user->BusinessRegistrationNo}}
                                                <br/> 
                                            <b>LTFRB Accreditation Number: </b>{{$user->LTFRBAccreditationNo}}
                                                <br/>                                        
                                        </li>
                                    <b class="text-center">Account Status</b>
                                        <li class="list-group-item">
                                            {{$user->Status}}
                                                <br/>                                        
                                        </li>
                                </ul>
                            <br/>
                                        <div class="pull-left">
                                            <a href="{{ route('partners.index') }}" class="btn btn-warning btn-sm">Back</a>
                                        </div>

                        </div>
                    </div>
                    <div class="col-lg-2">
                        </div>
                    </div>
                </div>

@endsection