<br>
<?='How many paragraphs would you like?<br><br>'; ?>
<form method='POST'>

	<!-- TODO: set token value -->
	<input name="_token" type="hidden" value="foo">
	<label for="paragraphs">Paragraphs</label>
	<input maxlength="2" name="paragraphs" type="text" value="5" id="paragraphs"> (Max: 99)

	<br><br>

	<input class="btn btn-primary" type="submit" name="submit" value="Generate"/>
</form>
<br>