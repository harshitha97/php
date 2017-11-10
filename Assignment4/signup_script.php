<?php
    require 'Common.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $regex_email = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$";
    if(!preg_match($regex_email, $email))
    {
        header('location:signup.php?email_error=Enter correct email');
    }
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    if(strlen($password)<5)
    {
        header('location:signup.php?password_error=Enter correct password');
    }
    $email= mysqli_real_escape_string($con,$email);
    $password= mysqli_real_escape_string($con,$password);
    
    $sel_query = "SELECT id FROM users WHERE email=$email";
    $sel_query_res = mysqli_query($con, $sel_query)or die(mysqli_errno($con));
    if(mysqli_num_rows($sel_query_res)>0)
    {
        echo 'Email already exists!';
    }
    else
    {
        $user_signup = "INSERT into users(name,email,password,contact,city,address) values ('$name','$email','$password','$contact',$city','$address')";
        $user_submit = mysqli_query($con, $user_signup) or die(mysqli_errno($con));
        $u_id = mysqli_insert_id($con);
        echo 'User succesfully inserted: '.$u_id;
    }
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['contact'] = $contact;
    $_SESSION['city'] = $city;
    $_SESSION['address'] = $address;
    $_SESSION['id'] = mysqli_insert_id($con);
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
        <title>Signup | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div>TODO write content</div>
    </body>
</html>
