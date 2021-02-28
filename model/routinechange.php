<?php
include("database.class.php");	
	foreach ($_POST as $k1 => $value) {
		if($k1!="change" && $k1!="did"){
		$cday=substr($value, 0,3);
		$ctime=substr($value, 4,7);
		$cid=substr($value, 12,2);
		//echo "<br><br>";
		//var_dump($value);
		//echo "<br>-------sadas---------------------------------------<br>day",$cday,",time,",$ctime,"id---",$cid,"<br>";
			$srv = new database();    
    		$query = "select * from droutine";
    		$doctor = $srv->select($query);
    		foreach ($doctor as $k2 => $row) {
    			$x=$row["dr_day"];
    			//echo "<br>",$x,"---<br>";
    			foreach ($row as $k3 => $cell) {
    				echo "-------------------<br>-------k3-";
    				var_dump($k3);
    				echo "@@@@@@cell--------";
    				var_dump($cell);
    				echo "^^^^key--------";
    				var_dump($k2);
    				echo "@@@@@@row--------";
    				var_dump($row);
    				$st="";
    				if ($k3!="dr_id" && $k3!="dr_day" && $k3!="dr_date") {
    					$day=explode(",", $cell);
	    				foreach ($day as $k4 => $v4) {
	    					if($v4!=$cid){
	    						$st.=$v4.",";
	    					}
	    					//echo "[{",$v4,"}][{(",$cid,")}]";
	    				}
	    			}
	    			echo "<br>[",$cday,"]{",$ctime,"}(",$row["dr_day"],")(",$k3,"fv)";
	    				if($row["dr_day"]=$cday && $k3==$ctime){
	    					echo "!!!!!!!!",$x,$cell;
	    				}//echo "	row--",$k3,"	cell--",$cell,"--string",$st,"<br><br>";
	    			echo "<br><br>";
    			}    				
    		}
		}
	}
?>