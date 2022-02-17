<?php
    include "../connectDB/connectDB.php";

    if(isset($_POST['reg-btn'])){
        #VARIABLE
        $username_reg = $_POST['username-reg'];
        $password_reg = md5($_POST['pw-reg']);
        $fullname = $_POST['fullname-reg'];
        $bdate = $_POST['bdate-reg'];
        $email = $_POST['email-reg'];
        $tel = $_POST['tel-reg'];
        $address = $_POST['addr-reg'];

        #CONDITION FOR RECIEVE GENDER
        if(isset($_POST["gender-reg"])){
            $gender = $_POST['gender-reg'];
            if($gender=="Male"){
                $gender = "1";
            }elseif($gender=="Female"){
                $gender = "2";
            }else{
                $gender = "";
            }
        }

        if(isset($_POST["fullname-reg"])!=""&&isset($_POST["bdate-reg"])!=""&&isset($_POST["gender-reg"])!=""&&isset($_POST["email-reg"])!=""&&isset($_POST["tel-reg"])!=""&&isset($_POST["addr-reg"])!=""&&isset($_POST["username-reg"])!=""&&isset($_POST["pw-reg"])!=""){
            $sqlCheck = "SELECT username FROM users WHERE username='$username_reg'";
            $rsCheck = mysqli_query($conn, $sqlCheck);
            $rowCheck = mysqli_num_rows($rsCheck);
            if($rowCheck > 0){
                echo "<script>alert('สมัครสมาชิกไม่สำเร็จ เนื่องจากมีบัญชีผู้ใช้นี้แล้ว'); window.location.href = '../authentication.php';</script>";
            }else{
                $sqlInsert = "INSERT INTO users(username, password, name_surname, birthday, gender, email, tel, address) VALUES ('$username_reg', '$password_reg', '$fullname', '$bdate', '$gender', '$email', '$tel', '$address')";
                if(mysqli_query($conn, $sqlInsert)){
                    echo "<script>alert('ทำการสมัครสมาชิกเสร็จสิ้น'); window.location.href = '../authentication.php'</script>";
                }else{
                echo "<script>alert('สมัครสมาชิกไม่สำเร็จ'); window.location.href = '../authentication.php'</script>";
                }
            }
        }else{
            echo "<script>alert('สมัครสมาชิกไม่สำเร็จ กรุณาตรวจสอบข้อมูลที่ท่านกรอก'); window.location.href = '../authentication.php'</script>";
        }
    }
?>