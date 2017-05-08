<?php
  // Check if p exists in url
  if(isset($_GET['p'])) {
    // Check if file with name from p value from url exists in pages folder
    if(file_exists("pages/".$_GET['p'].".php")) {
      // Include the file if it does exist
      include("pages/".$_GET['p'].".php");
    }else{
      // Include 404.php if the file does not exist
      include("pages/404.php");
    }
  }else{
    // include home.php if the p is not defined in the url
    include("pages/dashboard.php");
  }
?>
