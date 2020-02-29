<!DOCTYPE html>
<html>
<head>
<title> List of products the customer selected has purchased </title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<br>
<o1>
<?php

		$idholder = $_POST["custid"] ;
 		$querytrans = 'SELECT descr FROM product, transaction WHERE product.productid= transaction.productid AND transaction.customerid = "' .$idholder . '"' ;

		$resulttrans=mysqli_query($connection,$querytrans);

		if(!$resulttrans) {
			die("the database query failed.");
		}
 
		while($row=mysqli_fetch_assoc($resulttrans)) {
			echo '<li>';
			echo $row["descr"];
			echo '<br>';
		}

	mysqli_free_result($resulttrans);
?>
</o1>
<?php
	mysqli_close($connection);
?>
</body>
</html>
