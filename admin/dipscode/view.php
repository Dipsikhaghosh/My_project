

 <?php include 'header.php';  ?>
 <?php include "database.class.php"; ?> 
<div id="page-wrapper">
            <div id="page-inner">
<!-- Bootstrap CSS -->
<?php
    $srv = new database();    
    $query = "select * from doctor";
    $doctor = $srv->select($query);
    include "controlerdelete.php";
?> 
<!-- <div class="container">
    <h2 align='center'>Student System</h2>
    <a href="add.php" class="btn btn-primary">Add New Record</a> -->
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>password</th>
                <th>dob</th>
                <th>specialization</th>
                <th>type</th>
                <th>address</th>
                <th>blood</th>
                <th>file1</th>
                <th>file2</th>
                <th>file3</th>
                <th>profilepic</th>
                <th>status</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>

        <tbody>
            <?php
                while($record = $srv->fetch($doctor)){
                    echo "<tr>";
                    echo "<td>".$record['d_name']."</td>";
                    echo "<td>".$record['d_password']."</td>";
                    echo "<td>".$record['d_dob']."</td>";
                    echo "<td>".$record['d_specialization']."</td>";
                    echo "<td>".$record['d_type']."</td>";
                    echo "<td>".$record['d_address']."</td>";
                    echo "<td>".$record['d_blood']."</td>";
                    echo "<td>".$record['d_file1']."</td>";
                    echo "<td>".$record['d_file2']."</td>";
                    echo "<td>".$record['d_file3']."</td>";
                    echo "<td>".$record['d_profilepic']."</td>";
                    echo "<td>".$record['d_status']."</td>";
                    echo "<td><a href='view.php?delete=".$record['d_id']."'>Delete</a></td>";
                    echo "<td><a href='modify.php?d_id=".$record['d_id']."'>Edit</a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
        <tfoot>
            <tr><td colspan="5">Total Records : <?php echo $srv->num_rows($doctor); ?></td></tr>
        </tfoot>
    </table>

</div>
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
