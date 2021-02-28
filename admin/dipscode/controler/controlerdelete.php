<?php
    $srv = new database();
    if(isset($_REQUEST['delete'])){
        $query = "delete from doctor where d_id=".$_REQUEST['delete'];
        $srv->delete($query);
        header("location:view.php");
    }
?>