<?php
 session_start();
 require 'dbconnect.php';
 $id = $_GET['id'];
 $fn = $_GET['fname'];
 $ln = $_GET['lname'];
 $des = $_GET['designation'];
 $gen = $_GET['gender'];
 $add = $_GET['address'];
 $em = $_GET['email'];
 $pass = $_GET['password'];

 $query = "UPDATE `employee` SET `Id`='$id',`fname`='$fn',`lname`='$ln',`designation`='$des',`gender`='$gen',`address`='$add',`email`='$em',`password`='$pass' WHERE id=$id";
// echo "$query";

$result=mysqli_query($conn,$query);

if($result)
{
	echo "Updated";
	header("location:test.php");
	 exit();
}
else
{
	echo "Error...";

}

?>