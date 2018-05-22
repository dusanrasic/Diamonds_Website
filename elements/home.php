<section id="first">
  <header>
    <div class='container'>
      <h1>Diamond</h1>
    </div>
  </header>
</section>
<section id="second">
  <div class="container">
    <?php
    $query_home = "SELECT * FROM home";
    $res = mysqli_query($conn, $query_home) or die("Greska prilikom iscitavanja slika!");

    while($r=mysqli_fetch_array($res)){
      echo "<div class='boxes box{$r['homeID']}'/><h1>{$r['block_title']}</h1><p>{$r['block_text']}<p></div>";
    }
     ?>
</section>
