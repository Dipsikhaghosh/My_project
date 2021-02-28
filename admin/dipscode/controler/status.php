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
      window.location.href = "../index.html";
    </script>
      <?php
  }else{?>
  // echo "Wrong";
    <script type="text/javascript">
         window.location.href = "../statusdoc.php";

    </script>
    <?php
	// header("location:statusdoc.php");
  }
?>