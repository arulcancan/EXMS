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
    <title>EMS schedule 2</title>

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

        $district = $ress['DISTRICT'];
                
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
                        <a href="Sehedule_02.php" class="active-menu-top"  ><i class="fa fa-desktop "></i>Schedule 02 </a>
                         
                    </li>
                    <li>
                        <a href="edit.php"  ><i class="fa fa-desktop "></i>View Entry </a>
                         
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
<div align="=center">
<canvas id="canvas" width="200" height="200"
style="background-color:#202020">
</canvas>

<script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>
</div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Expenditure summary form  </h1>
                        <h1 class="page-subhead-line">Fill and Submit for Approval </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2">
                        </div>

                         <div class="col-md-8">
                         	<?php 
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
                       
                    <form class="contact100-form " autocomplete="off" method="post" action="Sehedule_02.php">

                
                
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-1001</span></td>
                    
                    <td width="350px"><span class="label-input100">Salaries & Wages:</span></td>
                    <td><span class="label-input100" > R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_1001'] - $res2['expOC_20_1_1_1001']),2)
                    ?></font></span></td></tr></table>
                    <input class="input100" type="text" name="20111001" placeholder="Enter Amount"data-type="currency"  >
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-1002</span></td>
                    
                    <td width="350px"><span class="label-input100">Overtime & Holiday Payment:</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_1002'] - $res2['expOC_20_1_1_1002']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="20111002" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-1003-1</span>
        
                    <td/><td width="350px"><span class="label-input100">Other Allowance:</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_1003_1'] - $res2['expOC_20_1_1_1003_1']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="201110031" placeholder="Enter Amount"data-type="currency">
                </div><div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-1003-2</span>
        
                    <td/><td width="350px"><span class="label-input100">Extract Allowance:</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_1003_2'] - $res2['expOC_20_1_1_1003_2']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="201110032" placeholder="Enter Amount"data-type="currency">
                </div><div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-1101</span>
        
                    <td/><td width="350px"><span class="label-input100">Travelling - Domestic:</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_1101'] - $res2['expOC_20_1_1_1101']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="20111101" placeholder="Enter Amount"data-type="currency">
                </div><div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-1201</span>
        
                    <td/><td width="350px"><span class="label-input100">Stationery & Office Requisites:</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_1201'] - $res2['expOC_20_1_1_1201']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="20111201" placeholder="Enter Amount"data-type="currency">
                </div><div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-1202</span>
        
                    <td/><td width="350px"><span class="label-input100">Fuel and Lubricant Oil:</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_1202'] - $res2['expOC_20_1_1_1202']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="20111202" placeholder="Enter Amount"data-type="currency">
                </div><div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-1203</span>
        
                    <td/><td width="350px"><span class="label-input100">Diets and Uniforms:</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_1203'] - $res2['expOC_20_1_1_1203']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="20111203" placeholder="Enter Amount"data-type="currency">
                </div><div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-1301</span>
        
                    <td/><td width="350px"><span class="label-input100">Vehicle Repairs:</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_1301'] - $res2['expOC_20_1_1_1301']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="20111301" placeholder="Enter Amount"data-type="currency">
                </div><div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-1302</span>
        
                    <td/><td width="350px"><span class="label-input100">Plant Machinery & Equipment Repairs :</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_1302'] - $res2['expOC_20_1_1_1302']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="20111302" placeholder="Enter Amount"data-type="currency">
                </div><div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-1303</span>
        
                    <td/><td width="350px"><span class="label-input100">Building and Structure Repairs (Small Scale Repairs only):</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_1303'] - $res2['expOC_20_1_1_1303']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="20111303" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-1401</span>
        
                    <td/><td width="350px"><span class="label-input100">Transport Costs:</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_1401'] - $res2['expOC_20_1_1_1401']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="20111401" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-1402-1 </span>
        
                    <td/><td width="350px"><span class="label-input100">Communication charges:</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_1402_1'] - $res2['expOC_20_1_1_1402_1']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="201114021" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-1402-2</span>
        
                    <td/><td width="350px"><span class="label-input100">Postal charges:</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_1402_2'] - $res2['expOC_20_1_1_1402_2']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="201114022" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-1403</span>
        
                    <td/><td width="350px"><span class="label-input100">Electricity & Water:</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_1403'] - $res2['expOC_20_1_1_1403']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="20111403" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-1404</span>
        
                    <td/><td width="350px"><span class="label-input100">Rents & Local Taxes:</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_1404'] - $res2['expOC_20_1_1_1404']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="20111404" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-1409-1-1</span>
        
                    <td/><td width="350px"><span class="label-input100">Enumeration (Previous Year):</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_1409_1_1'] - $res2['expOC_20_1_1_1409_1_1']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="2011140911" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-1409-1-2</span>
        
                    <td/><td width="350px"><span class="label-input100">Enumeration (Current Year):</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_1409_1_2'] - $res2['expOC_20_1_1_1409_1_2']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="2011140912" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-1409-1-3</span>
        
                    <td/><td width="350px"><span class="label-input100">Voter Awareness Programmes:</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_1409_1_3'] - $res2['expOC_20_1_1_1409_1_3']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="2011140913" placeholder="Enter Amount"data-type="currency">
                </div>
                
            
                <div class="wrap-input100 input100-select bg1">
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-1409-2</span></td>
        
                    <td width="350px"><span class="label-input100">Conducting Elections:</span></td> 
                    <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_1409_2'] - $res2['expOC_20_1_1_1409_2']),2)
                    ?></font></span></span></td></tr></table>
                    <div>
                        <select class="js-select2" name="201114092">
                            <option>Select Election Type</option>
                            <option>Presidential Elections</option>
                            <option>Parliamentary Elections</option>
                            <option>Provincial Council Elections</option>
                            <option>Local Authorities Elections</option>
                            <option>Referendum</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>

                <div class="w-full dis-none js-show-service">
                    <span class="label-input1001">[1] Salary</span>
                    <div class="wrap-contact100-form-radio">
                        
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[A]  Casual Labour :</span>
                    <input class="input100" type="text" name="201114092A1" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[B] Pentioners (Contract Basis):</span>
                    <input class="input100" type="text" name="201114092A2" placeholder="Enter Amount"data-type="currency">
                </div>
                        
                    </div>
                <span class="label-input1001"> [2] Overtime & Holiday Payment</span>
                    <div class="wrap-contact100-form-radio">
                        
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[A] Holiday Payment (Executive):</span>
                    <input class="input100" type="text" name="201114092B1" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[B] Holiday Payment (Non Executive):</span>
                    <input class="input100" type="text" name="201114092B2" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[C] Overtime:</span>
                    <input class="input100" type="text" name="201114092B3" placeholder="Enter Amount"data-type="currency">
                </div>
                        
                    </div>
                <span class="label-input1001">[3] Allowances</span>
                    <div class="wrap-contact100-form-radio">
                        
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[A] Ballot Preparation and issuing:</span>
                    <input class="input100" type="text" name="201114092C1" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[B] Conducting Election Classes:</span>
                    <input class="input100" type="text" name="201114092C2" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[C] Ballot Checking:</span>
                    <input class="input100" type="text" name="201114092C3" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[D] Issuing Postal Votes:</span>
                    <input class="input100" type="text" name="201114092C4" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[E] Certifying Postal Votes:</span>
                    <input class="input100" type="text" name="201114092C5" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[F] Election Claims (Counting/ Day duty):</span>
                    <input class="input100" type="text" name="201114092C6" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[G] Other:</span>
                    <input class="input100" type="text" name="201114092C7" placeholder="Enter Amount"data-type="currency">
                </div>
            </div>
                <span class="label-input1001">[4] Travelling Claim ( Pre Election)</span>
                    <div class="wrap-contact100-form-radio">
                        
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[A] Executives:</span>
                    <input class="input100" type="text" name="201114092D1" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[B] Grama Niladhari:</span>
                    <input class="input100" type="text" name="201114092D2" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[C] Drivers and Assistants:</span>
                    <input class="input100" type="text" name="201114092D3" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[D] Other:</span>
                    <input class="input100" type="text" name="201114092D4" placeholder="Enter Amount"data-type="currency">
                </div>
            </div>
            <span class="label-input1001">[5] Travellings ( During the Election)</span>
                    <div class="wrap-contact100-form-radio">
                        
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[A] Election Staff:</span>
                    <input class="input100" type="text" name="201114092E1" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[B] Grama Niladhari:</span>
                    <input class="input100" type="text" name="201114092E2" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[C] Drivers & Others (helper / cleaner):</span>
                    <input class="input100" type="text" name="201114092E3" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[D] Other:</span>
                    <input class="input100" type="text" name="201114092E4" placeholder="Enter Amount" data-type="currency">
                </div>
            </div>
            <span class="label-input1001">[6] Transport</span>
                    <div class="wrap-contact100-form-radio">
                        
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[A] Goods Transport:</span>
                    <input class="input100" type="text" name="201114092F1" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[B] Officers transport (C.T.B):</span>
                    <input class="input100" type="text" name="201114092F2" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[C] Officers transport ( Private Vehicle):</span>
                    <input class="input100" type="text" name="201114092F3" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[D] Voters transport:</span>
                    <input class="input100" type="text" name="201114092F4" placeholder="Enter Amount"data-type="currency">
                </div>
            </div>
            <span class="label-input1001">[7] Supplies</span>
                    <div class="wrap-contact100-form-radio">
                        
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[A] Stationary:</span>
                    <input class="input100" type="text" name="201114092G1" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[B] Office requisities Goods:</span>
                    <input class="input100" type="text" name="201114092G2" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[C] Fuel and Oil:</span>
                    <input class="input100" type="text" name="201114092G3" placeholder="Enter Amount"data-type="currency">
                </div>
            </div>
            <span class="label-input1001">[8] Construction and Repairs</span>
                    <div class="wrap-contact100-form-radio">
                        
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[A] Temporary Shed for polling booth:</span>
                    <input class="input100" type="text" name="201114092H1" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[B] Temporary shed for counting:</span>
                    <input class="input100" type="text" name="201114092H2" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[C] Building repair:</span>
                    <input class="input100" type="text" name="201114092H3" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[D] Vehicle repair:</span>
                    <input class="input100" type="text" name="201114092H4" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[E] Office Equipments repairs:</span>
                    <input class="input100" type="text" name="201114092H5" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[F] Machinary repairs:</span>
                    <input class="input100" type="text" name="201114092H6" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[G] Ballot Box repairs:</span>
                    <input class="input100" type="text" name="201114092H7" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[H] Other repairs:</span>
                    <input class="input100" type="text" name="201114092H8" placeholder="Enter Amount"data-type="currency">
                </div>
            </div>
            <span class="label-input1001">[9] Welfare</span>
                    <div class="wrap-contact100-form-radio">
                        
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[A] Ballot Checking:</span>
                    <input class="input100" type="text" name="201114092I1" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[B] Issuing Postal Votes:</span>
                    <input class="input100" type="text" name="201114092I2" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[C] Issuing Ballots and Ballots Boxes:</span>
                    <input class="input100" type="text" name="201114092I3" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[D] Election and Counting:</span>
                    <input class="input100" type="text" name="201114092I4" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[E] Other:</span>
                    <input class="input100" type="text" name="201114092I5" placeholder="Enter Amount"data-type="currency">
                </div>
            </div>
            <span class="label-input1001">[10] Service and Other</span>
                    <div class="wrap-contact100-form-radio">
                        
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[A] Postal Fees:</span>
                    <input class="input100" type="text" name="201114092J1" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[B] Temporary Connection of telephone:</span>
                    <input class="input100" type="text" name="201114092J2" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[C] Temporary Connection of Electricity:</span>
                    <input class="input100" type="text" name="201114092J3" placeholder="Enter Amount"data-type="currency"> 
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[D] Temporary Connection of Water:</span>
                    <input class="input100" type="text" name="201114092J4" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[E] Accomandation vi Observation of Election (Domestic):</span>
                    <input class="input100" type="text" name="201114092J5" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[F] Observation of Election (Domestic):</span>
                    <input class="input100" type="text" name="201114092J6" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[G] Observation of Election (foreign):</span>
                    <input class="input100" type="text" name="201114092J7" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[H] Grama Niladari Payment:</span>
                    <input class="input100" type="text" name="201114092J8" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[I] Building Rent:</span>
                    <input class="input100" type="text" name="201114092J9" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[J] Printing:</span>
                    <input class="input100" type="text" name="201114092J10" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">[K] Other:</span>
                    <input class="input100" type="text" name="201114092J11" placeholder="Enter Amount"data-type="currency">
                </div>
            </div>
        </div>
        <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-1409-3-1</span>
        
                    <td/><td width="350px"><span class="label-input100">Cleaning Service:</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_1409_3_1'] - $res2['expOC_20_1_1_1409_3_1']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="2011140931" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-1409-3-2</span>
        
                    <td/><td width="350px"><span class="label-input100">Security Service:</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_1409_3_2'] - $res2['expOC_20_1_1_1409_3_2']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="2011140932" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-1409-3-3</span>
        
                    <td/><td width="350px"><span class="label-input100">Extra:</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_1409_3_3'] - $res2['expOC_20_1_1_1409_3_3']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="2011140933" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-1506</span>
        
                    <td/><td width="350px"><span class="label-input100">Property Loan Interest:</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_1506'] - $res2['expOC_20_1_1_1506']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="20111506" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-2001</span>
        
                    <td/><td width="350px"><span class="label-input100">Rehabilitation & Improvement of Building:</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_2001'] - $res2['expOC_20_1_1_2001']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="20112001" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-2102</span>
        
                    <td/><td width="350px"><span class="label-input100">Acquisition of Furniture & Office Equipment:</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_2102'] - $res2['expOC_20_1_1_2102']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="20112102" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-2103</span>
        
                    <td/><td width="350px"><span class="label-input100">Acquisition of Plants & Machinery:</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_2103'] - $res2['expOC_20_1_1_2103']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="20112103" placeholder="Enter Amount"data-type="currency">
                </div>
                <div class="wrap-input100 validate-input bg1" >
                    <table><tr><td width="100px"><span class="label-input100">20-1-1-2401</span>
        
                    <td/><td width="350px"><span class="label-input100">Training & Capacity  Building:</span></td>
                <td><span class="label-input100"> R.A:  <font color='red'> <?php echo 
                    number_format(($res['sumOC_20_1_1_2401'] - $res2['expOC_20_1_1_2401']),2)
                    ?></font></span></span></td></tr></table>
                    <input class="input100" type="text" name="20112401" placeholder="Enter Amount"data-type="currency">
                </div>


                

                <div class="container-contact100-form-btn">
                 <button name="submit" type="submit" id="register" class="contact100-form-btn"/>Submit </button>
                </div>
            </form>

             <?php 

