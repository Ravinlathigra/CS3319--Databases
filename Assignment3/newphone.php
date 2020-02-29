<!DOCTYPE html>
<html>
<head>
<title>Update phone number</title>
</head>
<body>
<!-- update the phone number-->
<?php
include 'connectdb.php';
?>

<?php
session_start() ;
$phonechange= $_POST["newnumber"] ;
echo '<br>';
$querynewnum1 = 'UPDATE customer SET phoneno= "' . $phonechange . '"  WHERE customerid = ' . $_SESSION["customersave"];
echo '<br>' ;
mysqli_query($connection,$querynewnum1) ;
echo '<br>' ;
echo 'number has been changed' ;
mysqli_close($connection) ;
?>
</body>
</html>
