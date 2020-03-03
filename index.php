<!DOCTYPE html>
<?php 
session_start();
include 'db.php';
?>

<html lang="en">
<head>

	<title>Login EMS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">

		<div class="container-login100">

			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="index.php">

					<center><img src="user/images/logo.png" alt="Girl in a jacket" style="width:240px;height:80px;"></center>
					
					<span class="login100-form-title p-b-43">
						Login to continue
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid username is required">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">user ID</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit">
							Login
						</button>
						<br>
						Copyright &copy; 2020 Election Commission of Sri Lanka<br>
						      <center> version 1.1 </center>
						</form>
						<?php

if (isset($_POST['submit'])){
	$uname = $_POST['username'];
	$password = $_POST['password'];
 
 if ($uname != "" && $password != "")
              {
                $admin = "SELECT * FROM login WHERE UNAME = '$uname' AND PASSWORD = '$password'AND USER_TYPE = 'Admin'";
                $result1=$db->query($admin);
                $user = "SELECT * FROM login WHERE UNAME = '$uname' AND PASSWORD = '$password'AND USER_TYPE = 'Accounts Assistant'";
                $result2=$db->query($user);
                $commisner = "SELECT * FROM login WHERE UNAME = '$uname' AND PASSWORD = '$password'AND USER_TYPE = 'DC/AC'";
                $result3=$db->query($commisner);
                $cfo = "SELECT * FROM login WHERE UNAME = '$uname' AND PASSWORD = '$password'AND USER_TYPE = 'CFO'";
                $result4=$db->query($cfo);
                $accountant = "SELECT * FROM login WHERE UNAME = '$uname' AND PASSWORD = '$password'AND USER_TYPE = 'Accountant'";
                $result5=$db->query($accountant);

              if($result1->num_rows>=1 OR $result2->num_rows>=1 OR $result3->num_rows>=1 OR $result4->num_rows>=1 OR $result5->num_rows>=1  ) {

              	$det="SELECT * FROM login WHERE UNAME = '$uname' AND PASSWORD = '$password'";
              	$use=mysqli_query($db,$det);
                 $res=mysqli_fetch_array($use);

                 date_default_timezone_set("Asia/Colombo");

                 $name = $res['NAME'];
                 $district = $res['DISTRICT'];
                 $utype = $res['USER_TYPE'];
              	 $time = date("h:i:a");
                  $date = date("d/F/Y");

              	$log="INSERT INTO login_history (NAME, DISTRICT, UNAME, UTYPE, INTIME, INDATE, OUTTIME, OUTDATE ) VALUES ('$name', '$district', '$uname', '$utype', '$time', '$date', '', '')";
              	if ($db->query($log))
  			{
  				$logid = "SELECT * FROM login_history WHERE UNAME = '$uname' AND UTYPE = '$utype' AND INTIME = '$time' AND INDATE = '$date' AND OUTTIME = '' AND OUTDATE = '' ";
              $qr=mysqli_query($db,$logid);
                 $rekod=mysqli_fetch_array($qr);
                    $_SESSION['id'] = $rekod['ID'];

                if ($result1->num_rows>=1) 
                {
                	$_SESSION['aduname'] = $uname;
                    header("location:admin/index.php");  
                 }              
                elseif ($result2->num_rows>=1) {

                	$_SESSION['useruname'] = $uname;
                	header("location:user/index.php");	
                }
                elseif ($result3->num_rows>=1) {
                	$_SESSION['acuname'] = $uname;
                	header("location:commisner/index.php"); 
                }
                elseif ($result4->num_rows>=1) {
                	$_SESSION['cfouname'] = $uname;
                	header("location:cfo/index.php"); 
                }
                elseif ($result5->num_rows>=1) {
                	$_SESSION['accuname'] = $uname;
                	header("location:accountant/index.php"); 
                }
            }
                
            }
            else {
                	echo "<br>User Name & Password Incorrect!";
                }
                
            }
            else
            {
            	echo "Enter User Name & Password...";
            }

}
?>
					</div>
					
					
				









				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>