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

    <title>Purchase</title>

    <?php
    include "./connectDB/connectDB.php";
    include "./navbar.php";

    $sqlCheckOrder = "SELECT `order`.`order_id`, `order`.`user_id`, `order`.`cart_id`, `cart`.`cart_id`, `cart`.`bookimage`, `cart`.`bookname`, `cart`.`bookprice`, `cart`.`book_id` FROM `order`, `cart` WHERE `order`.`cart_id`=`cart`.`cart_id`";
    $rsCheckOrder = mysqli_query($conn, $sqlCheckOrder);
    $numrowsCheckOrder = mysqli_num_rows($rsCheckOrder);
    $_SESSION['arrDelAmount'] = array();

    $sqlSumprice = "SELECT SUM(bookprice) AS sumprice FROM cart";
    $rsSumprice = mysqli_query($conn, $sqlSumprice);
    $rowSumprice = mysqli_fetch_array($rsSumprice);
    ?>

</head>

<body>
    <!-- Header -->
    <header id="header-recommended" class="header">

        <form action="./backend/purchase.php" method="POST" enctype="multipart/form-data">
            <div class="purchase-Firstdiv">
                <div class="purchase-Secdiv">
                    <div class="purchase-head">
                        <p class="tx-30-bd">My Purchase</p>
                    </div>
                </div>
                <div class="purchase_qrcode">
                    <div class="qrcode">
                        <p class="receipt-exam">คิวอาร์โค้ดสำหรับการชำระเงิน</p>
                        <img src="./images/QR_code.png" alt="qrcode">
                        <br><br>
                        <span style="font-size: 18px;">แนบหลักฐานการโอนเงิน</span>
                        <input type="file" name="file_pay" id="file_pay" style="margin-top: 5px;">
                    </div>
                    <div class="order_sumary">
                        <h2 style="text-align: center; margin-left:50px;">สรุปการสั่งซื้อ</h2>
                        <br><br>
                        <p class="pay_sumary">สรุปรายการสั่งซื้อ <?php echo $numrowsCheckOrder ?> รายการ ราคา <?php if($rowSumprice['sumprice'] == null){$rowSumprice['sumprice'] = 0;} echo $rowSumprice['sumprice'] ?> บาท</p>
                        <?php while($row = mysqli_fetch_row($rsCheckOrder)){ ?>
                            <?php $bookID = $row[7];  ?>
                            <?php array_push($_SESSION['arrDelAmount'],$bookID); ?>
                        <?php } ?>
                        <button name="confirm-purchase" class="btn-confirm-cash">ยืนยันการชำระเงิน</button>
                        <p class="pay-info">หลังจากที่ท่านชำระเงินเรียบร้อยแล้ว กรุณารอการยืนยันการสั่งซื้อและหากได้รับการยืนยันแล้ว ระบบของ mebmarket.com <span style="color: var(--pastel);">จะใช้เวลาสื่อสารกับตัวกลางชำระเงินประมาณ 10-30 นาที</span> และจะจัดส่ง e-book เข้าไปที่ shelv ของท่านโดยไว</p>
                    </div>
                </div>
            </div>
        </form>
    </header>

    <!-- Footer -->
    <?php include "./footer.php" ?>

</body>

</html>