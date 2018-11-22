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
                                            <input type="text" name="BusinessName" value="{{$user->BusinessName}}" class="form-control{{ $errors->has('BusinessName') ? ' is-invalid' : '' }} " autocomplete="off">
                                            @if ($errors->has('BusinessName'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('BusinessName') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="cub-input">
                                        <div class="text-input">
                                            <label for="BusinessRegistrationNo">Business Registration Number</label>
                                            <input type="text" name="BusinessRegistrationNo" value="{{$user->BusinessRegistrationNo}}" class="form-control {{ $errors->has('BusinessRegistrationNo') ? ' is-invalid' : '' }}" autocomplete="off">
                                            @if ($errors->has('BusinessRegistrationNo'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('BusinessRegistrationNo') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="text-input">
                                            <label for="LTFRBRegistrationNo">LTFRB Accreditation Number</label>
                                            <input type="text" name="LTFRBRegistrationNo" value="{{$user->LTFRBRegistrationNo}}" class="form-control {{ $errors->has('LTFRBRegistrationNo') ? ' is-invalid' : '' }}" autocomplete="off">
                                            @if ($errors->has('LTFRBRegistrationNo'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('LTFRBRegistrationNo') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="text-input">
                                            <div class="form-group">
                                                <label for="Address">Address</label>
                                                <label for="Address" style="font-size:11px; color:dimgrey">Unit/Street Number, Building Name/Block, Street Name, Barangay/District Name:</label>
                                                <input id="Address" disabled name="Address" value="" class="form-control {{ $errors->has('Address') ? ' is-invalid' : '' }}" autocomplete="off">
                                                @if ($errors->has('Address'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('Address') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="text-input">
                                            <div class="form-group">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="row">
                                                            <label for="Address"></label>
                                                            <div class="col-sm-2" style="margin-right: -20px">
                                                                <label for="Address" style="font-size:11px; color:dimgrey">Unit/Street Number</label>
                                                                <input type="text" id="unitNo" name="unitNo" value="" class="form-control {{ $errors->has('Address') ? ' is-invalid' : '' }}" autocomplete="off" required="required">
                                                            </div>
                                                            <div class="col-sm-4" style="margin-right: -40px">
                                                                <label for="Address" style="font-size:11px; color:dimgrey">Building Name/Block</label>
                                                                <input type="text" id="homeNo" name="homeNo" value="" class="form-control {{ $errors->has('Address') ? ' is-invalid' : '' }}" autocomplete="off" required="required">
                                                            </div>
                                                            <div class="col-sm-4" style="margin-right: -40px">
                                                                <label for="Address" style="font-size:11px; color:dimgrey">Street Name</label>
                                                                <input type="text" id="streetName" name="streetName" value="" class="form-control {{ $errors->has('Address') ? ' is-invalid' : '' }}" autocomplete="off" required="required">
                                                            </div>
                                                            <div class="col-sm-4" style="margin-right: -40px">
                                                                <label for="Address" style="font-size:11px; color:dimgrey">Barangay/District Name</label>
                                                                <input type="text" id="district" name="district" value="" class="form-control {{ $errors->has('Address') ? ' is-invalid' : '' }}" autocomplete="off" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if ($errors->has('Address'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('Address') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                    <div class="cub-input">
                                        <div class="text-input">
                                            <label for="City">City</label>
                                            <input type="text" name="City" value="{{$user->City}}" class="form-control {{ $errors->has('City') ? ' is-invalid' : '' }}" autocomplete="off">
                                            @if ($errors->has('City'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('City') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="text-input">
                                            <label for="ZipCode">Zip Code</label>
                                            <input type="text" name="ZipCode" value="{{$user->ZipCode}}" placeholder="XXXX" class="form-control {{ $errors->has('ZipCode') ? ' is-invalid' : '' }}" autocomplete="off">
                                            @if ($errors->has('ZipCode'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('ZipCode') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="cub-input">
                                        <div class="text-input">
                                            <label for="Email">E-mail</label>
                                            <input type="email" name="Email" value="{{$user->Email}}" placeholder="example@gmail.com"class="form-control {{ $errors->has('Email') ? ' is-invalid' : '' }}" autocomplete="off">
                                            @if ($errors->has('Email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('Email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="text-input">
                                            <label for="MobileNo">Contact Number</label>
                                            <input type="text" id="mobileNo" name="MobileNo" value="{{$user->MobileNo}}" pattern="^09(73|74|05|06|15|16|17|26|27|35|36|37|79|38|07|08|09|10|12|18|19|20|21|28|29|30|38|39|89|99|22|23|32|33)\d{3}\s?\d{4}" placeholder="09XXXXXXXXX" class="form-control {{ $errors->has('MobileNo') ? ' is-invalid' : '' }}" autocomplete="off">
                                            @if ($errors->has('MobileNo'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('MobileNo') }}</strong>
                                            </span>
                                            @endif
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
                                        <input type="button" value="Update Partner" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#Modal2"/>
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
                                                    Are you sure you want to update a partner company?
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
                    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                    <script>
                        /** ADDRESS **/
                        /* function join_address()
                        {
                            var unitNo = document.getElementById('unitNo').value;
                            var homeNo = document.getElementById('homeNo').value;
                            var streetName = document.getElementById('streetName').value;
                            var district = document.getElementById('district').value;
                            document.getElementById('Address').value = unitNo+homeNo+streetName+district;
                        }

                    } */
                    /** ADDRESS **/
                    $(function() {
                        $('#unitNo, #homeNo, #streetName, #district').on('input', function() {
                            $('#Address').val(
                            $('#unitNo, #homeNo, #streetName, #district').map(function() {
                                return $(this).val();
                            }).get().join(' ') /* added space */
                            );
                        });
                    });


                </script>

                @endsection
