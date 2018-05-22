<section id="third">
  <div class="content-text third">
    <div class="bgimg"></div>
    <?php
    $upits = "SELECT * FROM six";
    $rezs = mysqli_query($conn, $upits) or die("Greska prilikom iscitavanja teksta!");

    while($rs=mysqli_fetch_array($rezs))
    {?>
      <h1><?php echo "{$rs['sTitle']}"; ?></h1>
      <p><?php echo "{$rs['sText']}"; ?></p>
    <?php }?>
  </div>
</section>
