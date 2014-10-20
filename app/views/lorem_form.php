<br>
<?='How many paragraphs would you like?<br><br>'; ?>
<form method='POST'>

	<!-- TODO: set token value -->
	<input name="_token" type="hidden" value="foo">
	<label for="parCnt">Paragraphs</label>
	<input maxlength="2" name="parCnt" type="text" value="5" id="parCnt"> (Max: 99)
	<br><br>
	<input class="btn btn-primary" type="submit" name="submit" value="Generate"/>
	<a href="index.php" role="button" class="btn btn-warning">Back Home</a>
</form>
<br>