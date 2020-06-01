<?php
 	
 	$language = "PHP";
	$greeting =  "Welcome to ".$language."!";
	echo $greeting;
	echo "<hr style=\"margin 1rem 0\">";	
	
	$firstName = "Ke";
	$lastName = "Cheng";
	$day = 2;
	$month = "November";
	$year = 1978;
	$assembled = "My name is ".$firstName." ".$lastName.". I was born on ".$day." of ".$month." in ".$year.".";
	echo $assembled;
	echo "<hr style=\"margin 1rem 0\">";
	
	$length = 6.5;
	$width = 3.5;
	$area = $length*$width;
	echo $area;
	echo "<hr style=\"margin 1rem 0\">";
	
	$product ="armchair";
	$price = 249.00;
	$tax = 0.13;
	$delivery = 0.05;
	$fe = $price + $price * $tax;
	$fee = $fe + $fe * $delivery; 
	$total = $product.": "."$".$fee;
	echo $total;
	echo "<hr style=\"margin 1rem 0\">";
	
?>

<figure>
  	<img src="https://placehold.jp/24/e8d2ae/fff/300x300.png" alt="placeholder-image">
  	<figcaption><?php echo $total; ?> </figcaption>
</figure>