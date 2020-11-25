<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 $artifact100=$_POST['artifact100'];

 $sql="UPDATE Ingo SET Artifact100 = '$artifact100' WHERE ID = '$id'";
 $run=mysqli_query($con,$sql);
 if($run)
 {
   echo "sucess";
 }else{
   echo "Problem";
 }
 $con->close(); 
?>