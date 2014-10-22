<br>
<!-- create form using Blade, defaults method to POST and inserts _token -->
{{ Form::open(array('class' => 'form-inline', 'url' => 'user')) }}
<div class="form-group">
	{{ Form::label('usrCnt', 'How many users (1-99)?', array('class' => 'control-label')) }}
	<!-- use previous user input otherwise default to 5 users -->
	<input class="shadow form-control" type="number" value=<?php echo isset($_POST['usrCnt']) ? $usrCnt : '5'; ?> min="1" max="99" name="usrCnt"  value="5" id="usrCnt">
</div><br>
<div class="form-group">
	<h3>Options:</h3>
	<input type="checkbox" name="usrid_cb" id="usrid_cb" <?php echo isset($_POST['usrid_cb']) ? 'checked="checked"' : ''; ?>>
	{{ Form::label('usrid_cb', 'User ID', array('class' => 'control-label')) }}<br>
	<input type="checkbox" name="pswd_cb" id="pswd_cb" <?php echo isset($_POST['pswd_cb']) ? 'checked="checked"' : ''; ?>>
	{{ Form::label('pswd_cb', 'Password', array('class' => 'control-label')) }}<br>
	<input type="checkbox" name="email_cb" id="email_cb" <?php echo isset($_POST['email_cb']) ? 'checked="checked"' : ''; ?>>
	{{ Form::label('email_cb', 'Email', array('class' => 'control-label')) }}<br>
	<input type="checkbox" name="birth_cb" id="birth_cb" <?php echo isset($_POST['birth_cb']) ? 'checked="checked"' : ''; ?>>
	{{ Form::label('birth_cb', 'Birthdate', array('class' => 'control-label')) }}<br>
	<input type="checkbox" name="profile_cb" id="profile_cb" <?php echo isset($_POST['profile_cb']) ? 'checked="checked"' : ''; ?>>
	{{ Form::label('profile_cb', 'Profile', array('class' => 'control-label')) }}<br>
	<input type="checkbox" name="secimg_cb" id="secimg_cb" <?php echo isset($_POST['secimg_cb']) ? 'checked="checked"' : ''; ?>>
	{{ Form::label('secimg_cb', 'Security Image', array('class' => 'control-label')) }}<br>
</div><br><br>
<input class="btn btn-primary" type="submit" name="submit" value="Generate"/>
<!-- <input class="btn btn-primary" type="reset" name="reset" value="Reset"/> -->
<!-- example of Bootstrap integration with Blade -->
{{ Form::reset('Reset', array('class' => 'btn btn-primary')) }}
<a href="index.php" role="button" class="btn btn-warning">Back Home</a>
{{ Form::close() }}
<br>