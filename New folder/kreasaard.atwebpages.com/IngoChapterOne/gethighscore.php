<?php
 include("db_con.php");
 $id=$_POST['id'];
 $name=$_POST['level'];
// $name="0";
if($name!="0"){
 $sql="Select * from Ingo ORDER BY $name ASC";
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
     if($people<15)
     {
      echo "Name:".$data['Name'].",Highscore:".$data[$name].",ID:".$data['ID'].";";
      
      }
      $people++;
   }
   
   echo "Name:".$playername.",Highscore:".$playerHighscore.",ID:".$rank.";";
 }
 
 }else{
 $level1="Level1";
 $level2="Level2";
 $level2="Level2";
 $level2="Level2";
 $level2="Level2";
 $level2="Level2";
 $level2="Level2";
 $level2="Level2";
 $level2="Level2";
 
 
 $id_list=array();
 $name_list=array();
 $total_list=array();
 
         $sql="Select Level1,Level2,Level3,Level4,Level5,Level6,Level7,Level8,Level9,Level10 from Ingo";
         
         $run=mysqli_query($con,$sql);
         if($run>0)
         {
                 
                   $people=0;
                   $flag=0;
                   $playername="";
                   $playerHighscore=0;
                   $rank=0;
                   $sum=0;
                   while($data=mysqli_fetch_assoc($run))
                   {
                   $sum=0;
                     if($data['Level10']!=null)
                     {
                           $sum +=$data['Level10'];
                     }else{
                             //break;
                     }
                     if($data['Level9']!=null)
                     {
                           $sum +=$data['Level9'];
                     }else{
                             //break;
                     }
                     if($data['Level8']!=null)
                     {
                           $sum +=$data['Level8'];
                     }else{
                            // break;
                     }
                     if($data['Level7']!=null)
                     {
                           $sum +=$data['Level7'];
                     }else{
                            // break;
                     }
                     if($data['Level6']!=null)
                     {
                           $sum +=$data['Level6'];
                     }else{
                            // break;
                     }
                     if($data['Level5']!=null)
                     {
                           $sum +=$data['Level5'];
                     }else{
                            // break;
                     }
                     if($data['Level4']!=null)
                     {
                           $sum +=$data['Level4'];
                     }else{
                            // break;
                     }
                     if($data['Level3']!=null)
                     {
                           $sum +=$data['Level3'];
                     }else{
                             //break;
                     }
                     if($data['Level2']!=null)
                     {
                           $sum +=$data['Level2'];
                     }else{
                             //break;
                     }
                     if($data['Level1']!=null)
                     {
                           $sum +=$data['Level1'];
                     }else{
                            // break;
                     }
                     
                     array_push($id_list,$data['ID']);
                     array_push($name_lis,$data['Name']);
                     array_push($total_list,$sum);
                     
                     
                   }
                   
                   //after fetching all the score sort the scores
                   for($i=0;$i<count($total_list);$i++)
                   {
                           echo $total_list[$i];
                   }
                   
                   
         }

 }
 $con->close(); 


/*


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
                     if($people<15)
                     {
                      echo "Name:".$data['Name'].",Highscore1:".$data[$name].",Highscore2:".$data[$name1].",ID:".$data['ID'].";";
                      
                      }
                      $people++;
                   }
                   
                   
                   
                   */
                   
                   
?>