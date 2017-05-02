<html>
<body>

	<form action="" method="post">
	Pinigų suma keitimui <input type="number" name="number"><br>
	<button name="name" value="value" type="submit">Konvertuoti</button>
	</form>
	
	<?php
	
	if(isset($_POST['number']) && !empty($_POST['number'])) {
		$totalDen = convertToDenominations($_POST['number']);
		
		if ($totalDen)
			echo 'Pinigų suma keitimui: '.$_POST['number'].
			'<br>Minimalus kupiūrų skaičius: '.$totalDen;
		else echo 'Pinigų suma gali būti tik sveikasis skaičius';
	}

	function convertToDenominations($amount) {
		if (is_numeric($amount) && ctype_digit($amount))
		{
			$amount = (int)$amount;
			$totalDen = 0; // total denominations
			
			$totalDen += floor($amount / 500);
			$amount -= 500 * floor($amount / 500);
			
			$totalDen += floor($amount / 100);
			$amount -= 100 * floor($amount / 100);
			
			$totalDen += floor($amount / 50);
			$amount -= 50 * floor($amount / 50);
			
			$totalDen += floor($amount / 20);
			$amount -= 20 * floor($amount / 20);
			
			$totalDen += floor($amount / 10);
			$amount -= 10 * floor($amount / 10);
			
			$totalDen += floor($amount / 5);
			$amount -= 5 * floor($amount / 5);
			
			$totalDen += floor($amount / 1);
			$amount -= 1 * floor($amount / 1);
			
			return (int)$totalDen;
		}
		else return null;
	}
	?>
	
</body>
</html>