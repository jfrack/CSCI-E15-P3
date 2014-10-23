<!DOCTYPE html>
<html>
@include('header')
<body>
	<h1>Lorem Ipsum Generator</h1>
	@include('lorem_form')
	@if ($_POST)
		<button class="btn btn-primary copy_button" id="copy-button" data-clipboard-text="Copy me!">Copy to Clipboard</button>
		<br><br>
		<div class="display_box" id="display-box">
			@include('lorem_content')
		</div>

		<!-- include JS from ZeroClipboard package -->
    	<script type="text/javascript" src="../vendor/zeroclipboard/zeroclipboard/dist/ZeroClipboard.js"></script>
    	<!-- and also custom JS for the "Copy to Clipboard" button logic -->
    	<script type="text/javascript" src="js/copyClip.js"></script>
	@endif
	<br>
</body>
</html>