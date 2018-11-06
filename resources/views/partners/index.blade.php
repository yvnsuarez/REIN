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
<div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Partners</strong>

                            {{ link_to_route('partners.create', 'Register Partner', null, ['class'=>'fa fa-user-plus btn btn-outline-secondary btn-sm pull-right'])}}
                        </div>
                        <?php $i = 1; ?>
                        @if(count($users) > 0)
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr class="text-center">
                                        <th class="serial">#</th>
                                        <th>Business Name</th>
                                        <th>Address</th>
                                        <th>Contact No</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                @foreach($users as $user)
                                    <tr class="text-center">
                                    <td>{{ $i++ }}</td>
                                        <td>{{$user->BusinessName}}</td>
                                        <td>{{$user->Address}} {{$user->City}} {{$user->ZipCode}}</td>
                                        <td>{{$user->MobileNo}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->Status}}</td>
                                        <td>
                                                <div class="links">
                                                        <a href="/admin/partners/{{$user->id}}" class="btn btn-outline-secondary btn-sm fa fa-info" data-toggle="tooltip" title="View Partner">
                                                        </a>
                                                        <a href="/admin/partners/{{$user->id}}/edit" class="btn btn-outline-secondary btn-sm fa fa-edit" data-toggle="tooltip" title="Edit Partner">
                                                        </a>
                                                </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- /.table-stats -->
                        @else
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr class="text-center">
                                        <th class="serial">#</th>
                                        <th>Business Name</th>
                                        <th>Address</th>
                                        <th>Contact No</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="text-center">
                                <p>No records found.</p>
                            </div>
                    </div> <!-- /.table-stats -->
                        @endif
                    </div>
                </div>
@endsection
