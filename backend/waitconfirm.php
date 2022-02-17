<?php 
    include "../connectDB/connectDB.php";

    if ($_GET["statuscancle"]) {
        $Sstatus = $_GET["statuscancle"];
        $UserID = $_GET["user_id"];
        $WaitID = $_GET["wait_id"];
        $sql_cancle = "DELETE FROM `order` WHERE `user_id`=$UserID AND `wait_id`=$WaitID";
        $cancle = mysqli_query($conn, $sql_cancle);
        echo "<script>window.location = '../admin_userinfo.php?user_id=$UserID';</script>";
    
    } 
    
    elseif ($_GET["statusok"]) {
        $Sstatus = $_GET["statusok"];
        $UserID = $_GET["user_id"];
        $WaitID = $_GET["wait_id"];
        $sql_ok = "UPDATE `order` SET `status` = 2 WHERE `status` = 1 AND `wait_id`=$WaitID";
        $ok = mysqli_query($conn, $sql_ok);
        echo "<script>window.location = '../admin_userinfo.php?user_id=$UserID';</script>";
    }

    mysqli_close($conn);
?>