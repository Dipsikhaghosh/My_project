<?php
	include("../model/database.class.php");
	$srv = new database();
    if (isset($_POST['submit'])) {
    	# code...
    	$set="b_feedback='".$_POST['feedback']."'";
    	$loc="b_id='".$_POST['id']."'";
    	$update=$srv->update("booking",$set,$loc);
		if (is_null($update)) {
?>
		<script type="text/javascript">
			alert("feedback successfully received..!!");
    		window.location.href = "../viewbookinguser.php";
		</script>
<?php			# code...
		}
	}

?>
