<?php
require './include/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Home | ELevatious-Pay</title>
        <link rel="stylesheet" href="./asset/css/hom211.css">
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    </head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-nav">
        <a class="navbar-brand text-light " href="#">
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
                        <a href="home" class="nav_col nav-link">Home</a>
                    </li>
                    <li class="nav-item p-2 ">
                        <a href="#faq" class="nav_col nav-link" >FAQ</a>
                    </li>
                    <li class="nav-item p-2 ">
                        <a href="contact" class="nav_col nav-link">Contact</a>
                    </li>
                    <li class="nav-item p-2  cta">
                        <a href="register" class="nav_col nav-link">
                            <span>Get started</span>
                        </a>
                    </li>
                </ul>
            
        </div>
    </nav>

    <div class="container-fluid bg-home ">
        <div class="row">
            <div class="col-md-7 col-12">
                <img src="./asset/img/home.svg" class="home_img_svg">
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
                            <button name="login" class="submit btn_lg_bg btn w-50 mt-3">
                                <a href class="btn_lg"> Login
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
                <button class="btn check_out px-4 py-3">
                    Check Out
                </button>
            </div>
            <div class="col-md-6 col-12 text-center">
                <h2 class="head_section"> AIRTIME TO CASH </h2>
                <p class="add_section_text mb-3"> Were you just gifted airtime by a friend; or you had an erroneous excess airtime recharge from your bank? ELEVATIOUS PAY has made it possible to conveniently convert airtime to cash and pay bills with airtime.</p>
                <button class="btn check_out px-4 py-3">
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
                    <img src="./asset/img/logo.png" alt="LOGO TESTUNG" height="100px">
                    <div class="mt-3">
                        <h3 class="e_pay">AIRTIME AND DATA</h3>
                        <p class="add_services"> Maximize Your Earnings: <br> Get 4% Cashback on Every <br> Airtime & Data Top Up!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 text-center mt-5">
                <div class="airt mb-5">
                    <img src="./asset/img/logo.png" alt="LOGO TESTUNG" height="100px">
                    <div class="mt-3">
                        <h3 class="e_pay">CABLE TV SUBSCRIBITIONS</h3>
                        <p class="add_services">Never Miss a Moment: Instantly<br>Activate Your Favorite TV Channels!<br>Enjoy Exclusive Discounts on GOTV,<br>Startimes, DSTV, and More!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 text-center mt-5">
                <div class="airt mb-5 mt-5">
                    <img src="./asset/img/logo.png" alt="LOGO TESTUNG" height="100px">
                    <div class="mt-3">
                        <h3 class="e_pay">UTILITY PAYMENTS</h3>
                        <p class="add_services"> "Stay Juiced: Instantly Recharge <br> for Electricity Token Activation <br> and Never Lose Power!" </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <h3> Frequently Asked Questions </h3>
            </div>
            <div class="col-md-6 col-12">
                <img class="mb-5" src="./asset/img/contant-us.jpg" height="500" width="500">
                <!-- <img src="./asset/img/about-2.jpg" height="500" width="500">  -->
            </div>
            <div class="col-md-6 col-12">
                <p> Here is a list of FAQs that can help you quickly navigate your way through the Elevatious Pay </p>
            </div>
        </div>
    </div>
    <?php
    include_once("./footer.php");
    ?>
</body>
<script src="plugins/jquery/jquery.min.js"></script>

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>