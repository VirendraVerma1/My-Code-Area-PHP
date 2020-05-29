<?php
ob_start();
session_start();
include("db_con.php");
if(isset($_POST['submit_signup']))
{
    $first_name=$_POST['fname'];
    $last_name=$_POST['lname'];
    $email_name=$_POST['email'];
    $password_name=$_POST['pass'];
    
    $sql="SELECT * FROM users WHERE Email='$email_name'";
    $run=mysqli_query($con,$sql);
    if(mysqli_num_rows($run)>0)
    {
        //give acount exist error message
		
		
        header("Location: signup.php?account=exist1".$email_name);
    	ob_end_flush();
		exit();
		
    }
    else
    {
		//merge name
		$str=$first_name." ".$last_name;
        //create new account
        $sql="INSERT INTO users(Username,Email,Password) VALUES ('$str','$email_name','$password_name')";
		$run1=mysqli_query($con,$sql);
		if($run1)
		{
		    
		    //getting the of the above email address                                         
		    $sql="SELECT * FROM users WHERE Email='$email_name'";
             $run4=mysqli_query($con,$sql);
             if(mysqli_num_rows($run4)>0)
               {
                   $data=mysqli_fetch_assoc($run4);
                   $_SESSION['user_id']=$data['ID'];
                   
                   //now creating userid table and user member location table
		          $table_name="userid_".$_SESSION['user_id'];
		          $sql="CREATE TABLE $table_name(ID  INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,FileName VARCHAR(100) NOT NULL,FileStoredName VARCHAR(150) NULL,PathName VARCHAR(150) NULL,DayUploaded date NULL)";
		          /*$con->query($sql); //table created
            			
            			 //now creating userid table and user member location table
		          $table_name="userid_".$_SESSION['user_id']."_member_ip";
		          $sql="CREATE TABLE $table_name(ID  INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY)";
		          $con->query($sql); //table created
		          
		          		 //now creating userid table and user friend list table
		          $table_name="userid_".$_SESSION['user_id']."_friend_list";
		          $sql="CREATE TABLE $table_name(ID  INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY, FriendName VARCHAR(255) NOT NULL, State VARCHAR(50) NOT NULL)";
		          $con->query($sql); //table created
		          
		          //now creating table nortification
				  $table_name="userid_".$_SESSION['user_id']."_nortification";
		          $sql="CREATE TABLE $table_name(ID  INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY, FriendName INT(255) NOT NULL, Nortification INT(50) NOT NULL, Status VARCHAR(50), SurveyName VARCHAR(50) NOT NULL, SurveyId INT(50) NOT NULL, DayCreated date NULL)";
		             $con->query($sql);
		          
		          		 //now creating userid table and user member location table
		          $table_name="userid_".$_SESSION['user_id']."_history";
		          $sql="CREATE TABLE $table_name(ID  INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,Day INT(3),Month INT(3),Year INT(5))";
		          $con->query($sql); //table created
		          
            		//now creating second table for users member location
            		$table_name="userid_".$_SESSION['user_id']."_member_survey_location";
            		$sql="CREATE TABLE $table_name(ID  INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY, City VARCHAR(50) NOT NULL, Region VARCHAR(50) NOT NULL, Country VARCHAR(50) NOT NULL)";
            		*/
					if($con->query($sql))
            		{
						mkdir("/data/".$_SESSION['user_id']."/");
						header("Location: dashbord.php");
                            	ob_end_flush();
	            	            exit();
								/*
            		    $sql="INSERT INTO $table_name(City,Region,Country) VALUES ('Unknown','Unknown','Unknown')";
                		$run3=mysqli_query($con,$sql);
                		if($run3)
                		{
                			    //account is succesfully created
                			    header("Location: profile.php");
                            	ob_end_flush();
	            	            exit();
                		}
                		else
                		{
                		        //problem in crating account
                		        header("Location: signup.php?account=exist5");
                             	ob_end_flush();
	                        	exit();
                		}
                			*/
            		}
            		else
            		{
            		    header("Location: signup.php?account=exist4");
                    	ob_end_flush();
	                	exit();
            		}
               }
               else
               {
                   //error in creating account
                   header("Location: signup.php?account=exist3");
                	ob_end_flush();
	            	exit();
               }
              
		}
		else
		{
		    //error in creating account
		    header("Location: signup.php?account=exist2");
        	ob_end_flush();
	    	exit();
		}
    }
}

?>