@extends('layouts.PartnerCompany')

@section('content-header')
<div class="breadcrumbs-inner">
    <div class="row m-0">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>All Feedbacks</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="animated fadeIn">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Feedbacks</strong>
                            </div>
                            <div class="card-body">
                            <?php $i = 1; ?>
                            @if(count($feedbacks) > 0)
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th class="serial">No.</th>
                                            <th>Report No.</th>
                                            <th>Review</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($feedbacks as $feedback)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{$feedback->reportID}}</td>
                                            <td>{{$feedback->review}}</td>
                                            <td>
                                                {{-- MODAL FOR VIEWING OF REPORT --}}
                                                <div class="links">
                                                    <a href="/partner/feedbacks/{{$feedback->ID}}">
                                                            <button class="btn btn-outline-secondary btn-sm fa fa-info" data-toggle="tooltip" Title="View Feedback"></button>
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
                                        <th class="serial">No.</th>
                                            <th>Report No.</th>
                                            <th>Review</th>
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

@endsection
