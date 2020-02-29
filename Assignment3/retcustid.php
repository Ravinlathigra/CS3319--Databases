<?php
 	 include "connectdb.php";
     	$querycret = "SELECT customerid FROM customer";
        $resultcret = mysqli_query($connection,$querycret);
        if(!$resultcret) {
        	        die(" the databases query failed.") ;
        }
	while($row = mysqli_fetch_assoc($resultcret)){
                	echo "<option value='";
                	echo $row["customerid"] ."'>";
                	echo $row["customerid"];
                	echo "</option>";
        }
	mysqli_free_result($resultcret);
?>
