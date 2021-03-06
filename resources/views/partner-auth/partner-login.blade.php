<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{{ asset('images/favicon.ico') }}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>REIN Partner</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{ asset('assets/images/REIN01.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/REIN01.png') }}"/>

    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/pe-icon-7-filled.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cs-skin-elastic.css') }}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="rein">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <br />
                        <img class="align-content" src="{{  asset('/images/Partner-Login.png') }}" width="220px" height="160px">

                </div>
                <div class="login-form">
                    <form method="POST" action="{{ route('partner.login.submit') }}" aria-label="{{ __('Login') }}">
                            @csrf

                          {{-- INVALID LOGIN ERROR MESSAGE --}}
                          @if (\Session::has('failure'))
                          <div class="alert alert-danger " role="alert">
                              {!! \Session::get('failure') !!}
                          </div>
                          @endif

                        <div class="form-group">
                            <label>Email address</label>
                            <input id="Email" type="Email" placeholder="Email"
                            class="form-control{{ $errors->has('Email') ? ' is-invalid' : '' }}"
                            name="Email" value="{{ old('Email') }}" autocomplete="off">

                            @if ($errors->has('Email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input id="password" type="password" placeholder="Password"
                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" autocomplete="false" autocomplete="off">

                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                            <div class="col-md-6 pull-center">
                            {!! app('captcha')->display() !!}
                            @if ($errors->has('g-recaptcha-response'))
                            <span class="help-block" role="alert">
                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                            @endif
                          </div>
                        </div>
                        <button type="submit" class="btn btn-secondary btn-block m-b-30 m-t-30">
                                {{ __('Login') }}
                            </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

</body>
</html>
