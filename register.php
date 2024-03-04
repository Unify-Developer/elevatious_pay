<!DOCTYPE html>
<html>

<head>
    <title> Register | Unify Pay </title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link rel="icon" href="./Asset/Img/reference.png">
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
                <form>
                    <div class="row">
                        <div class="col-lg-12 col-md-12  form-group">
                            <label for=""> Full Name </label>
                            <input type="text" class="form-control" placeholder="Full Name" required>
                        </div>

                        <div class="col-lg-12 col-md-12  form-group">
                            <label for=""> Email Address </label>
                            <input type="email" class="form-control" placeholder="Email Address" required>
                        </div>

                        <div class="col-lg-12 col-md-12  form-group">
                            <label for=""> Referral </label>
                            <input type="text" class="form-control" placeholder="Referral" optional>
                        </div>

                        <div class="col-lg-6 col-md-12  form-group">
                            <label for=""> Username </label>
                            <input type="text" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="col-lg-6 col-md-12  form-group">
                            <label for=""> Phone Number </label>
                            <input type="number" class="form-control" placeholder="Phone Number" required>
                        </div>

                        <div class="col-lg-6 col-md-12  form-group">
                            <label for=""> Password </label>
                            <input type="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="col-lg-6 col-md-12  form-group">
                            <label for=""> Confirm Password </label>
                            <input type="password" class="form-control" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="text-center" style="padding: 10px;">
                        <button type="submit" class="btn btn-primary text-white btn_register">
                            Register </button>
                    </div>

                    <div class="text-center">
                        <label> Already Have An Account? Click
                            <a href="./login.php"> Here </a>
                            To Login
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