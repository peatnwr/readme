<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav</title>
     <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="shortcut icon" href="./images/icon.png" type="image/x-icon">
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/content-topic-style.css">
    <link rel="stylesheet" href="./css/navbar.css">

    <?php
        include "./connectDB/connectDB.php";
        session_start();

        $rowCart = 0;
        $rowOrder = 0;

        if (!isset($_SESSION['fullname'])) {
            $authention = "<a href='./authentication.php'><button id='login'><i class='fas fa-sign-in-alt'></i> Sign In/Sign Up</button></a>";
        } else {
            $fullname = $_SESSION['fullname'];
            $userID = $_SESSION['user_id'];
            $sqlOrder = "SELECT * FROM `order` WHERE `user_id` = $userID AND `status` = 1";
            $rsOrder = mysqli_query($conn, $sqlOrder);
            $rowOrder = mysqli_num_rows($rsOrder);
            $sqlCart = "SELECT * FROM `cart` WHERE user_id = $userID";
            $rsCart = mysqli_query($conn, $sqlCart);
            $rowCart = mysqli_num_rows($rsCart);
            $authention = "<a href='./admin_product.php'><button id='login'><i class='fas fa-user'></i> $fullname</button></a><a href='./backend/logout.php'><button id='logout'><i class='fas fa-sign-out-alt'></i> Sign Out</button></a>";
        }
    ?>
</head>
<body>
<div class="top-nav">
        <div class="top-logo">
            <?php echo $authention ?>
            <a href="./admin_product.php"><img id="logo-centered" class="nav-logo" src="./images/readme-icon.png" alt="readme"></a>
        </div>

        <div class="menu">
            <ul>
                <li><a href="./admin_product.php">Product</a></li>
                <li><a href="./admin_addproduct.php">Add Product</a></li>
                <li><a href="./admin_user.php">User</a></li>
            </ul>
        </div>
 </div>
</body>
</html>