
class mail_otp {


	function ver_otp(){
		if($_SERVER['REQUEST_METHOD']==="POST")
{

$name = $_POST['name'];
$email = $_POST['email'];
$pass = rand(0000,9999);
$_SESSION['pass']=$pass;
require_once('phpmailer/class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

// $body             = file_get_contents('contents.html');
// $body             = eregi_replace("[\]",'',$body);
$body = "Hello $name your OTP is $pass";
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.gmail.com"; // SMTP server
//$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "mnayan506@gmail.com";  // GMAIL username
$mail->Password   = "mustaque786";            // GMAIL password

$mail->SetFrom('mnayan506@gmail.com', 'First Last');
#cc
//$mail->AddReplyTo("$email","First Last");

$mail->Subject    = "Earnest TechLab";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = "$email";
$mail->AddAddress($address, "John Doe");

// $mail->AddAttachment("images/phpmailer.gif");      // attachment
// $mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	?>
	<script type="text/javascript">
		alert("otp sent!");
		//window.location.href="../model/verify_otp.php?p=$pass";
	</script>
	<?php
	 // $pass = md5($pass);
	 // header("location:../model/verify_otp.php?p=$pass");

  // echo "Message sent!";
}
}
	}
	
}
class Login extends Connect{
	function login1(){
		
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password = md5($password);
		$tab = $_POST['tab'];
		$check = "SELECT * FROM $tab WHERE email = '$email' AND password = '$password'";

		 $result = $this->con->query($check);
		 $numrows  = $result->num_rows;	
		 if ($numrows == 1) {
		 	if ($tab=="user") {
		 		$_SESSION['user'] = NULL;
				$row = $result->fetch_assoc();
				$_SESSION['user'] = $row;
				return $_SESSION['user'];	
		 	}
		 	if ($tab=="vendor") {
		 		$_SESSION['vendor'] = NULL;
				$row = $result->fetch_assoc();
				$_SESSION['vendor'] = $row;
				return $_SESSION['vendor'];	
		 	}
		 	if ($tab=="admin") {
		 		$_SESSION['admin'] = NULL;
				$row = $result->fetch_assoc();
				$_SESSION['admin'] = $row;
				return $_SESSION['admin'];	
		 	}
		 			
			
		}else{
			
			return 0;
			}
		 
		//var_dump($numrows);
		//exit;		
		


}

}

class VenReg extends Connect{
	function register(){

	// $onj= new mail_otp;
 	//$otp = $onj->ver_otp();
  																																																																																																																																			
		
		$string = '';

foreach ($_POST as $key => $value) {
	if($key=="tab" or $key=="ok"){
		continue;
	} else {
		if($key=="password"){
			$value = md5($value);
		} 
			$string .= "'$value',";
	}
}



$string = substr($string,0,-1);
//for fetching ip
$ip = $_SERVER['REMOTE_ADDR'];
$string .=",'$ip'";
// fetching date and time
$d_t = date("Y-m-d h:i:sa");
$string .=",'$d_t','0'";




//image 1
if(!empty($_FILES['image']['name'])){
	$dir = 'Ven_profile_pic';
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
} else {
	echo "file must be image file only (i.e jpg,png type )";
	exit;
}
} else {
	$file_destination_path = '';
}

if(!empty($file_destination_path)) {
	$string .= ",'$file_destination_path'";
}
//image 2
if(!empty($_FILES['image1']['name'])){
	$dir = 'ven_pan_images';
	if(!file_exists($dir)){
		mkdir($dir);
	}
	$filename1 = $_FILES['image1']['name'];
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
} else {
	echo "file must be image file only (i.e jpg,png type )";
	exit;
}
} else {
	$file_destination_path1 = '';
}

if(!empty($file_destination_path1)) {
	$string .= ",'$file_destination_path1'";
}

//image 3
if(!empty($_FILES['image2']['name'])){
	$dir = 'c_reg_certificate';
	if(!file_exists($dir)){
		mkdir($dir);
	}
	$filename2 = $_FILES['image2']['name'];
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
} else {
	echo "file must be image file only (i.e jpg,png type )";
	exit;
}
} else {
	$file_destination_path2 = '';
}

if(!empty($file_destination_path2)) {
	$string .= ",'$file_destination_path2'";
}

//var_dump($string);
//exit;
$tab = $_POST['tab'];
$string = "INSERT INTO $tab VALUES ('0', $string )";
try{
	// creating connection
// $connect = $this->dbcon();

$result = $this->con->query($string);
//$numrows  = $this->con->num_rows;
if($result) {
	return 1;
	
}

}catch(SQLException $e){
	return $e->getMessage();
}


	}
}


//view data
class db extends connect{

	 function select(){
         $check = "SELECT * FROM vendor";

		 $result = $this->con->query($check);
		 $numrows  = $result->num_rows;	

		 if ($numrows>0) {
		 	return $result;
		 }else {
		 	return 0;
		 }

        }
}

//vendor profile activated

class VenActivation extends connect{

		function activation(){
			$status = $_GET['status'];
			$id = $_GET['id'];
			$update = "UPDATE vendor SET status = '$status' WHERE id = '$id'";
			$result = $this->con->query($update);
			return $result;
		}
}


class addproduct extends connect{

	function add_pro(){
		$string = '';

foreach ($_POST as $key => $value) {
	if($key=="tab" or $key=="ok"){
		continue;
	} else { 
			$string .= "'$value',";
	}
}


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
} else {
	echo "file must be image file only (i.e jpg,png type )";
	exit;
}
} else {
	$file_destination_path = '';
}


$string = substr($string,0,-1);
// //for fetching ip
$ip = $_SERVER['REMOTE_ADDR'];
$string .=",'$ip'";
// // fetching date and time
// $d_t = date("Y-m-d h:i:sa");
// $string .=",'$d_t','0'";



if(!empty($file_destination_path)) {
	$string .= ",'$file_destination_path'";
}


$tab = $_POST['tab'];
$string = "INSERT INTO $tab VALUES ('0', $string )";

try{
	// creating connection
// $connect = $this->dbcon();
$result = $this->con->query($string);
	
if($result) {
	return 1;	
}

}catch(SQLException $e){
	return $e->getMessage();
}

	}

	function viewFeedbacks(){
		$res = 	$this->con->query("SELECT p.*,v.* FROM product p JOIN vendor v WHERE v.id = p.vendor_id");
		if($res->num_rows > 0 ) {
			return $res;
		} else {
			return 0;
		}
	}

	function random_code($limit)
{
    return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
}
}


?>