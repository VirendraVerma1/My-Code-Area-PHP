<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 $watchads=$_POST['watchads'];

 $sql="UPDATE Ingo SET WatchAds = '$watchads' WHERE ID = '$id'";
 $run=mysqli_query($con,$sql);
 if($run)
 {
   echo "sucess";
 }else{
   echo "Problem";
 }
 $con->close(); 
?>