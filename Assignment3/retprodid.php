<?php
	  include "connectdb.php";
        $querypret = "SELECT * FROM product";
        $resultpret = mysqli_query($connection,$querypret);
        if(!$resultpret) {
                die("databases query failed.") ;
        }
	while($row = mysqli_fetch_assoc($resultpret)){
                echo "<option value='";
                echo $row["productid"] ."'>";
                echo $row["productid"];
                echo "</option>";
        }
	mysqli_free_result($resultpret);
?>
