<?php
require 'dbconnect.php';
session_start();
$id=$_GET['id'];
// var_dump($id);
// $query="UPDATE employee SET isactive=2 WHERE id=$id";
// $query ="DELETE FROM employee WHERE Id='".$_GET['Id']."'";
$query ="DELETE FROM employee WHERE id=$id";
$result = mysqli_query($conn,$query);
echo "<br>";
// var_dump($result);
if($result)
{							

	echo"Deleted";
	 header("location:test.php");
	exit();
}
else
{
	echo "<br>";
	echo "Error...";
}
?>