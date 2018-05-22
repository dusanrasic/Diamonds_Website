<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/favicon.png">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="js/script.js" charset="utf-8"></script>
    <script src="js/form-script.js" charset="utf-8"></script>
    <!--plug in for gallery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="ResponsiveSlides.js-master/responsiveslides.min.js"></script>
    <link rel="stylesheet" href="ResponsiveSlides.js-master\demo\themes\themes.css" media="screen" title="no title" charset="utf-8">
    <!-- end of plugin -->
    <meta charset="utf-8">
    <title>Diamond</title>
  </head>
  <body>
    <?php
      include 'connect.inc';
      include 'elements/login.php';
      include 'elements/register.php';
      include 'elements/comment.php';
      if(!isset($_GET['page'])){?>
        <script src="js/nav_script.js" charset="utf-8"></script>
        <?php
      }
      if(!isset($_GET['page'])){
        include ("elements/preloader.php");
      }?>
    <section id="content">
      <?php
            include 'elements/navigation.php';

            if(!isset($_GET['page'])){
              include ("elements/home.php");
            }
            if(isset($_GET['page'])){
              $page = $_GET['page'];
              include ("elements/$page.php");
            }

            include 'elements/form-log.php';?>
  </section>
    <?php include 'elements/footer.php';?>
  </body>
</html>
