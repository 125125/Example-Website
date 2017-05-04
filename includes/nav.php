<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
  <div class="container">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="home">ServerName</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <?php
        if(isset($_GET['p'])) {

          if($_GET['p'] == "home") {
            echo "<li class='nav-item active'><a class='nav-link' href='home'>Home <span class='sr-only'>(current)</span></a></li>";
          }else{
            echo "<li class='nav-item'><a class='nav-link' href='home'>Home</a></li>";
          }

          if($_GET['p'] == "register") {
            echo "<li class='nav-item active'><a class='nav-link' href='register'>Register <span class='sr-only'>(current)</span></a></li>";
          }else{
            echo "<li class='nav-item'><a class='nav-link' href='register'>Register</a></li>";
          }

          if($_GET['p'] == "donate") {
            echo "<li class='nav-item active'><a class='nav-link' href='donate'>Donate <span class='sr-only'>(current)</span></a></li>";
          }else{
            echo "<li class='nav-item'><a class='nav-link' href='donate'>Donate</a></li>";
          }

          if($_GET['p'] == "vote") {
            echo "<li class='nav-item active'><a class='nav-link' href='vote'>Vote <span class='sr-only'>(current)</span></a></li>";
          }else{
            echo "<li class='nav-item'><a class='nav-link' href='vote'>Vote</a></li>";
          }

        }else{
          echo "<li class='nav-item active'><a class='nav-link' href='home'>Home <span class='sr-only'>(current)</span></a></li>";
          echo "<li class='nav-item'><a class='nav-link' href='register'>Register</a></li>";
          echo "<li class='nav-item'><a class='nav-link' href='donate'>Donate</a></li>";
          echo "<li class='nav-item'><a class='nav-link' href='vote'>Vote</a></li>";
        }
        ?>
        <li class='nav-item'>
          <a class='nav-link disabled' href='#'>Forum</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container main-container">
  <div class="row">
