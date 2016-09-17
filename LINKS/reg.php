<?php

$username= $_POST["username"];
$Email= $_POST["Email"];
$Age= $_POST["age"];
$Date= $_POST["datevalid"];
$Password= $_POST["password"];


$con= mysqli_connect("localhost","root","","AME_SONNE");
$query="insert into users(Name, Email, Age, Date, Password) VALUES('$username','$Email',$Age , '$Date' ,'$Password')";
if(mysqli_query($con,$query))
{
    header('Location: '."Login.html");
}
else{
    
    echo mysqli_error($con);
}

?>