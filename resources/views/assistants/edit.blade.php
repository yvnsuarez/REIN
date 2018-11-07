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
            <div class="card-header">
                Update Assistant</div>
            <div class="card-body card-block">
            {!! Form::model($user,array('route'=>['assistants.update', $user->id], 'method'=>'PUT')) !!}
                    <!-- @csrf -->
            <div class="container">
            <div class="form-part">

                <div class="cub-input">
                    <div class="text-input">
                             <label for="FirstName">FirstName</label>
                            <input type="text" name="FirstName" value="" class="form-control" required>
                    </div>
                    <div class="text-input">
                    <label for="LastName">Last Name</label>
                            <input type="text" name="LastName" value="" class="form-control" required>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="cub-input">
                    <div class="text-input">
                    <label for="MobileNo">Mobile Number</label>
                            <input type="text" name="MobileNo" value="" placeholder="XXXX XXX XXXX" class="form-control" required>
                    </div>
                    <div class="text-input">
                    <label for="BirthDay">Birthday</label>
                                <input type="date" name="BirthDay" value="" class="form-control" required>
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

                <div class="text-input">
                <label for="email">E-mail</label>
                                    <input type="email" name="email" placeholder="example@gmail.com" value="{{ (old('email'))}}" class="form-control" required>
                </div>

                <div class="cub-input">
                    <div class="text-input">
                    <div class="form-group">
                    <label for="Status">Status</label>
                        <select id="Status" class="form-control" name="Status">
                            <option value="Activated">Activate</option>
                            <option value="Deactivated">Deactivate</option>
                        </select>
                    </div>
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
                                            <a href="{{ route('assistants.index') }}" class="btn btn-warning btn-sm">Cancel</a>
                                        </div>
                                        &nbsp;
                                    <input type="submit" value="Update Assisant" class="btn btn-secondary btn-sm"/>
                            </div>
                        {!! Form::close() !!}
                </div>

            </div>
            </div>
            </div>

@endsection

