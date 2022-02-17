<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Product</title>

    <link rel="stylesheet" href="./css/admin.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="shortcut icon" href="./images/icon.png" type="image/x-icon">

    <?php
        include "./connectDB/connectDB.php";
        include "./nav-admin.php";

        $count_n = 1;

        $sqlBook = "SELECT * FROM book";
        $rsBook = mysqli_query($conn, $sqlBook);
    ?>

</head>
<body>
    <div class="main-table" style="padding-top: 8%;">
        <h1>ข้อมูลหนังสือ</h1>
        <table>
            <thead class="th-product-admin">
                <tr>
                    <th>ลำดับ</th>
                    <th>รหัสหนังสือ</th>
                    <th>ชื่อหนังสือ</th>
                    <th>ที่อยู่รูปภาพหน้าปก</th>
                    <th>ชื่อผู้เขียน</th>
                    <th>สำนักพิมพ์</th>
                    <th>ราคา</th>
                    <th>จำนวนที่ขายได้</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_row($rsBook)){ ?>
                    <tr>
                        <td><?php echo $count_n ?></td>
                        <td><?php echo $row[0] ?></td>
                        <td><?php echo $row[1] ?></td>
                        <td><?php echo $row[2] ?></td>
                        <td><?php echo $row[3] ?></td>
                        <td><?php echo $row[4] ?></td>
                        <td><?php echo $row[6] ?></td>
                        <td><?php echo $row[8] ?></td>
                        <td><a href="./admin_editproduct.php?book_id=<?php echo $row[0] ?>"><button>แก้ไข</button></a></td>
                        <td><a href="./backend/admin_deleteproduct.php?book_id=<?php echo $row[0] ?>" onclick="return confirm('คุณต้องการลบหนังสือเล่มนี้หรือไม่')"><button>ลบ</button></a></td>
                    </tr>
                    <?php $count_n++; ?>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php include "./footer.php" ?>
</body>
</html>