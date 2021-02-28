
<?php $con = mysqli_connect('localhost','root','','doc') or die(mysqli_error($con)); ?>


	
	
		<?php include("header.php") ?>
	<!-- header -->

	<!-- page details -->
	<!-- //page details -->
<div id="page-wrapper">
            <div id="page-inner">
	<!-- gallery -->
	
			<div class="gal-pop-style pt-xl-4">
				<div class="row">
					<?php $getDoc = mysqli_query($con,"SELECT * FROM doctor");
					if(mysqli_num_rows($getDoc)==0){
						echo 'No doctor available';	
					}else{
						while($row=mysqli_fetch_array($getDoc)){
						?>
							<div class="col-sm-4" style="background-color:lavender;">
								<img src="<?php echo "../controler/".$row['d_profilepic']?>" >
                    			<p><strong><?php echo $row['d_name']?></strong></p>
                    			<p><strong><?php echo $row['d_specialization']?></strong></p>
                    			<p><?php echo $row['d_email']?></p>
                    			<p>Address: <?php echo $row['d_address']?></p>
                    			<a href="viewprofiledoc.php?id=<?php echo $row['d_id']?>">View Profile</a>
                    		</div>
                    	<?php } } ?>
				</div>
			</div>
		</div>
	</div>
	<!-- popup-->
	
	<!--footer -->
		
	<!--footer -->
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
</body>

</html>