<?php
$username = $_GET['user'];
if ($username == '') {
  echo '<script>location.href="/coxld/user/username?wh=https://coxld.iify.repl.co/class/main";</script>';
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Main - COXLD</title>
    <link rel="stylesheet" href="/coxld/all/1.0.0/css/20220709.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script defer src="/coxld/all/1.0.0/js/chatboxgo.js"></script>
  </head>
  <body>
    <div class="frameWrap">
      <iframe src="/class/main/index2.php?user=<?php echo $_GET['user'];; ?>"></iframe>
    </div>
  </body>
</html>