<?php
    include 'header.php';
?>
        <div id="page-wrapper">
            <div id="page-inner">
                <form method="post" id="regfrm" action="controler/dataadd.php">
                    <input type="hidden" name="tab" value="symptoms">
                    <div class="form-group">
                        <label>Specialization</label>
                        <input type="text" class="form-control" name="specialization" id="specialization" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>Symptoms</label>
                        <input type="symptoms" class="form-control" name="symptoms" id="symptoms" placeholder="" required>
                    </div>
                    <button type="submit" class="btn submit mt-4" id="submitbtn">Add</button>
                    <button type="submit" class="btn submit mt-4" align="right">Reset</button>

                    <p class="text-center mt-5">
                        <a href="#">By clicking Register, I agree to your terms</a>
                    </p>
                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
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