if (isset($_POST['submit']))
  {

    date_default_timezone_set("Asia/Colombo");

                  $time=date("h:i:a");
                  $date=date("Y/F/d");


  $d = 2;
  $search = ($_POST['search']);
  $search = str_replace(['+', '-'], '', filter_var($search, FILTER_SANITIZE_NUMBER_INT));


 
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
  $A201114092 = ($_POST['201114092']);

  $A201114092A1 = (filter_var(($_POST['201114092A1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092A2 = (filter_var(($_POST['201114092A2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092B1 = (filter_var(($_POST['201114092B1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092B2 = (filter_var(($_POST['201114092B2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092B3 = (filter_var(($_POST['201114092B3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092C1 = (filter_var(($_POST['201114092C1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092C2 = (filter_var(($_POST['201114092C2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092C3 = (filter_var(($_POST['201114092C3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092C4 = (filter_var(($_POST['201114092C4']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092C5 = (filter_var(($_POST['201114092C5']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092C6 = (filter_var(($_POST['201114092C6']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092C7 = (filter_var(($_POST['201114092C7']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092D1 = (filter_var(($_POST['201114092D1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092D2 = (filter_var(($_POST['201114092D2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092D3 = (filter_var(($_POST['201114092D3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092D4 = (filter_var(($_POST['201114092D4']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092E1 = (filter_var(($_POST['201114092E1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092E2 = (filter_var(($_POST['201114092E2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092E3 = (filter_var(($_POST['201114092E3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092E4 = (filter_var(($_POST['201114092E4']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092F1 = (filter_var(($_POST['201114092F1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092F2 = (filter_var(($_POST['201114092F2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092F3 = (filter_var(($_POST['201114092F3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092F4 = (filter_var(($_POST['201114092F4']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092G1 = (filter_var(($_POST['201114092G1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092G2 = (filter_var(($_POST['201114092G2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092G3 = (filter_var(($_POST['201114092G3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092H1 = (filter_var(($_POST['201114092H1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092H2 = (filter_var(($_POST['201114092H2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092H3 = (filter_var(($_POST['201114092H3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092H4 = (filter_var(($_POST['201114092H4']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092H5 = (filter_var(($_POST['201114092H5']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092H6 = (filter_var(($_POST['201114092H6']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092H7 = (filter_var(($_POST['201114092H7']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092H8 = (filter_var(($_POST['201114092H8']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092I1 = (filter_var(($_POST['201114092I1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092I2 = (filter_var(($_POST['201114092I2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092I3 = (filter_var(($_POST['201114092I3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092I4 = (filter_var(($_POST['201114092I4']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092I5 = (filter_var(($_POST['201114092I5']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J1 = (filter_var(($_POST['201114092J1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J2 = (filter_var(($_POST['201114092J2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J3 = (filter_var(($_POST['201114092J3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J4 = (filter_var(($_POST['201114092J4']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J5 = (filter_var(($_POST['201114092J5']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J6 = (filter_var(($_POST['201114092J6']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J7 = (filter_var(($_POST['201114092J7']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J8 = (filter_var(($_POST['201114092J8']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J9 = (filter_var(($_POST['201114092J9']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J10 = (filter_var(($_POST['201114092J10']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J11 = (filter_var(($_POST['201114092J11']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  



  $A2011140931 = (filter_var(($_POST['2011140931']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A2011140932 = (filter_var(($_POST['2011140932']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A2011140933 = (filter_var(($_POST['2011140933']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111506 = (filter_var(($_POST['20111506']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20112001 = (filter_var(($_POST['20112001']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20112102 = (filter_var(($_POST['20112102']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20112103 = (filter_var(($_POST['20112103']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20112401 = (filter_var(($_POST['20112401']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);

  
   $sql="INSERT INTO schedule02_temp (USER_NAME, DISTRICT, U_DATE, U_TIME, OC_20_1_1_1001, OC_20_1_1_1002, OC_20_1_1_1003_1, OC_20_1_1_1003_2, OC_20_1_1_1101, OC_20_1_1_1201, OC_20_1_1_1202, OC_20_1_1_1203, OC_20_1_1_1301, OC_20_1_1_1302, OC_20_1_1_1303, OC_20_1_1_1401, OC_20_1_1_1402_1, OC_20_1_1_1402_2, OC_20_1_1_1403, OC_20_1_1_1404, OC_20_1_1_1409_1_1, OC_20_1_1_1409_1_2, OC_20_1_1_1409_1_3, OC_20_1_1_1409_2, OC_20_1_1_1409_2_A1, OC_20_1_1_1409_2_A2, OC_20_1_1_1409_2_B1, OC_20_1_1_1409_2_B2, OC_20_1_1_1409_2_B3, OC_20_1_1_1409_2_C1, OC_20_1_1_1409_2_C2, OC_20_1_1_1409_2_C3, OC_20_1_1_1409_2_C4, OC_20_1_1_1409_2_C5, OC_20_1_1_1409_2_C6, OC_20_1_1_1409_2_C7, OC_20_1_1_1409_2_D1, OC_20_1_1_1409_2_D2, OC_20_1_1_1409_2_D3, OC_20_1_1_1409_2_D4, OC_20_1_1_1409_2_E1,  OC_20_1_1_1409_2_E2, OC_20_1_1_1409_2_E3, OC_20_1_1_1409_2_E4, OC_20_1_1_1409_2_F1, OC_20_1_1_1409_2_F2, OC_20_1_1_1409_2_F3, OC_20_1_1_1409_2_F4, OC_20_1_1_1409_2_G1, OC_20_1_1_1409_2_G2, OC_20_1_1_1409_2_G3, OC_20_1_1_1409_2_H1, OC_20_1_1_1409_2_H2, OC_20_1_1_1409_2_H3, OC_20_1_1_1409_2_H4, OC_20_1_1_1409_2_H5, OC_20_1_1_1409_2_H6, OC_20_1_1_1409_2_H7, OC_20_1_1_1409_2_H8, OC_20_1_1_1409_2_I1, OC_20_1_1_1409_2_I2, OC_20_1_1_1409_2_I3, OC_20_1_1_1409_2_I4, OC_20_1_1_1409_2_I5, OC_20_1_1_1409_2_J1, OC_20_1_1_1409_2_J2, OC_20_1_1_1409_2_J3, OC_20_1_1_1409_2_J4, OC_20_1_1_1409_2_J5, OC_20_1_1_1409_2_J6, OC_20_1_1_1409_2_J7, OC_20_1_1_1409_2_J8, OC_20_1_1_1409_2_J9, OC_20_1_1_1409_2_J10, OC_20_1_1_1409_2_J11, OC_20_1_1_1409_3_1, OC_20_1_1_1409_3_2, OC_20_1_1_1409_3_3, OC_20_1_1_1506, OC_20_1_1_2001, OC_20_1_1_2102, OC_20_1_1_2103, OC_20_1_1_2401) VALUES ('$uname', '$district', '$date', '$time', '$A20111001', '$A20111002', '$A201110031', '$A201110032', '$A20111101', '$A20111201', '$A20111202', '$A20111203', '$A20111301', '$A20111302', '$A20111303', '$A20111401', '$A201114021', '$A201114022', '$A20111403', '$A20111404', '$A2011140911', '$A2011140912', '$A2011140913', '$A201114092', '$A201114092A1', '$A201114092A2', '$A201114092B1', '$A201114092B2', '$A201114092B3', '$A201114092C1', '$A201114092C2', '$A201114092C3', '$A201114092C4', '$A201114092C5', '$A201114092C6', '$A201114092C7', '$A201114092D1', '$A201114092D2', '$A201114092D3', '$A201114092D4', '$A201114092E1', '$A201114092E2', '$A201114092E3', '$A201114092E4', '$A201114092F1', '$A201114092F2', '$A201114092F3', '$A201114092F4', '$A201114092G1', '$A201114092G2', '$A201114092G3', '$A201114092H1', '$A201114092H2', '$A201114092H3', '$A201114092H4', '$A201114092H5', '$A201114092H6', '$A201114092H7', '$A201114092H8', '$A201114092I1', '$A201114092I2', '$A201114092I3', '$A201114092I4', '$A201114092I5', '$A201114092J1', '$A201114092J2', '$A201114092J3', '$A201114092J4', '$A201114092J5', '$A201114092J6', '$A201114092J7', '$A201114092J8', '$A201114092J9', '$A201114092J10', '$A201114092J11', '$A2011140931', '$A2011140932', '$A2011140933', '$A20111506', '$A20112001', '$A20112102', '$A20112103', '$A20112401')";
  

  if ($db->query($sql))
  {
    $msg = "<h2 style='color:red;'>Data Has been sent for Approval</h2>";
    
    header("location:index.php?mess=$msg");
  }
  else
  {
    
  }

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
