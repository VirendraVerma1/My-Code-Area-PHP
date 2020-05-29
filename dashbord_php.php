<?php
ob_start();
session_start();
include("db_con.php");

//for uploading files

if(isset($_POST['upload_files']))
{
	$table_name="userid_".$_SESSION['user_id'];
	//get total rows in users table_name
	$result=mysqli_query($con,"select count(1) FROM $table_name");
	$row=mysqli_fetch_array($result);
	$total=$row[0];
	//getting image file
	
			$imagename=$_FILES['sbgfile']['name'];
			$tempname=$_FILES['sbgfile']['tmp_name'];
			$new_file_name="id_".($total+1)."_user_".$_SESSION['user_id']."_".$imagename;
			//rename($imagename,$new_file_name);
			
			
			
			
			$folder_name=$_SESSION['folder_name'];
			
			//create a folder if not exist
			$dirname = $folder_name;
			$filename_with_path =  $dirname . "/".$imagename;
			$_SESSION['path']= $filename_with_path;
			if (!file_exists($filename_with_path)) {
				mkdir( $dirname, 0777);
				echo "The directory $dirname was successfully created.";
			} else {
				echo "The directory $dirname exists.";
			}
			if(move_uploaded_file($tempname,$filename_with_path))
			{
				
				$day_uploaded=date("Y,m,d h:i:s");
				
				$sql="INSERT INTO $table_name(FileName,PathName,DayUploaded) VALUES ('$imagename','$filename_with_path','$day_uploaded')";
				echo $sql;
				$run=mysqli_query($con,$sql);
				if($run)
				{
					header("Location: dashbord.php");
					ob_end_flush();
					exit();
				}
				else
				{
					header("Location: login.php");
					ob_end_flush();
					exit();
				}
	
			}else
			{
				header("Location: dashbord.php?uploadfailed");
					ob_end_flush();
					exit();
			}
}

?>