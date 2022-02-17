<?php
    session_start();

    unset($_SESSION['username']);
    unset($_SESSION['fullname']);
    unset($_SESSION['user_id']);
    
    echo "<script>alert('ออกจากระบบสำเร็จแล้ว'); window.location = '../index.php';</script>";
?>