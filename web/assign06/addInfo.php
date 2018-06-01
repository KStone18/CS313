<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title> Data Collection </title>
  <?php include('headerA.php'); ?>

 	 <form action="profile.php" method="post" style="border:1px solid #ccc">
    <div class="containerSign">
      <h1>Create New Site</h1>
      <hr>

      <label for="StreamName"><b>Stream Name</b></label>
      <input type="text" placeholder="Enter Stream Name" name="streamName" required>
      <hr>

      <label for="SiteName"><b>Site Name</b></label>
      <input type="text" placeholder="Enter Site name" name="siteName" required>

      <label for="Latitude"><b>Latitude</b></label>
      <input type="text" placeholder="Enter Latitude" name="Latitude" required>

      <label for="Longitude"><b>Longitude</b></label>
      <input type="text" placeholder="Enter Longitude" name="Longitude" required>

      <label for="descript"><b>Description of site</b></label>
      <textarea name="descriptOfSite" placeholder="Add Description"></textarea>


     <!--  <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
       -->
    <!--   <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
      
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p> -->

      <div class="clearfix">
        <!-- <button type="button" class="btn btn-primary btn-md cancelbtn">Cancel</button> -->
        <button type="submit" class="btn btn-primary btn-md signupbtn">Add Information</button>  
       
      </div>
    </div>
  </form>
  
</body>
</html>