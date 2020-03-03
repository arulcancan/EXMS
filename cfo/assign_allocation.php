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
    <title>EMS Assign Allocation</title>

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
<script src="js/jquery.min.js"></script>
      <script  src="js/index.js"></script>
<script type="text/javascript">
     $(document).ready(function () {
        $("#district").focus();
          $("#district").bind("change",user_check);
        function user_check() {

          $.post("assign_chack.php",{chack:frm.district.value},function(data){


            $("#feedback").html(data);
            
          } 
          );
        }



     });
</script>
 
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
                                <a href="assign_allocation.php" class="active-menu"><i class="fa fa-line-chart"></i>Initial Allocation</a>
                            </li>
                            <li>
                            <a href="code-wise.php"  ><i class="fa fa-line-chart"></i>Code-wise Transection</a>
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
                        <h1 class="page-head-line">Assign Initial Allocation</h1>
                        <h1 class="page-subhead-line">Assign Initial allocation for Election secretariat or district offices once per year  </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                    <form class="" method="post" action="assign_allocation.php" name="frm" >
                    
                    

                <div class="form-group row">
                        <div class="col-md-2">
                            <label>Select District</label>      
                        </div>
                        <div class="col-md-4">
                            <select class="form-control" name="district" id="district"  >
                                <option disabled selected value>District</option>
                                                <option>Election Secretariat</option>
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
                </div>
        
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-6"><span id="feedback" style="color: red; "></span></div><br>
                </div>
                <div class="form-group row" id="frmm">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                   

                
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1001</span></td>
                    
                    <td><span class="label-input100">Salaries & Wages:</span></td></tr></table>
                    <input required class="input100" type="text" name="20111001" placeholder="Enter Amount" data-type="currency"  >
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1002</span></td>
                    
                    <td><span class="label-input100">Overtime & Holiday Payment:</span></td></tr></table>
                    <input class="input100"  type="text" name="20111002" placeholder="Enter Amount" data-type="currency" >
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1003-1</span>
        
                    <td/><td><span class="label-input100">Other Allowance:</span></td></tr></table>
                    <input class="input100"  type="text" name="201110031" placeholder="Enter Amount" data-type="currency" >
                </div><div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1003-2</span>
        
                    <td/><td><span class="label-input100">Extract Allowance:</span></td></tr></table>
                    <input class="input100"  type="text" name="201110032" placeholder="Enter Amount" data-type="currency" >
                </div><div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1101</span>
        
                    <td/><td><span class="label-input100">Travelling - Domestic:</span></td></tr></table>
                    <input class="input100"  type="text" name="20111101" placeholder="Enter Amount" data-type="currency" >
                </div><div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1201</span>
        
                    <td/><td><span class="label-input100">Stationery & Office Requisites:</span></td></tr></table>
                    <input class="input100"  type="text" name="20111201" placeholder="Enter Amount" data-type="currency" >
                </div><div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1202</span>
        
                    <td/><td><span class="label-input100">Fuel and Lubricant Oil:</span></td></tr></table>
                    <input class="input100"  type="text" name="20111202" placeholder="Enter Amount" data-type="currency" >
                </div><div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1203</span>
        
                    <td/><td><span class="label-input100">Diets and Uniforms:</span></td></tr></table>
                    <input class="input100"  type="text" name="20111203" placeholder="Enter Amount" data-type="currency" >
                </div><div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1301</span>
        
                    <td/><td><span class="label-input100">Vehicle Repairs:</span></td></tr></table>
                    <input class="input100"  type="text" name="20111301" placeholder="Enter Amount" data-type="currency" >
                </div><div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1302</span>
        
                    <td/><td><span class="label-input100">Plant Machinery & Equipment Repairs :</span></td></tr></table>
                    <input class="input100"  type="text" name="20111302" placeholder="Enter Amount" data-type="currency" >
                </div><div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1303</span>
        
                    <td/><td><span class="label-input100">Building and Structure Repairs (Small Scale Repairs only):</span></td></tr></table>
                    <input class="input100"  type="text" name="20111303" placeholder="Enter Amount" data-type="currency" >
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1401</span>
        
                    <td/><td><span class="label-input100">Transport Costs:</span></td></tr></table>
                    <input class="input100"  type="text" name="20111401" placeholder="Enter Amount" data-type="currency" >
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1402-1 </span>
        
                    <td/><td><span class="label-input100">Communication charges:</span></td></tr></table>
                    <input class="input100"  type="text" name="201114021" placeholder="Enter Amount" data-type="currency" >
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1402-2</span>
        
                    <td/><td><span class="label-input100">Postal charges:</span></td></tr></table>
                    <input class="input100"  type="text" name="201114022" placeholder="Enter Amount" data-type="currency" >
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1403</span>
        
                    <td/><td><span class="label-input100">Electricity & Water:</span></td></tr></table>
                    <input class="input100"  type="text" name="20111403" placeholder="Enter Amount" data-type="currency" >
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1404</span>
        
                    <td/><td><span class="label-input100">Rents & Local Taxes:</span></td></tr></table>
                    <input class="input100"  type="text" name="20111404" placeholder="Enter Amount" data-type="currency" >
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1409-1-1</span>
        
                    <td/><td><span class="label-input100">Enumeration (Previous Year):</span></td></tr></table>
                    <input class="input100"  type="text" name="2011140911" placeholder="Enter Amount" data-type="currency" >
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1409-1-2</span>
        
                    <td/><td><span class="label-input100">Enumeration (Current Year):</span></td></tr></table>
                    <input class="input100"  type="text" name="2011140912" placeholder="Enter Amount" data-type="currency" >
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1409-1-3</span>
        
                    <td/><td><span class="label-input100">Voter Awareness Programmes:</span></td></tr></table>
                    <input class="input100"  type="text" name="2011140913" placeholder="Enter Amount" data-type="currency" >
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1409-2</span>
        
                    <td/><td><span class="label-input100">Conducting Elections:</span></td></tr></table>
                    <input class="input100"  type="text" name="201114092" placeholder="Enter Amount" data-type="currency" >
                </div>

                 <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1409-3-1</span>
        
                    <td/><td><span class="label-input100">Cleaning Service:</span></td></tr></table>
                    <input class="input100"  type="text" name="2011140931" placeholder="Enter Amount" data-type="currency" >
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1409-3-2</span>
        
                    <td/><td><span class="label-input100">Security Service:</span></td></tr></table>
                    <input class="input100"  type="text" name="2011140932" placeholder="Enter Amount" data-type="currency" >
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1409-3-3</span>
        
                    <td/><td><span class="label-input100">Extra:</span></td></tr></table>
                    <input class="input100"  type="text" name="2011140933" placeholder="Enter Amount" data-type="currency" >
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1506</span>
        
                    <td/><td><span class="label-input100">Property Loan Interest:</span></td></tr></table>
                    <input class="input100"  type="text" name="20111506" placeholder="Enter Amount" data-type="currency" >
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-2001</span>
        
                    <td/><td><span class="label-input100">Rehabilitation & Improvement of Building:</span></td></tr></table>
                    <input class="input100"  type="text" name="20112001" placeholder="Enter Amount" data-type="currency" >
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-2102</span>
        
                    <td/><td><span class="label-input100">Acquisition of Furniture & Office Equipment:</span></td></tr></table>
                    <input class="input100"  type="text" name="20112102" placeholder="Enter Amount" data-type="currency" >
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-2103</span>
        
                    <td/><td><span class="label-input100">Acquisition of Plants & Machinery:</span></td></tr></table>
                    <input class="input100"  type="text" name="20112103" placeholder="Enter Amount" data-type="currency" >
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-2401</span>
        
                    <td/><td><span class="label-input100">Training & Capacity  Building:</span></td></tr></table>
                    <input class="input100"  type="text" name="20112401" placeholder="Enter Amount" data-type="currency" >
                </div>
                 <div class="container-contact100-form-btn">
                 <button name="submit" type="submit" id="register" class="contact100-form-btn"/>Assign Allocation </button>
                </div>


