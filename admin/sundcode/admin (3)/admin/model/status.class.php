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

class Update extends Connect{
	function status($id){
		try{
			$res = $this->con->query("UPDATE doctor SET d_status='1' WHERE d_id='$id' ");
			return 1;
		
		}catch(SQLException $e){
			return 0;
		}
	}
}
?>