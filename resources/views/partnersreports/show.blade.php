@extends('layouts.Admin')

@section('content-header')
    <h1>
        Partners
        <small>Manage Partners</small>
    </h1>
@endsection

@section('content')
<div class="row">
        <div class="col-xs-12">
            <div class="box box-warning">
                <div class="box-header">
                    <div class="row">
                        <div class="col-xs-2">
                          <span><i class="fa fa-users"></i></span>
                          <h3 class="box-title">Partners</h3>
                        </div>
                    </div>
                </div>

                <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                
                                <div class="card mb-3">
                                    <h3 class="card-header">{{$user->BusinessName}}</h3>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><b>Address: </b> {{$user->Address}}</li>
                                        <li class="list-group-item"><b>City: </b>{{$user->City}}</li>
                                        <li class="list-group-item"><b>Zip Code: </b>{{$user->ZipCode}}</li>
                                        <li class="list-group-item"><b>Business Registration Number: </b>{{$user->BusinessRegistrationNo}}</li>
                                        <li class="list-group-item"><b>LTFRB Accreditation Number: </b>{{$user->LTFRBAccreditationNo}}</li>
                                        <li class="list-group-item"><b>Contact Number: </b>{{$user->ContactNo}}</li>
                                        <li class="list-group-item"><b>Email: </b>{{$user->Email}}</li>
                                        <li class="list-group-item"><b>Status: </b>{{$user->Status}}</li>
                                        <li class="list-group-item">  
                                            {{ link_to_route('partners.edit', 'Edit', [$user->id], ['class'=>'fa fa-user-plus btn btn-primary'])}} 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection