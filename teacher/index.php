<?php
$title = 'E-Master | Teacher';
//connect to database
require_once('../db/dbConnect.php');


$std = mysqli_query($dbConnect,"SELECT * FROM `register` WHERE role='Student'");


$stdInfos = mysqli_fetch_all($std);
$counter = count($stdInfos);

$teacher = mysqli_query($dbConnect,"SELECT * FROM `register` WHERE role='Teacher'");

$tInfos = mysqli_fetch_all($teacher);
$counter1 = count($tInfos);

foreach($tInfos as $tInfo){
    $fname = $tInfo['0'];
    $lname = $tInfo['1'];
    }

$course = mysqli_query($dbConnect,"SELECT * FROM `course_info`");

$crsInfos = mysqli_fetch_all($course);
$counter2 = count($crsInfos);

$notices = mysqli_query($dbConnect,"SELECT * FROM `notices`");

$notice = mysqli_fetch_all($notices);
$counter3 = count($notice);
// echo "<pre>";
// print_r($created_at);
// echo "</pre>";

?>

<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $title; ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

   <!-- Bootstrap CSS -->
   <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="../assets/fontawesome/css/all.min.css" rel="stylesheet">
    
    <!-- Dashboard CSS -->
    <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <link href="../assets/charts/chart.js" rel="stylesheet" type='text/js'>



  </head>
  <body>
    <div class="wrapper">
      
      <div class="sidebar" data-color="Black" data-active-color="danger">

        <div class="logo">
          <a href="" class="simple-text logo-normal text-center">
          E-Master | <?php echo $fname." ".$lname; ?>
          </a>
        </div>

        <div class="sidebar-wrapper overflow-hidden">
          <div class="user">
              <div class="photo">
             
              </div>  
          </div>
          <ul class="nav">

              <li class="active">
                  <a href="index.php">
                  <i class="fas fa-chart-line"></i>
                      <p>Dashboard</p>
                  </a>
              </li>

              <li >
                  <a href="sList.php">
                  <i class="fas fa-table"></i>
                      <p>Students</p>
                  </a>
              </li>

              <li >
                  <a href="../coursesTable.php">
                  <i class="fas fa-book-open"></i>
                      <p>Courses</p>
                  </a>
              </li>

              <li>
                  <a href="salaryTable.php">
                  <i class="fas fa-wallet"></i>
                      <p>Salary</p>
                  </a>
              </li>

              <li >
                  <a href="resultList.php">
                  <i class="fas fa-crown"></i>
                      <p>Results</p>
                  </a>
              </li>

              <li >
                  <a href="../noticeList.php">
                  <i class="fas fa-bullhorn"></i>
                      <p>Notice</p>
                  </a>
              </li>

              <li >
                  <a href="settings.php">
                  <i class="fas fa-user-cog"></i>
                      <p>Settings</p>
                  </a>
              </li>

              <li>
                  <a href="../logout.php">
                  <i class="fas fa-sign-out-alt"></i>
                      <p>Logout</p>
                  </a>
              </li>
              
              <li>
              <a class="navbar-brand" href="../index.php">
                  <button type="button" class="btn btn-success">Back to Home</button>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="main-panel overflow-hidden">
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
          <div class="container-fluid">


            <div class="navbar-wrapper">
              <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </button>
              </div>
              <p class="text-info fw-bold fs-4">
                  <img src="../assets/logo/logo.png" width="70px" height="50px">&nbsp;&nbsp;Welcome to Teacher Dashboard</p>
            </div>


              <form>
                  <div class="input-group no-border">
                      <input type="text" value="" class="form-control" placeholder="Search...">
                  </div>
              </form>

              
                
          </div>
        </nav>

        

        <div class="content row">
        <!--row begins-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Students</strong></p>
                                            <?php echo $counter;?>                               </div>
                                    </div>
                                </div>
                                <a href="students_view.php">
                                    <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>View
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p> <strong>Notice</strong></p>
                                            <?php echo $counter3;?>                                       </div>
                                    </div>
                                </div>
                                <a href="feescollection_view.php">
                                    <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>View
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                   
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p> <strong>Courses</strong></p>
                                            <?php echo $counter2;?>                                        </div>
                                    </div>
                                </div>
                                <a href="branch_view.php">
                                    <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>View
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Teachers</strong></p>
                                            <?php echo $counter1;?>                             </div>
                                    </div>
                                </div>
                                <a href="teachers_view.php">
                                    <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>View
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    
                </div>

                <div class="row">
  
  <div>
    <div class="card">
      <div class="card-body text-center">
      <?php require_once('tablechart.php'); ?>
      </div>
    </div>
  </div>
</div>
        
        <!-- <div style="display:inline;">
            <span>
            </span>
            <span>
            </span>
        </div>  -->

        
        <footer class="footer" >
          <div class="container-fluid">
            <nav>
              <ul>
                
                <li>
                    <a href="">
                       About Us
                    </a>
                </li>
                <li>
                    <a href="">
                       Blog
                    </a>
                </li>
                <li>
                    <a href="">
                       FAQ
                    </a>
                </li>
              </ul>
            </nav>
            <div class="copyright">
              &copy; <script>document.write(new Date().getFullYear())</script> Modified by E-Master creator.
            </div>
          </div>
        </footer>
      </div>
    </div>
  </body>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>

  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../assets/js/plugins/bootstrap-switch.js"></script>

  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>

  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>

  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>

  <!-- Control Center for Paper Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.js?v=2.0.0" type="text/javascript"></script>
</html>