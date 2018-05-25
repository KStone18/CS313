<?php
  session_start();
  $_SESSION["user"] = $_POST["uname"];

  include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>  </title>
  <?php include('headerA.php'); ?>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="dataForm" >
    <div class="containerSign">
      <h1>Search database</h1>
      <p>Please fill in this form to search for information.</p>
      <hr>

      <div class="form-group">
      <label for="Stream"><b>Select Stream</b></label>
      
      <div class="form-group">
        <select name="stream" class="form-control" id="sel1">
        <?php 
        	$valueName = "";
            foreach ($db->query('SELECT DISTINCT name FROM stream') as $row) {
                echo '<option value="'. $row['name'].'">' . $row['name'] . '</option>';
            } 



         ?>          
        </select>
        <br>
      </div>

      <div class="clearfix">
        <!-- <button type="button" class="btn btn-primary btn-md cancelbtn">Cancel</button> -->
        <button type="submit" class="btn btn-primary btn-md signupbtn">Search</button>  
       
      </div>
    </div>
  </form>
  
  <div class="containerResult">
  	<h3>Results from Database</h3>
  	<ul>

  	<?php


  	$streamName = $_POST["stream"];
  	
  	//echo "$streamName";

   	$query = "SELECT s.name as stream_name, si.name as site_name, si.description, si.latitude, si.longitude FROM stream s INNER JOIN site si ON si.stream_id = s.id"; //WHERE stream_name = :sName";


	$statement = $db->prepare($query);
	//$statement->bindValue(":sName", $streamName, PDO::PARAM_STR);
	$statement->execute();
	foreach ($statement->fetchAll(PDO::FETCH_ASSOC) as $stream)
	{
		var_dump($stream);
		$s_name = $stream["streamName"];
    	$si_name = $stream["site_name"];
    	$desc = $stream["description"];
    	$lat = $stream["latitude"];
    	$long = $stream["longitude"];
    
    	echo "<li>$s_name <br> $si_name: $desc - $lat, $long </li>";
	}
	
              
   ?>
	</ul>
  </div>

</body>
</html>