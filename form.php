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
$link = mysqli_connect("localhost","root","","college_website");

if($link== false){
    die("ERROR: Could not connect.".mysqli_connect_error());
}

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$number = mysqli_real_escape_string($link, $_REQUEST['number']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);

$sql="INSERT INTO form(name, email, password,number,address ) VALUES('$name','$email','$password','$number','$address')";
if(mysqli_query($link, $sql)){
    echo '<h1 class="custom_style">Records added successfully.</h1>';
    }else{
        echo "ERROR: Could not able to execute $sql.".mysqli_error($link);
    }


    mysqli_close($link);
    ?>
</body>
</html>