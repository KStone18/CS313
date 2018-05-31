<?php session_start();?>
<nav class="navbar navbar-inverse navbar-fixed-top strip">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li><a href="addInfo.php">
          <span class="glyphicon glyphicon-plus" id=""></span>

        </a></li>

        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="navDropDownLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user"></span> 
                <?php 
 				$user_name = $_SESSION["user"];
 				echo $user_name . " Profile";
 				?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navDropDownLink">
            <!-- <a class="dropdown-item" href="#">Preferences</a> -->
          <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Logout</a>
          </div>
        </li>
          

      </ul>
    </div>
  </div>
</nav>
