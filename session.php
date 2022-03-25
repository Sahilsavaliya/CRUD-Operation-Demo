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
$data = $_POST;
    if(count($data)>0) {
    foreach($data as $key => $value) {

        if(empty($post[$value])) {
        $message =  $key . " is required!";
        echo $message."<br>";
        
        }else {
            
        }
    }  
}
?>

<fieldset>
     <form  method="post"   id="A">
Name:<input type="text" name="name" placeholder="Enter Name.." >

<br><br>
Designation :<select name="designation" id="">
<option value="">select</option>
             <option value="student">Student</option>
             <option value="teacher">Teacher</option>
             <option value="employee">Employee</option>
             </select>
 
             <br><br>


Address: <input type="textarea" name="address" cols="20" rows="5" placeholder="Enter Address..">


Gender:  <input type="radio"  value="male" name="gender">  <label>male</label>
        <input type="radio"  value="female" name="gender"><label>female</label>

<br><br>
Mobile_no: <input type="text" name="mnumber" placeholder="Enter Mobile Number..">
        <input type="submit">
</form>
</fieldset>

<span style="text-align: center;">
<?php
echo "<pre>";
    echo print_r($data);
    echo "</pre>";
?>
</span>
</body>
</html>