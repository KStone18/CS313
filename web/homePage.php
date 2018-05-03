<!DOCTYPE html> 
<html class="body1">
<head> 
	<meta charset="utf-8" />
	<title> Klenton's Home Page </title>
	<link rel="stylesheet" type="text/css" href="homepage.css"/>
	<script type="text/javascript" src="homepage.js"></script>

</head>
	
<body class="body1">

	<div class="top">
		<div class="page"> Home Page
		<a href="assignmentsPage.php" class="assign">Assignments</a>

		</div>
	</div>
	


	<!-- Container for the image gallery -->
<div class="container">

  <!-- Full-width images with number text -->
  <div class="mySlides">
    <div class="numbertext" >1 / 6</div>
      <img src="pic1w.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
      <img src="pic2w.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
      <img src="pic3w.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
      <img src="pic4w.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
      <img src="pic5w.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
      <img src="pic6w.png" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <!-- Thumbnail images -->
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="pic1w.png" style="width:100%" onclick="currentSlide(1)" alt="Ghost Recon">
    </div>
    <div class="column"> 
      <img class="demo cursor" src="pic2w.png" style="width:100%" onclick="currentSlide(2)" alt="Payette National Forest Fire Crew">
    </div>
    <div class="column">
      <img class="demo cursor" src="pic3w.png" style="width:100%" onclick="currentSlide(3)" alt="Horseback Riding">
    </div>
    <div class="column">
      <img class="demo cursor" src="pic4w.png" style="width:100%" onclick="currentSlide(4)" alt="Lower Palisades Lake">
    </div>
    <div class="column">
      <img class="demo cursor" src="pic5w.png" style="width:100%" onclick="currentSlide(5)" alt="Mann Creek Fire Lookout">
    </div> 
    <div class="column">
      <img class="demo cursor" src="pic6w.png" style="width:100%" onclick="currentSlide(6)" alt="Upper Palisades Lake">
    </div>
  </div>
</div>
	<div class="date">
	 	<?php
		echo "Today is " . date("Y/m/d") . "<br>";
		?>
	</div>
<script>
  var slideIndex = 1;
  showSlides(slideIndex);
</script>

</body>
</html>	