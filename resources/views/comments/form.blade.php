<form method="POST" action="/articles/{{ $article->id }}/comments">

	{{ csrf_field() }}

	@if(isset($parentId))

		<input type="hidden" name="parent_id" value="{{ $parentId }}">

	@endif

	<textarea name="text"></textarea> <br>

	<button type="submit">Reply</button>
</form>