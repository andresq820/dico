@extends ('layouts.master')

@section('title')
Meetings
@endsection

@section('link')
    <link href="{{ URL::to('/template/groups/meeting.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Meetings</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-3">
            <a href="{{ URL::to('/meeting/create') }}" class="btn btn-info">New Meeting</a>
            
        </div>
        <div class="col-lg-4">
              <label for="ideas" style="color: #999999; ">Active Meetings</label>
               <input type="checkbox" name="ideas">

               <label for="questions" style="color: #999999; ">Closed Meetings</label>
               <input type="checkbox" name="questions">
        </div>
        <div class="col-lg-2">
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sort Meetings By<span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Title</a></li>
                    <li><a href="#">Total Members</a></li>
                    <li><a href="#">Date Created</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="search input-group">
                <input type="text" class="form-control" placeholder="Search groups">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="tabs">
                <ul class="nav nav-tabs">
                    <li role="presentation" class="active"><a href="#">My Meetings</a></li>
                    <li role="presentation"><a href="#">All Meetings</a></li>
                </ul>
                <br>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="meeting">
                <!-- Title -->
                <a href="{{  URL::to('meeting')}}"><h1>Meeting Title</h1></a>

                <!-- Author -->
                <p class="lead">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    &nbsp
                    by <a href="#">Andres Quintero</a>
                    <br>&nbsp
                    Members joined: <a href="#">13</a>
                </p>
                <!-- Date/Time -->
                <p>Created on: August 23, 2016 at 1:00 PM</p>
                <p>Status: Active</p>

                <hr> 
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="meeting">
                <!-- Title -->
                <a href="#"><h1>Meeting Title</h1></a>

                <!-- Author -->
                <p class="lead">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    &nbsp
                    by <a href="#">Annonymous</a>
                    <br>&nbsp
                    Members joined: <a href="#">4</a>
                </p>
                <!-- Date/Time -->
                <p>Created on: August 1, 2016 at 9:00 AM</p>
                <p>Status: Closed</p>

                <hr> 
            </div>    
        </div>    

        <div class="col-lg-4">    
            <div class="meeting">
                <!-- Title -->
                <a href="#"><h1>Meeting Title</h1></a>

                <!-- Author -->
                <p class="lead">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    &nbsp
                    by <a href="#">John Doe</a>
                    <br>&nbsp
                    Members joined: <a href="#">7</a>
                </p>
                <!-- Date/Time -->
                <p>Created on: July 31, 2016 at 4:00 PM</p>
                <p>Status: Active</p>

                <hr>  
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-4">
            <div class="meeting">
                <!-- Title -->
                <a href="#"><h1>Meeting Title</h1></a>

                <!-- Author -->
                <p class="lead">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    &nbsp
                    by <a href="#">Michelle Johnson</a>
                    <br>&nbsp
                    Members joined: <a href="#">10</a>
                </p>
                <!-- Date/Time -->
                <p>Created on: July 21, 2016 at 10:00 AM</p>
                <p>Status: Active</p>

                <hr> 
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="meeting">
                <!-- Title -->
                <a href="#"><h1>Meeting Title</h1></a>

                <!-- Author -->
                <p class="lead">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    &nbsp
                    by <a href="#">Annonymous</a>
                    <br>&nbsp
                    Members joined: <a href="#">4</a>
                </p>
                <!-- Date/Time -->
                <p>Created on: July 3, 2016 at 1:00 PM</p>
                <p>Status: Active</p>

                <hr> 
            </div>    
        </div>    

        <div class="col-lg-4">    
            <div class="meeting">
                <!-- Title -->
                <a href="#"><h1>Meeting Title</h1></a>

                <!-- Author -->
                <p class="lead">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    &nbsp
                    by <a href="#">Will Smith</a>
                    <br>&nbsp
                    Members joined: <a href="#">7</a>
                </p>
                <!-- Date/Time -->
                <p>Created on: May 13, 2016 at 3:00 PM</p>
                <p>Status: Closed</p>

                <hr>  
            </div>
        </div>
    </div>
</div>

@endsection
