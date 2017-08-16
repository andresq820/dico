@extends ('layouts.master')

@section('meta')

@endsection

@section('title')
Create New User
@endsection

@section('link')

@endsection

@section('content')
<div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create New User</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-8">
            <form>
                <div class="form-group">
                   {{ csrf_field() }}
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Employee Name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <input type="text" class="form-control" id="role" placeholder="Role">
                </div>
                <div class="form-group">
                    <label for="role">Manager</label>
                    <input type="text" class="form-control" id="manager" placeholder="Manager">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Image</label>
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