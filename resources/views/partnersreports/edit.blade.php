@extends('layouts.Admin')

@section('content-header')
    <h1>
        Update
        <small>Update Partner</small>
    </h1>
@endsection
@section('content')  
        <div class="container">
            <div class="row justify-content-center">
                    <div class="col-md-8">
                        
                                <div class="card-body">
                                    {!! Form::model($user,array('route'=>['partners.update', $user->id], 'method'=>'PUT')) !!}
                                        <div class="form-group">
                                            {!! Form::label('BusinessName', 'Business Name')!!}
                                            {!! Form::text('BusinessName', null, ['class'=>'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('Address', 'Address')!!}
                                            {!! Form::text('Address', null, ['class'=>'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('City', 'City')!!}
                                            {!! Form::text('City', null, ['class'=>'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('ZipCode', 'Zip Code')!!}
                                            {!! Form::text('ZipCode', null, ['class'=>'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('BusinessRegistrationNo', 'Business Registration Number')!!}
                                            {!! Form::text('BusinessRegistrationNo', null, ['class'=>'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('LTFRBAccreditationNo', 'LTFRB Accreditation Number')!!}
                                            {!! Form::text('LTFRBAccreditationNo', null, ['class'=>'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('ContactNo', 'Contact Number')!!}
                                            {!! Form::text('ContactNo', null, ['class'=>'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('Email', 'E-mail')!!}
                                            {!! Form::email('Email', null, ['class'=>'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::button('Update Partner', ['type'=>'submit','class'=>'btn btn-primary']) !!}
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                                {{-- @if ($errors->has())
                                    <ul class="alert alert-danger">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>    
                                @endif --}}
                            </div>
                        </div>
                    </div>
@endsection