<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 $artifact500=$_POST['artifact500'];

 $sql="UPDATE Ingo SET Artifact500 = '$artifact500' WHERE ID = '$id'";
 $run=mysqli_query($con,$sql);
 if($run)
 {
   echo "sucess";
 }else{
   echo "Problem";
 }
 $con->close(); 
?>