<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>REIN</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400">

        <!-- Styles -->
        <style>
            @import url(https://fonts.googleapis.com/css?family=Lato:100,300,400);

input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
  color: #000000;
  font-size: 0.875em;
}

input:focus::-webkit-input-placeholder, textarea:focus::-webkit-input-placeholder {
  color: #000000;
}

input::-moz-placeholder, textarea::-moz-placeholder {
  color: #000000;
  font-size: 0.875em;
}

input:focus::-moz-placeholder, textarea:focus::-moz-placeholder {
  color: #000000;
}

input::placeholder, textarea::placeholder {
  color: #000000;
  font-size: 0.875em;
}

input:focus::placeholder, textarea::focus:placeholder {
  color: #000000;
}

input::-ms-placeholder, textarea::-ms-placeholder {
  color: #000000;
  font-size: 0.875em;
}

input:focus::-ms-placeholder, textarea:focus::-ms-placeholder {
  color: #000000;
}

/* on hover placeholder */

input:hover::-webkit-input-placeholder, textarea:hover::-webkit-input-placeholder {
  color: #000000;
  font-size: 0.875em;
}

input:hover:focus::-webkit-input-placeholder, textarea:hover:focus::-webkit-input-placeholder {
  color: #000000;
}

input:hover::-moz-placeholder, textarea:hover::-moz-placeholder {
  color: #000000;
  font-size: 0.875em;
}

input:hover:focus::-moz-placeholder, textarea:hover:focus::-moz-placeholder {
  color: #000000;
}

input:hover::placeholder, textarea:hover::placeholder {
  color: #000000;
  font-size: 0.875em;
}

input:hover:focus::placeholder, textarea:hover:focus::placeholder {
  color: #000000;
}

input:hover::placeholder, textarea:hover::placeholder {
  color: #000000;
  font-size: 0.875em;
}

input:hover:focus::-ms-placeholder, textarea:hover::focus:-ms-placeholder {
  color: #000000;
}

body {
  font-family: 'Lato', sans-serif;
  background: #DABC20;
  color: #000000;
}

header {
  position: relative;
  margin: 100px 0 25px 0;
  font-size: 2.3em;
  text-align: center;
  letter-spacing: 7px;
}

#form {
  position: relative;
  width: 500px;
  margin: 50px auto 100px auto;
}

input {
  font-family: 'Lato', sans-serif;
  font-size: 0.875em;
  width: 470px;
  height: 50px;
  padding: 0px 15px 0px 15px;
  
  background: transparent;
  outline: none;
  color: #000000;
  
  border: solid 1px #000000;
  border-bottom: none;
  
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
}

input:hover {
  background: #b3aca7;
  color: #000000;
}

textarea {
  width: 470px;
  max-width: 470px;
  height: 110px;
  max-height: 110px;
  padding: 15px;
  
  background: transparent;
  outline: none;
  
  color: #000000;
  font-family: 'Lato', sans-serif;
  font-size: 0.875em;
  
  border: solid 1px #b3aca7;
  
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
}

textarea:hover {
  background: #ffffff;
  color: #ffffff;
}

#submit {
  width: 502px;
  
  padding: 0;
  margin: -5px 0px 0px 0px;
  
  font-family: 'Lato', sans-serif;
  font-size: 0.875em;
  color: #000000;
  
  outline:none;
  cursor: pointer;
  
  border: solid 1px #000000;    
  border-top: none;
}

#submit:hover {
  color:#ffffff;
}

#captcha {
  width: 502px;
  
  padding: 0;
  margin: -5px 0px 0px 0px;
  
  font-family: 'Lato', sans-serif;
  font-size: 0.875em;
  color: #000000;
  
  outline:none;
  cursor: pointer;
  
  border: solid 1px #000000;    
  border-top: none;
}

#captcha:hover {
  color:#ffffff;
}

#forgot {
  width: 502px;
  
  padding: 0;
  margin: -5px 0px 0px 0px;
  
  font-family: 'Lato', sans-serif;
  font-size: 0.875em;
  color: #000000;
  
  outline:none;
  cursor: pointer;
  
  border: solid 1px #000000;    
  border-top: none;
}

#forgot:hover {
  color:#ffffff;
}


