<?php
require './include/config.php';
$msg = '';

if (isset($_POST['login'])) {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    $sql = $conn->prepare("SELECT * FROM student WHERE user_name = '$user_name' and password = '$password'");

    $sql->execute();

    if ($sql->rowCount() > 0) {
        $result = $sql->fetch(PDO::FETCH_ASSOC);

        // Store user information in session variables
        $_SESSION['user_name'] = $result['user_name'];
        $_SESSION['full_name'] = $result['full_name'];
        $_SESSION['email_address'] = $result['email_address'];
        $_SESSION['phone_number'] = $result['phone_number'];
        $_SESSION['connected'] = true;
        // Add more fields as needed

        header('Location: dashboard.php');
        exit();
    } else {
        $msg = 'Wrong Info';
        $_SESSION['connected'] = false;
        session_destroy();
    }
}
?>




<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Login | Elevation Pay </title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link rel="icon" href="./asset/Img/reference.png">
    <link rel="stylesheet" href="./asset/css/register.css">
    <link rel="stylesheet" href="./bootstrap/CSS/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <p><span style="color: red; ">
                <?= $msg ?>
            </span>
        </p>
    </div>
    <div class="container t1_top">
        <div class="text-center ">
            <img class="t_img" src="./Asset/Img/reference.png">
            <div class="t_top">
                <h2> Login </h2>
                <p>
                    Enter Your Credentials To Get Access
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="form_body_login">
            <form action="" method='post'>
                <div class="form-group">
                    <label class="label"> Username </label>
                    <input type="text" name="user_name" class="form-control" placeholder="username">
                </div>
                <!-- <div class="form-group">
                    <label> Email Address </label>
                    <input type="email" name="email" class="form-control" placeholder="Email Address">
                </div> -->
                <div class="form-group">
                    <label class="label" for=""> Password </label>
                    <input type="password" class="form-control" placeholder="Password" name="password" pattern=".{8,}">
                </div>
                <div class="row chk_fgt">
                    <div class="col-md-6 col-6 checkbox">
                        <input type="checkbox"> Remember Me
                    </div>

                    <div class="col-md-6 col-6 fgt">
                        <a class="label" href="./forget.php">Forget-Password?</a>
                    </div>
                </div>
                <div class="text-center" style="padding: 10px;">
                    <button type="" name="login" class="btn text-white btn_login">
                        Login </button>
                </div>
                <div class="text-center" style="padding: 10px;">
                    <button type="submit" class="btn bg-danger text-white btn_gmail">
                        Continue With Your Gmail </button>
                </div>

                <div class="text-center">
                    <label> Don't have an account?
                        <a class="label" href="./register.php"> Register </a>
                    </label>
                </div>
            </form>
        </div>
    </div>

    <script src="./bootstrap/JS/jquery-3.6.4.min.js"></script>
    <script src="./bootstrap/JS/bootstrap.min.js"> </script>


</body>

</html>