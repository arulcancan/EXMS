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
    <title>EMS Balance Report</title>

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
                                <a href="balance_report.php"class="active-menu"><i class="fa fa-calculator"></i>Cumulative Allocation Reports</a>
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
                        <h1 class="page-head-line">Cumulative Allocation </h1>
                        <h1 class="page-subhead-line"> Up to date Cumulative allocation report for selected district or head-office </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <center>
                    <form class="" method="post" action="balance_report.php" >
                    
                   

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
                    ?>
                    <br><br>
                    
                    <div class="col-md-10"  id="table" >
                     <!--    Context Classes  -->
                    <div class="panel panel-default" id ="example" >
                       
                        <div class="panel-heading"   >

                           <h3><b> Cumulative Allocation Report </h3>
                             <?php echo "Report Update is " . date("Y/m/d");
?>
                           <div class="form-group row">
                            <div class="col-md-3"><?php echo "District:- $district"; ?></div>
                            <div class="col-md-5"></div>
                            <div class="col-md-4"></div></b>
                            </div>
                        
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" style="width: 100%">
                                    <thead>
                                        <tr>
                                            
                                            <th align="center"><u>Object Code</u></th>
                                            <th><center><u>Description</u></center></th>
                                            <th><u>Price Rs. Cts.</u></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <tr >
                                        <td>OC_20_1_1_1001</td>
                                        <td>Salaries & Wages</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1001'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1002</td>
                                        <td>Overtime & Holiday Payment</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1002'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1003_1</td>
                                        <td>Other Allowance</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1003_1'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1003_2</td>
                                        <td>Extract Allowance</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1003_2'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1101</td>
                                        <td>Travelling - Domestic</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1101'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1201</td>
                                        <td>Stationery & Office Requisites</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1201'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1202</td>
                                        <td>Fuel and Lubricant Oil</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1202'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1203</td>
                                        <td>Diets and Uniforms</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1203'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1301</td>
                                        <td>Vehicle Repairs</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1301'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1302</td>
                                        <td>Plant Machinery & Equipment Repairs</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1302'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1303</td>
                                        <td>Building and Structure Repairs (small scale repairs only)</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1303'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1401</td>
                                        <td>Transport Costs</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1401'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1402_1</td>
                                        <td>Communication charges</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1402_1'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1402_2</td>
                                        <td>Postal charges</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1402_2'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1403</td>
                                        <td>Electricity & Water</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1403'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1404</td>
                                        <td>Rents & Local Taxes</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1404'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_1_1</td>
                                        <td>Enumeration (Previous Year)</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1409_1_1'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_1_2</td>
                                        <td>Enumeration (Current Year)</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1409_1_2'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_1_3</td>
                                        <td>Voter Awareness Programmes </td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1409_1_3'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_2</td>
                                        <td>Conducting Elections</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1409_2'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_3_1</td>
                                        <td>Cleaning Service</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1409_3_1'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_3_2</td>
                                        <td>Security Service</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1409_3_2'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1409_3_3</td>
                                        <td>Extra</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1409_3_3'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_1506</td>
                                        <td>Property Loan Interest</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_1506'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_2001</td>
                                        <td>Rehabilitation & Improvement of Building</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_2001'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_2102</td>
                                        <td>Acquisition of Furniture & Office Equipment</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_2102'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_2103</td>
                                        <td>Acquisition of Plants & Machinery</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_2103'], 2) ?></td></tr>
                                        <tr >
                                        <td>OC_20_1_1_2401</td>
                                        <td>Training & Capacity  Building</td>
                                        <td align="right"><?php echo number_format(
$res['sumOC_20_1_1_2401'], 2) ?></td></tr>
                                        
                                        

                                    
                                    </tbody>

                                </table>
                       
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
