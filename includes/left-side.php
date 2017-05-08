<div class="col-md-3">
  <div class="card">
    <?php
    if(!isset($_SESSION['username'])) {
      echo "<div class='card-header'>Quick Login</div>";
      echo "<div class='card-block'>";
      echo "<div class='output'></div>";
      echo "<form action='functions/login.php' method='POST' class='myForm' autocomplete='off'>";
      echo "<div class='form-group'>";
      echo "<label for='loginuser'>Username:</label>";
      echo "<input type='text' class='form-control' id='loginuser' name='user'>";
      echo "</div>";
      echo "<div class='form-group'>";
      echo "<label for='loginpass'>Password:</label>";
      echo "<input type='password' class='form-control' id='loginpass' name='pass' autocomplete='new-password'>";
      echo "</div>";
      echo "<input type='submit' value='Login' class='btn btn-primary'>";
      echo "</form>";
      echo "</div>";
    }else{
      echo "<div class='card-header'>Account Details</div>";
      echo "<div class='card-block'>";
      echo "<table class='table left-panel-table'>";
      echo "<tr>";
      echo "<td>Username</td>";
      echo "<td>Rank</td>";
      echo "<td>Account Status</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>Tok124</td>";
      echo "<td>Admin</td>";
      echo "<td>Active</td>";
      echo "</tr>";
      echo "</table>";
      echo "</div>";
    }
    ?>
  </div>
</div>
