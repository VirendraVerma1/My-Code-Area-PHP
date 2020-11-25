<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 $timeplayed=$_POST['timeplayed'];

 $sql="UPDATE Ingo SET TimePlayed = '$timeplayed' WHERE ID = '$id'";
 $run=mysqli_query($con,$sql);
 if($run)
 {
   echo "sucess";
 }else{
   echo "Problem";
 }
 $con->close(); 
?>