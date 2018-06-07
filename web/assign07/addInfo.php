<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title> Data Collection </title>
  <?php include('headerA.php'); ?>

 	 <form action="insertStream.php" method="post" style="border:1px solid #ccc">
    <div class="containerSign">
      <h1>Add Stream to Database</h1>
      <hr>

      <label for="StreamName"><b>Stream Name</b></label>
      <input type="text" placeholder="Enter Stream Name" name="streamName" required>
      <hr>

      <div class="clearfix">
        <!-- <button type="button" class="btn btn-primary btn-md cancelbtn">Cancel</button> -->
        <button type="submit" class="btn btn-primary btn-md addInfoBtn">Add Stream</button>  
       
      </div>
    </div>
  </form>
  
</body>
</html>