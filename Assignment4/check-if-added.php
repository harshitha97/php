<?php

    function check_if_added_to_cart($item_id){
        require 'Common.php';
        $sel_query = "SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and
status='Added to cart'";
        $sel_query_res = mysqli_query($con, $sel_query);
        if(mysqli_num_rows($sel_query_res)>=1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Lifestyle store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div> </div>
    </body>
</html>
