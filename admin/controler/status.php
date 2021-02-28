<?php
include("../model/status.class.php");
	
  $st= new Update;
  $result=$st->status($_GET['id']);
 
  // $src = $_POST['src'];
  // $dest = $_POST['dest'];

	// var_dump($result1);
// exit; 
  if($result!=0){
    ?>
    <script type="text/javascript">
      alert("Successful");
      window.location.href = "../statusdoc.php";
    </script>
      <?php
  }else{?>
    <script type="text/javascript">
            alert("Something went to wrong");
         window.location.href = "../statusdoc.php";

    </script>
    <?php
	// header("location:statusdoc.php");
  }
?>