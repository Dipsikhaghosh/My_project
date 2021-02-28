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
					var_dump(expression)
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
										<input type="submit" name="ok" value="OK">
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
	
<!--footer -->
		<?php include("footer.php") ?>
	<!--footer -->
</body>

</html>