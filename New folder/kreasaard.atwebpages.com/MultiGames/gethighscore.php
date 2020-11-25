<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 $name=$_POST['name'];


 $sql="Select * from MultiGames ORDER BY $name DESC";
 $run=mysqli_query($con,$sql);

 if($run>0)
 {
   $people=0;
   $flag=0;
   $playername="";
   $playerHighscore=0;
   $rank=1;
   while($data=mysqli_fetch_assoc($run))
   {
   
     if($data['ID']==$id)
     {
      $playername=$data['Name'];
      $playerHighscore=$data[$name];
      $flag=1;
     }
     elseif($flag==0)
     {
        $rank++;
     }
     if($people<21)
     {
      echo "Name:".$data['Name'].",Highscore:".$data[$name].",ID:".$data['ID'].";";
      
      }
      $people++;
   }
   
   echo "Name:".$playername.",Highscore:".$playerHighscore.",ID:".$rank.";";
 }
 $con->close(); 
?>