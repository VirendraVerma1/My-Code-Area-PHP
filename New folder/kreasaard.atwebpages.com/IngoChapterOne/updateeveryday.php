<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 date_default_timezone_set('India/Delhi');
 $date=date('Y/m/d H:i:s');

 $sql="UPDATE Ingo SET PerDayClaim = '$date' WHERE ID = '$id'";
 $run=mysqli_query($con,$sql);
 if($run)
 {
   echo "sucess";
 }else{
   echo "Problem";
 }
 $con->close(); 
?>