<?php

// session_start();

// Check if the user is logged in
// if (!isset($_SESSION['user_name'])) {
//     header('Location: login.php');
//     exit();
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <link rel="stylesheet" href="./asset/css/dashboard.css">

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
                            <a class="nav-push" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
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
                            <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal" href="logout.php" class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400">
                                Logout
                            </a>
                        </div>
                    </li>


                </ul>

                <hr>

                <ul>
                    <!-- class="" style="margin-right: 30px;" -->
                    <p>
                    <div class="container-fluid   " style="height: 160px; padding: 10px; background-color: rgb(133, 158, 248); border-radius: 8px; margin-bottom: 10px;">
                        <h2 class="text-white"> <?php ?> Welcome UNIFY </h2>
                    </div>
                    </p>



                    <h3 class="mt-4 " style="font-family: monospace;"><u>Quick Links</u></h3>
                    <div class="row">
                        <div class="col-md-3 col-6 mb-4 pt-4">
                            <div class="card border-left-success shadow py-2 quick_links">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <i class="fas fa-wifi fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-center"> Airtime </p>
                        </div>
                        <div class="col-md-3 col-6 mb-4 pt-4">
                            <div class="card border-left-info shadow py-2 quick_links">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <i class="fas fa-arrow-alt-circle-down fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-center"> Data Subscription </P>
                        </div>

                        <div class="col-md-3 col-6 mb-4 pt-4">
                            <div class="card border-left-warning shadow py-2 quick_links">

                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-center">Electricity bills </P>
                        </div>
                        <div class="col-md-3 col-6 mb-4 pt-4" >
                            <div class="card border-left-primary shadow  py-2 quick_links" >
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <i class="fas fa-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-center"> WAEC PIN</P>
                        </div>

                    </div>

                </ul>


                <hr>

                <ul>
                    <h3 class="mt-4" style="font-family: monospace; text-align: center;"><u>Other Services</u></h3>
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-md-3 col-6 mb-4 pt-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <!-- Earnings (Monthly) -->
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <!-- $40,000 -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-md-3 col-6 mb-4 pt-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <!-- Earnings (Annual) -->
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <!-- $215,000 -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-md-3 col-6 mb-4 pt-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                <!-- Tasks -->
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        <!-- 50% -->
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <!-- <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div> -->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-md-3 col-6 mb-4 pt-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                <!-- Pending Requests -->
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <!-- 18 -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-md-3 col-6 mb-4 pt-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <!-- Earnings (Monthly) -->
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <!-- $40,000 -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-md-3 col-6 mb-4 pt-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <!-- Earnings (Annual) -->
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <!-- $215,000 -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-md-3 col-6 mb-4 pt-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                <!-- Tasks -->
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        <!-- 50% -->
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <!-- <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div> -->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-md-3 col-6 mb-4 pt-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                <!-- Pending Requests -->
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <!-- 18 -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </ul>

                <footer class="Footer text-center">
                    &copy; Elevatious - Pay | Tech Net &reg; 2024
                </footer>
            </div>

        </nav>
        <!-- <div class="" style="display: block;">
            
        </div> -->


        <aside class="main-sidebar bg-primary sidebar-dark-primary elevation-4">
            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="./asset/img/eye.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">

                        <!-- <a href="#" class="c text-white d-block ">Elevatious Pay </a> -->
                        <p class="text-monospace  text-bold   " style="font-size: 17px;"> Elevatious Pay </p>
                    </div>
                </div>

                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-side">
                            <a href="pages/widgets.html" class="nav-link">
                                <div class="text-light">

                                    <i class="nav-icon  fa-solid fa-house"></i>
                                    <p>
                                        Home
                                        <span class="right badge badge-danger">Main</span>
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-side">
                            <a href="pages/widgets.html" class="nav-link">
                                <div class="text-light">
                                    <i class="fa-solid fa-wallet"></i>
                                    <p> Add Fund
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-side">
                            <a href="pages/widgets.html" class="nav-link">
                                <div class="text-light">
                                    <i class="fa-solid fa-list-check"></i>
                                    <p> Transactions</p>
                                </div>
                            </a>
                        </li>

                        <li class="nav-side">
                            <a href="pages/widgets.html" class="nav-link">
                                <div class="text-light">
                                    <i class="fa-solid fa-chart-simple"></i>
                                    <p> Our Services </p>
                                </div>
                            </a>
                        </li>

                        <li class="nav-side">
                            <a href="pages/widgets.html" class="nav-link">
                                <div class="text-light">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <p> Settings </p>
                                </div>
                            </a>
                        </li>
                        <hr>

                        <li class="nav-side">
                            <a href="pages/widgets.html" class="nav-link">
                                <div class="text-light">
                                    <i class="fa-solid fa-wallet"></i>
                                    <p> Add Fund
                                    </p>
                                </div>
                            </a>
                        </li>

                        <li class="nav-side">
                            <a href="pages/widgets.html" class="nav-link">
                                <div class="text-light">
                                    <i class="fa-solid fa-wallet"></i>
                                    <p> Add Fund
                                    </p>
                                </div>
                            </a>
                        </li>

                        <li class="nav-side">
                            <a href="pages/widgets.html" class="nav-link">
                                <div class="text-light">
                                    <i class="fa-solid fa-wallet"></i>
                                    <p> Add Fund
                                    </p>
                                </div>
                            </a>
                        </li>

                        <li class="nav-side">
                            <a href="pages/widgets.html" class="nav-link">
                                <div class="text-light">
                                    <i class="fa-solid fa-wallet"></i>
                                    <p> Add Fund
                                    </p>
                                </div>
                            </a>
                        </li>

                        <li class="nav-side">
                            <a href="pages/widgets.html" class="nav-link">
                                <div class="text-light">
                                    <i class="fa-solid fa-wallet"></i>
                                    <p> Add Fund
                                    </p>
                                </div>
                            </a>
                        </li>

                        <li class="nav-side">
                            <a href="pages/widgets.html" class="nav-link">
                                <div class="text-light">
                                    <i class="fa-solid fa-wallet"></i>
                                    <p> Add Fund
                                    </p>
                                </div>
                            </a>
                        </li>
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