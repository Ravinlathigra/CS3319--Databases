<!DOCTYPE html>
<html>
<head>

</head>
<body>
<br>
<?php
include 'connectdb.php';
?>
<div class = 'container'>
<table cellpadding = '15'>
<tr>
	<th>Customer's first name</th>
	<br>
	<th> the product's description </th>
	<th> quantity </th>
</tr>


<?php

	$minimumq = $_POST["minimumquant"] ;

	$queryqt = 'SELECT customer.fname as fname, product.descr as description , transaction.purchquant as quantity FROM customer, product , transaction WHERE customer.customerid = transaction.customerid AND product.productid = transaction.productid AND transaction.purchquant > ' . $minimumq ;
	$resultqt = mysqli_query($connection,$queryqt) ;
	if(!$resultqt){
		die("the database query failed.") ;
	}
	while($row=mysqli_fetch_assoc($resultqt)) {
		echo '<tr>';
		echo '<td>' . $row["fname"] . '</td>' ;
		echo '<td>' . $row["description"] . '</td>' ;
		echo '<td>' . $row["quantity"] . '</td>' ;
		echo '</tr>';
	}
	mysqli_free_result($resultqt) ;
	mysqli_close($connection) ;
?>
</table>
</body>
</html>
