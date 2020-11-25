<?php
//this file delete perticular image from server and DMSimagedata
//TODO check if the last image then remove dmsdata row


 include("db_con.php");
 
 $userid=$_POST['id'];
 $groupid=$_POST['groupid'];
 $imageid=$_POST['imageid'];
 
 $sql="Select * from DMSimagedata where UserID='$userid' and GroupID='$groupid' and ImageID='$imageid'";
 $run=mysqli_query($con,$sql);

 if($run>0)
 {
   
   $data=mysqli_fetch_assoc($run)
   unlink("upload/".$data['FileName']);
   $sql="DELETE from DMSimagedata where UserID='$userid' and GroupID='$groupid' and ImageID='$imageid';"
   mysqli_query($con,$sql);
   
   echo "success";
  }
  $con->close(); 
?>