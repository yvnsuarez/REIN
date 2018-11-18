<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>REIN</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{ asset('assets/images/justREIN.png') }}"/>
    <link rel="shortcut icon" href="{{ asset('assets/images/justREIN.png') }}"/>

    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/pe-icon-7-filled.css') }}"/>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<style>
*{
    transition: all 0.6s;
}

html {
    height: 100%;
}

body{
    background-color: #DABC20;
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serifs;
    color: black;
    margin: 0;
}

#main{
    display: table;
    width: 100%;
    height: 100vh;
    text-align: center;
}

.fof{
	  display: table-cell;
	  vertical-align: middle;
}

.fof h1{
	  font-size: 50px;
	  display: inline-block;
	  padding-right: 12px;
	  animation: type .5s alternate infinite;
}


@keyframes type{
	  from{box-shadow: inset -3px 0px 0px #000000;}
	  to{box-shadow: inset -3px 0px 0px transparent;}
}
</style>
<body>
    {{ $exception->getMessage() }}
    <div id="main">
            <div class="fof">

                    <h1>Page not found. Go back to ...</h1>
                    <br/>
                    <h1>
                        <a href="{{ url()->previous() }}">
                            <img src="{{asset('/images/REIN01.png') }}" alt="Logo" width="150px" height="58x">
                        </a>
                    </h1>
            </div>
    </div>
</body>

</html>