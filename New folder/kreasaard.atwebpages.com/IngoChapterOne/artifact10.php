<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 $artifact10=$_POST['artifact10'];

 $sql="UPDATE Ingo SET Artifact10 = '$artifact10' WHERE ID = '$id'";
 $run=mysqli_query($con,$sql);
 if($run)
 {
   echo "sucess";
 }else{
   echo "Problem";
 }
 $con->close(); 
?>