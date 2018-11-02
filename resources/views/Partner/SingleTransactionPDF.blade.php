<!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="{{ asset('assets/scss/print.css') }}"/>
    </head>
    <body>
<div class="container invoice">
  <div class="invoice-header">
    <div class="row">
      <div class="col-xs-8">
        <h1>Transaction Log</h1>
        <h4 class="text-muted">
            <?php
            echo "<strong>Date: </strong>";
            $mydate=getdate(date("U"));
            echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
            date_default_timezone_set("Asia/Singapore");
            echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <strong>Time: </strong>" .date("h:i:sa");
            ?>
        </h4>
      </div>
      <div class="col-xs-4">
        <div class="media">
          <div class="media-left">
            <img class="media-object logo" src="{{asset('/images/REIN01.png')}}" height="45px" width="45px" />
          </div>
          <ul class="media-body list-unstyled">
            <li><strong>REIN</strong></li>
            <li>Roadside Emergency Assistancec</li>
            <li>rein.inquiry@gmail.com</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="invoice-body">
    <div class="row">
      <div class="col-xs-5">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Company Details</h3>
          </div>
          <div class="panel-body">
            <dl class="dl-horizontal">
              <dt>Name</dt>
              <dd><strong>{{$getpartnerdetails->BusinessName}}</strong></dd>
              <dt>Address</dt>
              <dd>{{$getpartnerdetails->Address}}</dd>
              <dt>Phone</dt>
              <dd>{{$getpartnerdetails->MobileNo}}</dd>
              <dt>Email</dt>
              <dd>{{$getpartnerdetails->Email}}</dd>
              <dt>Business Registration No</dt>
              <dd>{{$getpartnerdetails->BusinessRegistrationNo}}</dd>
              <dt>LTFRB Accreditation No</dt>
              <dd>{{$getpartnerdetails->LTFRBRegistrationNo}}</dd>              
          </div>
        </div>
      </div>
      <div class="col-xs-7">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Motorist Details</h3>
          </div>
          <div class="panel-body">
            <dl class="dl-horizontal">
              <dt>Name</dt>
              <dd>{{$getmotoristdetails->LastName}}, {{$getmotoristdetails->FirstName}} </dd>
              <dt>Address</dt>
              <dd>{{$getmotoristdetails->Address}} </dd>
              <dt>Contact No</dt>
              <dd>{{$getmotoristdetails->MobileNo}} </dd>
              <dt>Email</dt>
              <dd>{{$getmotoristdetails->Email}}  </dd>
              <dt>&nbsp;</dt>
              <dd>&nbsp;</dd>
              <dt>&nbsp;</dt>
              <dd>&nbsp;</dd>
          </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Services / Products</h3>
      </div>
      <table class="table table-bordered table-condensed">
        <thead>
          <tr>
            <th>Service / Instruction</th>
            <th class="text-center colfix">Fee</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              {{$report->servicetype}}
              <br>
              <small class="text-muted">
                {{$report->instruction}}
              </small>
            </td>
            <td class="text-right">
              <span class="mono">PHP 1,500.00</span>
              <br>
              <small class="text-muted">*subject to change</small>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="row">
        <div class="col-xs-7">
          <div class="panel panel-default">
            <div class="panel-body">
              <i>Comments / Notes</i>
              <hr style="margin:3px 0 5px" /> 
              {{$report->comment}}
            </div>
          </div>
        </div>
        <div class="col-xs-5">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Assistant</h3>
            </div>
            <div class="panel-body">
                <dl class="dl-horizontal">
                    <dt>Name</dt>
                    <dd>{{$getassistantdetails->LastName}}, {{$getassistantdetails->FirstName}} </dd>
                    <dt>Address</dt>
                    <dd>{{$getassistantdetails->Address}} </dd>
                    <dt>Contact No</dt>
                    <dd>{{$getassistantdetails->MobileNo}} </dd>
                    <dt>Email</dt>
                    <dd>{{$getassistantdetails->Email}}  </dd>
            </div>
          </div>
        </div>
      </div>
    <div class="panel panel-default">
      <table class="table table-bordered table-condensed">
        <thead>
          <tr>
            <td class="text-center col-xs-1">Sub Total</td>
            <td class="text-center col-xs-1">Additional Charge</td>
            <td class="text-center col-xs-1">Total</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th class="text-center rowtotal mono">PHP 1,500.00</th>
            <th class="text-center rowtotal mono">PHP {{$report->addcharge}}</th>
            <th class="text-center rowtotal mono">PHP {{$report->totalservice}}</th>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="row">
      <div class="col-xs-7">
      </div>
      <div class="col-xs-5">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Payment</h3>
          </div>
          <div class="panel-body">
            <ul class="list-unstyled">
              <li>Payment Type - <span class="mono">Insert payment type here</span></li>
              <li>Status - <span class="mono">Insert payment status here</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
</body>
</html>