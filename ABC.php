<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
			#CNAForms{box-shadow:0px 0px 3px blue; background-color: gainsboro; margin-top:30px;margin-bottom:30px;}
			i.fa,b{color:teal;}
		</style>
    
</head>
<body>

<?php

require 'dbconnect.php';
$data = $_GET;
    if(count($data)>0) {
    foreach($data as $key => $value) {

        if(empty($_GET)) {
        $message =  $key . " is required!";
        echo $message."<br>";
        
        }
        else {
            echo $value;
            echo "</br>";
        }
    } 
    
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
    

    $lnameErr = $fnameErr  = $genderErr = $addressErr = $emailidErr = $designationErr= $passwordErr="";

    $fname = $lname = $gender = $address = $designation = $email= $password= "";

    
    if (empty($_GET["fname"])) {
        $fnameErr = "FirstName is Required";
      } else {
        $fname = ($_GET["fname"]);
      }

      if (empty($_GET["lname"])) {
        $lnameErr = "LastName is Required";
      } else {
        $lname = ($_GET["lname"]);
      }

      if (empty($_GET["address"])) {
        $addressErr = "Address is Required";
      } else {
        $email =($_GET["address"]);
      }

      if (empty($_GET["gender"])) {
         $genderErr = "Gender is required";
       } else {
         $gender =($_GET["gender"]);
       }

       if (empty($_GET["designation"])) {
        $designationErr = "Please Select Designation";
      } else {
        $designation=($_GET["designation"]);
      }

      if (empty($_GET["email"])) {
        $emailidErr = "Please Select Mobile number";
      } else {
        $email=($_GET["email"]);
      }

      if (empty($_GET["password"])) {
        $passwordErr = "Password is Required";
      } else {
        $password = ($_GET["password"]);
      }
?>


<br>
<fieldset style="border-radius: 15px;" >
     <form  method="GET"  action="process.php" style="text-align: center;">
         <br>
         <div class="col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 col-xs-12" id="CNAForms">

FirstName:<input type="text" name="fname" placeholder="Enter FirstName.." style="border-radius: 5px;">
<span class="error" style="color: red;">//* <?php echo $fnameErr;?></span>

<br><br>

LastName:<input type="text" name="lname" placeholder="Enter LastName.." style="border-radius: 5px;">
<span class="error" style="color: red;">//* <?php echo $lnameErr;?></span>

<br><br>
Designation :<select name="designation" id=""  style="border-radius: 5px;">
<option value="">select</option>
             <option value="project manager">Project manager</option>
             <option value="jr.  devloper">Jr. Devloper</option>
             <option value="sr. devloper">Sr. Devloper</option>
             </select>
             <span class="error" style="color: red;">//* <?php echo $designationErr;?></span>
 
             <br><br>


         Gender:  <input type="radio"  value="male" name="gender">  <label>male</label>
        <input type="radio"  value="female" name="gender"><label>female</label>
        <span class="error" style="color: red;">//* <?php echo $genderErr;?></span>
      <br><br>

Address: <input type="textarea" name="address" cols="20" rows="5" placeholder="Enter Address.."  style="border-radius: 5px;">
<span class="error" style="color: red;">//* <?php echo $addressErr;?></span><br><br>

Email: <input type="text" name="email" placeholder="Enter Email Address.."  style="border-radius: 5px;">
<span class="error" style="color: red;">//* <?php echo $emailidErr;?></span><br><br>

Password: <input type="text" name="password" placeholder="Enter Password.."  style="border-radius: 5px;">
<span class="error" style="color: red;">//* <?php echo $passwordErr;?></span><br><br>
        <input type="submit" name="submit"  style="border-radius: 5px;">
         </div>
        
</form>
</fieldset>

<span style="text-align: center;">

</span>

</body>
</html>