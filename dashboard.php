<?php

// session_start();


// if(!$_SESSION['username']){
//     header("location: ./login.php");
//     return;
// }

// Display success message
// echo 'Login successful! Welcome, ' . $_SESSION['username'];
?>

<?php
require './include/config.php';

?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Elevatious Pay</title>

    <link rel="icon" href="./asset/img/logo.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <link rel="stylesheet" href="./asset/css/dashboard111.css">

    <link rel="stylesheet" href="./bootstrap/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/CSS/sb-admin-2.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <div class="w-100" style="display: block;">
                <ul class="navbar-nav ">

                    <li class="nav-pushmenu">
                        <div class="push">
                            <a class="nav-push" data-widget="pushmenu" href="#" role="button"><i
                                    class="fas fa-bars"></i></a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown no-arrow ml-auto ">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 bold">Vincent
                                TV</span>
                            <img class="img-profile rounded-circle" src="./asset/img/undraw_profile.svg"
                                style="height: 30px; width: 30px;">
                        </a>
                        <div class="dropdown-menu dropdown-menu shadow animated--grow-in">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal" href="./logout.php"
                                class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400">
                                Logout
                            </a>
                        </div>
                    </li>


                </ul>

                <hr>

                <ul class="lois">
                    <!-- class="" style="margin-right: 30px;" -->
                    <li>
                        <div class="container-fluid hi_username ">
                            <div class="row">
                                <div class="col-md-12 col-md-12">
                                    <h2 class="text-white user_hi"> Hi, Vincent!</h2>
                                </div>
                                <div class="col-md-12 col-12 mt-4" style="display: inline-flex;">
                                    <i class="m-1 text-white fa-solid fa-wallet"></i>
                                    <a href="">
                                        <p class="text-white">Balance  &nbsp;&nbsp;&nbsp; $0.00</p>
                                    </a>
                                </div>
                            </div>
                            <div class="add_fund_dash " style="display: inline-flex;">
                                <i class="m-3 text-white fa-solid fa-wallet"></i>
                                <a href="" style="margin-top: 12px;">
                                    <p class="text-white">Add Fund </p>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li>

                        <h3 class="mt-4 quick "
                            style="font-family: monospace; color: rgba(34, 104, 244, 0.886); font-weight: bold; ">
                            <u>Quick Links</u>
                        </h3>
                        <div class="row">
                            <div class="col-md-3 col-6 mb-4 pt-4">
                                <a href="#">
                                    <div class="card border-left-success shadow py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Contact</div>
                                                </div>
                                                <div class="col-auto ">
                                                    <i class="fas wifi fa-phone fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-6 mb-4 pt-4">
                                <a href="airtime.php">
                                    <div class="card border-left-info shadow py-2">
                                        <div class="card-body bbbb">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Airtime </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas data fa-mobile fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 vinc col-6 mb-4 pt-4">
                                <a href="data.php">
                                    <div class="card border-left-warning shadow  py-2">

                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Data </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-wifi fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 vinc col-6 mb-4 pt-4">
                                <a href="#">
                                    <div class="card border-left-primary shadow py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Activity</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-list fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>


                    </li>

                </ul>

                <hr>

                <ul class="lois">
                    <h3 class="mt-4 quick "
                        style="font-family: monospace; text-align: center; color: rgba(34, 104, 244, 0.886); font-weight: bold; ">
                        <u>Other Services</u>
                    </h3>
                    <div class="row">

                        <div class="col-md-3 col-6 mb-4 pt-4">
                            <a href="#">
                                <div class="card border-left-success shadow py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div
                                                    class="text-xs exam font-weight-bold text-primary text-uppercase mb-1">
                                                    Exam Pins</div>
                                            </div>
                                            <div class="col-auto ">
                                                <i class="fas pin fa-graduation-cap fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-6 mb-4 pt-4">
                            <a href="#">
                                <div class="card border-left-info shadow py-2">
                                    <div class="card-body bbbb">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div
                                                    class="text-xs exam font-weight-bold text-primary text-uppercase mb-1">
                                                    Cable TV</div>                
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas tv fa-tv fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 vinc col-6 mb-4 pt-4">
                            <a href="#">
                                <div class="card border-left-warning shadow  py-2">

                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div
                                                    class="text-xs elect font-weight-bold text-primary text-uppercase mb-1">
                                                    Electricity bills </div>                  
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas bills fa-plug-circle-check fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 vinc col-6 mb-4 pt-4">
                            <a href="#">
                                <div class="card border-left-primary shadow py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div
                                                    class="text-xs exam font-weight-bold text-primary text-uppercase mb-1">
                                                    Rewards</div>
                                                
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-gift fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>


                </ul>

                <footer class="Footer text-center">
                    &copy; Elevatious - Pay | Tech Net &reg; 2024
                </footer>
            </div>

        </nav>
        <aside class="main-sidebar sidebar-dark-primary" style="background-color: #3b79f5;">
            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="./asset/img/logo.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <p class="text-white text-bold" style="font-size: 17px;"> ELEVATIOUS PAY </p>
                    </div>
                </div>

                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="" role="" data-accordion="">

                        <li class="nav-side">
                            <a href="dashboard.php" class="nav-link">
                                <div class="text-light">
                                    <i class="nav-icon  fa-solid fa-house"></i>
                                    <p>
                                        Dashboard
                                        <!-- <span class="right badge badge-danger">Main</span> -->
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-side">
                            <a href="" class="nav-link">
                                <div class="text-light">
                                    <i class="nav-icon fa-solid fa-wallet"></i>
                                    <p> Add Fund
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-side">
                            <a href="" class="nav-link">
                                <div class="text-light">
                                    <i class="nav-icon fas data fa-mobile"></i>
                                    <p> Airtime </p>
                                </div>
                            </a>
                        </li>


                        <li class="nav-side">
                            <a href="" class="nav-link">
                                <div class="text-light">
                                    <i class="nav-icon fas wifi fa-wifi"></i>
                                    <p> Data </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-side">
                            <a href="" class="nav-link">
                                <div class="text-light">
                                    <i class="nav-icon fa-solid fa-list-check"></i>
                                    <!-- <i class="fa-solid fa-chart-simple"></i> -->
                                    <p> Activity </p>
                                </div>
                            </a>
                        </li>
                        <hr>

                        <li class="nav-side">
                            <a href="" class="nav-link">
                                <div class="text-light">
                                    <i class="nav-icon fa-solid fa-phone"></i>
                                    <p> Contact
                                    </p>
                                </div>
                            </a>
                        </li>

                        <li class="nav-side">
                            <a href="" class="nav-link">
                                <div class="text-light">
                                    <i class="nav-icon fas pin fa-graduation-cap"></i>
                                    <p> Exam Pins
                                    </p>
                                </div>
                            </a>
                        </li>

                        <li class="nav-side">
                            <a href="" class="nav-link">
                                <div class="text-light">
                                    <i class="nav-icon fas tv fa-tv"></i>
                                    <p> Cable Tv
                                    </p>
                                </div>
                            </a>
                        </li>

                        <li class="nav-side">
                            <a href="" class="nav-link">
                                <div class="text-light">
                                    <i class="nav-icon fas bills fa-plug-circle-check"></i>
                                    <p> Electricity Bills
                                    </p>
                                </div>
                            </a>
                        </li>

                        <li class="nav-side">
                            <a href="" class="nav-link">
                                <div class="text-light">
                                    <i class="nav-icon fas fa-gift"></i>
                                    <p> Rewards
                                    </p>
                                </div>
                            </a>
                        </li>

                        <!-- <li class="nav-side">
                            <a href="#" class="nav-link">
                                <div class="text-light">
                                    <i class="fa-solid fa-wallet"></i>
                                    <p> Add Fund
                                    </p>
                                </div>
                            </a>
                        </li> -->
                    </ul>

                </nav>
            </div>
        </aside>
    </div>







    <script src="plugins/jquery/jquery.min.js"></script>

    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="dist/js/adminlte.js"></script>

    <script src="bootstrap/JS/bootstrap.min.js"></script>

    <script src="bootstrap\JS\sb-admin-2.min.js"></script>
</body>

</html>