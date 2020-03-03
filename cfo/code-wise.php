<?php 
session_start();
ob_start();
if (!isset($_SESSION['cfouname'])) 
{
     header("location:../index.php?mes=<h2>Please Login Here!</h2> ");
}
include 'db.php';
$uname = $_SESSION['cfouname'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EMS Codew-wise</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <link rel="icon" type="image/png" href="../user/images/icons/favicon.ico"/>
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="../user/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
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
                        <a href="#"  ><i class="fa fa-desktop "></i>Expenses Reporting <span class="fa arrow"></span></a>
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
                         <a href="" class="active-menu-top"><i class="fa fa-dollar "></i>Allocation <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level collapse in" >
                            <li>
                                <a href="assign_allocation.php" style=" color:red"><i class="fa fa-line-chart"></i>Initial Allocation</a>
                            </li>
                            <li>
                            <a href="code-wise.php"  class="active-menu"><i class="fa fa-line-chart"></i>Code-wise Transection</a>
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

                    <li>
                        <a href="allocattion_history.php" ><i class="fa fa-history "></i>Allocation History</a>
                    </li>

                    <li>
                        <a href="login_history.php"><i class="fa fa-history "></i>Login History</a>
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
                        <h1 class="page-head-line">Code wise transaction for secretariat account </h1>
                        <h1 class="page-subhead-line"> Enter the amount and submit object code wise to Add & Deduct <br><br>
                          <ul>
             </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                    
            <?php
            
          
                           
                            $districts="Election Secretariat";
                             $year = date("Y");

            $query = "SELECT DISTRICT, SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
  SUM(OC_20_1_1_1002) as 'sumOC_20_1_1_1002',
  SUM(OC_20_1_1_1003_1) as 'sumOC_20_1_1_1003_1',
  SUM(OC_20_1_1_1003_2) as 'sumOC_20_1_1_1003_2',
  SUM(OC_20_1_1_1101) as 'sumOC_20_1_1_1101',
  SUM(OC_20_1_1_1201) as 'sumOC_20_1_1_1201',
  SUM(OC_20_1_1_1202) as 'sumOC_20_1_1_1202',
  SUM(OC_20_1_1_1203) as 'sumOC_20_1_1_1203',
  SUM(OC_20_1_1_1301) as 'sumOC_20_1_1_1301',
  SUM(OC_20_1_1_1302) as 'sumOC_20_1_1_1302',
  SUM(OC_20_1_1_1303) as 'sumOC_20_1_1_1303',
  SUM(OC_20_1_1_1401) as 'sumOC_20_1_1_1401',
  SUM(OC_20_1_1_1402_1) as 'sumOC_20_1_1_1402_1',
  SUM(OC_20_1_1_1402_2) as 'sumOC_20_1_1_1402_2',
  SUM(OC_20_1_1_1403) as 'sumOC_20_1_1_1403',
  SUM(OC_20_1_1_1404) as 'sumOC_20_1_1_1404',
  SUM(OC_20_1_1_1409_1_1) as 'sumOC_20_1_1_1409_1_1',
  SUM(OC_20_1_1_1409_1_2) as 'sumOC_20_1_1_1409_1_2',
  SUM(OC_20_1_1_1409_1_3) as 'sumOC_20_1_1_1409_1_3',
  SUM(OC_20_1_1_1409_2) as 'sumOC_20_1_1_1409_2',
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT = '$districts' AND U_DATE LIKE '%$year%'  ";
   $sql=mysqli_query($db,$query);
   $res=mysqli_fetch_array($sql);

                
            

             ?>
        <h4> Location <b><u><?php echo $res['DISTRICT']  ?></u></b></h4><br>
             <form class="" method="post" action="allocation_update.php">
                <input type="hidden" name="district" value="<?php echo $res['DISTRICT']  ?>">
          

            <table class="table table-striped table-bordered table-hover" style="width: 100%">
                                    <thead>
                                        <tr>
                                            
                                            <th><u><center>Object Code</center></u></th>
                                            
                                            <th><u><center>Net Provision</center></u></th>
                                            
                                        
                                        <th><u> <center>Add Amount</center></u></th>
                                        <th><u> <center>Deduct Amount</center> </u></th>
                                        <th><u> <center>Update</center> </u></th>
                                    </tr>
                                    </thead>
                                     <tbody>
                                       
                                        <tr >
                                        <td>OC_20_1_1_1001</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1001'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1001SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1001CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_1001UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1002</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1002'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1002SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1002CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_1002UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1003_1</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1003_1'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1003_1SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1003_1CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_1003_1UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1003_2</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1003_2'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1003_2SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1003_2CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_1003_2UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1101</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1101'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1101SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1101CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_1101UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1201</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1201'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1201SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1201CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_1201UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1202</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1202'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1202SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1202CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_1202UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1203</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1203'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1203SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1203CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_1203UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1301</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1301'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1301SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1301CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_1301UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1302</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1302'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1302SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1302CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_1302UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1303</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1303'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1303SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1303CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_1303UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1401</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1401'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1401SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1401CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_1401UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1402_1</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1402_1'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1402_1SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1402_1CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_1402_1UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1402_2</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1402_2'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1402_2SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1402_2CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_1402_2UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1403</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1403'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1403SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1403CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_1403UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1404</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1404'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1404SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1404CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_1404UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_1_1</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1409_1_1'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1409_1_1SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1409_1_1CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_1409_1_1UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_1_2</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1409_1_2'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1409_1_2SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1409_1_2CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_1409_1_2UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_1_3</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1409_1_3'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1409_1_3SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1409_1_3CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_1409_1_3UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1409_2'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1409_2SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1409_2CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_1409_2UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_3_1</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1409_3_1'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1409_3_1SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1409_3_1CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_1409_3_1UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_3_2</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1409_3_2'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1409_3_2SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1409_3_2CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_1409_3_2UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_3_3</td>
                                       
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1409_3_3'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1409_3_3SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1409_3_3CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_1409_3_3UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1506</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1506'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1506SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_1506CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_1506UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_2001</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_2001'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_2001SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_2001CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_2001UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_2102</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_2102'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_2102SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_2102CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_2102UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_2103</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_2103'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_2103SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_2103CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_2103UP"> </td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_2401</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_2401'], 2) ?></td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_2401SUP"> </td>
                                        <td align="center"> <input  type="text" name="OC_20_1_1_2401CUT"> </td>
                                        <td align="center"> <input  type="submit" class="btn btn-warning" name="OC_20_1_1_2401UP"> </td>
                                    </tr>
                                       
                                        

                                    
                                    </tbody>

                                </table>

                            </form>
         


                        

        </div>


            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
     <?php ob_end_flush(); ?>
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
