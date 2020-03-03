<?php 
session_start();
include 'db.php';
date_default_timezone_set("Asia/Colombo");

                 		 $time=date("h:i:a");
                 		 $date=date("d/F/Y");
                 		 $a = $_SESSION['id'];
                				
                			

                 		 $logout="UPDATE login_history SET OUTTIME = '$time', OUTDATE = '$date' WHERE ID = '$a'";

                 		 if($db->query($logout))
                 		 {
session_destroy();
echo"<script>window.location='../index.php';</script>";
}


?>