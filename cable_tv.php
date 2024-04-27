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
    <title> CABLE TV | Elevatious Pay</title>

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
                        <a class="nav-link text-primary" href="#"> CABLE TV </a>
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
                                <!-- <p> CABLE TV </p> -->
                                <h4 class="buy_airtime"> CABLE TV SUBSCRIPTION </h4>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-4 col-4">
                                            <img src="./asset/img/logo.png" height="70" width="80">
                                        </div>
                                        <div class="col-md-4 col-4">
                                            <img src="./asset/img/logo.png" height="70" width="80">
                                        </div>
                                        <div class="col-md-4 col-4">
                                            <img src="./asset/img/logo.png" height="70" width="80">
                                        </div>
                                    </div>
                                    <div class="">
                                        <label for="" class="mt-4">Provider</label> <br>
                                        <select name="" id="" class="w-50">
                                            <option value="" selected> Select Provider </option>
                                            <option value=""> DSTV </option>
                                            <option value=""> GOTV </option>
                                            <option value=""> StarTimes </option>
                                        </select>
                                    </div>
                                    <div class="">
                                        <label for="" class="mt-4">Plan</label> <br>
                                        <select name="" id="" class="w-50">
                                            <option value="" selected> Select Plan </option>
                                            <option value="">  </option>
                                            <option value="">  </option>
                                            <option value="">  </option>
                                            <option value="">  </option>
                                            <option value="">  </option>
                                            <option value="">  </option>
                                            <option value="">  </option>
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <p>Customer Phone Number</p>
                                        <input type="number" class="form-control w-50">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12 co-12">
                                        <label for=""class="" >Subscription Type</label>
                                        <select name="" id="" class="w-100">
                                            <option value="" selected> Select Plan </option>
                                            <option value="">  </option>
                                            <option value="">  </option>
                                            <option value="">  </option>
                                            <option value="">  </option>
                                            <option value="">  </option>
                                            <option value="">  </option>
                                            <option value="">  </option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 col-12 mt-3">
                                        <label for="">Amount to pay</label>
                                        <input type="number" class="form-control">
                                    </div>
                                    <div class="col-md-12 col-12 mt-3">
                                        <label for="">IUC Number</label>
                                        <input type="number" class="form-control" placeholder="IUC Number">
                                    </div>
                                    <div class="col-md-12 col-12 mt-3">
                                        <div class="mt-5">
                                            <button class="btn btn-primary">
                                                <label class="m-1" for="">PROCEED</label>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>




    <footer class="Footer text-center" style="margin-top: 100px; margin-left: 210px;">
        &copy; Elevatious - Pay | Tech Net &reg; 2024
    </footer>
    </div>

    </nav>
    <!-- <div class="" style="display: block;">
            
        </div> -->


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
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
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
                        <a href="add_fund.php" class="nav-link">
                            <div class="text-light">
                                <i class="nav-icon fa-solid fa-wallet"></i>
                                <p>
                                    Add Fund
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-side">
                        <a href="airtime.php" class="nav-link">
                            <div class="text-light">
                                <i class="nav-icon fas data fa-mobile"></i>
                                <p> Airtime </p>
                            </div>
                        </a>
                    </li>


                    <li class="nav-side">
                        <a href="data.php" class="nav-link">
                            <div class="text-light">
                                <i class="nav-icon fas wifi fa-wifi"></i>
                                <p> Data </p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-side">
                        <a href="activity.php" class="nav-link">
                            <div class="text-light">
                                <i class="nav-icon fa-solid fa-list-check"></i>
                                <!-- <i class="fa-solid fa-chart-simple"></i> -->
                                <p> Activity </p>
                            </div>
                        </a>
                    </li>
                    <hr>

                    <li class="nav-side">
                        <a href="contactUs.php" class="nav-link">
                            <div class="text-light">
                                <i class="nav-icon fa-solid fa-phone"></i>
                                <p> Contact
                                </p>
                            </div>
                        </a>
                    </li>

                    <li class="nav-side">
                        <a href="exam_pins.php" class="nav-link">
                            <div class="text-light">
                                <i class="nav-icon fas pin fa-graduation-cap"></i>
                                <p> Exam Pins
                                </p>
                            </div>
                        </a>
                    </li>

                    <li class="nav-side">
                        <a href="cable_tv.php" class="nav-link">
                            <div class="text-light">
                                <i class="nav-icon fas tv fa-tv"></i>
                                <p> Cable Tv
                                </p>
                            </div>
                        </a>
                    </li>

                    <li class="nav-side">
                        <a href="electricity.php" class="nav-link">
                            <div class="text-light">
                                <i class="nav-icon fas bills fa-plug-circle-check"></i>
                                <p> Electricity Bills
                                </p>
                            </div>
                        </a>
                    </li>

                    <li class="nav-side">
                        <a href="reward.php" class="nav-link">
                            <div class="text-light">
                                <i class="nav-icon fas fa-gift"></i>
                                <p> Rewards
                                </p>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>








    <script src="plugins/jquery/jquery.min.js"></script>

    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="dist/js/adminlte.js"></script>

    <script src="bootstrap/JS/bootstrap.min.js"></script>

    <script src="bootstrap\JS\sb-admin-2.min.js"></script>
</body>

</html>