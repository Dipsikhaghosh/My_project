<?php
include("../model/routineadd.class.php");

  $ob = new SaveData;
  $result = $ob->register();
  echo "<br>";
  var_dump($result);
  if ($result==1) {
  ?>
  <script type="text/javascript">
    alert("routine added successfully..!!");
    window.location.href = "../logout.php";
  </script>

  <?php
}
?>