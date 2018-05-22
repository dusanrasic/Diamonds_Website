<?php

$glas = $_REQUEST['glas'];

$anketares = "../anketaglasovi.txt";
$sadrzaj = file($anketares);

$niz = explode(",", $sadrzaj[0]);
$like = $niz[0];
$dislike = $niz[1];


if ($glas == 0) {
  $like = $like + 1;
}
if ($glas == 1) {
  $dislike = $dislike + 1;
}

$unesiglasove = $like.",".$dislike;
$fil = fopen($anketares,"w");
fputs($fil,$unesiglasove);
fclose($fil);
?>

 <form>
    <input type="button" name="btnLike" value="0" id="like" onclick="anketa(this.value);"/><p class="plike">(<?php echo trim($like); ?>)</p>
    <input type="button" name="btnDislike"  value="1" id="dislike" onclick="anketa(this.value);"/><p class="pdislike">(<?php echo trim($dislike); ?>)</p>
  </form>
