<?php
  if(!isset($_SESSION['idU']) || $_SESSION['uloga'] != 'admin')
  {
    header('Location: index.php');
  }
 if(isset($_REQUEST['btnDelete'])){
   $id = $_POST['inpText'];
   $user_delete = "DELETE  FROM users WHERE id_user=".$id;
   $user_function_delete = "DELETE  FROM user_function WHERE id_user=".$id;
   mysqli_query($conn ,$user_delete);
   mysqli_query($conn ,$user_function_delete);
   header('Location:'.$_SERVER['HTTP_REFERER']);
 }
 if(isset($_REQUEST['btnAdd'])){
   $user_name= $_REQUEST['nickname'];
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
   header('Location:'.$_SERVER['HTTP_REFERER']);
    }
  if(isset($_REQUEST['btnUpdateGallery'])){
    $gal_name=$_REQUEST['galName'];
    $location=$_REQUEST['galLoc'];
    $update_gallery="INSERT INTO gallery VALUES ('','$gal_name','$location')";
    mysqli_query($conn,$update_gallery);
    header('Location:'.$_SERVER['HTTP_REFERER']);
		exit;
  }
  if(isset($_REQUEST['btnDeleteGallery'])){
    $gal_id=$_REQUEST['gal_id'];
    $delete_query="DELETE FROM gallery WHERE galID=".$gal_id;
    mysqli_query($conn,$delete_query);
    header('Location:'.$_SERVER['HTTP_REFERER']);
  }
  if(isset($_REQUEST['btnDeleteComment'])){
    $com_id=$_REQUEST['comID'];
    $delete="DELETE FROM comments WHERE commentID=".$com_id;
    mysqli_query($conn,$delete);
    header('Location:'.$_SERVER['HTTP_REFERER']);
  }
  if(isset($_REQUEST['userUpdate'])){
    $id=$_REQUEST['id'];
    $name=$_REQUEST['name'];
    $pasword=md5($_REQUEST['password']);
    $mail=$_REQUEST['mail'];
    $update="UPDATE users SET user_name='$name',password='$pasword',mail='$mail' WHERE id_user=".$id;
    mysqli_query($conn,$update);
    header('Location:'.$_SERVER['HTTP_REFERER']);
  }
  if(isset($_REQUEST['btnUpdateAbout'])){
    $id=$_REQUEST['idab'];
    $text=$_REQUEST['text'];
    $fb=$_REQUEST['fb'];
    $insta=$_REQUEST['insta'];
    $plus=$_REQUEST['gplus'];
    $out=$_REQUEST['out'];
    $update="UPDATE aboutme SET aboutText='$text',aboutFB='$fb',aboutG='$plus',aboutInsta='$insta',aboutOut='$out' WHERE aboutID=".$id;
    mysqli_query($conn,$update);
    header('Location:'.$_SERVER['HTTP_REFERER']);
  }
if (isset($_REQUEST['btnUpdateHome'])) {
    $id=$_REQUEST['homeId'];
    $title=$_REQUEST['hoTi'];
    $text=$_REQUEST['hoTe'];
    $update="UPDATE home SET block_title='$title',block_text='$text' WHERE homeID=".$id;
    mysqli_query($conn,$update);
    header('Location:'.$_SERVER['HTTP_REFERER']);
}
if (isset($_REQUEST['btnUpdateFirst'])) {
    $id=$_REQUEST['fiId'];
    $title=$_REQUEST['fiTi'];
    $text=$_REQUEST['fiTe'];
    $update="UPDATE first SET fTitle='$title',fText='$text' WHERE fID=".$id;
    mysqli_query($conn,$update);
    header('Location:'.$_SERVER['HTTP_REFERER']);
}
if (isset($_REQUEST['btnUpdateSix'])) {
    $id=$_REQUEST['siId'];
    $title=$_REQUEST['siTi'];
    $text=$_REQUEST['siTe'];
    $update="UPDATE six SET sTitle='$title',sText='$text' WHERE sID=".$id;
    mysqli_query($conn,$update);
    header('Location:'.$_SERVER['HTTP_REFERER']);
}
if (isset($_REQUEST['btnUpdateSeven'])) {
    $id=$_REQUEST['seId'];
    $title=$_REQUEST['seTi'];
    $text=$_REQUEST['seTe'];
    $update="UPDATE seventh SET seTitle='$title',seText='$text' WHERE seID=".$id;
    mysqli_query($conn,$update);
    header('Location:'.$_SERVER['HTTP_REFERER']);
}?>