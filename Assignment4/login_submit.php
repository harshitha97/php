<?php
    require 'Common.php';
    $email = mysqli_real_escape_string($con,$_POST['email']);
    md5($password) = mysqli_real_escape_string($con,$_POST['password']);
    $select_query = "SELECT id, email FROM users WHERE email=$email AND password=$password";
    $sel_query_res = mysqli_query($con, $select_query)or die(mysqli_errno($con));
    if(mysqli_num_rows($sel_query_res)==0)
    {
        echo 'No such user present.';
    }
    else
    {
        while($row = mysqli_fetch_array($sel_query_res))
        {
            echo 'ID'.$row['id'];
            echo 'Email'.$row['email'];
        }
    }
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = user_id;
    header('Location:products.php');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login submit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        
    </body>
</html>
