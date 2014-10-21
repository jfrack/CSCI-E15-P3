<br>
<form class="form-inline" role="form" method='POST'>

	<!-- TODO: set token value -->
	<!-- <input name="_token" type="hidden" value="foo"> -->
	<div class="form-group">
		<label for="userCnt" class="control-label">How many users (1-99)?</label>
		<input class="form-control" type="number" value="5" min="1" max="99" name="userCnt"  value="5" id="userCnt">
	</div><br>
	<div class="form-group">
		<h3>Options:</h3>
		<input type="checkbox" id="bd_cb">
		<label for="bd_cb" class="control-label">Birthdate</label><br>
		<input type="checkbox" id="profile_cb">
		<label for="profile_cb" class="control-label">Profile</label><br>
		<input type="checkbox" id="paswd_cb">
		<label for="paswd_cb" class="control-label">Password</label>
	</div>
</div><br><br>
<input class="btn btn-primary" type="submit" name="submit" value="Generate"/>
<a href="index.php" role="button" class="btn btn-warning">Back Home</a>
</form>
<br>