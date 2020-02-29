<!DOCTYPE html>
<html>
<head>


<title>New customer</title>
</head>
<body>
<?php
include 'connectdb.php';
?>

<?php


$fnn = $_POST["fname"] ;

$lnn = $_POST["lname"] ;

$cityn = $_POST["city"] ;

$phonenon= $_POST["phoneno"] ;

$agentidn = $_POST["selagentid"] ;

$querygmax = 'SELECT MAX(customerid) AS cid FROM customer' ;

$result2 = mysqli_query($connection, $querygmax);

if(!result2){
	die("database maximum query failed.") ;
}

$rowmax = mysqli_fetch_assoc($result2) ;

$newcid = intval($rowmax["cid"]) +1 ;
$custidnew = (string)$newcid ;
$querynins = 'INSERT INTO customer VALUES ( ' . $custidnew . ',"' . $fnn . '","' . $lnn . '","' . $cityn . '","' . $phonenon . '",' . $agentidn .  ')' ;
echo "<br>" ;
echo "<br>" ;
if(!mysqli_query($connection,$querynins)){
	echo 'there was an error adding the new customer' ;
}
else{
        echo 'the customer has now been added to the database' ;
}
mysqli_close($connection);
?>
</body>
</html>
