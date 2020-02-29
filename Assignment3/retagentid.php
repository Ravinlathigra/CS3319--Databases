<?php





	  include "connecttodb.php";
        $queryaret = "SELECT agentid FROM agent";
        $resultaret = mysqli_query($connection,$queryaret);
        if(!$resultaret) {
                die("databases query failed.") ;
        }
	while($row = mysqli_fetch_assoc($resultaret)){
                echo "<option value='";
                echo $row["agentid"] ."'>";
                echo $row["agentid"];
                echo "</option>";
        }
		mysqli_free_result($resultaret);
?>
