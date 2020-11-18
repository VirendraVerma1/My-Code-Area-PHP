<?php
ob_start();
session_start();
if(!isset($_SESSION['index_content']))
{
    $_SESSION['index_content']=0;
}
if(!isset($_SESSION['folder_name']))
{
	$_SESSION['folder_name']="data/".$_SESSION['user_id'];
	$_SESSION['path']="";
}
include("db_con.php");

if(isset($_GET['f'])&&isset($_GET['b']))
{
	/*
	if($_GET['b']=='download')
	{
		$table_name="userid_".$_SESSION['user_id'];
		$file_id=$_GET['f'];
		$sql="SELECT * FROM $table_name WHERE ID=$file_id";
		$run=mysqli_query($con,$sql);
		if($run)
		{
			$data=mysqli_fetch_assoc($run);
			rename($data['FileStoredName'],$data['FileName']);
			header("Location: data/".$data['FileStoredName']);
			echo $data['FileStoredName'];
			echo $data['FileName'];
		}
		else
		header("Location: login.php");
	}
	*/
	
	if($_GET['b']=='del')
	{
		
		$table_name="userid_".$_SESSION['user_id'];
		$file_id=$_GET['f'];
		//get file name
		$sql="SELECT * FROM $table_name WHERE ID=$file_id";
		$run=mysqli_query($con,$sql);
		if($run)
		{
			$data=mysqli_fetch_assoc($run);
			if($data['PathName'])
			{
			unlink($data['PathName']);
			$sql="DELETE FROM $table_name WHERE ID='$file_id'";
			mysqli_query($con,$sql);
			}
		}
		
	}
}
$username="";

