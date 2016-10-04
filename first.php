<?php
session_start();
$con= mysqli_connect("localhost","root","","Art_Gallery");
$query="select order_id, COUNT(Order_id) as Cont from Booked_Products where Order_id IN(select DISTINCT Order_id from Booked_Products) GROUP By Order_id order by Cont desc limit 6;";
$res= mysqli_query($con,$query);
$results= array();
$i=1;
while($row=mysqli_fetch_array($res))
{
	$results[$i]=$row;
	$i++;
}
$max =sizeof($results);
//echo $max;
//print_r($results);exit;

$_SESSION["TS"]=$results;

if($max==6)
{
    header('Location: '."HomepageTS.php");
}
else{
	header('Location: '."Homepage.php");
}

?>