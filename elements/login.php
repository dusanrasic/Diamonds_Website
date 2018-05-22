<?php
	if(isset($_REQUEST['btnLog']))
	{
		$korIme = trim($_REQUEST['username']);
		$lozinka = md5(trim($_REQUEST['password']));

		$upit = "SELECT * FROM users u
				 JOIN user_function uf
				 ON u.id_user=uf.id_user
				 JOIN function f
				 ON f.id_function=uf.id_function
				 WHERE user_name='$korIme'
				 AND password = '$lozinka'";

		$rez = mysqli_query($conn, $upit);
		if(mysqli_num_rows($rez) == 0)
		{
			$greske[] = "Greska prilikom logovanja!";
		}
		else
		{
			$r = mysqli_fetch_array($rez);

			$_SESSION['idU'] = $r['id_function'];

			$_SESSION['uloga'] = $r['function_name'];

			$_SESSION['korIme'] = $r['user_name'];


			switch($_SESSION['uloga'])
			{
				case 'admin':
					header('Location: ./index.php?category=pages&page=page5');
					break;

				case 'user':
					header('Location: ./index.php?category=pages&page=page4');
					break;
			};
		};
	};?>