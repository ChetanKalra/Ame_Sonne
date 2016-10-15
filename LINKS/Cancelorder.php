<?php

	global $Order_No;
	$Order_No= $_GET['Order_No'];
	//echo $Order_No;

	$con= mysqli_connect("localhost","root","","Art_Gallery");

	$query="select Order_Quantity,Order_id from Booked_Products where Order_No=$Order_No;";
	$res= mysqli_query($con,$query);	
	$row= mysqli_fetch_row($res);
	//print_r($row);

	$query2="update products set Quantity=Quantity+$row[0] where Product_id=$row[1]";
	mysqli_query($con,$query2);

	$query3="delete from Booked_Products where Order_No=$Order_No;";
	if(mysqli_query($con, $query3))
	{
		header('Location: '."OrderDetails.php");
	}

?>