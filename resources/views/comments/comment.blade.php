<li>
	<div class="wrapper">
		<div class="emoji">
			<img src="/img/emojis/{{ $comment->emoji }}.svg">
		</div>
		
		<div class="content">
			<h3 class="text-uppercase">{{ $comment->user->name }}</h3>
			<div class="comment-text">{{ $comment->text }}</div>
		</div>
	</div>

	{{-- @include('comments.form', ['parentId' => $comment->id])

	@if(isset($comments[$comment->id]))
		@include('comments.list', ['collection' => $comments[$comment->id]])
	@endif --}}
</li>