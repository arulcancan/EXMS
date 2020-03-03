<?php 
session_start();
ob_start();
if (!isset($_SESSION['cfouname'])) 
{
     header("location:../index.php?mes=<h2>Please Login Here!</h2> ");
}
include 'db.php';
?>
<script src="js/jquery.min.js"></script>
      <script  src="js/index.js"></script>
      <?php 
$uname = $_SESSION['cfouname'];

if (isset($_POST["chack"])) 
{
	$district = $_POST["chack"];
	$years = date("Y");

	$query = "SELECT * FROM assign_allocation WHERE DISTRICT = '$district' AND U_DATE LIKE '%$years%' ";
	$result = $db->query($query);
	if ($result->num_rows>=1) 
		 {
		 	echo "<h4 style='color:orange;''> $district Allocation Already Assigned..</h4>";
		 	?>
		 	<script type="text/javascript">
		 	$("#frmm").hide();
		 	</script>
		 	<?php
		 }
		 else
		 {
		 	echo "";
		 	?>
		 	<script type="text/javascript">
		 	$("#frmm").show();
		 	</script>
		 	<?php 
		 }
}
else
{
	echo "";
}

ob_end_flush();
?>
