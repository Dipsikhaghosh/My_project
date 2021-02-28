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

	<!-- about  -->
	<section class="about py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section mb-md-5 mb-4">
				<h6 class="w3ls-title-sub">Few Words</h6>
				<h1 class="w3ls-title text-uppercase text-bl font-weight-bold">
					WELCOME
					<?php
						echo($_SESSION['user']['u_name']);
						//var_dump($_SESSION['doc']);
					?>
				</h1>
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
						$l="controler/".($_SESSION['doc']['d_profilepic']);
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