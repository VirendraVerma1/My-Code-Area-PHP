<?php
ob_start();
session_start();
$_SESSION['index_content']=0;//take content number 
$_SESSION['page_no']=1;
$_SESSION['content_id']=0;//get from where onwards it start
?>
<!DOCTYPE html>
<html>
<head>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

	<title>My Code Area</title>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Create Survey, Generate Survey, Survey Builder, Free survey, Current Survey, Ongoing Survey, Survey Result, Easy Survey Creator, Survey, Survey form, Form, Survey Design, Survey India, Global Survey, Best Survey, Survey Report,">
  <meta name="description" content="Create your survey free of cost, with the best otimization. Its a completely user friendly to design your survey with a best result sytsem..">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/fixed.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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

  <style type="text/css">
  	@import url('https://fonts.googleapis.com/css?family=Lato:400,700');

body{
	overflow-x: hidden;
	font-family: 'Lato', sans-serif;
	color: #505962;
}
/*.offset:before{
	display: block;
	content: "";
	height: 4rem;
}*/
/*-----Navigation----*/
.navbar{
	text-transform: uppercase;
	font-weight: 700;
	font-size: .9rem;
	letter-spacing: .1rem;
	background:rgba(0,0,0,0.3)!important;
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
/*------Landing page----*/
.home-inner{
    background-image: url(img/Computer.jpg);
}
.caption{
  width: 100%;
  max-width: 100%;
  position: absolute;
  top: 38%;
  z-index: 1;
  color: black;
  text-transform: uppercase;
}
.caption h1{
	font-weight: 700;
	font-size: 3.8rem;
	text-shadow: .1rem .1rem .8rem black;
	padding-bottom: 1rem;
}
.caption h4{
	font-weight: 700;
	font-size: 1.8rem;
	text-shadow: .1rem .1rem .8rem white;
	padding-bottom: 1rem;
}
.caption .btn1{
	border-width: medium;
	border-radius: 0px;
	padding-right: 20px;
}
.caption .btn2{
	border-width: medium;
	border-radius: 0px;
	padding-right: 20px;
}
.jumbotron{
	margin-bottom: 0px;
	padding: 2rem 0 3.5rem;
	border-radius: 0;
}
h3.heading{
 font-weight: 700;
 text-transform: uppercase;
}
.heading-underline{
  width: 3rem;
  height: .2rem;
  background-color: cyan;
  margin: 0 auto;
}

 footer{
  	background-color:	black;
  }
  
  .hv{
      
      background:white;
  }

  </style>

</head>

<body class="scroll" data-target="#navResponsive">

<!--------Strat Home Section----->
<div id="Home">
	
<!---Navigation--->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
	<a class="navbar-brand" href="#"><h4 class="display-6">My Code Area</h4></a>
    <button class="navbar-toggler" type="button" data-target="#navResponsive" data-toggle="collapse">
    	<span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navResponsive">
    	<ul class="navbar-nav ml-auto">
    		<li class="nav-item">
    			<a class="nav-link" href="#Home">Home</a>
    		</li>
    		<li class="nav-item">
    			<a class="nav-link" href="#Features ">Features</a>
    		</li>
    		<li class="nav-item">
    			<a class="nav-link" href="#Contact">Contact</a>
    		</li>
    	</ul>
    </div>
</nav>
<!---End Of Navigation--->

<!-----Start Landing page Section------>
<div class="landing">
	<div class="home-wrap">
		<div class="home-inner">
			
		</div>
	</div>
</div>

<div class="caption text-center">
	<h1 class="display-4">Upload Your Project</h1>
	<h4 class="display-6">Become Best Programmer</h4>
	<a class="btn1"  href="login.php">
		<button class="btn btn-outline-light btn-lg">Login
		</button>
	</a>
	<a href="signup.php" class="btn2">
		<button type="button" class="btn btn-outline-light btn-lg">Sign up</button>
	</a>
</div>
<!-----Start Landing page Section------>

</div>
<!--------End Home Section----->

<!--------Strat Features Section----->
<div id="Features" class="offset">

<!----Start Of Jumbotron----->
<div class="jumbotron">	
 <div class="narrow">
	
    <div class="col-12 text-center padding">
    	<h3 class="heading" class="display-6">Features</h3>
    	<div class="heading-underline"></div>
    </div>
    
    <div class="row text-center">
    	<div class="col-md-4">
    		<div class="feature">
    			<a href="ongoingsurvey.php"><img src="img/currentsurvey.jpg"></a>
    			<h3 class="display-6">Other Projects</h3>
    		</div> 
    	</div>

    	<div class="col-md-4">
    		<div class="feature">
    			<a href="surveyresult.php"><img src="img/result.png"></a>
    			<h3 class="display-6">Software</h3>
    		</div> 
    	</div>

    	<div class="col-md-4">
    		<div class="feature">
    			<img src="img/peoples.jpg">
    			<h3 class="display-6">Resource</h3>
    		</div> 
    	</div>
    </div><!-------End of row-------->

 </div><!-----End of Narrow--->
</div>
<!----End Of Jumbotron--->
	
</div>
<!--------End Features Section----->

<!--------Start Connect Section----->
<div id="Contact" class="offset">
	<!-------connect Section--------->
  <div class="container-fluid padding">
  	<div class="row text-center padding">
  		<div class="col-12">
  			<h3 class="heading" class="display-6">Connect</h3>
  			<div class="heading-underline"></div>
  		</div>
  		<div class="col-12 social padding">
  			<a href="https://www.facebook.com/Survey-2143891599009887/?modal=admin_todo_tour"><li class="fab fa-facebook" style="font-size:50px;color:#3b5998;padding:30px;"></li></a>
  			<a href="https://twitter.com/GenerateSurvey"><li class="fab fa-twitter" style="font-size:50px;color:#38A1F3;padding:30px;"></li></a>
  			<a href="https://plus.google.com/u/0/115048219716680303958"><li class="fab fa-google-plus-g" style="font-size:50px;color:#DD4B39;padding:30px;"></li></a>
  			<a href="https://www.instagram.com/generate_survey/"><li class="fab fa-instagram" style="font-size:50px;color: #c32aa3;padding:30px;"></li></a>
  		</div>
  	</div>
  </div>


<!--------Footer------------>
  <footer>
  	<div class="container-fluid padding">
  		<div class="row text-center padding">
  		<div class="col-md-4">
  			<h2 class="display-6" style="color:white;"><img src="img/icon.png" width="50" height="50"> My COde Area</h2>
  			<hr class="hv">
  			<h5 calss="display-6" style="color: white">Description</h5>
  			<p style="color: white">Dropbox for your projects.</p>
  			<p style="color: white">Become the best developer </p>
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
  			
  			<h5 style="color: white">&copy;My code area</h5>
  		</div>
  	</div>
  	</div>
  </footer>



</div>
<!--------End Connect Section----->
  
</body>

</html>
