<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 $name=$_POST['name'];

 $sql="UPDATE MultiGames SET Name = '$name' WHERE ID = '$id'";
 $run=mysqli_query($con,$sql);
 if($run)
 {
   echo "sucess";
 }else{
   echo "Problem";
 }
 $con->close(); 
?>