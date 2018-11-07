@extends('layouts.PartnerCompany')

@section('content-header')
<div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Register an Assistant</h1>
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
            {!! Form::open(array('route'=>'assistants.store')) !!}
                    @csrf
            <div class="container">
            <div class="form-part">
                <h2>Register an Assistant</h2>

                <div class="cub-input">
                    <div class="text-input">
                        <div class="form-group">
                            <label for="FirstName">FirstName</label>
                            <input type="text" name="FirstName" value="" class="form-control" required>
                        </div>
                    </div>
                    <div class="text-input">
                    <div class="form-group">
                            <label for="LastName">Last Name</label>
                            <input type="text" name="LastName" value="" class="form-control" required>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="cub-input">
                    <div class="text-input">
                        <div class="form-group">
                            <label for="MobileNo">Mobile Number</label>
                            <input type="text" name="MobileNo" placeholder="XXXX XXX XXXX" class="form-control" required>
                        </div>
                    </div>
                    <div class="text-input">
                                <label for="BirthDay">Birthday</label>
                                <input type="date" name="BirthDay" value="" class="form-control" required>
                    </div>
                    <div class="clearfix"></div>
                </div>
             
                <div class="text-input">
                    <div class="form-group">
                                <label for="Address">Address</label>
                                <input type="text" name="Address" value="" class="form-control" required>
                            </div>
                </div>

                <div class="cub-input">
                    <div class="text-input">
                        <div class="form-group">
                                    <label for="City">City</label>
                                    <input type="text" name="City" value="" class="form-control" required>
                                </div>
                    </div>
                    <div class="text-input">
                        <div class="form-group">
                            <label for="ZipCode">Zip Code</label>
                            <input type="text" name="ZipCode" placeholder="XXXX" class="form-control" required>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="text-input">
                    <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" placeholder="example@gmail.com" class="form-control" required>
                                </div>
                </div>

                <div class="cub-input">
                    <div class="text-input">
                        <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" name="Password" value="" class="form-control" required>
                            </div>
                    </div>
                    <div class="text-input">
                        <div class="form-group">
                                <label for="CPassword">Confirm Password</label>
                                <input type="password" name="CPassword" value="" class="form-control" required>
                            </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                    <p>
                    By clicking Register Profile, you agree to our <a href="#">terms and conditions</a>
                    </p>
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
                                            <input type="button" value="Register Assisant" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#Modal2"/>
                                        </div>
                                        
                                <!-- Modal -->
                                <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Confirm Registration</h5>
                                                <button class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to register an assistant?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-secondary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    {!! Form::close() !!}
                </div>

            </div>
            </div>
            </div>

</div>
</div>

@endsection