<html>
<head>
	<title>Switch Statements</title>
</head>
<body>
	<p>
		<?php
		$shoes_color = 'blue';
		switch ($shoes_color) {
			case 'blue':{
				$shirt_color = 'green';
				echo "Your " . $shoes_color . " shoes match with " . $shirt_color . " shirt!";
				break;
			}
			case 'black': {
				$shirt_color = "white";
				echo "Your " . $shoes_color . " shoes match with " . $shirt_color . " shirt!";
				break;
			}	
			
			default: {
				$shirt_color = 'gray';   
				echo "Your " . $shoes_color . " shoes match with " . $shirt_color . " shirt!";
				break;
			}
		}
		?>
	</p>

</body>
</html>