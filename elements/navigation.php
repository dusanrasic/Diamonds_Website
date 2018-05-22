<nav>
  <div class="logo">
    <p><a href="index.php"><img src="img/favicon.png" alt="logo"></a></p>
  </div>
  <div class="menu">
    <ul class="menu-nav">
      <li><a href="index.php">Home</a></li>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">More..</a>
          <div class="dropdown-content">
          <?php
          $upit_d = "SELECT * FROM dropdown ORDER BY ddID";
          $rez_d = mysqli_query($conn, $upit_d) or die("Greska prilikom iscitavanja navigacije!");

          while($d=mysqli_fetch_array($rez_d))
          {
            echo "<a href='index.php?category=pages&page=page{$d['ddID']}'>{$d['ddName']}</a>";
          }
          ?>
        </div>
      </li>
      <?php
      $upit = "SELECT * FROM navigation ORDER BY navID";
      $rez = mysqli_query($conn, $upit) or die("Greska prilikom iscitavanja navigacije!");

      while($r=mysqli_fetch_array($rez))
      {
        echo "<li><a href='index.php?category=pages&page=page{$r['navID']}'>{$r['navName']}</a></li>";
      }
      if(isset($_SESSION['idU']) && $_SESSION['uloga'] == 'admin'){

        $upit_g = "SELECT * FROM admin_panel ORDER BY adID";
        $rezultat = mysqli_query($conn , $upit_g) or die("Greska prilikom iscitavanja admin panela!");

        while($rezu=mysqli_fetch_array($rezultat))
        {
          echo "<li><a href='index.php?category=pages&page=page{$rezu['adID']}'>{$rezu['adName']}</a></li>";
        };}

		  if(isset($_SESSION['idU']))
				{
			?>
				<li><a href="elements/logout.php">Logout</a></li>
			<?php
				}
			?>
    </ul>
  </div>
</nav>
