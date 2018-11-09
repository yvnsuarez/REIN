@extends('layouts.PartnerCompany')

@section('content-header')
<div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Manage Requests</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content') <div class="content">
        <div class="animated fadeIn">
            <div class="row"> 
                <div class="col-lg-2">
                </div>
<div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Request Details</strong>
            <div class="card-body">
            {!! Form::open(['action' => ['Web\PartnerCompany\RequestsController@decline', $reports['ID']], 'method' =>'POST']) !!}
                        {{ csrf_field() }}
                        {{-- <div class="form-group">
                            <label>Partner</label>
                            <input type="disabled" class="form-control" name="partner" value="{{$reports->partner}}" readonly="true">
                        </div> --}}
                        <ul class="list-group list-group-flush">
                                <b class="text-center">Motorist Details</b>
                                    <li class="list-group-item">
                                        <b>Motorist: </b> {{$motorist->FirstName}} {{$motorist->LastName}}
                                            <br/>
                                        {{-- {{$motorist->FirstName}} {{$motorist->LastName}} --}}
                                    </li>
                                <b class="text-center">Car Details</b>
                                    <li class="list-group-item">
                                        <b>Plate Number: </b> {{$car->PlateNo}}
                                            <br/>
                                        <b>Car Type: </b> {{$car->CarType}}
                                            <br/>
                                        <b>Color: </b> {{$car->Color}}
                                            <br/>
                                        <b>Model: </b> {{$car->Model}}
                                            <br/>
                                        <b>Year Model: </b> {{$car->YearModel}}
                                            <br/>
                                        <b>Brand: </b> {{$car->Brand}}
                                            <br/>
                                        <b>Battery: </b> {{$car->Battery}}
                                            <br/>
                                        <b>Tire: </b> {{$car->Tire}}
                                            <br/>
                                    </li>
                                <b class="text-center">Service Details</b>
                                    <li class="list-group-item">
                                        <b>Service Type: </b>{{$reports->servicetype}}
                                            <br/>
                                        <b>Service Instruction: </b>{{$reports->instruction}}}
                                            <br/>
                                        <b>Service Image: </b>{{$reports->image}}}
                                            <br/>
                                        <b>Service Place: </b>{{$reports->Lat}}, {{$reports->Lon}}
                                            <br/>
                                    </li>
                            
                        </ul>
                        <br/>
                                <div class="pull-left">
                                    <a href="{{ route('partner.requests') }}" class="btn btn-warning btn-sm">Back</a>
                                </div>
                                <div class="pull-right">
                                <input type="button" value="Decline Request" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#Modal2"/>
                                <div>

                             <!-- Modal -->
                             <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Confirm Decline</h5>
                                                <button class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to decline the service request?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-secondary">Decline</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {!! Form::close() !!}

            </div>
        </div>
    </div>
<div class="col-lg-2">
    </div>
            </div>
@endsection