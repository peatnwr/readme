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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/content-topic-style.css">
    <link rel="stylesheet" href="./css/navbar.css">

    <title>Best Seller</title>

    <?php
        include "./navbar.php";
        include "./connectDB/connectDB.php";

        $sqlTransFic = "SELECT book.bookname, book.bookimage, book.writer, book.synopsis, book.amountbook_sales, book_category.category_name FROM book, book_category WHERE book_category.category_id = 1 AND book.category_id = book_category.category_id AND book.amountbook_sales > 0";
        $sqlRomanceFic = "SELECT book.bookname, book.bookimage, book.writer, book.synopsis, book.amountbook_sales, book_category.category_name FROM book, book_category WHERE book_category.category_id = 2 AND book.category_id = book_category.category_id AND book.amountbook_sales > 0";
        $sqlYaoiFic = "SELECT book.bookname, book.bookimage, book.writer, book.synopsis, book.amountbook_sales, book_category.category_name FROM book, book_category WHERE book_category.category_id = 3 AND book.category_id = book_category.category_id AND book.amountbook_sales > 0";
        $sqlDetectFic = "SELECT book.bookname, book.bookimage, book.writer, book.synopsis, book.amountbook_sales, book_category.category_name FROM book, book_category WHERE book_category.category_id = 4 AND book.category_id = book_category.category_id AND book.amountbook_sales > 0";
        $rsTransFic = mysqli_query($conn, $sqlTransFic);
        $rsRomanceFic = mysqli_query($conn, $sqlRomanceFic);
        $rsYaoiFic = mysqli_query($conn, $sqlYaoiFic);
        $rsDetectFic = mysqli_query($conn, $sqlDetectFic);

    ?>

</head>
<body>
    <!-- Header -->
    <header id="header-top-page" class="header">

        <div class="main-top">
            <div class="body-toppaid">
                <div class="top-page">
                    <p class="text-bold">Best Seller</p>
                </div>
                <div class="list-flic">
                    <li><button id="defaultOpen" class="tablink" onclick="openMenu('TransFic', this, '#ff968a')">นิยายแปล</button></li>
                    <li><button class="tablink" onclick="openMenu('DetectFic', this, '#ff968a')">สิบสวน</button></li>
                    <li><button class="tablink" onclick="openMenu('RomanceFic', this, '#ff968a')">โรแมนติก</button></li>
                    <li><button class="tablink" onclick="openMenu('YaoiFic', this, '#ff968a')">ชายรักชาย</button></li>
                </div>
            </div>

            <div id="TransFic" class="tabcontent">
                <?php while($row = mysqli_fetch_row($rsTransFic)){ ?>
                    <div class="cart-body">
                        <div class="card-head">
                            <div class="card-main">
                                <img class="image-cart" src="<?php echo $row[1] ?>" alt="">
                                <div class="card-info">
                                    <h3><?php echo $row[0]; ?></h3>
                                    <p style="color: #696969;">ผู้เขียน: <?php echo $row[2]; ?></p>
                                    <p style="color: #696969;">จำนวนที่ขายออก: <?php echo $row[4] ?></p>
                                    <p style="color: #696969;">เรื่องย่อ: <?php echo $row[3] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            
            <div id="DetectFic" class="tabcontent">
                <?php while($row = mysqli_fetch_row($rsDetectFic)){ ?>
                    <div class="cart-body">
                        <div class="card-head">
                            <div class="card-main">
                                <img class="image-cart" src="<?php echo $row[1] ?>" alt="">
                                <div class="card-info">
                                    <h3><?php echo $row[0]; ?></h3>
                                    <p style="color: #696969;">ผู้เขียน: <?php echo $row[2]; ?></p>
                                    <p style="color: #696969;">จำนวนที่ขายออก: <?php echo $row[4] ?></p>
                                    <p style="color: #696969;">เรื่องย่อ: <?php echo $row[3] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div id="RomanceFic" class="tabcontent">
                <?php while($row = mysqli_fetch_row($rsRomanceFic)){ ?>
                    <div class="cart-body">
                        <div class="card-head">
                            <div class="card-main">
                                <img class="image-cart" src="<?php echo $row[1] ?>" alt="">
                                <div class="card-info">
                                    <h3><?php echo $row[0]; ?></h3>
                                    <p style="color: #696969;">ผู้เขียน: <?php echo $row[2]; ?></p>
                                    <p style="color: #696969;">จำนวนที่ขายออก: <?php echo $row[4] ?></p>
                                    <p style="color: #696969;">เรื่องย่อ: <?php echo $row[3] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div id="YaoiFic" class="tabcontent">
                <?php while($row = mysqli_fetch_row($rsYaoiFic)){ ?>
                    <div class="cart-body">
                        <div class="card-head">
                            <div class="card-main">
                                <img class="image-cart" src="<?php echo $row[1] ?>" alt="">
                                <div class="card-info">
                                    <h3><?php echo $row[0]; ?></h3>
                                    <p style="color: #696969;">ผู้เขียน: <?php echo $row[2]; ?></p>
                                    <p style="color: #696969;">จำนวนที่ขายออก: <?php echo $row[4] ?></p>
                                    <p style="color: #696969;">เรื่องย่อ: <?php echo $row[3] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </header>

    <!-- JS -->
    <script src="./js/content-topic-tap.js"></script>

    <!-- Boot Strap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>