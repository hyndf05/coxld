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
    <style>.root-dif{width:100%;height:100%;}iframe{width:100%;height:100%;outline:none;border:0;}</style>
    <div class="root-dif">
      <?php echo '<p>user: ', $_SERVER["HTTP_USER_AGENT"], ' ', $_SERVER["REMOTE_ADDR"], '</p>'; ?>
      <span>광고, 도배 문구 작성시 이용이 금지될 수 있습니다.</span>
      <iframe class="rootid" src="/class/main?user=283" style="width:100%;height:100%;"></iframe>
      <button onclick="re()" style="position:fixed;bottom:0;left:0;width:60px;height:30px;">ree</button>
      <script>function re(){$('.rootid', parent.document).get(0).contentDocument.location.reload();}</script>
    </div>
  </body>
</html>