@extends('layouts.Admin')

@section('content')
<!-- Widgets  -->
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-five">
                    <div class="stat-icon dib flat-color-1">
                        <i class="pe-7f-cash"></i>
                    </div>
                    <div class="stat-content">
                        <div class="text-left dib"> 
                            <div class="stat-text">$<span class="count">23569</span></div>
                            <div class="stat-heading">Revenue</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-five">
                    <div class="stat-icon dib flat-color-2">
                        <i class="pe-7f-cart"></i>
                    </div>
                    <div class="stat-content">
                        <div class="text-left dib">
                            <div class="stat-text"><span class="count">3435</span></div>
                            <div class="stat-heading">Sales</div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-five">
                    <div class="stat-icon dib flat-color-3">
                        <i class="pe-7f-browser"></i>
                    </div>
                    <div class="stat-content">
                        <div class="text-left dib"> 
                            <div class="stat-text"><span class="count">349</span></div>
                            <div class="stat-heading">Templates</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-five">
                    <div class="stat-icon dib flat-color-4">
                        <i class="pe-7f-users"></i>
                    </div>
                    <div class="stat-content">
                        <div class="text-left dib"> 
                            <div class="stat-text"><span class="count">2986</span></div>
                            <div class="stat-heading">Clients</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Line Chart </h4>
                    <canvas id="lineChart">

                    </canvas>
                </div>
            </div>
        </div><!-- /# column -->
    <!--  Traffic  End -->
@endsection
