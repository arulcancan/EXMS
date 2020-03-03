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
    <title>Update</title>

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
                        <h1 class="page-head-line">Schedule 2 Approval</h1>
                        <h1 class="page-subhead-line">Election Commisson's Schedule-02. Account Management System </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">

                        <?php 

                        
                       $id=$_GET['id'];

                        

                        $query = "SELECT * FROM login WHERE ID = $id";

                         $sql=mysqli_query($db,$query);
                        $res=mysqli_fetch_array($sql);

                       
                        ?>
                        <div class="panel panel-info">
                        <div class="panel-heading">
                           BASIC FORM
                        </div>
                        <div class="panel-body">
                            <form role="form" method="GET" action="save-update.php" >
                                 <input type="hidden" name="id" value="<?php echo $id ?>">
                                        <div class="form-group">
                                            <label>Enter Full Name</label>
                                            <input class="form-control" value="<?php echo $res['NAME'] ?>" type="text" name="name" >
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Enter User Name</label>
                                            <input class="form-control" value="<?php echo $res['UNAME'] ?>" type="text" name="uname" >
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Password</label>
                                            <input class="form-control" value="<?php echo $res['PASSWORD'] ?>"  type="password" name="password">
                                            
                                        </div>
                                                                             
                                            <div class="form-group">
                                            <label>User Type</label>
                                            <select class="form-control"  name="user_type" > 
                                            <option value="Accountant" <?php if($res['USER_TYPE'] == 'Accountant') { echo "selected";} ?>>Accountant</option>
<option value="DC/AC" <?php if($res['USER_TYPE'] == 'DC/AC') { echo "selected";} ?>>DC/AC</option>
<option value="Accounts Assistant" <?php if($res['USER_TYPE'] == 'Accounts Assistant') { echo "selected";} ?>>Accounts Assistant</option>
<option value="Admin" <?php if($res['USER_TYPE'] == 'Admin') { echo "selected";} ?>>Admin</option>
<option value="CFO" <?php if($res['USER_TYPE'] == 'CFO') { echo "selected";} ?>>CFO</option>
                                                

                                            </select>
                                        </div>
                                            <div class="form-group">
                                            <label>District</label>
                                            <select class="form-control"  name="district" >
                                            <option value="Head Office" <?php if($res['DISTRICT'] == 'Head Office') { echo "selected";}  ?>>Head Office</option>
<option value="Colombo" <?php if($res['DISTRICT'] == 'Colombo') { echo "selected";}  ?>>Colombo</option>
<option value="Gampaha" <?php if($res['DISTRICT'] == 'Gampaha') { echo "selected";}  ?>>Gampaha</option>
<option value="Kalutara" <?php if($res['DISTRICT'] == 'Kalutara') { echo "selected";}  ?>>Kalutara</option>
<option value="Kandy" <?php if($res['DISTRICT'] == 'Kandy') { echo "selected";}  ?>>Kandy</option>
<option value="Matale" <?php if($res['DISTRICT'] == 'Matale') { echo "selected";}  ?>>Matale</option>
<option value="Nuwara Eliya" <?php if($res['DISTRICT'] == 'Nuwara Eliya') { echo "selected";}  ?>>Nuwara Eliya</option>
<option value="Galle" <?php if($res['DISTRICT'] == 'Galle') { echo "selected";}  ?>>Galle</option>
<option value="Matara" <?php if($res['DISTRICT'] == 'Matara') { echo "selected";}  ?>>Matara</option>
<option value="Hambantota" <?php if($res['DISTRICT'] == 'Hambantota') { echo "selected";}  ?>>Hambantota</option>
<option value="Jaffna" <?php if($res['DISTRICT'] == 'Jaffna') { echo "selected";}  ?>>Jaffna</option>
<option value="Kilinochchi" <?php if($res['DISTRICT'] == 'Kilinochchi') { echo "selected";}  ?>>Kilinochchi</option>
<option value="Mannar" <?php if($res['DISTRICT'] == 'Mannar') { echo "selected";}  ?>>Mannar</option>
<option value="Vavuniya" <?php if($res['DISTRICT'] == 'Vavuniya') { echo "selected";}  ?>>Vavuniya</option>
<option value="Mullaitivu" <?php if($res['DISTRICT'] == 'Mullaitivu') { echo "selected";}  ?>>Mullaitivu</option>
<option value="Batticaloa" <?php if($res['DISTRICT'] == 'Batticaloa') { echo "selected";}  ?>>Batticaloa</option>
<option value="Ampara" <?php if($res['DISTRICT'] == 'Ampara') { echo "selected";}  ?>>Ampara</option>
<option value="Trincomalee" <?php if($res['DISTRICT'] == 'Trincomalee') { echo "selected";}  ?>>Trincomalee</option>
<option value="Kurunegala" <?php if($res['DISTRICT'] == 'Kurunegala') { echo "selected";}  ?>>Kurunegala</option>
<option value="Puttalam" <?php if($res['DISTRICT'] == 'Puttalam') { echo "selected";}  ?>>Puttalam</option>
<option value="Anuradhapura" <?php if($res['DISTRICT'] == 'Anuradhapura') { echo "selected";}  ?>>Anuradhapura</option>
<option value="Polonnaruwa" <?php if($res['DISTRICT'] == 'Polonnaruwa') { echo "selected";}  ?>>Polonnaruwa</option>
<option value="Badulla" <?php if($res['DISTRICT'] == 'Badulla') { echo "selected";}  ?>>Badulla</option>
<option value="Monaragala" <?php if($res['DISTRICT'] == 'Monaragala') { echo "selected";}  ?>>Monaragala</option>
<option value="Ratnapura" <?php if($res['DISTRICT'] == 'Ratnapura') { echo "selected";}  ?>>Ratnapura</option>
<option value="Kegalle" <?php if($res['DISTRICT'] == 'Kegalle') { echo "selected";}  ?>>Kegalle</option>                                             
                                                
                                                
                                            </select>
                                        </div>
                                  
                                 
                                        <button type="submit" class="btn btn-info" name="submit">Update</button>

                                    </form>
                                    

                           
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
