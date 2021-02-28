<?php include "../admin/controler/controlerview_user.php"; ?>

    <!-- Web-Fonts -->
 <?php
    include 'header.php';
?>   
<!-- Bootstrap CSS -->

<div id="page-wrapper">
            <div id="page-inner">
            <div class="title-section mb-md-5 mb-4">	
    <form class="form-horizontal" method="post" action="../admin/controler/controlermodify_user.php">
        <input type="hidden" name="u_id" value="<?php echo $record['u_id']; ?>">
       <div class="form-group" >
            <label for="first_name" align="center" class="col-xs-5 control-label">user name</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="name" value="<?php echo $record['u_name'];?>">
               
            </div>
        </div>
        <div class="form-group">
            <label for="last_name" class="col-xs-5 control-label">email</label>
            <div class="col-xs-3">
                <input type="email" class="form-control" name="email" value="<?php echo $record['u_email']; ?>" readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="last_name" class="col-xs-5 control-label">Date of birth</label>
            <div class="col-xs-3">
                <input type="date" class="form-control" name="dob" value="<?php echo $record['u_dob']; ?>">
            </div>
        </div>
        
         <div class="form-group">
            <label for="last_name" class="col-xs-5 control-label">address</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="address" value="<?php echo $record['u_address']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="last_name" class="col-xs-5 control-label">State</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="state" value="<?php echo $record['u_state']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="last_name" class="col-xs-5 control-label">District</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="dist" value="<?php echo $record['u_dist']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="last_name" class="col-xs-5 control-label">City</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="city" value="<?php echo $record['u_city']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="last_name" class="col-xs-5 control-label">Pin</label>
            <div class="col-xs-3">
                <input type="number" class="form-control" name="pin" value="<?php echo $record['u_pin']; ?>">
            </div>
        </div>
        <div class="form-group mb-4">
                        <label class="col-xs-5 control-label">Blood type</label>
                        <select class="col-xs-3 control-select" name="blood" value="<?php echo $record['u_blood']; ?> class="form-control" >
                        
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
        <div class="form-group">
            <label for="last_name" class="col-xs-5 control-label">profilepic</label>
            <div class="col-xs-3">
                <input type="file" class="form-control" name="pic" value="<?php echo $record['u_pic']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="last_name" class="col-xs-5 control-label"></label>
            <div class="col-xs-3">
                <input type="submit" name="submit" value="Save" class="form-control" id="last_name" >
            </div>
        </div>
    
    </form>
</div>
</div>
		</section>


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

    <!-- footer bottom -->
    <!-- copyright -->
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

    <!-- //copyright -->
    <!-- //footer bottom -->
    <!-- move top icon -->
    
</body>