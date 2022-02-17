<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Infomation</title>

    <link rel="stylesheet" href="./css/admin.css">

    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="shortcut icon" href="./images/icon.png" type="image/x-icon">

    <?php
    include "./connectDB/connectDB.php";
    include "./nav-admin.php";

    $count_n = 1;

    ?>
</head>

    <?php

        if ($_GET['user_id']) {
            $userID = $_GET['user_id'];
            $sqluser = "SELECT * FROM users WHERE user_id = $userID";
            $username = mysqli_query($conn, $sqluser);
            while ($row = mysqli_fetch_row($username)) {
                $name = $row[1];
            }

            $sqlUser = "SELECT * FROM users WHERE admin_id = 0";
            $rsUser = mysqli_query($conn, $sqlUser);
    
            $sql_list_success = "SELECT `order`.`book_id`, `order`.`user_id`, `order`.`status`, `book`.`bookname`, `book`.`bookimage`, `book`.`writer`, `book`.`synopsis`, `book`.`book_links` FROM `order` INNER JOIN `book` ON `order`.`book_id`=`book`.`book_id` WHERE `order`.`book_id` = `book`.`book_id` AND `user_id` = $userID AND `status` = 2";
            $list_success = mysqli_query($conn, $sql_list_success);
    
            $sql_wait = "SELECT `wait_id`, `user_id` FROM `order` WHERE `user_id` = $userID AND `status`= 1 GROUP BY `wait_id` ORDER BY `wait_id` ASC";
            $countwait = mysqli_query($conn, $sql_wait);
        }

    ?>

<body>
    <div class="purchase-Firstdiv">
        <div class="purchase-Secdiv">
            <div class="purchase-head">
                <p class="tx-30-bd">รายการที่สั่งซื้อเรียบร้อยแล้ว</p>
            </div>
        </div>
        <?php while ($row = mysqli_fetch_row($list_success)) { ?>
            <div class="cart-body">
                <div class="card-head">
                    <div class="card-main">
                        <img class="image-cart" src="<?php echo $row[4] ?>" alt="">
                        <div class="card-info">
                            <h3><?php echo $row[3]; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="purchase-Secdiv">
            <div class="purchase-head">
                <p class="tx-30-bd">รายการที่กำลังรอยืนยัน</p>
            </div>
        </div>
        <?php while ($crow = mysqli_fetch_row($countwait)) {
            $count = $crow[0];
            $i = $crow[0]; 
            $sql_list_notsuccess = "SELECT `order`.`book_id`, `order`.`user_id`, `order`.`status`, `book`.`bookname`, `book`.`bookimage`, `book`.`writer`, `book`.`synopsis`, `book`.`book_links`, `book`.`bookprice`, `order`.`wait_id`, `order`.`receipt` FROM `order` INNER JOIN `book` ON `order`.`book_id`=`book`.`book_id` WHERE `order`.`book_id` = `book`.`book_id` AND `user_id` = $userID AND `status` = 1 AND `order`.`wait_id`=$count ORDER BY `order`.`wait_id` ASC";
            $list_notsuccess = mysqli_query($conn, $sql_list_notsuccess);
            ?>
            <div class="cart-body" id="wwww">
                <?php while ($wrow = mysqli_fetch_row($list_notsuccess)) { ?>
                    <div class="card-head">
                        <div class="card-main">
                            <img class="image-cart" src="<?php echo $wrow[4] ?>" alt="">
                            <?php 
                                $sql_img="SELECT `receipt` FROM `order` WHERE `wait_id`= $count ORDER BY `wait_id` ASC";
                                $img = mysqli_query($conn, $sql_img);
                                while ($imgrow = mysqli_fetch_row($img)) { 
                                    $receipt = $imgrow[0]; 
                                    if($i==$crow[0]) { ?>
                                        <img class="image-cart image-receipt" src="<?php echo $receipt ?>" alt="">
                                  <?php $i+=1; } ?>
                               <?php } ?>
                            <div class="card-info">
                                <h3><?php echo $wrow[3]; ?></h3>
                                <h3><?php echo "ราคา : " . $wrow[8]; ?></h3>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="cart-body b_c_o">
                <a href="./backend/waitconfirm.php?statusok=ok&user_id=<?php echo $userID ?>&wait_id=<?php echo $count ?>" onclick="return confirm('ต้องการยืนยันการสั่งซื้อของ <?php echo $name ?> หรือไม่')"><button class="ok">ยืนยันคำสั่งซื้อ</button></a>
                <a href="./backend/waitconfirm.php?statuscancle=cancle&user_id=<?php echo $userID ?>&wait_id=<?php echo $count ?>" onclick="return confirm('ต้องการลบการสั่งซื้อของ <?php echo $name ?> หรือไม่')"><button class="cancle">ลบคำสั่งซื้อ</button></a>
            </div>
        <?php } ?>
        
    </div>
</body>

</html>