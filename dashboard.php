<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content>
    <meta name="author" content>

    <title>Elevatious Pay - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./bootstrap/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .navbar-nav {
            margin-right: auto;
            gap: 2.0em;
        }

        .nav-link {
            padding: 10px;
            font-weight: bold;
        }

        /* .nav-link:hover{
            background-color: #333;
        } */

        .nav-item {
            list-style-type: none;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            height: 3px;
            width: 100%;
            border-radius: 10px;
            background: rgb(100, 81, 207);
            left: 0;
            bottom: 0;
            transform: scaleX(0);
            transition: transform .4s ease-in-out;
            /* transform-origin: left; */
        }

        .nav-link:hover::after {
            transform: scaleX(1);
            transform-origin: right;
        }

        .no-arrow::after {
            content: "";
            position: absolute;
            height: 3px;
            width: 100%;
            border-radius: 10px;
            background: rgb(100, 81, 207);
            left: 0;
            bottom: 0;
            transform: scaleX(0);
            transition: transform .4s ease-in-out;
            /* transform-origin: left; */
        }

        .no-arrow:hover::after {
            transform: scaleX(1);
            transform-origin: right;
        }

        .sidebar-brand {
            text-decoration: none !important;
        }



        .sidebar-div {
            background-color: rgb(133, 158, 248);
            height: 100vh;
            width: 220px;
            /* display: flex; */
            justify-content: center;
            padding: 10px;
            /* border-radius: 5px; */
            /* display: block; */
            font-size: 15px;
            /* padding-left: 20px;  */
        }

        .sidebar-content {
            padding: 20px;
        }

        .sidebarlink {
            padding-top: 15px;
            align-items: center;
            gap: 15px;
            display: flex;
        }

        .sidebarlink a {
            text-decoration: none !important;
            color: white;
            font-weight: bold;

        }

        .sidebarlink svg {
            fill: white;
        }

        .sidebar-button {
            padding-top: 24px;
            padding-inline: 10px;
            padding-block: 2px;
            background: transparent;
            border-radius: 4px;
            color: rgb(107, 80, 204);
            border: 1px solid;
            position: relative;
            background-color: white;
            font-weight: bold;

        }

        .sidebar-div-button {
            display: flex;
            justify-content: space-between;
            padding-top: 25px;
            padding-left: 32px;
        }

        /* .first-content-hero{
    display: flex !important;
    box-shadow: 2px 2px 8px rgb(49, 47, 47);
    
    border-radius: 5px;
         
    } */

        .hero {
            display: flex;

        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-0 static-top shadow">
        <div class>
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href>
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3" style="font-size: larger; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight: bold; ">
                    ELEVATIOUS PAY </div>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 300px;">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Our Services</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
        </div>

        <div class="topbar-divider d-none d-sm-block"></div>

        <div>
            <ul>
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 bold">Vincent
                            TV</span>
                        <img class="img-profile rounded-circle" src="./asset/img/undraw_profile.svg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
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
                        <a class="dropdown-item"  data-toggle="modal" data-target="#logoutModal">
                            <i href="./logout.php" class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"> </i>
                            Logout
                        </a>
                        
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="hero">
        <div class='sidebar-div '>
            <div class='sidebar-content'>

                <div class='sidebarlink'>
                    <i class="fa-solid fa-house"></i>
                    <a href='#'>Home</a>
                </div>

                <hr />
                <div class='sidebarlink'>
                    <i class="fa-solid fa-wallet"></i>
                    <a href='#'> Add Fund</a>
                </div>
                <hr />
                <div class='sidebarlink'>
                    <i class="fa-solid fa-list-check"></i>
                    <a href='#'>Transactions</a>
                </div>
                <hr />
                <div class='sidebarlink'>
                    <i class="fa-solid fa-chart-simple"></i>
                    <a href='#'>Our Services </a>
                </div>
                <hr />
                <div class='sidebarlink'>
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    <a href='#'>Settings</a>
                </div>
                <hr />

                
            </div>
        </div>

       


        <div class="container-fluid pt-3">
            <div class="container-fluid   " style="height: 160px; padding: 10px; background-color: rgb(133, 158, 248); border-radius: 8px; margin-bottom: 10px;">
                <h2 class="text-white"> Hi, Vincent!</h2>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4 pt-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4 pt-4">
                    <div class="card border-left-info shadow h-100 py-2">

                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4 pt-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4 pt-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                    </div>
                </div>
            </div>
            <hr>

            <!-- Page Heading -->
            <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div> -->

            <!-- Content Row -->
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4 pt-4">
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
                <div class="col-xl-3 col-md-6 mb-4 pt-4">
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

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4 pt-4">
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
                <div class="col-xl-3 col-md-6 mb-4 pt-4">
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

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4 pt-4">
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

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4 pt-4">
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
                <div class="col-xl-3 col-md-6 mb-4 pt-4">
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

                <div class="col-xl-3 col-md-6 mb-4 pt-4">
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

            </div>
            <hr class="sidebar-divider mt-2">

            <footer class="Footer text-center">
                &copy; Elevatious - Pay | Tech Net &reg; 2024
            </footer>
        </div>

    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>