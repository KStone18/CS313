
<nav class="navbar navbar-inverse strip">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Gizmos R/C</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Browse</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cart.php">
          <span class="glyphicon glyphicon-shopping-cart" id="cart"><?php 
          $numItems = sizeof($_SESSION['cart']);
          echo $numItems; 
          ?></span>

        </a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
