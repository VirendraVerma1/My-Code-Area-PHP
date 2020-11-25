<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 $storytime=$_POST['storytime'];

 $sql="UPDATE Ingo SET StoryTime = '$storytime' WHERE ID = '$id'";
 $run=mysqli_query($con,$sql);
 if($run)
 {
   echo "sucess";
 }else{
   echo "Problem";
 }
 $con->close(); 
?>