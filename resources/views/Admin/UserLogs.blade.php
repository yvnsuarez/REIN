@extends('layouts.Admin')

@section('content-header')
<div class="breadcrumbs-inner">
    <div class="row m-0">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>View User Activities</h1>
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
                            <strong class="card-title">User Logs</strong>
                        </div>
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                            <th class="serial">#</th>
                                            <th>User</th>
                                            <th>Type</th>
                                            <th>Description</th>
                                            <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    {{-- @foreach($reports as $report) --}}
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div> <!-- /.table-stats -->
                        {{-- @endif --}}
                </div>
                </div>
@endsection
