<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

<?php

 require 'dbconnect.php';

 session_start();
 $id=$_GET['id'];
//  echo"$id"; 
$query = "select * from employee WHERE id=$id";
 $query= "SELECT `id`, `fname`, `lname`, `designation`, `gender`, `address`, `email`, `password` FROM `employee` WHERE `id`= $id";
//  echo"$query";


 $result=mysqli_query($conn,$query);
 $row=mysqli_fetch_assoc($result);
  // var_dump($row);

$data = $_POST;
    if(count($data)>0) {
    foreach($data as $key => $value) {

        if(empty($post[$value])) {
        $message =  $key . " is required!";
        echo $message."<br>";
        
        }
        // else {
        //     echo $value;
        //     echo "</br>";
        // }
    } 
    
  
}
echo "<pre>";
print_r($data);
echo "</pre>";
    

    $lnameErr = $fnameErr  = $genderErr = $addressErr = $emailidErr = $designationErr= $passwordErr ="";

    $fname = $lname = $gender = $address = $designation = $email= $password ="";

    
    if (empty($_POST["fname"])) {
        $fnameErr = "FirstName is Required";
      } else {
        $fname = ($_POST["fname"]);
      }

      if (empty($_POST["lname"])) {
        $lnameErr = "LastName is Required";
      } else {
        $lname = ($_POST["lname"]);
      }

      if (empty($_POST["address"])) {
        $addressErr = "Address is Required";
      } else {
        $email =($_POST["address"]);
      }

      if (empty($_POST["gender"])) {
         $genderErr = "Gender is required";
       } else {
         $gender =($_POST["gender"]);
       }

       if (empty($_POST["designation"])) {
        $designationErr = "Please Select Designation";
      } else {
        $designation=($_POST["designation"]);
      }

      if (empty($_POST["email"])) {
        $emailidErr = "Please Select Mobile number";
      } else {
        $email=($_POST["email"]);
      }

      if (empty($_POST["password"])) {
        $passwordErr = "Password is Required";
      } else {
        $password = ($_POST["password"]);
      }
?>


<br>
<fieldset style="border-radius: 15px;">
     <form  method="GET"  action="update.php">
         <br>
         <input type="hidden" name="id" value="<?php echo $id; ?>">

FirstName:<input type="text" value="<?php echo $row['fname'];?>" name="fname" placeholder="Enter FirstName.." style="border-radius: 5px;">
<span class="error" style="color: red;">//* <?php echo $fnameErr;?></span>

<br><br>

LastName:<input type="text" name="lname" value="<?php echo $row['lname'];?>" placeholder="Enter LastName.." style="border-radius: 5px;">
<span class="error" style="color: red;">//* <?php echo $lnameErr;?></span>

<br><br>
Designation :<select name="designation" value="<?php echo $row['designation'];?>" id=""  style="border-radius: 5px;">
<option value="">select</option>
             <option value="project manager"<?php if($row['designation']=="project manager"){echo "selected";} ?>>Project manager</option>
             <option value="jr.  devloper" <?php if($row['designation']=="jr.  devloper"){echo "selected";} ?>>Jr. Devloper</option>
             <option value="sr. devloper" <?php if($row['designation']=="sr. devloper"){echo "selected";} ?>>Sr. Devloper</option>
             </select>
             <span class="error" style="color: red;">//* <?php echo $designationErr;?></span>
 
             <br><br>


         Gender:  <input type="radio"  value="male" <?php if($row['gender']=="male"){echo "checked";} ?> name="gender">  <label>male</label>
          <input type="radio"  value="female" name="gender" <?php if($row['gender']=="female"){echo "che";} ?>><label>female</label>
        <span class="error" style="color: red;" >//* <?php echo $genderErr;?></span>
      <br><br>

Address: <input type="textarea" value="<?php echo $row['address'];?>" name="address" cols="20" rows="5" placeholder="Enter Address.."  style="border-radius: 5px;">
<span class="error" style="color: red;">//* <?php echo $addressErr;?></span><br><br>

Email: <input type="text" name="email" value="<?php echo $row['email'];?>" placeholder="Enter Email Address.."  style="border-radius: 5px;">
<span class="error" style="color: red;">//* <?php echo $emailidErr;?></span><br><br>

Password: <input type="text" name="password"  value="<?php echo $row['password'];?>" placeholder="Enter Password.."  style="border-radius: 5px;">
<span class="error" style="color: red;">//* <?php echo $passwordErr;?></span><br><br>

<br><br>
        <input type="submit" name="submit"  style="border-radius: 5px;">
        
</form>
</fieldset>

<span style="text-align: center;">

</span>

</body>
</html>