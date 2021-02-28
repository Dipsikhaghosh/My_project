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
class Login extends Connect{
	function login1(){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password = md5($password);
		$tab = $_POST['tab'];
		if ($tab=="user") {
			$check = "SELECT * FROM $tab WHERE u_email = '$email' AND u_password = '$password'";
		}
		if ($tab=="doctor") {
			$check = "SELECT * FROM $tab WHERE d_email = '$email' AND d_password = '$password'";
		
		}
		if ($tab=="admin") {
			$check = "SELECT * FROM $tab WHERE a_email = '$email' AND a_password = '$password'";
		}
		var_dump($check);
		echo "<br><br>";
		$result = $this->con->query($check);
		var_dump($result);
		echo "<br><br>";
		$numrows  = $result->num_rows;	
		var_dump($numrows);
		echo "<br><br>";
		$row = $result->fetch_assoc();
		var_dump($row);
		echo "<br><br>$tab<br><br>";
		if ($numrows == 1) {
		 	if ($tab=="user") {
		 		$_SESSION['user'] = NULL;
				$_SESSION['user'] = $row;
				return $_SESSION['user'];	
		 	}
		 	if ($tab=="doctor") {
		 		$_SESSION['doctor'] = NULL;
				$_SESSION['doctor'] = $row;
				return $_SESSION['doctor'];	
		 	}
		 	if ($tab=="admin") {
		 		$_SESSION['admin'] = NULL;
				$_SESSION['admin'] = $row;
				return $_SESSION['admin'];	
		 	}		
		}
		else{
			return 0;
		}
		//var_dump($numrows);
		//exit;		
	}
}
?>