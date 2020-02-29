<!DOCTYPE html>
<html>
<head>
<title> All products </title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>  The products:   </h1>
<br>
<o1>
<!-- show all products based on order selected by user -->
<?php
     	$orderby = $_POST["ordering"];
        $queryorder = 'SELECT * FROM product ORDER BY ' .$orderby ;
        $resultorder=mysqli_query($connection,$queryorder);
        if(!$resultorder) {
                die("database query failed.");
        }
	while($row=mysqli_fetch_assoc($resultorder)) {
                echo '<li>';
                echo $row["descr"];
        }
	mysqli_free_result($resultorder);
?>
</o1>
<?php
     	mysqli_close($connection);
?>
</body>
</html>
