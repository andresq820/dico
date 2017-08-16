@extends ('layouts.master')

@section('title')
Groups
@endsection

@section('link')
    <link href="{{ URL::to('/template/users/user.css') }}" rel="stylesheet">
@endsection

@section('content')
   
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ URL::to('/user/create') }}" class="btn btn-info">New User</a>
            <br>
        </div>
        <div class="col-lg-4">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <a href="{{ URL::to('user') }}"><h4>Bhaumik Patel</h4></a>
                        <small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>email@example.com
                            <br />
                            <i class="fa fa-trophy"></i><a href="{{ URL::to('points/{user_id}') }}">Points: 1120</a>
                            <br />
                            <i class="fa fa-dashboard"></i>Role: Admin
                        </p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">
                                Groups</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Groups</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Management</a></li>
                                <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Customer Service</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <a href="{{ URL::to('user') }}"><h4>Bhaumik Patel</h4></a>
                        <small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>email@example.com
                            <br />
                            <i class="fa fa-trophy"></i><a href="{{ URL::to('points/{user_id}') }}">Points: 235</a>
                            <br />
                            <i class="fa fa-dashboard"></i>Role: Employee</p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">
                                Groups</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Groups</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Marketing</a></li>
                                <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Sales</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <a href="{{ URL::to('user') }}"><h4>Bhaumik Patel</h4></a> 
                        <small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>email@example.com
                            <br />
                            <i class="fa fa-trophy"></i><a href="{{ URL::to('points/{user_id}') }}">Points: 750</a>
                            <br />
                            <i class="fa fa-dashboard"></i>Role: Employee</p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">
                                Groups</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Groups</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Production</a></li>
                                <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Delivery</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>                                        
    </div>
</div>

@endsection


