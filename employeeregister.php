<?php session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Flowerily 
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20090906

-->

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
     <title>Good JOB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>





    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
  
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="style.css">


    <style type="text/css">
        body{ font: 14px sans-serif; text-align: left; }
    </style>
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="index.php" class="text-black h2 mb-0">Good<strong>JoB</strong></a></h1>
          </div>

          <div class="col-10 col-xl-10 d-none d-xl-block">
            <nav class="site-navigation text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.php">Home</a></li>
                <li class="has-children">
                  <a href="category.html">Category</a>
                  <ul class="dropdown">
                    <li><a href="#">Full Time</a></li>
                    <li><a href="#">Part Time</a></li>
                     <li><a href="#">Internship</a></li>
                   
                  </ul>
                </li>
                
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>

                <li><a href="new-post.html"><span class="btn btn-danger"><span class=" glyphicon glyphicon-file"></span> Post a Job</span></a></li>

                  <li><a href="logout.php"><span class="btn btn-danger"><span class="glyphicon glyphicon-search"></span> Sign Out</span></a></li>
				           
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right d-block">
            
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

  
      










		
		<!-- end #menu -->
		<div id="search">
		<?php
		
		include("includes/search.inc.php");

		?>
		</div>
		<!-- end #search -->
	</div>
</div>
<!-- end #header -->
<!-- end #header-wrapper -->
<div id="logo">
	
	</div>
<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<hr />
			<!-- end #logo -->
			<div id="content">
				<div class="post">
				<div class="row " style="margin-top:40px; ">


					  <div class="col-4 ">
					    </div>

						 <div class="col-4" >
						<h2 class="title">fill your details</a></h2>
						<p class="meta">Please fill up the form</p>
					<div class="entry">
						<form action="process_employee_register.php" method="POST" enctype="multipart/form-data">
							FULL NAME <br> <input type="text" class="form-control" name="nm" >

							<br><br> PASSWORD<br><input type="password" class="form-control" name="pwd">

							<BR><BR>GENDER <BR> <INPUT TYPE = "RADIO" VALUE="M" name="gender">MALE<INPUT TYPE = "RADIO" VALUE="F"name="gender">FEMALE
							<BR><BR><label>Date of Birth</label><input class="form-control" type="date" name="dob">
							<br><BR> EMAIL <BR> <INPUT TYPE = "TEXT" name="email" class="form-control">
							<BR><BR> ADDRESS <BR> <TEXTAREA name="addr" class="form-control" ></TEXTAREA>
							<BR><BR> PHONE NO. <BR> <INPUT TYPE = "TEXT" name="ph" class="form-control">
							<BR> <BR>MOBILE NO.<BR> <INPUT TYPE = "TEXT" name="mobile" class="form-control" >
							<br><br>CURRENT LOCATION <BR><INPUT TYPE="TEXT" name="cl" class="form-control" >
							<BR><BR>CURRENT ANNUAL SALARY <BR><INPUT TYPE="TEXT" name="cas" class="form-control" >
							<BR><BR>CURRENT INDUSTRY<BR><INPUT TYPE ="TEXT" name="cindustry" class="form-control">
							
							<BR><BR>QUALIFICATION<BR><INPUT TYPE = "TEXT" name="quali" class="form-control" >
							<BR><BR>PROFILE<BR> <TEXTAREA name="profile" class="form-control" > </TEXTAREA>
							

							<br><br> 
              <button
                  class="btn btn-primary btn-block" id="sub" type="submit" > submit
                				
                </button>

						</form>
						<br>

					</div>

				</div>
				
			</div>
			<!-- end #content -->
			    
			<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>
<!-- end #page -->
<div id="footer-bgcontent">
	<div id="footer">
		
	</div>
</div>
<!-- end #footer -->
</body>
</html>
