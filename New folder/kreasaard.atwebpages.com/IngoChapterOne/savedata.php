<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 $savedata=$_POST['savedata'];
 $stats=$_POST['stats'];
 $lockeddoor=$_POST['lockeddoor'];
 $doublelockeddoor=$_POST['doublelockeddoor'];
 $notes=$_POST['notes'];
 $position=$_POST['position'];
 $InventryObject=$_POST['inventryObject'];

 $sql="UPDATE Ingo SET StatData = '$stats',LockedDoor = '$lockeddoor',DoubleLockedDoor = '$doublelockeddoor',Notes = '$notes',Position = '$position',InventryObject = '$InventryObject' WHERE ID = '$id'";
 $run=mysqli_query($con,$sql);
 if($run)
 {
   echo "sucess";
 }else{
   echo "Problem";
 }
 $con->close(); 
?>