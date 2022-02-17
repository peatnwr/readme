<?php
include "../connectDB/connectDB.php";
session_start();

if (isset($_POST['add_product'])) {
    $userID = $_SESSION['user_id'];
    $bookID = $_POST['book_id'];
    $bookname = $_POST['bookname'];
    $bookprice = $_POST['bookprice'];
    $bookimage = $_POST['bookimage'];

    $sqlCheckRepeatBook = "SELECT book_id FROM cart WHERE book_id='$bookID'";
    $rsCheckRepeatBook = mysqli_query($conn, $sqlCheckRepeatBook);
    $rowCheckRepeatBook = mysqli_num_rows($rsCheckRepeatBook);

    if ($rowCheckRepeatBook > 0) {
        echo "<script>alert('หนังสือเล่มนี้มีอยู่แล้วในตระกร้าหนังสือของคุณ กรุณาทำรายการใหม่'); window.location = '../index.php';</script>";
    } else {
        $sqlCheckOrderSuccess = "SELECT `order_id`, `book_id`, `status`, `user_id` FROM `order` WHERE `user_id` = '$userID' AND `book_id` = '$bookID' AND (`status` = 0 OR `status` = 2)";
        $rsCheckOrderSuccess = mysqli_query($conn, $sqlCheckOrderSuccess);
        $rowCheckOrderSuccess = mysqli_num_rows($rsCheckOrderSuccess);

        $sqlCheckWaitOrder = "SELECT `order_id`, `book_id`, `status`, `user_id` FROM `order` WHERE `user_id` = '$userID' AND `book_id` = '$bookID' AND `status` = 1";
        $rsCheckWaitOrder = mysqli_query($conn, $sqlCheckWaitOrder);
        $rowCheckWaitOrder = mysqli_num_rows($rsCheckWaitOrder);

        if ($rowCheckOrderSuccess > 0) {
            echo "<script>alert('หนังสือเล่มนี้มีอยู่แล้วในตระกร้าหรือในชั้นวางหนังสือของคุณ กรุณาทำรายการใหม่'); window.location = '../index.php';</script>";
        } elseif ($rowCheckWaitOrder > 0) {
            echo "<script>alert('หนังสือเล่มนี้มีกำลังอยู่ระหว่างรอการยืนยันการสั่งซื้อ'); window.location = '../index.php';</script>";
        } else {
            $sqlCart = "INSERT INTO cart(book_id, bookname, bookprice, bookimage, user_id) VALUES ('$bookID', '$bookname', '$bookprice', '$bookimage', $userID)";
            $rsCart = mysqli_query($conn, $sqlCart);
            if ($rsCart) {
                $sqlReceiveCart = "SELECT * FROM cart ORDER BY cart_id DESC LIMIT 1";
                $rsReceiveCart = mysqli_query($conn, $sqlReceiveCart);
                while ($row = mysqli_fetch_row($rsReceiveCart)) {
                    $cartIDAdd = $row[0];
                    $sqlCheckRepeatOrder = "SELECT `cart`.`cart_id`,`order`.`cart_id` FROM `cart`,`order` WHERE `cart`.`cart_id`='$cartIDAdd' AND `order`.`cart_id`=`cart`.`cart_id`";
                    $rsCheckRepeatOrder = mysqli_query($conn, $sqlCheckRepeatOrder);
                    if ($sqlCheckRepeatBook) {
                        $sqlOrder = "INSERT INTO `order`(`user_id`, `cart_id`, `book_id`) VALUES ('$userID', '$cartIDAdd', '$bookID')";
                        $rsOrder = mysqli_query($conn, $sqlOrder);
                        $sqlCartOrder = "UPDATE `cart` INNER JOIN `order` ON `cart`.`cart_id` = `order`.`cart_id` SET `cart`.`order_id` = `order`.`order_id` WHERE `order`.`status` = 0";
                        $rsCartOrder = mysqli_query($conn, $sqlCartOrder);
                    } else {
                    }
                }
                echo "<script>alert('เพิ่มหนังสือลงตระกร้าสำเร็จ'); window.location = '../index.php';</script>";
            } else {
                echo "<script>alert('เพิ่มสินค้าลงตระกร้าไม่สำเร็จ'); window.location = '../index.php'</script>";
            }
        }
    }
}

if (isset($_POST['delete_product'])) {
    $cartID = $_POST['cart-id'];

    $sqlDeleteBook = "DELETE `cart`, `order` FROM `cart` INNER JOIN `order` ON `order`.`cart_id`=`cart`.`cart_id` WHERE `cart`.`cart_id`='$cartID'";
    $rsDeleteBook = mysqli_query($conn, $sqlDeleteBook);
    if ($rsDeleteBook) {
        echo "<script>alert('ลบข้อมูลออกจากตระกร้าสำเร็จ'); window.location = '../mycart.php';</script>";
    } else {
        echo "<script>alert('ลบข้อมูลออกจากตระกร้าไม่สำเร็จ'); window.location = '../mycart.php';</script>";
    }
}
