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
    <title>EMS Memo Update</title>

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
<style type="text/css">
*{
  margin:0;
  padding:0;
}
.bodi {
font-family:arial,sans-serif;
  font-size:100%;
  margin:0em;
  
  color:#fff;
}

h2,p{
  font-size:140%;
  font-weight:normal;
}
.ull,.lii{
  list-style:none;
}
.ull{
  overflow:hidden;
  padding:3em;
}
.ull .lii a{
  text-decoration:none;
  color:#000;
  background:#ffc;
  display:block;
  height:15em;
  width:15em;
  padding:1em;
  -moz-box-shadow:5px 5px 7px rgba(33,33,33,1);
  -webkit-box-shadow: 5px 5px 7px rgba(33,33,33,.7);
  box-shadow: 5px 5px 7px rgba(33,33,33,.7);
  -moz-transition:-moz-transform .15s linear;
  -o-transition:-o-transform .15s linear;
  -webkit-transition:-webkit-transform .15s linear;
}
.ull .lii{
  margin:1em;
  float:left;
  border: 25px solid white;
}
.ull .lii h2{
  font-size:140%;
  font-weight:bold;
  padding-bottom:10px;
}
.ull .lii p{
  font-family:"Reenie Beanie",arial, sans-serif;
  font-size:120%;
}
.ull .lii a{
  -webkit-transform: rotate(-6deg);
  -o-transform: rotate(-6deg);
  -moz-transform:rotate(-6deg);
}
.ull .lii:nth-child(even) a{
  -o-transform:rotate(4deg);
  -webkit-transform:rotate(4deg);
  -moz-transform:rotate(4deg);
  position:relative;
  top:5px;
  background:#cfc;
}
.ull .li:inth-child(3n) a{
  -o-transform:rotate(-3deg);
  -webkit-transform:rotate(-3deg);
  -moz-transform:rotate(-3deg);
  position:relative;
  top:-5px;
  background:#ccf;
}
.ull .lii:inth-child(5n) a{
  -o-transform:rotate(5deg);
  -webkit-transform:rotate(5deg);
  -moz-transform:rotate(5deg);
  position:relative;
  top:-10px;
}
.ull .lii a:hover,.ull .lii a:focus{
  box-shadow:10px 10px 7px rgba(0,0,0,.7);
  -moz-box-shadow:10px 10px 7px rgba(0,0,0,.7);
  -webkit-box-shadow: 10px 10px 7px rgba(0,0,0,.7);
  -webkit-transform: scale(1.25);
  -moz-transform: scale(1.25);
  -o-transform: scale(1.25);
  position:relative;
  z-index:5;
}
ol{text-align:center;}
ol li{display:inline;padding-right:1em;}
ol li a{color:#fff;}

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
                        <a href="index.php" ><i class="fa fa-dashboard "></i>Dashboard</a>
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
                        <a href=""><i class="fa fa-edit" style="font-size:20px;color:red"></i>Revised <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                             <li>
                                <a href="edit_sehedule.php"><i class="fa fa-desktop "></i>Edit Schedule 2 </a>
                            </li>
                           
                             
                           
                        </ul>
                    </li>
                     
                      <li>
                        <a href="memo.php" class="active-menu-top"><i class="fa fa-comments  " ></i> Update Memo </a>
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
                        <h1 class="page-head-line">Update Memo</h1>
                        <h1 class="page-subhead-line">Enter the message and update, current system date will update as title  </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">

                     <?php

                         $id=$_GET['id'];

                        $query = "SELECT * FROM note WHERE ID = $id";

                         $sql=mysqli_query($db,$query);
                            $res=mysqli_fetch_array($sql);

                         ?>
                         <div class="col-md-3"></div>
                         <div class="col-md-6">
                             <div class="panel panel-default"  >
                       
                        <div class="panel-heading">
                            <center>

                           <h3><b> Update Memo</b> </h3>
                          
                        </center>
                        </div>
                        <form method="post" action="memo-code.php">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                        <div class="panel-body">
                          <label><?php $date=date("Y/F/d"); echo $date;  ?></label><br>
                          <label>Note :</label><br>
                          <textarea name="msg"  class = "form-control" rows="4" cols="50"><?php echo $res['MESSAGE']; ?></textarea><br>
                          <center><input type="submit" class="btn btn-danger" name="update" value="Update"> </center>
                      </form>

                        </div>
                    </div>
                         </div>
                         <div class="col-md-3"></div>


                     
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
  

 

</body>
</html>
