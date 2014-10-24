<!DOCTYPE html>
<html>
@include('header')
<body>
	<h1>Lorem Ipsum Generator</h1>
	@include('lorem_form')
	@if ($_POST)
		<div class="col-xs-2 copy_button">
			<input class="btn btn-primary btn-block" type="button" id="copy-button" data-clipboard-target="clipboard-text" value="Copy to Clipboard" />
		</div>
		<br><br>
		<div class="display_box" id="clipboard-text">
			@include('lorem_content')
		</div>

		<!-- include JS from ZeroClipboard package -->
    	<script type="text/javascript" src={{ URL::to('packages/zeroclipboard/zeroclipboard/dist/ZeroClipboard.js') }}></script>
    	<!-- <script type="text/javascript" src={{ URL::to('js/ZeroClipboard.js') }}></script> -->
    	<!-- and also custom JS for the "Copy to Clipboard" button logic -->
    	<script type="text/javascript" src={{ URL::to('js/copy_clip.js') }}></script>
	@endif
	<br>
</body>
</html>