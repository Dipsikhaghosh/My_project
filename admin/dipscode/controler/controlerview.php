<?php
    include "database.class.php";
    $srv = new database();
    $query = "select * from doctor where d_id=".$_REQUEST['d_id'];
    $doctor = $srv->select($query);
    $record = $srv->fetch($doctor);
?>