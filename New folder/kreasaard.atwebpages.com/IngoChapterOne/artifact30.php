<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 $artifact30=$_POST['artifact30'];

 $sql="UPDATE Ingo SET Artifact30 = '$artifact30' WHERE ID = '$id'";
 $run=mysqli_query($con,$sql);
 if($run)
 {
   echo "sucess";
 }else{
   echo "Problem";
 }
 $con->close(); 
?>