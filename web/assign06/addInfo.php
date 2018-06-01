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
      <h1>Add Site to Database</h1>
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
      <textarea name="descriptOfSite" placeholder="Add Description" required></textarea>
      <hr>

      <label for="journalName"><b>Journal Name</b></label>
      <input type="text" placeholder="Add Journal Name" name="journalName" required>

      <label for="date"><b>Date</b></label>
      <input type="date" name="date" placeholder="mm/dd/yyyy" required><br><br>

      <label for="content"><b>Journal Content</b></label>
      <textarea name="contentOfJournal" placeholder="Add Content" required></textarea>
      <hr>

      <label for="isMale"><b>Gender</b></label>
      <select class="selectpicker" name="gender" title="Choose one of the following...">
        <option value="true">Male</option>
        <option value="false">Female</option>
      </select>

      <label style="margin-left: 20px" for="isPregnant"><b>Pregnant Yes or NO</b></label>
      <select class="selectpicker" name="gender" title="Choose one of the following...">
        <option value="true">Yes</option>
        <option value="false">No</option>
      </select> <br><br>

      <label for="species"><b>Species</b></label><br>
       <input type="checkbox" name="species" value="Brown Trout">  Brown Trout<br>
       <input type="checkbox" name="species" value="Brook Trout">  Brook Trout<br>
       <input type="checkbox" name="species" value="Bull Trout">  Bull Trout<br>
       <input type="checkbox" name="species" value="Rainbow Trout">  Rainbow Trout<br>
       <input type="checkbox" name="species" value="Yellowstone Cutthroat Trout">  Yellowstone Cutthroat Trout<br>
       <input type="checkbox" name="species" value="WhiteFish">  Mountain WhiteFish<br>
     
     

     <!--  <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
       -->
    <!--   <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
      
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p> -->





      <div class="clearfix">
        <!-- <button type="button" class="btn btn-primary btn-md cancelbtn">Cancel</button> -->
        <button type="submit" class="btn btn-primary btn-md addInfoBtn">Add Information</button>  
       
      </div>
    </div>
  </form>
  
</body>
</html>