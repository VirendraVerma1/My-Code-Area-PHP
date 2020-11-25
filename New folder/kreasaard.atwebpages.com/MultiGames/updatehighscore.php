<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 $highscore=$_POST['highscore'];
 $name=$_POST['name'];

 $sql="UPDATE MultiGames SET $name = '$highscore' WHERE ID = '$id'";
 $run=mysqli_query($con,$sql);
 if($run)
 {
   echo "sucess";
 }else{
   echo "Problem";
 }
 $con->close(); 
?>