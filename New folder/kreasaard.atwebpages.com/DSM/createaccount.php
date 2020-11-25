<?php 
        include("db_con.php");
        
        
        $name=$_POST['name'];
        date_default_timezone_set('India/Delhi');
        $date=date('Y/m/d H:i:s');
        $time=1;
        $sql="INSERT INTO DMSaccounts (Name, Date) VALUES ('$name', '$date')";
       
	if ($con->query($sql) === TRUE)
        {
          $last_id = $con->insert_id;   
         
                echo "ID:".$last_id;
        }
	else{
                echo "error";
        }
        $con->close(); 
        
?>