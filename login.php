<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        h1.custom_style{
            color:red;
            text-align:center;
        }
    </style>
</head>
<body>
<?php
include('connection.php');
$username=$_POST['username'];
$password=$_POST['password'];

   $username=stripcslashes($username);
   $password=stripcslashes($password);
   $username=mysqli_real_escape_string($con, $username);
   $password=mysqli_real_escape_string($con, $password);

   $sql= "select *from login where username = '$username' and password ='$password'";
   $result=mysqli_query($con,$sql);
   $row =mysqli_fetch_array($result, MYSQLI_ASSOC);
   $count =mysqli_num_rows($result);

   if($count==1){
    echo '<h1 class="custom_style">Logged In Successfully.</h1>';
   }
   else
   {
    echo '<h1 class="custom_style">Login Failed.</h1>';
   }


?>
</body>
</html>