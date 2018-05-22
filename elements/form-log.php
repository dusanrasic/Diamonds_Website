<?php
	if(!isset($_SESSION['idU']))
	{
?>
<div class="form-log">
	<form action="" method="post" name="form" id="form" class="awesome-form3" >

	<div class="input-group3">
	  <input type="text" id="username" name="username">
	  <label>Your User Name</label>
	</div>
	<div class="input-group3">
	  <input type="password" id="password" name="password">
	  <label>Your Password</label>
	</div>
	<input type="submit" name="btnLog" id="btnLog" value="LogIn">
	</form>
<?php
	}
?>
