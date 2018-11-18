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
    body{
    margin: 0;
    padding: 20px;
    background-color:#FFC900;
    font-family: arial;
  height: 700px
}

.info{
  position: absolute;
  top:0;
  left:0;
  padding: 10px 0;
  font-size: 110%;
  text-transform: capitalize;
  color:#FFC900;
  font-weight: 700;
  background-color:#fff;
  width:100%;
  text-align:center
}

.info a{
  text-decoration: none;
  color:#333
}
.info a:after{
  content:" | ";
  color:#FFC900
}

.info a:last-of-type:after{content:""}

.box{
    text-align: center;
    position: relative;
}

.box div{
    width: 250px;
    height: 80px;
    line-height: 80px;
    color:#ffc900;
    background-color: #fff;
    font-size: 280%;
    position: absolute;
    top:490px;
    left:40%;
    text-transform: capitalize;
    animation: moving 8s linear infinite;
  -webkit-animation: moving 8s linear infinite;
  -moz-animation: moving 8s linear infinite;
  -o-animation: moving 8s linear infinite;
  
    transform-origin: 50% -400%;
  -webkittransform-origin: 50% -400%;
  -moz-transform-origin: 50% -400%;
  -o-transform-origin: 50% -400%;
}

.box div:before{
    content: "";
    width: 25px;
    height: 25px;
    background-color:#fff;
    border-radius: 50%;
    display: block;
    position: absolute;
    left:45%;
    top:-350px;
}

.box div:after{
    content: "";
    width: 3px;
    height: 335px;
    background-color: #fff;
    display: block;
    position: absolute;
    left: 50%;
    top: -330px;
}

.box p{
    position: absolute;
    top:560px;
    left:38%;
    font-weight: 700;
    text-transform: uppercase;
  color:#fff;
  width: 300px
}

.box p span{
  display: block;
  font-size:300%
}

@keyframes moving{
    0%,100%{
        transform: rotate(0)
    }
    25%{
        transform: rotate(3deg);
    }
    50%{
        transform: rotate(-3deg)
    }
}

@-webkit-keyframes moving{
    0%,100%{
        transform: rotate(0)
    }
    25%{
        transform: rotate(3deg);
    }
    50%{
        transform: rotate(-3deg)
    }
}

@-moz-keyframes moving{
    0%,100%{
        transform: rotate(0)
    }
    25%{
        transform: rotate(3deg);
    }
    50%{
        transform: rotate(-3deg)
    }
}

@-o-keyframes moving{
    0%,100%{
        transform: rotate(0)
    }
    25%{
        transform: rotate(3deg);
    }
    50%{
        transform: rotate(-3deg)
    }
}
</style>
<body>
    {{ $exception->getMessage() }}
    <div class="box">
        <div>
            Close!
        </div>
        <p>
            <span>Error 404 !</span> 
            Sorry the page you are looking for isn't found.
        </p>
    </div>
</body>

</html>