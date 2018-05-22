<section id="contact">
<div class="contact-form">
  <?php
    if(isset($_SESSION['idU']))
    {
  ?>
  <form class="awesome-form2" method="post" action="" name="comm" id="comm">

  <div class="input-group2">
    <textarea id="comm-text" name="comm-text" autocomplete="off" role="textbox" aria-autocomplete="list" ></textarea>
    <label class="comm-title">Your Text</label>
  </div>

  <input type="submit" name="btnSub" id="btnSub">

</form>
<div class="anketa" id="ispisanketa">
   <?php
    $anketares = "anketaglasovi.txt";
    $sadrzaj = file($anketares);

    $niz = explode(",", $sadrzaj[0]);
    $like = $niz[0];
    $dislike = $niz[1];
   ?>
     <form>
    <input type="button" name="btnLike" value="0" id="like" onclick="anketa(this.value);"/><p class="plike">(<?php echo trim($like); ?>)</p>
    <input type="button" name="btnDislike"  value="1" id="dislike" onclick="anketa(this.value);"/><p class="pdislike">(<?php echo trim($dislike); ?>)</p>
  </form>

<?php }
if(!isset($_SESSION['idU'])){?>
<h1 class="notice">Please <i class="li-reg">login/register</i> for contact form.</h1>
<form action="" method="post" name="form" id="form" class="awesome-form" >

<div class="input-group">
  <input type="text" id="username" name="username">
  <label>Your User Name</label>
</div>
<div class="input-group">
  <input type="password" id="password" name="password">
  <label>Your Password</label>
</div>
<div class="input-group" id="mail">
  <input type="email" id="email" name="email">
  <label>Your Email Address</label>
</div>

<input type="submit" name="btnLog" id="btnLog" value="LogIn">
<input type="button" name="btnReg" id="btnReg" value="Register">
<input type="submit" name="btnRegister" id="btnRegister" value="Register" onClick=" return validate();">
<div class="backBtn">
  <p><</p>
</div>
</div>
</form>
<?php }?>
</section>
