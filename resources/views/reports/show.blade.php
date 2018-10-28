@extends('layouts.PartnerCompany')

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
                                    <h3 class="card-header">{{$reports->ID}}</h3>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><b>Patner: </b> {{$reports->Address}}</li>
                                        <li class="list-group-item"><b>Assistant: </b>{{$reports->City}}</li>
                                        <li class="list-group-item"><b>Motorist: </b>{{$reports->ZipCode}}</li>
                                        <li class="list-group-item"><b>Special Instruction: </b>{{$reports->BusinessRegistrationNo}}</li>
                                        <li class="list-group-item"><b>: </b>{{$reports->LTFRBAccreditationNo}}</li>
                                        <li class="list-group-item"><b>Contact Number: </b>{{$reports->ContactNo}}</li>
                                        <li class="list-group-item"><b>Email: </b>{{$reports->Email}}</li>
                                        <li class="list-group-item"><b>Status: </b>{{$reports->Status}}</li>
                                        <li class="list-group-item">  

                                            {{ link_to_route('partners.edit', 'Edit', [$reports->id], ['class'=>'fa fa-user-plus btn btn-primary'])}} 
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

@extends('layouts.PartnerCompany')

@section('content-header')
<div class="breadcrumbs-inner">
    <div class="row m-0">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>All Requests</h1>
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
                        </div>
                    </div>
                </div>
@endsection