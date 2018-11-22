@extends('layouts.PartnerCompany')

@section('content-header')
<div class="breadcrumbs-inner">
    <div class="row m-0">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>All Requests</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



@section('content')
<!-- FOR PAYPAL INSTRUCTION -->
<h5 style="padding-bottom: 10px; color:darkred"><a href="#" data-toggle="modal" data-target="#Modal3" style="font-weight:bold; color:darkred">Click here</a> for a guide to view your <i style="color: #0030d5">Pay</i><i style="color: #089fdf">pal</i> &nbsp;payment transactions.</h5>
<!-- OVERLAY FOR THE INSTRUCTION -->
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
                <h5 class="modal-title" id="scrollmodalLabel" style="display:inline; font-weight:bold">How to view the card payment transactions in <i style="color: #0030d5">Pay</i><i style="color: #089fdf">pal?</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="overflow" style="margin:5%">
                    <ol>
                        <li>
                            Logon to <a href="https://bit.ly/1hkFcti"  target="_blank" style="color:black; font-weight:bold">https://bit.ly/1hkFcti</a>
                        </li>
                        <li>
                            Click <b>‘Log into Dashboard’</b>
                        </li>
                        <img src="{{asset('/images/paypal1.png')}}" width="200px" length="200px" style="padding-right: 50px; padding-top: 10px;"/><br>
                        <li>
                            You will be redirected to the login page. Once you are there, input your <b>PayPal account email address</b> and then your <b>password</b>.
                        </li><br>
                        <img src="{{asset('/images/paypal2.png')}}" width="700px" length="700px" style=" padding-right: 50px; padding-top: 10px;"/><br>
                        <li>
                            Once you are logged in, hover to your <b>user name</b> located on the upper right side of the site and then click <b>‘Dashboard’</b>.
                        </li>
                        <img src="{{asset('/images/paypal3.png')}}" width="700px" length="700px" style="
                        padding-right: 50px; padding-top: 10px;"/><br>
                        <li>
                            To view your account, click the <b>‘Accounts’</b> menu in the sidebar navigation.
                        </li>
                        <img src="{{asset('/images/paypal4.png')}}" width="700px" length="700px" style="padding-right: 50px; padding-top: 10px";/><br>
                        <li>
                            If you have multiple accounts, kindly choose the <b>Paypal account</b> that you used <b>for REIN</b>.
                        </li>
                        <img src="{{asset('/images/paypal5.png')}}" width="700px" length="700px" style="padding-right: 50px; padding-top: 10px;"/><br>
                        <li>
                            After that, summaries of your recent transactions will be displayed. You can also see the details of your transaction when you click <b>‘View all’</b>.
                        </li>
                        <img src="{{asset('/images/paypal6.png')}}" width="700px" length="700px" style="padding-right: 50px; padding-top: 10px;"/><br>
                        <img src="{{asset('/images/paypal7.png')}}" width="700px" length="700px" style="padding-right: 50px; padding-top: 10px;"/><br>

                        <li class="nostyle">
                            You can also search for a certain notification or a certain transaction. Just click the <b>‘Search for notifications’</b> botton.
                        </li>
                        <img src="{{asset('/images/paypal8.png')}}" width="700px" length="700px" style=" padding-right: 50px; padding-top: 10px;"/><br>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- FOR THE TABLE -->
<div class="animated fadeIn">
    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Requests</strong>
                </div>
                <div class="card-body">
                    <?php $i = 1; ?>
                    @if(count($reports) > 0)
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="serial">No.</th>
                                <th>Motorist</th>
                                <th>Instruction</th>
                                <th>Service Type</th>
                                <th>Service Status</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reports as $report)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{$report->user->FirstName}} {{$report->user->LastName}}</td>
                                <td>{{$report->instruction}}</td>
                                <td>{{$report->servicetype}}</td>
                                <td>{{$report->status}}</td>
                                @if($report->status == "Pending")
                                <td>
                                    <a href="requests/{{$report->ID}}/accept" class="btn btn-outline-success btn-sm fas fa fa-check-circle" data-toggle="tooltip" title="Accept Request"> Accept</a>
                                    <br/>
                                    <br/>
                                    <a href="requests/{{$report->ID}}/decline" class="btn btn-outline-danger btn-sm fa fa-times-circle" data-toggle="tooltip" title="Decline Request"> Decline</a>
                                </td>
                                @elseif($report->status == "Accepted")
                                <td><a href="requests/{{$report->ID}}/assign" class="btn btn-outline-success btn-sm fa fa-user-circle" data-toggle="tooltip" title="Assign Request"> Assign</a></td>
                                @else
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="serial">No.</th>
                                <th>Motorist</th>
                                <th>Instruction</th>
                                <th>Service Type</th>
                                <th>Service Status</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->



@endsection
