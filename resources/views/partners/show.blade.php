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
                            <strong class="card-title">Insert Business Name</strong>
                        </div>
                      
                        <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Address: </b> {{$user->Address}}</li>
                                <li class="list-group-item"><b>City: </b>{{$user->City}}</li>
                                <li class="list-group-item"><b>Zip Code: </b>{{$user->ZipCode}}</li>
                                <li class="list-group-item"><b>Business Registration Number: </b>{{$user->BusinessRegistrationNo}}</li>
                                <li class="list-group-item"><b>LTFRB Accreditation Number: </b>{{$user->LTFRBAccreditationNo}}</li>
                                <li class="list-group-item"><b>Contact Number: </b>{{$user->ContactNo}}</li>
                                <li class="list-group-item"><b>Email: </b>{{$user->Email}}</li>
                                <li class="list-group-item"><b>Status: </b>{{$user->Status}}</li>
                            </ul>
                    </div>
                </div>
            </div>
@endsection