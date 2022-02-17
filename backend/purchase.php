<?php
include "../connectDB/connectDB.php";
session_start();

if (isset($_POST['confirm-purchase'])) {
    $userID = $_SESSION['user_id'];
    $bookID = $_SESSION['arrDelAmount'];

    $filetmp = $_FILES['file_pay']['tmp_name'];
    $filename = $_FILES['file_pay']['name'];
    $filepath = "../images/receipt/" . $filename;
    move_uploaded_file($filetmp, $filepath);
    $filepathTODB = "./images/receipt/" . $filename;

    $sqlwait_id = "SELECT `wait_id` FROM `order` WHERE `user_id` = '$userID' ORDER BY `wait_id` ASC";
    $wait_id = mysqli_query($conn, $sqlwait_id);
    $waitID = 0;
    while ($row = mysqli_fetch_row($wait_id)) {
        if ($row > 0) {
            $waitID = $row[0];
        }
        else {
            $waitID = 0;
        }
    }
    if ($waitID > 0) {
        $wait = $waitID + 1;
    } else {
        $wait = 1;
    }

    if ($filetmp != "") {
        $sqlInsertIMG = "UPDATE `order` SET `receipt` = '$filepathTODB', `status` = 1, `wait_id`=$wait WHERE `user_id` = '$userID' AND `wait_id` = 0 ";
        $rsInsertIMG = mysqli_query($conn, $sqlInsertIMG);
        if ($sqlInsertIMG) {
            foreach ($bookID as $book_values) {
                $sqlDeleteAmount = "UPDATE `book` SET `amountbook_sales` = `amountbook_sales` + 1 WHERE `book_id` = $book_values";
                $rsDeleteAmount = mysqli_query($conn, $sqlDeleteAmount);
            }
            unset($_SESSION['ar']);
            $sqlDeleteCART = "DELETE FROM `cart` WHERE `user_id` = $userID";
            $rsDeleteCART = mysqli_query($conn, $sqlDeleteCART);
            echo $wait;
            echo "<script>alert('เสร็จสิ้นการชำระกรุณาตรวจสอบที่ Shelv ของคุณภายในระยะเวลา 1-2 วัน'); window.location = '../index.php';</script>";
        } else {
        }
    } else {
        echo "<script>alert('กรุณาอัพหลักฐานการโอนเงินเพื่อยืนยันการชำระเงิน'); window.location = '../mypurchase.php';</script>";
    }
}
