<?php

include ('db.php');



$id=$_GET['id'];

$query = "SELECT * FROM schedule02_temp WHERE ID = $id";
$sql=mysqli_query($db,$query);
$res=mysqli_fetch_array($sql);


$USER_NAME = $res['USER_NAME']; 
$DISTRICT = $res['DISTRICT']; 
$U_DATE = $res['U_DATE']; 
$U_TIME = $res['U_TIME'];
$OC_20_1_1_1001 = $res['OC_20_1_1_1001'];
$OC_20_1_1_1002 = $res['OC_20_1_1_1002'];
$OC_20_1_1_1003_1 = $res['OC_20_1_1_1003_1'];
$OC_20_1_1_1003_2 = $res['OC_20_1_1_1003_2'];
$OC_20_1_1_1101 = $res['OC_20_1_1_1101'];
$OC_20_1_1_1201 = $res['OC_20_1_1_1201'];
$OC_20_1_1_1202 = $res['OC_20_1_1_1202'];
$OC_20_1_1_1203 = $res['OC_20_1_1_1203'];
$OC_20_1_1_1301 = $res['OC_20_1_1_1301'];
$OC_20_1_1_1302 = $res['OC_20_1_1_1302'];
$OC_20_1_1_1303 = $res['OC_20_1_1_1303'];
$OC_20_1_1_1401 = $res['OC_20_1_1_1401'];
$OC_20_1_1_1402_1 = $res['OC_20_1_1_1402_1'];
$OC_20_1_1_1402_2 = $res['OC_20_1_1_1402_2'];
$OC_20_1_1_1403 = $res['OC_20_1_1_1403'];
$OC_20_1_1_1404 = $res['OC_20_1_1_1404'];
$OC_20_1_1_1409_1_1 = $res['OC_20_1_1_1409_1_1'];
$OC_20_1_1_1409_1_2 = $res['OC_20_1_1_1409_1_2'];
$OC_20_1_1_1409_1_3 = $res['OC_20_1_1_1409_1_3'];
$OC_20_1_1_1409_2 = $res['OC_20_1_1_1409_2'];
$OC_20_1_1_1409_2_A1 = $res['OC_20_1_1_1409_2_A1'];
$OC_20_1_1_1409_2_A2 = $res['OC_20_1_1_1409_2_A2'];
$OC_20_1_1_1409_2_B1 = $res['OC_20_1_1_1409_2_B1'];
$OC_20_1_1_1409_2_B2 = $res['OC_20_1_1_1409_2_B2'];
$OC_20_1_1_1409_2_B3 = $res['OC_20_1_1_1409_2_B3'];
$OC_20_1_1_1409_2_C1 = $res['OC_20_1_1_1409_2_C1'];
$OC_20_1_1_1409_2_C2 = $res['OC_20_1_1_1409_2_C2'];
$OC_20_1_1_1409_2_C3 = $res['OC_20_1_1_1409_2_C3'];
$OC_20_1_1_1409_2_C4 = $res['OC_20_1_1_1409_2_C4'];
$OC_20_1_1_1409_2_C5 = $res['OC_20_1_1_1409_2_C5'];
$OC_20_1_1_1409_2_C6 = $res['OC_20_1_1_1409_2_C6'];
$OC_20_1_1_1409_2_C7 = $res['OC_20_1_1_1409_2_C7'];
$OC_20_1_1_1409_2_D1 = $res['OC_20_1_1_1409_2_D1'];
$OC_20_1_1_1409_2_D2 = $res['OC_20_1_1_1409_2_D2'];
$OC_20_1_1_1409_2_D3 = $res['OC_20_1_1_1409_2_D3'];
$OC_20_1_1_1409_2_D4 = $res['OC_20_1_1_1409_2_D4'];
$OC_20_1_1_1409_2_E1 = $res['OC_20_1_1_1409_2_E1'];
$OC_20_1_1_1409_2_E2 = $res['OC_20_1_1_1409_2_E2'];
$OC_20_1_1_1409_2_E3 = $res['OC_20_1_1_1409_2_E3'];
$OC_20_1_1_1409_2_E4 = $res['OC_20_1_1_1409_2_E4'];
$OC_20_1_1_1409_2_F1 = $res['OC_20_1_1_1409_2_F1'];
$OC_20_1_1_1409_2_F2 = $res['OC_20_1_1_1409_2_F2'];
$OC_20_1_1_1409_2_F3 = $res['OC_20_1_1_1409_2_F3'];
$OC_20_1_1_1409_2_F4 = $res['OC_20_1_1_1409_2_F4'];
$OC_20_1_1_1409_2_G1 = $res['OC_20_1_1_1409_2_G1'];
$OC_20_1_1_1409_2_G2 = $res['OC_20_1_1_1409_2_G2'];
$OC_20_1_1_1409_2_G3 = $res['OC_20_1_1_1409_2_G3'];
$OC_20_1_1_1409_2_H1 = $res['OC_20_1_1_1409_2_H1'];
$OC_20_1_1_1409_2_H2 = $res['OC_20_1_1_1409_2_H2'];
$OC_20_1_1_1409_2_H3 = $res['OC_20_1_1_1409_2_H3'];
$OC_20_1_1_1409_2_H4 = $res['OC_20_1_1_1409_2_H4'];
$OC_20_1_1_1409_2_H5 = $res['OC_20_1_1_1409_2_H5'];
$OC_20_1_1_1409_2_H6 = $res['OC_20_1_1_1409_2_H6'];
$OC_20_1_1_1409_2_H7 = $res['OC_20_1_1_1409_2_H7'];
$OC_20_1_1_1409_2_H8 = $res['OC_20_1_1_1409_2_H8'];
$OC_20_1_1_1409_2_I1 = $res['OC_20_1_1_1409_2_I1'];
$OC_20_1_1_1409_2_I2 = $res['OC_20_1_1_1409_2_I2'];
$OC_20_1_1_1409_2_I3 = $res['OC_20_1_1_1409_2_I3'];
$OC_20_1_1_1409_2_I4 = $res['OC_20_1_1_1409_2_I4'];
$OC_20_1_1_1409_2_I5 = $res['OC_20_1_1_1409_2_I5'];
$OC_20_1_1_1409_2_J1 = $res['OC_20_1_1_1409_2_J1'];
$OC_20_1_1_1409_2_J2 = $res['OC_20_1_1_1409_2_J2'];
$OC_20_1_1_1409_2_J3 = $res['OC_20_1_1_1409_2_J3'];
$OC_20_1_1_1409_2_J4 = $res['OC_20_1_1_1409_2_J4'];
$OC_20_1_1_1409_2_J5 = $res['OC_20_1_1_1409_2_J5'];
$OC_20_1_1_1409_2_J6 = $res['OC_20_1_1_1409_2_J6'];
$OC_20_1_1_1409_2_J7 = $res['OC_20_1_1_1409_2_J7'];
$OC_20_1_1_1409_2_J8 = $res['OC_20_1_1_1409_2_J8'];
$OC_20_1_1_1409_2_J9 = $res['OC_20_1_1_1409_2_J9'];
$OC_20_1_1_1409_2_J10 = $res['OC_20_1_1_1409_2_J10'];
$OC_20_1_1_1409_2_J11 = $res['OC_20_1_1_1409_2_J11'];
$OC_20_1_1_1409_3_1 = $res['OC_20_1_1_1409_3_1'];
$OC_20_1_1_1409_3_2 = $res['OC_20_1_1_1409_3_2'];
$OC_20_1_1_1409_3_3 = $res['OC_20_1_1_1409_3_3'];
$OC_20_1_1_1506 = $res['OC_20_1_1_1506'];
$OC_20_1_1_2001 = $res['OC_20_1_1_2001'];
$OC_20_1_1_2102 = $res['OC_20_1_1_2102'];
$OC_20_1_1_2103 = $res['OC_20_1_1_2103']; 
$OC_20_1_1_2401 = $res['OC_20_1_1_2401'];



 $abc = "INSERT INTO schedule02 (USER_NAME, DISTRICT, U_DATE, U_TIME, OC_20_1_1_1001, OC_20_1_1_1002, OC_20_1_1_1003_1, OC_20_1_1_1003_2, OC_20_1_1_1101, OC_20_1_1_1201, OC_20_1_1_1202, OC_20_1_1_1203, OC_20_1_1_1301, OC_20_1_1_1302, OC_20_1_1_1303, OC_20_1_1_1401, OC_20_1_1_1402_1, OC_20_1_1_1402_2, OC_20_1_1_1403, OC_20_1_1_1404, OC_20_1_1_1409_1_1, OC_20_1_1_1409_1_2, OC_20_1_1_1409_1_3, OC_20_1_1_1409_2, OC_20_1_1_1409_2_A1, OC_20_1_1_1409_2_A2, OC_20_1_1_1409_2_B1, OC_20_1_1_1409_2_B2, OC_20_1_1_1409_2_B3, OC_20_1_1_1409_2_C1, OC_20_1_1_1409_2_C2, OC_20_1_1_1409_2_C3, OC_20_1_1_1409_2_C4, OC_20_1_1_1409_2_C5, OC_20_1_1_1409_2_C6, OC_20_1_1_1409_2_C7, OC_20_1_1_1409_2_D1, OC_20_1_1_1409_2_D2, OC_20_1_1_1409_2_D3, OC_20_1_1_1409_2_D4, OC_20_1_1_1409_2_E1,  OC_20_1_1_1409_2_E2, OC_20_1_1_1409_2_E3, OC_20_1_1_1409_2_E4, OC_20_1_1_1409_2_F1, OC_20_1_1_1409_2_F2, OC_20_1_1_1409_2_F3, OC_20_1_1_1409_2_F4, OC_20_1_1_1409_2_G1, OC_20_1_1_1409_2_G2, OC_20_1_1_1409_2_G3, OC_20_1_1_1409_2_H1, OC_20_1_1_1409_2_H2, OC_20_1_1_1409_2_H3, OC_20_1_1_1409_2_H4, OC_20_1_1_1409_2_H5, OC_20_1_1_1409_2_H6, OC_20_1_1_1409_2_H7, OC_20_1_1_1409_2_H8, OC_20_1_1_1409_2_I1, OC_20_1_1_1409_2_I2, OC_20_1_1_1409_2_I3, OC_20_1_1_1409_2_I4, OC_20_1_1_1409_2_I5, OC_20_1_1_1409_2_J1, OC_20_1_1_1409_2_J2, OC_20_1_1_1409_2_J3, OC_20_1_1_1409_2_J4, OC_20_1_1_1409_2_J5, OC_20_1_1_1409_2_J6, OC_20_1_1_1409_2_J7, OC_20_1_1_1409_2_J8, OC_20_1_1_1409_2_J9, OC_20_1_1_1409_2_J10, OC_20_1_1_1409_2_J11, OC_20_1_1_1409_3_1, OC_20_1_1_1409_3_2, OC_20_1_1_1409_3_3, OC_20_1_1_1506, OC_20_1_1_2001, OC_20_1_1_2102, OC_20_1_1_2103, OC_20_1_1_2401, REVISED, FINISH) VALUES (
 '$USER_NAME', 
 '$DISTRICT', 
 '$U_DATE', 
 '$U_TIME', 
 '$OC_20_1_1_1001',
 '$OC_20_1_1_1002',
 '$OC_20_1_1_1003_1',
 '$OC_20_1_1_1003_2',
 '$OC_20_1_1_1101',
 '$OC_20_1_1_1201',
 '$OC_20_1_1_1202',
 '$OC_20_1_1_1203',
 '$OC_20_1_1_1301',
 '$OC_20_1_1_1302',
 '$OC_20_1_1_1303',
 '$OC_20_1_1_1401',
 '$OC_20_1_1_1402_1',
 '$OC_20_1_1_1402_2',
 '$OC_20_1_1_1403',
 '$OC_20_1_1_1404',
 '$OC_20_1_1_1409_1_1',
 '$OC_20_1_1_1409_1_2',
 '$OC_20_1_1_1409_1_3',
 '$OC_20_1_1_1409_2',
 '$OC_20_1_1_1409_2_A1',
 '$OC_20_1_1_1409_2_A2',
 '$OC_20_1_1_1409_2_B1',
 '$OC_20_1_1_1409_2_B2',
 '$OC_20_1_1_1409_2_B3',
 '$OC_20_1_1_1409_2_C1',
 '$OC_20_1_1_1409_2_C2',
 '$OC_20_1_1_1409_2_C3',
 '$OC_20_1_1_1409_2_C4',
 '$OC_20_1_1_1409_2_C5',
 '$OC_20_1_1_1409_2_C6',
 '$OC_20_1_1_1409_2_C7',
 '$OC_20_1_1_1409_2_D1',
 '$OC_20_1_1_1409_2_D2',
 '$OC_20_1_1_1409_2_D3',
 '$OC_20_1_1_1409_2_D4',
 '$OC_20_1_1_1409_2_E1',
 '$OC_20_1_1_1409_2_E2',
 '$OC_20_1_1_1409_2_E3',
 '$OC_20_1_1_1409_2_E4',
 '$OC_20_1_1_1409_2_F1',
 '$OC_20_1_1_1409_2_F2',
 '$OC_20_1_1_1409_2_F3',
 '$OC_20_1_1_1409_2_F4',
 '$OC_20_1_1_1409_2_G1',
 '$OC_20_1_1_1409_2_G2',
 '$OC_20_1_1_1409_2_G3',
 '$OC_20_1_1_1409_2_H1',
 '$OC_20_1_1_1409_2_H2',
 '$OC_20_1_1_1409_2_H3',
 '$OC_20_1_1_1409_2_H4',
 '$OC_20_1_1_1409_2_H5',
 '$OC_20_1_1_1409_2_H6',
 '$OC_20_1_1_1409_2_H7',
 '$OC_20_1_1_1409_2_H8',
 '$OC_20_1_1_1409_2_I1',
 '$OC_20_1_1_1409_2_I2',
 '$OC_20_1_1_1409_2_I3',
 '$OC_20_1_1_1409_2_I4',
 '$OC_20_1_1_1409_2_I5',
 '$OC_20_1_1_1409_2_J1',
 '$OC_20_1_1_1409_2_J2',
 '$OC_20_1_1_1409_2_J3',
 '$OC_20_1_1_1409_2_J4',
 '$OC_20_1_1_1409_2_J5',
 '$OC_20_1_1_1409_2_J6',
 '$OC_20_1_1_1409_2_J7',
 '$OC_20_1_1_1409_2_J8',
 '$OC_20_1_1_1409_2_J9',
 '$OC_20_1_1_1409_2_J10',
 '$OC_20_1_1_1409_2_J11',
 '$OC_20_1_1_1409_3_1',
 '$OC_20_1_1_1409_3_2',
 '$OC_20_1_1_1409_3_3',
 '$OC_20_1_1_1506',
 '$OC_20_1_1_2001',
 '$OC_20_1_1_2102',
 '$OC_20_1_1_2103', 
 '$OC_20_1_1_2401' , '','')";



                                        if ($db->query($abc))
  {
    
    echo "done";

    $del = "DELETE FROM schedule02_temp WHERE ID = $id";


                    $delquery=mysqli_query($db,$del);
                    header("location:approval.php");
}
  else
  {
    echo "$id";
  }



                                       
                                       



 ?>