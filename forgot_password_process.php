<?php

// ini_set('SMTP', 'smtp.example.com');
// ini_set('smtp_port', 587);

require './include/config.php';

if (isset($_POST['forgot_password'])) {
    $email = $_POST['email'];

    // Generate a unique token
    $token = bin2hex(random_bytes(32)); // Generate a 64-character hexadecimal token

    // Store the token in the database along with the user's email and a timestamp
    $stmt = $conn->prepare("INSERT INTO password_reset_tokens (email, token, created_at) VALUES (:email, :token, NOW())");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':token', $token);
    $stmt->execute();

    // Send an email to the user with a link to the password reset page
    $reset_link = "http://example.com/reset_password.php?token=$token"; // Change example.com to your domain
    $subject = "Password Reset";
    $message = "Click the following link to reset your password: $reset_link";
    $headers = "From: your@example.com"; // Change your@example.com to your email address

    mail($email, $subject, $message, $headers);

    echo "An email has been sent to your email address with instructions to reset your password.";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Forget Password | Elevation Pay </title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link rel="icon" href="./asset/Img/unify.png">
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="./bootstrap/CSS/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <label class="login">
                    Forget Password
                </label>
            </div>
        </div>
    </div>

    <div class="container t1_top">
        <div class="text-center">
            <img class="t_img1" src="./Asset/Img/icon.jpg  ">
            <div class="t_top">
                <h2> Forget Password </h2>
                <label>
                    Enter Your Credentials To Get Access
                </label>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="form_body_forget">
            <form action="forgot_password_process.php" method="post">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="text-center">
                    <label>Already Have An Account? <a href="./index.php">Login</a></label>
                </div>
                <div class="text-center" style="padding: 10px;">
                    <button type="submit" class="btn btn-primary text-white btn_login" name="forgot_password">Forget Password</button>
                </div>
            </form>

        </div>
    </div>



    <script src="./bootstrap/JS/jquery-3.6.4.min.js"></script>
    <script src="./bootstrap/JS/bootstrap.min.js"> </script>


</body>

</html>