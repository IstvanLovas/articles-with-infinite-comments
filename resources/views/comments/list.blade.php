<ul class="list-of-comments">
	@foreach($collection as $comment)
		@include('comments.comment')
	@endforeach
</ul>