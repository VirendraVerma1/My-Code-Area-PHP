<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 $timeplayed=$_POST['timeplayed'];
 $level=$_POST['level'];
 $ads=$_POST['ads'];
 $leveltime=$_POST['leveltime'];

 date_default_timezone_set('India/Delhi');
 $date=date('Y/m/d H:i:s');
 
 $sql="UPDATE PaperInTrash SET TimePlayed = '$timeplayed', Level = '$level', Date = '$date', Ads = '$ads', LevelTime = '$leveltime' WHERE ID = '$id'";
 $run=mysqli_query($con,$sql);
 if($run)
 {
   echo "sucess";
 }else{
   echo "Problem";
 }
 $con->close(); 
?>