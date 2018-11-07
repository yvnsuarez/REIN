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
                    <div class="form-group">
                                <label for="BusinessName">Business Name</label>
                                <input type="text" name="BusinessName" value="" class="form-control" required>
                            </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="cub-input">
                    <div class="text-input">
                    <div class="form-group">
                                <label for="BusinessRegistrationNo">Business Registration Number</label>
                                <input type="text" name="BusinessRegistrationNo" value="" class="form-control" required>
                            </div>
                    </div>
                    <div class="text-input">
                    <div class="form-group">
                                <label for="LTFRBRegistrationNo">LTFRB Accreditation Number</label>
                                <input type="text" name="LTFRBRegistrationNo" value="" class="form-control" required>
                            </div>
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
                                <input type="text" name="ZipCode" value="" placeholder="XXXX" class="form-control" required>
                            </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="cub-input">
                        <div class="text-input">
                        <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" value="" placeholder="example@gmail.com"class="form-control" required>
                            </div>
                        </div>
                        <div class="text-input">
                        <div class="form-group">
                                <label for="MobileNo">Contact Number</label>
                                <input type="text" name="email" value="" placeholder="XXXX XXX XXXX"class="form-control" required>
                            </div>
                        </div>
                    <div class="clearfix"></div>
                </div>

                <div class="cub-input">
                    <div class="text-input">
                    <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" name="Password" class="form-control" required>
                            </div>
                    </div>
                    <div class="text-input">
                    
                    <div class="form-group">
                                <label for="CPassword">Password</label>
                                <input type="password" name="CPassword" class="form-control" required>
                            </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

               <p>
                        By clicking Register, you agree to our <a href="#">terms and conditions</a>
                    </p>
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

                                         <input type="submit" value="Register Partner" class="btn btn-secondary btn-sm"/>
                                    </div>
                                {!! Form::close() !!}
                </div>

            </div>
            </div>
            </div>

</div>
</div>


@endsection