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
                                            <input type="text" name="FirstName" value="{{ $user->FirstName}}" class="form-control {{ $errors->has('FirstName') ? ' is-invalid' : '' }}" disabled>
                                            @if ($errors->has('FirstName'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('FirstName') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="text-input">
                                            <label for="LastName">Last Name</label>
                                            <input type="text" name="LastName"  value="{{ $user->LastName}}" class="form-control {{ $errors->has('LastName') ? ' is-invalid' : '' }}" disabled>
                                            @if ($errors->has('LastName'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('LastName') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="cub-input">
                                        <div class="text-input">
                                            <label for="MobileNo">Mobile Number</label>
                                            <input type="text" id="mobileNo" name="MobileNo" value="{{ $user->MobileNo}}" placeholder="09xxxxxxxxx" class="form-control {{ $errors->has('MobileNo') ? ' is-invalid' : '' }}" autocomplete="off">
                                            @if ($errors->has('MobileNo'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('MobileNo') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="text-input">
                                            <label for="BirthDay">Birthday</label>
                                            <input type="date" name="BirthDay" value="{{$user->BirthDay}}" class="form-control {{ $errors->has('BirthDay') ? ' is-invalid' : '' }}" disabled>
                                            @if ($errors->has('BirthDay'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('BirthDay') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="text-input">
                                        <label for="Address">Address</label>
                                        <label for="Address" style="font-size:11px; color:dimgrey">Unit Number House/Building/Street Number, Street Name, Barangay/District Name</label>
                                        <input type="text" name="Address"  value="{{ $user->Address}}" class="form-control {{ $errors->has('Address') ? ' is-invalid' : '' }}" autocomplete="off">
                                        @if ($errors->has('Address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Address') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="cub-input">
                                        <div class="text-input">
                                            <label for="City">City</label>
                                            <input type="text" name="City" value="{{ $user->City}}" class="form-control {{ $errors->has('City') ? ' is-invalid' : '' }}" autocomplete="off">
                                            @if ($errors->has('City'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('City') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="text-input">
                                            <label for="ZipCode">Zip Code</label>
                                            <input type="text" name="ZipCode" value="{{ $user->ZipCode}}" class="form-control {{ $errors->has('ZipCode') ? ' is-invalid' : '' }}" autocomplete="off">
                                            @if ($errors->has('ZipCode'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('ZipCode') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="text-input">
                                        <label for="Email">E-mail</label>
                                        <input type="email" name="Email" value="{{ $user->Email}}" class="form-control {{ $errors->has('Email') ? ' is-invalid' : '' }}" autocomplete="off">
                                        @if ($errors->has('Email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Email') }}</strong>
                                        </span>
                                        @endif
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
                                        <input type="button" value="Update Assisant" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#Modal2"/>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Confirm Update</h5>
                                                    <button class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to update assistant?
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
                    <!-- PHONE # MASK -->
                    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
                    <script>
                        /** MOBILE # MASK**/
                        $('#mobileNo').mask('00000000000');
                    </script>

                    @endsection

