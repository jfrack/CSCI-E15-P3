<br>
<form class="form-horizontal" role="form" method='POST'>

	<!-- TODO: set token value -->
	<!-- <input name="_token" type="hidden" value="foo"> -->
	<div class="form-group">
		<div class="col-sm-3 indent">
			<label for="userCnt" class="control-label">How many users (1-99)?</label>
		</div>
		<div class="col-sm-1">
			<input class="form-control" type="number" value="5" min="1" max="99" name="userCnt"  value="5" id="userCnt">
		</div>
	</div>
	<div class="form-group">
		<h3>Options:</h3>
		<div class="col-sm-2">
			<input type="checkbox" id="bd_cb">
			<label for="bd_cb" class="control-label">Birthdate</label>
		</div>
		<div class="col-sm-2">
			<input type="checkbox" id="profile_cb">
			<label for="profile_cb" class="control-label">Profile</label>
		</div>
		<div class="col-sm-2">
			<input type="checkbox" id="paswd_cb">
			<label for="paswd_cb" class="control-label">Password</label>
		</div>
	</div>
</div>
<input class="btn btn-primary" type="submit" name="submit" value="Generate"/>
<a href="index.php" role="button" class="btn btn-warning">Back Home</a>
</form>
<br>