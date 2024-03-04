<!DOCTYPE html>
<html>

<head>
    <title> Login | Unify Pay </title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link rel="icon" href="./asset/Img/reference.png">
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="./bootstrap/CSS/bootstrap.min.css">
</head>

<body>
    <div class="row">
        <div class="col-lg-12 col-sm-12 ">
            <label class="login">
                Login
            </label>
        </div>
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
    <div class="container bd_head_login">
        <div class="form_body_login">
            <form>
                <div class="form-group">
                    <label> Email Address </label>
                    <input type="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <label for=""> Password </label>
                    <input type="password" class="form-control" placeholder="Password" id="password" required 
                    pattern=".{8,}">
                </div>
                <div class="row chk_fgt">
                    <div class="col-md-6 col-6 checkbox">
                        <input type="checkbox"> Remember Me
                    </div>

                    <div class="col-md-6 col-6 fgt">
                        <a href="./forget.php">Forget-Password?</a>
                    </div>
                </div>
                <div class="text-center" style="padding: 10px;">
                    <button type="submit" class="btn text-white btn_login">
                        Login </button>
                </div>
                <div class="text-center" style="padding: 10px;">
                    <button type="submit" class="btn bg-danger text-white btn_gmail">
                        Continue With Your Gmail </button>
                </div>

                <div class="text-center">
                    <label> Don't have an account?
                        <a href="./register.php"> Register </a>
                    </label>
                </div>
            </form>
        </div>
    </div>

    <script src="./bootstrap/JS/jquery-3.6.4.min.js"></script>
    <script src="./bootstrap/JS/bootstrap.min.js"> </script>


</body>

</html>