<?php $con = mysqli_connect('localhost','root','','doc') or die(mysqli_error($con)); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Doc's Inn</title>
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
			<li class="breadcrumb-item active" aria-current="page">Register</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- register -->
	<section class="logins py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section mb-md-5 mb-4">
				<h6 class="w3ls-title-sub">Easy to Register</h6>
				<h3 class="w3ls-title text-uppercase text-dark font-weight-bold">Doctor's Registration Form</h3>
			</div>
			<div class="login px-sm-4 mx-auto mw-100 login-wrapper">
				<form method="post" id="regfrm" action="controler/dataadd.php" enctype="multipart/form-data">
					<input type="hidden" name="tab" value="doctor">
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="Enter your E-mail id" required>
					</div>
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" class="form-control" name="phno" id="phno" minlength="10" maxlength="10" placeholder="Enter your phone number" required>
					</div>
					<div class="form-group">
						<label class="mb-2">Password</label>
						<input type="password" class="form-control" name="password" id="password1" placeholder="Enter your password" required>
					</div>
					<div class="form-group mb-4">
						<label>Profile Pic</label>
						<input type="file" class="form-control" name="pic" id="file" placeholder="Enter your profile pic" required>
					</div>
					
					<div class="form-group mb-4">
						<label>Date of Birth</label>
						<input type="date" class="form-control" name="dob" id="dob" placeholder="Enter your date of birth" required>
					</div>
					<div class="form-group mb-4">
						<label>Specilazation</label>
						<select name="specilazation" class="form-control" required>
						<option value=''>Select</option>
            				<?php $spec = mysqli_query($con,"SELECT DISTINCT s_specialization FROM symptoms");
            				 while($row=mysqli_fetch_array($spec)){?>
                     	<option><?php echo $row['s_specialization']?></option>
                        	<?php } ?>
                        </select>

						<!-- <input type="text" class="form-control" name="specilazation" id="password2" placeholder="" required>
 -->				</div>
					<div class="form-group mb-4">
						<label>Type</label>
						<select class="form-control" name="type" id="type" required>
							<option value="home">home</option>
							<option value="chamber">chamber</option>
						</select>
					</div>
					<div class="form-group mb-4">
						<label>Full Address</label>
						<input type="textarea" class="form-control" name="address" id="address" placeholder="Enter your full address" required>
					</div>
					<div class="form-group mb-4">
						<label>Blood type</label>
						<select name="blood id="blood" class="form-control">
							<option value="O+">O+</option>
							<option value="O-">O-</option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
						</select>
					</div>
					<div class="form-group mb-4">
						<label>MBBS</label>
						<input type="file" class="form-control" name="image1" id="file" placeholder="" required>
					</div>
					<div class="form-group mb-4">
						<label>MD</label>
						<input type="file" class="form-control" name="image2" id="file" placeholder="">
					</div>
					<div class="form-group mb-4">
						<label>Super Specilazation</label>
						<input type="file" class="form-control" name="image3" id="file" placeholder="" >
					</div>
					<button type="submit" class="btn submit mt-4" id="submitbtn">Register</button>
					<button type="submit" class="btn submit mt-4" align="right">Reset</button>

					<p class="text-center mt-5">
						<a href="#">By clicking Register, I agree to your terms</a>
					</p>
					<!--
					<div class="form-group mb-4">
						<label>Confirm Password</label>
						<input type="password" class="form-control" name="password" id="password2" placeholder="" required>
					</div>
					<div class="form-group mb-4">
						<label>Address</label>
						<input type="text" class="form-control" name="address" id="address" placeholder="" required>
					</div>
					<div class="form-group mb-4">
						<label>State</label>
						<input type="text" class="form-control" name="state" id="state" placeholder="" required>
					</div>
					<div class="form-group mb-4">
						<label>District</label>
						<input type="text" class="form-control" name="district" id="district" placeholder="" required>
					</div>
					<div class="form-group mb-4">
						<label>City</label>
						<input type="text" class="form-control" name="city" id="city" placeholder="" required>
					</div>
					<div class="form-group mb-4">
						<label>Pin</label>
						<input type="number" class="form-control" name="pin" id="pin" placeholder="" required>
					</div>
					
					-->
		</table>
	</form>
			</div>
		</div>
	</section>
	<!-- //register -->

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
					<p class="mt-4 text-li">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
						laudantium, totam rem
						aperiam,
						eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
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
					<h3 class="mb-sm-4 mb-3 text-wh">Partners</h3>
					<ul class="list-unstyled list-part text-wh pt-lg-3">
						<li><span class="fa fa-500px" aria-hidden="true"></span></li>
						<li class="mx-4"><span class="fa fa-gg" aria-hidden="true"></span></li>
						<li><span class="fa fa-lastfm" aria-hidden="true"></span></li>
						<li class="mx-4"><span class="fa fa-openid" aria-hidden="true"></span></li>
						<li><span class="fa fa-angellist" aria-hidden="true"></span></li>
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
					<p>&copy; 2019 Be Clinic. All rights reserved | Design by
						<a href="http://w3layouts.com/">W3layouts</a>
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