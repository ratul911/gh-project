<DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			$marks = 64;
			
				if($marks <=39){
					echo "F or CGPA 0.00";
				} else if ($marks <=45){
					echo "D or CGPA 2.00";
				} else if ($marks <=50){
					echo "C or CGPA 2.25";
				} else if ($marks <=55){
					echo "C+ or CGPA 2.50";
				} else if ($marks <=60){
					echo "B- or CGPA 2.75";
				} else if ($marks <=65){
					echo "B or CGPA 3.00";
				} else if ($marks <=70){
					echo "B+ or CGPA 3.25";
				} else if ($marks <=75){
					echo "A- or CGPA 3.50";
				} else if ($marks <=79){
					echo "A or CGPA 3.75";
				} else if ($marks <=100){
					echo "A+ or CGPA 4.00";
				}					
		?>
	</body>
</html>