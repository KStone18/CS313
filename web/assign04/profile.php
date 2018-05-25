<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title> abcd </title>
  <?php include('headerA.php'); ?>

  <form action="" class="pForm" onsubmit="initMap()">
  	Latitude:<br>
 	 <input id="lat" type="text" name="latitude">
  	<br>

	Longitude:<br>
 	 <input id="long" type="text" name="longitude">

  </form>

  <div id="map" class="map"></div>


</body>
</html>