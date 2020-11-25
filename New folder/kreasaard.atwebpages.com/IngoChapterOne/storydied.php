<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 $storydied=$_POST['storydied'];

 $sql="UPDATE Ingo SET StoryDied = '$storydied' WHERE ID = '$id'";
 $run=mysqli_query($con,$sql);
 if($run)
 {
   echo "sucess";
 }else{
   echo "Problem";
 }
 $con->close(); 
?>