@extends('patient.layouts.patient')

@section('content')
    <!-- page content -->
    <!-- top tiles -->
    {{-- <div class="row tile_count">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-users"></i>Total Patients</span>
            <div class="count green">{{ $counts['users'] }}</div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-users"></i>Total Employees</span>
            <div class="count green">{{ $counts['users'] }}</div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-users"></i>Total Doctors</span>
            <div class="count green">{{ $counts['users'] }}</div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user-times "></i>Appointments</span>
            <div>
                <span class="count green">{{  $counts['users'] - $counts['users_inactive'] }}</span>
                <span class="count">/</span>
                <span class="count red">{{ $counts['users_inactive'] }}</span>
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-lock"></i>Total Questions</span>
            <div>
                <span class="count green">{{  $counts['protected_pages'] }}</span>
            </div>
        </div>
    </div> --}}
    <!-- /top tiles -->

    {{--Carousel--}}
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="row x_title">
                    <div class="col-md-6">
                        <h3> Artificial LimbCare(PVT) LTD. Management System
                        </h3>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="row">
            <div class="container">
    
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                      </ol>
                  
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="img/bg-img/bg1.jpg" alt="Los Angeles" width="1800px" height="800px">
                        </div>
                  
                        <div class="item">
                          <img src="img/bg-img/bg3.jpg" alt="Chicago" width="1800px" height="800px">
                        </div>
                      
                        <div class="item">
                          <img src="img/bg-img/bg4.jpg" alt="New york" width="1800px" height="800px">
                        </div>
                      </div>
                  
                      <!-- Left and right controls -->
                      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                  
    </div>
@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/dashboard.js')) }}
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection
