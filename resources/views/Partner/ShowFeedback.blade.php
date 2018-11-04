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
    <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Feedback  No. {{$feedbacks->ID}}</strong>
                            </div>
                          
                            <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><b>Report: </b> {{$feedbacks->reportID}}</li>
                                        <li class="list-group-item"><b>Review: </b>{{$feedbacks->review}}</li>
                                        <li class="list-group-item"><b>Date Submitted: </b>{{$feedbacks->DateSubmitted}}</li>
                                    
                                </ul>
                                <div class="card-footer">
                                        <div class="pull-left">
                                            <a href="{{ url('/partner/feedbacks') }}" class="btn btn-warning btn-sm">Back</a>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
@endsection