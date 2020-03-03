<?php
session_start();
ob_start();
if (!isset($_SESSION['acuname'])) 
{
     header("location:../index.php?mes=<h2>Please Login Here!</h2> ");
}
include ('db.php');
$uname = $_SESSION['acuname'];
 ?>
 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EMS Form View</title>

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
                                <?php echo $ress['DISTRICT']; ?> District
                            <br />
                                <small>Welcome <?php echo $ress['NAME']; ?></small>
                            </div>
                        </div>

                    </li>


                       <li>
                        <a href="index.php" ><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a  href="approval.php" class="active-menu-top" ><i class="fa fa-thumbs-up "></i>Approval  </a>
                          
                         
                    </li>
                     <li>
                        <a href="report.php"><i class="fa fa-calculator "></i>Monthly Report </a>
                        
                    </li>
                        <li>
                        <a href="elereport.php"><i class="fa fa-calculator"></i>Election Report </a>
                        
                    </li>
                    <li>
                        <a href="remaining_provision_reports.php" ><i class="fa fa-calculator"></i>Remaining Provision Reports</a>
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
                        <h1 class="page-subhead-line">Waiting for your approval  </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">

                        <?php

                        $id=$_GET['id'];

                          $query = "SELECT * FROM schedule02_temp WHERE ID = $id";

                         $sql=mysqli_query($db,$query);
                            $res=mysqli_fetch_array($sql);
                            if($res['DISTRICT'] != $ress['DISTRICT'] ) {

                                header("location:../index.php?mes=<h2>Not Access!</h2> ");

                            }

                        $query = "SELECT * FROM schedule02_temp WHERE ID = $id";

                    $sql=mysqli_query($db,$query);
                    $res=mysqli_fetch_array($sql);

                    $query2 = "SELECT OC_20_1_1_1001+OC_20_1_1_1002+
