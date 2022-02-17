<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Me</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

    <?php
        include "./connectDB/connectDB.php";
        session_start();

        $rowCart = 0;
        $rowOrder = 0;

        if(!isset($_SESSION['fullname'])){
            $authention =  "<a href='./authentication.php'><button id='login'><i class='fas fa-sign-in-alt'></i> Sign In/Sign Up</button></a>";
        }else{
            $fullname = $_SESSION['fullname'];
            $userID = $_SESSION['user_id'];
            $sqlOrder = "SELECT * FROM `order` WHERE `user_id` = $userID AND `status` = 2";
            $rsOrder = mysqli_query($conn, $sqlOrder);
            $rowOrder = mysqli_num_rows($rsOrder);
            $sqlCart = "SELECT * FROM `cart` WHERE user_id = $userID";
            $rsCart = mysqli_query($conn, $sqlCart);
            $rowCart = mysqli_num_rows($rsCart);
            $authention =  "<a href='./index.php'><button id='login'><i class='fas fa-user'></i> $fullname</button></a><a href='./backend/logout.php'><button id='logout'><i class='fas fa-sign-out-alt'></i> Sign Out</button></a>";
        }
    ?>
    
</head>

<body>
    <div class="top-nav">
        <div class="top-logo">
            <?php echo $authention ?>

            <a href="./index.php"><img id="logo-centered" class="nav-logo" src="./images/readme-icon.png" alt="readme"></a>

            <div class="button-right">
                <a href="./mylist.php"><button id="mylist" class="cart-btn"><i class="fa fa-list"></i><div class="notification-list" style="<?php if($rowOrder<=0){echo "display: none;";} ?>"><?php echo $rowOrder; ?></div></button></a>
                <a href="./mycart.php"><button id="mycart" style="margin-left: 5px;" class="cart-btn"><i class="fas fa-shopping-cart"></i> My Cart <div class="notification-cart" style="<?php if($rowCart<=0){echo "display: none;";} ?>"><?php echo $rowCart; ?></div></button></a>
                <input type="search" name="" id="search" style="margin-left: 5px;" placeholder="Search E-Book">
            </div>
        </div>

        <div class="menu">
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./news.php">New</a></li>
                <li><a href="./bestsale.php">Best-Seller</a></li>
                <li><a href="./recommended.php">Recommended</a></li>
            </ul>
        </div>
    </div>

</body>

</html>