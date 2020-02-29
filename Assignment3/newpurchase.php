<!DOCTYPE html>
<html>
<head>
<title>Purchases</title>
</head>
<body>
<br>
<?php
include 'connectdb.php';
?>
<!-- add new purchase for a customer, if purchase already been made up the quantity-->
<?php




$cid = $_POST["selcustid"];
$pid = $_POST["selprodid"];
$quant = $_POST["quant"];





$querycheck = 'SELECT * FROM transaction WHERE productid=' . $pid . ' AND customerid =' . $cid ;
$queryinsert = 'INSERT INTO transaction VALUES ( ' . $cid . ',' . $pid . ',' . $quant . ')' ;
$queryupdate = 'UPDATE transaction SET quantity = quantity + ' .$quant . ' WHERE customerid = ' . $cid . ' AND productid = ' . $pid ;
if(mysqli_num_rows(mysqli_query($connection,$querycheck))==0){
	mysqli_query($connection,$queryinsert);
	echo 'Succesful adding new purchase';
}
else{
	 mysqli_query($connection,$queryupdate);
	echo ' the quantity has been adjusted to reflect the additional purchase';
}
mysqli_close($connection);
?>
</body>
</html>
