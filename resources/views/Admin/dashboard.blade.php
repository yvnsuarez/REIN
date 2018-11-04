<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
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


    <link href="{{ asset('assets/weather/css/weather-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/calendar/fullcalendar.css') }} rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
    <link href="{{ asset('assets/css/charts/chartist.min.css') }}" rel="stylesheet"/> 
    <link href="{{ asset('assets/css/lib/vector-map/jqvmap.min.css') }}" rel="stylesheet"/> 

    <script type="text/javascript">

        var analytics = JSON.parse("{{ json_encode($data) }}");
          // Load the Visualization API and the corechart package.
          google.charts.load('current', {'packages':['corechart']});
  
          // Set a callback to run when the Google Visualization API is loaded.
          google.charts.setOnLoadCallback(drawChart);
  
  
          function drawChart() {
  
  
          // Create the data table.
          var data = google.visualization.arrayToDataTable();
  
          // Set chart options
          var options = {'title':'Service Type Charts'};
  
          // Instantiate and draw our chart, passing in some options.
          var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
          chart.draw(data, options);
          }
     </script>

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
                            <a class="nav-link" href="{{route ('admin.logout') }}"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div> 
                </div>  
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                        <div class="row m-0">
                            <div class="col-sm-4">
                                <div class="page-header float-left">
                                    <div class="page-title">
                                        <h1>Dashboard</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
        </div>
        
        <div class="content pb-0">
                <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="stat-widget-five">
                                        <div class="stat-icon dib flat-color-1">
                                            <i class="fa fa-wrench"></i>
                                        </div>
                                        <div class="stat-content">
                                            <div class="text-left dib"> 
                                                <div class="stat-text"><span class="count">{{$cancelled}}</span></div>
                                                <div class="stat-heading">Cancelled Services</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="stat-widget-five">
                                            <div class="stat-icon dib flat-color-2">
                                                <i class="fa fa-truck"></i>
                                            </div>
                                            <div class="stat-content">
                                                <div class="text-left dib">
                                                    <div class="stat-text"><span class="count">{{$ongoing}}</span></div>
                                                    <div class="stat-heading">Ongoing Services</div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="stat-widget-five">
                                        <div class="stat-icon dib flat-color-2">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="stat-content">
                                            <div class="text-left dib">
                                                <div class="stat-text"><span class="count">{{$done}}</span></div>
                                                <div class="stat-heading">Services Done</div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                <div class="col-sm-6 col-lg-3">
                                        <div class="card text-white bg-flat-color-6">
                                            <div class="card-body">
                                                <div class="card-left pt-1 float-left">
                                                    <h3 class="mb-0 fw-r">
                                                        <span class="count">{{$partners}}</span>
                                                    </h3>
                                                    <p class="text-light mt-1 m-0">Partners</p>
                                                </div><!-- /.card-left -->
                
                                                <div class="card-right float-right text-right">
                                                        <i class="icon fade-5 icon-lg pe-7f-users"></i>
                                                    </div><!-- /.card-right -->
                
                                            </div>
                
                                        </div>
                                    </div>
                                    <!--/.col-->
                                <div class="col-sm-6 col-lg-3">
                                    <div class="card text-white bg-flat-color-1">
                                        <div class="card-body">
                                            <div class="card-left pt-1 float-left">
                                                <h3 class="mb-0 fw-r">
                                                    <span class="count">{{$assistants}}</span>
                                                </h3>
                                                <p class="text-light mt-1 m-0">Assistants</p>
                                            </div><!-- /.card-left -->
            
                                            <div class="card-right float-right text-right">
                                                    <i class="icon fade-5 icon-lg pe-7f-users"></i>
                                                </div><!-- /.card-right -->
            
                                        </div>
            
                                    </div>
                                </div>
                                <!--/.col-->
            
                                
            
                                <div class="col-sm-6 col-lg-3">
                                    <div class="card text-white bg-flat-color-3">
                                        <div class="card-body">
                                            <div class="card-left pt-1 float-left">
                                                <h3 class="mb-0 fw-r">
                                                    <span class="count">{{$motorists}}</span>
                                                </h3>
                                                <p class="text-light mt-1 m-0">Motorists</p>
                                            </div><!-- /.card-left -->
            
                                            <div class="card-right float-right text-right">
                                                <i class="icon fade-5 icon-lg pe-7f-users"></i>
                                            </div><!-- /.card-right -->
            
                                        </div>
            
                                    </div>
                                </div>
                                <!--/.col-->
            
                                <div class="col-sm-6 col-lg-3">
                                    <div class="card text-white bg-flat-color-2">
                                        <div class="card-body">
                                            <div class="card-left pt-1 float-left">
                                                <h3 class="mb-0 fw-r">
                                                    <span class="count">{{$totalusers}}</span>
                                                </h3>
                                                <p class="text-light mt-1 m-0">Total users</p>
                                            </div><!-- /.card-left -->
            
                                            <div class="card-right float-right text-right">
                                                    <i class="icon fade-5 icon-lg pe-7f-users"></i>
                                                </div><!-- /.card-right -->
            
                                        </div>
            
                                    </div>
                                </div>
                                <!--/.col-->
        </div> 
            <!-- Widgets End -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">  
                        <div class="card-body">
                            <h4 class="box-title">Charts</h4>
                            <div id="chart_div" style="width:750px; height:450px;">
                                </div>
                            </div>
                </div>
        </div>  
    </div>
            
        <div class="clearfix"></div>

        <footer class="site-footer">
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js">
    </script>
</body>
</html>
