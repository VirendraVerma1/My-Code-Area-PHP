<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 $storycompleted=$_POST['storycompleted'];

 $sql="UPDATE Ingo SET StoryCompleted = '$storycompleted' WHERE ID = '$id'";
 $run=mysqli_query($con,$sql);
 if($run)
 {
   echo "sucess";
 }else{
   echo "Problem";
 }
 $con->close(); 
?>