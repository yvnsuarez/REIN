@extends('layouts.Admin')

@section('content-header')
<div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Register an Admin</h1>
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
            <div class="card-header"><strong>Admin Details</strong></div>
            <div class="card-body card-block">
            {!! Form::open(array('route'=>'adminfunction.store')) !!}
                    @csrf
            <div class="container">
            <div class="form-part">
                <div class="cub-input">
                    <div class="text-input">
                        <div class="form-group">
                            <label for="FirstName">FirstName</label>
                            <input type="text" name="FirstName" value="" class="form-control {{ $errors->has('FirstName') ? ' is-invalid' : '' }}" maxlength="250">
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
                            <input type="text" name="LastName" value="" class="form-control  {{ $errors->has('LastName') ? ' is-invalid' : '' }}" maxlength="250">
                            @if ($errors->has('LastName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('LastName') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
             
                <div class="text-input">
                    <div class="form-group">
                                    <label for="Email">E-mail</label>
                                    <input type="email" name="Email" placeholder="example@gmail.com" class="form-control {{ $errors->has('Email') ? ' is-invalid' : '' }}" >
                                    @if ($errors->has('Email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                </div>

                <div class="cub-input">
                    <div class="text-input">
                        <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" value="" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" >
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
                                <input type="password" name="CPassword" value="" class="form-control {{ $errors->has('CPassword') ? ' is-invalid' : '' }}">
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
                                                        <a href="{{ route('adminfunction.index') }}" class="btn btn-warning btn-sm">Cancel</a>
                                                    </div>
                                                    &nbsp;
                                            <input type="button" value="Register Admin" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#Modal2"/>
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
                                                Are you sure you want to register an admin?
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
                            <h5 class="modal-title" id="scrollmodalLabel">Terms and Condition</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div class="overflow">
                        <ol>
                            <li><b>Introduction</b><br>
                                These Terms and Conditions contained herein, shall administer the usage of REIN, including <u>the application and the mobile application</u>. These terms apply all out and affect all the <u>users of REIN: (a) Motorists, (b) Assistants, and (c) Partner Companies.</u><br><br>
                                <b><u>By using REIN, you explicitly agree to all terms and conditions contained herein. The use of this application is not encouraged if you have any objection to any of these Terms and Conditions.</u></b></li>

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