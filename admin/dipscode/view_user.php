<?php include "database.class.php"; ?>
<!DOCTYPE html5>
<head>
    <title>Docs Inn</title>    
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
    
</head>
<body>
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
                                        <span class="fa fa-map-marker mr-2"></span>Kolkata,India
                                    </p>
                                </div>
                                <div class="col-4 header-top_w3layouts">
                                    <p class="text-bl">
                                        <span class="fa fa-phone mr-2"></span>+91-263676
                                    </p>
                                </div>
                                <!-- social icons -->
                               <!--  <ul class="col-4 top-right-info">
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
                                </ul> -->
                                <!-- //social icons -->
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-4 top-social-agile text-md-right text-center mt-md-0 mt-2">
                            <div class="row">
                                <div class="offset-xl-6 offset-lg-4">
                                </div>
                                <div class="col-xl-3 col-lg-4 col-6 top-w3layouts p-md-0 text-right">
                                    <!-- login -->
                                    <a href="login.html" class="login-button-2 text-uppercase text-bl">
                                        <span class="fa fa-sign-in mr-2"></span>Login</a>
                                    <!-- //login -->
                                </div>
                                <div class="col-xl-3 col-lg-4 col-6 header-w3layouts text-md-right text-left">
                                    <!-- register -->
                                    <a href="register.html" class="login-button-2 text-uppercase text-bl">
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

        <!-- second header -->
        <div class="main-top">
            <div class="container">
                <div class="header d-md-flex justify-content-between align-items-center py-3">
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
                    <!-- nav -->
                    <div class="nav_w3ls">
                        <nav>
                            <label for="drop" class="toggle">Menu</label>
                            <input type="checkbox" id="drop" />
                            <ul class="menu">
                                <li><a href="../index.html">Home</a></li>
                                <li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a href="../about.html">About Us</a></li>
                                <li><a href="../gallery.html">Gallery</a></li>
                                <li class="mx-lg-4 mx-md-3 my-md-0 my-2">
                                    <!-- First Tier Drop Down -->
                                    <label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
                                    </label>
                                    <!-- <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul>
                                        <li><a href="about.html" class="drop-text">Services</a></li>
                                        <li><a href="index.html" class="drop-text">Blog</a></li>
                                        <li><a href="single.html" class="drop-text">Blog Details</a></li>
                                        <li><a href="index.html" class="drop-text">What We do</a></li>
                                        <li><a href="about.html" class="drop-text">Our Doctors</a></li>
                                    </ul>
                                </li> -->
                                <li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- //nav -->
                </div>
            </div>
        </div>
        <!-- //second header -->

        <!-- banner -->
        <div class="main-banner-2">

        </div>
        <!-- //banner -->
    </div>


<!-- Bootstrap CSS -->
<?php
    $srv = new database();    
    $query = "select * from user";
    $user = $srv->select($query);
    include "controlerdelete_user.php";
?> 
<!-- <div class="container">
    <h2 align='center'>Student System</h2>
    <a href="add.php" class="btn btn-primary">Add New Record</a> -->
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>email</th>
                <th>password</th>
                <th>dob</th>
                <th>address</th>
                <th>state</th>
                <th>district</th>
                <th>city</th>
                <th>pin</th>
                <th>blood</th>
                <th>profilepic</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>

        <tbody>
            <?php
                while($record = $srv->fetch($user)){
                    echo "<tr>";
                    echo "<td>".$record['u_name']."</td>";
                    echo "<td>".$record['u_email']."</td>";
                    echo "<td>".$record['u_password']."</td>";
                    echo "<td>".$record['u_dob']."</td>";
                    echo "<td>".$record['u_address']."</td>";
                    echo "<td>".$record['u_state']."</td>";
                    echo "<td>".$record['u_dist']."</td>";
                    echo "<td>".$record['u_city']."</td>";
                    echo "<td>".$record['u_pin']."</td>";
                    echo "<td>".$record['u_blood']."</td>";
                    echo "<td>".$record['u_pic']."</td>";
                    echo "<td><a href='view_user.php?delete=".$record['u_id']."'>Delete</a></td>";
                    echo "<td><a href='modify_user.php?u_id=".$record['u_id']."'>Edit</a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
        <tfoot>
            <tr><td colspan="5">Total Records : <?php echo $srv->num_rows($user); ?></td></tr>
        </tfoot>
    </table>

</div>
		
<!-- jQuery library -->


<!-- Initialize Bootstrap functionality -->
<script>
// Initialize tooltip component
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Initialize popover component
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>
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
                    <br>For any query you can contact us.</p>
                    <ul class="list-unstyled list-styles mt-lg-5 mt-4">
                        <li>
                            <p class="text-li"><span class="fa fa-location-arrow mr-2"></span>BB Sen Road,Kolkata,India</p>
                        </li>
                        <li class="my-3">
                            <p class="text-li"><span class="fa fa-phone mr-2"></span>03482 255592</p>
                        </li>
                        <li>
                            <a href="mailto:info@example.com" class="text-wh"><span class="fa fa-envelope-open mr-2"></span>mail@example.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5 w3l-footer mt-lg-0 mt-5">
                 <!--    <h3 class="mb-sm-4 mb-3 text-wh">Partners</h3>
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
    </li>

</body>
