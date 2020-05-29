<?php
		session_start();
        session_unset();
        session_destroy();
        
    $message="";
    if(isset($_GET['password']))
    {
        if($_GET['password']=="wrongpassword")
        {
            $message="! Wrong Password";
        }
    }
    if(isset($_GET['email']))
    {
        if($_GET['email']=="notfound")
        {
            $message="! Email not found";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/fixed.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


  <style type="text/css">
  	@import url('https://fonts.googleapis.com/css?family=Lato:400,700');

body{
	overflow-x: hidden;
	font-family: 'Lato', sans-serif;
	color: #505962;
}

.navbar{
	text-transform: uppercase;
	font-weight: 700;
	font-size: .9rem;
	letter-spacing: .1rem;
	background:rgba(0,0,0,0.6)!important;
}

.navbar-nav li{
	padding-right: .7rem;
}
.navbar-dark .navbar-nav .nav-link{
	color: white;
	padding-top: .8rem;
}
.navbar-dark .navbar-nav .nav-link:hover{
        color: cyan;
}
.responsive{
  height: 200px;
  width: 200px;
  color: cyan;
  
}
/*.heading-underline{
  width: 3rem;
  height: .2rem;
  background-color: cyan;
  margin: 0 auto;
}*/
.main-section{
      margin-top: 150px;
      position:relative;
      padding-bottom: 40px;
    }
    .modal-content{
      padding: 0,18;
      box-shadow: 1px 1px 6px cyan;
  }
  .btn-primary-outline-light{
  	background-color:white;
  	margin-bottom: 45px;
  }
   .form-group{
      margin-bottom: 35px;
    }
    .form-group input{
      height: 42px;
      border-radius: 5px;
      font-size: 18px;
    }
    #button2{
      width: 100%;
      margin: 5px 0 25px;
    }
    #button2{
      font-size: 19px;
      padding: 7px 14px;
      border-radius: 5px;
      box-shadow:cyan;
      border-bottom: 4px solid cyan;
    }
    #button2:hover,#button2:focus{
      background-color: cyan!important;
      border-bottom: 4px solid cyan!important;
    }
    .svg-inline--fa{
      font-size: 20px;
      margin-right: 7px;
    }
    .forgot{
      padding: 5px 0 25px;
    }
    .forgot a{
      color: grey;
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
    <div id="Home">
	
<!---Navigation--->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
	<a class="navbar-brand" href="#"><h4 class="display-6">Generate Survey</h4></a>
    <button class="navbar-toggler" type="button" data-target="#navResponsive" data-toggle="collapse">
    	<span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navResponsive">
    	<ul class="navbar-nav ml-auto">
    		<li class="nav-item">
    			<a class="nav-link" href="homepage.php">Home</a>
    		</li>
    		<li class="nav-item">
    			<a class="nav-link" href="homepage.php">Features</a>
    		</li>
    		<li class="nav-item">
    			<a class="nav-link" href="contact_us.php">Contact</a>
    		</li>
    	</ul>
    </div>
</nav>
<!-----End Of Navigation----->

<!------Sign Up Form---------->
<div class="container-fluid padding">
	<div class="row text-center padding">
       <div class="col-12">
       	  <div class="modal-dialog text-center">
       	  	<div class="main-section">
              <div class="modal-content">
                 
                 <!--------Place  where login and sign up are shown(start)--->
                 <div>
                  	<a class="btn1"  href="#">
		            <button class="btn btn-primary-outline-light btn-lg">Login
		            </button>
	                </a> 
	                <a href="signup.php" class="btn2">
                    <button type="button" class="btn btn-primary-outline-light btn-lg">Sign up</button>
	                </a>
	              </div>  
                 <!--------Place  where login and sign up are shown(End)--->
                    
                 <!------Form Start---------->
                    <div>
             <form class="col-12" action="login_php.php" method="POST">

               <div class="form-group">
               	 <h5 class="display-6  text-left" style="color:black; font-weight: 400;">Email</h5>
                 <input type="text" class="form-control" name="email_login" required>
               </div>

               <div class="form-group">
               	 <h5 class="display-6  text-left" style="color:black; font-weight: 400;">Password</h5>
                 <input type="password" class="form-control"  name="password_login" required>
               </div>
               
               <div>
                   <h4 style="color:red;"><?php echo $message;?></h4>
               </div>
               
        <!----------Login Button--------->

               <button type="submit" id="button2" name="submit_login">
                   <i class="fas fa-sign-in-alt" style="margin-right:7px;"></i>Login
               </button>
              
             </form>
             <div class="col-12 forgot">
               <a href="forgetpassword.php">Forgotten Password?</a>
             </div>
           </div>
                 <!------Form End---------->  
              </div>	
            </div>  	
       	  </div>
       </div>		
	</div>
</div>
<!------Sign up End-------->

<!------Foooter Start-------->
 <!--------Footer------------>
 <footer>
  	<div class="container-fluid padding">
  		<div class="row text-center padding">
  		<div class="col-md-4">
  			<h2 class="display-6" style="color:white;"><img src="img/icon.png" width="50" height="50">  Generate Survey</h2>
  			<hr class="hv">
  			<h5 calss="display-6" style="color: white">Description</h5>
  			<p style="color: white">Create your survey free of cost, with the  </p>
  			<p style="color: white">best otimization. Its a completely user  </p>
  			<p style="color: white">friendly to design your survey with a </p>
  		    <p style="color: white"> best result sytsem..</p>
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
  			
  			<h5 style="color: white">&copy;Generate Survey</h5>
  		</div>
  	</div>
  	</div>
  </footer>
<!------Foooter End-------->

</body>

</html>