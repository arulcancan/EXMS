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
    <title>Add User</title>

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
                                <a href="add_user.php" class="active-menu" ><i class="fa fa-user"></i>Create User</a>
                            </li>
                             <li>
                                <a href="edit_user.php"><i class="fa fa-users"></i>Edit User</a>
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
                        <h1 class="page-head-line"> Add User</h1>
                        <h1 class="page-subhead-line"></h1> Create user to access Election Expenditure Management System.

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <?php 
                        if(isset($_GET["mes"]))
      {
        echo $_GET["mes"];
      }
      ?>
                        <div class="panel panel-info">
                        <div class="panel-heading">
                           BASIC FORM
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="add_user.php" >
                                        <div class="form-group">
                                            <label>Enter Full Name</label>
                                            <input class="form-control" type="text" name="name" >
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Enter User ID</label>
                                            <input class="form-control" type="text" name="uname">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Password</label>
                                            <input class="form-control" type="password" name="password">
                                            
                                        </div>
                                                                             
                                            <div class="form-group">
                                            <label>User Type</label>
                                            <select class="form-control" name="user_type"> 
                                                <option>Admin</option>
                                                <option>CFO</option>
                                                <option>Accountant</option>
                                                <option>DC/AC</option>
                                                <option>Accounts Assistant</option>

                                            </select>
                                        </div>
                                            <div class="form-group">
                                            <label>District</label>
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
                                  
                                 
                                        <button type="submit" class="btn btn-info" name="submit">Submit </button>

                                    </form>
                                    <?php

                                    if (isset($_POST['submit'])) {
                                        $name = $_POST['name'];
                                        $uname = $_POST['uname'];
                                        $password = $_POST['password'];
                                        $user_type = $_POST['user_type'];
                                        $district = $_POST['district'];

                                        $query = "INSERT INTO login (NAME, DISTRICT, UNAME, PASSWORD, USER_TYPE) VALUES ('$name', '$district', '$uname', '$password', '$user_type')";

                                        $mesg ="<h2>$name is successfully Joined....</h2>";

                                         if ($db->query($query))
                                        {
    
                                            header("location:add_user.php?mes=$mesg");

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
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
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


</body>
<?php ob_end_flush(); ?>
</html>
