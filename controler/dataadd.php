<?php
include("../model/dataadd.class.php");

  $ob = new SaveData;
  $result = $ob->register();
  echo "<br>";
  var_dump($result);
  if ($result==1 && $_POST['tab']=="user") {
  ?>
  <script type="text/javascript">
    alert("registration successfully..!!");
    window.location.href = "../logout.php";
    //mail/mail.php?name=<?php echo $_POST['name'] ?>&email=<?php echo $_POST['email'] ?>&phno=<?php echo $_POST['phno']?>";
  </script>  
  <?php
  }
  if ($result==1 && $_POST['tab']=="doctor") {
        $con = mysqli_connect('localhost','root','','doc') or die(mysqli_error($con));
        $e=$_POST['email'];
        $p=md5($_POST['password']);
        echo "$e,$p";
        $special = mysqli_query($con,"SELECT * FROM doctor WHERE d_email='$e' AND d_password='$p'");
        $row=mysqli_fetch_array($special);
        $_SESSION['doctor'] = NULL;
        $_SESSION['doctor'] = $row;
  ?>
  <script type="text/javascript">
    alert("registration successfully..!!");
    window.location.href = "../regroutine.php";
  </script>
  <?php
  }
  if ($result==1 && $_POST['tab']=='booking') {
  ?>
  <script type="text/javascript">
    alert("registration successfully..!!");
    window.location.href = "../user.php";
  </script>
  <?php
  }
?>