if(isset($_SESSION["user_id"]))
{
	
    ?>
        <!DOCTYPE html>
        <html>
        <head>
	
        	<title><?php $id=$_SESSION["user_id"];$sql="SELECT * FROM users WHERE ID='$id'";$run=mysqli_query($con,$sql);if(mysqli_num_rows($run)>0){$data=mysqli_fetch_assoc($run);echo $data['Username']; $username=$data['Username'];}?></title>
        	
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="css/fixed.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

        
           <style type="text/css">
           @import url('https://fonts.googleapis.com/css?family=Lato:400,700');
        
        body{
        	overflow-x: hidden;
        	font-family: 'Lato', sans-serif;
        	color: #505962;
        }
           	.fixed{
           		background-image: url('img/Paint.jpg');
           		z-index: -1;
           	}
            .dark{
            	background-color: rgba(0,0,0,0.56);
            }
            /*.fixed-background form{
            	margin-top: 2rem;
            	margin-left: 3rem;
            	margin-bottom: 3rem;
            }*/
        
            @media screen and (max-width: 576px){
                .fixed-background .form-inline{
                    width: 200px;
              }
            }
            @media screen and (max-width: 576px){
                .fixed-background .btn-outline-primary{
                    position:absolute;
                    margin-left: 210px;
                    top: 10px;
              }
            }
           .btn-light{
   	    margin-bottom: 10px;
       
      }
    .my-flex{
    	background-color:#dcdcdc;
    }  
    .my-flex1{
        background-color:#dcdcdc;
    }
            .space{
            	margin: 5px 5px 5px 5px;
            }
            @media screen and (max-width: 576px){
            	.top-banner{
            		height: 150px;
            	}
            	.Number{
            		font-size:20px;
            	}
            	.Para{
            		font-size:20px;
            	}
            	
            	img{
            		width:20px;
            		height:20px;
            	}
            	.space{
            		padding: 4px 8px;
            	}
            }
           footer{
  	background-color:	black;
  }
  
  .hv{
      
      background:white;
  }
           
        
           </style>
        
        </head>
        
        <body>
        <!---Navigation Start--->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        	<a class="navbar-brand" href="#"><h4 class="display-6">My Code Area</h4></a>
            <button class="navbar-toggler" type="button" data-target="#navResponsive" data-toggle="collapse">
            	<span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse hola" id="navResponsive">
            	<ul class="navbar-nav ml-auto">
            		<li class="nav-item">
            			<a class="nav-link" href="homepage.php">Home</a>
            		</li>
            <!--		<li class="nav-item">
            			<a class="nav-link" href="aboutme.php">About me</a>
            		</li>
					<li class="nav-item">
            			<a class="nav-link" href="follow.php?button=pyf" <?php if($nort)echo 'style="color:red;"';?>><i class="fas fa-bell"></i><?php if($nort)echo $nort;?></a>
            		</li> 
			
            	</ul>
        <!--------------Search Box Start-------	
          <form class="form-inline" action="search_php.php" method="POST" >
            <input class="form-control mr-sm-2" type="search" name="str_data" placeholder="search survey,profile" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 mr-sm-2" name="search_submit" type="submit" style="font-weight: 500;">Search</button>
          </form>
        <!------------------Search Box End------->
            <form action="logout.php" method="POST">
            <button type="submit" name="submit_logout" class="btn btn-outline-primary">Logout</button>
            </form>
            
            
           </div>
        </nav>
        
        <!-----End Of Navigation----->
        
        <!-------Create Survey Box Start----------->
         <div class="fixed-background">
        	<div class="row dark text-center">
        
        	<form class="form-inline text-center col-md-8" action="dashbord_php.php" method="POST" enctype="multipart/form-data">
			
            <input class="form-control mr-sm-2 paint" name="sbgfile" type="file" placeholder="Create your Survey" aria-label="Search" style="width:300px;" required>
            <button class="btn btn-outline-primary my-2 my-sm-0 " type="submit" name="upload_files" style="font-weight:500;">Upload</button>
          </form>
               <h3 class="display-6 col-md-4" style="color: white;"><?php echo $username;?></h3>
            </div>
        
            <div class="fixed-wrap">
        		<div class="fixed">
        			
        		</div>
        	</div>
         </div>
        <!-------Create Survey Box End----------->
               * Please upload files in any compressed format
        <!---------Your Survey start------------------->
        <div class="container-fluid padding">
        	<div class="row text-center padding">
        
              <div class="col-xs-12 col-sm-12 col-md-8">
              	<h3 class="display-6">My Files</h3>
              	<div class="cards" style="border:0px solid black;">
              		<div class="card-body">
              		<!---------Repeating Start------------------------>
              		
              		<?php getfiles(); ?>
                       
        
        
                       	
                 <!---------------------------Repeating end------------>
        
              		</div>
              	</div>
              </div>
        
              <div class="col-xs-12 col-sm-12 col-md-4">
              	<h3 class="display-6">Trending</h3>
              	<div class="cards" style="border:0px solid black;">
              		<div class="card-body">
              <!---------Repeating Start---------------trending system--------->
              
                
              <!---------------------------Repeating end------------> 	
        
              		</div>
              	</div>
              </div>   
        
             <div class="col-12">
              	<div class="cards">
              		<div class="card-body" style="border:1px solid black;">
              			
              		</div>
              	</div>
             </div>
        
            </div>          
        </div>
        <!---------Your Survey start------------------->
        
        <!------Foooter Start-------->
         <!--------Footer------------>
         <footer>
  	<div class="container-fluid padding">
  		<div class="row text-center padding">
  		<div class="col-md-4">
  			<h2 class="display-6" style="color:white;"><img src="img/icon.png" width="50" height="50"> My Code Area</h2>
  			<hr class="hv">
  			<h5 calss="display-6" style="color: white">Description</h5>
  			<p style="color: white">Dropbox for your projects.  </p>
  			<p style="color: white">Become the best developer   </p>
  			<p style="color: white"></p>
  		    <p style="color: white"></p>
  		</div>
  		<div class="col-md-4">
  			<hr class="hv">
  			<h3 class="display-6" style="color: white">Security</h3>
  			<hr class="hv">
  			<a href="term_and_conditions.php" style="text-decoration:none;"><h5 style="color: white;">Terms & Conditions</h5></a>
  			<a href="privacy_policy.php" style="text-decoration:none;"><h5 style="color: white;">Privacy Policy</h5></a>
  			<a href="report.php" style="text-decoration:none;"><h5 style="color: white;">Report</h5></a>
  		</div>
  		<div class="col-md-4">
  			<hr class="hv">
  			<h3 class="display-6" style="color: white">Company</h3>
  			<hr class="hv"  >
  			<a href="about_us.php" style="text-decoration:none;"><h5 style="color: white;">About Us</h5></a>
  			<a href="contact_us.php" style="text-decoration:none;"><h5 style="color: white;">Contact Us</h5></a>
  			<a href="help.php" style="text-decoration:none;"><h5 style="color: white;">Help?</h5></a>
  		    <a href="feedback.php" style="text-decoration:none;"><h5 style="color: white;">Feedback</h5></a>
  		</div>
  		<div class="col-12">
  			<hr class="hv">
  			
  			<div class="d-flex justify-content-center mb-3">
  			    
                <div class="p-2"><a href="//www.dmca.com/Protection/Status.aspx?ID=3e443145-029e-4699-8c43-55741845f037" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/DMCA_badge_trn_60w.png?ID=3e443145-029e-4699-8c43-55741845f037"  alt="DMCA.com Protection Status" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script></div>
                
                <div class="p-2"><script data-cfbadgetype="d" data-cfbadgeskin="blue" type="text/javascript">
                                //<![CDATA[
                                try{window.CloudFlare||function(){var a=window.document,b=a.createElement("script"),a=a.getElementsByTagName("script")[0];window.CloudFlare=[];b.type="text/javascript";b.async=!0;b.src="//ajax.cloudflare.com/cdn-cgi/nexp/cloudflare.js";a.parentNode.insertBefore(b,a)}(),CloudFlare.push(function(a){a(["cloudflare/badge"])})}catch(e$$5){try{console.error("CloudFlare badge code could not be loaded. "+e$$5.message)}catch(e$$6){}};
                                //]]>
                                </script></div>
                                

                
              </div>
  			
  			<h5 style="color: white">&copy;My Code Area</h5>
  		</div>
  	</div>
  	</div>
  </footer>
        <!------Foooter End-------->
         <?php
          //---------------------------
       if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){
             $screen_width= $_SESSION['screen_width'];
        } else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) {
            $_SESSION['screen_width'] = $_REQUEST['width'];
            $_SESSION['screen_height'] = $_REQUEST['height'];
            header('Location: ' . $_SERVER['PHP_SELF']);
        } else {
           echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>';
           
        }
         ?>
        
        </body>
        </html>
    
    <?php
}
else
{
    header("Location: login.php");
    ob_end_flush();
    exit();
}


