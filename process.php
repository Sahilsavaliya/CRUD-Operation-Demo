<?php
require 'dbconnect.php';


if(!isset($_GET['submit']))
{
	header("location:ABC.php");
	exit();
}
$id = $_GET['Id'];	
$fn = $_GET['fname'];
$ln = $_GET['lname'];
$des = $_GET['designation'];
$gen = $_GET['gender'];
$add = $_GET['address'];
$em = $_GET['email'];
$pass = $_GET['password'];

$query = "INSERT INTO employee VALUES ('$id','$fn','$ln','$des','$gen','$add','$em','$pass')";
echo "$query";

$result=mysqli_query($conn,$query);

if ($result)
 {
	echo "<br>Insert SUCCESS";
	header("location:test.php");
}
else 
 {
	header("location:ABC.php");
	echo "not insert";
 }	