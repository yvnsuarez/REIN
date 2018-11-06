@extends('layouts.PartnerCompany')

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
                                        <strong class="card-title">Assistant Details</strong>
                                </div>
                            <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <b>Name: </b> {{$user->FirstName}} {{$user->LastName}}
                                                <br/>
                                            <b>Address: </b>{{$user->Address}} {{$user->City}} {{$user->ZipCode}}
                                                <br/>
                                            <b>Contact No: </b>{{$user->MobileNo}}
                                                <br/>
                                            <b>Email: </b>{{$user->email}}
                                                <br/>
                                            <b>Birthday: </b>{{$user->BirthDay}}                                         
                                        </li>
                                <b class="text-center">Statuses</b>
                                        <li class="list-group-item">
                                            <b>Status: </b> {{$user->Status}}
                                                <br/>
                                            <b>Assign Status: </b> {{$user->AssignStatus}}
                                        </li>
                                    
                                </ul>
                            <br/>
                                        <div class="pull-left">
                                            <a href="{{ route('assistants.index') }}" class="btn btn-warning btn-sm">Back</a>
                                        </div>

                        </div>
                    </div>
                    <div class="col-lg-2">
                        </div>
                    </div>
                </div>
@endsection