{{-- RECAPTCHA --}}

	.rc-anchor {
		border-radius: 3px;
		box-shadow: 0px 0px 4px 1px rgba(0, 0, 0, 0.08);
		-webkit-box-shadow: 0px 0px 4px 1px rgba(0, 0, 0, 0.08);
		-moz-box-shadow: 0px 0px 4px 1px rgba(0, 0, 0, 0.08)
	}

	.rc-inline-block {
		display: inline-block;
		height: 100%;
	}

	.rc-anchor-center-item {
		display: table-cell;
		vertical-align: middle;
	}

	.rc-anchor-center-container {
		display: table;
		height: 100%;
	}

	.rc-anchor-light {
		background: #f9f9f9;
		border: 1px solid #d3d3d3;
		color: #000
	}

	.rc-anchor-normal {
		height: 74px;
		width: 300px;
		position: relative;
	}

	.rc-anchor-normal .rc-anchor-content {
		height: 74px;
		width: 206px;
		float: left;
	}

	.rc-anchor-normal .rc-anchor-checkbox-label {
		width: 152px;
	}

	.rc-anchor-checkbox {
		margin: 0 12px 2px 12px;
	}

	.recaptcha-checkbox {
		border: none;
		font-size: 1px;
		height: 28px;
		margin: 4px;
		width: 28px;
		overflow: visible;
		outline: 0;
		vertical-align: text-bottom;
		display: block;
	}

	.recaptcha-checkbox-border {
		-webkit-border-radius: 2px;
		-moz-border-radius: 2px;
		border-radius: 2px;
		background-color: #fff;
		border: 2px solid #c1c1c1;
		font-size: 1px;
		height: 24px;
		position: absolute;
		width: 24px;
	}

	.rc-anchor-checkbox-label {
		font-family: Roboto, helvetica, arial, sans-serif;
		font-size: 14px;
		font-weight: 400;
		line-height: 17px;
	}

	.rc-anchor-normal-footer {
		display: inline-block;
		height: 74px;
		vertical-align: top;
	}

	.rc-anchor-logo-portrait {
		margin: 10px 0 0 26px;
		width: 58px;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
	}

	.rc-anchor-logo-img-portrait {
		background-size: 32px !important;
		height: 32px;
		margin: 0 13px 0 13px;
		width: 32px;
	}

	.rc-anchor-logo-img {
		background: url('https://www.gstatic.com/recaptcha/api2/logo_48.png');
		background-repeat: no-repeat;
	}

	.rc-anchor-logo-text {
		color: #9b9b9b;
		cursor: default;
		font-family: Roboto, helvetica, arial, sans-serif;
		font-size: 10px;
		font-weight: 400;
		line-height: 10px;
		margin-top: 5px;
		text-align: center;
	}

	.rc-anchor-normal .rc-anchor-pt,
	.rc-anchor-compact .rc-anchor-pt {
		color: #9b9b9b;
		font-family: Roboto, helvetica, arial, sans-serif;
		font-size: 8px;
		font-weight: 400;
	}

	.rc-anchor-normal .rc-anchor-pt {
		margin: 4px 13px 0 0;
		padding-right: 2px;
		position: absolute;
		right: 0px;
		text-align: right;
		width: 276px;
	}

	.rc-anchor-pt a:link,
	.rc-anchor-pt a:visited {
		color: #9b9b9b;
		text-decoration: none;
	}

	.recaptcha-checkbox-borderAnimation {
		background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFQAAANICAYAAABZl8i8AAAABmJLR…caGahTBej/IqDS5GVQOowHJTExMTExMTExMTExMTGx4Pb/Ab7rit24eUF+AAAAAElFTkSuQmCC);
		background-repeat: no-repeat;
		border: none;
		height: 28px;
		outline: 0;
		position: absolute;
		width: 28px;
	}

	.recaptcha-checkbox-spinner {
		background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAscCAYAAAALLkmiAAAABmJLR…OqmOwj9LFhB/6A26e0msmsRAxskuaQZKyUU1yatK+i/X9jsJ4YiehNDAAAAABJRU5ErkJggg==);
		background-repeat: no-repeat;
		border: none;
		height: 36px;
		left: -4px;
		outline: 0;
		position: absolute;
		top: -4px;
		width: 36px;
	}

	.recaptcha-checkbox-spinnerAnimation {
		background-repeat: no-repeat;
		border: none;
		height: 38px;
		left: -5px;
		outline: 0;
		position: absolute;
		top: -5px;
		visibility: hidden;
		width: 38px;
	}

	.recaptcha-checkbox-checkmark {
		background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAATsCAYAAADsAfBvAAAABmJLR…c8fQAAAIA4Ve/BleITOu7J3HehqXqHPH0AAAAAAAAAALr5H72AWmG4R73sAAAAAElFTkSuQmCC);
		background-repeat: no-repeat;
		border: none;
		height: 30px;
		left: -5px;
		outline: 0;
		position: absolute;
		width: 38px;
	}
        </style>
    </head>
    <body>
				<header>ADMIN LOGIN</header>
				
				<div class="container">
					@if(session()->has('alert'))
						<div class="content">
						<div class="alert alert-danger">
						<button type="button" class="close" data dismiss="alert" aria-hidden="true">&times;</button>
						<strong>{{session()->get('alert')}}</strong>
					</div>
				</div>
				@endif

        <form id="form" class="topBefore"  action="{{ route('admin.login.submit') }}" aria-label="{{ __('Login') }}">
            @csrf
                <input id="Email" type="Email" class="form-control{{ $errors->has('Email') ? ' is-invalid' : '' }}" 
                name="Email" value="{{ old('Email') }}" placeholder="E-MAIL" required autofocus>
            
                @if ($errors->has('Email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('Email') }}</strong>
                    </span>
                @endif
        
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                    name="password" placeholder="PASSWORD" required>
                
                @if ($errors)
                    <span class="invalid-feedback">
                        <strong>{{ $errors }}</strong>
                    </span>
                @endif

                <button type="submit" class="btn btn-primary">
									{{ __('Login') }}
								</button>
								<button type="submit" class="btn btn-primary">
									{{ __('Forgot Password?') }}
								</button>

                  
        </form> 
    </body>
</html>



