<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="shortcut icon" href="./images/icon.png" type="image/x-icon">

    <!-- Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css">

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/content-topic-style.css">
    <link rel="stylesheet" href="./css/navbar.css">

    <title>My List</title>

    <?php
        include "./navbar.php";
        include "./connectDB/connectDB.php";

        $userID = $_SESSION['user_id'];

        $sqlOrder = "SELECT `order`.`book_id`, `order`.`user_id`, `order`.`status`, `book`.`bookname`, `book`.`bookimage`, `book`.`writer`, `book`.`synopsis`, `book`.`book_links` FROM `order` INNER JOIN `book` ON `order`.`book_id`=`book`.`book_id` WHERE `order`.`book_id` = `book`.`book_id` AND `user_id` = $userID AND `status` = 2";
        $rsOrder = mysqli_query($conn, $sqlOrder);
    ?>

</head>

<body>

    <div class="purchase-Firstdiv">
        <div class="purchase-Secdiv">
            <div class="purchase-head">
                <p class="tx-30-bd">My List</p>
            </div>
        </div>
        <?php while($row = mysqli_fetch_row($rsOrder)){ ?>
            <div class="cart-body">
                <div class="card-head">
                    <div class="card-main">
                        <img class="image-cart" src="<?php echo $row[4] ?>" alt="">
                        <div class="card-info">
                            <h3><?php echo $row[3]; ?></h3>
                            <p style="color: #696969;"><?php echo $row[5] ?></p>
                            <p>เรื่องย่อ: <?php echo $row[6] ?></p>
                            <p>ลิ้งสำหรับเข้าอ่าน: <a href="<?php echo $row[7] ?>"><?php echo $row[7] ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    
</body>

</html>