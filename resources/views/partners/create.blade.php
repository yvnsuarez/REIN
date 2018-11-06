@extends('layouts.Admin')

@section('content-header')
<div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Register a Partner Company</h1>
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
            <div class="card-header"><strong>Company</strong></div>
            <div class="card-body card-block">
                    {!! Form::open(array('route'=>'partners.store')) !!}
                    @csrf
            <div class="container">
            <div class="form-part">
                <h2>Register a Partner Company</h2>

                <div class="cub-input">
                    <div class="text-input">
                    {!! Form::label('BusinessName', 'Business Name')!!}
                                        {!! Form::text('BusinessName', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="cub-input">
                    <div class="text-input">
                    {!! Form::label('BusinessRegistrationNo', 'Business Registration Number')!!}
                                        {!! Form::text('BusinessRegistrationNo', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="text-input">
                    {!! Form::label('LTFRBRegistrationNo', 'LTFRB Accreditation Number')!!}
                                        {!! Form::text('LTFRBRegistrationNo', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="text-input">
                {!! Form::label('Address', 'Address')!!}
                                        {!! Form::text('Address', null, ['class'=>'form-control']) !!}
                </div>

                <div class="cub-input">
                    <div class="text-input">
                    {!! Form::label('City', 'City')!!}
                                        {!! Form::text('City', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="text-input">
                    {!! Form::label('ZipCode', 'Zip Code')!!}
                                        {!! Form::text('ZipCode', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="text-input">
                {!! Form::label('email', 'E-mail')!!}
                {!! Form::email('email', 'example@gmail.com', ['class'=>'form-control']) !!}
                </div>

                <div class="cub-input">
                    <div class="text-input">
                    {!! Form::label('Password', 'Password')!!}
                    {!! Form::password('Password', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="text-input">
                    {!! Form::label('CPassword', 'Confirm Password')!!}
                    {!! Form::password('CPassword', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="check-boxes">
                    <ul>
                    <li>
                        <input type="checkbox" name="terms" /> &nbsp; I accept <a href="#">terms and conditions</a>
                    </li>
                    </ul>
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
                                            <a href="{{ route('partners.index') }}" class="btn btn-warning btn-sm">Cancel</a>
                                        </div>
                                        &nbsp;
                                        {!! Form::button('Register Partner', ['type'=>'submit','class'=>'btn btn-secondary btn-sm']) !!}
                                    </div>
                                {!! Form::close() !!}
                </div>

            </div>
            </div>
            </div>

</div>
</div>


@endsection