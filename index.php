<?php
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Online feedback System</title>
	
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#66CCFF">
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:#FFFFFF">Online feedback System</a>
				
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					 <li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>

			<li><a style="color:#FFFFFF" href="index.php?info=registration"><i class="fa fa-sign-out fa-fw"></i>Registration</a></li>
				
				
								
	<li class="dropdown">
        <a style="color:#FFFFFF" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Login
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="index.php?info=login">Student</a></li>
		  <li><a href="index.php?info=faculty_login">Faculty</a></li> 
          <li><a href="admin">Admin</a></li> 
        </ul>
      </li> 
	  

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php 
					@$info=$_GET['info'];
					if($info!="")
					{
											
						 if($info=="about")
						 {
						 include('about.php');
						 }
						
						
						
						

						 
						 else if($info=="contact")
						 {
						 include('contact.php');
						 }
						
						
						 
						 
						 else if($info=="login")
						 {
						 include('login.php');
						 }
						 
						  else if($info=="faculty_login")
						 {
						 include('faculty_login.php');
						 }
						 
						 
						 else if($info=="registration")
						 {
						 	include('registration.php');
						 }
					}
					else
					{
				?>
		<!-- slider start -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                
                <div class="fill" style="background-image:url('images/feedback.jpg');"></div>
				<div class="carousel-caption">
                    
                </div>
            </div>
           
            <div class="item">
                <div class="fill" style="background-image:url('images/feedback1.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			 <div class="item">
                <div class="fill" style="background-image:url('images/feedback3.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			
			
			
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
<!-- slider -->			
	
	
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
               
				
		    
	<!--iam student-->
		    <div class"iamstudent">
			    
<style>
	/*set border to the form*/
	
	form {
		border: 3px solid #f1f1f1;
	}
	/*assign full width inputs*/
	
	input[type=text],
	input[type=password] {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
	}
	/*set a style for the buttons*/
	
	button {
		background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 100%;
	}
	/* set a hover effect for the button*/
	
	button:hover {
		opacity: 0.8;
	}
	/*set extra style for the cancel button*/
	
	.cancelbtn {
		width: auto;
		padding: 10px 18px;
		background-color: #f44336;
	}
	/*centre the display image inside the container*/
	
	.imgcontainer {
		text-align: center;
		margin: 24px 0 12px 0;
	}
	/*set image properties*/
	
	img.avatar {
		width: 40%;
		border-radius: 50%;
	}
	/*set padding to the container*/
	
	.container {
		padding: 16px;
	}
	/*set the forgot password text*/
	
	span.psw {
		float: right;
		padding-top: 16px;
	}
	/*set styles for span and cancel button on small screens*/
	
	@media screen and (max-width: 300px) {
		span.psw {
			display: block;
			float: none;
		}
		.cancelbtn {
			width: 100%;
		}
	}
</style>


	<h2 align="center">I'm Student</h2>
	<!--Step 1 : Adding HTML-->
	<form action="/action_page.php">
		<div class="imgcontainer">
			<img src=
"https://media.geeksforgeeks.org/wp-content/cdn-uploads/20190710102234/download3.png"
				alt="Avatar" class="avatar">
		</div>

		<div class="container">
		
			<button type="submit">Login</button>
		</div>

	</form>
		    </div>
		    
		    <!--iam teacher-->
		    <div class="iamteacher">
		    
<style>
	/*set border to the form*/
	
	form {
		border: 3px solid #f1f1f1;
	}
	/*assign full width inputs*/
	
	input[type=text],
	input[type=password] {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
	}
	/*set a style for the buttons*/
	
	button {
		background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 100%;
	}
	/* set a hover effect for the button*/
	
	button:hover {
		opacity: 0.8;
	}
	/*set extra style for the cancel button*/
	
	.cancelbtn {
		width: auto;
		padding: 10px 18px;
		background-color: #f44336;
	}
	/*centre the display image inside the container*/
	
	.imgcontainer {
		text-align: center;
		margin: 24px 0 12px 0;
	}
	/*set image properties*/
	
	img.avatar {
		width: 40%;
		border-radius: 50%;
	}
	/*set padding to the container*/
	
	.container {
		padding: 16px;
	}
	/*set the forgot password text*/
	
	span.psw {
		float: right;
		padding-top: 16px;
	}
	/*set styles for span and cancel button on small screens*/
	
	@media screen and (max-width: 300px) {
		span.psw {
			display: block;
			float: none;
		}
		.cancelbtn {
			width: 100%;
		}
	}
</style>


	<h2 align="center">I'm Student</h2>
	<!--Step 1 : Adding HTML-->
	<form action="/action_page.php">
		<div class="imgcontainer">
			<img src=
"https://media.geeksforgeeks.org/wp-content/cdn-uploads/20190710102234/download3.png"
				alt="Avatar" class="avatar">
		</div>

		<div class="container">
		
			<button type="submit">Login</button>
		</div>

	</form>
		</div>
			
			
			
			
				<?php } ?>
            </div>
            
    </div>
    <!-- /.container -->
	
	<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:15px;height:40px; background:#66CCFF">
		<span style="color:#FFFFFF">Developed By .......Kushal and Mohith.</span>
	</div>
    <!-- jQuery -->
    <script src="css/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
