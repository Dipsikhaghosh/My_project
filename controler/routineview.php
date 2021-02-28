<?php
    include("model/database.class.php");
    $srv = new database();    
    $query = "select * from droutine";
    $doctor = $srv->select($query);
    $q2 = "SHOW COLUMNS from droutine";
    $heading = $srv->select($q2);
?> 
<div class="container">
    <h2 align='center'>DOCTOR'S ROUTINE</h2>
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

        <tbody>
            <?php
                while($record = $srv->fetch($doctor)){
                    echo "<tr>";
                        foreach ($heading as $d => $v) {
                            $f= $v['Field'];

                            if ($f!="dr_id" && $f!="dr_date") {
                                $value=$record[$f];
                                $a=explode(",",$value);
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
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        </div>
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <div align="center">
                                            <td><i class="fa fa-times" aria-hidden="true"></i></td>
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
    </table>

</div>