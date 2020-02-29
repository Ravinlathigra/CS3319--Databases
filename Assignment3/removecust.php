<!DOCTYPE html>
<html>
<head>
<title>Delete customer</title>
</head>
<body>
<br>
<?php
include 'connectdb.php' ;
?>


<?php
$custiddelete= $_POST["deletecustid"] ;
echo '<br>' ;
echo '<br>' ;
$querydelcust= 'DELETE FROM customer  WHERE customerid = " . $custiddelete."' ;
echo '<br>';
mysqli_query($connection,$querydelcust) ;
echo 'customer has been deleted from the database' ;
mysqli_close($connection) ;
?>
</body>
</html>