OC_20_1_1_1003_1+
OC_20_1_1_1003_2+
OC_20_1_1_1101+
OC_20_1_1_1201+
OC_20_1_1_1202+
OC_20_1_1_1203+
OC_20_1_1_1301+
OC_20_1_1_1302+
OC_20_1_1_1303+
OC_20_1_1_1401+
OC_20_1_1_1402_1+
OC_20_1_1_1402_2+
OC_20_1_1_1403+
OC_20_1_1_1404+
OC_20_1_1_1409_1_1+
OC_20_1_1_1409_1_2+
OC_20_1_1_1409_1_3+OC_20_1_1_1409_2_A1+OC_20_1_1_1409_2_A2 +OC_20_1_1_1409_2_B1+OC_20_1_1_1409_2_B2+OC_20_1_1_1409_2_B3+OC_20_1_1_1409_2_C1+OC_20_1_1_1409_2_C2+OC_20_1_1_1409_2_C3+OC_20_1_1_1409_2_C4+OC_20_1_1_1409_2_C5+OC_20_1_1_1409_2_C6+OC_20_1_1_1409_2_C7+OC_20_1_1_1409_2_D1+OC_20_1_1_1409_2_D2+OC_20_1_1_1409_2_D3+OC_20_1_1_1409_2_D4+OC_20_1_1_1409_2_E1+OC_20_1_1_1409_2_E2+OC_20_1_1_1409_2_E3+OC_20_1_1_1409_2_E4+OC_20_1_1_1409_2_F1+OC_20_1_1_1409_2_F2+OC_20_1_1_1409_2_F3+OC_20_1_1_1409_2_F4+OC_20_1_1_1409_2_G1+OC_20_1_1_1409_2_G2+OC_20_1_1_1409_2_G3+OC_20_1_1_1409_2_H1+OC_20_1_1_1409_2_H2+OC_20_1_1_1409_2_H3+OC_20_1_1_1409_2_H4+OC_20_1_1_1409_2_H5+OC_20_1_1_1409_2_H6+OC_20_1_1_1409_2_H7+OC_20_1_1_1409_2_H8+OC_20_1_1_1409_2_I1+OC_20_1_1_1409_2_I2+OC_20_1_1_1409_2_I3+OC_20_1_1_1409_2_I4+OC_20_1_1_1409_2_I5+OC_20_1_1_1409_2_J1+OC_20_1_1_1409_2_J2+OC_20_1_1_1409_2_J3+OC_20_1_1_1409_2_J4+OC_20_1_1_1409_2_J5+OC_20_1_1_1409_2_J6+OC_20_1_1_1409_2_J7+OC_20_1_1_1409_2_J8+OC_20_1_1_1409_2_J9
+OC_20_1_1_1409_2_J10
+OC_20_1_1_1409_2_J11+OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401 as total  FROM schedule02_temp Where ID = $id";

                    $sql2=mysqli_query($db,$query2);
                    $res2=mysqli_fetch_array($sql2);

                    $district =  $res['DISTRICT'];
                    $date =  $res['U_DATE'];
                    $time =  $res['U_TIME'];

                         ?>

                         <div class="col-md-10"  >
                     <!--    Context Classes  -->
                    <div class="panel panel-default" id="example"   >
                       
                        <div class="panel-heading">

                           <h3><b> Monthly Report </h3>
                           <div class="form-group row">
                            <div class="col-md-3"><?php echo "District:- $district"; ?></div>
                            <div class="col-md-5"></div>
                            <div class="col-md-4"><?php echo "Date :- $date"; ?></div></b>
                            </div>
                        
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php if ($res['OC_20_1_1_1409_2'] == "Select Election Type") {
                                   
                                 ?>

                                  <table  class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            
                                            <th><center><u>Object Code</u></center></th>
                                            <th><center><u>Description</u></center></th>
                                            <th><center><u>Price Rs. Cts.</u></center></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <tr >
                                        <td>OC_20_1_1_1001</td>
                                        <td>Salaries & Wages</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1001'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1002</td>
                                        <td>Overtime & Holiday Payment</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1002'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1003_1</td>
                                        <td>Other Allowance</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1003_1'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1003_2</td>
                                        <td>Extract Allowance</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1003_2'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1101</td>
                                        <td>Travelling - Domestic</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1101'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1201</td>
                                        <td>Stationery & Office Requisites</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1201'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1202</td>
                                        <td>Fuel and Lubricant Oil</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1202'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1203</td>
                                        <td>Diets and Uniforms</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1203'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1301</td>
                                        <td>Vehicle Repairs</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1301'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1302</td>
                                        <td>Plant Machinery & Equipment Repairs</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1302'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1303</td>
                                        <td>Building and Structure Repairs (small scale repairs only)</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1303'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1401</td>
                                        <td>Transport Costs</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1401'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1402_1</td>
                                        <td>Communication charges</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1402_1'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1402_2</td>
                                        <td>Postal charges</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1402_2'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1403</td>
                                        <td>Electricity & Water</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1403'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1404</td>
                                        <td>Rents & Local Taxes</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1404'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_1_1</td>
                                        <td>Enumeration (Previous Year)</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_1_1'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_1_2</td>
                                        <td>Enumeration (Current Year)</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_1_2'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_1_3</td>
                                        <td>Voter Awareness Programmes </td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_1_3'], 2) ?></td></tr>
                                        <td>OC_20_1_1_1409_3_1</td>
                                        <td>Cleaning Service</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_3_1'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_3_2</td>
                                        <td>Security Service</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_3_2'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_3_3</td>
                                        <td>Extra</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_3_3'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1506</td>
                                        <td>Property Loan Interest</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1506'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_2001</td>
                                        <td>Rehabilitation & Improvement of Building</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_2001'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_2102</td>
                                        <td>Acquisition of Furniture & Office Equipment</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_2102'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_2103</td>
                                        <td>Acquisition of Plants & Machinery</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_2103'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_2401</td>
                                        <td>Training & Capacity  Building</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_2401'], 2) ?></td></tr>
                                        <tr class="info" >
                                        <td></td>
                                        <tr class="danger" >
                                        <td colspan="2" align="center"><b>Grand Total</td>
                                        <td align="right"> <b> <?php echo number_format($res2['total'], 2) ?> </b></td></tr>
                                        
                                        

                                    
                                    </tbody>

                                </table>

                             <?php } else { ?>
                                <table  class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            
                                            <th><center><u>Object Code</u></center></th>
                                            <th><center><u>Description</u></center></th>
                                            <th><center><u>Price Rs. Cts.</u></center></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                         <tr >
                                        <td>OC_20_1_1_1001</td>
                                        <td>Salaries & Wages</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1001'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1002</td>
                                        <td>Overtime & Holiday Payment</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1002'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1003_1</td>
                                        <td>Other Allowance</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1003_1'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1003_2</td>
                                        <td>Extract Allowance</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1003_2'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1101</td>
                                        <td>Travelling - Domestic</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1101'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1201</td>
                                        <td>Stationery & Office Requisites</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1201'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1202</td>
                                        <td>Fuel and Lubricant Oil</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1202'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1203</td>
                                        <td>Diets and Uniforms</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1203'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1301</td>
                                        <td>Vehicle Repairs</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1301'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1302</td>
                                        <td>Plant Machinery & Equipment Repairs</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1302'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1303</td>
                                        <td>Building and Structure Repairs (small scale repairs only)</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1303'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1401</td>
                                        <td>Transport Costs</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1401'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1402_1</td>
                                        <td>Communication charges</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1402_1'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1402_2</td>
                                        <td>Postal charges</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1402_2'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1403</td>
                                        <td>Electricity & Water</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1403'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1404</td>
                                        <td>Rents & Local Taxes</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1404'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_1_1</td>
                                        <td>Enumeration (Previous Year)</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_1_1'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_1_2</td>
                                        <td>Enumeration (Current Year)</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_1_2'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_1_3</td>
                                        <td>Voter Awareness Programmes </td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_1_3'], 2) ?></td></tr>
                                        <tr class="danger" >
                                        <td><b>OC_20_1_1_1409_2</b></td>
                                        <td><b>Conducting Elections</b></td>
                                        <td align="right"><b><?php echo $res['OC_20_1_1_1409_2'] ?></b></td></tr>
                                        <tr >
                                         <tr >
                                        <td>OC_20_1_1_1409_2_1-A</td>
                                        <td>Casual Labour</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_A1'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_1-B</td>
                                        <td>Pentioners (Contract Basis)</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_A2'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_2-A</td>
                                        <td>Holiday Payment (Executive)</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_B1'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_2-B</td>
                                        <td>Holiday Payment (Non Executive)</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_B2'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_2-C</td>
                                        <td>Overtime</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_B3'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_3-A</td>
                                        <td>Ballot Preparation and Issuing</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_C1'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_3-B</td>
                                        <td>Conducting Election Classes</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_C2'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_3-C</td>
                                        <td>Ballot Checking</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_C3'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_3-D</td>
                                        <td>Issuing Postal Votes</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_C4'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_3-E</td>
                                        <td>Certifying Postal Votes</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_C5'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_3-F</td>
                                        <td>Election Claims (Counting/ Day duty)</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_C6'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_3-G</td>
                                        <td>Other</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_C7'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_4-A</td>
                                        <td>Executives</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_D1'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_4-B</td>
                                        <td>Grama Niladhari</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_D2'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_4-C</td>
                                        <td>Drivers and Assistants</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_D3'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_4-D</td>
                                        <td>Other</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_D4'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_5-A</td>
                                        <td>Election Staff</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_E1'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_5-B</td>
                                        <td>Grama Niladhari</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_E2'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_5-C</td>
                                        <td>Drivers & Others (helper / cleaner)</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_E3'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_5-D</td>
                                        <td>Other</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_E4'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_6-A</td>
                                        <td>Goods Transport</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_F1'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_6-B</td>
                                        <td>Officers Transport (C.T.B)</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_F2'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_6-C</td>
                                        <td>Officers Transport ( Private Vehicle)</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_F3'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_6-D</td>
                                        <td>Voters Transport</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_F4'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_7-A</td>
                                        <td>Stationary</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_G1'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_7-B</td>
                                        <td>Office Requisities</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_G2'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_7-C</td>
                                        <td>Fuel and Oil</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_G3'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_8-A</td>
                                        <td>Temporary Shed for Polling Booth</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_H1'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_8-B</td>
                                        <td>Temporary Shed for Counting</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_H2'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_8-C</td>
                                        <td>Building Repair</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_H3'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_8-D</td>
                                        <td>Vehicle Repair</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_H4'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_8-E</td>
                                        <td>Office Equipments Repairs</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_H5'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_8-F</td>
                                        <td>Machinary Repairs</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_H6'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_8-G</td>
                                        <td>Ballot Box Repairs</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_H7'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_8-H</td>
                                        <td>Other repairs</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_H8'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_9-A</td>
                                        <td>Ballot Checking</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_I1'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_9-B</td>
                                        <td>Issuing Postal Votes</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_I2'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_9-C</td>
                                        <td>Issuing Ballots and Ballots Boxes</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_I3'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_9-D</td>
                                        <td>Election and Counting</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_I4'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_9-E</td>
                                        <td>Other</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_I5'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_10-A</td>
                                        <td>Postal Fees</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_J1'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_10-B</td>
                                        <td>Temporary Connection of Telephone</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_J2'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_10-C</td>
                                        <td>Temporary Connection of Electricity</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_J3'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_10-D</td>
                                        <td>Temporary Connection of Water</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_J4'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_10-E</td>
                                        <td>Accomandation</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_J5'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_10-F</td>
                                        <td>Observation of Election (Domestic)</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_J6'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_10-G</td>
                                        <td>Observation of Election (Foreign)</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_J7'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_10-H</td>
                                        <td>Grama Niladari Payment</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_J8'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_10-I</td>
                                        <td>Building Rent</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_J9'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_10-J</td>
                                        <td>Printing</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_J10'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2_10-K</td>
                                        <td>Other</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_2_J11'], 2) ?></td></tr>
                                        <td>OC_20_1_1_1409_3_1</td>
                                        <td>Cleaning Service</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_3_1'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_3_2</td>
                                        <td>Security Service</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_3_2'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_3_3</td>
                                        <td>Extra</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1409_3_3'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1506</td>
                                        <td>Property Loan Interest</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_1506'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_2001</td>
                                        <td>Rehabilitation & Improvement of Building</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_2001'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_2102</td>
                                        <td>Acquisition of Furniture & Office Equipment</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_2102'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_2103</td>
                                        <td>Acquisition of Plants & Machinery</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_2103'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_2401</td>
                                        <td>Training & Capacity  Building</td>
                                        <td align="right"><?php echo number_format(
$res['OC_20_1_1_2401'], 2) ?></td></tr>
                                       <tr class="info" >
                                        <td></td>
                                        <td  align="center">Total</td>
                                        <td align="right"><?php echo number_format($res2['total'], 2) ?></td></tr>
                                        
                                        

                                    
                                    </tbody>

                                </table>
                            <?php } ?>
                               
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
                     <center> <input class="btn btn-primary" type="button" onclick="printDiv('example')" value="Print Data" /> </center>
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
    
    
 <script>
   function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
    </script>


</body>
</html>
