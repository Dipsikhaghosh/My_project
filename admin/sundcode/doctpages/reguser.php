
<!DOCTYPE html>
<html>
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
			<li class="breadcrumb-item active" aria-current="page">Register</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- register -->
	<section class="logins py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section mb-md-5 mb-4">
				<h6 class="w3ls-title-sub">Easy to Register</h6>
				<h3 class="w3ls-title text-uppercase text-dark font-weight-bold">Register Now</h3>
			</div>
			<div class="login px-sm-4 mx-auto mw-100 login-wrapper">
				<form method="post" id="regfrm" action="controler/dataadd.php" enctype="multipart/form-data"><input type="hidden" name="tab" value="user">
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" class="form-control" name="name" id="name" placeholder="" required="">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="" required="">
					</div>
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" class="form-control" name="phno" id="phno" placeholder="" required="">
					</div>
					<div class="form-group">
						<label class="mb-2">Password</label>
						<input type="password" class="form-control" name="password" id="password1" placeholder="" required="">
					</div>
					<!--
					<div class="form-group mb-4">
						<label>Confirm Password</label>
						<input type="password" class="form-control" name="password" id="password2" placeholder="" required="">
					</div>
					-->
					<div class="form-group mb-4">
						<label>Date of Birth</label>
						<input type="date" class="form-control" name="dob" id="dob" placeholder="" required="">
					</div>
					<div class="form-group mb-4">
						<label>Address</label>
						<input type="text" class="form-control" name="address" id="address" placeholder="" required="">
					</div>
					<div class="form-group mb-4">
						<label>State</label>
						<input type="text" class="form-control" name="state" id="state" placeholder="" required="">
					</div>
					<div class="form-group mb-4">
						<label>District</label>
						<input type="text" class="form-control" name="district" id="district" placeholder="" required="">
					</div>
					<div class="form-group mb-4">
						<label>City</label>
						<input type="text" class="form-control" name="city" id="city" placeholder="" required="">
					</div>
					<div class="form-group mb-4">
						<label>Pin</label>
						<input type="number" class="form-control" name="pin" id="pin" placeholder="" required="">
					</div>
					<div class="form-group mb-4">
						<label>Blood type</label>
						<select name="blood id="blood" class="form-control">
							<option value="op">O+</option>
							<option value="on">O-</option>
							<option value="ap">A+</option>
							<option value="an">A-</option>
							<option value="bp">B+</option>
							<option value="bn">B-</option>
							<option value="abp">AB+</option>
							<option value="abn">AB-</option>
						</select>
					</div>
					<div class="form-group mb-4">
						<label>Profile Pic</label>
						<input type="file" class="form-control" name="image" id="file" placeholder="" required="">
					</div>
					<button type="submit" class="btn submit mt-4" id="submitbtn">Register</button>
					<button type="submit" class="btn submit mt-4" align="right">Reset</button>

					<p class="text-center mt-5">
						<a href="#">By clicking Register, I agree to your terms</a>
					</p>
		</table>
	</form>
			</div>
		</div>
	</section>
	<!-- //register -->

<!--footer -->
		<?php include("footer.php") ?>
	<!--footer -->
</body>

</html>