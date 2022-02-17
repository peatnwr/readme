<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Product</title>

    <link rel="stylesheet" href="./css/admin.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="shortcut icon" href="./images/icon.png" type="image/x-icon">

    <?php
        include "./connectDB/connectDB.php";
        include "./nav-admin.php";
    ?>

</head>
<body>
    <div class="main-table" style="padding-top: 8%;">
        <h1>เพิ่มข้อมูลหนังสือ</h1>
        <form action="./backend/admin_addbook.php" method="POST" enctype="multipart/form-data">
            ชื่อหนังสือ : <br>
            <input type="text" name="bookName" id="" required><br><br>
            รูปภาพหน้าปก : <br>
            <input type="file" style="margin-top: 5px;" name="bookImage" id="" required><br><br>
            ผู้เขียน : <br>
            <input type="text" name="bookWriter" id="" required><br><br>
            สำนักพิมพ์ : <br>
            <input type="text" name="bookCompany" id="" required><br><br>
            เรื่องย่อ : <br>
            <textarea style="border: 1px solid black;" name="bookSynopsis" id="" cols="30" rows="10" maxlength="200" required></textarea>
            ราคาหนังสือ : <br>
            <input type="number" name="bookPrice" id="" required><br><br>
            <div class="bookCategory">
                หมวดหมู่หนังสือ :
                <input type="radio" style="margin-left: 10px; margin-right: 3px;" name="bookCategory" value="นิยายแปล"  id="" checked>นิยายแปล
                <input type="radio" style="margin-left: 10px; margin-right: 3px;" name="bookCategory" value="นิยายโรแมนติก" id="">นิยายโรแมนติก
                <input type="radio" style="margin-left: 10px; margin-right: 3px;" name="bookCategory" value="นิยายวาย" id="">นิยายวาย
                <input type="radio" style="margin-left: 10px; margin-right: 3px;" name="bookCategory" value="นิยายสืบสวน" id="">นิยายสืบสวน
            </div>
            <button style="float: right;" type="submit">เพิ่มหนังสือ</button>
        </form>
    </div>

    <?php include "./footer.php"; ?>
</body>
</html>