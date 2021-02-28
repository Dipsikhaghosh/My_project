<?php //if (isset($_SESSION['doctor'])){?>
		<div class="main-top">
			<div class="container">
				<div class="header d-md-flex justify-content-between align-items-center py-3">
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li><a href="index.php">Home Doctor</a></li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2">
									<a href="about.php" class="active">View Bookings</a></li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2">
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle toogle-2">routine<span class="fa fa-angle-down" aria-hidden="true"></span>
									</label>
									<a href="#">Edit profile<span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
										<li><a href="#services" class="drop-text">change profile details</a></li>
										<li><a href="index.php" class="drop-text">change password</a></li>
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
										<li><a href="changeroutine.php" class="drop-text">change routine</a></li>
									</ul>
								</li>
								<li><a href="contact.php">Contact Us</a></li>
							</ul>
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
					<!-- banner -->

		<div class="main-banner-2">

		</div>
		<!-- //banner -->

		</div>
<?php //}?>
