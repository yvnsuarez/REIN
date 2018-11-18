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
                                            <input type="text" name="BusinessName" value="" class="form-control {{ $errors->has('BusinessName') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('BusinessName'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('BusinessName') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="cub-input">
                                    <div class="text-input">
                                        <div class="form-group">
                                            <label for="BusinessRegistrationNo">Business Registration Number</label>
                                            <input type="text" name="BusinessRegistrationNo" value="" class="form-control {{ $errors->has('BusinessRegistrationNo') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('BusinessRegistrationNo'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('BusinessRegistrationNo') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="text-input">
                                        <div class="form-group">
                                            <label for="LTFRBRegistrationNo">LTFRB Accreditation Number</label>
                                            <input type="text" name="LTFRBRegistrationNo" value="" class="form-control {{ $errors->has('LTFRBRegistrationNo') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('LTFRBRegistrationNo'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('LTFRBRegistrationNo') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="text-input">
                                    <div class="form-group">
                                        <label for="Address">Address</label>
                                        <input type="text" name="Address" value="" class="form-control {{ $errors->has('Address') ? ' is-invalid' : '' }}">
                                        @if ($errors->has('Address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Address') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="cub-input">
                                    <div class="text-input">
                                        <div class="form-group">
                                            <label for="City">City</label>
                                            <input type="text" name="City" value="" class="form-control {{ $errors->has('City') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('City'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('City') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="text-input">
                                        <div class="form-group">
                                            <label for="ZipCode">Zip Code</label>
                                            <input type="text" name="ZipCode" value="" placeholder="XXXX" class="form-control {{ $errors->has('ZipCode') ? ' is-invalid' : '' }} maxLength="4"">
                                            @if ($errors->has('ZipCode'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('ZipCode') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="cub-input">
                                    <div class="text-input">
                                        <div class="form-group">
                                            <label for="Email">E-mail</label>
                                            <input type="email" name="Email" value="" placeholder="example@gmail.com"class="form-control {{ $errors->has('Email') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('Email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('Email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="text-input">
                                        <div class="form-group">
                                            <label for="MobileNo">Contact Number</label>
                                            <input type="text" name="MobileNo" value="" placeholder="XXXXXXXXXXX"class="form-control {{ $errors->has('MobileNo') ? ' is-invalid' : '' }}" maxLength="11">
                                            @if ($errors->has('MobileNo'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('MobileNo') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="cub-input">
                                    <div class="text-input">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}">
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
                                            <input type="password" name="CPassword" class="form-control {{ $errors->has('CPassword') ? ' is-invalid' : '' }}">
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
                                    By clicking Register, you agree to our <a href="#" data-toggle="modal" data-target="#Modal3">terms and conditions</a>
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

                                    <input type="button" value="Register Partner" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#Modal2"/>

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
                                                Are you sure you want to register an partner company?
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



                                                                @endsection
