
<!DOCTYPE html> 
<html class="body1">
<head> 
	<meta charset="utf-8" />
	<title> Klenton's Home Page </title>
	<link rel="stylesheet" type="text/css" href="homepage.css"/>
	<script type="text/javascript" src="homepage.js"></script>

</head>
	
<body>

	<div class="top">
		<div class="page"> Home Page
		<a href="" class="assign">Assignments</a>
		</div>

	</div>
	
</body>
</html>	






<!--<!DOCTYPE html> 
<html class="body1">
<head> 
	<meta charset="utf-8" />
	<title> Klenton's Home Page </title>
	<link rel="stylesheet" type="text/css" href="homepage.css"/>
	<!--<script type="text/javascript" src="homepage.js"></script>

</head>
	
<body>

	<div class="top">
		<div class="page"> Home Page
		<a href="assignmentsPage.php" class="assign">Assignments</a>
		</div>

	</div>

	<div class="container">

		<?php>
		for($x = 0; $x < 7; $x++)
		{
			echo "<div class=\"mySlides\"> 
					<div class=\"numbertext\">($x + 1) / 6</div>
					<img src=\"pic$x\" class=\"img$x\">
				  </div>"
		}

		?>

		≈
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  		<a class="next" onclick="plusSlides(1)">&#10095;</a>

  		<div class="caption-container">
  			<p id="caption"></p>
  		</div>


  		<div class="row">
  			<div class="column">
  				<img class="demo cursor" src="pic1" onclick="currentSlide(1)" alt="">
  			</div>
  		
  			<div class="column">
  				<img class="demo cursor" src="pic2" onclick="currentSlide(2)" alt="">
  			</div>
  			
  			<div class="column">
  				<img class="demo cursor" src="pic3" onclick="currentSlide(3)" alt="">
  			</div>

  			<div class="column">
  				<img class="demo cursor" src="pic4" onclick="currentSlide(4)" alt="">
  			</div>

  			<div class="column">
  				<img class="demo cursor" src="pic5" onclick="currentSlide(5)" alt="">
  			</div>

  			<div class="column">
  				<img class="demo cursor" src="pic6" onclick="currentSlide(6)" alt=""> 
  			</div>
  		</div>

	</div>
	
</body>
</html>	