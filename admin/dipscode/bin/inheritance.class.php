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
			$value = str_replace("'", "", $value);
			if($key=="tab" or $key=="ok"){
				continue;
			}
			else{
				if($key=="password"){
					$value = md5($value);
				} 
				$string .= "'$value',";
			}
		}
		//doc's image
		if(!empty($_FILES['image1']['name'])){
			$dir = 'images1';
			if(!file_exists($dir)){
				mkdir($dir);
			}
			$filename1 = str_replace("'", "",$_FILES['image1']['name']);
			$filesize1 = $_FILES['image1']['size'];
			$filetype1 = $_FILES['image1']['type'];
			$file_tmp_copy1 = $_FILES['image1']['tmp_name'];
			$file_error1 = $_FILES['image1']['error'];
			$file_destination_path1 = $dir.'/'.rand(000,999).'_'.$filename1;
			if($filesize1 > 11000000) {
				echo "File size exceeds 10 MB limit";
				exit;
			}
			if($filetype1=="image/jpg" or $filetype1 == "image/jpeg" or $filetype1 == "image/png") {
				move_uploaded_file($file_tmp_copy1, $file_destination_path1) or die($file_error1);
			}
			else{
				echo "file must be image file only (i.e jpg,png type )";
				exit;
			}
		}
		else{
			$file_destination_path1 = '';
		}
		//doc's image2
		if(!empty($_FILES['image2']['name'])){
			$dir = 'images2';
			if(!file_exists($dir)){
				mkdir($dir);
			}
			$filename2 = str_replace("'", "",$_FILES['image2']['name']);;
			$filesize2 = $_FILES['image2']['size'];
			$filetype2 = $_FILES['image2']['type'];
			$file_tmp_copy2 = $_FILES['image2']['tmp_name'];
			$file_error2 = $_FILES['image2']['error'];
			$file_destination_path2 = $dir.'/'.rand(000,999).'_'.$filename2;
			if($filesize2 > 11000000) {
				echo "File size exceeds 10 MB limit";
				exit;
			}
			if($filetype2=="image/jpg" or $filetype2 == "image/jpeg" or $filetype2 == "image/png") {
				move_uploaded_file($file_tmp_copy2, $file_destination_path2) or die($file_error2);
			}
			else{
				echo "file must be image file only (i.e jpg,png type )";
				exit;
			}
		}
		else{
			$file_destination_path2 = '';
		}
		//doc's image 3
		if(!empty($_FILES['image3']['name'])){
			$dir = 'images3';
			if(!file_exists($dir)){
				mkdir($dir);
			}
			$filename3 = str_replace("'", "",$_FILES['image1']['name']);;
			$filesize3 = $_FILES['image3']['size'];
			$filetype3 = $_FILES['image3']['type'];
			$file_tmp_copy3 = $_FILES['image3']['tmp_name'];
			$file_error3 = $_FILES['image3']['error'];
			$file_destination_path3 = $dir.'/'.rand(000,999).'_'.$filename3;
			if($filesize3 > 11000000) {
				echo "File size exceeds 10 MB limit";
				exit;
			}
			if($filetype3=="image/jpg" or $filetype3 == "image/jpeg" or $filetype3 == "image/png") {
				move_uploaded_file($file_tmp_copy3, $file_destination_path3) or die($file_error3);
			}
			else{
				echo "file must be image file only (i.e jpg,png type )";
				exit;
			}
		}
		else{
			$file_destination_path3 = '';
		}
		//all image(user prof)
		if(!empty($_FILES['image']['name'])){
			$dir = 'images';
			if(!file_exists($dir)){
				mkdir($dir);
			}
			$filename = $_FILES['image']['name'];
			$filesize = $_FILES['image']['size'];
			$filetype = $_FILES['image']['type'];
			$file_tmp_copy = $_FILES['image']['tmp_name'];
			$file_error = $_FILES['image']['error'];
			$file_destination_path = $dir.'/'.rand(000,999).'_'.$filename;
			if($filesize > 11000000) {
				echo "File size exceeds 10 MB limit";
				exit;
			}
			if($filetype=="image/jpg" or $filetype == "image/jpeg" or $filetype == "image/png") {
				move_uploaded_file($file_tmp_copy, $file_destination_path) or die($file_error);
			}
			else{
				echo "file must be image file only (i.e jpg,png type )";
				exit;
			}
		}
		else{
			$file_destination_path = '';
		}
		$string = substr($string,0,-1);
		//for fetching ip
		$ip= $_SERVER['REMOTE_ADDR'];
		// fetching date and time
		$d_t = date("Y-m-d");
		$d_d=date("h:i:sa");
		if(!empty($file_destination_path)) {
			$string .=",'$file_destination_path','0055','$d_t','$d_d','$ip'";
		}
		else{
			if(!empty($file_destinationpath3) || !empty($file_destination_path2) || !empty($file_destination_path3)) {
					$string .=",'$d_d','$d_t','$ip','$file_destination_path1','$file_destination_path2','$file_destination_path3'";
			}
		}
		$tab = $_POST['tab'];
		$string = "INSERT INTO $tab VALUES ('0', $string )";
		var_dump($string);
		
			$result = $this->con->query($string);
			
			if($result) {
				return 1;
			} else {
				return mysqli_error($this->con);
			}
		
	}
}
class Views extends Connect {
	function DistinctView($attr,$tab){
		$connect = $this->dbcon();
		// $res = $connect->query("SELECT * FROM doctor");
		try{
		$res = $connect->query("SELECT DISTINCT $attr FROM $tab");

		if($res->num_rows > 0) {
			return $res;
		}
	}catch(SQLException $e){
		return $e->getMessage();
	}


	}
}
?>