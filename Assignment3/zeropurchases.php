<!DOCTYPE html>
<html>
<head>

<title>products never purchased</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<div class = 'container'>
<table cellpadding ='15'>
<tr>
    	<th> productid </th>
	<th> description </th>
</tr>
<?php


        $queryzero = 'SELECT productid, descr FROM product WHERE product.productid NOT IN (SELECT DISTINCT productid FROM transaction)' ;
        $resultzero = mysqli_query($connection,$queryzero);
        if(!$resultzero){
                die(" the database query failed.");
        }
	while($row=mysqli_fetch_assoc($resultzero)) {
                echo '<tr>';
                echo '<td>' . $row["productid"] . '</td>';
		echo '<td>' . $row["descr"] . '</td>';
                echo '</tr>';
        }
	mysqli_free_result($resultzero);
        mysqli_close($connection);
?>
</table>
</body>
</html>
