<?php
    $srv = new database();
    if(isset($_REQUEST['delete'])){
        $query = "delete from user where u_id=".$_REQUEST['delete'];
        $srv->delete($query);
        header("location:view_user.php");
    }
?>