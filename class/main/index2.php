<?php
$username = $_GET['user'];
if ($username == '') {
  echo '<script>location.href="/coxld/user";</script>';
}
date_default_timezone_set('Asia/Seoul');
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
  $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
  $ip = $_SERVER['REMOTE_ADDR'];
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
    <script defer src="/coxld/all/1.0.0/js/setup.js"></script>
  </head>
  <body>
    <div class="root">
      <div class="tool-box">
        <div class="t-inner">
          <div class="container-box">
            <div class="setup cb-m-box">
              <span class="material-symbols-outlined">tune</span>
            </div>
          </div>
          <div class="refresh">
            <span class="material-symbols-outlined">refresh</span>
          </div>
        </div>
      </div>
      <div class="chat-repl">
        <div class="c-x-help"></div>vv./
        <div class="c-inner">
<?php
if($_POST) {
  $name = $_POST['name'];
  $comment = $_POST['comment'];
  if (strpos($comment, '<') !== false) {
  } else {
    $keep = fopen('../../coxld/coxldrlfhr/0/main.php', 'a');
    fwrite($keep, '<div class="chat"><span class="cb-x-name">< '.$name.' >&nbsp;</span><span class="cb-x-comment">'.$comment.'&nbsp;</span><span class="cb-x-time">'.date("Y-m-d H:i:s").'</span></div>');
    fclose($keep);

    $keep2 = fopen('../../coxld/coxldrlfhr/1/main.php', 'a');
    fwrite($keep2, '[ '.$ip.', '.$name.', '.$comment.', '.date("Y-m-d H:i:s").' ]'.PHP_EOL);
    fclose($keep2);
  }
}
r(); 
function r() {
  include('../../coxld/coxldrlfhr/0/main.php');
}
?>
        </div>
      </div>
      <div class="dlqfur">
        <div class="d-inner">
          <div class="comment-box">
            <form action="" method="post">
              <div class="cb-name dn">
                <span>NAME</span>
                <input value="<?php echo $username; ?>" type="text" name="name">
              </div>
              <div class="cb-comment">
                <input type="text" name="comment" placeholder="Something..">
              </div>
              <div class="cb-submit">
                <label for="sendcomment" class="sendcomment">
                  <span class="material-symbols-outlined">send</span>
                </label>
                <input id="sendcomment" type="submit" value="Send">
              </div>
            </form>
          </div>     
        </div>
      </div>
      <div class="bdsh">
        <div class="textview">
          <div class="tv-top">
            <div class="tv-t-blank">
              <span class="textview-tv-t-blank-innerText"></span>
            </div>
            <div class="closeTextview sgg-close">
              <span class="material-symbols-outlined">close</span>
            </div>
          </div>
          <div class="tv-cont">
            <span class="innerText">Said by <span class="username-textview-all"></span>, <span class="time-textview-all"></span></span>
            <div class="textview-box-container"><span class="comment-textview-all">something..</span></div>
          </div>
        </div>
        <div class="setup-root">
          <div class="tv-top">
            <div class="tv-t-blank"></div>
            <div class="setup-x-close sgg-close">
              <span class="material-symbols-outlined">close</span>
            </div>
          </div>
          <div class="tv-cont">
            <!-- 안정화 작업중 -->
            <!--
            <div>
              <span>Time</span>
              <button class="displayTheTime">display</button>
              <button class="undisplayTheTime">undisplay</button>
            </div>
            -->
            <!-- // -->
            <div>
              <span class="info">AI 학습을 위해 이용자의 IP와 채팅을 수집하며, 이용자는 수집 활동에 대해 거부할 수 없습니다.</span><br>
              <span class="info">수집한 정보는 coxld 데이터 센터에 저장되며, 한 달 뒤 자동 삭제됩니다.</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>