</form>
</div>
<?php

if (isset($_POST['submit']))
  {

    date_default_timezone_set("Asia/Colombo");

                  $time=date("h:i:a");
                  $date=date("Y/F/d");


  $d = 2;

  $district = ($_POST['district']);
  $A20111001 = (filter_var(($_POST['20111001']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111002 = (filter_var(($_POST['20111002']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201110031 = (filter_var(($_POST['201110031']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201110032 = (filter_var(($_POST['201110032']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111101 = (filter_var(($_POST['20111101']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d); 
  $A20111201 = (filter_var(($_POST['20111201']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111202 = (filter_var(($_POST['20111202']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111203 = (filter_var(($_POST['20111203']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111301 = (filter_var(($_POST['20111301']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111302 = (filter_var(($_POST['20111302']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111303 = (filter_var(($_POST['20111303']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111401 = (filter_var(($_POST['20111401']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114021 = (filter_var(($_POST['201114021']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114022 = (filter_var(($_POST['201114022']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111403 = (filter_var(($_POST['20111403']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111404 = (filter_var(($_POST['20111404']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A2011140911 = (filter_var(($_POST['2011140911']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A2011140912 = (filter_var(($_POST['2011140912']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A2011140913 = (filter_var(($_POST['2011140913']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092 = (filter_var(($_POST['201114092']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A2011140931 = (filter_var(($_POST['2011140931']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A2011140932 = (filter_var(($_POST['2011140932']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A2011140933 = (filter_var(($_POST['2011140933']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111506 = (filter_var(($_POST['20111506']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20112001 = (filter_var(($_POST['20112001']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20112102 = (filter_var(($_POST['20112102']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20112103 = (filter_var(($_POST['20112103']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20112401 = (filter_var(($_POST['20112401']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);


  $sql="INSERT INTO assign_allocation (DISTRICT, U_DATE, U_TIME, OC_20_1_1_1001, OC_20_1_1_1002, OC_20_1_1_1003_1, OC_20_1_1_1003_2, OC_20_1_1_1101, OC_20_1_1_1201, OC_20_1_1_1202, OC_20_1_1_1203, OC_20_1_1_1301, OC_20_1_1_1302, OC_20_1_1_1303, OC_20_1_1_1401, OC_20_1_1_1402_1, OC_20_1_1_1402_2, OC_20_1_1_1403, OC_20_1_1_1404, OC_20_1_1_1409_1_1, OC_20_1_1_1409_1_2, OC_20_1_1_1409_1_3, OC_20_1_1_1409_2, OC_20_1_1_1409_3_1, OC_20_1_1_1409_3_2, OC_20_1_1_1409_3_3, OC_20_1_1_1506, OC_20_1_1_2001, OC_20_1_1_2102, OC_20_1_1_2103, OC_20_1_1_2401) VALUES ('$district', '$date', '$time', '$A20111001', '$A20111002', '$A201110031', '$A201110032', '$A20111101', '$A20111201', '$A20111202', '$A20111203', '$A20111301', '$A20111302', '$A20111303', '$A20111401', '$A201114021', '$A201114022',  '$A20111403', '$A20111404', '$A2011140911', '$A2011140912', '$A2011140913', '$A201114092', '$A2011140931', '$A2011140932', '$A2011140933', '$A20111506', '$A20112001', '$A20112102', '$A20112103', '$A20112401')";
  if ($db->query($sql)) {

    $msg = "$district Allocation Assigned...";

     header("location:index.php?mess=$msg");
 }
  else {
    echo "unsuccess";
  }


}

?>



    
               
                    </div>


            
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
    <script type="text/javascript">
    $(":input").inputmask();

$("#phone").inputmask({"mask": "99-9-9-9999-9-9"});
</script>
    <script>

        var filterBar = document.getElementById('filter-bar');

        noUiSlider.create(filterBar, {
            start: [ 1500, 3900 ],
            connect: true,
            range: {
                'min': 1500,
                'max': 7500
            }
        });

        var skipValues = [
        document.getElementById('value-lower'),
        document.getElementById('value-upper')
        ];

        filterBar.noUiSlider.on('update', function( values, handle ) {
            skipValues[handle].innerHTML = Math.round(values[handle]);
            $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
            $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
        });
    </script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="js/jquery.min.js"></script>
<script>
    $("input[data-type='currency']").on({
  keyup: function() {
    formatCurrency($(this));
  },
  blur: function() {
    formatCurrency($(this), "blur");
  }
});

function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.

  // get input value
  var input_val = input.val();

  // don't validate empty input
  if (input_val === "") {
    return;
  }

  // original length
  var original_len = input_val.length;

  // initial caret position
  var caret_pos = input.prop("selectionStart");

  // check for decimal
  if (input_val.indexOf(".") >= 0) {
    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);

    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }

    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = "Rs " + left_side + "." + right_side;
  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = "Rs " + input_val;

    // final formatting
    if (blur === "blur") {
      input_val += ".00";
    }
  }

  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}

</script>


</body>
</html>
