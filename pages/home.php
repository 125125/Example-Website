<?php
function getavatar($account) {
  include('config/dbconf.php');
  $stmt = $conn->prepare("SELECT avatarpic FROM account WHERE username = ?");
  $stmt->bind_param("s", $account);
  $stmt->execute();
  $stmt->bind_result($avatar);
  $stmt->store_result();
  if($stmt->num_rows > 0) {
    while($stmt->fetch()) {
      return $avatar;
    }
  }
}
?>
<div class="col-md-6">
  <div class="card">
    <div class="card-header">News</div>
    <div class="card-block">

      <?php
      mysqli_select_db($conn, $webdb);
      $stmt = $conn->prepare("SELECT title, content, author, post_date FROM news");
      $stmt->execute();
      $stmt->bind_result($title, $content, $author, $postdate);
      $stmt->store_result();
      if($stmt->num_rows > 0) {
        while($stmt->fetch()) {
          echo "<div class='media'>";
          echo "<div class='media-left'>";
          echo "<img src='images/".getavatar($author)."' class='media-object' style='width:80px'>";
          echo "</div>";
          echo "<div class='media-body'>";
          echo "<h4 class='media-heading'>".ucfirst($author)." <small style='font-size:13px;text-align:right;float:right;line-height:30px;'><i>Posted on ".date("F j, Y", $postdate)."</i></small></h4>";
          echo "<p>$content</p>";
          echo "</div>";
          echo "</div>";
        }
      }
      ?>

    </div>
  </div>
</div>
