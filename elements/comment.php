<?php
  if (isset($_REQUEST['btnSub'])) {
  $txt=mysqli_real_escape_string($conn, $_POST['comm-text']);
  $user=$_SESSION['korIme'];
  $time=date("Y-m-d H:i:s");
  $sql = "INSERT INTO comments  VALUES ( '', '$txt', '$time', '$user' )";

  $rez_upis = mysqli_query($conn, $sql);

  if(!$rez_upis)
  {
    $greske[] = "Greska prilikom upisa";
  }
  else {
    header('Location: ./index.php');
  }
}
 ?>
