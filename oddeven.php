<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form action="" method="POST">
		Enter Number: <input type="number" name="input">
		<input type="submit" value="Submit" name="submit">
	</form>

	<?php
		if(isset($_POST['submit'])){
			$input = $_POST['input'];
			$odd = array();
			$even = array();
			$arrayinput = array();

			for($i = 1;$i < $input+1;$i++)
			{
				$arrayinput[] += $i;
				if($i % 2 == 0)
				{
					$even[] += $i;
				}
				else
				{
					$odd[] += $i;
				}
			}
			
			echo "<div style='float:left;margin-right:50px;'>";
			echo "<b>Even</b><br>";
			for($j = 0;$j < count($even);$j++)
			{
				echo $even[$j]."<br>";
			}
			echo "</div>";

			//odd
			echo "<div>";
			echo "<b>Odd</b><br>";
			for($j = 0;$j < count($odd);$j++)
			{
				echo $odd[$j]."<br>";
			}
			echo "</div>";
		}
		
	?>
</body>
</html>