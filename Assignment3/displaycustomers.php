<?php

$querydcus = "SELECT * FROM customer ORDER BY lname";

$resultdcus = mysqli_query($connection,$querydcus);

if(!$resultdcus) {
		die("the databases query failed.") ;
}

echo '<br>';

echo "Select a customer:" . "<br>";

while ($row = mysqli_fetch_assoc($resultdcus)) {
    	echo '<input type = "radio" name = "custid" value="' ;
	echo $row["customerid"] ;

    	echo '">' .  $row["lname"] . ", " . $row["fname"] . ", " . $row["customerid"] . ", " . $row["city"] . ", " . $row["phoneno"] . ", " . $row["agentid"] . "<br>" ;
	echo '<br>' ;
}
mysqli_free_result($resultdcus);
?>
