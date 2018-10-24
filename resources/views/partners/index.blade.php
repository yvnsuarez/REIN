@extends('layouts.Admin')

@section('content-header')
<div class="breadcrumbs-inner">
    <div class="row m-0">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Manage Partners</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-2">
            
    </div>
    <div class="col-lg-8">
            {!! Form::open(['method'=>'GET','url'=>'admin','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
                            
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" name="search" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default-sm" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
            {!! Form::close() !!}
    </div>
    <div class="col-lg-2">
    </div>
</div>
<br/>
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Partners</strong>

                            {{ link_to_route('partners.create', 'Register Partner', null, ['class'=>'fa fa-user-plus btn btn-primary pull-right'])}}
                        </div>
                        @if(count($users) > 0)
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th>Business Name</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>ZipCode</th>
                                        <th>Business Registration No</th>
                                        <th>LTFRB Accreditation No</th>
                                        <th>Contact No</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                @foreach($users as $user)
                                    <tr class="text-center">
                                        <td></td>
                                        <td>{{$user->BusinessName}}</td>
                                        <td>{{$user->Address}}</td>
                                        <td>{{$user->City}}</td>
                                        <td>{{$user->ZipCode}}</td>
                                        <td>{{$user->BusinessRegistrationNo}}</td>
                                        <td>{{$user->LTFRBRegistrationNo}}</td>
                                        <td>{{$user->MobileNo}}</td>
                                        <td>{{$user->Email}}</td>
                                        <td>{{$user->Status}}</td>
                                        <td>
                                                <div class="links">
                                                        <a href="/admin/partners/{{$user->id}}">
                                                                View
                                                        </a>
                                                </div>
                                                <div class="links">
                                                        <a href="/admin/partners/{{$user->id}}/edit">
                                                                Update
                                                        </a>
                                                </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- /.table-stats -->
                        @endif
                    </div>
                </div>
@endsection
