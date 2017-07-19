<html>
	<head>
			<title>Home work_2</title>
	</head>
	<body>
		<h1>Домашнее задание №2</h1>
		<?php
			
			$x = rand(0,50);
			echo "Number" . $x;
			echo "<br>";
			$a = 5;// переменная (1)
			$b =10 ;//переменная (2)
			$c =0;//переменная (3)
			while($a<$x){
				$c = $a;
				$a = $a+$b;
				$b = $c;
				echo "$a";
				echo "$b";
				echo "$c";
				
			}
			if ($a == $x)
			{
				echo "Задуманное число входит в числовой ряд";
			}
			else
			{
				echo"Задуманное число не входит в числовой ряд";
			
			}	
				
		?>
		
	</body>
</html>