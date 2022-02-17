<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User</title>

    <link rel="stylesheet" href="./css/admin.css">

    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="shortcut icon" href="./images/icon.png" type="image/x-icon">

    <?php
        include "./connectDB/connectDB.php";
        include "./nav-admin.php";

        $count_n = 1;

        $sqlUser = "SELECT * FROM users WHERE admin_id = 0";
        $rsUser = mysqli_query($conn, $sqlUser);
    ?>

</head>
<body>
    <div class="main-table" style="padding-top: 8%;">
        <h1>ข้อมูลผู้ใช้งาน</h1>
        <table>
            <thead class="th-user-admin">
                <tr>
                    <th>ลำดับ</th>
                    <th>รหัสผู้ใช้งาน</th>
                    <th>ผู้ใช้งาน</th>
                    <th>อีเมล</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>วัน-เดือน-ปีเกิด</th>
                    <th>ที่อยู่</th>
                    <th>เบอร์โทร</th>
                    <th>เพศ</th>
                    <th>ดูข้อมูลผู้ใช้งาน</th>
                    <th>ลบ</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_row($rsUser)){ ?>
                    <?php
                        switch($row[8]){
                            case 1:
                                $gender = "ชาย";
                                break;
                            case 2:
                                $gender = "หญิง";
                                break;
                        }
                    ?>
                    <tr>
                        <td><?php echo $count_n ?></td>
                        <td><?php echo $row[0] ?></td>
                        <td><?php echo $row[1] ?></td>
                        <td><?php echo $row[3] ?></td>
                        <td><?php echo $row[4] ?></td>
                        <td><?php echo $row[5] ?></td>
                        <td><?php echo $row[6] ?></td>
                        <td><?php echo $row[7] ?></td>
                        <td><?php echo $gender ?></td>
                        <td><a href="./admin_userinfo.php?user_id=<?php echo $row[0] ?>"><button>ดูข้อมูลผู้ใช้งาน</button></a></td>
                        <td><a href="./backend/admin_deleteuser.php?user_id=<?php echo $row[0] ?>" onclick="return confirm('คุณต้องการลบข้อมูลผู้ใช้คนนี้หรือไม่')"><button>ลบ</button></a></td>
                    </tr>
                    <?php $count_n++; ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>