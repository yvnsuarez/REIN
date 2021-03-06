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
                    <div class="card-header">Assistants</div>
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
                                            <input type="text" name="FirstName" value="" class="form-control {{ $errors->has('FirstName') ? ' is-invalid' : '' }}" maxlength="250" autocomplete="off">
                                            @if ($errors->has('FirstName'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('FirstName') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="text-input">
                                        <div class="form-group">
                                            <label for="LastName">Last Name</label>
                                            <input type="text" name="LastName" value="" class="form-control  {{ $errors->has('LastName') ? ' is-invalid' : '' }}" maxlength="250" autocomplete="off">
                                            @if ($errors->has('LastName'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('LastName') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="cub-input">
                                    <div class="text-input">
                                        <div class="form-group">
                                            <label for="MobileNo">Mobile Number</label>
                                            <input type="text" id="MobileNo" name="MobileNo" class="form-control {{ $errors->has('MobileNo') ? ' is-invalid' : '' }}" pattern="^09(73|74|05|06|15|16|17|26|27|35|36|37|79|38|07|08|09|10|12|18|19|20|21|28|29|30|38|39|89|99|22|23|32|33)\d{3}\s?\d{4}" placeholder="09XXXXXXXXX" maxlength="11" autocomplete="off">
                                            @if ($errors->has('MobileNo'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('MobileNo') }}</strong>
                                            </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="text-input">
                                        <label for="BirthDay">Birthday</label>
                                        <input type="date" name="BirthDay" value="" class="form-control {{ $errors->has('BirthDay') ? ' is-invalid' : '' }}" autocomplete="off">
                                        @if ($errors->has('BirthDay'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('BirthDay') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="text-input">
                                    <div class="form-group">
                                        <label for="Address">Address</label>
                                        <label for="Address" style="font-size:11px; color:dimgrey">Unit/Street Number, Building Name/Block, Street Name, Barangay/District Name:</label>
                                        <input id="Address" name="Address" value="" class="form-control {{ $errors->has('Address') ? ' is-invalid' : '' }}" autocomplete="off" style="border-color:white">
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
                                            <div class="form-group">
                                                <label for="City">City</label>
                                                <select name="City" value="" class="form-control {{ $errors->has('City') ? ' is-invalid' : '' }}">
                                                    <option disabled selected value> Select a city </option>
                                                    <option value="Caloocan">Caloocan</option>
                                                    <option value="Las Piñas">Las Piñas</option>
                                                    <option value="Makati">Makati</option>
                                                    <option value="Malabon">Malabon</option>
                                                    <option value="Mandaluyong">Mandaluyong</option>
                                                    <option value="Manila">City of Manila</option>
                                                    <option value="Marikina">Marikina</option>
                                                    <option value="Muntinlupa">Muntinlupa</option>
                                                    <option value="Navotas">Navotas</option>
                                                    <option value="Parañaque">Parañaque</option>
                                                    <option value="Pasay">Pasay</option>
                                                    <option value="Pasig">Pasig</option>
                                                    <option value="Pateros">Pateros</option>
                                                    <option value="Quezon City">Quezon</option>
                                                    <option value="San Juan">San Juan</option>
                                                    <option value="Taguig">Taguig</option>
                                                    <option value="Valenzuela">Valenzuela</option>
                                                    @if ($errors->has('City'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('City') }}</strong>
                                                    </span>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="text-input">
                                            <div class="form-group">
                                                <label for="ZipCode">Zip Code</label>
                                                <input type="text" name="ZipCode" placeholder="XXXX" min="0" max="4"class="form-control {{ $errors->has('ZipCode') ? ' is-invalid' : '' }}" maxlength="4" autocomplete="off">
                                                @if ($errors->has('ZipCode'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('ZipCode') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="text-input">
                                        <div class="form-group">
                                            <label for="Email">E-mail</label>
                                            <input type="email" name="Email" placeholder="example@gmail.com" class="form-control {{ $errors->has('Email') ? ' is-invalid' : '' }}" autocomplete="off">
                                            @if ($errors->has('Email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('Email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="cub-input">
                                        <div class="text-input">
                                            <div id="register" class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" id="password" name="password" value="" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" autocomplete="off">
                                                <span id="result"></span>
                                                @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="text-input">
                                            <div class="form-group">
                                                <label for="CPassword">Confirm Password</label>
                                                <input type="password" id="CPassword" name="CPassword" value="" class="form-control {{ $errors->has('CPassword') ? ' is-invalid' : '' }}" autocomplete="off">
                                                <span id="passMatch"></span>
                                                @if ($errors->has('CPassword'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('CPassword') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <p>
                                        By clicking Register Profile, you agree to our <a href="#" data-toggle="modal" data-target="#Modal3">terms and conditions</a>
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

                                <div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="scrollmodalLabel" style="display:inline">Terms and Condition</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="overflow" style="margin:5%">
                                                    <ol>
                                                        <li><b>Introduction</b><br>
                                                            These Terms and Conditions contained herein, shall administer the usage of REIN, including <u>the application and the mobile application</u>. These terms apply all out and affect all the <u>users of REIN: (a) Motorists, (b) Assistants, and (c) Partner Companies.</u><br><br>
                                                            <b><u>By using REIN, you explicitly agree to all terms and conditions contained herein. The use of this application is not encouraged if you have any objection to any of these Terms and Conditions.</u></b></li>
                                                            <br>
                                                            <li><b>The Usage of the Application</b><br>
                                                                REIN is a road emergency assistance application. Your registration to REIN implies that you have read and understood the terms of usage of this application. REIN has different users and client namely the:
                                                                <ol type="a">
                                                                    <li><b>Motorist</b><br><br>
                                                                        The Motorist is the target user of REIN. This user uses the Android mobile application if you are one, you can only perform the following in this application:<br>
                                                                        <ul>
                                                                            <li>Request a roadside emergency assistance service from Partner Companies</li>
                                                                            <li>Pay using the application</li>
                                                                            <li>Write a feedback or a report regarding a service.</li>
                                                                            <li>Add more vehicle to your profile if you have more than one.</li>
                                                                            <li>See your transaction history</li>
                                                                        </ul><br>
                                                                        Before you use REIN it is assumed that:<br>
                                                                        <ul>
                                                                            <li>The registration for REIN is free.</li>
                                                                            <li>The basic fee for any service request is PHP 1,500.00 and is subject to change.</li>
                                                                            <li>You have an internet or WiFi access.</li>
                                                                            <li>You have an accurate or precise GPS.</li>
                                                                            <li>Your vehicle is not a PUV or a Public Utility Vehicle.</li>
                                                                            <li>You have a maximum of 2 additional request in one transaction.</li>
                                                                            <li>You will be fined <u>10% of your serivce request</u> when you cancel a booking.</li>
                                                                            <li>REIN has the right to deactivate your account if you in any way, for any reason, misused this application, which is stated in the following articles of this Terms and Conditions.</li>
                                                                        </ul><br>

                                                                    </li>
                                                                    <li><b>Assistants</b><br><br>
                                                                        The Assistant is the service provider from one of REIN's partner companies. This user uses the Android mobile application, if you are one, you can only perform the following in this application:<br>
                                                                        <ul>
                                                                            <li>View the service request that is approved and tasked to you by your company.</li>
                                                                            <li>Update a service report for any additional service rendered.</li>
                                                                            <li>Submit a final service report for the service rendered.</li>
                                                                            <li>Add more vehicle to your profile if yoy have more than one.</li>
                                                                        </ul><br>
                                                                        Before you use REIN it is assumed that:<br>
                                                                        <ul>
                                                                            <li>The registration for REIN is free, however..</li>
                                                                            <li>You must be certified by your company to perform roadside assistance tasks.</li>
                                                                            <li>You have an internet or WiFi access.</li>
                                                                            <li>You have an accurate or precise GPS.</li>
                                                                            <li>You can only accept a maximum of 2 additional request in one transaction.</li>
                                                                            <li>REIN has the right to deactivate your account if you in any way, for any reason, misused this application, which is stated in the following articles of this Terms and Conditions.</li>
                                                                        </ul><br>

                                                                        <li><b>Partner Companies</b><br><br>
                                                                            The Partner Company is the onwer or the representative from one of of the roadside service companies or providers here in Metro Manila. This user uses the web application, if you are one, you can only perform the following in this application:<br>
                                                                            <ul>
                                                                                <li>View the service requests.</li>
                                                                                <li>Accept or deny a service request.</li>
                                                                                <li>View final service reports of your comapany.</li>
                                                                                <li>View the status of the service requests.</li>
                                                                            </ul><br>
                                                                            Before you use REIN it is assumed that:<br>
                                                                            <ul>
                                                                                <li>Your company can provide 24/7 roadside assistance service.</li>
                                                                                <li>Your company offers Flat Tire Replacement, Towing, Jumpstarting, Overheat and other more engine fixes.</li>
                                                                                <li>Your company has a valid business permit and certifications to perform roadside assistance tasks.</li>
                                                                                <li>You or your representative has a valid personal information and identification  for the on-site registration.</li>
                                                                                <li>Your registration will be on-site, at REIN's office, so we can validate your documents.</li>
                                                                                <li>You have an internet or WiFi access.</li>
                                                                                <li>You have an accurate or precise GPS.</li>
                                                                                <li>You can only accept a maximum of 2 additional request in one transaction.</li>
                                                                                <li>REIN has the right to deny or disapprove your registration if you didn't submit and fulfill the requirements.</li>
                                                                                <li>REIN has the right to deactivate your account or terminate an existing contact if you in any way, for any reason, misused this application, which is stated in the following articles of this Terms and Conditions.</li>
                                                                            </ul><br>
                                                                        </ol>
                                                                    </li>

                                                                    <li><b>Intellectual Property Rights</b><br>
                                                                        The content and the data you own, which you may have been required to submit, under these Terms, REIN and/or its licensors own all rights to intellectual property and materials used in the application, excluding the content or data that you own. Thus, <u>REIN is not entitled to any content and data that you provided for the usage of the application.</u><br><br>
                                                                        Hence, you are granted to limited license only, subject to restrictions provided in these Terms, for the sole purpose of using REIN and its services. </li>

                                                                        <li><b>Restrictions</b><br>
                                                                            You are expected to clearly and fully understand that you are restricted from doing all the following:<br>
                                                                            <ol type="a">
                                                                                <li style="margin-top:1px">Publishing any material and data from this application to any forms of media;</li>
                                                                                <li style="margin-top:1px">Selling, sublicensing and/or otherwise commercializing any application material and data;</li>
                                                                                <li style="margin-top:1px">Publicly showing and claiming the application material;</li>
                                                                                <li style="margin-top:1pxm">The usage of the application that may incur damages;</li>
                                                                                <li style="margin-top:1px">The usage of the application that may affect user access;</li>
                                                                                <li style="margin-top:1px">Negligence to perform user any user responsibility;</li>
                                                                                <li style="margin-top:1px">The usage of the application contrary to laws and regulations, or in a way that causes, or may cause harm to the application, its users, or to any person or business entity.</li>
                                                                            </ol>
                                                                            Certain areas of this application are restricted by REIN and may further restrict to any area or module, at any time, in its independent and absolute discretion.<br><br>
                                                                            Any user ID and password you may have for this application is confidential and encrypted and it is your sole responsibility to maintain its confidentiality.</li>

                                                                            <li><b>Your Content</b><br>
                                                                                The Terms and Conditions of REIN states that “Your Content” are the content and data that you willingly choose to submit and display on this application. By that and with respect, you grant REIN a non-exclusive, worldwide, irrevocable, royalty-free, sublicense license to use your content and data for any operations related to the application.
                                                                                <br><br>
                                                                                <u>Your content must be your own and must not be undermining on any third-party rights.</u> REIN reserves the right to remove or release any of your content to the authorities from this application, at any time, and for any reason, without notice.</li>

                                                                                <li><b>No warranties</b><br>
                                                                                    REIN is provided just as it is, with its future faults, and REIN makes no implied representation or warranties, of any kind related to this application or the content and data it stores. <u>Nothing in this website shall be specifically and expressly construed to any of its users.</u></li>

                                                                                    <li><b>Limitation of Liability</b><br>
                                                                                        REIN, or anyone from its administration, shall not be liable for anything arising out of or in any way connected with, your usage of this application. Whether such liability is under any contract, tort, or otherwise. <u>REIN shall not be liable for any indirect, consequential, or special liability arising from the misuse of this application.</u></li>

                                                                                        <li><b>Indemnification</b><br>
                                                                                            You, as a user of REIN, hereby indemnify REIN from and against any of the liabilities, costs, demands, consequences of actions, damages, expenses, etc. arising out of or in any way related to your breach of any of the provisions of these Terms.</li>

                                                                                            <li><b>Severability</b><br>
                                                                                                If any of these terms is found to be invalid under enforceable and applicable law, such invalidity shall not render these Terms as wholly or completely invalid, and such provision or report shall remove such term without affecting the remaining terms.</li>

                                                                                                <li><b>Variation of Terms</b><br>
                                                                                                    REIN is permitted to revise these Terms at any time as it sees fit, and by using this application, you are required to review such terms on a regular basis to ensure that you understand all Terms and Conditions governing the usage of this application.</li>

                                                                                                    <li><b>Assignment</b><br>
                                                                                                        REIN shall be permitted to assign, transfer, and subcontract its rights and/or obligations under this Terms without any notifications or consent required. However, you shall not be permitted to assign, transfer, and subcontract its rights and/or obligations under these Terms.</li>

                                                                                                        <li><b>Entire Agreement</b><br>
                                                                                                            These terms, including any legal notices and disclaimers contained in REIN, constitutes the Entire Agreement between you and REIN. In relation, you use of the application and supersede all prior agreements and understandings with respect to the same.</li>

                                                                                                            <li><b>Governing Law and Jurisdiction</b><br>
                                                                                                                These terms will be governed by and construed in accordance with the laws of the Republic of the Philippines, and you shall submit to the non-exclusive jurisdiction of the state and federal count in the Republic of the Philippines for the resolution of any disputes.</li>
                                                                                                            </ol>
                                                                                                        </div>
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

                                                                <!-- PHONE # MASK -->
                                                                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                                                                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
                                                                <script>
                                                                    /** PASSWORD METER **/
                                                                    $(document).ready(function()
                                                                    {
                                                                        $('#password').keyup(function()
                                                                        {
                                                                            $('#result').html(checkStrength($('#password').val()))
                                                                        })

                                                                        function checkStrength(password)
                                                                        {
                                                                            var strength = 0

                                                                            if (password.length < 6) {
                                                                                $('#result').removeClass()
                                                                                $('#result').addClass('short')
                                                                                return 'Too short. Password input must contain at least one uppercase, lowercase, numerical, and special character'
                                                                            }

                                                                            if (password.length > 7) strength += 1

                                                                            //If password contains both lower and uppercase characters, increase strength value.
                                                                            if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/))  strength += 1

                                                                            //If it has numbers and characters, increase strength value.
                                                                            if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/))  strength += 1

                                                                            //If it has one special character, increase strength value.
                                                                            if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/))  strength += 1

                                                                            //if it has two special characters, increase strength value.
                                                                            if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1


                                                                            //Calculated strength value, we can return messages



                                                                            //If value is less than 2

                                                                            if (strength < 2 )
                                                                            {
                                                                                $('#result').removeClass()
                                                                                $('#result').addClass('weak')
                                                                                return 'Weak! password input must contain at least one uppercase, lowercase, numerical, and special character!'
                                                                            }
                                                                            else if (strength == 2 )
                                                                            {
                                                                                $('#result').removeClass()
                                                                                $('#result').addClass('good')
                                                                                return 'Good but password input must contain at least one uppercase, lowercase, numerical, and special character'
                                                                            }
                                                                            else
                                                                            {
                                                                                $('#result').removeClass()
                                                                                $('#result').addClass('strong')
                                                                                return 'Strong Password!'
                                                                            }
                                                                        }
                                                                    });
                                                                    /** MATCH PASSWORD **/
                                                                    $(document).ready(function()
                                                                    {
                                                                        $('#CPassword').keyup(function()
                                                                        {
                                                                            $('#passMatch').html(matchPassword($('#CPassword').val()))
                                                                        })

                                                                        function matchPassword() {
                                                                            var password = $("#password").val();
                                                                            var cPassword = $("#CPassword").val();
                                                                            if (password != cPassword) {
                                                                                $('#passMatch').removeClass()
                                                                                $('#passMatch').addClass('nomatch')
                                                                                return 'Password do not match!'
                                                                            }
                                                                            else
                                                                            {
                                                                                $('#passMatch').removeClass()
                                                                                $('#passMatch').addClass('match')
                                                                                return 'Passwords match!'
                                                                            }
                                                                        }
                                                                    });
                                                                    /** MOBILE # **/
                                                                    $('#MobileNo').mask('00000000000');

                                                                    /* $("#MobileNo").keypress(function(e) {
                                                                        if (String.fromCharCode(e.which).match(/(^09(73|74|05|06|15|16|17|26|27|35|36|37|79|38|07|08|09|10|12|18|19|20|21|28|29|30|38|39|89|99|22|23|32|33)\d{3}\s?\d{4})/)) {
                                                                            e.preventDefault();
                                                                        }
                                                                    }); */
                                                                    /* $(document).ready(fun                    ction()
                                                                    {
                                                                        $('#mobileNo').keyup(function()
                                                                        {
                                                                            $('#mobilePfMatch').html(matchMobilePf($('#mobileNo').val()))
                                                                        })

                                                                        function matchMobilePf() {
                                                                            var mobilePf = "09";
                                                                            var mobileNo = $("#mobileNo").val();
                                                                            var mobileStr = mobileNo.toString();
                                                                            var mobileinputPF = mobileStr.slice(0, 9);
                                                                            if (mobileNo != ) {
                                                                                $('#mobilePfMatch').removeClass()
                                                                                $('#mobilePfMatch').addClass('pfnomatch')
                                                                                return 'Please input the valid phone number prefix, 09!'
                                                                            }
                                                                            else
                                                                            {
                                                                                $('#mobilePfMatch').removeClass()
                                                                                $('#mobilePfMatch').addClass('pfmatch')
                                                                                return ''
                                                                            }
                                                                        }
                                                                    }); *
                                                                    /* $('#Address').val($('#unitNo').val() + ' ' +
                                                                    $('#homeNo').val() + ', ' +
                                                                    $('#streetName').val() + ' ' +
                                                                    $('#district').val() ); */

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
