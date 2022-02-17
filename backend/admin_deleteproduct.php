<?php

    include "../connectDB/connectDB.php";

    $bookID = $_GET['book_id'];

    $sqlDelBook = "DELETE FROM book WHERE book_id = $bookID";
    $rsDelBook = mysqli_query($conn, $sqlDelBook);

?>

<script>
    window.location = "../admin_product.php";
</script>