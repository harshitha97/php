<?php
    require 'Common.php';
    include 'header.php';
    include 'footer.php';
    if (isset($_SESSION['email'])) 
        { 
            header('location: products.php'); 
        }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>SIGN UP</h2>
                        <form  action="signup_script.html" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name" pattern="[A-Za-z]" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="e-mail" pattern="[a-z0-9,_%+-]+@[a-z0-9.-]+\.[a-z{2,3}$" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" pattern=".{5,}" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" pattern="[0-9]" required>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" pattern="[a-z]" required>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address"  pattern="[a-z]"required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>