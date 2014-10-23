<!DOCTYPE html>
<html>
@include('header')
<body>
	<h1>Lorem Ipsum Generator</h1>
	@include('lorem_form')
	@if ($_POST)
		<div class="display_box">
			@include('lorem_content')
		</div>
	@endif
	<br>
</body>
</html>