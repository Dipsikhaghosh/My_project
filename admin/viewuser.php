<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php $con = mysqli_connect('localhost','root','','doc') or die(mysqli_error($con)); ?>
<?php include("header.php") ?>
<div id="page-wrapper">
            <div id="page-inner">
			<div class="gal-pop-style pt-xl-4">
				<div class="row">
					<?php $getDoc = mysqli_query($con,"SELECT * FROM user");
					if(mysqli_num_rows($getDoc)==0){
						echo 'No user available';	
					}else{
						while($row=mysqli_fetch_array($getDoc)){
						?>
							<div class="col-sm-4" ">
                   	 			<img src="../controler/<?php echo $row['u_pic']?>" height="180px" width="210px" >
                    			<p><strong><?php echo $row['u_name']?></strong></p>
                    			<p><strong><?php echo $row['u_city']?></strong></p>
                    			<p><?php echo $row['u_email']?></p>
                    			<p>Address: <?php echo $row['u_address']?></p>
                    			<a href="viewprofileuser.php?id=<?php echo $row['u_id']?>">View Profile</a>
                    		</div>
                    	<?php } } ?>
				</div>
			</div>
		</div>
	</div>

	<!-- popup-->
	<script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
	<!-- //move top icon -->

</body>

</html>