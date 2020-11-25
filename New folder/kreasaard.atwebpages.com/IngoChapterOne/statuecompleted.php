<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 $statuecompleted=$_POST['statuecompleted'];

 $sql="UPDATE Ingo SET StatueCompleted = '$statuecompleted' WHERE ID = '$id'";
 $run=mysqli_query($con,$sql);
 if($run)
 {
   echo "sucess";
 }else{
   echo "Problem";
 }
 $con->close(); 
?>