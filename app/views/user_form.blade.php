<br>
<form class="form-inline" role="form" method='POST'>

	<!-- TODO: set token value -->
	<!-- <input name="_token" type="hidden" value="foo"> -->
	<div class="form-group">
		<label for="usrCnt" class="control-label">How many users (1-99)?</label>
		<input class="shadow form-control" type="number" value="5" min="1" max="99" name="usrCnt"  value="5" id="usrCnt">
	</div><br>
	<div class="form-group">
		<h3>Options:</h3>
		<input type="checkbox" name="usrid_cb" id="usrid_cb">
		<label for="usrid_cb" class="control-label">User ID</label><br>
		<input type="checkbox" name="pswd_cb" id="pswd_cb">
		<label for="pswd_cb" class="control-label">Password</label><br>
		<input type="checkbox" name="email_cb" id="email_cb">
		<label for="email_cb" class="control-label">Email</label><br>
		<input type="checkbox" name="birth_cb" id="birth_cb">
		<label for="birth_cb" class="control-label">Birthdate</label><br>
		<input type="checkbox" name="profile_cb" id="profile_cb">
		<label for="profile_cb" class="control-label">Profile</label><br>
		<input type="checkbox" name="secimg_cb" id="secimg_cb">
		<label for="secimg_cb" class="control-label">Security Image</label><br>
	</div>
</div><br><br>
<input class="btn btn-primary" type="submit" name="submit" value="Generate"/>
<a href="index.php" role="button" class="btn btn-warning">Back Home</a>
</form>
<br>