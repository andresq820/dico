@extends ('layouts.master')

@section('title')
Groups
@endsection

@section('link')
    <link href="{{ URL::to('/template/groups/group.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Groups</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-7">
            <a href="{{ URL::to('/group/create') }}" class="btn btn-info">New Group</a>
        </div>
        <div class="col-lg-2">
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sort Groups By<span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Name</a></li>
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
    
    <div class="tabs">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs">
                  <li role="presentation" class="active"><a href="#">My Groups</a></li>
                  <li role="presentation"><a href="#">All Groups</a></li>
                </ul>
<br>
            </div>
        </div>
    </div>
    
    <div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-2">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-10 text-right">
                        <h4>Marketing</h4>
                        <h4>Members: 26</h4>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <a href="{{ URL::to('group') }}" class="pull-left">View Group Details</a>
                <a href="{{ URL::to('group') }}" class="pull-right"><i class="fa fa-arrow-circle-right"></i></a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-2">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-10 text-right">
                        <h4>Sales</h4>
                        <h4>Members: 19</h4>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <a href="{{ URL::to('single_group') }}" class="pull-left">View Group Details</a>
                <a href="{{ URL::to('single_group') }}" class="pull-right"><i class="fa fa-arrow-circle-right"></i></a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-2">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-10 text-right">
                        <h4>Customer Service</h4>
                        <h4>Members: 32</h4>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <a href="{{ URL::to('single_group') }}" class="pull-left">View Group Details</a>
                <a href="{{ URL::to('single_group') }}" class="pull-right"><i class="fa fa-arrow-circle-right"></i></a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-2">
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <div class="col-xs-10 text-right">
                        <h4>Delivery</h4>
                        <h4>Members: 21</h4>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <a href="{{ URL::to('single_group') }}" class="pull-left">View Group Details</a>
                <a href="{{ URL::to('single_group') }}" class="pull-right"><i class="fa fa-arrow-circle-right"></i></a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
</div>    

@endsection