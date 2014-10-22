<br>
<form class="form-inline" role="form" method='POST'>

	<!-- TODO: set token value -->
	<!-- <input name="_token" type="hidden" value="foo"> -->
	<div class="form-group">
		<label for="usrCnt" class="control-label">How many users (1-99)?</label>
		<input class="form-control" type="number" value="5" min="1" max="99" name="usrCnt"  value="5" id="usrCnt">
	</div><br>
	<div class="form-group">
		<h3>Options:</h3>
		<input type="checkbox" id="userid_cb">
		<label for="userid_cb" class="control-label">User ID</label><br>
		<input type="checkbox" id="paswd_cb">
		<label for="paswd_cb" class="control-label">Password</label><br>
		<input type="checkbox" id="email_cb">
		<label for="email_cb" class="control-label">Email</label><br>
		<input type="checkbox" id="birth_cb">
		<label for="birth_cb" class="control-label">Birthdate</label><br>
		<input type="checkbox" id="profile_cb">
		<label for="profile_cb" class="control-label">Profile</label><br>
	</div>
</div><br><br>
<input class="btn btn-primary" type="submit" name="submit" value="Generate"/>
<a href="index.php" role="button" class="btn btn-warning">Back Home</a>
</form>
<br>