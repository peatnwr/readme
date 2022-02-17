<?php 
    $conn = new mysqli("localhost", "root", "", "readme");
    if($conn->connect_errno){
        echo "<script>alert('เชื่อมต่อฐานข้อมูลไม่สำเร็จ')</script>";
        exit();
    }
    mysqli_set_charset($conn, "utf-8");
?>