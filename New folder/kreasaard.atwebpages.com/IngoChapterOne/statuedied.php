<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 $statuedied=$_POST['statuedied'];

 $sql="UPDATE Ingo SET StatueDied = '$statuedied' WHERE ID = '$id'";
 $run=mysqli_query($con,$sql);
 if($run)
 {
   echo "sucess";
 }else{
   echo "Problem";
 }
 $con->close(); 
?>