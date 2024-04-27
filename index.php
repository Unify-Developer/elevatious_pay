<?php
require './include/config.php';

$msg = "";

if (isset($_POST['loginaa'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];


    $sql = $conn->prepare("SELECT * FROM student WHERE username = :username AND password = :password");
    $sql->bindParam(':username', $username);
    $sql->bindParam(':password', $password);
    $sql->execute();



    if ($sql->rowCount() >= 0) {

        $result = $sql->fetch(PDO::FETCH_ASSOC);

        // $msg = 'Welcome '. $result[ 'full_name' ];

        header('Location: dashboard.php');
    } else {
        $msg = 'Invalid login Details';
    }
};

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Home | ELevatious-Pay</title>
        <link rel="icon" href="./asset/Img/reference.png">
        <link rel="stylesheet" href="./asset/css/mercy1.css">
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    </head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-nav">
        <a class="navbar-brand text-light " href="index.php">
            <div class="eeee">
                ELEVATIOUS PAY
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class=" navbar-nav ml-auto">
                <li class="nav-item active p-2">
                    <a href="index.php" class="nav_col nav-link">Home</a>
                </li>
                <li class="nav-item active p-2">
                    <a href="" class="nav_cool nav-link">FAQ</a>
                </li>
                <li class="nav-item active p-2">

                    <a href="" class="nav_cool nav-link">Contact</a>
                </li>
                <li class="nav-item active p-2">
                    <a href="" class="nav_cool nav-link">
                        <span>Get started</span>
                    </a>
                </li>

            </ul>

        </div>
    </nav>

    <div class="container-fluid bg-home ">
        <div class="row">
            <div class="col-md-7 col-12">
                <img src="./asset/img/home.svg" class="home_img_svg" title="ELevatious Home Image" alt="ELevatious Home Image">
            </div>
            <div class="col-md-5 col-12">
                <div class="container bg-light bd_head">
                    <form action method='post'>
                        <div class="img_cent">
                            <img src="./asset/img/logo.png" height="100" class="rounded-circle logo_img">
                        </div>
                        <h3>
                            <div class="e_pay">
                                ELEVATIOUS PAY
                            </div>
                        </h3>
                        <div>
                            <label for>
                                <p class="add mt-1"> Username </p>
                                <input type="text" name="username" class="form-control userName" placeholder="Username">
                            </label>
                        </div>
                        <div>
                            <label for>
                                <p class="add mt-1"> Password </p>
                                <input type="password" name="password" class="form-control passWord" placeholder="Password">
                            </label>
                        </div>
                        <div class="img_cent">
                            <button name="loginaa" class="submit btn_lg_bg btn w-50 mt-3">
                                <a class="btn_lg"> Login
                                </a>
                            </button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <p>
                            Don't have an Account <a href="register.php" class="sgn_up">Sign up</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-5 col-12 ">
                <div class="wel_pay">
                    <p> WELCOME TO ELEVATIOUS PAY</p>
                </div>
                <div class="sub_title">
                    <p> Easiest Solution To All <br> Your Telecom Needs</p>
                </div>
                <div class="sub_text">
                    <p> Elevatious Has Made it Possible to Conveniently <br>
                        Convert Airtime to Cash, Pay Varieties of Utility <br>
                        Bills and Merchants Instantly with Ease, Deliver <br>
                        Data Subscription and Airtime Top Up <br>
                        Automatedly, Send Bulk SMS, amongst others. </p>
                </div>
                <div class="" style="display: inline-flex;">
                    <div>
                        <a href="./index.php">
                            <div class="btn lg_btn p-3"> Login
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <div class="btn reg_btn p-3">Register </div>
                        </a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 col-12 text-center">
                <h2 class="head_section"> PAY-AS-YOU-GO </h2>
                <!-- I used head_section_text  -->
                <p class="add_section_text mb-3"> Let’s Make Data Available Quickly for Your Urgent Need! Receive Value in Just a Few Clicks Without Registering! (You May Have to Register and Upgrade Your Account for Cheaper Plans)</p>
                <p class="btn check_out ">
                    Check Out
                </p>
            </div>
            <div class="col-md-6 col-12 text-center">
                <h2 class="head_section"> AIRTIME TO CASH </h2>
                <p class="add_section_text mb-3"> Were you just gifted airtime by a friend; or you had an erroneous excess airtime recharge from your bank? ELEVATIOUS PAY has made it possible to conveniently convert airtime to cash and pay bills with airtime.</p>
                <button class="btn check_out">
                    Check for More
                </button>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <h2 class="head_section mb-5">Our Services</h2>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12 text-center">
                <div class="airt mb-5">
                    <img src="./asset/img/logo.png" alt="LOGO TESTiNG" title="UNIFY LOGO" height="100px">
                    <div class="">
                        <h3 class="mt-4 our_services_text">AIRTIME AND DATA</h3>
                        <p class="add_services"> Maximize Your Earnings: <br> Get 4% Cashback on Every <br> Airtime & Data Top Up!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 text-center mt-5">
                <div class="airt cable mb-5">
                    <img src="./asset/img/logo.png" alt="LOGO TESTUNG" height="100px">
                    <div class="">
                        <h3 class="mt-4 our_services_text">CABLE TV SUBSCRIBITIONS</h3>
                        <p class="add_services">Never Miss a Moment: Instantly<br>Activate Your Favorite TV Channels!<br>Enjoy Exclusive Discounts on GOTV,<br>Startimes, DSTV, and More!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 text-center mt-5">
                <div class="airt utility ">
                    <img src="./asset/img/logo.png" alt="LOGO TESTUNG" height="100px">
                    <div class="mt-3">
                        <h3 class="mt-4 our_services_text">UTILITY PAYMENTS</h3>
                        <p class="add_services"> "Stay Juiced: Instantly Recharge <br> for Electricity Token Activation <br> and Never Lose Power!" </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container aa">
        <div class="row">
            <div class="col-md-6 col-12 ">
                <h3 class="trust"> why user trust us </h3>

                <div class="mb-5">
                    <ul>
                        <li>
                            <p> Amazing User Experience Upvote </p>
                        </li>
                        <li>
                            <p> Service Provision </p>
                        </li>
                        <li>
                            <p> Swift Customer Service Response </p>
                        </li>
                        <li>
                            <p> Amazing User Experience Upvote </p>
                        </li>
                        <li>
                            <p> Service Provision </p>
                        </li>
                        <li>
                            <p> Swift Customer Service Response </p>
                        </li>
                        <li>
                            <p> Service Provision </p>
                        </li>
                        <li>
                            <p> Swift Customer Service Response </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <img class="mobile_img" src="asset/img/mobile_interface.png" alt="Mobile Interface" title="Mobile Interface">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <h3 class="fre_ask"> Frequently Asked Questions </h3>
            </div>
            <div class="col-md-6 col-12">
                <img class="mb-5 faq" src="./asset/img/contant-us.jpg" height="450" width="500">
            </div>
            <div class="col-md-6 col-12">
                <p class="fre_add"> Here is a list of FAQs that can help you quickly navigate your way through the Elevatious Pay </p>

                <div class="mb-5">
                    <ul>
                        <li>
                            <p> Amazing User Experience Upvote </p>
                        </li>
                        <li>
                            <p> Service Provision </p>
                        </li>
                        <li>
                            <p> Amazing User Experience Upvote </p>
                        </li>
                        <li>
                            <p> Service Provision </p>
                        </li>
                        <li>
                            <p> Swift Customer Service Response </p>
                        </li>
                        <li>
                            <p> Service Provision </p>
                        </li>
                        <li>
                            <p> Swift Customer Service Response </p>
                        </li>
                        <li>
                            <p> Service Provision </p>
                        </li>
                        <li>
                            <p> Swift Customer Service Response </p>
                        </li>
                        <li>
                            <p> Service Provision </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container-fluid footer mt-5">
        <div class="row">
            <div class="mt-3 col-6 col-md-3 mb-3">
                <h5>Home</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Delivery</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">UNIFY</a></li>
                </ul>
            </div>

            <div class="mt-3 col-6 col-md-3 mb-3">
                <h5>Account</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sign Up</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Login</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Order Status</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Track Your Order</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Book Fetch</a></li>
                </ul>
            </div>
            <div class="col-md-5 col-6 mb-3">
                <form>
                    <h5>Subscribe to our newsletter</h5>
                    <p>Monthly digest of what's new and exciting from us.</p>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->

    <!-- <p class="mt-3 text-center">&copy; Elevatious - Pay | Tech Net 2024 &reg; </p> -->
    <?php
    include_once("./footer.php");
    ?>
</body>
<script src="plugins/jquery/jquery.min.js"></script>

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>