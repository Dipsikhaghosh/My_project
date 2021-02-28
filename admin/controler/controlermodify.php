<?php
    include "../model/database.class.php";
    if(isset($_REQUEST['submit']) and $_REQUEST['submit']=="Save"){
            $srv = new database();
            array_pop($_POST);
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";
            $sets ="";
            foreach($_POST as $k=>$v){
                if($k=="d_id"){
                    $id=$v;
                    continue;
                }
                echo "<br><br>$k---";
                var_dump($k);
                echo "<br> v---";
                var_dump($v);
                $sets = $sets."d_".$k."='".$v."',";
            }
            $sets =  rtrim($sets,",");
            $srv->update("doctor",$sets,"d_id=".$id); 

            header("location:../view.php");
    }
?>