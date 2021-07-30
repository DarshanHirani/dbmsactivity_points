<?php
   include('sessionteacher.php');

$roww=mysqli_fetch_assoc($fetchlogin);

//header("location: viewproctorstudents.php");
 ?>
 <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Activity Points Dashboard</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="../../assets/img/favicon/tcfavicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicon/tcfavicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicon/tcfavicon.png">
    <link rel="manifest" href="/dashboard/assets/img/favicon/tcfavicon.png">
    <link rel="mask-icon" href="/dashboard/assets/img/favicon/tcfavicon.png" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="/dashboard/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="/dashboard/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
        type="text/css">
    <!-- Page plugins -->
    <link rel="stylesheet" href="/dashboard/assets/vendor/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" href="/dashboard/assets/vendor/sweetalert2/dist/sweetalert2.min.css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="/dashboard/css/dashboard.css" type="text/css">

</head>


<body>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="col-6 collapse-brand">
                        <img src="/assets/img/brand/TechalierWhiteT.png" height="50" alt="Logo Impact">
                    </div>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center  ml-auto ">
                        <a href="/index.html" target="_blank" class="btn btn-md btn-secondary animate-up-2"><i
                                class="ni ni-user-run"></i> Logout</a>



                    </ul>

                </div>
            </div>
        </nav>

        <!-- Header -->
        <div class="header bg-primary pb-2 middle-blue">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                        </div>
                    </div>
                    <!-- Card stats -->
                    <div class="row">


                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <a href="viewproctorstudents.php">
                                <button id="btn-proctor">

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h4 class="card-title text-uppercase text-muted mb-0 usn">
                                                    Proctored Students
                                                </h4>
                                                <span class="h2 font-weight-bold mb-0 name">

                                                </span>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-sm">
                                            <span class="text-nowrap">

                                            </span>
                                        </p>
                                    </div>
                                </button>
</a>
                            </div>


                        </div>


                        <div class="col-xl-3 col-md-6">

                            <div class="card card-stats">

                                <!-- Card body -->
                                <a href="insertstudent.php">
                                <button id="btn-student">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h4 class="card-title text-uppercase text-muted mb-0">Add Student</h4>
                                                <span class="h2 font-weight-bold mb-0">
                                                </span>
                                            </div>
                                            <div class="col-auto">

                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-sm">

                                        </p>
                                    </div>
</button>
</a>
                            </div>
                            </button>
                        </div>


                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <a href="findstudentdata.html">
                                <button id="btn-sturecord">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h4 class="card-title text-uppercase text-muted mb-0">Find Student
                                                    Record
                                                </h4>
                                                <span class="h2 font-weight-bold mb-0">

                                                </span>
                                            </div>

                                        </div>
                                        <p class="mt-3 mb-0 text-sm">

                                        </p>
                                    </div>
</button>
</a>
                            </div>
                            
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <a href="insertnewfield.html">
                                <button id="btn-event">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h4 class="card-title text-uppercase text-muted mb-0">Add Events</h4>
                                                <span class="h2 font-weight-bold mb-0"></span>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-sm">
                                        </p>

                                    </div>
                                </button>
</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Argon Scripts -->
        <!-- Core -->
        <script src="/dashboard/assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="/dashboard/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/dashboard/assets/vendor/js-cookie/js.cookie.js"></script>
        <script src="/dashboard/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="/dashboard/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
        <!-- Optional JS -->
        <script src="/dashboard/assets/vendor/chart.js/dist/Chart.min.js"></script>
        <script src="/dashboard/assets/vendor/chart.js/dist/Chart.extension.js"></script>
        <!-- Argon JS -->
        <script src="/dashboard/assets/js/dashboard.js?v=1.2.0"></script>
        <!-- Demo JS - remove this in your project -->
        <script src="/dashboard/assets/js/demo.min.js"></script>
</body>

</html>

