<!DOCTYPE html>
<html>
<head>
	<title>Kwik-E Mart</title>
</head>
<body bgcolor="00FF7F">

<?php
include "connectdb.php";
?>
<h1> Kwik-E Mart's homepage </h1>
<br>
<br>
<h2> Kwik-E's customers : </h2>
<!-- display the list of customers and then allow the user to select a customer and view their purchases  -->
<br>
<form action = "displaypurchases.php" method = "post">
<br>
<?php
include "displaycustomers.php";
?>
<br>
<input type = "submit" value="View customer purchases">
</form>
<br>
<br>
<!--    list products by either on price or description     -->
<h2>Our products</h2>
<br>
<h3>How would you like them ordered?</h3>
<br>
<form action = "getallprod.php" method = "post">
	<input type = "radio" name = "ordering" value = "cost"> Price <br>
<br>
	<input type = "radio" name = "ordering" value = "descr"> Description <br>
<br>
<br>
<input type = "submit" value="View products">
</form>
<br>
<br>
<br>
<h2>Add a new purchase for a customer</h2>
<form action="newpurchase.php" method="post">
Customer id:<select name="selcustid" id="selcustid">
<option value = "1" > Select from here </option>

<?php
include "retcustid.php";
?>
</select>
<br>
<br>
Product id: <select name="selprodid" id="selprodid">
<option value = "1" > Select Here </option>
<?php
include "retprodid.php";
?>
</select>
<br>
<br>
Amount purchased: <input type = "text" name="quant">
<br>
<br>
<input type = "Submit" value = "Insert new purchase">
</form>
<br>
<br>
<br>
<h2> Adding a new customer to the database </h2>
<form action = "newcustomer.php" method = "post">
<br>
First name: <input type = "text" name = "fname">
<br>
Last name: <input type = "text" name = "lname">
<br>
City: <input type = "text" name = "city">
<br>
Phone number: <input type = "text" name = "phoneno">
<br>
Agent id : <select name="selagentid" id="selagentid">
<option value = "1" > Select From Here </option>
<?php
include "retagentid.php";
?>
</select>
<br>
<br>
<input type = "submit" value = "submit new customer">
</form>

<h2> Change a customer's phone number </h2>
<form action = "changenumber.php" method = "post">
Customer id: <select name = "custid2" id="custid2">
<option value = "1" > Select From Here </option>
<?php
	include "retcustid.php";
?>
</select>
<br>
<br>
<input type = "submit" value= "current number">
</form>



<br>
<br>
<h2>  Delete a customer </h2>
<form action = "removecust.php" method = "post">
Customer id: <select name = "deletecustid" id = "deletecustid">
<option value = "1"> Select From Here </option>
<?php
include "retcustid.php";
?>
</select>
<br>
<input type = "submit" value = " delete this customer">
</form>

<br>
<br>
<p>
<h2> Customers who have bought more than a specified amount </h2>
<form action = "viewquant.php" method = "post">
Quantity: <input type = "text" name = "minimumquant">
<br>
<input type = "submit" value = "view">
</form>
<br>
<br>

<h2> Products never purchased </h2>
<?php
include "zeropurchases.php";
?>
<br>
<br>
<!-- Show sales -->
<h3> Total sales of a specific product </h3>
<form action="retnumsale.php" method="post">
Product id: <select name="selproductid" id="selproductid">
<option value = "1" > Select From Here </option>
<?php
include "retprodid.php";
?>
</select>
<br>
<br>
<input type = "Submit" value = "Return total sales">
</form>
</body>
</html>
