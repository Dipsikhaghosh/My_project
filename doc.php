<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
	<?php
		session_start();
	?>
	<title>Docs Inn</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Be Clinic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);
	
		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800&amp;subset=devanagari,latin-ext" rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
		<!-- main -->
	<div id="home">
		
		<?php include("header.php");?>
		<!-- banner -->
		<div class="main-banner-2">

		</div>
		<!-- //banner -->
	</div>
	<!-- //main -->

	<!-- page details -->

	<!-- page details -->
	<div class="breadcrumb-agile py-1">
		<ol class="breadcrumb m-0">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Doctor</li>
		</ol>
	</div>
	<!-- //page details -->
	
	<!-- about  -->
	<section class="about py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section mb-md-5 mb-4">
				<h6 class="w3ls-title-sub">Few Words</h6>
				<h1 class="w3ls-title text-uppercase text-bl font-weight-bold">
					WELCOME Dr.
					<?php
						//var_dump($_SESSION['doctor']);
						echo($_SESSION['doctor']['d_name']);
						//var_dump($_SESSION['doc']);
					?>
				</h1>
			</div>
			<div class="row">
				<div class="col-lg-6 agileits_works-grid">
					<div class="wthree-bottom">
						<h2><a href="viewbookingdoct.php"><B><I><U>VIEW APPOINTMENT</U></I></B><br>To the bookings click here</a>			

						<h5 class="subheading-w3ls text-uppercase text-bl mb-5">
							HERE YOUR WILL FIND BOOKING THAT WERE PREVIOUSLY MADE FOR YOU!
						</h5><br>						
					</div>
				</div>

				<div class="col-lg-6 agileits_works-grid1 mt-lg-0 mt-sm-5 mt-5">
					<img src="controler/<?php echo($_SESSION['doctor']['d_profilepic']);?>" alt="" class="img-fluid">			
					
				</div><br><br><br><p><h5><br>
				</h5></p>
				<!--
				<div class="col-lg-6 agileits_works-grid2 mt-lg-5 mt-sm-5 mt-4">
					<img src="images/g2.jpg" alt="" class="img-fluid" />
				</div>
				<div class="col-lg-6 agileits_works-grid2 mt-lg-5 mt-sm-5 mt-4">
					<img src="images/g1.jpg" alt="" class="img-fluid" />
				</div>
				-->
			</div>
		</div>
	</section>
	<?php include("footer.php"); ?>
</body>

</html>