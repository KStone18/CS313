<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title> abcd </title>
  <?php include('header.php');?>


	<form action="/action_page.php">
	  
	  <div class="containerLogin">
	    <label for="uname"><b>Username</b></label>
	    <input type="text" placeholder="Enter Username" name="uname" required>

	    <label for="psw"><b>Password</b></label>
	    <input type="password" placeholder="Enter Password" name="psw" required>
	        
	    <button type="submit" class="btn btn-primary btn-md ">Login</button> 
	    <label>
	      <input type="checkbox" checked="checked" name="remember"> Remember me
	    </label>
	  </div>

	  <div class="containerLogin" style="background-color:#f1f1f1">
	    <button type="submit" class="btn btn-primary btn-md cancelbtnLogin">Cancel</button> 
	    <span class="psw">Forgot <a href="#">password?</a></span>
	  </div>
	</form>

</body>
</html>