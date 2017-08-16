@extends ('layouts.master')

@section('meta')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
@endsection

@section('title')
Post
@endsection

@section('link')
    <link href="{{ URL::to('/template/posts/css/posts.css') }}" rel="stylesheet">
@endsection

@section('content')

    <!-- Page Content -->
    <div class="container-fluid">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                <h1>{{ $post->title }}</h1>

                <!-- Author -->
                <p class="lead">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    &nbsp
                    by <a href="#">{{  $post->author }}</a>
                    <a href="{{ URL::to('') }}" class="btn btn-default" style="float: right">Settings</a>
                    <a href="{{ URL::to('') }}" class="btn btn-danger" style="float: right">Close Post</a>
                </p>
                <br>
                <!-- Date/Time -->
                <p>{{ $post->created_at->toFormattedDateString() }}</p>
                <p>Status: Active &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Type: Idea</p>

                <hr>

                <!-- Post Content -->
                <p>{{ $post->body }}</p>

                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    @include('layouts.error')
                    <form role="form" method="post" action="{{ $post->id }}/comments">
                       {{  csrf_field() }}
                        <div class="form-group">
                            <textarea name="body" class="form-control" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Comment -->
                <div class="commets">
                    @foreach($post->comments as $comment)
                        @include('posts.comments')
                    @endforeach
                </div>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4 style="text-align:center;">Tags</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled" style="text-align:center;">
                                <li><a href="#">Tag Name</a>
                                </li>
                                <li><a href="#">Tag Name</a>
                                </li>
                                <li><a href="#">Tag Name</a>
                                </li>
                                <li><a href="#">Tag Name</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->
@endsection
