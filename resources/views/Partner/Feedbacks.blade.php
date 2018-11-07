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
                        <?php $i = 1; ?>
                        @if(count($feedbacks) > 0)
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr class="text-center">
                                            <th>#</th>
                                            <th>Report No.</th>
                                            <th>Review</th>
                                            <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                @foreach($feedbacks as $feedback)
                                    <tr class="text-center">
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
                        </div> <!-- /.table-stats -->
                        @else
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr class="text-center">
                                            <th>#</th>
                                            <th>Report</th>
                                            <th>Review</th>
                                            <th>ACTION</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="text-center">
                                <p>No records found.</p>
                            </div>
                    </div> <!-- /.table-stats -->
                        @endif
                    </div>
                </div>
@endsection
