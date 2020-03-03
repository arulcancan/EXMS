  <?php 
session_start();
ob_start();
if (!isset($_SESSION['cfouname'])) 
{
     header("location:../index.php?mes=<h2>Please Login Here!</h2> ");
}
include 'db.php';
$uname = $_SESSION['cfouname'];
$query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
$use=mysqli_query($db,$query0);
$rek=mysqli_fetch_array($use);
$uid = $rek['ID'];
?>


  <?php  if ($_POST['district']!="Election Secretariat") { ?>

                            

                            
                                       
                                        
                                       <?php if(isset($_POST['OC_20_1_1_1001UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1001SUP = $_POST['OC_20_1_1_1001SUP'];
                                            $OC_20_1_1_1001CUT = $_POST['OC_20_1_1_1001CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1001 = OC_20_1_1_1001 + $OC_20_1_1_1001SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_1001 = OC_20_1_1_1001 - $OC_20_1_1_1001SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1001 = OC_20_1_1_1001 - $OC_20_1_1_1001CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_1001 = OC_20_1_1_1001 + $OC_20_1_1_1001CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1001', '$uid', '$district', '$OC_20_1_1_1001SUP', '$OC_20_1_1_1001CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1002UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1002SUP = $_POST['OC_20_1_1_1002SUP'];
                                            $OC_20_1_1_1002CUT = $_POST['OC_20_1_1_1002CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1002 = OC_20_1_1_1002 + $OC_20_1_1_1002SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_1002 = OC_20_1_1_1002 - $OC_20_1_1_1002SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1002 = OC_20_1_1_1002 - $OC_20_1_1_1002CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_1002 = OC_20_1_1_1002 + $OC_20_1_1_1002CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1002', '$uid', '$district', '$OC_20_1_1_1002SUP', '$OC_20_1_1_1002CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1003_1UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1003_1SUP = $_POST['OC_20_1_1_1003_1SUP'];
                                            $OC_20_1_1_1003_1CUT = $_POST['OC_20_1_1_1003_1CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1003_1 = OC_20_1_1_1003_1 + $OC_20_1_1_1003_1SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_1003_1 = OC_20_1_1_1003_1 - $OC_20_1_1_1003_1SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1003_1 = OC_20_1_1_1003_1 - $OC_20_1_1_1003_1CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_1003_1 = OC_20_1_1_1003_1 + $OC_20_1_1_1003_1CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1003_1', '$uid', '$district', '$OC_20_1_1_1003_1SUP', '$OC_20_1_1_1003_1CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1003_2UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1003_2SUP = $_POST['OC_20_1_1_1003_2SUP'];
                                            $OC_20_1_1_1003_2CUT = $_POST['OC_20_1_1_1003_2CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1003_2 = OC_20_1_1_1003_2 + $OC_20_1_1_1003_2SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_1003_2 = OC_20_1_1_1003_2 - $OC_20_1_1_1003_2SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1003_2 = OC_20_1_1_1003_2 - $OC_20_1_1_1003_2CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_1003_2 = OC_20_1_1_1003_2 + $OC_20_1_1_1003_2CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1003_2', '$uid', '$district', '$OC_20_1_1_1003_2SUP', '$OC_20_1_1_1003_2CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1101UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1101SUP = $_POST['OC_20_1_1_1101SUP'];
                                            $OC_20_1_1_1101CUT = $_POST['OC_20_1_1_1101CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1101 = OC_20_1_1_1101 + $OC_20_1_1_1101SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_1101 = OC_20_1_1_1101 - $OC_20_1_1_1101SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1101 = OC_20_1_1_1101 - $OC_20_1_1_1101CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_1101 = OC_20_1_1_1101 + $OC_20_1_1_1101CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1101', '$uid', '$district', '$OC_20_1_1_1101SUP', '$OC_20_1_1_1101CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1201UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1201SUP = $_POST['OC_20_1_1_1201SUP'];
                                            $OC_20_1_1_1201CUT = $_POST['OC_20_1_1_1201CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1201 = OC_20_1_1_1201 + $OC_20_1_1_1201SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_1201 = OC_20_1_1_1201 - $OC_20_1_1_1201SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1201 = OC_20_1_1_1201 - $OC_20_1_1_1201CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_1201 = OC_20_1_1_1201 + $OC_20_1_1_1201CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1201', '$uid', '$district', '$OC_20_1_1_1201SUP', '$OC_20_1_1_1201CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1202UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1202SUP = $_POST['OC_20_1_1_1202SUP'];
                                            $OC_20_1_1_1202CUT = $_POST['OC_20_1_1_1202CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1202 = OC_20_1_1_1202 + $OC_20_1_1_1202SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_1202 = OC_20_1_1_1202 - $OC_20_1_1_1202SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1202 = OC_20_1_1_1202 - $OC_20_1_1_1202CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_1202 = OC_20_1_1_1202 + $OC_20_1_1_1202CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1202', '$uid', '$district', '$OC_20_1_1_1202SUP', '$OC_20_1_1_1202CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1203UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1203SUP = $_POST['OC_20_1_1_1203SUP'];
                                            $OC_20_1_1_1203CUT = $_POST['OC_20_1_1_1203CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1203 = OC_20_1_1_1203 + $OC_20_1_1_1203SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_1203 = OC_20_1_1_1203 - $OC_20_1_1_1203SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1203 = OC_20_1_1_1203 - $OC_20_1_1_1203CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_1203 = OC_20_1_1_1203 + $OC_20_1_1_1203CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1203', '$uid', '$district', '$OC_20_1_1_1203SUP', '$OC_20_1_1_1203CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1301UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1301SUP = $_POST['OC_20_1_1_1301SUP'];
                                            $OC_20_1_1_1301CUT = $_POST['OC_20_1_1_1301CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1301 = OC_20_1_1_1301 + $OC_20_1_1_1301SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_1301 = OC_20_1_1_1301 - $OC_20_1_1_1301SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1301 = OC_20_1_1_1301 - $OC_20_1_1_1301CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_1301 = OC_20_1_1_1301 + $OC_20_1_1_1301CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1301', '$uid', '$district', '$OC_20_1_1_1301SUP', '$OC_20_1_1_1301CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1302UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1302SUP = $_POST['OC_20_1_1_1302SUP'];
                                            $OC_20_1_1_1302CUT = $_POST['OC_20_1_1_1302CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1302 = OC_20_1_1_1302 + $OC_20_1_1_1302SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_1302 = OC_20_1_1_1302 - $OC_20_1_1_1302SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1302 = OC_20_1_1_1302 - $OC_20_1_1_1302CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_1302 = OC_20_1_1_1302 + $OC_20_1_1_1302CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1302', '$uid', '$district', '$OC_20_1_1_1302SUP', '$OC_20_1_1_1302CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1303UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1303SUP = $_POST['OC_20_1_1_1303SUP'];
                                            $OC_20_1_1_1303CUT = $_POST['OC_20_1_1_1303CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1303 = OC_20_1_1_1303 + $OC_20_1_1_1303SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_1303 = OC_20_1_1_1303 - $OC_20_1_1_1303SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1303 = OC_20_1_1_1303 - $OC_20_1_1_1303CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_1303 = OC_20_1_1_1303 + $OC_20_1_1_1303CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1303', '$uid', '$district', '$OC_20_1_1_1303SUP', '$OC_20_1_1_1303CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1401UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1401SUP = $_POST['OC_20_1_1_1401SUP'];
                                            $OC_20_1_1_1401CUT = $_POST['OC_20_1_1_1401CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1401 = OC_20_1_1_1401 + $OC_20_1_1_1401SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_1401 = OC_20_1_1_1401 - $OC_20_1_1_1401SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1401 = OC_20_1_1_1401 - $OC_20_1_1_1401CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_1401 = OC_20_1_1_1401 + $OC_20_1_1_1401CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1401', '$uid', '$district', '$OC_20_1_1_1401SUP', '$OC_20_1_1_1401CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1402_1UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1402_1SUP = $_POST['OC_20_1_1_1402_1SUP'];
                                            $OC_20_1_1_1402_1CUT = $_POST['OC_20_1_1_1402_1CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1402_1 = OC_20_1_1_1402_1 + $OC_20_1_1_1402_1SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_1402_1 = OC_20_1_1_1402_1 - $OC_20_1_1_1402_1SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1402_1 = OC_20_1_1_1402_1 - $OC_20_1_1_1402_1CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_1402_1 = OC_20_1_1_1402_1 + $OC_20_1_1_1402_1CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1402_1', '$uid', '$district', '$OC_20_1_1_1402_1SUP', '$OC_20_1_1_1402_1CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1402_2UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1402_2SUP = $_POST['OC_20_1_1_1402_2SUP'];
                                            $OC_20_1_1_1402_2CUT = $_POST['OC_20_1_1_1402_2CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1402_2 = OC_20_1_1_1402_2 + $OC_20_1_1_1402_2SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_1402_2 = OC_20_1_1_1402_2 - $OC_20_1_1_1402_2SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1402_2 = OC_20_1_1_1402_2 - $OC_20_1_1_1402_2CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_1402_2 = OC_20_1_1_1402_2 + $OC_20_1_1_1402_2CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1402_2', '$uid', '$district', '$OC_20_1_1_1402_2SUP', '$OC_20_1_1_1402_2CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1403UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1403SUP = $_POST['OC_20_1_1_1403SUP'];
                                            $OC_20_1_1_1403CUT = $_POST['OC_20_1_1_1403CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1403 = OC_20_1_1_1403 + $OC_20_1_1_1403SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_1403 = OC_20_1_1_1403 - $OC_20_1_1_1403SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1403 = OC_20_1_1_1403 - $OC_20_1_1_1403CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_1403 = OC_20_1_1_1403 + $OC_20_1_1_1403CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1403', '$uid', '$district', '$OC_20_1_1_1403SUP', '$OC_20_1_1_1403CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1404UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1404SUP = $_POST['OC_20_1_1_1404SUP'];
                                            $OC_20_1_1_1404CUT = $_POST['OC_20_1_1_1404CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1404 = OC_20_1_1_1404 + $OC_20_1_1_1404SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_1404 = OC_20_1_1_1404 - $OC_20_1_1_1404SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1404 = OC_20_1_1_1404 - $OC_20_1_1_1404CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_1404 = OC_20_1_1_1404 + $OC_20_1_1_1404CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1404', '$uid', '$district', '$OC_20_1_1_1404SUP', '$OC_20_1_1_1404CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1409_1_1UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1409_1_1SUP = $_POST['OC_20_1_1_1409_1_1SUP'];
                                            $OC_20_1_1_1409_1_1CUT = $_POST['OC_20_1_1_1409_1_1CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1409_1_1 = OC_20_1_1_1409_1_1 + $OC_20_1_1_1409_1_1SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_1409_1_1 = OC_20_1_1_1409_1_1 - $OC_20_1_1_1409_1_1SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1409_1_1 = OC_20_1_1_1409_1_1 - $OC_20_1_1_1409_1_1CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_1409_1_1 = OC_20_1_1_1409_1_1 + $OC_20_1_1_1409_1_1CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1409_1_1', '$uid', '$district', '$OC_20_1_1_1409_1_1SUP', '$OC_20_1_1_1409_1_1CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1409_1_2UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1409_1_2SUP = $_POST['OC_20_1_1_1409_1_2SUP'];
                                            $OC_20_1_1_1409_1_2CUT = $_POST['OC_20_1_1_1409_1_2CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1409_1_2 = OC_20_1_1_1409_1_2 + $OC_20_1_1_1409_1_2SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_1409_1_2 = OC_20_1_1_1409_1_2 - $OC_20_1_1_1409_1_2SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1409_1_2 = OC_20_1_1_1409_1_2 - $OC_20_1_1_1409_1_2CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_1409_1_2 = OC_20_1_1_1409_1_2 + $OC_20_1_1_1409_1_2CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1409_1_2', '$uid', '$district', '$OC_20_1_1_1409_1_2SUP', '$OC_20_1_1_1409_1_2CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1409_1_3UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1409_1_3SUP = $_POST['OC_20_1_1_1409_1_3SUP'];
                                            $OC_20_1_1_1409_1_3CUT = $_POST['OC_20_1_1_1409_1_3CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1409_1_3 = OC_20_1_1_1409_1_3 + $OC_20_1_1_1409_1_3SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_1409_1_3 = OC_20_1_1_1409_1_3 - $OC_20_1_1_1409_1_3SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1409_1_3 = OC_20_1_1_1409_1_3 - $OC_20_1_1_1409_1_3CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_1409_1_3 = OC_20_1_1_1409_1_3 + $OC_20_1_1_1409_1_3CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1409_1_3', '$uid', '$district', '$OC_20_1_1_1409_1_3SUP', '$OC_20_1_1_1409_1_3CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1409_2UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1409_2SUP = $_POST['OC_20_1_1_1409_2SUP'];
                                            $OC_20_1_1_1409_2CUT = $_POST['OC_20_1_1_1409_2CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1409_2 = OC_20_1_1_1409_2 + $OC_20_1_1_1409_2SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_1409_2 = OC_20_1_1_1409_2 - $OC_20_1_1_1409_2SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1409_2 = OC_20_1_1_1409_2 - $OC_20_1_1_1409_2CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_1409_2 = OC_20_1_1_1409_2 + $OC_20_1_1_1409_2CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1409_2', '$uid', '$district', '$OC_20_1_1_1409_2SUP', '$OC_20_1_1_1409_2CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1409_3_1UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1409_3_1SUP = $_POST['OC_20_1_1_1409_3_1SUP'];
                                            $OC_20_1_1_1409_3_1CUT = $_POST['OC_20_1_1_1409_3_1CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1409_3_1 = OC_20_1_1_1409_3_1 + $OC_20_1_1_1409_3_1SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_1409_3_1 = OC_20_1_1_1409_3_1 - $OC_20_1_1_1409_3_1SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1409_3_1 = OC_20_1_1_1409_3_1 - $OC_20_1_1_1409_3_1CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_1409_3_1 = OC_20_1_1_1409_3_1 + $OC_20_1_1_1409_3_1CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1409_3_1', '$uid', '$district', '$OC_20_1_1_1409_3_1SUP', '$OC_20_1_1_1409_3_1CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1409_3_2UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1409_3_2SUP = $_POST['OC_20_1_1_1409_3_2SUP'];
                                            $OC_20_1_1_1409_3_2CUT = $_POST['OC_20_1_1_1409_3_2CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1409_3_2 = OC_20_1_1_1409_3_2 + $OC_20_1_1_1409_3_2SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_1409_3_2 = OC_20_1_1_1409_3_2 - $OC_20_1_1_1409_3_2SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1409_3_2 = OC_20_1_1_1409_3_2 - $OC_20_1_1_1409_3_2CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_1409_3_2 = OC_20_1_1_1409_3_2 + $OC_20_1_1_1409_3_2CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1409_3_2', '$uid', '$district', '$OC_20_1_1_1409_3_2SUP', '$OC_20_1_1_1409_3_2CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1409_3_3UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1409_3_3SUP = $_POST['OC_20_1_1_1409_3_3SUP'];
                                            $OC_20_1_1_1409_3_3CUT = $_POST['OC_20_1_1_1409_3_3CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1409_3_3 = OC_20_1_1_1409_3_3 + $OC_20_1_1_1409_3_3SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_1409_3_3 = OC_20_1_1_1409_3_3 - $OC_20_1_1_1409_3_3SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1409_3_3 = OC_20_1_1_1409_3_3 - $OC_20_1_1_1409_3_3CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_1409_3_3 = OC_20_1_1_1409_3_3 + $OC_20_1_1_1409_3_3CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1409_3_3', '$uid', '$district', '$OC_20_1_1_1409_3_3SUP', '$OC_20_1_1_1409_3_3CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1506UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1506SUP = $_POST['OC_20_1_1_1506SUP'];
                                            $OC_20_1_1_1506CUT = $_POST['OC_20_1_1_1506CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1506 = OC_20_1_1_1506 + $OC_20_1_1_1506SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_1506 = OC_20_1_1_1506 - $OC_20_1_1_1506SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1506 = OC_20_1_1_1506 - $OC_20_1_1_1506CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_1506 = OC_20_1_1_1506 + $OC_20_1_1_1506CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1506', '$uid', '$district', '$OC_20_1_1_1506SUP', '$OC_20_1_1_1506CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_2001UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_2001SUP = $_POST['OC_20_1_1_2001SUP'];
                                            $OC_20_1_1_2001CUT = $_POST['OC_20_1_1_2001CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_2001 = OC_20_1_1_2001 + $OC_20_1_1_2001SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_2001 = OC_20_1_1_2001 - $OC_20_1_1_2001SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_2001 = OC_20_1_1_2001 - $OC_20_1_1_2001CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_2001 = OC_20_1_1_2001 + $OC_20_1_1_2001CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_2001', '$uid', '$district', '$OC_20_1_1_2001SUP', '$OC_20_1_1_2001CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_2102UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_2102SUP = $_POST['OC_20_1_1_2102SUP'];
                                            $OC_20_1_1_2102CUT = $_POST['OC_20_1_1_2102CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_2102 = OC_20_1_1_2102 + $OC_20_1_1_2102SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_2102 = OC_20_1_1_2102 - $OC_20_1_1_2102SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_2102 = OC_20_1_1_2102 - $OC_20_1_1_2102CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_2102 = OC_20_1_1_2102 + $OC_20_1_1_2102CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_2102', '$uid', '$district', '$OC_20_1_1_2102SUP', '$OC_20_1_1_2102CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_2103UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_2103SUP = $_POST['OC_20_1_1_2103SUP'];
                                            $OC_20_1_1_2103CUT = $_POST['OC_20_1_1_2103CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_2103 = OC_20_1_1_2103 + $OC_20_1_1_2103SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_2103 = OC_20_1_1_2103 - $OC_20_1_1_2103SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_2103 = OC_20_1_1_2103 - $OC_20_1_1_2103CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_2103 = OC_20_1_1_2103 + $OC_20_1_1_2103CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_2103', '$uid', '$district', '$OC_20_1_1_2103SUP', '$OC_20_1_1_2103CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_2401UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_2401SUP = $_POST['OC_20_1_1_2401SUP'];
                                            $OC_20_1_1_2401CUT = $_POST['OC_20_1_1_2401CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_2401 = OC_20_1_1_2401 + $OC_20_1_1_2401SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            if ($qr1 == true){
                                            $SUPH = "UPDATE assign_allocation SET OC_20_1_1_2401 = OC_20_1_1_2401 - $OC_20_1_1_2401SUP WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                            $qr3=mysqli_query($db,$SUPH);    
                                            }
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_2401 = OC_20_1_1_2401 - $OC_20_1_1_2401CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr2 == true){
                                                $CUTH = "UPDATE assign_allocation SET OC_20_1_1_2401 = OC_20_1_1_2401 + $OC_20_1_1_2401CUT WHERE DISTRICT ='Election Secretariat' AND U_DATE LIKE '%$year%'";
                                                $qr4=mysqli_query($db,$CUTH);
                                            }
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_2401', '$uid', '$district', '$OC_20_1_1_2401SUP', '$OC_20_1_1_2401CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        }
                                        } 
                    else {
                                           if(isset($_POST['OC_20_1_1_1001UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1001SUP = $_POST['OC_20_1_1_1001SUP'];
                                            $OC_20_1_1_1001CUT = $_POST['OC_20_1_1_1001CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1001 = OC_20_1_1_1001 + $OC_20_1_1_1001SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1001 = OC_20_1_1_1001 - $OC_20_1_1_1001CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1001', '$uid', '$district', '$OC_20_1_1_1001SUP', '$OC_20_1_1_1001CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1002UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1002SUP = $_POST['OC_20_1_1_1002SUP'];
                                            $OC_20_1_1_1002CUT = $_POST['OC_20_1_1_1002CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1002 = OC_20_1_1_1002 + $OC_20_1_1_1002SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1002 = OC_20_1_1_1002 - $OC_20_1_1_1002CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1002', '$uid', '$district', '$OC_20_1_1_1002SUP', '$OC_20_1_1_1002CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1003_1UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1003_1SUP = $_POST['OC_20_1_1_1003_1SUP'];
                                            $OC_20_1_1_1003_1CUT = $_POST['OC_20_1_1_1003_1CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1003_1 = OC_20_1_1_1003_1 + $OC_20_1_1_1003_1SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1003_1 = OC_20_1_1_1003_1 - $OC_20_1_1_1003_1CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1003_1', '$uid', '$district', '$OC_20_1_1_1003_1SUP', '$OC_20_1_1_1003_1CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1003_2UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1003_2SUP = $_POST['OC_20_1_1_1003_2SUP'];
                                            $OC_20_1_1_1003_2CUT = $_POST['OC_20_1_1_1003_2CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1003_2 = OC_20_1_1_1003_2 + $OC_20_1_1_1003_2SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1003_2 = OC_20_1_1_1003_2 - $OC_20_1_1_1003_2CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1003_2', '$uid', '$district', '$OC_20_1_1_1003_2SUP', '$OC_20_1_1_1003_2CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1101UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1101SUP = $_POST['OC_20_1_1_1101SUP'];
                                            $OC_20_1_1_1101CUT = $_POST['OC_20_1_1_1101CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1101 = OC_20_1_1_1101 + $OC_20_1_1_1101SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1101 = OC_20_1_1_1101 - $OC_20_1_1_1101CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1101', '$uid', '$district', '$OC_20_1_1_1101SUP', '$OC_20_1_1_1101CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1201UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1201SUP = $_POST['OC_20_1_1_1201SUP'];
                                            $OC_20_1_1_1201CUT = $_POST['OC_20_1_1_1201CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1201 = OC_20_1_1_1201 + $OC_20_1_1_1201SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1201 = OC_20_1_1_1201 - $OC_20_1_1_1201CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1201', '$uid', '$district', '$OC_20_1_1_1201SUP', '$OC_20_1_1_1201CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1202UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1202SUP = $_POST['OC_20_1_1_1202SUP'];
                                            $OC_20_1_1_1202CUT = $_POST['OC_20_1_1_1202CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1202 = OC_20_1_1_1202 + $OC_20_1_1_1202SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1202 = OC_20_1_1_1202 - $OC_20_1_1_1202CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1202', '$uid', '$district', '$OC_20_1_1_1202SUP', '$OC_20_1_1_1202CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1203UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1203SUP = $_POST['OC_20_1_1_1203SUP'];
                                            $OC_20_1_1_1203CUT = $_POST['OC_20_1_1_1203CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1203 = OC_20_1_1_1203 + $OC_20_1_1_1203SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1203 = OC_20_1_1_1203 - $OC_20_1_1_1203CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1203', '$uid', '$district', '$OC_20_1_1_1203SUP', '$OC_20_1_1_1203CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1301UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1301SUP = $_POST['OC_20_1_1_1301SUP'];
                                            $OC_20_1_1_1301CUT = $_POST['OC_20_1_1_1301CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1301 = OC_20_1_1_1301 + $OC_20_1_1_1301SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1301 = OC_20_1_1_1301 - $OC_20_1_1_1301CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1301', '$uid', '$district', '$OC_20_1_1_1301SUP', '$OC_20_1_1_1301CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1302UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1302SUP = $_POST['OC_20_1_1_1302SUP'];
                                            $OC_20_1_1_1302CUT = $_POST['OC_20_1_1_1302CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1302 = OC_20_1_1_1302 + $OC_20_1_1_1302SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1302 = OC_20_1_1_1302 - $OC_20_1_1_1302CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1302', '$uid', '$district', '$OC_20_1_1_1302SUP', '$OC_20_1_1_1302CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1303UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1303SUP = $_POST['OC_20_1_1_1303SUP'];
                                            $OC_20_1_1_1303CUT = $_POST['OC_20_1_1_1303CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1303 = OC_20_1_1_1303 + $OC_20_1_1_1303SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1303 = OC_20_1_1_1303 - $OC_20_1_1_1303CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1303', '$uid', '$district', '$OC_20_1_1_1303SUP', '$OC_20_1_1_1303CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1401UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1401SUP = $_POST['OC_20_1_1_1401SUP'];
                                            $OC_20_1_1_1401CUT = $_POST['OC_20_1_1_1401CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1401 = OC_20_1_1_1401 + $OC_20_1_1_1401SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1401 = OC_20_1_1_1401 - $OC_20_1_1_1401CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1401', '$uid', '$district', '$OC_20_1_1_1401SUP', '$OC_20_1_1_1401CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1402_1UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1402_1SUP = $_POST['OC_20_1_1_1402_1SUP'];
                                            $OC_20_1_1_1402_1CUT = $_POST['OC_20_1_1_1402_1CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1402_1 = OC_20_1_1_1402_1 + $OC_20_1_1_1402_1SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1402_1 = OC_20_1_1_1402_1 - $OC_20_1_1_1402_1CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1402_1', '$uid', '$district', '$OC_20_1_1_1402_1SUP', '$OC_20_1_1_1402_1CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1402_2UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1402_2SUP = $_POST['OC_20_1_1_1402_2SUP'];
                                            $OC_20_1_1_1402_2CUT = $_POST['OC_20_1_1_1402_2CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1402_2 = OC_20_1_1_1402_2 + $OC_20_1_1_1402_2SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1402_2 = OC_20_1_1_1402_2 - $OC_20_1_1_1402_2CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1402_2', '$uid', '$district', '$OC_20_1_1_1402_2SUP', '$OC_20_1_1_1402_2CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1403UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1403SUP = $_POST['OC_20_1_1_1403SUP'];
                                            $OC_20_1_1_1403CUT = $_POST['OC_20_1_1_1403CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1403 = OC_20_1_1_1403 + $OC_20_1_1_1403SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1403 = OC_20_1_1_1403 - $OC_20_1_1_1403CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1403', '$uid', '$district', '$OC_20_1_1_1403SUP', '$OC_20_1_1_1403CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1404UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1404SUP = $_POST['OC_20_1_1_1404SUP'];
                                            $OC_20_1_1_1404CUT = $_POST['OC_20_1_1_1404CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1404 = OC_20_1_1_1404 + $OC_20_1_1_1404SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1404 = OC_20_1_1_1404 - $OC_20_1_1_1404CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1404', '$uid', '$district', '$OC_20_1_1_1404SUP', '$OC_20_1_1_1404CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1409_1_1UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1409_1_1SUP = $_POST['OC_20_1_1_1409_1_1SUP'];
                                            $OC_20_1_1_1409_1_1CUT = $_POST['OC_20_1_1_1409_1_1CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1409_1_1 = OC_20_1_1_1409_1_1 + $OC_20_1_1_1409_1_1SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1409_1_1 = OC_20_1_1_1409_1_1 - $OC_20_1_1_1409_1_1CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1409_1_1', '$uid', '$district', '$OC_20_1_1_1409_1_1SUP', '$OC_20_1_1_1409_1_1CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1409_1_2UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1409_1_2SUP = $_POST['OC_20_1_1_1409_1_2SUP'];
                                            $OC_20_1_1_1409_1_2CUT = $_POST['OC_20_1_1_1409_1_2CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1409_1_2 = OC_20_1_1_1409_1_2 + $OC_20_1_1_1409_1_2SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1409_1_2 = OC_20_1_1_1409_1_2 - $OC_20_1_1_1409_1_2CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1409_1_2', '$uid', '$district', '$OC_20_1_1_1409_1_2SUP', '$OC_20_1_1_1409_1_2CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1409_1_3UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1409_1_3SUP = $_POST['OC_20_1_1_1409_1_3SUP'];
                                            $OC_20_1_1_1409_1_3CUT = $_POST['OC_20_1_1_1409_1_3CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1409_1_3 = OC_20_1_1_1409_1_3 + $OC_20_1_1_1409_1_3SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1409_1_3 = OC_20_1_1_1409_1_3 - $OC_20_1_1_1409_1_3CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1409_1_3', '$uid', '$district', '$OC_20_1_1_1409_1_3SUP', '$OC_20_1_1_1409_1_3CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1409_2UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1409_2SUP = $_POST['OC_20_1_1_1409_2SUP'];
                                            $OC_20_1_1_1409_2CUT = $_POST['OC_20_1_1_1409_2CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1409_2 = OC_20_1_1_1409_2 + $OC_20_1_1_1409_2SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1409_2 = OC_20_1_1_1409_2 - $OC_20_1_1_1409_2CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1409_2', '$uid', '$district', '$OC_20_1_1_1409_2SUP', '$OC_20_1_1_1409_2CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1409_3_1UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1409_3_1SUP = $_POST['OC_20_1_1_1409_3_1SUP'];
                                            $OC_20_1_1_1409_3_1CUT = $_POST['OC_20_1_1_1409_3_1CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1409_3_1 = OC_20_1_1_1409_3_1 + $OC_20_1_1_1409_3_1SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1409_3_1 = OC_20_1_1_1409_3_1 - $OC_20_1_1_1409_3_1CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1409_3_1', '$uid', '$district', '$OC_20_1_1_1409_3_1SUP', '$OC_20_1_1_1409_3_1CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1409_3_2UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1409_3_2SUP = $_POST['OC_20_1_1_1409_3_2SUP'];
                                            $OC_20_1_1_1409_3_2CUT = $_POST['OC_20_1_1_1409_3_2CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1409_3_2 = OC_20_1_1_1409_3_2 + $OC_20_1_1_1409_3_2SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1409_3_2 = OC_20_1_1_1409_3_2 - $OC_20_1_1_1409_3_2CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1409_3_2', '$uid', '$district', '$OC_20_1_1_1409_3_2SUP', '$OC_20_1_1_1409_3_2CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1409_3_3UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1409_3_3SUP = $_POST['OC_20_1_1_1409_3_3SUP'];
                                            $OC_20_1_1_1409_3_3CUT = $_POST['OC_20_1_1_1409_3_3CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1409_3_3 = OC_20_1_1_1409_3_3 + $OC_20_1_1_1409_3_3SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1409_3_3 = OC_20_1_1_1409_3_3 - $OC_20_1_1_1409_3_3CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1409_3_3', '$uid', '$district', '$OC_20_1_1_1409_3_3SUP', '$OC_20_1_1_1409_3_3CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_1506UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_1506SUP = $_POST['OC_20_1_1_1506SUP'];
                                            $OC_20_1_1_1506CUT = $_POST['OC_20_1_1_1506CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_1506 = OC_20_1_1_1506 + $OC_20_1_1_1506SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_1506 = OC_20_1_1_1506 - $OC_20_1_1_1506CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_1506', '$uid', '$district', '$OC_20_1_1_1506SUP', '$OC_20_1_1_1506CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_2001UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_2001SUP = $_POST['OC_20_1_1_2001SUP'];
                                            $OC_20_1_1_2001CUT = $_POST['OC_20_1_1_2001CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_2001 = OC_20_1_1_2001 + $OC_20_1_1_2001SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_2001 = OC_20_1_1_2001 - $OC_20_1_1_2001CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_2001', '$uid', '$district', '$OC_20_1_1_2001SUP', '$OC_20_1_1_2001CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_2102UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_2102SUP = $_POST['OC_20_1_1_2102SUP'];
                                            $OC_20_1_1_2102CUT = $_POST['OC_20_1_1_2102CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_2102 = OC_20_1_1_2102 + $OC_20_1_1_2102SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_2102 = OC_20_1_1_2102 - $OC_20_1_1_2102CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_2102', '$uid', '$district', '$OC_20_1_1_2102SUP', '$OC_20_1_1_2102CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_2103UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_2103SUP = $_POST['OC_20_1_1_2103SUP'];
                                            $OC_20_1_1_2103CUT = $_POST['OC_20_1_1_2103CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_2103 = OC_20_1_1_2103 + $OC_20_1_1_2103SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_2103 = OC_20_1_1_2103 - $OC_20_1_1_2103CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_2103', '$uid', '$district', '$OC_20_1_1_2103SUP', '$OC_20_1_1_2103CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        } ?>
                                    
                                        
                                        <?php if(isset($_POST['OC_20_1_1_2401UP'])) {
                                            $district = $_POST['district'];
                                            $year = date("Y");
                                            $uname = ($_SESSION['cfouname']);
                                    $query0 = "SELECT * FROM login WHERE UNAME = '$uname'";
                                    $use=mysqli_query($db,$query0);
                                    $rek=mysqli_fetch_array($use);
                                    $uid = $rek['ID'];


                                            date_default_timezone_set("Asia/Colombo");
 $time = date("h:i:a");
 $date = date("Y/m/d");
                                            $OC_20_1_1_2401SUP = $_POST['OC_20_1_1_2401SUP'];
                                            $OC_20_1_1_2401CUT = $_POST['OC_20_1_1_2401CUT'];
                                            $SUP = "UPDATE assign_allocation SET OC_20_1_1_2401 = OC_20_1_1_2401 + $OC_20_1_1_2401SUP WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $CUT = "UPDATE assign_allocation SET OC_20_1_1_2401 = OC_20_1_1_2401 - $OC_20_1_1_2401CUT WHERE DISTRICT ='$district' AND U_DATE LIKE '%$year%'";
                                            $qr1=mysqli_query($db,$SUP);
                                            $qr2=mysqli_query($db,$CUT);
                                            if ($qr1 == true OR $qr2 == true OR $qr1 == true AND $qr2 == true){
                                                
                                                $abc="INSERT INTO allocation (id, object_code, user_id, district, supplementary_allocation, cutoff_allocation, dates, timed) VALUES (NULL, 'OC_20_1_1_2401', '$uid', '$district', '$OC_20_1_1_2401SUP', '$OC_20_1_1_2401CUT', '$date', '$time')";
                                                if ($db->query($abc))
        {header("location:change_allocation.php?dis=$district");}
    

                                            }
                                        }


                                        }

                                        ?>