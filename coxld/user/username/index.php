<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>COXLD</title>
    <link rel="stylesheet" href="/coxld/all/1.0.0/css/20220709.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script defer src=""></script>
  </head>
  <body>
<?php 
$wh = $_GET['wh'];
echo '<input class="dnrg" value="'.$wh.'" style="display:none;">';
?>
    <div class="root">
      <div class="p">
        <span>username</span>
        <input type="text" class="username">
        <input type="submit" class="go"> 
      </div>
    </div>
    <script>$('.go').click(function(){var u = $('.username').val();var i = $('.dnrg').val();location.href=`${i}?user=${u}`;})</script>
  </body>
</html>