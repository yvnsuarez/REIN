@extends('layouts.PartnerCompany')

@section('content-header')
<div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Manage Assistant</h1>
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
            <div class="card-header">Edit Assistant</div>
            <div class="card-body card-block">
                    <div class="card-body">
                            {!! Form::model($user,array('route'=>['assistants.update', $user->id], 'method'=>'PUT')) !!}
                            <div class="form-group">
                                {!! Form::label('FirstName', 'First Name')!!}
                                {!! Form::text('FirstName', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('LastName', 'Last Name')!!}
                                {!! Form::text('LastName', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('MobileNo', 'Mobile No')!!}
                                {!! Form::text('MobileNo', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('BirthDay', 'Birthday')!!}
                                {!! Form::text('BirthDay', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Address', 'Address')!!}
                                {!! Form::text('Address', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('City', 'City')!!}
                                {!! Form::text('City', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('ZipCode', 'Zip Code')!!}
                                {!! Form::text('ZipCode', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Email', 'E-mail')!!}
                                {!! Form::email('Email', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                    {!! Form::label('Status', 'Status')!!}
                                    {!! Form::select('Status', ['Activated' => 'Activate', 'Deactivated' => 'Deactivate']) !!}
                                </div>
                                <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                        <div class="col-md-6 pull-center">
                                        {!! app('captcha')->display() !!}
                                        @if ($errors->has('g-recaptcha-response'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                        @endif
                                      </div>
                                    </div>
                            <div class="form-group">
                                    <div class="pull-left">
                                            <a href="{{ route('assistants.index') }}" class="btn btn-warning btn-sm">Cancel</a>
                                        </div>
                                        &nbsp;
                                {!! Form::button('Update Partner', ['type'=>'submit','class'=>'btn btn-secondary btn-sm']) !!}
                            </div>
                        {!! Form::close() !!}
                                </div>

            </div>
        </div>
    </div>
            </div>
@endsection