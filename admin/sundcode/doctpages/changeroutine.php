<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
	<!-- link -->
		<?php include("headerlink.php") ?>
	<!-- link -->
</head>

<body>
	<!-- header -->
		<?php include("header.php") ?>
	<!-- header -->
	<!-- page details -->
	<div class="breadcrumb-agile py-1">
		<ol class="breadcrumb m-0">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">About Us</li>
		</ol>
	</div>
	<!-- //page details -->
<div class="main-top">
			<div class="container">
				<div class="header d-md-flex justify-content-between align-items-center py-3">
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li><a href="index.html">Home</a></li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2">
									<a href="about.html" class="active">View Bookings</a></li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2">
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle toogle-2">routine<span class="fa fa-angle-down" aria-hidden="true"></span>
									</label>
									<a href="#">Edit profile<span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
										<li><a href="#services" class="drop-text">change profile details</a></li>
										<li><a href="index.html" class="drop-text">change password</a></li>
									</ul>
								</li>
								
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2">
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle toogle-2">routine<span class="fa fa-angle-down" aria-hidden="true"></span>
									</label>
									<a href="#">Routine <span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
										<li><a href="viewroutine.php" class="drop-text">view routine</a></li>
										<li><a href="index.html" class="drop-text">change routine</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact Us</a></li>
							</ul>
						</nav>
					</div>
					<!-- //nav -->
					<!-- logo -->
					<div id="logo">
						<h1>
							<a href="index.html">
								<span class="fa fa-user-md mr-2"></span>
								<span class="logo-sp">Docs</span> Inn
							</a>
						</h1>
					</div>
					<!-- //logo -->

				</div>
			</div>
		</div>
	<!-- about  -->
	<section class="about py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section mb-md-5 mb-4">
				<h6 class="w3ls-title-sub">Few Words</h6>
				<h1 class="w3ls-title text-uppercase text-bl font-weight-bold">
					WELCOME Dr.
					<?php
						echo($_SESSION['doctor']['d_name']);
						//var_dump($_SESSION['doc']);
					?>
					<br>
					<u>Routine</u>
				</h1>
				<?php include("controler/routinechange.php"); ?>
			</div>
			<div class="row">
				<div class="col-lg-6 agileits_works-grid">
					<div class="wthree-bottom">
						<h5 class="subheading-w3ls text-uppercase text-bl mb-5">
							
						</h5><br>						
					</div>
				</div>

				<div class="col-lg-6 agileits_works-grid1 mt-lg-0 mt-sm-5 mt-5">
					<?php
						//$l="controler/".($_SESSION['doc']['d_profilepic']);
						//echo "<img src="$l" alt="" class="img-fluid">";
					?>
					
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
	<div align="right">
		<a href="logout.php" class="logout-button-2 text-uppercase text-bl">
		<span class="fa fa-sign-in mr-2"></span>logout</a>
	</div>	
	<!--footer -->
		<?php include("footer.php") ?>
	<!--footer -->

</body>

</html>