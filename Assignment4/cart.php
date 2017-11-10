<?php
    require 'Common.php';
    include 'header.php';
    include 'footer.php';
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
    $user_id = $_POST['user_id'];
    $price = $_POST['price'];
    $item_id = $_POST['item_id'];
    
    $sel_join = "SELECT * FROM users_items INNER JOIN users ON users_items.users_id=users.id";
    $sel_join_res = mysqli_query($con, $sel_join);
    if(mysqli_num_rows($sel_join_res)==0)
    {
        echo 'Add items to the cat first!';
    }
    else
    {
       while($item_id!=NULL)
       {
           $sum = $sum + $price;
           $id = $item_id.",";
           $item_id++;
           echo '$id';
       }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid" id="content">
            
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th><a href="cart-remove.php?id={$row['id']}" class="remove_item_link">Remove</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td><td>Total</td><td>Rs.</td><td><a href='success.php' class='btn btn-primary'>Confirm Order</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </body>
</html>