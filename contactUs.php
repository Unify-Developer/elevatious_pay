<?php
require './include/config.php';

// if(!$_SESSION['admin_login']){
//     header("location: ./index.php");
//     return;
// }
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Contact Us | Elevatious Pay</title>

    <link rel="icon" href="./asset/img/logo.png">

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
                        <a class="nav-link" href="#">Airtime Subscription</a>
                    </li>

                    <li class="nav-item dropdown no-arrow ml-auto ">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 bold">Vincent
                                TV</span>
                            <img class="img-profile rounded-circle" src="./asset/img/undraw_profile.svg" style="height: 30px; width: 30px;">
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
                            <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                                <i href="./logout.php" class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"> </i>
                                Logout
                            </a>
                        </div>
                    </li>


                </ul>
                <hr>

                <ul>
                    <li>
                        <div class="airt_airtime">
                            <div class="div_buy">
                                <p> Get in Touch With Us </p>
                                <h4 class="buy_airtime"> Contact Us <i class="fas fa-phone"></i> </h4>
                                <hr>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-12 contact ">
                                        <i class="fas fa-phone con_icon"></i>
                                        <p class="icon_cal"> 07049910287</p>
                                        <button class="icon_call"> CALL </button>
                                    </div>
                                    <div class="col-md-6 col-12 contact">
                                        <i class="fa-solid fa-envelope  con_icon"></i>
                                        <p class="icon_sup"> support@elevatious.com</p>
                                        <button class="icon_supp"> MAIL </button>
                                    </div>
                                    <div class="col-md-6 col-12 contact">
                                        <i class="fa-brands fa-whatsapp con_icon"></i>
                                        <p class="icon_what"> Whatsapp </p>
                                        <button class="icon_whats"> MESSAGE </button>
                                    </div>
                                    <div class="col-md-6 col-12 contact">
                                        <i class="fa-brands fa-whatsapp con_icon"></i>
                                        <p class="icon_what"> Whatsapp Group</p>
                                        <button class="icon_whatsg"> JOIN </button>
                                    </div>
                                    <div class="col-md-6 col-12 contact">
                                        <i class="fa-brands fa-facebook con_icon"></i>
                                        <p class="icon_face"> Facebook </p>
                                        <button class="icon_faceb"> TAP TO JOIN </button>
                                    </div>
                                    <div class="col-md-6 col-12 contact">
                                        <i class="fa-brands fa-instagram con_icon"></i>
                                        <p class="icon_ins"> Instagram </p>
                                        <button class="icon_inst"> TAP TO JOIN </button>
                                    </div>
                                    <div class="col-md-6 col-12 contact">
                                        <i class="fa-brands fa-twitter con_icon"></i>
                                        <p class="icon_twi"> Twitter </p>
                                        <button class="icon_twit"> TAP TO JOIN </button>
                                    </div>
                                    <div class="col-md-6 col-12 contact">
                                        <i class="fa-brands fa-linkedin con_icon"></i>
                                        <p class="icon_lin"> Linkedin </p>
                                        <button class="icon_link"> TAP TO JOIN </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>
                </ul>
                <ul>
                    <li>
                        <div class="airt_airtime">
                            <div class="div_buy">
                                <p> Get in Touch With Us </p>
                                <h4 class="buy_airtime"> Direct Message <i class="fa-solid fa-envelope"></i> </h4>
                                <hr>
                            </div>
                            <div>
                                <form action="" method="post">
                                    <label for=""> Name: </label>
                                    <input class="form-control" type="text">
                                    <label for=""> Email: </label>
                                    <input class="form-control" type="text">
                                    <label for=""> Subject: </label> <br>
                                    <textarea class="text_area form-control" name="" id="" cols="109" rows="5"></textarea>
                                </form>
                            </div>
                            <div class="mt-2">
                                <button class="btn btn-primary">
                                    <label class="m-1" for="">PROCEED</label>
                                </button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
    </div>



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
                    <img src="./asset/img/logo.png" class="img-circle elevation-2" alt="User Image">
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
                        <a href="dashboard.php" class="nav-link">
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
                        <a href="#" class="nav-link">
                            <div class="text-light">
                                <i class="fa-solid fa-wallet"></i>
                                <p> Add Fund
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-side">
                        <a href="#" class="nav-link">
                            <div class="text-light">
                                <i class="fa-solid fa-list-check"></i>
                                <p> Transactions</p>
                            </div>
                        </a>
                    </li>

                    <li class="nav-side">
                        <a href="#" class="nav-link">
                            <div class="text-light">
                                <i class="fa-solid fa-chart-simple"></i>
                                <p> Our Services </p>
                            </div>
                        </a>
                    </li>

                    <li class="nav-side">
                        <a href="#" class="nav-link">
                            <div class="text-light">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                <p> Settings </p>
                            </div>
                        </a>
                    </li>
                    <hr>

                    <li class="nav-side">
                        <a href="#" class="nav-link">
                            <div class="text-light">
                                <i class="fa-solid fa-wallet"></i>
                                <p> Add Fund
                                </p>
                            </div>
                        </a>
                    </li>

                    <li class="nav-side">
                        <a href="#" class="nav-link">
                            <div class="text-light">
                                <i class="fa-solid fa-wallet"></i>
                                <p> Add Fund
                                </p>
                            </div>
                        </a>
                    </li>

                    <li class="nav-side">
                        <a href="#" class="nav-link">
                            <div class="text-light">
                                <i class="fa-solid fa-wallet"></i>
                                <p> Add Fund
                                </p>
                            </div>
                        </a>
                    </li>

                    <li class="nav-side">
                        <a href="#" class="nav-link">
                            <div class="text-light">
                                <i class="fa-solid fa-wallet"></i>
                                <p> Add Fund
                                </p>
                            </div>
                        </a>
                    </li>

                    <li class="nav-side">
                        <a href="#" class="nav-link">
                            <div class="text-light">
                                <i class="fa-solid fa-wallet"></i>
                                <p> Add Fund
                                </p>
                            </div>
                        </a>
                    </li>

                    <li class="nav-side">
                        <a href="#" class="nav-link">
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