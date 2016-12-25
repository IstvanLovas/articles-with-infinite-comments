<li>
	<h3>{{ $comment->user->name }} said...</h3>
	<div>{{ $comment->text }}</div>

	@include('comments.form', ['parentId' => $comment->id])

	@if(isset($comments[$comment->id]))
		@include('comments.list', ['collection' => $comments[$comment->id]])
	@endif
</li>