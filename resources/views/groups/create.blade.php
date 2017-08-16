@extends ('layouts.master')

@section('meta')

@endsection

@section('title')
Create New Group
@endsection

@section('link')

@endsection

@section('content')
<div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create New Group</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-8">
            <form>
                <div class="form-group">
                   {{ csrf_field() }}
                    <label for="name">Group Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Group Name">
                </div>
                <div class="form-group">
                    <label for="group_description">Description</label>
                    <textarea class="form-control" name="group_description" id="group_description" placeholder="Group Description" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="admin">Group Admin</label>
                    <input type="text" class="form-control" id="admin" placeholder="Group Admin">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Group Image</label>
                    <input type="file" id="exampleInputFile">
                </div>
                <div class="form-group">
                    <a class="btn btn-primary" class="form-control" style="float: right;">Create</a>
                    <a class="btn btn-default" class="form-control" style="float: right;">Cancel</a>    
                </div>
            </form>    
        </div>
    </div>
</div>
@endsection