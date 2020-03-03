<?php 
session_start();
ob_start();
if (!isset($_SESSION['aduname'])) 
{
     header("location:../index.php?mes=<h2>Please Login Here!</h2> ");
}
include 'db.php';
$uname = $_SESSION['aduname'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit User</title>

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
                        <a href="" class="active-menu-top"><i class="fa fa-sitemap "  ></i> Administration <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level collapse in">
                            <li>
                                <a href="add_user.php"  ><i class="fa fa-user"></i>Create User</a>
                            </li>
                             <li>
                                <a href="edit_user.php" class="active-menu"><i class="fa fa-users"></i>Edit User</a>
                            </li>
                            
                             
                </ul>
                </li>
                <li>
                        <a href="login_history.php"><i class="fa fa-history "></i>Login History</a>
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
                        <h1 class="page-head-line">User Management</h1>
                        <h1 class="page-subhead-line">Edit Users of EMS </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">

                     <div class="panel panel-default">
                        <div class="panel-heading">
                            Take Action 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php
                                $dis = $ress['DISTRICT'];

                                $query = "SELECT * FROM login where UNAME <> 'admin' " ;
                                $sql=mysqli_query($db,$query);
                    

                                 ?>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>User ID</th>
                                            <th>District</th>
                                            <th>Account type</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                            
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                           <?php
          while ($rekod=mysqli_fetch_array($sql)){//redo to other records
        ?>
                                        <tr>
                                            <td><?php $id = $rekod['ID']; echo $rekod['ID']; ?></td>
                                            <td><?php echo $rekod['NAME']; ?></td>
                                            <td><?php echo $rekod['UNAME']; ?></td>
                                            <?php
                                                
                                                $urlupdate="update-form.php?id=$id";
                                                $urldelete="delete-form.php?id=$id";
                                                
                                            ?>
                                            <td><?php echo $rekod['DISTRICT']; ?></td>
                                            <td><?php echo $rekod['USER_TYPE']; ?></td>
                                            <td><a href="<?php echo $urlupdate?>" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Update</a></td>
                                            <td><a href="<?php echo $urldelete?>" class="btn btn-danger" ><i class="glyphicon glyphicon-trash"></i> Delete</a>

                                               

                                            </td>
                                            
                                        </tr> 
                                        <?php } ?>
                                        
                                        
                                    </tbody>
                                </table>
                            
                            </div>
                        </div>
                    </div>
                       
                         
                   

            
  
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
   
<!--===============================================================================================-->
    <script src="../user/vendor/daterangepicker/moment.min.js"></script>
    <script src="../user/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="../user/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="../user/vendor/noui/nouislider.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    



    


</body>
</html>
