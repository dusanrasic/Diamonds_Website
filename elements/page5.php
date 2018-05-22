<?php include_once 'elements/functions.php'; ?>
<section id="admin">
  <h1>Admin Panel</h1>
	<h2>List of users</h2>
	<form action="" method="POST">
	<table>
		<thead>
		<tr>
				<th>User_id</th>
				<th>User_name</th>
				<th>Password</th>
				<th>Email</th>
				<th>Function</th>
				<th>Operation</th>
			</tr>
		</thead>
		<tbody>
	<?php
		   $user_query="SELECT * FROM users u JOIN user_function uf ON u.id_user=uf.id_user JOIN function f ON f.id_function=uf.id_function";
			 $result_user=mysqli_query($conn , $user_query);
			 while($u=mysqli_fetch_array($result_user)){
				echo "<tr>
								    <td><input type='text' name='id' value='{$u['id_user']}' class='inpText' readonly></td>
								    <td><input type='text' name='name' value='{$u['user_name']}' class='inpText'></td>
								    <td><input type='text' name='pasword' value='{$u['password']}' class='inpText'></td>
								    <td><input type='text' name='mail' value='{$u['mail']}' class='inpText'></td>
								    <td><input type='text' name='fn' value='{$u['function_name']}' class='inpText' readonly></td>
										<td><input type='submit' name='userUpdate' value='Update' class='btnDelete'></td>
								  </tr>
								";
			 }
	 ?>
	 <tr>
		 <td colspan="5">
			 <input type="text" name="inpText" placeholder="Type id of user" class="inpText">
		 </td>
		 <td>
			 <input type="submit" name="btnDelete" value="DELETE" class="btnDelete">
		 </td>
	 </tr>
	 <tr>
		 <td colspan="2">
			 <input type="text" name="nickname" placeholder="Type user_name" class="inpText">
		 </td>
		 <td>
			 <input type="text" name="password" placeholder="Type password" class="inpText">
		 </td>
		 <td colspan="2">
			 <input type="text" name="email" placeholder="Type email" class="inpText">
		 </td>
		 <td>
			 <input type="submit" name="btnAdd" value="ADD" class="btnDelete">
		 </td>
	 </tr>
	 </tbody>
	 </table>
 </form>
 <h2>Comments</h2>
 <form action="" method="POST">
 <table>
 	<thead>
 		<tr>
 			<th>Comment Id</th>
 			<th>Comment Text</th>
 			<th>Comment Time</th>
 			<th>Comment User</th>
 			<th>Operations</th>
 		</tr>
 	</thead>
 	<tbody>
 	<tr>
 	<?php
 		$comm_query="SELECT * FROM comments";
 		$comm_result=mysqli_query($conn, $comm_query);
 		while($co=mysqli_fetch_array($comm_result)){
 		 echo "<tr>
 		 						<td><input type='text' name='comID' value='{$co['commentID']}' class='inpText' readonly></td>
 								<td><input type='text' name='comTxt' value='{$co['commentText']}' class='inpText' readonly></td>
 								<td><input type='text' name='comTime' value='{$co['commentDate']}' class='inpText' readonly></td>
 								<td><input type='text' name='comUser' value='{$co['commentUser']}' class='inpText' readonly></td>
 								<td><input type='submit' name='btnDeleteComment' value='DELETE' class='btnDelete'></td>
 							 </tr>
 						 ";
 		}?>
 	</tr>
 	</tbody>
 	</table>
 </form>
	<h2>Gallery</h2>
	<form method="POST" action="">
		<table>
			<thead>
				<tr>
						<th>Gallery ID</th>
						<th>Gallery Name</th>
						<th>Gallery Location</th>
						<th>Operation</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<?php
				$gal_query="SELECT * FROM gallery";
				$gal_result=mysqli_query($conn, $gal_query);
				while($ga=mysqli_fetch_array($gal_result)){
				 echo "<tr>
				 						<td><input type='text' name='gal_id' value='{$ga['galID']}' class='inpText' readonly></td>
                    <td><input type='text' name='gal_name' value='{$ga['galName']}' class='inpText' radonly></td>
										<td><input type='text' name='gal_location' value='{$ga['galImg']}' class='inpText' readonly></td>
										<td><input type='submit' name='btnDeleteGallery' value='DELETE' class='btnDelete' readonly></td>
									 </tr>
								 ";
				}?>
			</tr>
			<tr>
				<td colspan="2">
					<input type="text" name="galName" placeholder="Type name of image" class="inpText">
				</td>
				<td>
					<input type="text" name="galLoc" placeholder="Type image location" class="inpText">
				</td>
			<td >
				<input type="submit" name="btnUpdateGallery" value="ADD" class="btnDelete">
			</td>
		</tr>
			</tbody>
		</table>
	</form>
  <h2>About me section</h2>
  <form method="POST" action="">
  <table>
    <thead>
      <tr>
          <th>About Id</th>
          <th>AboutMe text</th>
          <th>Facebook link</th>
          <th>Instagram link</th>
          <th>Google plus link</th>
          <th>Outlook link</th>
          <th>Operation</th>
        </tr>
    </thead>
    <tbody>
      <tr>
      <?php
       $about_me_query="SELECT * FROM aboutme";
           $about_result=mysqli_query($conn, $about_me_query);
           while($ar=mysqli_fetch_array($about_result)){
            echo "<td><input type='text' name='idab' value='{$ar['abID']}' class='inpText' readonly></td>
            <td><textarea name='text' maxlength='500' style='border: none; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; max-width:200px'>{$ar['aboutText']}</textarea></td>
            <td><input type='text' name='fb' class='inpText' value='{$ar['aboutFB']}'></td>
            <td><input type='text' name='insta' class='inpText' value='{$ar['aboutInsta']}'></td>
            <td><input type='text' name='gplus' class='inpText' value='{$ar['aboutG']}'></td>
            <td><input type='text' name='out' class='inpText' value='{$ar['aboutOut']}'></td>
            <td><input type='submit' name='btnUpdateAbout' value='UPDATE' class='btnDelete'></td>
            ";
           } ?>
    </tr>
  </tbody>
  </table>
  </form>
  <h2>Home section</h2>
  <form method="POST" action="">
    <table>
      <thead>
        <tr>
            <th>Box Id</th>
            <th>Box Title</th>
            <th>Box Text</th>
            <th>Operation</th>
          </tr>
      </thead>
      <tbody>
          <?php
           $home_query="SELECT * FROM home";
               $home_result=mysqli_query($conn, $home_query);
               while($hr=mysqli_fetch_array($home_result)){
                echo "<tr>
                <td><input type='text' name='homeId' value='{$hr['homeID']}' class='inpText' readonly></td>
                <td><input type='text' name='hoTi' class='inpText' value='{$hr['block_title']}'></td>
                <td><textarea name='hoTe' maxlength='500' style='border: none; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; max-width:200px'>{$hr['block_text']}</textarea></td>
                <td><input type='submit' name='btnUpdateHome' value='UPDATE' class='btnDelete'></td>
                </tr>";
              } ?>
      </tbody>
    </table>
  </form>
  <h2>History page</h2>
  <form method="POST" action="">
  <table>
    <thead>
      <tr>
          <th>History Id</th>
          <th>History title</th>
          <th>History text</th>
          <th>Operation</th>
        </tr>
    </thead>
    <tbody>
      <tr>
      <?php
       $first_query="SELECT * FROM first";
           $first_result=mysqli_query($conn, $first_query);
           while($fr=mysqli_fetch_array($first_result)){
            echo "<td><input type='text' name='fiId' value='{$fr['fID']}' class='inpText' readonly></td>
            <td><input type='text' name='fiTi' class='inpText' value='{$fr['fTitle']}'></td>
            <td><textarea name='fiTe' maxlength='500' style='border: none; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; max-width:200px'>{$fr['fText']}</textarea></td>
            <td><input type='submit' name='btnUpdateFirst' value='UPDATE' class='btnDelete'></td>
            ";
           } ?>
    </tr>
  </tbody>
  </table>
  </form>
  <h2>Price page</h2>
  <form method="POST" action="">
  <table>
    <thead>
      <tr>
          <th>Price Id</th>
          <th>Price text</th>
          <th>Price link</th>
          <th>Operation</th>
        </tr>
    </thead>
    <tbody>
      <tr>
      <?php
       $six_query="SELECT * FROM six";
           $six_result=mysqli_query($conn, $six_query);
           while($sr=mysqli_fetch_array($six_result)){
            echo "<td><input type='text' name='siId' value='{$sr['sID']}' class='inpText' readonly></td>
            <td><input type='text' name='siTi' class='inpText' value='{$sr['sTitle']}'></td>
            <td><textarea name='siTe' maxlength='500' style='border: none; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; max-width:200px'>{$sr['sText']}</textarea></td>
            <td><input type='submit' name='btnUpdateSix' value='UPDATE' class='btnDelete'></td>
            ";
           } ?>
    </tr>
  </tbody>
  </table>
  </form>
  <h2>ModernDay page</h2>
  <form method="POST" action="">
  <table>
    <thead>
      <tr>
          <th>ModernDay Id</th>
          <th>ModernDay text</th>
          <th>ModernDay link</th>
          <th>Operation</th>
        </tr>
    </thead>
    <tbody>
      <tr>
      <?php
       $seven_query="SELECT * FROM seventh";
           $seven_result=mysqli_query($conn, $seven_query);
           while($ser=mysqli_fetch_array($seven_result)){
            echo "<td><input type='text' name='seId' value='{$ser['seID']}' class='inpText' readonly></td>
            <td><input type='text' name='seTi' class='inpText' value='{$ser['seTitle']}'></td>
            <td><textarea name='seTe' maxlength='500' style='border: none; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; max-width:200px'>{$ser['seText']}</textarea></td>
            <td><input type='submit' name='btnUpdateSeven' value='UPDATE' class='btnDelete'></td>
            ";
           } ?>
    </tr>
  </tbody>
  </table>
  </form>
</section>
