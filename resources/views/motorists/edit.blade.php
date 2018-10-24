@extends('layouts.Admin')

@section('content-header')
<div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Manage Motorist</h1>
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
            <div class="card-header">Activate/Deactivate</div>
            <div class="card-body card-block">
                    {!! Form::model($user,array('route'=>['motorists.update', $user->id], 'method'=>'PUT')) !!}
                    <div class="form-group">
                        {!! Form::label('Status', 'Status')!!}
                        {!! Form::select('Status', ['Activated' => 'Activate', 'Suspended' => 'Suspended']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::button('Submit', ['type'=>'submit','class'=>'btn btn-primary']) !!}
                    </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
            </div>
@endsection