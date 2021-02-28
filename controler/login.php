<?php
include("../model/login.class.php");
	
  $login = new Login;
  $result1 = $login->login1();
  $src = $_POST['src'];
  $dest = $_POST['dest'];
echo "<br>ds<br>";
	var_dump($_SESSION['doctor']['']);
  //exit;
  if($result1!=0){
?>
  <script type="text/javascript">
      alert("Loged in..!!");
      window.location.href = "<?php echo $dest; ?>";
  </script>
<?php
  }else{
?>
  <script type="text/javascript">
      alert("Loged in failled..!!");
      window.location.href = "<?php echo $src; ?>";

  </script>
<?php
  }
?>