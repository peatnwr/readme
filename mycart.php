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

    <title>My Cart</title>

    <?php
        include "./navbar.php";
        include "./connectDB/connectDB.php";
        session_start();
        $userID = $_SESSION['user_id'];

        $sqlCart = "SELECT * FROM `cart` WHERE `user_id` = $userID";
        $rsCart = mysqli_query($conn, $sqlCart);
    ?>

</head>
<body>
    <div class="main-top">
        <div class="cart-head">
            <div class="cart-page">
                <p class="text-bold">My Cart</p>
            </div>
        </div>
        <?php while($row = mysqli_fetch_row($rsCart)){ ?>
        <form action="./backend/cart.php" method="POST">
            <div class="cart-body">
                <div class="card-head">
                    <div class="card-main">
                        <img class="image-cart" src="<?php echo $row[4] ?>" alt="">
                        <div class="card-info">
                            <h3><?php echo $row[2] ?></h3>
                            <p>ราคา: <?php echo $row[3] ?> บาท</p>
                            <input type="hidden" name="cart-id" value="<?php echo $row[0] ?>">
                        </div>
                    </div>
                    <div class="btn-info">
                        <button name="delete_product" onclick="return confirm('คุณต้องการลบข้อมูลหนังสือเล่มนี้หรือไม่')" class="del-btn"><i class="fa fa-trash" aria-hidden="true"></i> ลบ</button>
                    </div>
                </div>
            </div>
        </form>
        <?php } ?>
        <a href="./backend/purchase-save.php"><button class="cash-btn">ชำระเงิน</button></a>
    </div>

    <!-- Footer -->
    <?php include "./footer.php" ?>
</body>
</html>