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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">User Activity No. {{$userlogs->ID}}</strong>
                            </div>
                          
                            <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><b>Causer: </b> {{$userlogs->UserID}}</li>
                                        <li class="list-group-item"><b>Type: </b>{{$userlogs->Type}}</li>
                                        <li class="list-group-item"><b>Description: </b>{{$userlogs->Description}}</li>
                                        <li class="list-group-item"><b>Target User: </b>{{$userlogs->TargetUser}}</li>
                                        <li class="list-group-item"><b>Transaction: </b>{{$userlogs->ReportsID}}</li>
                                        <li class="list-group-item"><b>Date: </b>{{$userlogs->Date}}</li>
                                </ul>
                                <div class="card-footer">
                                        <div class="pull-left">
                                            <a href="{{ url('/admin/useractivity') }}" class="btn btn-warning btn-sm">Back</a>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
@endsection