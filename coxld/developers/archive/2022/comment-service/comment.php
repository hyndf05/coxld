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
    <div class="comment-box"> 
  <form action="" method="post">
    <div>
      <span>NAME</span>
      <input type="text" name="name">
    </div>
    <div>
      <span>COMMENT</span>
      <input type="text" name="comment">
    </div>
    <div>
      <input type="submit">
    </div>
  </form>
  <?php re(); function re() {include('all-comments.php');} ?>
</div>
  </body>
</html>