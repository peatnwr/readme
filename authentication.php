<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="./images/icon.png" type="image/x-icon">

    <title>Sign In Readme</title>

    <!-- CSS Link -->
    <link rel="stylesheet" href="./css/auth.css">

    <?php
        include "./connectDB/connectDB.php";
        session_start();

        if(isset($_POST['login-btn'])){
            $username_login = $_POST['username-login'];
            $password_login = md5($_POST['password-login']);

            $sql = "SELECT * FROM users WHERE username='$username_login' AND password='$password_login'";
            $rs = mysqli_query($conn, $sql);
            $fRows = mysqli_fetch_row($rs);
            $numRows = mysqli_num_rows($rs);
            if($numRows>0){
                $_SESSION['user_id'] = $fRows[0];
                $_SESSION['username'] = $username_login;
                $_SESSION['fullname'] = $fRows[4];
                if($fRows[9] == 1){
                    echo "<script>alert('เข้าสู่ระบบเสร็จสิ้น'); window.location='./admin_product.php';</script>";
                }else{
                    echo "<script>alert('เข้าสู่ระบบเสร็จสิ้น'); window.location='./index.php';</script>";
                }
            }else{
                echo "<script>alert('บัญชีผู้ใช้งาน หรือ รหัสผ่านของคุณไม่ถูกต้อง กรุณาตรวจสอบอีกรอบ');</script>"; 
            }
        }
    ?>

</head>

<body>
    <div class="box">
        <img class="icon-img" src="./images/icon.png" alt="">
        <div class="form-box">

            <!----------------------------------------------------- Button Select Page ----------------------------------------------------->

            <div id="btn" class="btn">
                <button id="btnsignIn" type="button" class="toggle-btn" onclick="signIn()">Sign In</button>
                <button id="btnsignUp" type="button" class="toggle-btn" onclick="signUp()">Sign Up</button>
                <div id="line" class="line transition"></div>
            </div>

                <!-------------------------------------------------------- Sign IN Page -------------------------------------------------------->
            <div id="innerBox" class="inner-form-box">
                <div id="signIn" class="transition">
                    <form action="./authentication.php" method="POST">
                        <div class="des_input">Username</div>
                        <input type="text" name="username-login" required>
                        <br>
                        <div class="des_input">Password</div>
                        <input type="password" name="password-login" required>
                        <br>
                        <input class="submit" type="submit" name="login-btn" value="Sign In">
                    </form>
                    <div class="text"> or Connect with Social Media</div>
                </div>

                <!-------------------------------------------------------- Sign UP Page -------------------------------------------------------->

                <div id="SignUP-SYS">
                    <form action="./backend/register.php" method="POST" onsubmit="return checkPW()">

                        <div id="signUp" class="transition">
                            <div class="des_input">Fullname</div>
                            <input type="text" id="fullname-reg" name="fullname-reg">
                            <br>
                            <div class="des_input">Birthday</div>
                            <input type="date" id="bdate-reg" name="bdate-reg">
                            <br>
                            <div class="des_input">Gender</div>
                            <select id="gender-reg" name="gender-reg">
                                <option selected hidden disabled>Choose your gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <br>
                            <input class="nextbtn" type="button" value="Next" id="nextbtnSignUp1" onclick="signUpFirstStep()">
                        </div>

                        <div id="signUp2" class="transition">
                            <div class="des_input">Email</div>
                            <input type="email" id="email-reg" name="email-reg">
                            <br>
                            <div class="des_input">Telephone Number</div>
                            <input type="tel" id="tel-reg" name="tel-reg">
                            <br>
                            <div class="des_input">Address</div>
                            <input type="text" id="addr-reg" name="addr-reg">
                            <br>
                            <input class="backbtn" type="button" value="Back" onclick="signUpBackStepFirst()">
                            <input class="nextbtn" type="button" value="Next" onclick="signUpTwoStep()">
                        </div>

                        <div id="signUp3" class="transition">
                            <div class="des_input">Username</div>
                            <input type="name" id="username-reg" name="username-reg">
                            <br>
                            <div class="des_input">Password</div>
                            <input type="password" id="pw-reg" name="pw-reg">
                            <br>
                            <div class="des_input">Confirm-Password</div>
                            <input type="password" id="cf-pw-reg" name="cf-pw-reg">
                            <br>
                            <input class="backbtn" type="button" value="Back" onclick="signUpBackStepTwo()">
                            <button class="submit nextbtn" type="submit" name="reg-btn" value="Sign Up">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>

        //Element about SignIN and SignUP
        let signInElement = document.getElementById("signIn");
        let lineElement = document.getElementById("line");
        let btnsignIn = document.getElementById("btnsignIn");
        let btnsignUp = document.getElementById("btnsignUp");
        let signUpFirstElement = document.getElementById("signUp");
        let signUpTwoElement = document.getElementById("signUp2");
        let signUpThreeElement = document.getElementById("signUp3");

        function signIn() {
            signInElement.style.left = "30px";
            btnsignIn.style.fontWeight = "bold";
            btnsignUp.style.fontWeight = "normal";
            lineElement.style.left = "20px";
            signUpFirstElement.style.left = "400px";
            signUpTwoElement.style.left = "400px";
            signUpThreeElement.style.left = "400px";
        }

        function signUp() {
            signInElement.style.left = "-400px";
            btnsignUp.style.fontWeight = "bold";
            btnsignIn.style.fontWeight = "normal";
            lineElement.style.left = "140px";
            signUpFirstElement.style.left = "30px";
            signUpTwoElement.style.left = "400px";
            signUpThreeElement.style.left = "400px";
        }

        function signUpFirstStep() {
            signUpFirstElement.style.left = "-400px";
            signUpTwoElement.style.left = "30px";
        }

        function signUpTwoStep() {
            signUpFirstElement.style.left = "-400px";
            signUpTwoElement.style.left = "-400px";
            signUpThreeElement.style.left = "30px";
        }

        function signUpBackStepFirst() {
            signUpFirstElement.style.left = "30px";
            signUpTwoElement.style.left = "400px";
        }

        function signUpBackStepTwo() {
            signUpTwoElement.style.left = "30px";
            signUpThreeElement.style.left = "400px";
        }

        function checkPW(){
            let password = document.getElementById("pw-reg");
            let cfPassword = document.getElementById("cf-pw-reg");
            if(password.value==cfPassword.value){
                return true;
            }else{
                alert("กรุณากรอกรหัสผ่านที่สมัครให้ตรงกัน");
                return false;
            }
        }

    </script>

</body>

</html>