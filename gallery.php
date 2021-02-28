<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php $con = mysqli_connect('localhost','root','','doc') or die(mysqli_error($con)); ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
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
	<div class="breadcrumb-agile py-1">
		<ol class="breadcrumb m-0">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Gallery</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- gallery -->
	<div class="gallery py-5" id="gallery">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section mb-md-5 mb-4">
				<h6 class="w3ls-title-sub">DOCTOR'S</h6>
				<h3 class="w3ls-title text-uppercase text-dark font-weight-bold">Gallery</h3>
 				<h1>All docs</h1><br>
				<div class="gal-pop-style pt-xl-4">
					<div class="row">
					<?php 
						$getDoc = mysqli_query($con,"SELECT * FROM doctor WHERE d_status=1");
						if(mysqli_num_rows($getDoc) == 0){
							echo 'No doctor available';	
						}else{
							while($row=mysqli_fetch_array($getDoc)){
							?>
							<div class="col-sm-4" style="background-color:lavender;" align="center">
                   	 			<img src="controler/<?php echo $row['d_profilepic']?>" >
                    			<p><strong><?php echo $row['d_name']?></strong></p>
                    			<p><strong><?php echo $row['d_specialization']?></strong></p>
                    			<p><?php echo $row['d_email']?></p>
                    			<p>Address: <?php echo $row['d_address']?></p>

                    		</div>
                    <?php  }  } ?>

 				</div>
				
 			</div>

</div>
		</div>
	</div>
	<!-- popup-->
	<div id="gal1" class="popup-effect">
		<div class="popup">
			<img src="images/g1.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Docs Inn</h5>
			<p class="mt-3">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal2" class="popup-effect">
		<div class="popup">
			<img src="images/g2.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Docs Inn</h5>
			<p class="mt-3">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal3" class="popup-effect">
		<div class="popup">
			<img src="images/g3.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Docs Inn</h5>
			<p class="mt-3">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup3 -->
	<!-- popup-->
	<div id="gal4" class="popup-effect">
		<div class="popup">
			<img src="images/g4.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Docs Inn</h5>
			<p class="mt-3">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal5" class="popup-effect">
		<div class="popup">
			<img src="images/blog1.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Docs Inn</h5>
			<p class="mt-3">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal6" class="popup-effect">
		<div class="popup">
			<img src="images/blog2.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Docs Inn</h5>
			<p class="mt-3">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal7" class="popup-effect">
		<div class="popup">
			<img src="images/blog3.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Docs Inn</h5>
			<p class="mt-3">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal8" class="popup-effect">
		<div class="popup">
			<img src="images/bg.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Docs Inn</h5>
			<p class="mt-3">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal9" class="popup-effect">
		<div class="popup">
			<img src="images/bg1.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Docs Inn</h5>
			<p class="mt-3">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- //gallery -->

	<!-- footer -->
	<footer class="py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-lg-7 w3l-footer">
					<!-- logo -->
					<div class="logo2">
						<h2>
							<a href="index.html">
								<span class="fa fa-user-md mr-2"></span>
								<span class="logo-sp">Docs</span> Inn
							</a>
						</h2>
					</div>
					<!-- //logo -->
					<p class="mt-4 text-li">Our aim is to provide services to all our customers.<br>
					We are available 24X7 hours for our customers.
					<br>For any query you can contact us.</p>
					<ul class="list-unstyled list-styles mt-lg-5 mt-4">
						<li>
							<p class="text-li"><span class="fa fa-location-arrow mr-2"></span>BB Sen Road,Kolkata,India</p>
						</li>
						<li class="my-3">
							<p class="text-li"><span class="fa fa-phone mr-2"></span>03482 255592</p>
						</li>
						<li>
							<a href="mailto:info@example.com" class="text-wh"><span class="fa fa-envelope-open mr-2"></span>mail@example.com</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->

	<!-- footer bottom -->
	<!-- copyright -->
	<div class="copy-w3pvt">
		<div class="container py-3">
			<div class="row">
				<div class="col-lg-7 w3ls_footer_grid1_left text-lg-left text-center">
					<p>&copy; 2019 Docs Inn. All rights reserved 
					</p>
				</div>
				<div class="col-lg-5 w3ls_footer_grid_left1_pos text-lg-right text-center mt-lg-0 mt-2">
					<ul>
						<li>
							<a href="#" class="facebook">
								<span class="fa fa-facebook-f mr-2"></span>Facebook</a>
						</li>
						<li class="mx-3">
							<a href="#" class="twitter">
								<span class="fa fa-twitter mr-2"></span>Twitter</a>
						</li>
						<li>
							<a href="#" class="google">
								<span class="fa fa-google-plus mr-2"></span>Google Plus</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //copyright -->
	<!-- //footer bottom -->
	<!-- move top icon -->
	<a href="#home" class="move-top text-center"></a>
	<!-- //move top icon -->

</body>

</html>