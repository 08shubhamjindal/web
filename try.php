<!DOCTYPE html>
<html>
<head>
	<title>cost calc</title>
</head>
<body>
	<?php
	$tax=8.75;
	function calc($quantity , $price)
	{
		 global $tax;
		 $total = $quantity * $price ;
		 $taxrate = ($tax / 100) + 1;
		 $total = $total * $taxrate;
		 $total = number_format($total , 2);
		 return $total;
	}
	if (isset($_POST['submitted']))
	{
		if(is_numeric($_POST['quantity']) AND is_numeric($_POST['price']))
		{
			$total = calc($_POST['quantity'] , $_POST['price']);
			print "<p> your total come to $<span style=\"font-weight:bold;\">$total</span>,including the $tax rate . </p>";
		}
		else
		{
			print '<p style="color:red;">please enter a valid quantity</p>';
		}
	}
?>
<form action = "try.php" method="post">
	<p>quantity:<input type="text" name="quantity" size="3"/></p>
		<p>price:<input type="text" name="price" size="5"/></p>
		<input type ="submit" name="submit" value="calc"/>
		<input type ="hidden" name="submitted" value ="true" />
	</form>
 
	</body>
	</html>