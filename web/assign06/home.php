<?php
  session_start();
  if (isset($_SESSION['message'])) {
    echo '<script type="text/javascript">alert("' . $_SESSION['message'] . '");</script>';
    unset($_SESSION['message']);
}
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title> Data Collection </title>
  <?php include('header.php');?>
 
  <form action="checkSignup.php" method="post" style="border:1px solid #ccc">
    <div class="containerSign">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>

      <label for="Username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uName" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
      
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <!-- <button type="button" class="btn btn-primary btn-md cancelbtn">Cancel</button> -->
        <button type="submit" class="btn btn-primary btn-md signupbtn">Sign Up</button>  
       
      </div>
    </div>
  </form>



</body>
</html>

