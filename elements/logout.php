<?php
	session_start();

	if(isset($_SESSION['idU']))
	{
		unset($_SESSION['idU']);
		unset($_SESSION['uloga']);
		unset($_SESSION['korIme']);

		session_destroy();
		header('Location:../index.php');
	}
	else
	{
		header('Location:../index.php');
	}
?>
