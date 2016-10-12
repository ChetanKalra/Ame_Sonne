<?php
	session_start();
	$con= mysqli_connect("localhost","root","","Art_Gallery");
	$query="update users set Type=2 where Id=$_SESSION[user]";
	mysqli_query($con, $query);		

	header('Location: '."../Seller_home.php");

?>