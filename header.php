<?php
//user menu
	if(!empty($_SESSION['user']) || !empty($_SESSION['doctor'])){
?>	<!-- main -->
	<div id="home">
		<!-- top header -->
		<header>
			<div class="top-bar py-3">
				<div class="container">
					<div class="row">
						<div class="col-xl-5 col-lg-6 col-md-8 top-social-agile text-lg-left text-center">
							<div class="row">
								<div class="col-4 header-top_w3layouts">
									<p class="text-bl">
										<span class="fa fa-map-marker mr-2"></span>kolkata, India
									</p>
								</div>
								<div class="col-4 header-top_w3layouts">
									<p class="text-bl">
										<span class="fa fa-phone mr-2"></span>+91-263676
									</p>
								</div>
								<!-- social icons -->
								<ul class="col-4 top-right-info">
									<li>
										<a href="#">
											<span class="fa fa-facebook-f"></span>
										</a>
									</li>
									<li class="mx-3">
										<a href="#">
											<span class="fa fa-twitter"></span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="fa fa-google-plus"></span>
										</a>
									</li>
									<li class="ml-3">
										<a href="#">
											<span class="fa fa-pinterest-p"></span>
										</a>
									</li>
								</ul>
								<!-- //social icons -->
							</div>
						</div>
						<div class="col-xl-7 col-lg-6 col-md-4 top-social-agile text-md-right text-center mt-md-0 mt-2">
							<div class="row">
								<div class="offset-xl-6 offset-lg-4">
								</div>
								<div class="col-xl-3 col-lg-4 col-6 top-w3layouts p-md-0 text-right">
									<!-- login -->
									<a href="login.php" class="logout-button-2 text-uppercase text-bl">
								<span class="fa fa-sign-in mr-2"></span>log out</a>
	
									<!-- //login -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- //top header -->
<?php //if (isset($_SESSION['user'])==0 && isset($_SESSION['doctor'])==0){?>
		<!-- second header -->
		<div class="main-top">
			<div class="container">
				<div class="header d-md-flex justify-content-between align-items-center py-3">
					<!-- logo -->
					<div id="logo">
						<h1>
							<a href="index.php">
								<span class="fa fa-user-md mr-2"></span>
								<span class="logo-sp">Docs</span> Inn
							</a>
						</h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li><a href="user.php">Home</a></li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a href="about.php" class="active">About Us</a></li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a href="gallery.php">Gallery</a></li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a href="logout.php">Log out</a></li>
								
								
								
							</ul>
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</div>
		<!-- //second header -->
<?php 	//}?>
	</div>
	<!-- //main -->
<?php
}
//normal menu sarts
else{
?>
	<!-- main -->
	<div id="home">
		<!-- top header -->
		<header>
			<div class="top-bar py-3">
				<div class="container">
					<div class="row">
						<div class="col-xl-5 col-lg-6 col-md-8 top-social-agile text-lg-left text-center">
							<div class="row">
								<div class="col-4 header-top_w3layouts">
									<p class="text-bl">
										<span class="fa fa-map-marker mr-2"></span>kolkata, India
									</p>
								</div>
								<div class="col-4 header-top_w3layouts">
									<p class="text-bl">
										<span class="fa fa-phone mr-2"></span>+91-263676
									</p>
								</div>
								<!-- social icons -->
								<ul class="col-4 top-right-info">
									<li>
										<a href="#">
											<span class="fa fa-facebook-f"></span>
										</a>
									</li>
									<li class="mx-3">
										<a href="#">
											<span class="fa fa-twitter"></span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="fa fa-google-plus"></span>
										</a>
									</li>
									<li class="ml-3">
										<a href="#">
											<span class="fa fa-pinterest-p"></span>
										</a>
									</li>
								</ul>
								<!-- //social icons -->
							</div>
						</div>
						<div class="col-xl-7 col-lg-6 col-md-4 top-social-agile text-md-right text-center mt-md-0 mt-2">
							<div class="row">
								<div class="offset-xl-6 offset-lg-4">
								</div>
								<div class="col-xl-3 col-lg-4 col-6 top-w3layouts p-md-0 text-right">
									<!-- login -->
									<a href="login.php" class="logout-button-2 text-uppercase text-bl">
								<span class="fa fa-sign-in mr-2"></span>log in</a>
	
									<!-- //login -->
								</div>
								<div class="col-xl-3 col-lg-4 col-6 header-w3layouts text-md-right text-left">
									<!-- register -->
									<a href="register.php" class="login-button-2 text-uppercase text-bl">
									<span class="fa fa-pencil-square-o mr-2"></span>Register</a>
									<!-- //register -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- //top header -->
<?php //if (isset($_SESSION['user'])==0 && isset($_SESSION['doctor'])==0){?>
		<!-- second header -->
		<div class="main-top">
			<div class="container">
				<div class="header d-md-flex justify-content-between align-items-center py-3">
					<!-- logo -->
					<div id="logo">
						<h1>
							<a href="index.php">
								<span class="fa fa-user-md mr-2"></span>
								<span class="logo-sp">Docs</span> Inn
							</a>
						</h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li><a href="index.php">Home</a></li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a href="about.php" class="active">About Us</a></li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a href="gallery.php">Gallery</a></li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2">
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle toogle-2">Log<span class="fa fa-angle-down" aria-hidden="true"></span>
									</label>
									<a href="#">Log in <span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
										<li><a href="loginuser.php" class="drop-text">Log in as a patient</a></li>
										<li><a href="logindoc.php" class="drop-text">Log in as a dcotor</a></li>
									</ul>
								</li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2">
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle toogle-2">Reg<span class="fa fa-angle-down" aria-hidden="true"></span>
									</label>
									<a href="#">Register<span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
										<li><a href="regdoc.php" class="drop-text">Register as a doctor</a></li>
										<li><a href="reguser.php" class="drop-text">Register as a patient</a></li>
									</ul>
								</li>
								
								
							</ul>
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</div>
		<!-- //second header -->
<?php 	}?>
	</div>
	<!-- //main -->

