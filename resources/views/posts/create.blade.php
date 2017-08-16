@extends ('layouts.master')

@section('meta')

@endsection

@section('title')
Create New Post
@endsection

@section('link')

@endsection

@section('content')
<div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create New Post</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-8">
            @include('layouts.error')
            <form method="POST" action="store">
            {{ csrf_field() }}  
                <div class="form-group">
                   <div class="checkbox" name="type">
                        <label class="checkbox-inline"><input type="checkbox" value="idea">Idea</label>
                        <label class="checkbox-inline"><input type="checkbox" value="question">Question</label>
                        <label class="checkbox-inline"><input type="checkbox" value="challenge">Challenge</label>
                   </div>
                </div>
                <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Post Title" >
                </div>
                <div class="form-group">
                    <label for="body">Post Body (Optional)</label>
                    <textarea class="form-control" name="body" id="body" placeholder="Post Body (Optional)" cols="20" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="groups">Group(s)</label>
                    <input type="text" class="form-control" name="groups" id="groups" placeholder="Groups" required>
                    <label for="tags">Tags</label>
                    <input type="text" class="form-control" name="tags" id="tags" placeholder="Tags">
                </div>
                <div class="form-group">
                    <label for="authors">Additional Author(s)</label>
                    <input type="text" class="form-control" name="authors" id="authors" placeholder="Additional Authors">
                </div>
                <div class="form-group">
                    <label for="annonymous" style="color: #999999; ">Post Anonymously</label>
                    <input type="checkbox" class="form-control" name="annonymous" id="annonymous">
                    <label for="file">Upload file(s)</label>
                    <input type="file" class="form-control" id="file" name="file">
                </div>
                <hr>
                <footer>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" class="form-control" style="float: right;">Create</button>
                        <button class="btn btn-default" class="form-control" style="float: right;">Cancel</button>    
                    </div>                    
                </footer>

            </form>    
        </div>
    </div>
    
</div>
@endsection