<!DOCTYPE html>
<html>
<head>
<title>Display total sales</title>
</head>
<body>
<br>
<?php
include 'connectdb.php';
?>

<div class = 'container'>

<table cellpadding ='15'>
<tr>
    	<th>Productid</th>
        <th>description</th>
	<th>Total Number Purchased</th>
	<th>Total Sales</th>
</tr>

<?php

		$saleid = $_POST["selproductid"];

     		$querysale = 'SELECT transaction.productid as productid, descr, sum(transaction.purchquant) as totalp, cost*(sum(transaction.purchquant)) as totals FROM transaction, product WHERE transaction.productid = ' . $saleid ;

		$resultsale = mysqli_query($connection,$querysale);	

        if(!$resultsale){
                die("the database query failed.");
        }

	while($row=mysqli_fetch_assoc($resultsale)) {
                	echo '<tr>' ;
                	echo '<td>' . $row["productid"] . '</td>' ;
               		 echo '<td>' . $row["descr"] . '</td>' ;
			echo '<td>' . $row["totalp"] . '</td>' ;
			echo '<td>' . $row["totals"] . '</td>' ;
               		 echo '</tr>' ;

        }
	mysqli_free_result($resultsale) ;

        mysqli_close($connection) ;
?>
</table>
</body>
</html>
