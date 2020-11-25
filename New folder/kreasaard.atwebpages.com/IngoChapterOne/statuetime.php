<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 $statuetime=$_POST['statuetime'];

 $sql="UPDATE Ingo SET StatueTime = '$statuetime' WHERE ID = '$id'";
 $run=mysqli_query($con,$sql);
 if($run)
 {
   echo "sucess";
 }else{
   echo "Problem";
 }
 $con->close(); 
?>