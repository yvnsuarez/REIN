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
    <title>REIN Admin</title>
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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="{{ asset('assets/css/charts/chartist.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/lib/vector-map/jqvmap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/charts/chartist.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/lib/vector-map/jqvmap.min.css') }}" rel="stylesheet"/>

    <link rel="stylesheet" href="{{ asset('assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


      <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">





    {{-- <script type="text/javascript">
        var visitor =
        console.log(services);
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable(visitor);
            var options = {
                title: 'Site Visitor Line Chart',
                curveType: 'function',
                legend: { position: 'bottom' }
            };
            var chart = new google.visualization.LineChart(document.getElementById('linechart'));
            chart.draw(data, options);
        }
    </script> --}}

    <script type="text/javascript">
        $('.form-part input[type="checkbox"]').wrap('<div class="ns-check-box"><i></i></div>');
        $.fn.toggleCheckbox = function() {
            this.attr('checked', !this.attr('checked'));
        }
        $('.ns-check-box').on('click', function() {
            $(this).find(':checkbox').toggleCheckbox();
            $(this).toggleClass('checkedBox');
        });

    </script>


    <style>

        * {
            margin: 0;
            padding: 0;
            outline: 0;
        }


        .clearfix {
            clear: both;
        }

        .form-part {
            margin: 5px 0;
        }

        .form-part h2 {
            font-size: 25px;
            font-weight: 400;
            font-family: 'Josefin Sans', sans-serif;
            margin-bottom: 5px;
        }

        .text-input,
        .radio-button,
        .check-boxes {
            margin-bottom: 5px;
        }

        .text-input label,
        .radio-button label,
        .check-boxes label {
            display: block;
            margin-bottom: 3px;
            font-family: 'Josefin Sans', sans-serif;
            font-size: 14px;
            font-weight: 600;
        }


        .text-input input,
        .text-input textarea,
        .text-input select {
            padding: 10px;
            display: block;
            width: 83%;
            border: solid 3px #ccc;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
        }

        .text-input select {
            width: 80%;
            height: 50px;
        }


        .text-input textarea {
            height: 850px;
        }
        .sqr-input .text-input,
        .sqr-radio-input .radio-button,
        .sqr-check-input .check-boxes {
            float: left;
            width: 40%;
        }

        .sqr-input .text-input:nth-child(1),
        .sqr-radio-input .radio-button:nth-child(1),
        .sqr-check-input .check-boxes:nth-child(1) {
            margin-right: 40%;
        }

        .cub-input .text-input {
            float: left;
            width: 40%;
        }

        .cub-input .text-input:nth-child(1),
        .cub-input .text-input:nth-child(2) {
            margin-right: 10%;
        }


        .checkedBox i {
            bottom: 2px;
            -webkit-transform: rotateZ(0deg);
            -moz-transform: rotateZ(0deg);
            -o-transform: rotateZ(0deg);
            transform: rotateZ(0deg);
        }

        .check-boxes ul li {
            display: inline-block;
            vertical-align: top;
            margin-right: 30px;
            margin-bottom: 7px;
        }

        .sqr-radio-input .radio-button ul li,
        .sqr-check-input .check-boxes ul li {
            margin-right: 15px;
        }

        .check-boxes ul li span {
            display: inline-block;
            vertical-align: top;
            margin-top: 5px;
            font-family: 'Josefin Sans', sans-serif;
        }

        .sqr-input .text-input .sqr-input .text-input:nth-child(1) {
            margin-right: 15%;
            width: 40%;
        }

        .margin-bottom-zero {
            margin-bottom: 0px;
        }

         /* PASSWORD METER */
         /* PASSWORD METER */
        .short{
            font-weight:bold;
            color:#FF0000;
            font-size:small;
        }
        .weak{
            font-weight:bold;
            color:orange;
            font-size:small;
        }
        .good{
            font-weight:bold;
            color:#2D98F3;
            font-size:small;
        }
        .strong{
            font-weight:bold;
            color: limegreen;
            font-size:small;
        }
        .match{
            font-weight:bold;
            color: limegreen;
            font-size:small;
        }
        .nomatch{
            font-weight:bold;
            color:#FF0000;
            font-size:small;
        }



    </style>

