@extends('layouts.PartnerCompany')

@section('content-header')
<div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Manage Requests</h1>
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
            <div class="card-header">Assign Assistant</div>
            <div class="card-body card-block">
                    <form method="POST" action="/partner/requests/{{$reports->ID}}/assigned">
                        {{ csrf_field() }}
                        <div class="form-group">
                                <label>Motorist</label>
                                <input type="text" class="form-control" name="motorist" value="{{$reports->motorist}}" readonly="true">
                            </div>
                            <div class="form-group">
                                <label>Instruction</label>
                                <input type="text" class="form-control" name="instruction" value="{{$reports->instruction}}" readonly="true">
                            </div>
                            <div class="form-group">
                                  <label>Service Type</label>
                                  <input type="text" class="form-control" name="servicetype" value="{{$reports->servicetype}}" readonly="true">
                              </div>
                              <div class="form-group">
                                  <label>Comment</label>
                                  <input type="text" class="form-control" name="comment" value="{{$reports->comment}}" readonly="true">
                              </div>
                              <div class="form-group">
                                  <label>Image Breakdown</label>
                                  <input type="text" class="form-control" name="image" value="{{$reports->image}}" readonly="true">
                              </div>
                              <div class="form-group">
                                      <label>Latitude</label>
                                      <input type="text" class="form-control" name="Lat" value="{{$reports->Lat}}" readonly="true">
                                  </div>    
                                  <div class="form-group">
                                          <label>Longhitude</label>
                                          <input type="text" class="form-control" name="Long" value="{{$reports->Long}}" readonly="true">
                                      </div>
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text" class="form-control" name="status" value="{{$reports->status}}" readonly="true">
                            </div>
                        <div class="form-group">
                                <label>Assistant</label>
                            <select class="form-control" name="assistant">
                                <option value="" disabled selected>Choose Assistant</option>
                                @foreach($users as $user)
                                    <option value="{{$user->id}}"> {{$user->FirstName}}  {{$user->LastName}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="pull-left">
                                <a href="/partner/requests" class="btn btn-rounded float-right animated pulse btn-warning">Back</a>
                            </div>
                            <div class="pull-right">
                                    <button type="submit" class="btn btn-rounded float-right animated pulse btn-success">Assign</button>
                            </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection