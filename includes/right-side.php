<div class="col-md-3">
  <div class="card">
    <div class="card-header">Server Status</div>
    <div class="card-block">
      <?php
      function onlinestatus() {
        exec('Tasklist | findstr "worldserver.exe"', $output);
        if(empty($output)) {
          return "<font color='ff0000'>Offline</font>";
        }else{
          return "<font color='00ff00'>Online</font>";
        }
      }
      mysqli_select_db($conn, $dbname);
      $stmt = $conn->prepare("SELECT name FROM realmlist");
      $stmt->execute();
      $stmt->bind_result($name);
      $stmt->store_result();
      if($stmt->num_rows > 0) {
        while($stmt->fetch()) {
          echo "$name: ".onlinestatus()."";
          echo "<div class='progress'>";
          echo "<div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100' style='width:50%'>";
          echo "</div>";
          echo "</div>";
        }
      }
      ?>
    </div>
  </div>
</div>