</head>
<body>


    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="menu-title">
                        <hr/>
                    </li>
                    <li class="active">
                        <a href="{{ route('admin.dashboard') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">
                        <hr/>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/admin/partners') }}" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-cogs"></i>Partners</a>
                        </li>
                        <li class="menu-title">
                            <hr/>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url('/admin/motorists') }}" aria-haspopup="true" aria-expanded="false">
                                <i class="menu-icon fa fa-table"></i>Motorists</a>
                            </li>
                            <li class="menu-title">
                                <hr/>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('/admin/transactionlogs') }}" aria-haspopup="true" aria-expanded="false">
                                    <i class="menu-icon fa fa-th"></i>Transaction Logs</a>
                                </li>
                                <li class="menu-title">
                                    <hr/>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('admin.useractivity') }}" aria-haspopup="true" aria-expanded="false">
                                        <i class="menu-icon fa fa-th"></i>User Activity</a>
                                    </li>
                                    <li class="menu-title">
                                        <hr/>
                                    </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </nav>
                    </aside><!-- /#left-panel -->
                    <!-- Left Panel -->



                    <!-- Right Panel -->
                    <div id="right-panel" class="right-panel">

                        <!-- Header-->
                        <header id="header" class="header">
                            <div class="top-left">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="{{ route('admin.home') }}"><img src="{{asset('/images/REIN01.png') }}" alt="Logo" width="100px" height="45px"></a>
                                    <a class="navbar-brand hidden" href="{{ route('admin.home') }}"><img src="{{asset('/images/REIN01.png') }}" alt="Logo" width="100px" height="45px"></a>
                                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                                </div>
                            </div>
                            <div class="top-right">
                                <div class="header-menu">
                                    <div class="header-left">

                                        <div class="user-area dropdown float-right">
                                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="user-avatar rounded-circle" src="{{ asset('/images/user.png') }}" alt="User Avatar">
                                            </a>

                                            <div class="user-menu dropdown-menu">
                                                <a class="nav-link">{{Auth::user()->FirstName}} {{Auth::user()->LastName}}</a>
                                                <a class="nav-link" href="{{url('/admin/adminfunction')}}">Admin Function</a>
                                                <a class="nav-link" href="#" data-toggle="modal" data-target="#Modal"><i class="fa fa-power-off"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </header><!-- /header -->
                            <!-- Modal-->
                            <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Confirm Logout</h5>
                                            <button class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to Logout?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                                            <a href="{{route ('admin.logout') }}"  class="btn btn-secondary">Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="breadcrumbs">
                                @yield  ('content-header')
                            </div>

                            <div class="content pb-0">
                                @yield ('content')
                            </div>
                            <!-- Widgets End -->

                            <div class="clearfix"></div>

                            <footer class="site-footer" style="padding-left:20%">
                                <div class="footer-inner bg-white">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            Copyright &copy; 2018 REIN - Roadside Emergency Assistance Application
                                        </div>
                                    </div>
                                </div>
                            </footer>

                        </div><!-- /#right-panel -->


                        <script src="{{ asset('assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
                        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
                        <script src="{{ asset('assets/js/plugins.js') }}"></script>
                        <script src="{{ asset('assets/js/main.js') }}"></script>

                        <script src="{{ asset('assets/js/lib/chart-js/Chart.bundle.js') }}"></script>


                        <!--Chartist Chart-->
                        <script src="{{ asset('assets/js/lib/chartist/chartist.min.js') }}"></script>
                        <script src="{{ asset('assets/js/lib/chartist/chartist-plugin-legend.js') }}"></script>


                        <script src="{{ asset('assets/js/lib/flot-chart/jquery.flot.js') }}"></script>
                        <script src="{{ asset('assets/js/lib/flot-chart/jquery.flot.pie.js') }}"></script>
                        <script src="{{ asset('assets/js/lib/flot-chart/jquery.flot.spline.js') }}"></script>


                        <script src="{{ asset('assets/weather/js/jquery.simpleWeather.min.js') }}"></script>
                        <script src="{{ asset('assets/weather/js/weather-init.js') }}"></script>


                        <script src="{{ asset('assets/js/lib/moment/moment.js') }}"></script>
                        <script src="{{ asset('assets/calendar/fullcalendar.min.js') }}"></script>
                        <script src="{{ asset('assets/calendar/fullcalendar-init.js') }}"></script>

                        <script src='https://www.google.com/recaptcha/api.js'></script>

                        <script src="{{ asset('assets/js/lib/data-table/datatables.min.js') }}"></script>
                        <script src="{{ asset('assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
                        <script src="{{ asset('assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
                        <script src="{{ asset('assets/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
                        <script src="{{ asset('assets/js/lib/data-table/jszip.min.js') }}"></script>
                        <script src="{{ asset('assets/js/lib/data-table/pdfmake.min.js') }}"></script>
                        <script src="{{ asset('assets/js/lib/data-table/vfs_fonts.js') }}"></script>
                        <script src="{{ asset('assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
                        <script src="{{ asset('assets/js/lib/data-table/buttons.print.min.js') }}"></script>
                        <script src="{{ asset('assets/js/lib/data-table/buttons.colVis.min.js') }}"></script>
                        <script src="{{ asset('assets/js/lib/data-table/datatables-init.js') }}"></script>
                    </body>
                    </html>
