<?php
include("../model/inheritance.class.php");

  $ob = new SaveData;
  $result = $ob->register();
  echo "<br>";
  var_dump($result);
  if ($result==1) {
  ?>
  <script type="text/javascript">
    alert("registration successfully..!!");
    window.location.href = "../index.html";
  </script>

  <?php
}



?>