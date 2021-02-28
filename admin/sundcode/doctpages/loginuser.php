<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
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
			<li class="breadcrumb-item active" aria-current="page">Login</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- login -->
	<section class="logins py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section mb-md-5 mb-4">
				<h6 class="w3ls-title-sub">Easy to Login</h6>
				<h3 class="w3ls-title text-uppercase text-dark font-weight-bold">Login Now</h3>
			</div>
			<div class="login px-sm-4 mx-auto mw-100 login-wrapper">
				<form class="login-wrapper" action="controler/login.php" method="post">
					<input type="hidden" name="tab" value="user">
					<input type="hidden" name="src" value="../loginuser.php">
					<input type="hidden" name="dest" value="../user.php">
					<div class="form-group">
						<label>Email Address</label>
						<input type="email" class="form-control" name="email" placeholder="" required="">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password" placeholder="" required="">
					</div>
					<button type="submit" class="btn submit mt-4">Login</button>
					<p class="text-center mt-5">
						<a href="register.html"> Don't have an Account?</a>
					</p>
				</form>
			</div>
		</div>
	</section>
	<!-- //login -->

<!--footer -->
		<?php include("footer.php") ?>
	<!--footer -->

</body>

</html>