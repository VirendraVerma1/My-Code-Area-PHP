<?php
ob_start();
session_start();
include("db_con.php");
//session_start();
if(isset($_POST['submit_login']))
    {
        
        $email=$_POST['email_login'];
        $password=$_POST['password_login'];
        
       /* if(filter_val($email,FILTER_VALIDATE_EMAIL))
        {
            header("Location: login.php?email=invalid");
            exit();
            
        }
        
        else
        {
        */
		    $sql="SELECT * FROM users WHERE Email='$email'";
			$run=mysqli_query($con,$sql);
			if(mysqli_num_rows($run)>0)
			{
				$data=mysqli_fetch_assoc($run);
			//	$password=password_hash($password,PASSWORD_DEFAULT);
					if($data['Password']==$password)
					{
						$_SESSION['index_content']=0;//take content number 
                        $_SESSION['page_no']=1;
                        $_SESSION['content_id']=0;//get from where onwards it start

                        
						$_SESSION["user_id"] = $data['ID'];
                        $_SESSION["user_survey_id"] = 0;
					    header("Location: dashbord.php");
						ob_end_flush();
						exit();
						 
                       
					}
					else
						{
        				    header("Location:login.php?password=wrongpassword");
        				    ob_end_flush();
                            exit();
        				}
				
			}
			else
				{
				    header("Location: login.php?email=notfound");
				    ob_end_flush();
                    exit();
				    
				}
        }

?>