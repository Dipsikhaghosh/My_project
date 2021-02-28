<?php
class connection{
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
?>