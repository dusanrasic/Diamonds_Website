<?php
$servername = "dusanrasic.rs";
$username = "dusanras_duki95";
$password = "d1u5s2a9n5";
$dbname = "dusanras_wsite2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
	echo "Greska prilikom konekcije! " . mysqli_error($conn);
}

	mysqli_set_charset($conn, 'utf8');
?>
