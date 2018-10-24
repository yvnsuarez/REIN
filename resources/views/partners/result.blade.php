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

                        <div class="col-xs-7">
                                <form action="/admin/search" method="POST" role="search">
                                    @csrf
                                    <label class="top-level-menu-right">
                                    <ul>
                                        <li style="position: relative;">
                                        <form>
                                            <input type="text" name="q" id="search" placeholder="Search">
                                            <a href="#" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></a>
                                        </form>
                                        </li>
                                    </ul>
                                    </label>    
                                </form>
                        </div>   


                        <div class="col-xs-3">
                                {{ link_to_route('partners.create', ' Register Partner Company', null, ['class'=>'fa fa-user-plus btn btn-primary'])}}
                        </div> 
                    </div>
                </div>

                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif 
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped"> 
                        {{-- ^id="example1"  --}}
                        <thead>
                            <tr>
                                    <th>Business Name</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>ZipCode</th>
                                    <th>Business Registration No</th>
                                    <th>LTFRB Accreditation No</th>
                                    <th>Contact No</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->BusinessName}}</td>
                                    <td>{{$user->Address}}</td>
                                    <td>{{$user->City}}</td>
                                    <td>{{$user->ZipCode}}</td>
                                    <td>{{$user->BusinessRegistrationNo}}</td>
                                    <td>{{$user->LTFRBAccreditationNo}}</td>
                                    <td>{{$user->ContactNo}}</td>
                                    <td>{{$user->Email}}</td>
                                    <td>{{$user->Status}}</td>
                                    <td> 
                                        {{ link_to_route('partners.show', 'View', [$user->id], ['class'=>'btn btn-primary'])}}
                                    <td> 
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
@endsection