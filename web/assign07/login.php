<?php
  session_start();
  if (isset($_SESSION['messageL'])) {
    echo '<script type="text/javascript">alert("' . $_SESSION['messageL'] . '");</script>';
    unset($_SESSION['messageL']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title> Data Collection </title>
  <?php include('header.php');?>


	<form action="checkLogin.php" method="post">
	  
	  <div class="containerLogin">
	    <label for="uname"><b>Username</b></label>
	    <input type="text" placeholder="Enter Username" name="uname" required>

	    <label for="psw"><b>Password</b></label>
	    <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
	        
	    <label>
	      <input type="checkbox" checked="checked" name="remember"> Remember me
	    </label>
	    <button type="submit" class="btn btn-primary btn-md loginBtn">Login</button> 
	    
	  </div>

	  <div class="containerLogin" style="background-color:#f1f1f1">
	  	<input type="button" class="btn btn-primary btn-md cancelbtnLogin" onclick="location.href='home.php';" value="Cancel" />
	    <span class="psw">Forgot <a href="#">username?</a></span> 
	    <span class="psw">Forgot <a href="#">password?</a></span>
	  </div>
	</form>

 <!-- This code was used from w3schools  -->
 <div id="message" class="containerSign">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>

<!-- This code was used from w3schools  -->
<script> 
    var myInput = document.getElementById("psw");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {
      // Validate lowercase letters
      var lowerCaseLetters = /[a-z]/g;
      if(myInput.value.match(lowerCaseLetters)) {  
        letter.classList.remove("invalid");
        letter.classList.add("valid");
      } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
      }
      
      // Validate capital letters
      var upperCaseLetters = /[A-Z]/g;
      if(myInput.value.match(upperCaseLetters)) {  
        capital.classList.remove("invalid");
        capital.classList.add("valid");
      } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
      }

      // Validate numbers
      var numbers = /[0-9]/g;
      if(myInput.value.match(numbers)) {  
        number.classList.remove("invalid");
        number.classList.add("valid");
      } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
      }
      
      // Validate length
      if(myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
      } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
      }
    }
</script>

</body>
</html>