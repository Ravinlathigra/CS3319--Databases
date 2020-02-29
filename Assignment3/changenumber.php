<!DOCTYPE html>
<html>
<head>

<title> Phone number currently </title>
</head>
<body>
<br>
<?php
include 'connectdb.php';
?>
<h1>this customer's current number</h1>

<?php
		session_start() ;
		$_SESSION['customersave'] = $_POST["custid2"] ;
        	$querynum = 'SELECT phoneno FROM customer  WHERE customerid = ' .$_SESSION['customersave'] ;
        	$resultnum =mysqli_query($connection,$querynum) ;
        	if(!$resultnum) {
                die("database querynum failed.") ;
        	}
		while($row=mysqli_fetch_assoc($resultnum)) {

			 echo $row["phoneno"] ;
			echo '<form action = "newphone.php" method = "post">' ;
			echo 'enter new phone number for this customer' ;
			echo '<br>' ;
				echo 'New number: <input type = "text" name = "newnumber">' ;
			echo '<input type = "submit" value="update number">' ;
			echo '<br>';
			echo '</form>' ;
	}
	mysqli_free_result($resultnum);
?>
<?php
     	mysqli_close($connection);
?>
</body>
</html>
