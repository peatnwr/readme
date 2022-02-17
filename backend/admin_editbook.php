<?php
    include "../connectDB/connectDB.php";

    if($_POST){
        $bookID = $_POST['bookID'];
        $bookName = $_POST['bookName'];
        $bookWriter = $_POST['bookWriter'];
        $bookCompany = $_POST['bookCompany'];
        $bookSynopsis = $_POST['bookSynopsis'];
        $bookPrice = $_POST['bookPrice'];

        $sqlEditBook = "UPDATE book SET bookname = '$bookName', writer = '$bookWriter', company = '$bookCompany', synopsis = '$bookSynopsis', bookprice = $bookPrice WHERE book_id = $bookID";
        $rsEditBook = mysqli_query($conn, $sqlEditBook);
    }
?>

<script>
    alert('แก้ไขข้อมูลภายในหนังสือเสร็จสิ้น');
    window.location = "../admin_product.php";
</script>