<?php
 include("db_con.php");
 
 $id=$_POST['id'];
 
 $sql="Select * from DMSdata ORDER BY ID DESC";
 $run=mysqli_query($con,$sql);

 if($run>0)
 {
   
   while($data=mysqli_fetch_assoc($run))
   {
   
     if($data['UserID']==$id)
     {
             echo "UserID:".$data['UserID']."|FileName:".$data['FileName'].
             "|Date:".$data['Date']."|GroupID:".$data['GroupID']."|PDFCode:"
             .$data['PDFCode'].";";
     
     }
     
   }
  }
  $con->close(); 
?>