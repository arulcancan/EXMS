
<?php 
session_start();
ob_start();
if (!isset($_SESSION['aduname'])) 
{
     header("location:../index.php?mes=<h2>Please Login Here!</h2> ");
}
include 'db.php';
$uname = $_SESSION['aduname'];
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EMS Admin Dashboard</title>


    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/fontawesome.min.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
     <link rel="icon" type="image/png" href="../user/images/icons/favicon.ico"/>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 





</head>
<body>
    <div id="wrapper">
         <?php include 'navbar.php'; 
         $queryy = "SELECT * FROM login WHERE UNAME = '$uname'";
       $sqll=mysqli_query($db,$queryy);
        $ress=mysqli_fetch_array($sqll);
                
        ?>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/logo.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php echo $ress['DISTRICT']; ?> 
                            <br />
                                <small>Welcome <?php echo $ress['NAME']; ?></small>
                            </div>
                        </div>

                    </li>


                   <li>
                        <a href="index.php" class="active-menu-top"><i class="fa fa-dashboard " ></i>Dashboard</a>
                    </li>
                   
                     
                    <li>
                        <a href=""><i class="fa fa-sitemap " ></i> Administration <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_user.php"><i class="fa fa-user"></i>Create User</a>
                            </li>
                             <li>
                                <a href="edit_user.php"><i class="fa fa-users"></i>Edit User</a>
                            </li>
                            
                             
                </ul>
                </li>
                <li>
                        <a href="login_history.php"><i class="fa fa-history "></i>Login History</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-power-off "></i>Logout</a>
                    </li>
                

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">ADMIN DASHBOARD</h1>
                        <h1 class="page-subhead-line">USER Login History</h1>
                        <?php
                        $date = date("d/F/Y");
                        $month = date("F");
                        $year = date("Y");

                        $cur = "SELECT COUNT(*) FROM login_history WHERE INDATE = '$date'";
                        $today = mysqli_query($db,$cur);
                        $res=mysqli_fetch_array($today);

                        $mon = "SELECT COUNT(*) FROM login_history WHERE INDATE LIKE '%September%'";
                        $mon1 = mysqli_query($db,$mon);
                        $mon2=mysqli_fetch_array($mon1);

                        $tot = "SELECT COUNT(*) FROM login";
                        $to =  mysqli_query($db,$tot);
                         $users=mysqli_fetch_array($to);


                        $yea = "SELECT COUNT(*) FROM login_history WHERE INDATE LIKE '%$year%'";
                        $yea1 = mysqli_query($db,$yea);
                        $yea2=mysqli_fetch_array($yea1);
                         ?>
                        

                        <div class="row">
                      <div class="col-md-12">
                      <div class="panel panel-default zoomIn animated">
                        <div class="panel-heading">
                          User Log
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3 ">
                      <div class="alert alert-info text-center">
                            <i style="font-size: 8rem;" class="large material-icons">account_circle</i>
                            <h3><?php echo "$res[0]"; ?> Visit</h3>
                            Current Live Users
                        </div>
                    </div>
              <div class="col-md-3 ">
                      <div class="alert alert-success text-center">
                            <i style="font-size: 8rem;" class="large material-icons">supervisor_account</i>
                            <h3><?php echo $mon2['COUNT(*)']; ?> Visit</h3>
                      Login within a Month
                        </div>
                    </div>
               <div class="col-md-3 ">
                      <div class="alert alert-warning text-center">
                           <i style="font-size: 8rem;" class="large material-icons">restore</i>
                            <h3><?php echo "$yea2[0]"; ?> Visit</h3>
                        Yearly login Accounts
                        </div>
                    </div>
               <div class="col-md-3 ">
                      <div class="alert alert-danger text-center">
                            <i style="font-size: 8rem;" class="large material-icons">present_to_all</i>
                            <h3><?php echo "$users[0]"; ?> Users Available</h3>
                             Total usears 
                        </div>
                    </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        </div>

                        

                        

                    </div>
                </div>
                <!-- /. ROW  -->
              
                <!--/.ROW-->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec" align="center">
        Copyright &copy; 2019 Election Commission of Sri Lanka, Developed By: M.Arulkumaran, in association with ElectionsIT</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
    


</body>
</html>
