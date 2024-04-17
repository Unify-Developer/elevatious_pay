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
    <title>AdminLTE 3 | Dashboard 3</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="./dashboard.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar bg-primary sidebar-dark-primary elevation-4">
            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="./asset/img/eye.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="text-white d-block">Elevatious Pay</a>
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

                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                                <div class="text-light">

                                    <i class="nav-icon  fa-solid fa-house"></i>
                                    <p>
                                        Home
                                        <!-- <span class="right badge badge-danger">Main</span> -->
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                            <div class="text-light">
                                <i class="fa-solid fa-wallet"></i>
                                <p> Add Fund
                                </p>
                            </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                            <div class="text-light">
                                <i class="fa-solid fa-list-check"></i>
                                <p> Transactions</p>
                            </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                            <div class="text-light">
                                <i class="fa-solid fa-chart-simple"></i>
                                <p> Our Services </p>
                            </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                            <div class="text-light">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                <p> Settings </p>
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

</body>

</html>