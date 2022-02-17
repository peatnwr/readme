<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Book</title>

    <link rel="stylesheet" href="./css/admin.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="shortcut icon" href="./images/icon.png" type="image/x-icon">

    <?php
        include "./connectDB/connectDB.php";
        include "./nav-admin.php";

        if($_GET){
            $bookID = $_GET['book_id'];

            $sqlBook = "SELECT * FROM book WHERE book_id = '$bookID'";
            $rsBook = mysqli_query($conn, $sqlBook);
            $fetchBook = mysqli_fetch_row($rsBook);
        }
    ?>

</head>
<body>
    <div class="main-table" style="padding-top: 8%;">
        <h1>แก้ไขข้อมูลหนังสือ</h1>
        <form action="./backend/admin_editbook.php" method="POST">
            ชื่อหนังสือ : <br>
            <input type="text" name="bookName" value="<?php echo $fetchBook[1] ?>" required><br><br>
            ผู้เขียน : <br>
            <input type="text" name="bookWriter" value="<?php echo $fetchBook[3] ?>" required><br><br>
            สำนักพิมพ์ : <br>
            <input type="text" name="bookCompany" value="<?php echo $fetchBook[4] ?>" required><br><br>
            เรื่องย่อ : <br>
            <textarea style="border: 1px solid black;" name="bookSynopsis" cols="10" rows="10" maxlength="200" required><?php echo $fetchBook[5] ?></textarea>
            ราคาหนังสือ : <br>
            <input type="number" name="bookPrice" value="<?php echo $fetchBook[6] ?>" required><br><br>
            <input type="hidden" name="bookID" value="<?php echo $bookID ?>">
            <button style="float: right;" type="submit">แก้ไขหนังสือ</button>
        </form>
    </div>

    <?php include "./footer.php"; ?>
</body>
</html>