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
                Update Partner</div>
            <div class="card-body card-block">
            {!! Form::model($user,array('route'=>['partners.update', $user->id], 'method'=>'PUT')) !!}
                    <!-- @csrf -->
            <div class="container">
            <div class="form-part">

                <div class="cub-input">
                    <div class="text-input">
                    <label for="BusinessName">Business Name</label>
                                <input type="text" name="BusinessName" value="" class="form-control" required>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="cub-input">
                    <div class="text-input">
                    <label for="BusinessRegistrationNo">Business Registration Number</label>
                                <input type="text" name="BusinessRegistrationNo" value="" class="form-control" required> 
                                <!-- ADD OLD VALUE -->
                    </div>
                    <div class="text-input">
                    <label for="LTFRBRegistrationNo">LTFRB Accreditation Number</label>
                                <input type="text" name="LTFRBRegistrationNo" value="" class="form-control" required>
                    </div>
                    <div class="clearfix"></div>
                </div>
             
                <div class="text-input">
                <label for="Address">Address</label>
                                <input type="text" name="Address" value="" class="form-control" required>
                </div>

                <div class="cub-input">
                    <div class="text-input">
                    <label for="City">City</label>
                                    <input type="text" name="City" value="" class="form-control" required>
                    </div>
                    <div class="text-input">
                    <label for="ZipCode">Zip Code</label>
                            <input type="text" name="ZipCode" value="" placeholder="XXXX" class="form-control" required>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="cub-input">
                    <div class="text-input">
                    <label for="email">E-mail</label>
                                <input type="email" name="email" value="" placeholder="example@gmail.com"class="form-control" required>
                    </div>
                    <div class="text-input">
                    <label for="MobileNo">Contact Number</label>
                                <input type="text" name="email" value="" placeholder="XXXX XXX XXXX" class="form-control" required>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="cub-input">
                    <div class="text-input">
                    <label for="Status">Status</label>
                        <select id="Status" class="form-control" name="Status">
                            <option value="Activated">Activate</option>
                            <option value="Deactivated">Deactivate</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
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
                                                    <input type="submit" value="Update Partner" class="btn btn-secondary btn-sm"/>
                                        </div>
                                    {!! Form::close() !!}
                </div>

            </div>
            </div>
            </div>


@endsection