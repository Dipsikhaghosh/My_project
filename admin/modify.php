<?php include "../admin/controler/controlerview.php"; ?>

<?php
    include 'header.php';
?>
        <!-- second header -->
        

<!-- Bootstrap CSS -->
<div id="page-wrapper">
            <div id="page-inner">
<class="container py-xl-5 py-lg-3">
            <div class="title-section mb-md-5 mb-4">	
    <form class="form-horizontal" method="post" action="../admin/controler/controlermodify.php">
        <input type="hidden" name="d_id" value="<?php echo $record['d_id']; ?>">
       <div class="form-group" >
            <label for="first_name" align="center" class="col-xs-5 control-label">Doctor Name</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="name" value="<?php echo $record['d_name']; ?>">
               
            </div>
        </div>
        <div class="form-group">
            <label for="last_name" class="col-xs-5 control-label">email</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="email" value="<?php echo $record['d_email']; ?>" readonly>
            </div>
        </div>
        <!-- <div class="form-group">
            <label for="last_name" class="col-xs-5 control-label">password</label>
            <div class="col-xs-3">
                <input type="password" class="form-control" name="password" value="<?php echo $record['d_password']; ?>" readonly>
            </div>
        </div> -->
        
         <div class="form-group">
            <label for="last_name" class="col-xs-5 control-label">specialization</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="specialization" value="<?php echo $record['d_specialization']; ?>">
            </div>
        </div>
         <div class="form-group">
                        <label class="col-xs-5 control-label">Type</label>
                        <select class="col-xs-3 control-select" name="type" id="type" required="">
                            <option value="home">home</option>
                            <option value="chamber">chamber</option>
                        </select>
                    </div>
         <div class="form-group">
            <label for="last_name" class="col-xs-5 control-label">address</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="address" value="<?php echo $record['d_address']; ?>">
            </div>
        </div>
        <div class="form-group mb-4">
                        <label class="col-xs-5 control-label">Blood type</label>
                        <select class="col-xs-3 control-select" name="blood" value="<?php echo $record['d_blood']; ?> class="form-control" >
                        
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
            <label for="last_name" class="col-xs-5 control-label">MBBS</label>
            <div class="col-xs-3">
                <input type="file" class="form-control" name="file1" value="<?php echo $record['d_file1']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="last_name" class="col-xs-5 control-label">MD</label>
            <div class="col-xs-3">
                <input type="file" class="form-control" name="file2" value="<?php echo $record['d_file2']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="last_name" class="col-xs-5 control-label">Super Specilazation</label>
            <div class="col-xs-3">
                <input type="file" class="form-control" name="file3" value="<?php echo $record['d_file3']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="last_name" class="col-xs-5 control-label">profilepic</label>
            <div class="col-xs-3">
                <input type="file" class="form-control" name="profilepic" value="<?php echo $record['d_profilepic']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="last_name" class="col-xs-5 control-label">status</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="status" value="<?php echo $record['d_status']; ?>">
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