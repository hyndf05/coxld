<?php
if($_POST) {
  $name = $_POST['name'];
  $comment = $_POST['comment'];
  $keep = fopen("all-comments.php", "a");
  fwrite($keep, "<span>".$name.": ".$comment."</span><br>");
  fclose($keep);
}
?>
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