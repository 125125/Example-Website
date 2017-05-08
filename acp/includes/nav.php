<div class="container-fluid">
<div class="row">
<div class="nav-side-menu">
  <div class="brand">Admin Panel</div>
  <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  <div class="menu-list">
    <ul id="menu-content" class="menu-content collapse out">

      <!-- Dropdown Link -->
      <?php
      if(isset($_GET['p'])) {
        echo "<li><a href='#'><i class='fa fa-dashboard fa-lg'></i> Dashboard</a></li>";

        //First Dropdown
        if($_GET['p'] == "postnews" || $_GET['p'] == "editnews" || $_GET['p'] == "deletenews") {
          echo "<li  data-toggle='collapse' data-target='#products' class='collapsed active'>";
          echo "<a href='#'><i class='fa fa-gift fa-lg'></i>Manage News<span class='arrow'></span></a>";
          echo "</li>";
        }else{
          echo "<li  data-toggle='collapse' data-target='#products' class='collapsed'>";
          echo "<a href='#'><i class='fa fa-gift fa-lg'></i>Manage News<span class='arrow'></span></a>";
          echo "</li>";
        }
        echo "<ul class='sub-menu collapse' id='products'>";
        if($_GET['p'] == "postnews") {echo "<li class='active'><a href='postnews'>Post News</a></li>";}else{echo "<li><a href='postnews'>Post News</a></li>";}
        if($_GET['p'] == "editnews") {echo "<li class='active'><a href='editnews'>Edit News</a></li>";}else{echo "<li><a href='editnews'>Edit News</a></li>";}
        if($_GET['p'] == "delnews") {echo "<li class='active'><a href='delnews'>Delete News</a></li>";}else{echo "<li><a href='delnews'>Delete News</a></li>";}
        echo "</ul>";
        //End First Dropdown

        //Second Dropdown
        if($_GET['p'] == "replyticket" || $_GET['p'] == "delticket" || $_GET['p'] == "assignticket") {
          echo "<li data-toggle='collapse' data-target='#service' class='collapsed active'>";
          echo "<a href='#'><i class='fa fa-globe fa-lg'></i> Manage Tickets <span class='arrow'></span></a>";
          echo "</li>";
        }else{
          echo "<li data-toggle='collapse' data-target='#service' class='collapsed'>";
          echo "<a href='#'><i class='fa fa-globe fa-lg'></i> Manage Tickets <span class='arrow'></span></a>";
          echo "</li>";
        }
        echo "<ul class='sub-menu collapse' id='service'>";
        if($_GET['p'] == "replyticket") {echo "<li class='active'><a href='replyticket'>Reply to Ticket</a></li>";}else{echo "<li><a href='replyticket'>Reply to Ticket</a></li>";}
        if($_GET['p'] == "delticket") {echo "<li class='active'><a href='delticket'>Delete Ticket</a></li>";}else{echo "<li><a href='delticket'>Delete Ticket</a></li>";}
        if($_GET['p'] == "assignticket") {echo "<li class='active'><a href='assignticket'>Assign Ticket</a></li>";}else{echo "<li><a href='assignticket'>Assign Ticket</a></li>";}
        echo "</ul>";
        //End Second Dropdown

        //Third Dropdown
        if($_GET['p'] == "banacc" || $_GET['p'] == "managegm" || $_GET['p'] == "delacc") {
          echo "<li data-toggle='collapse' data-target='#new' class='collapsed active'>";
          echo "<a href='#'><i class='fa fa-car fa-lg'></i> Manage Accounts <span class='arrow'></span></a>";
          echo "</li>";
        }else{
          echo "<li data-toggle='collapse' data-target='#new' class='collapsed'>";
          echo "<a href='#'><i class='fa fa-car fa-lg'></i> Manage Accounts <span class='arrow'></span></a>";
          echo "</li>";
        }
        echo "<ul class='sub-menu collapse' id='new'>";
        if($_GET['p'] == "banacc") {echo "<li class='active'><a href='banacc'>Ban Account/IP</a></li>";}else{echo "<li><a href='banacc'>Ban Account/IP</a></li>";}
        if($_GET['p'] == "managegm") {echo "<li class='active'><a href='managegm'>Manage GM Levels</a></li>";}else{echo "<li><a href='managegm'>Manage GM Levels</a></li>";}
        if($_GET['p'] == "delacc") {echo "<li class='active'><a href='delacc'>Delete Account</a></li>";}else{echo "<li><a href='delacc'>Delete Account</a></li>";}
        echo "</ul>";
        //End Third Dropdown

        //Fourth Dropdown
        if($_GET['p'] == "item" || $_GET['p'] == "npc" || $_GET['p'] == "quest" || $_GET['p'] == "loot" || $_GET['p'] == "instance") {
          echo "<li data-toggle='collapse' data-target='#random' class='collapsed active'><a href='#'>";
          echo "<i class='fa fa-car fa-lg'></i> SQL Generator <span class='arrow'></span></a>";
          echo "</li>";
        }else{
          echo "<li data-toggle='collapse' data-target='#random' class='collapsed'>";
          echo "<a href='#'><i class='fa fa-car fa-lg'></i> SQL Generator <span class='arrow'></span></a>";
          echo "</li>";
        }
        echo "<ul class='sub-menu collapse' id='random'>";
        if($_GET['p'] == "item") {echo "<li class='active'><a href='item'>Create Item</a></li>";}else{echo "<li><a href='item'>Create Item</a></li>";}
        if($_GET['p'] == "npc") {echo "<li class='active'><a href='npc'>Create NPC</a></li>";}else{echo "<li><a href='npc'>Create NPC</a></li>";}
        if($_GET['p'] == "quest") {echo "<li class='active'><a href='quest'>Create Quest</a></li>";}else{echo "<li><a href='quest'>Create Quest</a></li>";}
        if($_GET['p'] == "loot") {echo "<li class='active'><a href='loot'>Add Loot</a></li>";}else{echo "<li><a href='loot'>Add Loot</a></li>";}
        if($_GET['p'] == "instance") {echo "<li class='active'><a href='instance'>Upgrade Instance</a></li>";}else{echo "<li><a href='instance'>Upgrade Instance</a></li>";}
        echo "</ul>";
        //End Fourth Dropdown

        echo "<li><a href='#'><i class='fa fa-user fa-lg'></i> Settings</a></li>";

      }else{
        //First Dropdown
        echo "<li class='active'><a href='#'><i class='fa fa-dashboard fa-lg'></i> Dashboard</a></li>";
        echo "<li  data-toggle='collapse' data-target='#products' class='collapsed'><a href='#'>";
        echo "<i class='fa fa-gift fa-lg'></i>Manage News<span class='arrow'></span></a>";
        echo "</li>";
        echo "<ul class='sub-menu collapse' id='products'>";
        echo "<li><a href='postnews'>Post News</a></li>";
        echo "<li><a href='editnews'>Edit News</a></li>";
        echo "<li><a href='delnews'>Delete News</a></li>";
        echo "</ul>";
        //End First Dropdown

        //Second Dropdown
        echo "<li data-toggle='collapse' data-target='#service' class='collapsed'><a href='#'>";
        echo "<i class='fa fa-globe fa-lg'></i> Manage Tickets <span class='arrow'></span></a>";
        echo "</li>";
        echo "<ul class='sub-menu collapse' id='service'>";
        echo "<li><a href='replyticket'>Reply to Ticket</li>";
        echo "<li><a href='delticket'>Delete Ticket</li>";
        echo "<li><a href='assignticket'>Assign Ticket</li>";
        echo "</ul>";
        //End Second Dropdown

        //Third Dropdown
        echo "<li data-toggle='collapse' data-target='#new' class='collapsed'><a href='#'>";
        echo "<i class='fa fa-car fa-lg'></i> Manage Accounts <span class='arrow'></span></a>";
        echo "</li>";
        echo "<ul class='sub-menu collapse' id='new'>";
        echo "<li><a href='banacc'>Ban Account/IP</li>";
        echo "<li><a href='managegm'>Manage GM Levels</li>";
        echo "<li><a href='delacc'>Delete Account</li>";
        echo "</ul>";
        //End Third Dropdown

        //Fourth Dropdown
        echo "<li data-toggle='collapse' data-target='#random' class='collapsed'><a href='#'>";
        echo "<i class='fa fa-car fa-lg'></i> SQL Generator <span class='arrow'></span></a>";
        echo "</li>";
        echo "<ul class='sub-menu collapse' id='random'>";
        echo "<li><a href='item'>Create Item</li>";
        echo "<li><a href='npc'>Create NPC</li>";
        echo "<li><a href='quest'>Create Quest</li>";
        echo "<li><a href='loot'>Add Loot</li>";
        echo "<li><a href='instance'>Upgrade Instance</li>";
        echo "</ul>";
        //End Fourth Dropdown

        echo "<li><a href='#'><i class='fa fa-user fa-lg'></i> Settings</a></li>";
      }
      ?>

      <!-- Single Link -->
      <li><a href="#"><i class="fa fa-users fa-lg"></i> Logout</a></li>
    </ul>
  </div>
</div>
