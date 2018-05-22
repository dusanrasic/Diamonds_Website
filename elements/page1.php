<section id="third">
  <div class="content-text third">
    <div class="bgimg"></div>
    <?php
    $upit = "SELECT * FROM first";
    $rez = mysqli_query($conn, $upit) or die("Greska prilikom iscitavanja teksta!");

    while($r=mysqli_fetch_array($rez))
    {?>
      <h1><?php echo "{$r['fTitle']}"; ?></h1>
      <p><?php echo "{$r['fText']}"; ?></p>
    <?php }?>
  </div>
</section>
