<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    <?php
    require 'dbconnect.php';

    $query="SELECT * FROM employee";
    $result=mysqli_query($conn,$query);

    ?>

    <div class="container" id="A" > 
    <table  border=" " style="text-align: center;" style="font-family: skyblue;" 
    style="width: 100vh;">
    <div>
    <td>ID</td>
	<td>FirstName</td>
	<td>LastName</td>
	<td>Designation</td>
	<td>Gender</td>
	<td>Address</td>
	<td>Email Address</td>
    <td>Password</td>
	<td>Update</td>
	<td>Delete</td>
    </div>

    
    <?php
        session_start();
		if(mysqli_num_rows($result) > 0)
		{
			//echo "true..";
			while ($row=mysqli_fetch_assoc($result)) {
                

				
	?>

    <tr>
         <td><?php echo $row['Id']?></td>
		<td><?php echo $row['fname']?></td>
		<td><?php echo $row['lname']?></td>
		<td><?php echo $row['designation']?></td>
		<td><?php echo $row['gender']?></td>
		<td><?php echo $row['address']?></td>
		<td><?php echo $row['email']?></td>
        <td><?php echo $row['password']?></td>
        <td><a href="edit.php?id=<?php  $row['Id']; ?>"  title="Edit"><button style="background-color: red;">Edit</button></a></td>
        <td><a href="delete.php?id=<?php  $row['Id']; ?>"  title="Delete"><button style="background-color: red;" >Delete</button></a></td>


    </tr>
   
    <?php

		}
	}
	else
	{
		echo "0 row found...";
	}
	?>
     </table>
    </div>

    
</body>
</html>