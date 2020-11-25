<?php

        include("db_con.php");
        
        $name=$_POST['name'];
        date_default_timezone_set('India/Delhi');
        $date=date('Y/m/d H:i:s');
        $time=1;
        $sql="INSERT INTO PaperInTrash (Name, TimePlayed, Date) VALUES ('$name', '$time', '$date')";
       
	if ($con->query($sql) === TRUE)
        {
          $last_id = $con->insert_id;   
         
                echo "Created:".$last_id;
        }
	else{
                echo "error";
        }
        $con->close(); 

?>