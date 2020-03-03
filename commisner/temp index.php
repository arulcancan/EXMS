<?php
session_start();
ob_start();
if (!isset($_SESSION['acuname'])) 
{
     header("location:../index.php?mes=<h2>Please Login Here!</h2> ");
}
include 'db.php';
$uname = $_SESSION['acuname'];

  $queryy = "SELECT * FROM login WHERE UNAME = '$uname'";
       $sqll=mysqli_query($db,$queryy);
        $ress=mysqli_fetch_array($sqll);
 ?>

 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
$district =  $ress['DISTRICT'];

 $query1 = "SELECT DISTRICT,
  U_DATE, SUM(OC_20_1_1_1001+OC_20_1_1_1002+
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
OC_20_1_1_1409_1_3+OC_20_1_1_1409_2+OC_20_1_1_1409_3_1+
OC_20_1_1_1409_3_2+
OC_20_1_1_1409_3_3+
OC_20_1_1_1506+
OC_20_1_1_2001+
OC_20_1_1_2102+
OC_20_1_1_2103+
OC_20_1_1_2401) AS 'total' FROM assign_allocation WHERE DISTRICT = '$district' ";
 $sql1=mysqli_query($db,$query1);
   $res1=mysqli_fetch_array($sql1);
 

 $query2 = "SELECT USER_NAME, DISTRICT,
  U_DATE, SUM(OC_20_1_1_1001+OC_20_1_1_1002+
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
OC_20_1_1_2401) AS 'total' FROM schedule02 WHERE DISTRICT = '$district' ";
 $sql2=mysqli_query($db,$query2);
   $res2=mysqli_fetch_array($sql2);

   $exp = $res2['total'];
   $alo = $res1['total'];

   $net = ($res1['total'] - $res2['total']);
?>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  <?php
    echo "['".'Expenditure'."', ".$exp."] ,";
    echo "['".'Allocation'."', ".$alo."] ,";
    echo "['".'net'."', ".$net."] ,";
    


   ?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Turn Over', 'width':1050, 'height':700,  is3D: true,};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>


    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Schidule 2</title>

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
                        <a href="index.php" class="active-menu-top"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a  href="approval.php" ><i class="fa fa-thumbs-up "></i>Approval  </a>
                          
                         
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
                        <h1 class="page-head-line"> Dashboard</h1>
                        <h1 class="page-subhead-line">welcome to ElectionS Expenditure Management System </h1>


                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">

                        <div id="piechart"></div>

                                 
                               
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
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
    
    
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</body>
</html>
