@extends ('layouts.master')

@section('meta')

@endsection

@section('title')
Group
@endsection

@section('link')
    <link href="{{ URL::to('/template/groups/group.css') }}" rel="stylesheet">
@endsection

@section('content')

    <!-- Page Content -->
<div class="container-fluid">
    <div class="top_pane">
        <div class="row">
            <div class="image">
                <div class="col-sm-4">
                   <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
            </div>
            </div>
            
            <div class="info">
                <div class="col-sm-4">
                   <h2>Marketing</h2>
                   <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>   

                   <hr>
                   <footer>
                       <author>Admin: Andres Quintero</author>
                       <br>
                       <br>
                       <button type="button" class="btn btn-info">Request to join</button>
                   </footer>
                </div>                
            </div>
            
            <div class="members">
                <div class="col-sm-4" style="border-left: 1px solid #999999;">
                <h4>Group Members</h4>
<br>
<br>
                <ul>
                    <li>Group Member Info</li>
<br>
<br>
                    <li>Group Member Info</li>
<br>
<br>                    
                    <li>Group Member Info</li>
<br>
<br>
                    <li>Group Member Info</li>
<br>
<br>
                    <li>Group Member Info</li>
                </ul>
                </div>    
            </div>
            
        </div>    
    </div>
<br>
<br>
    <div class="tabs">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs">
                  <li role="presentation" class="active"><a href="#">All Posts</a></li>
                  <li role="presentation"><a href="#">Active Posts</a></li>
                  <li role="presentation"><a href="#">Completed Posts</a></li>
                </ul>
            </div>
        </div>
    </div>
            
    <div class="search_bar">
        <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-4">
                <form action="#">
                    <label for="ideas" style="color: #999999; ">Ideas</label>
                    <input type="checkbox" name="ideas">

                    <label for="questions" style="color: #999999; ">Questions</label>
                    <input type="checkbox" name="questions">

                    <label for="challenges" style="color: #999999; ">Challenges</label>
                    <input type="checkbox" name="challenges">
                </form>
            </div>
            <div class="col-lg-2">
                <div class="button-group">
                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Filter by group   &nbsp<span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>&nbsp;Group 1</a></li>
                    <li><a href="#" class="small" data-value="option2" tabIndex="-1"><input type="checkbox"/>&nbsp;Group 2</a></li>
                    <li><a href="#" class="small" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;Group 3</a></li>
                    <li><a href="#" class="small" data-value="option4" tabIndex="-1"><input type="checkbox"/>&nbsp;Group 4</a></li>
                    <li><a href="#" class="small" data-value="option5" tabIndex="-1"><input type="checkbox"/>&nbsp;Group 5</a></li>
                    <li><a href="#" class="small" data-value="option6" tabIndex="-1"><input type="checkbox"/>&nbsp;Group 6</a></li>
                </ul>
                </div>
            </div>
        </div>    
    </div>

    <div class="post_list">
        <div class="row">
            <div class="col-lg-4">

                <div class="idea-container">

                <div class="idea-header">
                    <i class="fa fa-lightbulb-o fa-3x" aria-hidden="true" ></i>
                </div>

                <div class="idea-body">
                    <div class="idea-title">
                        <h2><a href="{{ URL::to('single_post') }}">Reducing marketing budget</a></h2>
                    </div>

                    <div class="idea-summary">
                        <p>Here is an example of a post without a cover image. You don't always have to have a cover image...</p>
                    </div>

                    <div class="idea-tags">
                        <ul>
                            <li><a href="#">design</a></li>
                            <li><a href="#">web dev</a></li>
                            <li><a href="#">css</a></li>
                        </ul>
                        </div>
                </div>

                <div class="idea-footer-line">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-6">
                               <div class="idea-published-info">
                                    <ul>
                                        <li>by: Andres Quintero</li>
                                        <li>12 days ago</li>
                                        <li>Group: Marketing</li>
                                        <li>Status: Active</li>
                                    </ul>                                        
                               </div>
                            </div>
                            <div class="col-lg-6">
                               <div class="idea-icons">
                                    <ul>
                                        <li class="idea-comments"><a href="#"><i class="fa fa-comment-o fa-2x idea-icon" aria-hidden="true"></i><span>8</span></a></li>
                                        <li class="shares"><a href="#"><i class="fa fa-thumbs-o-up fa-2x idea-icon" aria-hidden="true"></i><span>3</span></a></li>
                                    </ul>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>

                </div>
            <div class="col-lg-4">

                <div class="question-container">

                <div class="question-header">
                    <i class="fa fa-question-circle-o fa-3x" aria-hidden="true" ></i>
                </div>

                <div class="question-body">
                    <div class="idea-title">
                        <h2><a href="{{ URL::to('single_post') }}">How does flsa overtime work </a></h2>
                    </div>

                    <div class="question-summary">
                        <p>Here is an example of a post without a cover image. You don't always have to have a cover image...</p>
                    </div>

                    <div class="question-tags">
                        <ul>
                            <li><a href="#">design</a></li>
                            <li><a href="#">web dev</a></li>
                            <li><a href="#">css</a></li>
                        </ul>
                        </div>
                </div>

                <div class="question-footer-line">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-6">
                               <div class="question-published-info">
                                    <ul>
                                        <li>by: Andres Quintero</li>
                                        <li>12 days ago</li>
                                        <li>Group: Customer Service</li>
                                        <li>Status: Active</li>
                                    </ul>                                        
                               </div>
                            </div>
                            <div class="col-lg-6">
                               <div class="question-icons">
                                    <ul>
                                        <li class="idea-comments"><a href="#"><i class="fa fa-comment-o fa-2x idea-icon" aria-hidden="true"></i><span>8</span></a></li>
                                        <li class="shares"><a href="#"><i class="fa fa-thumbs-o-up fa-2x idea-icon" aria-hidden="true"></i><span>3</span></a></li>
                                    </ul>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>

                </div>
            <div class="col-lg-4">

                <div class="challenge-container">

                <div class="challenge-header">
                    <i class="fa fa-exclamation-circle fa-3x" aria-hidden="true" ></i>
                </div>

                <div class="challenge-body">
                    <div class="challenge-title">
                        <h2><a href="{{ URL::to('single_post') }}">Delivery not happening on time</a></h2>
                    </div>

                    <div class="challenge-summary">
                        <p>Here is an example of a post without a cover image. You don't always have to have a cover image...</p>
                    </div>

                    <div class="challenge-tags">
                        <ul>
                            <li><a href="#">design</a></li>
                            <li><a href="#">web dev</a></li>
                            <li><a href="#">css</a></li>
                        </ul>
                        </div>
                </div>

                <div class="challenge-footer-line">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-6">
                               <div class="challenge-published-info">
                                    <ul>
                                        <li>by: Andres Quintero</li>
                                        <li>12 days ago</li>
                                        <li>Group: Delivery, Production</li>
                                        <li>Status: closed</li>
                                    </ul>                                        
                               </div>
                            </div>
                            <div class="col-lg-6">
                               <div class="challenge-icons">
                                    <ul>
                                        <li class="challenge-comments"><a href="#"><i class="fa fa-comment-o fa-2x challenge-icon" aria-hidden="true"></i><span>8</span></a></li>
                                        <li class="shares"><a href="#"><i class="fa fa-thumbs-o-up fa-2x challenge-icon" aria-hidden="true"></i><span>3</span></a></li>
                                    </ul>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>

                </div>
        </div>        
    </div>


</div>
    <!-- /.container -->
@endsection
