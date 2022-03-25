<?php

session_start();
if (isset($_SESSION['user'])) {
    $un=$_SESSION['user'];
}else {
    $un="";
}
if(isset($_SESSION['pass'])) {
    $ps=$_SESSION['pass'];
}else {
    $pass="";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3 col-xs-12 ";>
    <form action="checked.php"  method="POST">
        UserName: <input type="text" name="uname"><br><br>
        Password: <input type="text" name="password"><br><br>
        <input type="submit" name="submit">
    </form>
    </div>
</body>
</html>