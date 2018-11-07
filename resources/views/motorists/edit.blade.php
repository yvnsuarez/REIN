@extends('layouts.Admin')

@section('content-header')
<div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Manage Motorist</h1>
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
            <div class="card-header">Activate/Deactivate</div>
            <div class="card-body card-block">
            {!! Form::model($user,array('route'=>['motorists.update', $user->id], 'method'=>'PUT')) !!}
            <!-- @csrf -->
            <div class="container">
            <div class="form-part">
                <div class="cub-input">
                    <div class="text-input">
                    {!! Form::label('Status', 'Status')!!}
                        {!! Form::select('Status', ['Activated' => 'Activate', 'Suspended' => 'Suspended']) !!}
                    </div>
                    <div class="text-input">
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
                    </div>

                    <div class="clearfix"></div>
                </div>
                 <div class="form-group"> 
                        <div class="pull-left">
                            <a href="{{ route('motorists.index') }}" class="btn btn-warning btn-sm">Cancel</a>
                        </div>
                        &nbsp;
                        <input type="button" value="Save Changes" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#Modal2"/>
                    </div>

                     <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Confirm Update</h5>
                                                <button class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to update motorist's status?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-secondary">Save</button>
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