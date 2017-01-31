<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form class="form-horizontal" role="form" method="POST" action="{{ url('subscribers/' . $subscriber->id) }}">

		<input type="hidden" name="_method" value="PATCH">
		{{ csrf_field() }}

		<div class="form-group">
			<label for="notify">Want subscriptions?</label>
			<input type="checkbox" name="notify" id="notify">
		</div>

		<div class="form-group">
			<input type="submit" value="Update">
		</div>
	</form>
</body>
</html>