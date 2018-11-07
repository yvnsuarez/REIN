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
                        <input type="submit" value="Save Changes" class="btn btn-secondary btn-sm"/>
                    </div>
                {!! Form::close() !!}

                </div>

            </div>
            </div>
            </div>

</div>
</div>
@endsection