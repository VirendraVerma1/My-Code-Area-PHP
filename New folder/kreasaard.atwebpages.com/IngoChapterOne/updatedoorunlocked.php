<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 $doorunlocked=$_POST['doorunlocked'];

 $sql="UPDATE Ingo SET DoorUnlocked = '$doorunlocked' WHERE ID = '$id'";
 $run=mysqli_query($con,$sql);
 if($run)
 {
   echo "sucess";
 }else{
   echo "Problem";
 }
 $con->close(); 
?>