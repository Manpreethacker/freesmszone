<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Free SMS Zone</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">
  <div id="preloader"></div>

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="fa fa-phone"></i> +9815823298
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h3>FREE SMS ZONE</h3>
        <!-- Uncomment below if you prefer to use an image logo -->
        
      </div>
	  
	  <?php
			session_start();
			if(!isset($_SESSION['user']))
			{
				//header('location:index.html');
			}
			
			$user=$_SESSION['user'];
	  ?>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body"><?php echo $user;?></a></li>
          <li><a href="#about">ADD CONTACT</a></li>
          <li><a href="#services">SEND SMS</a></li>
          <li><a href="#clients">SENT MESSAGE</a></li>
        
          <li><a href="logout.php">LOGOUT</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="wow fadeIn">

    <div class="intro-content">
      <h3>Feel Free Stay Connected<br></h3>
      <div>
      
      </div>
    </div>

	
	
	<!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="wow fadeIn">

   

	
	
    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="img/about-img.jpg" alt="">
          </div>

          <div class="col-lg-6 content">
			
			  <div class="container">
				<div class="section-header">
				  <h2>ADD CONTACT</h2>
					<form action="contact.php"method ="post">
						<div class="col-md-10">
							<div class="form-group">
								<label for="email">Enter Name:</label>
								<input type="text" class="form-control" id="Enter name" name="name" required="true">
								<label for="email">Enter Contact :</label>
								<input type="text" class="form-control" id="Enter contact" name="contact" required="true">
								 <br><button type="submit" class="btn btn-primary">SAVE CONTACT</button>
								 <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">SHOW CONTACTS</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			
			
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
		  <h3>SEND SMS</h3>
	        <form action="sms.php" method="post">
				<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="sel1" multiple>Contact:</label>
								<select class="form-control" id="sel1" name="contact[]" multiple>
									<?php
										mysql_connect("localhost","root","");
										mysql_select_db('freesmszone');
												
										$query=mysql_query("select * from contact where Email='$user'");
												
										while($row=mysql_fetch_array($query))
										{
											?>
												<option value="<?php echo $row[0];?>"><?php echo $row[2];?></option>
											<?php
										}
													
									?>
								 </select>
							</div>
						</div>
				</div>
				<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="email">Add Message:</label></br>
		                        <textarea class="form-control" rows="5" id="comment" name="sms"></textarea>
							</div>
						</div>
				</div>
				 <br><button type="submit" class="btn btn-primary">SEND</button></br>
			</form>
		</div>
	 </div>
    </section><!-- #services -->

    <!--==========================
      Sign In Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>SENT SMS</h2>
		  	<form action="Signin.php"method ="post">
				<div class="col-md-4">
				<table class="table table stripped">
				<thead>
				<tr>
				<th>Contact</th>
				<th>Message</th>
				<th>Operation</th>
				</tr>
				
				</thead>
				
				<?php
				
				
				
				mysql_connect("localhost","root","");
	            mysql_select_db('freesmszone');
	
				
				$query=mysql_query("select * from sms");
				
				while($row=mysql_fetch_row($query))
				{
				?>
				   <tr>
				       <td><?php echo $row[2];?></td>
					   <td><?php echo $row[3];?></td>
					   <td><a href="deletesms.php?id=<?php echo $row[0]; ?>">Delete</a></td>
				   </tr>
				   <?php
				}
				?>
				</table>
				
					   
				</div>
    </section><!-- #clients -->
	
	
	
<!-- Modal for show accounts-->
	
	<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Contacts Detail</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
						
						<table class="table table-bordered">
						<head>
						<tr>
						<th>NAME</th>
						<th>NUMBER</th>
						<th>OPERATION</th>
						</tr>
						</thead>
                        <?php
                           mysql_connect("localhost","root","");
	                       mysql_select_db('freesmszone');
						   
						   $query=mysql_query("select * from contact");
						   while($row=mysql_fetch_array($query))
						   {
							   
						?>						
						<tr>
						
							   <td><?php echo $row[2];?></td>
							   <td><?php echo $row[3];?></td>
							   <td><a href="deletecontact.php?id=<?php echo $row[0]; ?>">Delete</a></td>
					   </tr>  
						   <?php
						   }
						   ?>
	 											
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				  </div>
				</div>
			  </div>
			</div>


  <!--==========================
    Footer
  ============================-->
  

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
