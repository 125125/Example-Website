<div class="col-md-3">
  <div class="card">
    <div class="card-header">Quick Login</div>
    <div class="card-block">
      <div class="output"></div>
      <form action="functions/login.php" method="POST" class="myForm" autocomplete="off">
        <div class="form-group">
          <label for="loginuser">Username:</label>
          <input type="text" class="form-control" id="loginuser" name="user">
        </div>
        <div class="form-group">
          <label for="loginpass">Password:</label>
          <input type="password" class="form-control" id="loginpass" name="pass" autocomplete="new-password">
        </div>
        <input type="submit" value="Login" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
