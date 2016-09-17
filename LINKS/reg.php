<?php

$username= $_POST["username"];
$Email= $_POST["Email"];
$Age= $_POST["age"];
$Date= $_POST["datevalid"];
$Password= $_POST["password"];
$Type= $_POST["type"];

$con= mysqli_connect("localhost","root","","Art_Gallery");
$query="insert into users(Name, Email, Age, Dob, Password, Type) VALUES('$username','$Email',$Age , '$Date' ,'$Password', $Type)";
if(mysqli_query($con,$query))
{
    header('Location: '."Login.html");
}
else{
    
    //echo "Email Id already in use.";
	//header('Location: '."Signup.html");
	echo "<script type='text/javascript'>alert('Email ID already in use.');</script>";
	
	echo "<a href='Signup.html'><h3>Return</h3></a>";
	
}

?>