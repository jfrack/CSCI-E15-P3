<!DOCTYPE html>
<html>
@include('header')
<body>
	<h1>Random User Generator</h1>
	@include('user_form')
	@if ($_POST)
		<div class="display_box">
			@include('user_content')
		</div><br>
	@endif
</body>
</html>