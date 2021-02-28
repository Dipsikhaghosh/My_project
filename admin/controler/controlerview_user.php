<?php
    include "../admin/model/database.class.php";
    $srv = new database();
    $query = "select * from user where u_id=".$_REQUEST['u_id'];
    $user = $srv->select($query);
    $record = $srv->fetch($user);
?>