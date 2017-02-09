<ul class="comments-wrapper">
    @foreach($comments as $comment)
        <li class="comment-item">
            <div class="outer-wrapper">
                <div class="comment-wrapper">
                    <div class="emoji">
                        <img src="/img/emojis/{{ $comment->emoji }}.svg" width="25" height="25" alt="Emoji" title="Emoji">
                    </div>
                    <div class="content">
                        <h3 class="article-title">
                            <a href="/articles/{{ \App\Article::find($comment->article_id)->id }}">
                                {{ \App\Article::find($comment->article_id)->title }}
                            </a>
                        </h3>
                        <p class="small text-muted"><i class="fa fa-clock-o"></i> {{ $comment->created_at->diffForHumans() }} by {{ \App\User::find($comment->user_id)->email }}</p>
                        <p>{!! nl2br($comment->text) !!}</p>
                    </div>
                </div>
                <status-button  :comment-approved="{{ $comment->approved }}"
                                :comment-id="{{ $comment->id }}"
                ></status-button>
            </div>
        </li>
    @endforeach
</ul>