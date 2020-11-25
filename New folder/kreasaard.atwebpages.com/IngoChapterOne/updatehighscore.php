<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 $highscore=$_POST['highscore'];
 $level=$_POST['level'];

 $sql="UPDATE Ingo SET $level = '$highscore' WHERE ID = '$id'";
 $run=mysqli_query($con,$sql);
 if($run)
 {
   echo "sucess";
 }else{
   echo "Problem";
 }
 $con->close(); 
?>