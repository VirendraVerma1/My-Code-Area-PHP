<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 $watchads=$_POST['watchads'];
 $artifact10=$_POST['artifact10'];
 $artifact30=$_POST['artifact30'];
 $artifact100=$_POST['artifact100'];
 $artifact200=$_POST['artifact200'];
 $artifact500=$_POST['artifact500'];

 $sql="UPDATE Ingo SET WatchAds = '$watchads',Artifact10 = '$artifact10' ,Artifact30 = '$artifact30', Artifact100 = '$artifact100', Artifact200 = '$artifact200', Artifact500 = '$artifact500' WHERE ID = '$id'";
 $run=mysqli_query($con,$sql);
 if($run)
 {
   echo "sucess";
 }else{
   echo "Problem";
 }
 $con->close(); 
?>