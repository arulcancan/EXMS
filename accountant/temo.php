<?php

include ('db.php');



$id=$_GET['id'];





 $abc = "UPDATE schedule02 SET FINISH = 'Done' WHERE ID = $id ";



                                        if ($db->query($abc))
  {
    
    

    


                    header("location:edit_sehedule.php");
}
  else
  {
    echo "not done";
  }



                                       
                                       



 ?>