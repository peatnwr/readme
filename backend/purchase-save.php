<?php
    include "../connectDB/connectDB.php";

    $sqlCheckOrder = "SELECT `cart`.`cart_id` AS `cart`, `order`.`cart_id` AS `order` FROM `cart`, `order` WHERE `cart`.`cart_id`=`order`.`cart_id`";
    $rsCheckOrder = mysqli_query($conn, $sqlCheckOrder);
    $rowCheckOrder = mysqli_num_rows($rsCheckOrder);
    if($rowCheckOrder > 0){
        echo "<script>window.location = '../mypurchase.php';</script>";
    }else{
        $sqlOrder = "INSERT INTO `order`(user_id, cart_id) SELECT cart.user_id, cart.cart_id FROM cart";
        $rsOrder = mysqli_query($conn, $sqlOrder);
        if($rsOrder){
            echo "<script>window.location = '../mypurchase.php';</script>";
        }else{
            echo "<script>alert('กรุณาติดต่อผู้ให้บริการเว็บ');</script>";
        }
    }
?>