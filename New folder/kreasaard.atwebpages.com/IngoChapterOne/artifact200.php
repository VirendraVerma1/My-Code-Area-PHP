<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 $artifact200=$_POST['artifact200'];

 $sql="UPDATE Ingo SET Artifact200 = '$artifact200' WHERE ID = '$id'";
 $run=mysqli_query($con,$sql);
 if($run)
 {
   echo "sucess";
 }else{
   echo "Problem";
 }
 $con->close(); 
?>