<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title> Data Collection </title>
  <?php include('headerA.php'); ?>

   <form action="insertSite.php" method="post" style="border:1px solid #ccc">
    <div class="containerSign">
      <h1>Add Site to Database</h1>
      <hr>

      <label for="Stream"><b>Select Stream</b></label>
        <select name="stream" class="form-control" id="sel1">
          <option value="none"></option>
        <?php 
          $valueName = "";
            foreach ($db->query('SELECT DISTINCT name FROM stream') as $row) {
                echo '<option value="'. $row['name'].'">' . $row['name'] . '</option>';
            } 
         ?>          
        </select>
        <br>
      


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
      <select class="selectpicker" name="pregnant" title="Choose one of the following...">
        <option value="true">Yes</option>
        <option value="false">No</option>
      </select> <br><br>

      <label for="species"><b>Species</b></label><br>
       <input type="checkbox" name="species[]" value="Brown Trout">  Brown Trout<br>
       <input type="checkbox" name="species[]" value="Brook Trout">  Brook Trout<br>
       <input type="checkbox" name="species[]" value="Bull Trout">  Bull Trout<br>
       <input type="checkbox" name="species[]" value="Rainbow Trout">  Rainbow Trout<br>
       <input type="checkbox" name="species[]" value="Yellowstone Cutthroat Trout">  Yellowstone Cutthroat Trout<br>
       <input type="checkbox" name="species[]" value="WhiteFish">  Mountain WhiteFish<br>
     


      <div class="clearfix">
        <!-- <button type="button" class="btn btn-primary btn-md cancelbtn">Cancel</button> -->
        <button type="submit" class="btn btn-primary btn-md addInfoBtn">Add Information</button>  
       
      </div>
    </div>
  </form>
  
</body>
</html>