<!DOCTYPE html>
<html>
<head> 

</head>

<body>
	<p> this is a php page </p>
	<?php>
	for ($x = 10; $x < 10; $x--)
	{
		$color;
		if ($x % 2 == 0)
		{
			$color = "red"
		}
		else 
		{
			$color = "blue"
		}

		echo "<div id =\"div$x\" class> 
		<p>here is a div</p>
		</div>";
	}
	
	$x = 4 + "cat";
	echo "<p>$x</p>";
	?>
</body>	
</html>	