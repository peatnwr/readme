<?php
    include "../connectDB/connectDB.php";

    if($_GET){
        $userID = $_GET['user_id'];

        $sqlDelUser = "DELETE FROM users WHERE user_id = '$userID'";
        $rsDelUser = mysqli_query($conn, $sqlDelUser);
    }
?>

<script>
    alert('ลบข้อมูลผู้ใช้เสร็จสิ้น');
    window.location = "../admin_user.php";
</script>