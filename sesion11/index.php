
	<!DOCTYPE html>
	<html>
	<head>
		<title> PHP</title>
	</head>
	<body>


		<?php
		echo "<h1>";
		echo "Hola PHP";
		echo "</h1>";

		?>
		<h1><?php echo "Hola PHP";?></h1>
		<?php


		?>
		<?php
		$numero1=4;
		$numero2=11;
		$resultado=$numero1+$numero2;
		echo "<p> la suma del $numero1 y el $numero2 es $resultado</p>";
		echo '<br><p> la suma del $numero1 y el $numero2 es $resultado</p>';
		echo "<p>Codigo Dinamico</p>"; 
		echo '<p>Codigo Dinamico</p>';
		for($i=1;$i<=12;$i++){
			echo "<br>1x$i=".(1*$i);


		}
		for($j=1;$j<=100;$j++){
			echo "<br><pre><h2> la multiplicacion de $j : </h2></pre>";
			for($i=1;$i<=12;$i++){
				//echo "<br>$j x $i=".($j*$i);
				echo "<br>$j x $i=".($j*$i);
			}


		}
        echo "<pre> Codigo preformateado</pre>";
		?>

	</body>
	</html>

