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
					WELCOME Dr.
					<?php
						echo($_SESSION['doctor']['d_name']);
					?>
				</h1>
				Plz, fill the table the days and time of avilabliy
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
					//var_dump(expression)
					?>
					
				</div><br><br><br><p><h5><br>
					<form method="POST" action="controler/routineadd.php">
						<table border="5" cellpadding="10" cellspacing="10">
							<tr>
								<td>Day</td>
								<td>6am to 8am</td>
								<td>8am to 10am</td>
								<td>10am to 12pm</td>
								<td>12pm to 2pm</td>
								<td>2pm to 4pm</td>
								<td>6pm to 8pm</td>
								<td>8pm to 10pm</td>
							</tr>
							<tr>
								<td>monday</td>
								<td>
									<input type="checkbox" name="mon0608" value="dr_0608">6am to 8am
								</td>
								<td>
									<input type="checkbox" name="mon0810" value="dr_0810">8am to 10am
								</td>
								<td>
									<input type="checkbox" name="mon1012" value="dr_1012">10am to 12pm
								</td>
								<td>
									<input type="checkbox" name="mon1214" value="dr_1214">12pm to 2pm
								</td>
								<td>
									<input type="checkbox" name="mon1416" value="dr_1416">2pm to 4pm
								</td>
								<td>
									<input type="checkbox" name="mon1618" value="dr_1820">6pm to 8pm
								</td>
								<td>
									<input type="checkbox" name="mon1820" value="dr_1820">8pm to 10pm
								</td>
							</tr>
							<tr>
								<td>tueday</td>
								<td>
									<input type="checkbox" name="tue0608" value="dr_0608">6am to 8am
								</td>
								<td>
									<input type="checkbox" name="tue0810" value="dr_0810">8am to 10am
								</td>
								<td>
									<input type="checkbox" name="tue1012" value="dr_1012">10am to 12pm
								</td>
								<td>
									<input type="checkbox" name="tue1214" value="dr_1214">12pm to 2pm
								</td>
								<td>
									<input type="checkbox" name="tue1416" value="dr_1416">2pm to 4pm
								</td>
								<td>
									<input type="checkbox" name="tue1618" value="dr_1820">6pm to 8pm
								</td>
								<td>
									<input type="checkbox" name="tue1820" value="dr_1820">8pm to 10pm
								</td>
							</tr>
							<tr>
								<td>wednesday</td>
								<td>
									<input type="checkbox" name="wed0608" value="dr_0608">6am to 8am
								</td>
								<td>
									<input type="checkbox" name="wed0810" value="dr_0810">8am to 10am
								</td>
								<td>
									<input type="checkbox" name="wed1012" value="dr_1012">10am to 12pm
								</td>
								<td>
									<input type="checkbox" name="wed1214" value="dr_1214">12pm to 2pm
								</td>
								<td>
									<input type="checkbox" name="wed1416" value="dr_1416">2pm to 4pm
								</td>
								<td>
									<input type="checkbox" name="wed1618" value="dr_1820">6pm to 8pm
								</td>
								<td>
									<input type="checkbox" name="wed1820" value="dr_1820">8pm to 10pm
								</td>
							</tr>
							<tr>
								<td>thurssday</td>
								<td>
									<input type="checkbox" name="thu0608" value="dr_0608">6am to 8am
								</td>
								<td>
									<input type="checkbox" name="thu0810" value="dr_0810">8am to 10am
								</td>
								<td>
									<input type="checkbox" name="thu1012" value="dr_1012">10am to 12pm
								</td>
								<td>
									<input type="checkbox" name="thu1214" value="dr_1214">12pm to 2pm
								</td>
								<td>
									<input type="checkbox" name="thu1416" value="dr_1416">2pm to 4pm
								</td>
								<td>
									<input type="checkbox" name="thu1618" value="dr_1820">6pm to 8pm
								</td>
								<td>
									<input type="checkbox" name="thu1820" value="dr_1820">8pm to 10pm
								</td>
							</tr>
							<tr>
								<td>friday</td>
								<td>
									<input type="checkbox" name="fri0608" value="dr_0608">6am to 8am
								</td>
								<td>
									<input type="checkbox" name="fri0810" value="dr_0810">8am to 10am
								</td>
								<td>
									<input type="checkbox" name="fri1012" value="dr_1012">10am to 12pm
								</td>
								<td>
									<input type="checkbox" name="fri1214" value="dr_1214">12pm to 2pm
								</td>
								<td>
									<input type="checkbox" name="fri1416" value="dr_1416">2pm to 4pm
								</td>
								<td>
									<input type="checkbox" name="fri1618" value="dr_1820">6pm to 8pm
								</td>
								<td>
									<input type="checkbox" name="fri1820" value="dr_1820">8pm to 10pm
								</td>
							</tr>
							<tr>
								<td>saturday</td>
								<td>
									<input type="checkbox" name="sat0608" value="dr_0608">6am to 8am
								</td>
								<td>
									<input type="checkbox" name="sat0810" value="dr_0810">8am to 10am
								</td>
								<td>
									<input type="checkbox" name="sat1012" value="dr_1012">10am to 12pm
								</td>
								<td>
									<input type="checkbox" name="sat1214" value="dr_1214">12pm to 2pm
								</td>
								<td>
									<input type="checkbox" name="sat1416" value="dr_1416">2pm to 4pm
								</td>
								<td>
									<input type="checkbox" name="sat1618" value="dr_1820">6pm to 8pm
								</td>
								<td>
									<input type="checkbox" name="sat1820" value="dr_1820">8pm to 10pm
								</td>
							</tr>
													<tr>
								<td>sunday</td>
								<td>
									<input type="checkbox" name="sun0608" value="dr_0608">6am to 8am
								</td>
								<td>
									<input type="checkbox" name="sun0810" value="dr_0810">8am to 10am
								</td>
								<td>
									<input type="checkbox" name="sun1012" value="dr_1012">10am to 12pm
								</td>
								<td>
									<input type="checkbox" name="sun1214" value="dr_1214">12pm to 2pm
								</td>
								<td>
									<input type="checkbox" name="sun1416" value="dr_1416">2pm to 4pm
								</td>
								<td>
									<input type="checkbox" name="sun1618" value="dr_1820">6pm to 8pm
								</td>
								<td>
									<input type="checkbox" name="sun1820" value="dr_1820">8pm to 10pm
								</td>
							</tr>

							<tr>
								<td colspan="8">
									<div align="center">
										<input type="submit" name="ok" value="Enter(Register)">
									</div>									
								</td>
							</tr>
						</table>
					</form>
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
					<br>For any query you can contact us.
				</p>
					<ul class="list-unstyled list-styles mt-lg-5 mt-4">
						<li>
							<p class="text-li"><span class="fa fa-location-arrow mr-2"></span>Morris Park, New York</p>
						</li>
						<li class="my-3">
							<p class="text-li"><span class="fa fa-phone mr-2"></span>1234567890</p>
						</li>
						<li>
							<a href="mailto:info@example.com" class="text-wh"><span class="fa fa-envelope-open mr-2"></span>mail@example.com</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-5 w3l-footer mt-lg-0 mt-5">
					<!-- <h3 class="mb-sm-4 mb-3 text-wh">Partners</h3>
					<ul class="list-unstyled list-part text-wh pt-lg-3">
						<li><span class="fa fa-500px" aria-hidden="true"></span></li>
						<li class="mx-4"><span class="fa fa-gg" aria-hidden="true"></span></li>
						<li><span class="fa fa-lastfm" aria-hidden="true"></span></li>
						<li class="mx-4"><span class="fa fa-openid" aria-hidden="true"></span></li>
						<li><span class="fa fa-angellist" aria-hidden="true"></span></li>
					</ul> -->
					<div class="n-right-w3ls mt-5 pt-lg-4">
						<h3 class="mb-sm-4 mb-3 text-wh">Newsletter</h3>
						<form action="#" method="post">
							<div class="row pt-2">
								<div class="col-8 form-group">
									<input class="form-control" type="email" name="Email" placeholder="Email Address" required="">
								</div>
								<div class="col-4 form-group p-sm-0 pl-0">
									<button class="form-control submit btn font-weight-bold" type="submit">Subscribe</button>
								</div>
							</div>
						</form>
					</div>
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