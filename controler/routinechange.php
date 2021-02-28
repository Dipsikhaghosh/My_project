<?php
    include("model/database.class.php");
    $srv = new database();    
    $query = "select * from droutine";
    $doctor = $srv->select($query);
    $q2 = "SHOW COLUMNS from droutine";
    $heading = $srv->select($q2);
?> 
<div class="container">
    <h2 align='center'>Student System</h2>
    <form method="POST" action="model/routinechange.php">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Days</th>
                <th>06am to 08am</th>
                <th>08am to 10am</th>
                <th>10am to 12pm</th>
                <th>12pm to 02pm</th>
                <th>02pm to 04pm</th>
                <th>04pm to 06pm</th>
                <th>06pm to 08pm</th>
            </tr>
        </thead>

        <tbody align="center">
            <?php
                while($record = $srv->fetch($doctor)){
                    echo "<tr>";
                        foreach ($heading as $d => $v) {
                            $f= $v['Field'];

                            if ($f!="dr_id" && $f!="dr_date") {
                                $value=$record[$f];
                                $a=explode(",",$value);
                                $id=$_SESSION['doctor']['d_id'];
                                $flag=0;
                                foreach ($a as $key1 => $value1) {
                                    if ($value1==$id) {
                                        $flag++;
                                    }
                                }
                                if ($f=="dr_day") {
                                    $day=$value;
                                    echo "<td>".$value."</td>";
                                }else
                                {
                                    if ($flag!=0) {
                                        ?>
                                        <div align="center">
                                            <td><input type="checkbox" name="<?php echo $day."_".$f."_".$id;?>" value="<?php echo $day."_".$f."_".$id;?>" checked ><?php echo $day."_".$f."_".$id;?></td>
                                        </div>
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <div align="center">
                                            <td><input type="checkbox" name="<?php echo $day."_".$f."_".$id;?>" value="<?php echo $day."_".$f."_".$id;?>"><?php echo $day."_".$f."_".$id;?></td>
                                        </div>
                                        <?php
                                    }
                                }                                    
                            }    
                        }                        
                    echo "</tr>";
                }
            ?>
        </tbody>
        <tfoot>
            <tr align="center">
                <td colspan="8">
                    <input type="submit" name="change" value="apply changes" align="center">
                </td>
            </tr>
        </tfoot>    
    </table>
    </form>
</div>