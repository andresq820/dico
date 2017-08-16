    <div class="media">
        <a class="pull-left" href="#">
            <img class="media-object" src="http://placehold.it/64x64" alt="">
        </a>
    
       <div class="media-body">
        
            <h4 class="media-heading"><small>{{ $post->created_at->diffForHumans() }}</small></h4>

            <div class="comment-body">
                {{ $comment->body }}
            </div>
        </div>
    </div>