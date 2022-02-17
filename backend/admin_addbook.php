<?php
    include "../connectDB/connectDB.php";

    if($_POST){
        $bookName = $_POST['bookName'];
        $bookWriter = $_POST['bookWriter'];
        $bookCompony = $_POST['bookCompany'];
        $bookSynopsis = $_POST['bookSynopsis'];
        $bookPrice = $_POST['bookPrice'];
        $bookCategory = $_POST['bookCategory'];
        $bookImage = $_FILES['bookImage']['tmp_name'];
        $bookIMGName = $_FILES['bookImage']['name'];
        switch($bookCategory){
            case "นิยายแปล":
                $categoryID = 1;
                $category = "นิยายแปล";
                break;
            case "นิยายโรแมนติก":
                $categoryID = 2;
                $category = "นิยายโรแมนติก";
                break;
            case "นิยายวาย":
                $categoryID = 3;
                $category = "นิยายวาย";
                break;
            case "นิยายสืบสวน":
                $categoryID = 4;
                $category = "นิยายสืบสวน";
                break;
        }
        $bookIMGPath = "../images/$category/".$bookIMGName;
        move_uploaded_file($bookImage, $bookIMGPath);

        $imagePath = "./images/$category/".$bookIMGName;

        $sqlAddBook = "INSERT INTO `book`(`bookname`, `writer`, `company`, `synopsis`, `bookprice`, `bookimage`, `category_id`) VALUES ('$bookName', '$bookWriter', '$bookCompony', '$bookSynopsis', $bookPrice, '$imagePath', $categoryID)";
        $rsAddBook = mysqli_query($conn, $sqlAddBook);
    }

?>

<script>
    alert("เพิ่มข้อมูลหนังสือเสร็จสิ้น");
    window.location = "../admin_product.php";
</script>