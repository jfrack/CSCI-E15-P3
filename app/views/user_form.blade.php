<br>
<!-- create form using Blade, defaults method to POST and inserts _token -->
{{ Form::open(array('class' => 'form-inline', 'url' => 'user')) }}
<div class="form-group">
	{{ Form::label('usrCnt', 'How many users (1-99)?', array('class' => 'control-label')) }}
	<!-- use previous user input otherwise default to 5 users -->
	<!-- HTML syntax
	<input class="shadow form-control" type="number" value=<?php echo isset($_POST['usrCnt']) ? $usrCnt : '5'; ?> min="1" max="99" name="usrCnt" id="usrCnt">
	-->
	{{ Form::number('usrCnt', isset($_POST['usrCnt'])?$usrCnt:5,
		array('class' => 'shadow form-control', 'min' => '1', 'max' => '99')) }}
</div>
<br>
<div class="form-group">
	<h3>Options:</h3>
	{{ Form::checkbox('usrid_cb', '1', isset($_POST['usrid_cb'])?true:false) }}
	{{ Form::label('usrid_cb', 'User ID', array('class' => 'control-label')) }}
	<br>
	{{ Form::checkbox('pswd_cb', '1', isset($_POST['pswd_cb'])?true:false) }}
	{{ Form::label('pswd_cb', 'Password', array('class' => 'control-label')) }}
	<br>
	{{ Form::checkbox('email_cb', '1', isset($_POST['email_cb'])?true:false) }}
	{{ Form::label('email_cb', 'Email', array('class' => 'control-label')) }}
	<br>
	{{ Form::checkbox('birth_cb', '1', isset($_POST['birth_cb'])?true:false) }}
	{{ Form::label('birth_cb', 'Birthdate', array('class' => 'control-label')) }}
	<br>
	{{ Form::checkbox('profile_cb', '1', isset($_POST['profile_cb'])?true:false) }}
	{{ Form::label('profile_cb', 'Profile', array('class' => 'control-label')) }}
	<br>
	{{ Form::checkbox('secimg_cb', '1', isset($_POST['secimg_cb'])?true:false) }}
	{{ Form::label('secimg_cb', 'Security Image', array('class' => 'control-label')) }}
</div>
<br><br>
<!--
<input class="btn btn-primary" type="submit" name="submit" value="Generate"/>
<input class="btn btn-primary" type="reset" name="reset" value="Reset"/>
-->
<!-- example of Bootstrap integration with Blade -->
{{ Form::submit('Generate', array('class' => 'btn btn-primary')) }}
{{ Form::reset('Reset', array('class' => 'btn btn-primary')) }}
{{ HTML::link('index.php', 'Back Home', array('class' => 'btn btn-warning')) }}
{{ Form::close() }}
<br>