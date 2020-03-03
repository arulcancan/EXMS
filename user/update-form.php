<?php
session_start();
ob_start();
if (!isset($_SESSION['useruname'])) 
{
     header("location:../index.php?mes=<h2>Please Login Here!</h2> ");
}
include ('db.php');
$uname = $_SESSION['useruname'];
 ?>
 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EMS Update</title>

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
                        <a href="index.php" ><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="Sehedule_02.php"   ><i class="fa fa-desktop "></i>Schedule 02 </a>
                         
                    </li>
                    <li>
                        <a href="edit.php" class="active-menu-top" ><i class="fa fa-desktop "></i>View Entry </a>
                         
                    </li>
                    <li>
                        <a href="remaining_provision_reports.php" ><i class="fa fa-calculator"></i>Remaining Provision Reports</a>
                    </li>
                     <li>
                        <a href="profile.php"><i class="fa fa-user-circle "></i>Profile </a>
                        
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
                        <h1 class="page-head-line">Update Schedule 2</h1>
                        <h1 class="page-subhead-line">Waiting for your approval  </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2">
                        </div>

                         <div class="col-md-8">
                       
                    <form class="contact100-form " autocomplete="off" method="GET" action="save-update.php">

                        <?php

                         $id=$_GET['id'];

                        $query = "SELECT * FROM schedule02_temp WHERE ID = $id";

                         $sql=mysqli_query($db,$query);
                            $res=mysqli_fetch_array($sql);
                            if($res['USER_NAME'] != $ress['UNAME'] ) {

                                header("location:../index.php?mes=<h2>Not Access!</h2> ");

                            }
                            else {

                         ?>
                         <input type="hidden" name="id" value="<?php echo $id ?>">
                
                

                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1001</span></td>
                    
                    <td><span class="label-input100">Salaries & Wages:</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1001'] ?>" name="20111001" placeholder="Enter Amount"data-type="currency"  >
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1002</span></td>
                    
                    <td><span class="label-input100">Overtime & Holiday Payment:</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1002'] ?>" name="20111002" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1003-1</span>
        
                    <td/><td><span class="label-input100">Other Allowance:</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1003_1'] ?>" name="201110031" placeholder="Enter Amount"data-type="currency">
                </div><div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1003-2</span>
        
                    <td/><td><span class="label-input100">Extract Allowance:</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1003_2'] ?>" name="201110032" placeholder="Enter Amount"data-type="currency">
                </div><div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1101</span>
        
                    <td/><td><span class="label-input100">Travelling - Domestic:</span></td></tr></table>
                    <input class="input100" type="text" value="<?php  echo $res['OC_20_1_1_1101'] ?>" name="20111101" placeholder="Enter Amount"data-type="currency">
                </div><div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1201</span>
        
                    <td/><td><span class="label-input100">Stationery & Office Requisites:</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1201'] ?>" name="20111201" placeholder="Enter Amount"data-type="currency">
                </div><div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1202</span>
        
                    <td/><td><span class="label-input100">Fuel and Lubricant Oil:</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1202'] ?>" name="20111202" placeholder="Enter Amount"data-type="currency">
                </div><div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1203</span>
        
                    <td/><td><span class="label-input100">Diets and Uniforms:</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1203'] ?>" name="20111203" placeholder="Enter Amount"data-type="currency">
                </div><div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1301</span>
        
                    <td/><td><span class="label-input100">Vehicle Repairs:</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1301'] ?>" name="20111301" placeholder="Enter Amount"data-type="currency">
                </div><div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1302</span>
        
                    <td/><td><span class="label-input100">Plant Machinery & Equipment Repairs :</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1302'] ?>" name="20111302" placeholder="Enter Amount"data-type="currency">
                </div><div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1303</span>
        
                    <td/><td><span class="label-input100">Building and Structure Repairs (Small Scale Repairs only):</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1303'] ?>" name="20111303" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1401</span>
        
                    <td/><td><span class="label-input100">Transport Costs:</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1401'] ?>" name="20111401" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1402-1 </span>
        
                    <td/><td><span class="label-input100">Communication charges:</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1402_1'] ?>" name="201114021" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1402-2</span>
        
                    <td/><td><span class="label-input100">Postal charges:</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1402_2'] ?>" name="201114022" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1403</span>
        
                    <td/><td><span class="label-input100">Electricity & Water:</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1403'] ?>" name="20111403" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1404</span>
        
                    <td/><td><span class="label-input100">Rents & Local Taxes:</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1404'] ?>" name="20111404" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1409-1-1</span>
        
                    <td/><td><span class="label-input100">Enumeration (Previous Year):</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_1_1'] ?>" name="2011140911" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1409-1-2</span>
        
                    <td/><td><span class="label-input100">Enumeration (Current Year):</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_1_2']  ?>" name="2011140912" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1409-1-3</span>
        
                    <td/><td><span class="label-input100">Voter Awareness Programmes:</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_1_3']  ?>" name="2011140913" placeholder="Enter Amount"data-type="currency">
                </div>
                
            
                <div class="wrap-input100 input100-select bg1">
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1409-2</span></td>
        
                    <td><span class="label-input100">Conducting Elections:</span></tr></table>
                    <div>
                        <select class="js-select2"  name="201114092" >

                            <option value="Select Election Type" 

                            <?php if($res['OC_20_1_1_1409_2'] == 'Select Election Type') { echo "selected";} ?>>Select Election Type</option>
                            <option value="Presidential Elections" 

                            <?php if($res['OC_20_1_1_1409_2'] == 'Presidential Elections') { echo "selected";} ?>>Presidential Elections</option>
                            <option value="Parliamentary Elections" 

                            <?php if($res['OC_20_1_1_1409_2'] == 'Parliamentary Elections') { echo "selected";} ?>>Parliamentary Elections</option>
                            <option value="Provincial Council Elections" 

                            <?php if($res['OC_20_1_1_1409_2'] == 'Provincial Council Elections') { echo "selected";} ?>>Provincial Council Elections</option>
                            <option value="Local Authorities Elections" 

                            <?php if($res['OC_20_1_1_1409_2'] == 'Local Authorities Elections') { echo "selected";} ?>>Local Authorities Elections</option>
                            <option value="Referendum"

                            <?php if($res['OC_20_1_1_1409_2'] == 'Referendum') { echo "selected";} ?>>Referendum</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>
                <?php if($res['OC_20_1_1_1409_2'] == 'Select Election Type') { ?>

                <div class="w-full dis-none js-show-service">
                    <span class="label-input1001">[1] Salary</span>
                    <div class="wrap-contact100-form-radio">

                <?php } else { ?>
                    <div class=" js-show-service">
                    <span class="label-input1001">[1] Salary</span>
                    <div class="wrap-contact100-form-radio">
                <?php } ?>
                        
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[A]  Casual Labour :</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_A1'] ?>" name="201114092A1" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[B] Pentioners (Contract Basis):</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_A2'] ?>" name="201114092A2" placeholder="Enter Amount"data-type="currency">
                </div>
                        
                    </div>
                <span class="label-input1001"> [2] Overtime & Holiday Payment</span>
                    <div class="wrap-contact100-form-radio">
                        
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[A] Holiday Payment (Executive):</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_B1']  ?>" name="201114092B1" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[B] Holiday Payment (Non Executive):</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_B2'] ?>" name="201114092B2" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[C] Overtime:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_B3']?>" name="201114092B3" placeholder="Enter Amount"data-type="currency">
                </div>
                        
                    </div>
                <span class="label-input1001">[3] Allowances</span>
                    <div class="wrap-contact100-form-radio">
                        
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[A] Ballot Preparation and issuing:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_C1'] ?>" name="201114092C1" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[B] Conducting Election Classes:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_C2']  ?>" name="201114092C2" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[C] Ballot Checking:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_C3'] ?>" name="201114092C3" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[D] Issuing Postal Votes:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_C4'] ?>" name="201114092C4" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[E] Certifying Postal Votes:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_C5']  ?>" name="201114092C5" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[F] Election Claims (Counting/ Day duty):</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_C6']  ?>" name="201114092C6" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[G] Other:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_C7']  ?>" name="201114092C7" placeholder="Enter Amount"data-type="currency">
                </div>
            </div>
                <span class="label-input1001">[4] Travelling Claim ( Pre Election)</span>
                    <div class="wrap-contact100-form-radio">
                        
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[A] Executives:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_D1']  ?>" name="201114092D1" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[B] Grama Niladhari:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_D2'] ?>" name="201114092D2" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[C] Drivers and Assistants:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_D3'] ?>" name="201114092D3" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[D] Other:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_D4'] ?>" name="201114092D4" placeholder="Enter Amount"data-type="currency">
                </div>
            </div>
            <span class="label-input1001">[5] Travellings ( During the Election)</span>
                    <div class="wrap-contact100-form-radio">
                        
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[A] Election Staff:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_E1']  ?>" name="201114092E1" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[B] Grama Niladhari:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_E2'] ?>" name="201114092E2" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[C] Drivers & Others (helper / cleaner):</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_E3'] ?>" name="201114092E3" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[D] Other:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_E4'] ?>" name="201114092E4" placeholder="Enter Amount" data-type="currency">
                </div>
            </div>
            <span class="label-input1001">[6] Transport</span>
                    <div class="wrap-contact100-form-radio">
                        
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[A] Goods Transport:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_F1'] ?>" name="201114092F1" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[B] Officers transport (C.T.B):</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_F2']?>" name="201114092F2" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[C] Officers transport ( Private Vehicle):</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_F3']?>" name="201114092F3" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[D] Voters transport:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_F4']?>" name="201114092F4" placeholder="Enter Amount"data-type="currency">
                </div>
            </div>
            <span class="label-input1001">[7] Supplies</span>
                    <div class="wrap-contact100-form-radio">
                        
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[A] Stationary:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_G1'] ?>" name="201114092G1" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[B] Office requisities Goods:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_G2']?>" name="201114092G2" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[C] Fuel and Oil:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_G3'] ?>" name="201114092G3" placeholder="Enter Amount"data-type="currency">
                </div>
            </div>
            <span class="label-input1001">[8] Construction and Repairs</span>
                    <div class="wrap-contact100-form-radio">
                        
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[A] Temporary Shed for polling booth:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_H1']?>" name="201114092H1" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[B] Temporary shed for counting:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_H2']?>" name="201114092H2" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[C] Building repair:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_H3'] ?>" name="201114092H3" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[D] Vehicle repair:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_H4'] ?>" name="201114092H4" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[E] Office Equipments repairs:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_H5']?>" name="201114092H5" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[F] Machinary repairs:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_H6'] ?>" name="201114092H6" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[G] Ballot Box repairs:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_H7'] ?>" name="201114092H7" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[H] Other repairs:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_H8'] ?>" name="201114092H8" placeholder="Enter Amount"data-type="currency">
                </div>
            </div>
            <span class="label-input1001">[9] Welfare</span>
                    <div class="wrap-contact100-form-radio">
                        
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[A] Ballot Checking:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_I1'] ?>" name="201114092I1" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[B] Issuing Postal Votes:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_I2'] ?>" name="201114092I2" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[C] Issuing Ballots and Ballots Boxes:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_I3'] ?>" name="201114092I3" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[D] Election and Counting:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_I4'] ?>" name="201114092I4" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[E] Other:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_I5'] ?>" name="201114092I5" placeholder="Enter Amount"data-type="currency">
                </div>
            </div>
            <span class="label-input1001">[10] Service and Other</span>
                    <div class="wrap-contact100-form-radio">
                        
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[A] Postal Fees:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_J1'] ?>" name="201114092J1" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[B] Temporary Connection of telephone:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_J2'] ?>" name="201114092J2" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[C] Temporary Connection of Electricity:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_J3'] ?>" name="201114092J3" placeholder="Enter Amount"data-type="currency"> 
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[D] Temporary Connection of Water:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_J4'] ?>" name="201114092J4" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[E] Accomandation vi Observation of Election (Domestic):</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_J5'] ?>" name="201114092J5" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[F] Observation of Election (Domestic):</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_J6'] ?>" name="201114092J6" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[G] Observation of Election (foreign):</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_J7'] ?>" name="201114092J7" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[H] Grama Niladari Payment:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_J8'] ?>" name="201114092J8" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[I] Building Rent:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_J9'] ?>" name="201114092J9" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[J] Printing:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_J10'] ?>" name="201114092J10" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[K] Other:</span>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_2_J11'] ?>" name="201114092J11" placeholder="Enter Amount"data-type="currency">
                </div>
            </div>
        </div>
        <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1409-3-1</span>
        
                    <td/><td><span class="label-input100">Cleaning Service:</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_3_1'] ?>" name="2011140931" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1409-3-2</span>
        
                    <td/><td><span class="label-input100">Security Service:</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_3_2'] ?>" name="2011140932" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1409-3-3</span>
        
                    <td/><td><span class="label-input100">Extra:</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1409_3_3']  ?>" name="2011140933" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-1506</span>
        
                    <td/><td><span class="label-input100">Property Loan Interest:</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_1506']  ?>" name="20111506" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-2001</span>
        
                    <td/><td><span class="label-input100">Rehabilitation & Improvement of Building:</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_2001'] ?>" name="20112001" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-2102</span>
        
                    <td/><td><span class="label-input100">Acquisition of Furniture & Office Equipment:</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_2102'] ?>" name="20112102" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-2103</span>
        
                    <td/><td><span class="label-input100">Acquisition of Plants & Machinery:</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_2103'] ?>" name="20112103" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="170px"><span class="label-input100">20-1-1-2401</span>
        
                    <td/><td><span class="label-input100">Training & Capacity  Building:</span></td></tr></table>
                    <input class="input100" type="text" value="<?php echo $res['OC_20_1_1_2401']  ?>" name="20112401" placeholder="Enter Amount"data-type="currency">
                </div>

                

                <div class="container-contact100-form-btn">
                 <button name="submit" type="submit" id="register" class="contact100-form-btn"/>Update </button>
                </div>
            <?php } ?>
            </form>
           
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
                    if($(this).val() == "Select Election Type") {
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
