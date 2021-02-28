<?php 
	$con = mysqli_connect('localhost','root','','doc') or die(mysqli_error($con));
	session_start();
?>
<!DOCTYPE html>
<html>
<?php
	if (isset($_POST['submit'])) {
		$date=$_POST['date'];
		$name=$_POST['name'];
		$did=$_POST['did'];
		//Convert the date string into a unix timestamp.
		//Get the day of the week using PHP's date function.
		$dayOfWeek = date("l", strtotime($date));
		$day= strtolower(substr($dayOfWeek, 0, 3));
		$today = date("Y/m/d");
		if(strtotime($date) < strtotime($today)){
			?>
			<script type="text/javascript">
				alert("Invalid Date");
				window.location.href = "finddoc.php";
			</script>
			<?php
		}
		// var_dump($date,$name,$did,$dayOfWeek,$day,$today);	
		$special = mysqli_query($con,"SELECT * FROM droutine WHERE dr_day='$day'");
		$row=mysqli_fetch_array($special);
		//var_dump($_SESSION['user']);
		//echo "<br>---------------<br>";
				
		foreach ($row as $k1 => $v1) {
			if ($k1!='dr_id' && $k1!="dr_day" && $k1!="dr_date" && substr($k1, 0, 2)=="dr") {
				$allid=explode(",", $v1);
				$f=0;
				$f=0;
				foreach ($allid as $k2 => $v2) {
					if($v2==$did){
							$f=1;
					}
				}
				if ($f!=0) {
					//echo $k1;
					//echo "<br>",substr($k1, 3, 2)," to ",substr($k1, 5, 2);
				}
			}
		}
	}
?>				
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
				<h6 class="w3ls-title-sub">Register Now</h6>
				<h3 class="w3ls-title text-uppercase text-dark font-weight-bold"> Doctor :-DR.<?php echo "$name"?>	</h3>
			</div>
			<div class="login px-sm-4 mx-auto mw-100 login-wrapper">
				<form method="post" id="regfrm" action="controler/dataadd.php" enctype="multipart/form-data">
					<input type="hidden" name="tab" value="booking">
					<input type="hidden" name="uid" value="<?php echo $_SESSION['user']['u_id']?>">
					<input type="hidden" name="did" value="<?php echo $did;?>">
					<div class="form-group">
						<label>Date</label>
						<input type="date" class="form-control" name="date" id="email" placeholder="" required="" value="<?php echo $date?>" readonly>
					</div>
					<div class="form-group">
						<label>Day</label>
						<input type="text" class="form-control" name="day" id="name" placeholder="" required="" value="<?php echo $dayOfWeek?>" readonly>
					</div>
					<div class="form-group">
						<label>Time Slot</label>
						<select type="text" class="form-control" name="time" id="name" placeholder="" required="">
						<?php
						$af=0;
						foreach ($row as $k1 => $v1) {
							if ($k1!='dr_id' && $k1!="dr_day" && $k1!="dr_date" && substr($k1, 0, 2)=="dr") {
								$allid=explode(",", $v1);
								$f=0;
								$f=0;
								foreach ($allid as $k2 => $v2) {
									if($v2==$did){
										$f=1;
										$af++;
									}
								}
								if ($f!=0) {
									echo $k1;
									echo "<option>",substr($k1, 3, 2)," to ",substr($k1, 5, 2),"</option>";
								}
							}
						}
						if ($af==0) {

							////echo "<option>Sorry, no time slote avilable on this day</option>";
						}
						?>	
						</select>
						
					</div>
					<button type="submit" class="btn submit mt-4" id="submitbtn">Confirm Booking</button>
					<p class="text-center mt-5">
						<a href="#">By clicking Register, I agree to your terms</a>
					</p>					
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