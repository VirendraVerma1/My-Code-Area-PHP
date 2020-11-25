<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 date_default_timezone_set('India/Delhi');
 $datecurret=date('Y/m/d H:i:s');
 
 $sql="Select Per10MinClaim from Ingo WHERE ID = '$id'";
 $run=mysqli_query($con,$sql);
         if ($run->num_rows > 0) {
          // output data of each row
          while($row = $run->fetch_assoc()) {
            $claimedTime=$row["Per10MinClaim"];
            $date1 = $datecurret;
                $date2 = $claimedTime;
                 
                //Convert them to timestamps.
                $date1Timestamp = strtotime($date1);
                $date2Timestamp = strtotime($date2);
                 
                //Calculate the difference.
                $difference = $date1Timestamp - $date2Timestamp;
                 
            echo (300-$difference);
          }
        } else {
          echo "0 results";
        }
 $con->close(); 
?>