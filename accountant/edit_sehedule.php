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
    <title>EMS S2 Revise</title>

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
                        <a href="" class="active-menu-top"><i class="fa fa-edit" style="font-size:20px;color:red"></i>Revised <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level collapse in" >
                           
                             <li>
                                <a href="edit_sehedule.php" class="active-menu"><i class="fa fa-desktop "></i>Edit Schedule 2 </a>
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
                        <h1 class="page-head-line"> Revise Expenditure  Schedule 02  </h1>
                        <h1 class="page-subhead-line">Revise and Approve Schidule 2 from Main Database</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                       
                    


                <div class="col-md-10">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Take Action 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php
                                

                                $query = "SELECT * FROM schedule02 WHERE REVISED = '' AND FINISH = '' ";
                                $sql=mysqli_query($db,$query);
                    

                                 ?>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>District</th>
                                            <th>View</th>
                                            <th>Revise</th>
                                            <th>Finish</th>
                                          
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                           <?php
          while ($rekod=mysqli_fetch_array($sql)){//redo to other records
        ?>
                                        <tr>
                                            <td><?php $id = $rekod['ID']; echo $rekod['ID']; ?></td>
                                            <td><?php echo $rekod['U_DATE']; ?></td>
                                            <td><?php echo $rekod['U_TIME']; ?></td>
                                            <td><?php echo $rekod['DISTRICT']; ?></td>
                                            <?php
                                                $urlview="view-form.php?id=$id";
                                                $urlrevise="revise-form.php?id=$id";
                                                $urldone="temo.php?id=$id";
                                            ?>
                                            <td><a href="<?php echo $urlview?>" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i> View</a></td>
                                            <td><a href="<?php echo $urlrevise?>" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Revise</a></td>
                                            
                                            <td><a href="<?php echo $urldone?>" class="btn btn-success"><i class="glyphicon glyphicon-thumbs-up"></i> Approve</a></td>
                                        </tr> 
                                        <?php } ?>
                                        
                                        
                                    </tbody>
                                </table>
                            
                            </div>
                        </div>
                    </div>
                    <!-- End  Hover Rows  -->
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

    


</body>
</html>
