<?php
session_start();
include('../../config/dbconf.php');

$title = $_POST['title'];
$content = $_POST['content'];
$user = $_SESSION['username'];
$date = time();

mysqli_select_db($conn, $webdb);
$stmt = $conn->prepare("INSERT INTO news (title, content, author, post_date) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sssi", $title, $content, $user, $date);
if($stmt->execute()) {
  echo "<div class='alert alert-success'><strong>Success !</strong> Your post is now visible on the page</div>";
}else{
  echo "<div class='alert alert-danger'><strong>Failed !</strong> ".$stmt->error."</div>";
}
?>
