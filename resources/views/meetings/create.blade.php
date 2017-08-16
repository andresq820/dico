@extends ('layouts.master')

@section('meta')

@endsection

@section('title')
Create New Meeting
@endsection

@section('link')

@endsection

@section('content')
<div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create New Meeting</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-8">
            <form>
                <div class="form-group">
                   {{ csrf_field() }}
                    <label for="subject">Meeting Subject</label>
                    <input type="text" class="form-control" id="subject" placeholder="Meeting Subject">
                </div>
                
                <div class="form-group">
                    <label for="description">Meeting description (Optional)</label>
                    <textarea class="form-control" name="description" id="description" placeholder="Description (Optional)" cols="20" rows="4"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="groups">Members</label>
                    <input type="text" class="form-control" id="groups" placeholder="Members">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputFile">Upload file(s)</label>
                    <input type="file" id="exampleInputFile">
                </div>
                <hr>
                <footer>
                    <div class="form-group">
                        <a class="btn btn-primary" class="form-control" style="float: right;">Create</a>
                        <a class="btn btn-default" class="form-control" style="float: right;">Cancel</a>    
                    </div>                    
                </footer>

            </form>    
        </div>
    </div>
    
</div>
@endsection