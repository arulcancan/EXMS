 <?php
 include 'db.php';
                      if(isset($_POST['update'])) {
                      	$date=date("Y/F/d");
                      	$id = $_POST['id'];
                      $message = $_POST['msg'];

                      $sql = "UPDATE note SET TITLE = '$date', MESSAGE = '$message' WHERE ID = '$id' ";
                      $qr=mysqli_query($db,$sql);

                      if ($qr==true) {
                          header("location:memo.php");
                      }
                      else {
                      	echo "no";
                      }
                  }
                  else {
                  	echo "not";
                  }

                       ?>