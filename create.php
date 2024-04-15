<?php

require './include/config.php';

$msg = '';
if(isset($_POST['register'])){
    $full_name = $_POST["full_name"];
    $email_address = $_POST["email_address"];
    $user_name = $_POST["user_name"];
    $referral = $_POST["referral"];
    $phone_number = $_POST["phone_number"];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $msg = "Password and Confirm Password do not match!";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);


    $sql = "INSERT INTO student (full_name, email_address, user_name, referral, phone_number, password, confirm_password ) 
    values(:full_name,:email_address,:user_name,:referral,:phone_number,:password,:confirm_password)";

    $statement = $conn->prepare($sql);

    $statement->execute([
        'full_name' => $full_name,
        'email_address' => $email_address,
        'user_name'=> $user_name,
        'referral'=> $referral,
        'phone_number'=> $phone_number,
        'password'=> $password,
        'confirm_password'=> $confirm_password,
    ]);



if(true){
   $msg = "Details uploaded successfully";
 
}
}
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Register | Elavtion Pay </title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
        crossorigin="anonymous"></script>
    <link rel="icon" href="./asset/Img/reference.png">
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="./bootstrap/CSS/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 ">
                <label class="login">
                    Register
                </label>
            </div>
        </div>
    </div>

    <div class="container t1_top">
        <div class="text-center">
            <img class="t_img" src="./Asset/Img/reference.png">
            <div class="t_top">
                <h2> Register </h2>
                <label>
                    Please Enter Your Information
                </label>
            </div>
        </div>
    </div>

    <div class="container bd_head_register">
        <div class="form_body_register" style="padding: 20px;">
            <div class="form-group">
                <form method='post'>
                    <div class="row">
                        <div class="col-lg-12 col-md-12  form-group">
                            <label for> Full Name </label>
                            <input type="text" name="full_name" class="form-control" placeholder="Full Name" required>
                        </div>
                        <div class="col-lg-12 col-md-12  form-group">
                            <label for> Email Address </label>
                            <input type="email" name="email_address" class="form-control" placeholder="Email Address"
                                required>
                        </div>
                        <div class="col-lg-12 col-md-12  form-group">
                            <label for> Username </label>
                            <input type="text" name="user_name" class="form-control" placeholder="Input your Username"
                                optional>
                        </div>
                        <div class="col-lg-6 col-md-12  form-group">
                            <label for> Referral </label>
                            <input type="text" name="referral" class="form-control" placeholder="Referral (Optional)"
                                optional>
                        </div>
                        <div class="col-lg-6 col-md-12  form-group">
                            <label for> Phone Number </label>
                            <input type='number' name="phone_number" class="form-control" placeholder="Phone Number"
                                required>
                        </div>

                        <div class="col-lg-6 col-md-12  form-group">
                            <label for> Password </label>
                            <input type="password" name="password" class="form-control" placeholder="Password"
                                required>
                        </div>
                        <div class="col-lg-6 col-md-12  form-group">
                            <label for> Confirm Password </label>
                            <input type="password" name="confirm_password" class="form-control"
                                placeholder="Confirm Password">
                            <!-- Display error message in red -->
                            <span style="color: red;"><?php echo $msg; ?></span>
                        </div>
                    </div>
                    <div class="text-center" style="padding: 10px;">
                        <button type="" name="register" class="btn btn-primary text-white btn_register">
                            Register </button>
                    </div>

                    <div class="text-center">
                        <label> Already Have An Account? Click
                            <a href="./index.html"> Here </a> To Login
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="./bootstrap/JS/jquery-3.6.4.min.js"></script>
    <script src="./bootstrap/JS/bootstrap.min.js"> </script>

</body>

</html>
