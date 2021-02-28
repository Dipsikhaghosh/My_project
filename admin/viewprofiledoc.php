<?php 
    include "../admin/model/database.class.php";
    $srv = new database();
    $query = "select * from doctor where d_id=".$_REQUEST['id'];
    $doctor = $srv->select($query);
    $record = $srv->fetch($doctor);
    //var_dump($record);  
?>

    <!-- Web-Fonts -->
 <?php
    include 'header.php';
?>   
<!-- Bootstrap CSS -->
<div id="page-wrapper">
            <div id="page-inner">
            <div class="title-section mb-md-5 mb-4">	
        <input readonly type="hidden" name="u_id" value="<?php echo $record['u_id']; ?>">
        <?php
        foreach ($record as $key => $value) {
        ?>
            <div class="form-group" >
                <label for="first_name" align="center" class="col-xs-5 control-label"><?php echo $key; ?></label>
                <div class="col-xs-3">
                <?php
                if($key=="d_profilepic" || $key=="d_file1" || $key=="d_file2" || $key=="d_file3"){
                ?>
                    <img src="<?php echo"../controler/$value"?>">
                <?php
                }
                ?>
                    <input readonly type="text" class="form-control" name="name" value="<?php echo $value;?>">
                </div>
             </div>
        <?php
        }
        ?>
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