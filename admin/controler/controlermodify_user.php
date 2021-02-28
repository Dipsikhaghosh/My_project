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
                if($k=="u_id"){
                    $id=$v;
                    continue;
                }
                echo "<br><br>$k---";
                var_dump($k);
                echo "<br> v---";
                var_dump($v);
                $sets = $sets."u_".$k."='".$v."',";
            }
            $sets =  rtrim($sets,",");
            $srv->update("user",$sets,"u_id=".$id); 

            header("location:../view_user.php");
    }
?>