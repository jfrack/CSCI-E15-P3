<br>
<form class="form-inline" role="form" method='POST'>

	<!-- TODO: set token value -->
	<!-- <input name="_token" type="hidden" value="foo"> -->

	<div class="form-group">
		<label class="control-label" for="parCnt">How many paragraphs (1-99)?</label>
		<!-- use previous user input otherwise default to 5 paragraphs -->
		<input class="shadow form-control" type="number" value=<?php echo isset($_POST['parCnt']) ? $parCnt : '5'; ?> min="1" max="99" name="parCnt" id="parCnt">
	</div><br><br>
	<input class="btn btn-primary" type="submit" name="submit" value="Generate"/>
	<a class="btn btn-warning" href="index.php" role="button">Back Home</a>
</form>
<br>