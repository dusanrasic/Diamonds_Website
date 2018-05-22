<section id="third">
  <div class="content-text third">
    <div class="bgimg"></div>
    <?php
    $upitse = "SELECT * FROM seventh";
    $rezse = mysqli_query($conn, $upitse) or die("Greska prilikom iscitavanja teksta!");

    while($rse=mysqli_fetch_array($rezse))
    {?>
      <h1><?php echo "{$rse['seTitle']}"; ?></h1>
      <p><?php echo "{$rse['seText']}"; ?></p>
    <?php }?>
  </div>
</section>
