<?php
class Connect{
	protected $con;
	function __construct(){
		session_start();
		$host = 'localhost';
		$dbname = 'doc';
		$username = 'root';
		$password = '';
		try{
			$this->con = new mysqli($host,$username,$password,$dbname);
			return $this->con;
		}
		catch(SQLException $exp){
			return $exp->getMessage();
		}
	}
}
class SaveData extends Connect{
	function register(){
		$string = '';
		foreach ($_POST as $key => $value) {
			if($key!="ok"){
				$day=substr($key, 0,3);
				$check = "SELECT $value FROM droutine WHERE dr_day = '$day'";
				$result = $this->con->query($check);
				$numrows  = $result->num_rows;	
				$row = $result->fetch_assoc();
				$v=$row[$value];
				$id=$_SESSION['doctor']['d_id'];
				$v.=",".$id;
				$change = "UPDATE `droutine` SET `$value` = '$v' WHERE `droutine`.`dr_day` = '$day'";
				$resultc = $this->con->query($change);
				// echo "key-",$key,"  value-",$value,"<br>";
				// echo $day,"<br>";
				// echo "<br>check<br>";
				// var_dump($check);
				// echo "<br>result<br>";
				// var_dump($result);
				// echo "<br>numrow<br>";
				// var_dump($numrows);
				// echo "<br>row<br>";
				// var_dump($row);
				// echo "<br>",$v;
				// echo "<br>--------------------------------------<br>";			
				// echo "<br>change<br>";
				// var_dump($change);
				// echo "<br>resultc<br>";
				// var_dump($resultc);
				// echo "<br>resultc<br>";
				// echo "<br>--------------------------------------<br>";
				// var_dump(mysqli_error($this->con));
				// echo "<br>--------------------------------------<br>";
				// //echo "<br><br><br>";
				// var_dump($_SESSION['doctor']);
				// echo "<br><br><br>";
				//UPDATE `droutine` SET `dr_day` = 'monday\r\nknkl' WHERE `droutine`.`dr_id` = 1
			}
		// if ($resultc==0) {
		// 	return 1;
		// }
		// else
		// {

	
		}
				return $resultc;		
	}
}
?>