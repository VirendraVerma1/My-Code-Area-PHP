<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 $statdata=$_POST['statdata'];

 $sql="UPDATE Ingo SET StatData = '$statdata' WHERE ID = '$id'";
 $run=mysqli_query($con,$sql);
 if($run)
 {
   echo "sucess";
 }else{
   echo "Problem";
 }
 $con->close(); 
?>