<!-- Website Code goes here -->

<!-- Beginning HTML Document -->
<html lang="en" class="js csstransitions">

<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">

	<!-- Title -->
	<title>Jocelyn Tran</title>

	<!-- Description and more info about ebsite -->
	<meta name="description" content="A portfolio website for Jocelyn">
	<meta name="keywords" content="Jocelyn, Developer, Personal Website, hire">
	<meta name="Author" content="Jocelyn Tran">

	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Fonts -->
	<link href="./fonts/css" rel="stylesheet" type="text/css">
	<link href="./fonts/css(1)" rel="stylesheet" type="text/css">
	<link href="./fonts/css(2)" rel="stylesheet" type="text/css">
	<link href="./fonts/css(3)" rel="stylesheet" type="text/css">

	<!-- Styles -->
	<link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="./css/owl.theme.css" rel="stylesheet">
	<link href="./css/owl.carousel.css" rel="stylesheet">
	<link href="./css/animate.css" rel="stylesheet">
	<link href="./css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="./css/magnific-popupcss" rel="stylesheet">
	<link href="./css/component.css" rel="stylesheet">
	<link href="./css/simpletextrotator.css" rel="stylesheet">
	<link href="./css/style.css" rel="stylesheet" media="screen">

	<!-- Favicon - On the left of the browser-tab-text -->
	<link rel="shortcut icon" href="./img/favicon.png">

</head>

<body>
	<div class="wrapper">

		<!-- Preloader - shows that website is loading -->
		<div id="preloader" style="display: none;">
			<div id="status" style="display: none;">
				<div class="status-mes">
					<h4>Jocelyn Tran</h4>
				</div>
			</div>
		</div>
	</div>

	<!-- Navigation Bar - for smaller screens tabs are changed -->
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container">

			<!-- Brand Name -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a class="navbar-brand" href="https://serene-sands.herokuapp.com/">Jocelyn Tran</a>
			</div>

			<!-- Navbar Links -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<!-- ul is unordered list -->
				<ul class="nav navbar-nav navbar-right">

					<!-- li is order list or just list -->
					<li class="active"><a href="/#intro">Home</a></li>
					<li><a href="/#profile">Profile</a></li>
					<li><a href="/#resume">Resume</a></li>
					<li><a href="/#portfolio">Portfolio</a></li>
					<li><a href="/#connect">Connect</a></li>
					<li><a href="/#contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Nav bar ends -->

	<!-- Intro Section -->
	<section class="section" id="intro">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="hello wow bounceInDown animated" style="visiblity: visible; animation-name: bounceInDown;">
						<h1> Hi! I'm Jocelyn</h1>
						<h3>
							<span class="rotate" style="text-shadow: black 0px 0px 0px; opacity 1;">Software Developer. | Hackathon Enthusiast. | UCSD Student.</span>
						</h3>
					</div>

					<!-- UPDATE THIS -->
					<a href="#profile"> 
						<div class="mouse-icon">
							<div class="wheel"></div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Section: Portfolio -->
	<section class="section" id="profile">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="col-md-12 headline wow bounceInDown animated" style="visiblity: visible; animation-name: bounceInDown;">
						<h2>Jocelyn Tran</h2>
						<p>Software Developer, Hackathon Enthusiast, Avid Learner, UCSD Student.</p>
					</div>

					<div class="col-md-3 col-sm-6 hidden-xs wow bounceInLeft" style="visibility: hidden; animation-name: none;">
						<img class="avatar" src="./img/profilepic.jpg" alt="">
					</div>

					<div class="col-md-3 col-sm-6 wow bounceInUp" style="visibility: hidden; animation-name: none;">
						<div class="profile-widget">
							<h3>Skillset</h3>

							<h5>Java</h5>
							<div class="skill-bar">
								<div class="skill-rate-on"></div>
								<div class="skill-rate-on"></div>
								<div class="skill-rate-on"></div>
								<div class="skill-rate-on"></div>
							</div>	

							<h5>C</h5>
							<div class="skill-bar">
								<div class="skill-rate-on"></div>
								<div class="skill-rate-on"></div>
								<div class="skill-rate-on"></div>
								<div class="skill-rate-off"></div>
							</div>	

							<h5>Android</h5>
							<div class="skill-bar">
								<div class="skill-rate-on"></div>
								<div class="skill-rate-off"></div>
								<div class="skill-rate-off"></div>
								<div class="skill-rate-off"></div>
							</div>	

						</div>
					</div>

					<div class="col-md-6 col-sm-12 wow bounceInRight" style="visibility: hidden; animation-name: none;">
						<h3>Professional Profile</h3>
						<p>Hi! I'm a sophomore undergraduate student studying Computer Engineering at University of California, San Diego. Growing up in the Silicon Valley, I’ve always had a passion for technology and innovation. I love to take things apart to see how they work and put them back together.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="connect" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 headline wow bounceInDown" style="visibility: hidden; animation-name: none;">
					<h2>Connect</h2>
					<p>I love to code, hack, teach, and more. Connect with me via the links below.</p>
				</div>

				<div class="col-md-2 col-md-offset-1 wow bounceInUp connect-link" style="visibility: hidden; animation-name: none;">
					<a href="http://github.com/jocelyntran1" target="_blank" class="btn btn-default btn-custom-2">Github</a>
				</div>
				<div class="col-md-2 wow bounceInUp connect-link" style="visibility: hidden; animation-name: none;">
				<a href="http://linkedin.com/in/tranjocelyn" target="_blank" class="btn btn-default btn-custom-2">LinkedIn</a>
				</div>
				<div class="col-md-2 wow bounceInUp connect-link" style="visibility: hidden; animation-name: none;">
					<a href="http://facebook.com/jocelyn.tran.12" target="_blank" class="btn btn-default btn-custom-2">Facebook</a>
				</div>

			</div>
		</div>
	</section>

	<!-- Javascript files -->
	<script src="./js/jquery-1.11.0.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/jquery.backstretch.min.js"></script>
	<script src="./js/owl.carousel.min.js"></script>
	<script src="./js/jquery.magnific-popup.min.js"></script>
	<script src="./js/jquery.simple-text-rotator.min.js"></script>
	<script src="./js/jquery.waypoints.js"></script>
	<script src="./js/jquery.countTo.js"></script>
	<script src="./js/wow.min.js"></script>
	<script src="./js/modernizr.custom.js"></script>
	<script src="./js/grid.js"></script>
	<script src="./js/smoothscroll.js"></script>
	<script src="./js/custom.js"></script>

</body>
</html>