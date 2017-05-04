<?php
include("../config/dbconf.php");

function encryptsha($user,$pass) {
  $user = strtoupper($user);
  $pass = strtoupper($pass);
  return sha1($user.':'.$pass);
}

$username = $_POST['user'];
$password = encryptsha($username, $_POST['pass']);
$email = $_POST['email'];
$exp = $_POST['exp'];

if($_POST['pass'] == $_POST['pass2']) {
  $stmt = $conn->prepare("INSERT INTO account (username, sha_pass_hash, email, expansion) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("sssi", $username, $password, $email, $exp);
  if($stmt->execute()) {
    echo "<div class='alert alert-success'><strong>Success!</strong> Account $username has been created !</div>";
  }else{
    echo "<div class='alert alert-danger'><strong>Failed!</strong> ".$stmt->error."</div>";
  }
}else{
  echo "Passwords Missmatch";
}
