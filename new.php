<!DOCTYPE html>
<html>
<head>
<body>
<?php
function fruit()
{
	$fruit="apple";
	$qty=25;
	$price=12;
	$total=$qty*$price;
	
echo "price for ".$qty." ".$fruit." is= ".$total;
}
fruit();
?>
</body>
</head>
</html>