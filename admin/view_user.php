<?php include "../admin/model/database.class.php"; ?>

<?php
    include 'header.php';
?>
<div id="page-wrapper">
            <div id="page-inner">
<!-- Bootstrap CSS -->
<?php
    $srv = new database();    
    $query = "select * from user";
    $user = $srv->select($query);
    include "../admin/controler/controlerdelete_user.php";
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
