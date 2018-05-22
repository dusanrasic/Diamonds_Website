<section id="aboutme">
  <?php
$upit = "SELECT * FROM aboutme";
$rez = mysqli_query($conn, $upit) or die("Greska prilikom iscitavanja teksta AboutMe!");

while($r=mysqli_fetch_array($rez))
{?>
 <div class="about-me-text">
   <h1><?php echo "{$r['aboutTitle']}";?></h1>
   <p><?php echo "{$r['aboutText']}";?></p>
 </div>
</section>
<section id="about-me-img" class="about-me-img">
  <?php
    echo "<div class='links link_fb'><a href='{$r['aboutFB']}'><img src='{$r['aboutFB_img']}'/></a></div>";
    echo "<div class='links link_in'><a href='{$r['aboutInsta']}'><img src='{$r['aboutInsta_img']}'/></a></div>";
    echo "<div class='links link_gp'><a href='{$r['aboutG']}'><img src='{$r['aboutG_img']}'/></a></div>";
    echo "<div class='links link_ou'><a href='{$r['aboutOut']}'><img src='{$r['aboutOut_img']}'/></a></div>";
 } ?>
  <div class="about-me"></div>
</section>
