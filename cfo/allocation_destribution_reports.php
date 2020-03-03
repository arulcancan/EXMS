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
    <title>EMS Allocation Distribution </title>



    <!-- BOOTSTRAP STYLES-->
    <link href="assets/bootstrap.css" rel="stylesheet" />
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
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
    .scrollable {
        height: 600px
        width: 100%;
        overflow: scroll;
    }
</style>



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
                        <a href="" class="active-menu-top"><i class="fa fa-dollar "></i>Allocation <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level collapse in" >
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
                                <a href="allocation_destribution_reports.php" class="active-menu"><i class="fa fa-calculator"></i>Allocation Distribution Reports</a>
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
                        <h1 class="page-head-line">Allocation Distribution </h1>
                        <h1 class="page-subhead-line">Up to date Allocation Destribution for all district and Head office  </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        
                  
            <?php 
             $year = date("Y");

$dis0 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%' ";

                $sql0=mysqli_query($db,$dis0);
                $a=mysqli_fetch_array($sql0);
     

$dis1 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Head Office' AND U_DATE LIKE '%$year%' ";

                $sql1=mysqli_query($db,$dis1);
                $a1=mysqli_fetch_array($sql1);


                $dis2 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Colombo' AND U_DATE LIKE '%$year%' ";

                $sql2=mysqli_query($db,$dis2);
                $b1=mysqli_fetch_array($sql2);

                $dis3 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Gampaha' AND U_DATE LIKE '%$year%' ";

                $sql3=mysqli_query($db,$dis3);
                $c1=mysqli_fetch_array($sql3);

                $dis4 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Kalutara' AND U_DATE LIKE '%$year%' ";

                $sql4=mysqli_query($db,$dis4);
                $d1=mysqli_fetch_array($sql4);

                $dis5 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Kandy' AND U_DATE LIKE '%$year%' ";

                $sql5=mysqli_query($db,$dis5);
                $e1=mysqli_fetch_array($sql5);

                $dis6 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Matale' AND U_DATE LIKE '%$year%' ";

                $sql6=mysqli_query($db,$dis6);
                $f1=mysqli_fetch_array($sql6);

                $dis7 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Nuwara Eliya' AND U_DATE LIKE '%$year%' ";

                $sql7=mysqli_query($db,$dis7);
                $g1=mysqli_fetch_array($sql7);

                $dis8 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Galle' AND U_DATE LIKE '%$year%' ";

                $sql8=mysqli_query($db,$dis8);
                $h1=mysqli_fetch_array($sql8);

                $dis9 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Matara' AND U_DATE LIKE '%$year%' ";

                $sql9=mysqli_query($db,$dis9);
                $i1=mysqli_fetch_array($sql9);

                $dis10 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Hambantota' AND U_DATE LIKE '%$year%' ";

                $sql10=mysqli_query($db,$dis10);
                $j1=mysqli_fetch_array($sql10);

                $dis11 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Jaffna' AND U_DATE LIKE '%$year%' ";

                $sql11=mysqli_query($db,$dis11);
                $k1=mysqli_fetch_array($sql11);

                $dis12 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Kilinochchi' AND U_DATE LIKE '%$year%' ";

                $sql12=mysqli_query($db,$dis12);
                $l1=mysqli_fetch_array($sql12);

                $dis13 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Mannar' AND U_DATE LIKE '%$year%' ";

                $sql13=mysqli_query($db,$dis13);
                $m1=mysqli_fetch_array($sql13);

                $dis14 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Vavuniya' AND U_DATE LIKE '%$year%' ";

                $sql14=mysqli_query($db,$dis14);
                $n1=mysqli_fetch_array($sql14);

                $dis15 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Mullaitivu' AND U_DATE LIKE '%$year%' ";

                $sql15=mysqli_query($db,$dis15);
                $o1=mysqli_fetch_array($sql15);

                $dis16 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Batticaloa' AND U_DATE LIKE '%$year%' ";

                $sql16=mysqli_query($db,$dis16);
                $p1=mysqli_fetch_array($sql16);

                $dis17 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Ampara' AND U_DATE LIKE '%$year%' ";

                $sql17=mysqli_query($db,$dis17);
                $q1=mysqli_fetch_array($sql17);

                $dis18 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Trincomalee' AND U_DATE LIKE '%$year%' ";

                $sql18=mysqli_query($db,$dis18);
                $r1=mysqli_fetch_array($sql18);

                $dis19 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Kurunegala' AND U_DATE LIKE '%$year%' ";

                $sql19=mysqli_query($db,$dis19);
                $s1=mysqli_fetch_array($sql19);

                $dis20 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Puttalam' AND U_DATE LIKE '%$year%' ";

                $sql20=mysqli_query($db,$dis20);
                $t1=mysqli_fetch_array($sql20);

                $dis21 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Anuradhapura' AND U_DATE LIKE '%$year%' ";

                $sql21=mysqli_query($db,$dis21);
                $u1=mysqli_fetch_array($sql21);

                $dis22 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Polonnaruwa' AND U_DATE LIKE '%$year%' ";

                $sql22=mysqli_query($db,$dis22);
                $v1=mysqli_fetch_array($sql22);

                $dis23 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Badulla' AND U_DATE LIKE '%$year%' ";

                $sql23=mysqli_query($db,$dis23);
                $w1=mysqli_fetch_array($sql23);

                $dis24 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Monaragala' AND U_DATE LIKE '%$year%' ";

                $sql24=mysqli_query($db,$dis24);
                $x1=mysqli_fetch_array($sql24);

                $dis25 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Ratnapura' AND U_DATE LIKE '%$year%' ";

                $sql25=mysqli_query($db,$dis25);
                $y1=mysqli_fetch_array($sql25);

                $dis26 = "SELECT SUM(OC_20_1_1_1001+
OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+
OC_20_1_1_1409_2+
OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total', SUM(OC_20_1_1_1001) as 'sumOC_20_1_1_1001',
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
  SUM(OC_20_1_1_1409_2) as sumOC_20_1_1_1409_2,
  SUM(OC_20_1_1_1409_3_1) as 'sumOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'sumOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'sumOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'sumOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'sumOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'sumOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'sumOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT ='Kegalle' AND U_DATE LIKE '%$year%' ";

                $sql26=mysqli_query($db,$dis26);
                $z1=mysqli_fetch_array($sql26);

               

   
                    ?>
                    <br><br>
                    
                    <div class="col-md-12"  id="table" >
                     <!--    Context Classes  -->
                    <div class="panel panel-default" ID="example" >
                       
                        <div class="panel-heading">

                           <h3><b> Allocation Distribution Report </h3>
                            <?php echo "Report update is " . date("Y/m/d") . "<br>"; ?>
                           <div class="form-group row">
                            <div class="col-md-3"></div>
                            <div class="col-md-5"></div>
                            <div class="col-md-4"></div></b>
                            </div>
                        
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div class="scrollable">

                                <table class="table table-striped table-bordered table-hover" id="example" class="display" style="width: 100%">
                                    <thead>
                                        <tr>
                                            
                                            <th><center><u>Object_Code</u></center></th>
                                            <th><center><u>Election_Secretariat</u></center></th>
                                            <th><center><u>Head_Office</u></center></th>
                                            <th><center><u>Colombo</u></center></th>
                                            <th><center><u>Gampaha</u></center></th>
                                            <th><center><u>Kalutara</u></center></th>
                                            <th><center><u>Kandy</u></center></th>
                                            <th><center><u>Matale</u></center></th>
                                            <th><center><u>Nuwara_Eliya</u></center></th>
                                            <th><center><u>Galle</u></center></th>
                                            <th><center><u>Matara</u></center></th>
                                            <th><center><u>Hambantota</u></center></th>
                                            <th><center><u>Jaffna</u></center></th>
                                            <th><center><u>Kilinochchi</u></center></th>
                                            <th><center><u>Mannar</u></center></th>
                                            <th><center><u>Vavuniya</u></center></th>
                                            <th><center><u>Mullaitivu</u></center></th>
                                            <th><center><u>Batticaloa</u></center></th>
                                            <th><center><u>Ampara</u></center></th>
                                            <th><center><u>Trincomalee</u></center></th>
                                            <th><center><u>Kurunegala</u></center></th>
                                            <th><center><u>Puttalam</u></center></th>
                                            <th><center><u>Anuradhapura</u></center></th>
                                            <th><center><u>Polonnaruwa</u></center></th>
                                            <th><center><u>Badulla</u></center></th>
                                            <th><center><u>Monaragala</u></center></th>
                                            <th><center><u>Ratnapura</u></center></th>
                                            <th><center><u>Kegalle</u></center></th>
                                            <th><center><u>Total</u></center></th>

                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <tr >
                                        <td>OC_20_1_1_1001</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_1001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_1001']), 2) ?></td>
  <?php $sumOC_20_1_1_1001 = ($a['sumOC_20_1_1_1001']+$a1['sumOC_20_1_1_1001']+$b1['sumOC_20_1_1_1001']+$c1['sumOC_20_1_1_1001']+$d1['sumOC_20_1_1_1001']+$e1['sumOC_20_1_1_1001']+$f1['sumOC_20_1_1_1001']+$g1['sumOC_20_1_1_1001']+$h1['sumOC_20_1_1_1001']+$i1['sumOC_20_1_1_1001']+$j1['sumOC_20_1_1_1001']+$k1['sumOC_20_1_1_1001']+$l1['sumOC_20_1_1_1001']+$m1['sumOC_20_1_1_1001']+$n1['sumOC_20_1_1_1001']+$o1['sumOC_20_1_1_1001']+$p1['sumOC_20_1_1_1001']+$q1['sumOC_20_1_1_1001']+$r1['sumOC_20_1_1_1001']+$s1['sumOC_20_1_1_1001']+$t1['sumOC_20_1_1_1001']+$u1['sumOC_20_1_1_1001']+$v1['sumOC_20_1_1_1001']+$w1['sumOC_20_1_1_1001']+$x1['sumOC_20_1_1_1001']+$y1['sumOC_20_1_1_1001']+$z1['sumOC_20_1_1_1001']); ?>
  <td align="right"><?php echo number_format(
$sumOC_20_1_1_1001, 2) ?></td>


                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1002</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_1002']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_1002']), 2) ?></td>
  <?php $sumOC_20_1_1_1002 = ($a['sumOC_20_1_1_1002']+$a1['sumOC_20_1_1_1002']+$b1['sumOC_20_1_1_1002']+$c1['sumOC_20_1_1_1002']+$d1['sumOC_20_1_1_1002']+$e1['sumOC_20_1_1_1002']+$f1['sumOC_20_1_1_1002']+$g1['sumOC_20_1_1_1002']+$h1['sumOC_20_1_1_1002']+$i1['sumOC_20_1_1_1002']+$j1['sumOC_20_1_1_1002']+$k1['sumOC_20_1_1_1002']+$l1['sumOC_20_1_1_1002']+$m1['sumOC_20_1_1_1002']+$n1['sumOC_20_1_1_1002']+$o1['sumOC_20_1_1_1002']+$p1['sumOC_20_1_1_1002']+$q1['sumOC_20_1_1_1002']+$r1['sumOC_20_1_1_1002']+$s1['sumOC_20_1_1_1002']+$t1['sumOC_20_1_1_1002']+$u1['sumOC_20_1_1_1002']+$v1['sumOC_20_1_1_1002']+$w1['sumOC_20_1_1_1002']+$x1['sumOC_20_1_1_1002']+$y1['sumOC_20_1_1_1002']+$z1['sumOC_20_1_1_1002']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_1002, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1003_1</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_1003_1']), 2) ?></td>
  <?php $sumOC_20_1_1_1003_1 = ($a['sumOC_20_1_1_1003_1']+$a1['sumOC_20_1_1_1003_1']+$b1['sumOC_20_1_1_1003_1']+$c1['sumOC_20_1_1_1003_1']+$d1['sumOC_20_1_1_1003_1']+$e1['sumOC_20_1_1_1003_1']+$f1['sumOC_20_1_1_1003_1']+$g1['sumOC_20_1_1_1003_1']+$h1['sumOC_20_1_1_1003_1']+$i1['sumOC_20_1_1_1003_1']+$j1['sumOC_20_1_1_1003_1']+$k1['sumOC_20_1_1_1003_1']+$l1['sumOC_20_1_1_1003_1']+$m1['sumOC_20_1_1_1003_1']+$n1['sumOC_20_1_1_1003_1']+$o1['sumOC_20_1_1_1003_1']+$p1['sumOC_20_1_1_1003_1']+$q1['sumOC_20_1_1_1003_1']+$r1['sumOC_20_1_1_1003_1']+$s1['sumOC_20_1_1_1003_1']+$t1['sumOC_20_1_1_1003_1']+$u1['sumOC_20_1_1_1003_1']+$v1['sumOC_20_1_1_1003_1']+$w1['sumOC_20_1_1_1003_1']+$x1['sumOC_20_1_1_1003_1']+$y1['sumOC_20_1_1_1003_1']+$z1['sumOC_20_1_1_1003_1']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_1003_1, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1003_2</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_1003_2']), 2) ?></td>
  <?php $sumOC_20_1_1_1003_2 = ($a['sumOC_20_1_1_1003_2']+$a1['sumOC_20_1_1_1003_2']+$b1['sumOC_20_1_1_1003_2']+$c1['sumOC_20_1_1_1003_2']+$d1['sumOC_20_1_1_1003_2']+$e1['sumOC_20_1_1_1003_2']+$f1['sumOC_20_1_1_1003_2']+$g1['sumOC_20_1_1_1003_2']+$h1['sumOC_20_1_1_1003_2']+$i1['sumOC_20_1_1_1003_2']+$j1['sumOC_20_1_1_1003_2']+$k1['sumOC_20_1_1_1003_2']+$l1['sumOC_20_1_1_1003_2']+$m1['sumOC_20_1_1_1003_2']+$n1['sumOC_20_1_1_1003_2']+$o1['sumOC_20_1_1_1003_2']+$p1['sumOC_20_1_1_1003_2']+$q1['sumOC_20_1_1_1003_2']+$r1['sumOC_20_1_1_1003_2']+$s1['sumOC_20_1_1_1003_2']+$t1['sumOC_20_1_1_1003_2']+$u1['sumOC_20_1_1_1003_2']+$v1['sumOC_20_1_1_1003_2']+$w1['sumOC_20_1_1_1003_2']+$x1['sumOC_20_1_1_1003_2']+$y1['sumOC_20_1_1_1003_2']+$z1['sumOC_20_1_1_1003_2']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_1003_2, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1101</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_1101']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_1101']), 2) ?></td>
  <?php $sumOC_20_1_1_1101 = ($a['sumOC_20_1_1_1101']+$a1['sumOC_20_1_1_1101']+$b1['sumOC_20_1_1_1101']+$c1['sumOC_20_1_1_1101']+$d1['sumOC_20_1_1_1101']+$e1['sumOC_20_1_1_1101']+$f1['sumOC_20_1_1_1101']+$g1['sumOC_20_1_1_1101']+$h1['sumOC_20_1_1_1101']+$i1['sumOC_20_1_1_1101']+$j1['sumOC_20_1_1_1101']+$k1['sumOC_20_1_1_1101']+$l1['sumOC_20_1_1_1101']+$m1['sumOC_20_1_1_1101']+$n1['sumOC_20_1_1_1101']+$o1['sumOC_20_1_1_1101']+$p1['sumOC_20_1_1_1101']+$q1['sumOC_20_1_1_1101']+$r1['sumOC_20_1_1_1101']+$s1['sumOC_20_1_1_1101']+$t1['sumOC_20_1_1_1101']+$u1['sumOC_20_1_1_1101']+$v1['sumOC_20_1_1_1101']+$w1['sumOC_20_1_1_1101']+$x1['sumOC_20_1_1_1101']+$y1['sumOC_20_1_1_1101']+$z1['sumOC_20_1_1_1101']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_1101, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1201</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_1201']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_1201']), 2) ?></td>
  <?php $sumOC_20_1_1_1201 = ($a['sumOC_20_1_1_1201']+$a1['sumOC_20_1_1_1201']+$b1['sumOC_20_1_1_1201']+$c1['sumOC_20_1_1_1201']+$d1['sumOC_20_1_1_1201']+$e1['sumOC_20_1_1_1201']+$f1['sumOC_20_1_1_1201']+$g1['sumOC_20_1_1_1201']+$h1['sumOC_20_1_1_1201']+$i1['sumOC_20_1_1_1201']+$j1['sumOC_20_1_1_1201']+$k1['sumOC_20_1_1_1201']+$l1['sumOC_20_1_1_1201']+$m1['sumOC_20_1_1_1201']+$n1['sumOC_20_1_1_1201']+$o1['sumOC_20_1_1_1201']+$p1['sumOC_20_1_1_1201']+$q1['sumOC_20_1_1_1201']+$r1['sumOC_20_1_1_1201']+$s1['sumOC_20_1_1_1201']+$t1['sumOC_20_1_1_1201']+$u1['sumOC_20_1_1_1201']+$v1['sumOC_20_1_1_1201']+$w1['sumOC_20_1_1_1201']+$x1['sumOC_20_1_1_1201']+$y1['sumOC_20_1_1_1201']+$z1['sumOC_20_1_1_1201']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_1201, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1202</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_1202']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_1202']), 2) ?></td>
  <?php $sumOC_20_1_1_1202 = ($a['sumOC_20_1_1_1202']+$a1['sumOC_20_1_1_1202']+$b1['sumOC_20_1_1_1202']+$c1['sumOC_20_1_1_1202']+$d1['sumOC_20_1_1_1202']+$e1['sumOC_20_1_1_1202']+$f1['sumOC_20_1_1_1202']+$g1['sumOC_20_1_1_1202']+$h1['sumOC_20_1_1_1202']+$i1['sumOC_20_1_1_1202']+$j1['sumOC_20_1_1_1202']+$k1['sumOC_20_1_1_1202']+$l1['sumOC_20_1_1_1202']+$m1['sumOC_20_1_1_1202']+$n1['sumOC_20_1_1_1202']+$o1['sumOC_20_1_1_1202']+$p1['sumOC_20_1_1_1202']+$q1['sumOC_20_1_1_1202']+$r1['sumOC_20_1_1_1202']+$s1['sumOC_20_1_1_1202']+$t1['sumOC_20_1_1_1202']+$u1['sumOC_20_1_1_1202']+$v1['sumOC_20_1_1_1202']+$w1['sumOC_20_1_1_1202']+$x1['sumOC_20_1_1_1202']+$y1['sumOC_20_1_1_1202']+$z1['sumOC_20_1_1_1202']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_1202, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1203</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_1203']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_1203']), 2) ?></td>
  <?php $sumOC_20_1_1_1203 = ($a['sumOC_20_1_1_1203']+$a1['sumOC_20_1_1_1203']+$b1['sumOC_20_1_1_1203']+$c1['sumOC_20_1_1_1203']+$d1['sumOC_20_1_1_1203']+$e1['sumOC_20_1_1_1203']+$f1['sumOC_20_1_1_1203']+$g1['sumOC_20_1_1_1203']+$h1['sumOC_20_1_1_1203']+$i1['sumOC_20_1_1_1203']+$j1['sumOC_20_1_1_1203']+$k1['sumOC_20_1_1_1203']+$l1['sumOC_20_1_1_1203']+$m1['sumOC_20_1_1_1203']+$n1['sumOC_20_1_1_1203']+$o1['sumOC_20_1_1_1203']+$p1['sumOC_20_1_1_1203']+$q1['sumOC_20_1_1_1203']+$r1['sumOC_20_1_1_1203']+$s1['sumOC_20_1_1_1203']+$t1['sumOC_20_1_1_1203']+$u1['sumOC_20_1_1_1203']+$v1['sumOC_20_1_1_1203']+$w1['sumOC_20_1_1_1203']+$x1['sumOC_20_1_1_1203']+$y1['sumOC_20_1_1_1203']+$z1['sumOC_20_1_1_1203']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_1203, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1301</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_1301']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_1301']), 2) ?></td>
  <?php $sumOC_20_1_1_1301 = ($a['sumOC_20_1_1_1301']+$a1['sumOC_20_1_1_1301']+$b1['sumOC_20_1_1_1301']+$c1['sumOC_20_1_1_1301']+$d1['sumOC_20_1_1_1301']+$e1['sumOC_20_1_1_1301']+$f1['sumOC_20_1_1_1301']+$g1['sumOC_20_1_1_1301']+$h1['sumOC_20_1_1_1301']+$i1['sumOC_20_1_1_1301']+$j1['sumOC_20_1_1_1301']+$k1['sumOC_20_1_1_1301']+$l1['sumOC_20_1_1_1301']+$m1['sumOC_20_1_1_1301']+$n1['sumOC_20_1_1_1301']+$o1['sumOC_20_1_1_1301']+$p1['sumOC_20_1_1_1301']+$q1['sumOC_20_1_1_1301']+$r1['sumOC_20_1_1_1301']+$s1['sumOC_20_1_1_1301']+$t1['sumOC_20_1_1_1301']+$u1['sumOC_20_1_1_1301']+$v1['sumOC_20_1_1_1301']+$w1['sumOC_20_1_1_1301']+$x1['sumOC_20_1_1_1301']+$y1['sumOC_20_1_1_1301']+$z1['sumOC_20_1_1_1301']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_1301, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1302</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_1302']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_1302']), 2) ?></td>
  <?php $sumOC_20_1_1_1302 = ($a['sumOC_20_1_1_1302']+$a1['sumOC_20_1_1_1302']+$b1['sumOC_20_1_1_1302']+$c1['sumOC_20_1_1_1302']+$d1['sumOC_20_1_1_1302']+$e1['sumOC_20_1_1_1302']+$f1['sumOC_20_1_1_1302']+$g1['sumOC_20_1_1_1302']+$h1['sumOC_20_1_1_1302']+$i1['sumOC_20_1_1_1302']+$j1['sumOC_20_1_1_1302']+$k1['sumOC_20_1_1_1302']+$l1['sumOC_20_1_1_1302']+$m1['sumOC_20_1_1_1302']+$n1['sumOC_20_1_1_1302']+$o1['sumOC_20_1_1_1302']+$p1['sumOC_20_1_1_1302']+$q1['sumOC_20_1_1_1302']+$r1['sumOC_20_1_1_1302']+$s1['sumOC_20_1_1_1302']+$t1['sumOC_20_1_1_1302']+$u1['sumOC_20_1_1_1302']+$v1['sumOC_20_1_1_1302']+$w1['sumOC_20_1_1_1302']+$x1['sumOC_20_1_1_1302']+$y1['sumOC_20_1_1_1302']+$z1['sumOC_20_1_1_1302']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_1302, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1303</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_1303']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_1303']), 2) ?></td>
  <?php $sumOC_20_1_1_1303 = ($a['sumOC_20_1_1_1303']+$a1['sumOC_20_1_1_1303']+$b1['sumOC_20_1_1_1303']+$c1['sumOC_20_1_1_1303']+$d1['sumOC_20_1_1_1303']+$e1['sumOC_20_1_1_1303']+$f1['sumOC_20_1_1_1303']+$g1['sumOC_20_1_1_1303']+$h1['sumOC_20_1_1_1303']+$i1['sumOC_20_1_1_1303']+$j1['sumOC_20_1_1_1303']+$k1['sumOC_20_1_1_1303']+$l1['sumOC_20_1_1_1303']+$m1['sumOC_20_1_1_1303']+$n1['sumOC_20_1_1_1303']+$o1['sumOC_20_1_1_1303']+$p1['sumOC_20_1_1_1303']+$q1['sumOC_20_1_1_1303']+$r1['sumOC_20_1_1_1303']+$s1['sumOC_20_1_1_1303']+$t1['sumOC_20_1_1_1303']+$u1['sumOC_20_1_1_1303']+$v1['sumOC_20_1_1_1303']+$w1['sumOC_20_1_1_1303']+$x1['sumOC_20_1_1_1303']+$y1['sumOC_20_1_1_1303']+$z1['sumOC_20_1_1_1303']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_1303, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1401</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_1401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_1401']), 2) ?></td>
  <?php $sumOC_20_1_1_1401 = ($a['sumOC_20_1_1_1401']+$a1['sumOC_20_1_1_1401']+$b1['sumOC_20_1_1_1401']+$c1['sumOC_20_1_1_1401']+$d1['sumOC_20_1_1_1401']+$e1['sumOC_20_1_1_1401']+$f1['sumOC_20_1_1_1401']+$g1['sumOC_20_1_1_1401']+$h1['sumOC_20_1_1_1401']+$i1['sumOC_20_1_1_1401']+$j1['sumOC_20_1_1_1401']+$k1['sumOC_20_1_1_1401']+$l1['sumOC_20_1_1_1401']+$m1['sumOC_20_1_1_1401']+$n1['sumOC_20_1_1_1401']+$o1['sumOC_20_1_1_1401']+$p1['sumOC_20_1_1_1401']+$q1['sumOC_20_1_1_1401']+$r1['sumOC_20_1_1_1401']+$s1['sumOC_20_1_1_1401']+$t1['sumOC_20_1_1_1401']+$u1['sumOC_20_1_1_1401']+$v1['sumOC_20_1_1_1401']+$w1['sumOC_20_1_1_1401']+$x1['sumOC_20_1_1_1401']+$y1['sumOC_20_1_1_1401']+$z1['sumOC_20_1_1_1401']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_1401, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1402_1</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_1402_1']), 2) ?></td>
  <?php $sumOC_20_1_1_1402_1 = ($a['sumOC_20_1_1_1402_1']+$a1['sumOC_20_1_1_1402_1']+$b1['sumOC_20_1_1_1402_1']+$c1['sumOC_20_1_1_1402_1']+$d1['sumOC_20_1_1_1402_1']+$e1['sumOC_20_1_1_1402_1']+$f1['sumOC_20_1_1_1402_1']+$g1['sumOC_20_1_1_1402_1']+$h1['sumOC_20_1_1_1402_1']+$i1['sumOC_20_1_1_1402_1']+$j1['sumOC_20_1_1_1402_1']+$k1['sumOC_20_1_1_1402_1']+$l1['sumOC_20_1_1_1402_1']+$m1['sumOC_20_1_1_1402_1']+$n1['sumOC_20_1_1_1402_1']+$o1['sumOC_20_1_1_1402_1']+$p1['sumOC_20_1_1_1402_1']+$q1['sumOC_20_1_1_1402_1']+$r1['sumOC_20_1_1_1402_1']+$s1['sumOC_20_1_1_1402_1']+$t1['sumOC_20_1_1_1402_1']+$u1['sumOC_20_1_1_1402_1']+$v1['sumOC_20_1_1_1402_1']+$w1['sumOC_20_1_1_1402_1']+$x1['sumOC_20_1_1_1402_1']+$y1['sumOC_20_1_1_1402_1']+$z1['sumOC_20_1_1_1402_1']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_1402_1, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1402_2</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_1402_2']), 2) ?></td>
  <?php $sumOC_20_1_1_1402_2 = ($a['sumOC_20_1_1_1402_2']+$a1['sumOC_20_1_1_1402_2']+$b1['sumOC_20_1_1_1402_2']+$c1['sumOC_20_1_1_1402_2']+$d1['sumOC_20_1_1_1402_2']+$e1['sumOC_20_1_1_1402_2']+$f1['sumOC_20_1_1_1402_2']+$g1['sumOC_20_1_1_1402_2']+$h1['sumOC_20_1_1_1402_2']+$i1['sumOC_20_1_1_1402_2']+$j1['sumOC_20_1_1_1402_2']+$k1['sumOC_20_1_1_1402_2']+$l1['sumOC_20_1_1_1402_2']+$m1['sumOC_20_1_1_1402_2']+$n1['sumOC_20_1_1_1402_2']+$o1['sumOC_20_1_1_1402_2']+$p1['sumOC_20_1_1_1402_2']+$q1['sumOC_20_1_1_1402_2']+$r1['sumOC_20_1_1_1402_2']+$s1['sumOC_20_1_1_1402_2']+$t1['sumOC_20_1_1_1402_2']+$u1['sumOC_20_1_1_1402_2']+$v1['sumOC_20_1_1_1402_2']+$w1['sumOC_20_1_1_1402_2']+$x1['sumOC_20_1_1_1402_2']+$y1['sumOC_20_1_1_1402_2']+$z1['sumOC_20_1_1_1402_2']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_1402_2, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1403</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_1403']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_1403']), 2) ?></td>
  <?php $sumOC_20_1_1_1403 = ($a['sumOC_20_1_1_1403']+$a1['sumOC_20_1_1_1403']+$b1['sumOC_20_1_1_1403']+$c1['sumOC_20_1_1_1403']+$d1['sumOC_20_1_1_1403']+$e1['sumOC_20_1_1_1403']+$f1['sumOC_20_1_1_1403']+$g1['sumOC_20_1_1_1403']+$h1['sumOC_20_1_1_1403']+$i1['sumOC_20_1_1_1403']+$j1['sumOC_20_1_1_1403']+$k1['sumOC_20_1_1_1403']+$l1['sumOC_20_1_1_1403']+$m1['sumOC_20_1_1_1403']+$n1['sumOC_20_1_1_1403']+$o1['sumOC_20_1_1_1403']+$p1['sumOC_20_1_1_1403']+$q1['sumOC_20_1_1_1403']+$r1['sumOC_20_1_1_1403']+$s1['sumOC_20_1_1_1403']+$t1['sumOC_20_1_1_1403']+$u1['sumOC_20_1_1_1403']+$v1['sumOC_20_1_1_1403']+$w1['sumOC_20_1_1_1403']+$x1['sumOC_20_1_1_1403']+$y1['sumOC_20_1_1_1403']+$z1['sumOC_20_1_1_1403']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_1403, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1404</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_1404']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_1404']), 2) ?></td>
  <?php $sumOC_20_1_1_1404 = ($a['sumOC_20_1_1_1404']+$a1['sumOC_20_1_1_1404']+$b1['sumOC_20_1_1_1404']+$c1['sumOC_20_1_1_1404']+$d1['sumOC_20_1_1_1404']+$e1['sumOC_20_1_1_1404']+$f1['sumOC_20_1_1_1404']+$g1['sumOC_20_1_1_1404']+$h1['sumOC_20_1_1_1404']+$i1['sumOC_20_1_1_1404']+$j1['sumOC_20_1_1_1404']+$k1['sumOC_20_1_1_1404']+$l1['sumOC_20_1_1_1404']+$m1['sumOC_20_1_1_1404']+$n1['sumOC_20_1_1_1404']+$o1['sumOC_20_1_1_1404']+$p1['sumOC_20_1_1_1404']+$q1['sumOC_20_1_1_1404']+$r1['sumOC_20_1_1_1404']+$s1['sumOC_20_1_1_1404']+$t1['sumOC_20_1_1_1404']+$u1['sumOC_20_1_1_1404']+$v1['sumOC_20_1_1_1404']+$w1['sumOC_20_1_1_1404']+$x1['sumOC_20_1_1_1404']+$y1['sumOC_20_1_1_1404']+$z1['sumOC_20_1_1_1404']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_1404, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_1_1</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_1409_1_1']), 2) ?></td>
  <?php $sumOC_20_1_1_1409_1_1 = ($a['sumOC_20_1_1_1409_1_1']+$a1['sumOC_20_1_1_1409_1_1']+$b1['sumOC_20_1_1_1409_1_1']+$c1['sumOC_20_1_1_1409_1_1']+$d1['sumOC_20_1_1_1409_1_1']+$e1['sumOC_20_1_1_1409_1_1']+$f1['sumOC_20_1_1_1409_1_1']+$g1['sumOC_20_1_1_1409_1_1']+$h1['sumOC_20_1_1_1409_1_1']+$i1['sumOC_20_1_1_1409_1_1']+$j1['sumOC_20_1_1_1409_1_1']+$k1['sumOC_20_1_1_1409_1_1']+$l1['sumOC_20_1_1_1409_1_1']+$m1['sumOC_20_1_1_1409_1_1']+$n1['sumOC_20_1_1_1409_1_1']+$o1['sumOC_20_1_1_1409_1_1']+$p1['sumOC_20_1_1_1409_1_1']+$q1['sumOC_20_1_1_1409_1_1']+$r1['sumOC_20_1_1_1409_1_1']+$s1['sumOC_20_1_1_1409_1_1']+$t1['sumOC_20_1_1_1409_1_1']+$u1['sumOC_20_1_1_1409_1_1']+$v1['sumOC_20_1_1_1409_1_1']+$w1['sumOC_20_1_1_1409_1_1']+$x1['sumOC_20_1_1_1409_1_1']+$y1['sumOC_20_1_1_1409_1_1']+$z1['sumOC_20_1_1_1409_1_1']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_1409_1_1, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_1_2</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_1409_1_2']), 2) ?></td>
  <?php $sumOC_20_1_1_1409_1_2 = ($a['sumOC_20_1_1_1409_1_2']+$a1['sumOC_20_1_1_1409_1_2']+$b1['sumOC_20_1_1_1409_1_2']+$c1['sumOC_20_1_1_1409_1_2']+$d1['sumOC_20_1_1_1409_1_2']+$e1['sumOC_20_1_1_1409_1_2']+$f1['sumOC_20_1_1_1409_1_2']+$g1['sumOC_20_1_1_1409_1_2']+$h1['sumOC_20_1_1_1409_1_2']+$i1['sumOC_20_1_1_1409_1_2']+$j1['sumOC_20_1_1_1409_1_2']+$k1['sumOC_20_1_1_1409_1_2']+$l1['sumOC_20_1_1_1409_1_2']+$m1['sumOC_20_1_1_1409_1_2']+$n1['sumOC_20_1_1_1409_1_2']+$o1['sumOC_20_1_1_1409_1_2']+$p1['sumOC_20_1_1_1409_1_2']+$q1['sumOC_20_1_1_1409_1_2']+$r1['sumOC_20_1_1_1409_1_2']+$s1['sumOC_20_1_1_1409_1_2']+$t1['sumOC_20_1_1_1409_1_2']+$u1['sumOC_20_1_1_1409_1_2']+$v1['sumOC_20_1_1_1409_1_2']+$w1['sumOC_20_1_1_1409_1_2']+$x1['sumOC_20_1_1_1409_1_2']+$y1['sumOC_20_1_1_1409_1_2']+$z1['sumOC_20_1_1_1409_1_2']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_1409_1_2, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_1_3</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_1409_1_3']), 2) ?></td>
  <?php $sumOC_20_1_1_1409_1_3 = ($a['sumOC_20_1_1_1409_1_3']+$a1['sumOC_20_1_1_1409_1_3']+$b1['sumOC_20_1_1_1409_1_3']+$c1['sumOC_20_1_1_1409_1_3']+$d1['sumOC_20_1_1_1409_1_3']+$e1['sumOC_20_1_1_1409_1_3']+$f1['sumOC_20_1_1_1409_1_3']+$g1['sumOC_20_1_1_1409_1_3']+$h1['sumOC_20_1_1_1409_1_3']+$i1['sumOC_20_1_1_1409_1_3']+$j1['sumOC_20_1_1_1409_1_3']+$k1['sumOC_20_1_1_1409_1_3']+$l1['sumOC_20_1_1_1409_1_3']+$m1['sumOC_20_1_1_1409_1_3']+$n1['sumOC_20_1_1_1409_1_3']+$o1['sumOC_20_1_1_1409_1_3']+$p1['sumOC_20_1_1_1409_1_3']+$q1['sumOC_20_1_1_1409_1_3']+$r1['sumOC_20_1_1_1409_1_3']+$s1['sumOC_20_1_1_1409_1_3']+$t1['sumOC_20_1_1_1409_1_3']+$u1['sumOC_20_1_1_1409_1_3']+$v1['sumOC_20_1_1_1409_1_3']+$w1['sumOC_20_1_1_1409_1_3']+$x1['sumOC_20_1_1_1409_1_3']+$y1['sumOC_20_1_1_1409_1_3']+$z1['sumOC_20_1_1_1409_1_3']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_1409_1_3, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_1409_2']), 2) ?></td>
  <?php $sumOC_20_1_1_1409_2 = ($a['sumOC_20_1_1_1409_2']+$a1['sumOC_20_1_1_1409_2']+$b1['sumOC_20_1_1_1409_2']+$c1['sumOC_20_1_1_1409_2']+$d1['sumOC_20_1_1_1409_2']+$e1['sumOC_20_1_1_1409_2']+$f1['sumOC_20_1_1_1409_2']+$g1['sumOC_20_1_1_1409_2']+$h1['sumOC_20_1_1_1409_2']+$i1['sumOC_20_1_1_1409_2']+$j1['sumOC_20_1_1_1409_2']+$k1['sumOC_20_1_1_1409_2']+$l1['sumOC_20_1_1_1409_2']+$m1['sumOC_20_1_1_1409_2']+$n1['sumOC_20_1_1_1409_2']+$o1['sumOC_20_1_1_1409_2']+$p1['sumOC_20_1_1_1409_2']+$q1['sumOC_20_1_1_1409_2']+$r1['sumOC_20_1_1_1409_2']+$s1['sumOC_20_1_1_1409_2']+$t1['sumOC_20_1_1_1409_2']+$u1['sumOC_20_1_1_1409_2']+$v1['sumOC_20_1_1_1409_2']+$w1['sumOC_20_1_1_1409_2']+$x1['sumOC_20_1_1_1409_2']+$y1['sumOC_20_1_1_1409_2']+$z1['sumOC_20_1_1_1409_2']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_1409_2, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_3_1</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_1409_3_1']), 2) ?></td>
  <?php $sumOC_20_1_1_1409_3_1 = ($a['sumOC_20_1_1_1409_3_1']+$a1['sumOC_20_1_1_1409_3_1']+$b1['sumOC_20_1_1_1409_3_1']+$c1['sumOC_20_1_1_1409_3_1']+$d1['sumOC_20_1_1_1409_3_1']+$e1['sumOC_20_1_1_1409_3_1']+$f1['sumOC_20_1_1_1409_3_1']+$g1['sumOC_20_1_1_1409_3_1']+$h1['sumOC_20_1_1_1409_3_1']+$i1['sumOC_20_1_1_1409_3_1']+$j1['sumOC_20_1_1_1409_3_1']+$k1['sumOC_20_1_1_1409_3_1']+$l1['sumOC_20_1_1_1409_3_1']+$m1['sumOC_20_1_1_1409_3_1']+$n1['sumOC_20_1_1_1409_3_1']+$o1['sumOC_20_1_1_1409_3_1']+$p1['sumOC_20_1_1_1409_3_1']+$q1['sumOC_20_1_1_1409_3_1']+$r1['sumOC_20_1_1_1409_3_1']+$s1['sumOC_20_1_1_1409_3_1']+$t1['sumOC_20_1_1_1409_3_1']+$u1['sumOC_20_1_1_1409_3_1']+$v1['sumOC_20_1_1_1409_3_1']+$w1['sumOC_20_1_1_1409_3_1']+$x1['sumOC_20_1_1_1409_3_1']+$y1['sumOC_20_1_1_1409_3_1']+$z1['sumOC_20_1_1_1409_3_1']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_1409_3_1, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_3_2</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_1409_3_2']), 2) ?></td>
  <?php $sumOC_20_1_1_1409_3_2 = ($a['sumOC_20_1_1_1409_3_2']+$a1['sumOC_20_1_1_1409_3_2']+$b1['sumOC_20_1_1_1409_3_2']+$c1['sumOC_20_1_1_1409_3_2']+$d1['sumOC_20_1_1_1409_3_2']+$e1['sumOC_20_1_1_1409_3_2']+$f1['sumOC_20_1_1_1409_3_2']+$g1['sumOC_20_1_1_1409_3_2']+$h1['sumOC_20_1_1_1409_3_2']+$i1['sumOC_20_1_1_1409_3_2']+$j1['sumOC_20_1_1_1409_3_2']+$k1['sumOC_20_1_1_1409_3_2']+$l1['sumOC_20_1_1_1409_3_2']+$m1['sumOC_20_1_1_1409_3_2']+$n1['sumOC_20_1_1_1409_3_2']+$o1['sumOC_20_1_1_1409_3_2']+$p1['sumOC_20_1_1_1409_3_2']+$q1['sumOC_20_1_1_1409_3_2']+$r1['sumOC_20_1_1_1409_3_2']+$s1['sumOC_20_1_1_1409_3_2']+$t1['sumOC_20_1_1_1409_3_2']+$u1['sumOC_20_1_1_1409_3_2']+$v1['sumOC_20_1_1_1409_3_2']+$w1['sumOC_20_1_1_1409_3_2']+$x1['sumOC_20_1_1_1409_3_2']+$y1['sumOC_20_1_1_1409_3_2']+$z1['sumOC_20_1_1_1409_3_2']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_1409_3_2, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_3_3</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_1409_3_3']), 2) ?></td>
  <?php $sumOC_20_1_1_1409_3_3 = ($a['sumOC_20_1_1_1409_3_3']+$a1['sumOC_20_1_1_1409_3_3']+$b1['sumOC_20_1_1_1409_3_3']+$c1['sumOC_20_1_1_1409_3_3']+$d1['sumOC_20_1_1_1409_3_3']+$e1['sumOC_20_1_1_1409_3_3']+$f1['sumOC_20_1_1_1409_3_3']+$g1['sumOC_20_1_1_1409_3_3']+$h1['sumOC_20_1_1_1409_3_3']+$i1['sumOC_20_1_1_1409_3_3']+$j1['sumOC_20_1_1_1409_3_3']+$k1['sumOC_20_1_1_1409_3_3']+$l1['sumOC_20_1_1_1409_3_3']+$m1['sumOC_20_1_1_1409_3_3']+$n1['sumOC_20_1_1_1409_3_3']+$o1['sumOC_20_1_1_1409_3_3']+$p1['sumOC_20_1_1_1409_3_3']+$q1['sumOC_20_1_1_1409_3_3']+$r1['sumOC_20_1_1_1409_3_3']+$s1['sumOC_20_1_1_1409_3_3']+$t1['sumOC_20_1_1_1409_3_3']+$u1['sumOC_20_1_1_1409_3_3']+$v1['sumOC_20_1_1_1409_3_3']+$w1['sumOC_20_1_1_1409_3_3']+$x1['sumOC_20_1_1_1409_3_3']+$y1['sumOC_20_1_1_1409_3_3']+$z1['sumOC_20_1_1_1409_3_3']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_1409_3_3, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1506</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_1506']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_1506']), 2) ?></td>
  <?php $sumOC_20_1_1_1506 = ($a['sumOC_20_1_1_1506']+$a1['sumOC_20_1_1_1506']+$b1['sumOC_20_1_1_1506']+$c1['sumOC_20_1_1_1506']+$d1['sumOC_20_1_1_1506']+$e1['sumOC_20_1_1_1506']+$f1['sumOC_20_1_1_1506']+$g1['sumOC_20_1_1_1506']+$h1['sumOC_20_1_1_1506']+$i1['sumOC_20_1_1_1506']+$j1['sumOC_20_1_1_1506']+$k1['sumOC_20_1_1_1506']+$l1['sumOC_20_1_1_1506']+$m1['sumOC_20_1_1_1506']+$n1['sumOC_20_1_1_1506']+$o1['sumOC_20_1_1_1506']+$p1['sumOC_20_1_1_1506']+$q1['sumOC_20_1_1_1506']+$r1['sumOC_20_1_1_1506']+$s1['sumOC_20_1_1_1506']+$t1['sumOC_20_1_1_1506']+$u1['sumOC_20_1_1_1506']+$v1['sumOC_20_1_1_1506']+$w1['sumOC_20_1_1_1506']+$x1['sumOC_20_1_1_1506']+$y1['sumOC_20_1_1_1506']+$z1['sumOC_20_1_1_1506']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_1506, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_2001</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_2001']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_2001']), 2) ?></td>
  <?php $sumOC_20_1_1_2001 = ($a['sumOC_20_1_1_2001']+$a1['sumOC_20_1_1_2001']+$b1['sumOC_20_1_1_2001']+$c1['sumOC_20_1_1_2001']+$d1['sumOC_20_1_1_2001']+$e1['sumOC_20_1_1_2001']+$f1['sumOC_20_1_1_2001']+$g1['sumOC_20_1_1_2001']+$h1['sumOC_20_1_1_2001']+$i1['sumOC_20_1_1_2001']+$j1['sumOC_20_1_1_2001']+$k1['sumOC_20_1_1_2001']+$l1['sumOC_20_1_1_2001']+$m1['sumOC_20_1_1_2001']+$n1['sumOC_20_1_1_2001']+$o1['sumOC_20_1_1_2001']+$p1['sumOC_20_1_1_2001']+$q1['sumOC_20_1_1_2001']+$r1['sumOC_20_1_1_2001']+$s1['sumOC_20_1_1_2001']+$t1['sumOC_20_1_1_2001']+$u1['sumOC_20_1_1_2001']+$v1['sumOC_20_1_1_2001']+$w1['sumOC_20_1_1_2001']+$x1['sumOC_20_1_1_2001']+$y1['sumOC_20_1_1_2001']+$z1['sumOC_20_1_1_2001']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_2001, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_2102</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_2102']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_2102']), 2) ?></td>
  <?php $sumOC_20_1_1_2102 = ($a['sumOC_20_1_1_2102']+$a1['sumOC_20_1_1_2102']+$b1['sumOC_20_1_1_2102']+$c1['sumOC_20_1_1_2102']+$d1['sumOC_20_1_1_2102']+$e1['sumOC_20_1_1_2102']+$f1['sumOC_20_1_1_2102']+$g1['sumOC_20_1_1_2102']+$h1['sumOC_20_1_1_2102']+$i1['sumOC_20_1_1_2102']+$j1['sumOC_20_1_1_2102']+$k1['sumOC_20_1_1_2102']+$l1['sumOC_20_1_1_2102']+$m1['sumOC_20_1_1_2102']+$n1['sumOC_20_1_1_2102']+$o1['sumOC_20_1_1_2102']+$p1['sumOC_20_1_1_2102']+$q1['sumOC_20_1_1_2102']+$r1['sumOC_20_1_1_2102']+$s1['sumOC_20_1_1_2102']+$t1['sumOC_20_1_1_2102']+$u1['sumOC_20_1_1_2102']+$v1['sumOC_20_1_1_2102']+$w1['sumOC_20_1_1_2102']+$x1['sumOC_20_1_1_2102']+$y1['sumOC_20_1_1_2102']+$z1['sumOC_20_1_1_2102']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_2102, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_2103</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_2103']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_2103']), 2) ?></td>
  <?php $sumOC_20_1_1_2103 = ($a['sumOC_20_1_1_2103']+$a1['sumOC_20_1_1_2103']+$b1['sumOC_20_1_1_2103']+$c1['sumOC_20_1_1_2103']+$d1['sumOC_20_1_1_2103']+$e1['sumOC_20_1_1_2103']+$f1['sumOC_20_1_1_2103']+$g1['sumOC_20_1_1_2103']+$h1['sumOC_20_1_1_2103']+$i1['sumOC_20_1_1_2103']+$j1['sumOC_20_1_1_2103']+$k1['sumOC_20_1_1_2103']+$l1['sumOC_20_1_1_2103']+$m1['sumOC_20_1_1_2103']+$n1['sumOC_20_1_1_2103']+$o1['sumOC_20_1_1_2103']+$p1['sumOC_20_1_1_2103']+$q1['sumOC_20_1_1_2103']+$r1['sumOC_20_1_1_2103']+$s1['sumOC_20_1_1_2103']+$t1['sumOC_20_1_1_2103']+$u1['sumOC_20_1_1_2103']+$v1['sumOC_20_1_1_2103']+$w1['sumOC_20_1_1_2103']+$x1['sumOC_20_1_1_2103']+$y1['sumOC_20_1_1_2103']+$z1['sumOC_20_1_1_2103']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_2103, 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_2401</td>
                                        
  <td align="right"><?php echo number_format(
($a['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($a1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($b1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($c1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($d1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($e1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($f1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($g1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($h1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($i1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($j1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($k1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($l1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($m1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($n1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($o1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($p1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($q1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($r1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($s1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($t1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($u1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($v1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($w1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($x1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($y1['sumOC_20_1_1_2401']), 2) ?></td>
  <td align="right"><?php echo number_format(
($z1['sumOC_20_1_1_2401']), 2) ?></td>
  <?php $sumOC_20_1_1_2401 = ($a['sumOC_20_1_1_2401']+$a1['sumOC_20_1_1_2401']+$b1['sumOC_20_1_1_2401']+$c1['sumOC_20_1_1_2401']+$d1['sumOC_20_1_1_2401']+$e1['sumOC_20_1_1_2401']+$f1['sumOC_20_1_1_2401']+$g1['sumOC_20_1_1_2401']+$h1['sumOC_20_1_1_2401']+$i1['sumOC_20_1_1_2401']+$j1['sumOC_20_1_1_2401']+$k1['sumOC_20_1_1_2401']+$l1['sumOC_20_1_1_2401']+$m1['sumOC_20_1_1_2401']+$n1['sumOC_20_1_1_2401']+$o1['sumOC_20_1_1_2401']+$p1['sumOC_20_1_1_2401']+$q1['sumOC_20_1_1_2401']+$r1['sumOC_20_1_1_2401']+$s1['sumOC_20_1_1_2401']+$t1['sumOC_20_1_1_2401']+$u1['sumOC_20_1_1_2401']+$v1['sumOC_20_1_1_2401']+$w1['sumOC_20_1_1_2401']+$x1['sumOC_20_1_1_2401']+$y1['sumOC_20_1_1_2401']+$z1['sumOC_20_1_1_2401']); ?>
<td align="right"><?php echo number_format(
$sumOC_20_1_1_2401, 2) ?></td>
                                    </tr>
                                        
                                        

                                    
                                    </tbody>

                                </table>
                            </div>
<div>
                               
    </div>                            
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
                     <input class="btn btn-primary" type="button" onclick="printDiv('example')" value="Print Data" />
                </div>
                
                <?php  
                
                
                


            
        

             ?>

        </center>
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
