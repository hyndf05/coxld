<?php
if($_POST) {
  $name = $_POST['name'];
  $comment = $_POST['comment'];
  $keep = fopen('../../coxld/coxldrlfhr/0/main.php', 'a');
  fwrite($keep, '<div class="chat"><span class="cb-x-name">< '.$name.' ></span>&nbsp;<span class="cb-x-comment">'.$comment.'</span>&nbsp;<span class="cb-x-time">'.date("Y-m-d H:i:s").'</span></div>');
  fclose($keep);

  $keep2 = fopen('../../coxld/coxldrlfhr/1/main.php', 'a');
  fwrite($keep2, '[ '.$ip.', '.$name.', '.$comment.', '.date("Y-m-d H:i:s").' ]'.PHP_EOL);
  fclose($keep2);
}
r(); 
function r() {
  include('../../coxld/coxldrlfhr/0/main.php');
}
?>