<form method="POST" class="form" action="/articles/{{ $article->id }}/comments">

	{{ csrf_field() }}

	@if(isset($parentId))
		<input type="hidden" name="parent_id" value="{{ $parentId }}">
	@endif
	
	<textarea name="text" class="form-control" placeholder="WRITE YOUR RESPONSE..."></textarea> <br>

	<div class="form-group">
		<button type="submit" class="btn btn-primary text-uppercase">Submit comment</button>
	</div>
</form>