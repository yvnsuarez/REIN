
            <h3 class="panel-title">Company Details</h3>
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
{{--      
            <h3 class="panel-title">Motorist Details</h3>

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


        <h3 class="panel-title">Services / Products</h3>


            <th>Service / Instruction</th>
            <th class="text-center colfix">Fee</th>
              {{$report->servicetype}}
              <br/>
                {{$report->instruction}}
            </td>
            <td class="text-right">
              <span class="mono">PHP 1,500.00</span>
              <br>*subject to change
            </td>

              <i>Comments / Notes</i>
              <hr style="margin:3px 0 5px" /> 
              {{$report->comment}}


              <h3 class="panel-title">Assistant</h3>

                    <dt>Name</dt>
                    <dd>{{$getassistantdetails->LastName}}, {{$getassistantdetails->FirstName}} </dd>
                    <dt>Address</dt>
                    <dd>{{$getassistantdetails->Address}} </dd>
                    <dt>Contact No</dt>
                    <dd>{{$getassistantdetails->MobileNo}} </dd>
                    <dt>Email</dt>
                    <dd>{{$getassistantdetails->Email}}  </dd>

            <td class="text-center col-xs-1">Sub Total</td>
            <td class="text-center col-xs-1">Additional Charge</td>
            <td class="text-center col-xs-1">Total</td>

            <th class="text-center rowtotal mono">PHP 1,500.00</th>
            <th class="text-center rowtotal mono">PHP {{$report->addcharge}}</th>
            <th class="text-center rowtotal mono">PHP {{$report->totalservice}}</th> --}}
