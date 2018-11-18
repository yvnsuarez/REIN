@extends('layouts.Admin')

@section('content-header')
<div class="breadcrumbs-inner">
    <div class="row m-0">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>All User Activities</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<br/>
<div class="form control pull-right">
        {!! Form::open(['action' => 'Web\Admin\UserActivityController@daterange', 'method' =>'POST']) !!}
            From: <input type="text" id="datepickerfrom" name="start" value="{{date('Y-m-d')}}"/> &nbsp;
            To: <input type="text" id="datepickerpresent" name="end" value="{{date('Y-m-d')}}"/> &nbsp;
            <button type="submit" class="btn btn-warning btn-sm">Go</button>
        {!! Form::close() !!}  
        </div>
@endsection

@section('content')

<div class="animated fadeIn">
                <div class="row">


                    <div class="col-lg-12">
                        
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Transactions</strong>
                                <text class="pull-right"> Filtered from {{$start}} to {{$end}} </text>
                            </div>
                            
                            <div class="card-body">
                            <?php $i = 1; ?>
                            @if(count($userlogs) > 0)
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Causer</th>
                                            <th>Type</th>
                                            <th>Description</th>
                                            <th>Date</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($userlogs as $userlog)
                                        <tr>
                                        <td>{{$i++}}</td>
                                            <td>{{$userlog->UserID}}</td>
                                            <td>{{$userlog->Type}}</td>
                                            <td>{{$userlog->Description}}</td>
                                            <td>{{$userlog->Date}}</td>
                                            <td>
                                                {{-- MODAL FOR VIEWING OF REPORT --}}
                                                <div class="links">
                                                    <a href="/admin/useractivity/{{$userlog->ID}}">
                                                            <button class="fa fa-info btn btn-outline-secondary btn-sm" data-toggle="tooltip" title="View Activity"></button>
                                                        </a>
                                                    </div>
                                                </td>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @else
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th>No.</th>
                                            <th>Causer</th>
                                            <th>Type</th>
                                            <th>Payment</th>
                                            <th>Description</th>
                                            <th>Date</th>
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

    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>



<script>
    $(function () {
        $("#datepickerfrom").datepicker({ maxDate: new Date(), dateFormat: "yy-mm-dd"});
    });
    $(function () {
        $("#datepickerpresent").datepicker({ maxDate: new Date(), dateFormat: "yy-mm-dd"});
    });
</script>


@endsection
