<?php
session_start();
ob_start();
if (!isset($_SESSION['accuname'])) 
{
     header("location:../index.php?mes=<h2>Please Login Here!</h2> ");
}
include ('db.php');
$uname = $_SESSION['accuname'];
 ?>
 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EMS Revise</title>

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
                        <a href="" class="active-menu-top"><i class="fa fa-edit" style="font-size:20px;color:red"></i>Revised <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                             <li>
                                <a href="edit_sehedule.php"class="active-menu"><i class="fa fa-desktop "></i>Edit Schedule  2 </a>
                            </li>
                            
                           
                        </ul>
                    </li>
                     
                    <li>
                        <a href="memo.php"><i class="fa fa-comments  " ></i> Update Memo </a>
                       </li>
                       <li>
                        <a href="profile.php" ><i class="fa fa-user-circle "></i>Profile </a>
                        
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
                        <h1 class="page-head-line">Schedule 2 Approval</h1>
                        <h1 class="page-subhead-line">Election Commisson's Schedule-02. Account Management System </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2">
                        </div>

                         <div class="col-md-8">
                       
                    
                
            <?php 
   
  
  $d = 2;

  $id = $_GET['id'];

 
  $A20111001 = (filter_var(($_GET['20111001']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  
 
  $A20111002 = (filter_var(($_GET['20111002']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  
  $A201110031 = (filter_var(($_GET['201110031']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201110032 = (filter_var(($_GET['201110032']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111101 = (filter_var(($_GET['20111101']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d); 
  $A20111201 = (filter_var(($_GET['20111201']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111202 = (filter_var(($_GET['20111202']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111203 = (filter_var(($_GET['20111203']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111301 = (filter_var(($_GET['20111301']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111302 = (filter_var(($_GET['20111302']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111303 = (filter_var(($_GET['20111303']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111401 = (filter_var(($_GET['20111401']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114021 = (filter_var(($_GET['201114021']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114022 = (filter_var(($_GET['201114022']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111403 = (filter_var(($_GET['20111403']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111404 = (filter_var(($_GET['20111404']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A2011140911 = (filter_var(($_GET['2011140911']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A2011140912 = (filter_var(($_GET['2011140912']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A2011140913 = (filter_var(($_GET['2011140913']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092 = ($_GET['201114092']);

  $A201114092A1 = (filter_var(($_GET['201114092A1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092A2 = (filter_var(($_GET['201114092A2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092B1 = (filter_var(($_GET['201114092B1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092B2 = (filter_var(($_GET['201114092B2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092B3 = (filter_var(($_GET['201114092B3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092C1 = (filter_var(($_GET['201114092C1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092C2 = (filter_var(($_GET['201114092C2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092C3 = (filter_var(($_GET['201114092C3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092C4 = (filter_var(($_GET['201114092C4']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092C5 = (filter_var(($_GET['201114092C5']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092C6 = (filter_var(($_GET['201114092C6']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092C7 = (filter_var(($_GET['201114092C7']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092D1 = (filter_var(($_GET['201114092D1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092D2 = (filter_var(($_GET['201114092D2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092D3 = (filter_var(($_GET['201114092D3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092D4 = (filter_var(($_GET['201114092D4']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092E1 = (filter_var(($_GET['201114092E1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092E2 = (filter_var(($_GET['201114092E2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092E3 = (filter_var(($_GET['201114092E3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092E4 = (filter_var(($_GET['201114092E4']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092F1 = (filter_var(($_GET['201114092F1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092F2 = (filter_var(($_GET['201114092F2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092F3 = (filter_var(($_GET['201114092F3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092F4 = (filter_var(($_GET['201114092F4']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092G1 = (filter_var(($_GET['201114092G1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092G2 = (filter_var(($_GET['201114092G2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092G3 = (filter_var(($_GET['201114092G3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092H1 = (filter_var(($_GET['201114092H1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092H2 = (filter_var(($_GET['201114092H2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092H3 = (filter_var(($_GET['201114092H3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092H4 = (filter_var(($_GET['201114092H4']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092H5 = (filter_var(($_GET['201114092H5']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092H6 = (filter_var(($_GET['201114092H6']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092H7 = (filter_var(($_GET['201114092H7']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092H8 = (filter_var(($_GET['201114092H8']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092I1 = (filter_var(($_GET['201114092I1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092I2 = (filter_var(($_GET['201114092I2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092I3 = (filter_var(($_GET['201114092I3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092I4 = (filter_var(($_GET['201114092I4']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092I5 = (filter_var(($_GET['201114092I5']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J1 = (filter_var(($_GET['201114092J1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J2 = (filter_var(($_GET['201114092J2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J3 = (filter_var(($_GET['201114092J3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J4 = (filter_var(($_GET['201114092J4']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J5 = (filter_var(($_GET['201114092J5']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J6 = (filter_var(($_GET['201114092J6']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J7 = (filter_var(($_GET['201114092J7']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J8 = (filter_var(($_GET['201114092J8']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J9 = (filter_var(($_GET['201114092J9']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J10 = (filter_var(($_GET['201114092J10']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J11 = (filter_var(($_GET['201114092J11']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A2011140931 = (filter_var(($_GET['2011140931']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A2011140932 = (filter_var(($_GET['2011140932']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A2011140933 = (filter_var(($_GET['2011140933']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111506 = (filter_var(($_GET['20111506']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20112001 = (filter_var(($_GET['20112001']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20112102 = (filter_var(($_GET['20112102']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20112103 = (filter_var(($_GET['20112103']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20112401 = (filter_var(($_GET['20112401']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);

  $query = "UPDATE schedule02 SET OC_20_1_1_1001 = '$A20111001',  
OC_20_1_1_1002 = '$A20111002',   
OC_20_1_1_1003_1 = '$A201110031',
OC_20_1_1_1003_2 = '$A201110032',
OC_20_1_1_1101 = '$A20111101', 
OC_20_1_1_1201 = '$A20111201',  
OC_20_1_1_1202 = '$A20111202', 
OC_20_1_1_1203 = '$A20111203',
OC_20_1_1_1301 = '$A20111301', 
OC_20_1_1_1302 = '$A20111302',
OC_20_1_1_1303 = '$A20111303',
OC_20_1_1_1401 = '$A20111401',  
OC_20_1_1_1402_1 = '$A201114021', 
OC_20_1_1_1402_2 = '$A201114022', 
OC_20_1_1_1403 = '$A20111403',
OC_20_1_1_1404 = '$A20111404',
OC_20_1_1_1409_1_1 = '$A2011140911',
OC_20_1_1_1409_1_2 = '$A2011140912', 
OC_20_1_1_1409_1_3 = '$A2011140913',
OC_20_1_1_1409_2 = '$A201114092',
OC_20_1_1_1409_2_A1 = '$A201114092A1', 
OC_20_1_1_1409_2_A2 = '$A201114092A2',
OC_20_1_1_1409_2_B1 = '$A201114092B1',
OC_20_1_1_1409_2_B2 = '$A201114092B2', 
OC_20_1_1_1409_2_B3 = '$A201114092B3',
OC_20_1_1_1409_2_C1 = '$A201114092C1',
OC_20_1_1_1409_2_C2 = '$A201114092C2',  
OC_20_1_1_1409_2_C3 = '$A201114092C3',
OC_20_1_1_1409_2_C4 = '$A201114092C4',
OC_20_1_1_1409_2_C5 = '$A201114092C5',
OC_20_1_1_1409_2_C6 = '$A201114092C6', 
OC_20_1_1_1409_2_C7 = '$A201114092C7', 
OC_20_1_1_1409_2_D1 = '$A201114092D1', 
OC_20_1_1_1409_2_D2 = '$A201114092D2', 
OC_20_1_1_1409_2_D3 = '$A201114092D3',  
OC_20_1_1_1409_2_D4 = '$A201114092D4', 
OC_20_1_1_1409_2_E1 = '$A201114092E1',  
OC_20_1_1_1409_2_E2 = '$A201114092E2', 
OC_20_1_1_1409_2_E3 = '$A201114092E3', 
OC_20_1_1_1409_2_E4 = '$A201114092E4',  
OC_20_1_1_1409_2_F1 = '$A201114092F1',  
OC_20_1_1_1409_2_F2 = '$A201114092F2', 
OC_20_1_1_1409_2_F3 = '$A201114092F3',
OC_20_1_1_1409_2_F4 = '$A201114092F4',
OC_20_1_1_1409_2_G1 = '$A201114092G1',
OC_20_1_1_1409_2_G2 = '$A201114092G2', 
OC_20_1_1_1409_2_G3 = '$A201114092G3', 
OC_20_1_1_1409_2_H1 = '$A201114092H1',  
OC_20_1_1_1409_2_H2 = '$A201114092H2',  
OC_20_1_1_1409_2_H3 = '$A201114092H3',
OC_20_1_1_1409_2_H4 = '$A201114092H4',  
OC_20_1_1_1409_2_H5 = '$A201114092H5',
OC_20_1_1_1409_2_H6 = '$A201114092H6', 
OC_20_1_1_1409_2_H7 = '$A201114092H7', 
OC_20_1_1_1409_2_H8 = '$A201114092H8',  
OC_20_1_1_1409_2_I1 = '$A201114092I1',  
OC_20_1_1_1409_2_I2 = '$A201114092I2', 
OC_20_1_1_1409_2_I3 = '$A201114092I3',
OC_20_1_1_1409_2_I4 = '$A201114092I4',
OC_20_1_1_1409_2_I5 = '$A201114092I5', 
OC_20_1_1_1409_2_J1 = '$A201114092J1',
OC_20_1_1_1409_2_J2 = '$A201114092J2', 
OC_20_1_1_1409_2_J3 = '$A201114092J3', 
OC_20_1_1_1409_2_J4 = '$A201114092J4', 
OC_20_1_1_1409_2_J5 = '$A201114092J5',   
OC_20_1_1_1409_2_J6 = '$A201114092J6', 
OC_20_1_1_1409_2_J7 = '$A201114092J7',  
OC_20_1_1_1409_2_J8 = '$A201114092J8',
OC_20_1_1_1409_2_J9 = '$A201114092J9', 
OC_20_1_1_1409_2_J10 = '$A201114092J10',  
OC_20_1_1_1409_2_J11 = '$A201114092J11',
OC_20_1_1_1409_3_1 = '$A2011140931', 
OC_20_1_1_1409_3_2 = '$A2011140932', 
OC_20_1_1_1409_3_3 = '$A2011140933',  
OC_20_1_1_1506 = '$A20111506',  
OC_20_1_1_2001 = '$A20112001',  
OC_20_1_1_2102 = '$A20112102',  
OC_20_1_1_2103 = '$A20112103', 
OC_20_1_1_2401 = '$A20112401',
REVISED = 'Revised',
FINISH = 'Done' WHERE ID ='$id'";

$qr=mysqli_query($db,$query);

 if($qr==true){
    echo "updated";

 }
 else
 {
    echo "not";
 }



            ?>
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
       Copyright &copy; 2019 Election Commission of Sri Lanka, Developed By: M.Arulkumaran, in association with ElectionsIT</a>
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
    <script>
        $(".js-select2").each(function(){
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });


            $(".js-select2").each(function(){
                $(this).on('select2:close', function (e){
                    if($(this).val() == "Please chooses") {
                        $('.js-show-service').slideUp();
                    }

                    
                    else {
                        $('.js-show-service').slideUp();
                        $('.js-show-service').slideDown();
                    }
                });
            });
        })
    </script>
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