?>


<?php
    
    function getfiles()
    {
        include("db_con.php");
        $count=1;$index=1;
        $userid="userid_".$_SESSION['user_id'];
        $sql="SELECT * FROM $userid";
        $run=mysqli_query($con,$sql);
        if(mysqli_num_rows($run)>0)
        {
            $count=mysqli_num_rows($run);
            
           while($data=mysqli_fetch_assoc($run))
			{
			    //extracting id and name from survey name
                    $survey_name=$data['FileName'];
                      
                      $file_id=$data['ID'];
                      
                      $download_link="dashbord.php?f=".$file_id."&&b=down";
                      $delete_link="dashbord.php?f=".$file_id."&&b=del";
                        
                        $download_link=$data['PathName'];
                     
                     $get_file_size=filesize($download_link);
                        $get_file_size=formatSizeUnits($get_file_size);
				?>
				    <div class="d-flex mb-3 my-flex">

                <div class="p-2 mr-auto my-flex" style="font-weight: 700;color: black;margin-top: 10px;">
                    <h5><?php echo $count." . ";?> <?php echo $survey_name; ?></h5></div>

                

                <div class="p-2 my-flex">
                    <?php echo $get_file_size;?>
                    <input type="text" id="myInput<?php echo $index;?>" style="width:10px;" value="<?php echo "http://mycodearea.000webhostapp.com/".$download_link;?>">
                    <button type="submit" onclick="myFunction<?php echo $count;?>()" style="margin-left: 10px;font-weight: 700;color: black;padding: 5px 20px 5px 20px;" name="delete_<?php echo $data['FileName'];?>" class="btn btn-light space btn-sm">Copy File Link</button>
                  <a href="<?php echo $download_link;?>"><button type="submit" style="margin-left: 10px;font-weight: 700;color: black; padding: 5px 27px 5px 25px;" name="<?php echo $data['FileName'];?>" class="btn btn-light  space btn-sm">Download</button></a>
                  <a href="<?php echo $delete_link;?>"><button type="submit" style="margin-left: 10px;font-weight: 700;color: black;padding: 5px 20px 5px 20px;" name="delete_<?php echo $data['FileName'];?>" class="btn btn-light space btn-sm">Delete</button></a>
                <!--  <button type="submit" style="margin-left: 10px;font-weight: 700;color: black;padding: 5px 15px 5px 15px;" name="opt_<?php echo $data['FileName'];?>" class="btn btn-light  space btn-sm">?</button>
                  <button type="submit" style="margin-left: 10px;font-weight: 700;color: black;padding: 5px 22px 5px 22px;" name="result_<?php echo $data['FileName'];?>" class="btn btn-light  space btn-sm">?</button>
                -->
				</div>
            </div>
				
				<script>
				    function myFunction<?php echo $count;?>() {
                      /* Get the text field */
                      var copyText = document.getElementById("myInput<?php echo $index;?>");
                    
                      /* Select the text field */
                      copyText.select();
                    
                      /* Copy the text inside the text field */
                      document.execCommand("copy");
                    
                      
                    }
				</script>
				
				<?php
				$index++;
				$count--;
				
				/*
				
				<div class="top-banner">
                       	<h3 class="Number" style="font-weight: 400;float: left;"><?php echo $count." . ";?> </h3>
                       	<h3  class="Para" style="font-weight: 400;float: left;"><?php echo $survey_name; ?>  </h3>
                        <p style="color:<?php if(isset($data['ActiveSurvey'])){ if($data['ActiveSurvey']) echo "green";else echo "red";}else echo "red";?>;">
                        <?php echo $data['PeopleRespond'] ?>
                       	<button type="submit" name="<?php echo $data['SurveyName'];?>" class="btn btn-outline-primary space btn-sm">Edit</button>
                        
                        <button type="submit" name="opt_<?php echo $data['SurveyName'];?>" class="btn btn-outline-info space btn-sm">optimize</button>
                        <button type="submit" name="result_<?php echo $data['SurveyName'];?>" class="btn btn-outline-info space btn-sm">Result</button>
                        <button type="submit" name="delete_<?php echo $data['SurveyName'];?>" class="btn btn-outline-secondary space btn-sm">Delete</button></p>
                       	</div><br>
				
				
				*/
			}
        }
        else
        {
            echo "No files found";
        }
    }
    

    
    date_default_timezone_set('Asia/Kolkata');
    $my_date = date("Y-m-d H:i:s");
    $user_id=$_SESSION['user_id'];
    $sql="UPDATE users SET Online_Status='$my_date' WHERE ID='$user_id'";
	$run=mysqli_query($con,$sql);
	
    
?>


<?php
// Snippet from PHP Share: http://www.phpshare.org

    function formatSizeUnits($bytes)
    {
        if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }

        return $bytes;
}
?>


