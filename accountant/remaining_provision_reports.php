<?php 
session_start();
ob_start();
if (!isset($_SESSION['accuname'])) 
{
     header("location:../index.php?mes=<h2>Please Login Here!</h2> ");
}
include 'db.php';
$uname = $_SESSION['accuname'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EMS Rmaining Provision</title>

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
    <link rel="stylesheet" type="text/css" href="../user/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

 <link rel="icon" type="image/png" href="../user/images/icons/favicon.ico"/>


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
                                <a href="balance_report.php"><i class="fa fa-calculator"></i>Cumulative Allocation Reports</a>
                            </li>
                             <li>
                                <a href="remaining_provision_reports.php" class="active-menu"><i class="fa fa-calculator"></i>Remaining Provision Reports</a>
                            </li>
                             <li>
                                <a href="allocation_destribution_reports.php"><i class="fa fa-calculator"></i>Allocation Distribution Reports</a>
                            </li>

                             
                           
                        </ul>
                    </li>
                   
                    <li>
                        <a href=""><i class="fa fa-edit" style="font-size:20px;color:red"></i>Revised <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                             <li>
                                <a href="edit_sehedule.php"><i class="fa fa-desktop "></i>Edit Schedule   2 </a>
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
                        <h1 class="page-head-line">Remaining Provision </h1>
                        <h1 class="page-subhead-line">Up to date Expenditure vs Remaining Provision report by select district or head-office </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <center>
                    <form class="" method="post" action="remaining_provision_reports.php" >
                    
                   

                <div class="form-group row">
                        <div class="col-md-2">
                            <label>Select District</label>      
                        </div>
                        <div class="col-md-4">
                            <select class="form-control" name="district">
                                
                                <option>Head Office</option>
                                <option>Colombo</option>
                                                <option>Gampaha</option>
                                                <option>Kalutara</option>
                                                <option>Kandy</option>
                                                <option>Matale</option>
                                                <option>Nuwara Eliya</option>
                                                <option>Galle</option>
                                                <option>Matara</option>
                                                <option>Hambantota</option>
                                                <option>Jaffna</option>
                                                <option>Kilinochchi</option>
                                                <option>Mannar</option>
                                                <option>Vavuniya</option>
                                                <option>Mullaitivu</option>
                                                <option>Batticaloa</option>
                                                <option>Ampara</option>
                                                <option>Trincomalee</option>
                                                <option>Kurunegala</option>
                                                <option>Puttalam</option>
                                                <option>Anuradhapura</option>
                                                <option>Polonnaruwa</option>
                                                <option>Badulla</option>
                                                <option>Monaragala</option>
                                                <option>Ratnapura</option>
                                                <option>Kegalle</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button class="btnn" name="submit">View Report</button>
                        </div>
                </div>
            </form>
            <?php 
            if (isset($_POST['submit'])) {
                    $district = $_POST['district'];
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
  SUM(OC_20_1_1_2401) as 'sumOC_20_1_1_2401' FROM assign_allocation WHERE DISTRICT = '$district' AND U_DATE LIKE '%$year%' ";
   $sql=mysqli_query($db,$query);
   $res=mysqli_fetch_array($sql);

   $query2 = "SELECT DISTRICT, SUM(OC_20_1_1_1001) as 'expOC_20_1_1_1001',
  SUM(OC_20_1_1_1002) as 'expOC_20_1_1_1002',
  SUM(OC_20_1_1_1003_1) as 'expOC_20_1_1_1003_1',
  SUM(OC_20_1_1_1003_2) as 'expOC_20_1_1_1003_2',
  SUM(OC_20_1_1_1101) as 'expOC_20_1_1_1101',
  SUM(OC_20_1_1_1201) as 'expOC_20_1_1_1201',
  SUM(OC_20_1_1_1202) as 'expOC_20_1_1_1202',
  SUM(OC_20_1_1_1203) as 'expOC_20_1_1_1203',
  SUM(OC_20_1_1_1301) as 'expOC_20_1_1_1301',
  SUM(OC_20_1_1_1302) as 'expOC_20_1_1_1302',
  SUM(OC_20_1_1_1303) as 'expOC_20_1_1_1303',
  SUM(OC_20_1_1_1401) as 'expOC_20_1_1_1401',
  SUM(OC_20_1_1_1402_1) as 'expOC_20_1_1_1402_1',
  SUM(OC_20_1_1_1402_2) as 'expOC_20_1_1_1402_2',
  SUM(OC_20_1_1_1403) as 'expOC_20_1_1_1403',
  SUM(OC_20_1_1_1404) as 'expOC_20_1_1_1404',
  SUM(OC_20_1_1_1409_1_1) as 'expOC_20_1_1_1409_1_1',
  SUM(OC_20_1_1_1409_1_2) as 'expOC_20_1_1_1409_1_2',
  SUM(OC_20_1_1_1409_1_3) as 'expOC_20_1_1_1409_1_3',
  SUM(OC_20_1_1_1409_2_A1+OC_20_1_1_1409_2_A2 +OC_20_1_1_1409_2_B1+OC_20_1_1_1409_2_B2+OC_20_1_1_1409_2_B3+OC_20_1_1_1409_2_C1+OC_20_1_1_1409_2_C2+OC_20_1_1_1409_2_C3+OC_20_1_1_1409_2_C4+OC_20_1_1_1409_2_C5+OC_20_1_1_1409_2_C6+OC_20_1_1_1409_2_C7+OC_20_1_1_1409_2_D1+OC_20_1_1_1409_2_D2+OC_20_1_1_1409_2_D3+OC_20_1_1_1409_2_D4+OC_20_1_1_1409_2_E1+OC_20_1_1_1409_2_E2+OC_20_1_1_1409_2_E3+OC_20_1_1_1409_2_E4+OC_20_1_1_1409_2_F1+OC_20_1_1_1409_2_F2+OC_20_1_1_1409_2_F3+OC_20_1_1_1409_2_F4+OC_20_1_1_1409_2_G1+OC_20_1_1_1409_2_G2+OC_20_1_1_1409_2_G3+OC_20_1_1_1409_2_H1+OC_20_1_1_1409_2_H2+OC_20_1_1_1409_2_H3+OC_20_1_1_1409_2_H4+OC_20_1_1_1409_2_H5+OC_20_1_1_1409_2_H6+OC_20_1_1_1409_2_H7+OC_20_1_1_1409_2_H8+OC_20_1_1_1409_2_I1+OC_20_1_1_1409_2_I2+OC_20_1_1_1409_2_I3+OC_20_1_1_1409_2_I4+OC_20_1_1_1409_2_I5+OC_20_1_1_1409_2_J1+OC_20_1_1_1409_2_J2+OC_20_1_1_1409_2_J3+OC_20_1_1_1409_2_J4+OC_20_1_1_1409_2_J5+OC_20_1_1_1409_2_J6+OC_20_1_1_1409_2_J7+OC_20_1_1_1409_2_J8+OC_20_1_1_1409_2_J9
+OC_20_1_1_1409_2_J10
+OC_20_1_1_1409_2_J11) as 'expOC_20_1_1_1409_2',
  SUM(OC_20_1_1_1409_3_1) as 'expOC_20_1_1_1409_3_1',
  SUM(OC_20_1_1_1409_3_2) as 'expOC_20_1_1_1409_3_2',
  SUM(OC_20_1_1_1409_3_3) as 'expOC_20_1_1_1409_3_3',
  SUM(OC_20_1_1_1506) as 'expOC_20_1_1_1506',
  SUM(OC_20_1_1_2001) as 'expOC_20_1_1_2001',
  SUM(OC_20_1_1_2102) as 'expOC_20_1_1_2102',
  SUM(OC_20_1_1_2103) as 'expOC_20_1_1_2103',
  SUM(OC_20_1_1_2401) as 'expOC_20_1_1_2401' FROM schedule02 WHERE DISTRICT = '$district' AND U_DATE LIKE '%$year%' ";
   $sql2=mysqli_query($db,$query2);
   $res2=mysqli_fetch_array($sql2);
                    ?>
                    <br><br>
                    
                    <div class="col-md-10"  id="table" >
                     <!--    Context Classes  -->
                    <div class="panel panel-default" id ="example"  >
                       
                        <div class="panel-heading">

                           <h3><b> Remaining Provision </h3>
                            <?php echo "Report Update is " . date("Y/m/d"); ?>
                           <div class="form-group row">
                            <div class="col-md-3"><?php echo "District:- $district"; ?></div>
                               <div class="col-md-2"><?php ?></div>
                            <div class="col-md-5"></div>
                            <div class="col-md-4"></div></b>
                            </div>
                        
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" style="width: 100%">
                                    <thead>
                                        <tr>
                                            
                                            <th><center><u>Object Code</u></center></th>
                                            <th><center><u>Net Provision</u></center></th>
                                            <th><center><u>Expenditure</u></center></th>
                                            <th><center><u>Remaining Provision</u></center></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <tr >
                                        <td>OC_20_1_1_1001</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1001'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_1001'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_1001'] - $res2['expOC_20_1_1_1001']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1002</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1002'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_1002'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_1002'] - $res2['expOC_20_1_1_1002']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1003_1</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1003_1'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_1003_1'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_1003_1'] - $res2['expOC_20_1_1_1003_1']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1003_2</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1003_2'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_1003_2'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_1003_2'] - $res2['expOC_20_1_1_1003_2']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1101</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1101'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_1101'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_1101'] - $res2['expOC_20_1_1_1101']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1201</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1201'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_1201'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_1201'] - $res2['expOC_20_1_1_1201']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1202</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1202'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_1202'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_1202'] - $res2['expOC_20_1_1_1202']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1203</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1203'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_1203'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_1203'] - $res2['expOC_20_1_1_1203']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1301</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1301'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_1301'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_1301'] - $res2['expOC_20_1_1_1301']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1302</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1302'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_1302'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_1302'] - $res2['expOC_20_1_1_1302']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1303</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1303'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_1303'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_1303'] - $res2['expOC_20_1_1_1303']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1401</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1401'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_1401'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_1401'] - $res2['expOC_20_1_1_1401']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1402_1</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1402_1'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_1402_1'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_1402_1'] - $res2['expOC_20_1_1_1402_1']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1402_2</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1402_2'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_1402_2'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_1402_2'] - $res2['expOC_20_1_1_1402_2']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1403</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1403'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_1403'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_1403'] - $res2['expOC_20_1_1_1403']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1404</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1404'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_1404'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_1404'] - $res2['expOC_20_1_1_1404']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_1_1</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1409_1_1'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_1409_1_1'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_1409_1_1'] - $res2['expOC_20_1_1_1409_1_1']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_1_2</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1409_1_2'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_1409_1_2'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_1409_1_2'] - $res2['expOC_20_1_1_1409_1_2']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_1_3</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1409_1_3'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_1409_1_3'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_1409_1_3'] - $res2['expOC_20_1_1_1409_1_3']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1409_2'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_1409_2'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_1409_2'] - $res2['expOC_20_1_1_1409_2']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_3_1</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1409_3_1'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_1409_3_1'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_1409_3_1'] - $res2['expOC_20_1_1_1409_3_1']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_3_2</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1409_3_2'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_1409_3_2'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_1409_3_2'] - $res2['expOC_20_1_1_1409_3_2']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_3_3</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1409_3_3'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_1409_3_3'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_1409_3_3'] - $res2['expOC_20_1_1_1409_3_3']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_1506</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1506'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_1506'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_1506'] - $res2['expOC_20_1_1_1506']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_2001</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_2001'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_2001'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_2001'] - $res2['expOC_20_1_1_2001']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_2102</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_2102'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_2102'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_2102'] - $res2['expOC_20_1_1_2102']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_2103</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_2103'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_2103'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_2103'] - $res2['expOC_20_1_1_2103']), 2) ?></td>
                                    </tr>
                                        <tr >
                                        <td>OC_20_1_1_2401</td>
                                        
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_2401'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
$res2['expOC_20_1_1_2401'], 2) ?></td>
                                        <td align="right"><?php echo number_format(
($res['sumOC_20_1_1_2401'] - $res2['expOC_20_1_1_2401']), 2) ?></td>
                                    </tr>
                                        
                                        

                                    
                                    </tbody>

                                </table>
<div>
                                
    </div>                            
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
                     <input class="btn btn-primary" type="button" onclick="printDiv('example')" value="Print Data" />
                </div>
                <?php  
                
                
                


            }
        

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
