<?php
session_start();
ob_start();
if (!isset($_SESSION['cfouname'])) 
{
     header("location:../index.php?mes=<h2>Please Login Here!</h2> ");
}
include ('db.php');
$uname = $_SESSION['cfouname'];
 ?>
 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EMS Profile</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../user/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../user/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../user/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../user/vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../user/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../user/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../user/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../user/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../user/vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../user/css/util.css">
    <link rel="stylesheet" type="text/css" href="../user/css/main.css">
<!--===============================================================================================-->
 
   
</head>
<body>
    <div id="wrapper">
       <?php include 'navbar.php'; 

       $query = "SELECT * FROM login WHERE UNAME = '$uname'";
       $sql=mysqli_query($db,$query);
        $res=mysqli_fetch_array($sql);
                
        ?>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/logo.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php echo $res['DISTRICT']; ?> 
                            <br />
                                <small>Welcome <?php echo $res['NAME']; ?></small>
                            </div>
                                </div>

                    </li>


                     <li>
                        <a href="index.php" ><i class="fa fa-dashboard " ></i>Dashboard</a>
                    </li>
                    <li>
                        <a href=""  ><i class="fa fa-desktop "></i>Expenses Reporting <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level ">
                            <li>
                                <a href="monthly_report.php"><i class="fa fa-calculator"></i>Monthly Report</a>
                            </li>
                            <li>
                                <a href="yearly_report.php"><i class="fa fa-calculator"></i>Yearly Report</a>
                            </li>
                             <li>
                                <a href="election_report.php"><i class="fa fa-calculator"></i>Election Report</a>
                            </li>
                           
                           
                        </ul>
                    </li>
                     <li>
                        <a href=""><i class="fa fa-dollar "></i>Allocation <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="assign_allocation.php"style=" color:red"><i class="fa fa-line-chart"></i>Initial Allocation</a>
                            </li>
                             <li>
                            <a href="code-wise.php" ><i class="fa fa-line-chart"></i>Code-wise Transection</a>
                            </li>
                            <li>
                                <a href="supplementary_allocation.php"><i class="fa fa-line-chart"></i>Additional Allocation</a>
                            </li>
                           
                            <li>
                                <a href="balance_report.php"><i class="fa fa-calculator"></i>Cumulative Allocation Reports</a>
                            </li>
                             <li>
                                <a href="remaining_provision_reports.php"><i class="fa fa-calculator"></i>Remaining Provision Reports</a>
                            </li>
                             <li>
                                <a href="allocation_destribution_reports.php"><i class="fa fa-calculator"></i>Allocation Distribution Reports</a>
                            </li>

                             
                           
                        </ul>
                    </li>
                    <li>
                        <a href="allocattion_history.php" ><i class="fa fa-history "></i>Allocation History</a>
                    </li>

                    <li>
                        <a href="login_history.php"><i class="fa fa-history "></i>Login History</a>
                    </li>
                    <li>
                        <a href="profile.php" class="active-menu-top" ><i class="fa fa-user-circle "></i>Profile </a>
                        
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
                        <h1 class="page-head-line">Profile</h1>
                        <h1 class="page-subhead-line">Edit Your Profile </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">

                        <?php 
                         
                        if(isset($_GET["mes"]))
                        {
                        echo $_GET["mes"];
                        }
                        else {

                        $id=$res['ID'];;

                        $query = "SELECT * FROM login WHERE ID = $id";

                         $sql=mysqli_query($db,$query);
                        $res=mysqli_fetch_array($sql);

                       
                        ?>
                        <div class="panel panel-info">
                        <div class="panel-heading">
                           BASIC FORM
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="profile.php" >
                                        <div class="form-group">
                                            <label>Enter Full Name</label>
                                            <input class="form-control" value="<?php echo $res['NAME'] ?>" type="text" name="name" >
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Enter User Name</label>
                                            <input class="form-control" value="<?php echo $res['UNAME'] ?>" type="text" name="uname" readonly>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Password</label>
                                            <input class="form-control" value="<?php echo $res['PASSWORD'] ?>"  type="password" name="password">
                                            
                                        </div>
                                                                             
                                            <div class="form-group">
                                            <label>User Type</label>
                                            <select class="form-control"  name="user_type" readonly> 
                                                <option><?php echo $res['USER_TYPE'] ?></option>
                                                

                                            </select>
                                        </div>
                                            <div class="form-group">
                                            <label>District</label>
                                            <select class="form-control"  name="district" readonly>
                                            <option><?php echo $res['DISTRICT'] ?></option> 
                                                
                                                
                                            </select>
                                        </div>
                                  
                                 
                                        <button type="submit" class="btn btn-info" name="submit">Update</button>

                                    </form>
                                    <?php

                                    if (isset($_POST['submit'])) {
                                        $name = $_POST['name'];
                                        $password = $_POST['password'];
                                        

                                        $query = "UPDATE login SET NAME = '$name', PASSWORD = '$password' WHERE ID = '$id';";

                                        $mesg ="<h2>$name Detailes are Updated...</h2>";
                                            $qr=mysqli_query($db,$query);
                                         if ($qr == true)
                                        {
    
                                            header("location:profile.php?mes=$mesg");

                                        }
                                        else
                                        {
    
                                         }


                                        
                                        }
                                    }


                                     ?>

                           
                    </div>
                </div>
                       
                         
                   

            
  
        </div>


                
                    
                    
            
           
                        </div>
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
                </div>
              

        
        </div>


            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec" align="center">
        Copyright  &copy;  2019 Election Commission of Sri Lanka, Developed By : M.Arulkumaran, in association with ElectionsIT</a>
    </div>
    <?php ob_end_flush(); ?>
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

        <script src="assets/js/jquery.min.js"></script>


            <script src="../user/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="../user/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="../user/vendor/bootstrap/js/popper.js"></script>
    <script src="../user/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="../user/vendor/select2/select2.min.js"></script>
   
<!--===============================================================================================-->
    <script src="../user/vendor/daterangepicker/moment.min.js"></script>
    <script src="../user/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="../user/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="../user/vendor/noui/nouislider.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    



    


</body>
</html>
