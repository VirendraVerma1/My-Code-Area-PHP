<?php
//This file changes file name and set process to 2 for making pdf and returns Success
 include("db_con.php");
 
 $id=$_POST['id'];
 $groupId=$_POST['groupId'];
 $filename=$_POST['filename'];
 $process=2;
 
 $sql="UPDATE DMSdata SET FileName ='$filename', Process = '$process' WHERE GroupID='groupId'";
 $run=mysqli_query($con,$sql);

 if($run>0)
 {
   echo "Success";
   
 }else{
      echo "Failed";   
 }
  $con->close(); 
?>