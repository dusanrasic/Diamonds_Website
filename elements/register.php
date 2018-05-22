<?php
if(isset($_REQUEST['btnRegister'])){
$user_name= $_REQUEST['username'];
$email=$_REQUEST['email'];
$password=md5($_REQUEST['password']);

$insert_query="INSERT INTO users  VALUES ('','$user_name','$password','$email')";
$function_query="SELECT * FROM users WHERE id_user=(SELECT MAX(id_user) FROM users)";
mysqli_query($conn, $insert_query);
$rez=mysqli_query($conn,$function_query);

while ($r = mysqli_fetch_array($rez)) {
    $pos_id=$r['id_user'];
}
$uf_query="INSERT INTO user_function VALUE ('','$pos_id', 2)";
mysqli_query($conn, $uf_query);
}
 ?>
