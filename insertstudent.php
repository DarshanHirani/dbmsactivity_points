<?php
include 'config.php';
$msg="";
$usnexist="";

if(isset($_POST['submit']))
{
    $usn=$_POST['usn'];
    $ev1=$_POST['Cyclathon'];
    $ev2=$_POST['Womens_Day_Walkathon'];
    $ev3=$_POST['Mobile_Schools'];
    $ev4=$_POST['Clean_Drive'];
    $ev5=$_POST['Clean_Drive_Basavangudi'];
    $ev6=$_POST['Plog_run'];
    $ev7=$_POST['NSS_Plog_run'];
    $ev8=$_POST['Rotract_iTeach'];
    $ev9=$_POST['Team_Hasiru_Cleanathon'];

    

    $check=mysqli_num_rows(mysqli_query($link,"SELECT * from testtable where usn='$usn'"));


    if($check>0)
    {
      $usnexist="USN already registered";
      echo "Please update the details if you want to make any change ";

    }
    else{

       $total=$ev1+$ev2+$ev3+$ev4+$ev5+$ev6+$ev7+$ev8+$ev9;
         mysqli_query($link,"INSERT into testtable(usn, Cyclathon , Womens_Day_Walkathon,Mobile_Schools, Clean_Drive, Clean_Drive_Basavangudi, Plog_run, NSS_Plog_run,Rotract_iTeach,Team_Hasiru_Cleanathon,total) values ('$usn','$ev1', '$ev2', '$ev3','$ev4','$ev5','$ev6','$ev7','$ev8','$ev9','$total')");

         
    }

    



}


?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Activity Point Dashboard - Register</title>

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="120x120" href="/dashboard/assets/img/favicon/tcfavicon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/dashboard/assets/img/favicon/tcfavicon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/dashboard/assets/img/favicon/tcfavicon.png">
  <link rel="manifest" href="/dashboard/assets/img/favicon/tcfavicon.png">
  <link rel="mask-icon" href="/dashboard/assets/img/favicon/tcfavicon.png" color="#ffffff">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="/dashboard/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="/dashboard/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <link rel="stylesheet" href="/dashboard/assets/vendor/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="/dashboard/assets/vendor/sweetalert2/dist/sweetalert2.min.css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="/dashboard/css/dashboard.css" type="text/css">
  <link rel="stylesheet" href="/dashboard/css/password.css" type="text/css">

</head>



<body class="bg-white">
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="/dashboard/../index.html">
        <img src="/assets/img/brand/TechalierWhiteT.png" height="35" alt="Logo Impact">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
        aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <img src="/assets/img/brand/techalier-community.png" height="50" alt="Logo Impact">
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse"
                aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav mr-auto">

          <li class="nav-item">
            <a href="/login.html" class="nav-link">
              <span class="nav-link-inner--text">Login</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="/register.html" class="nav-link">
              <span class="nav-link-inner--text">Register</span>
            </a>
          </li>
        </ul>
        <hr class="d-lg-none" />
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Create an account</h1>
              <p class="text-lead text-white">Use this portal to keep track of the activity points!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
          xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--9 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary border border-soft">
            <div class="card-body px-lg-5 py-lg-5">
              <form autocomplete="off" method="POST" onsubmit="return checkPassword(this)">
              
              <div  class="text-muted text-center">
                   <?php
                    echo $usnexist;
                    ?>
                    </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input autocomplete="off" class="form-control" name="usn" placeholder="USN" type="text" required>
                  </div>

                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="Cyclathon" type="text" name="Cyclathon" id="Cyclathon" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="Womens Day Walkathon" type="text" name="Womens_Day_Walkathon" id="Womens_Day_Walkathon" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="Mobile Schools" type="text" name="Mobile_Schools" id="Mobile_Schools" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="Clean Drive" type="text" name="Clean_Drive" id="Clean_Drive" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="Clean Drive Basavanagudi" type="text" name="Clean_Drive_Basavangudi" id="Clean_Drive_Basavangudi" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="Plog Run" type="text" name="Plog_run" id="Plog_run" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="NSS plog Run" type="text" name="NSS_Plog_run" id="NSS_Plog_run" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="Rotract iteach" type="text" name="Rotract_iTeach" id="Rotract_iTeach" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="Team hasiru Cleanathon" type="text" name="Team_Hasiru_Cleanathon" id="Team_Hasiru_Cleanathon" required>
                  </div>
                </div>
                
                


                

                
                

                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary mt-4">INSERT STUDENT DETAILS</button>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5 bg-white" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-12">
          <div class="copyright text-center text-muted">
            &copy; 2021 <a href="https://community.techalier.com" class="font-weight-bold ml-1"
              target="_blank">Techalier Community</a>
          </div>
        </div>

      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="/dashboard/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="/dashboard/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/dashboard/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="/dashboard/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="/dashboard/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="/dashboard/assets/js/dashboard.js?v=1.2.0"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="/dashboard/assets/js/demo.min.js"></script>
  <script src="./assets/js/meterjs.js"></script>
</body>

</html>