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
			$filename = str_replace("'", "",$_FILES['image']['name']);
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
		//profile pic
		if(!empty($_FILES['pic']['name'])){
			$dirp = 'pic';
			if(!file_exists($dirp)){
				mkdir($dirp);
			}
			$filenamep = str_replace("'", "",$_FILES['pic']['name']);
			$filesizep = $_FILES['pic']['size'];
			$filetypep = $_FILES['pic']['type'];
			$file_tmp_copyp = $_FILES['pic']['tmp_name'];
			$file_errorp = $_FILES['pic']['error'];
			$file_destination_pathp = $dir.'/'.rand(000,999).'_'.$filenamep;
			if($filesizep > 11000000) {
				echo "File size exceeds 10 MB limit";
				exit;
			}
			if($filetypep=="image/jpg" or $filetypep == "image/jpeg" or $filetypep == "image/png") {
				move_uploaded_file($file_tmp_copyp, $file_destination_pathp) or die($file_errorp);
			}
			else{
				echo "file must be image file only (i.e jpg,png type )";
				exit;
			}
		}
		else{
			$file_destination_pathp = '';
		}
		$string = substr($string,0,-1);
		//for fetching ip
		$ip= $_SERVER['REMOTE_ADDR'];
		// fetching date and time
		$d_t = date("Y-m-d");
		$d_d=date("h:i:sa");
		$d_all=$d_d.$d_t;
		$tab = $_POST['tab'];
		echo "<br>$tab";
		if($tab=="user")
		{
			if(!empty($file_destination_path)) {
				$string .=",'$file_destination_path'";
			}
			else{
				$string .=",''";	
			}
			$string .=",'0055','$d_t','$d_d','$ip'";	
		}
		if($tab=="doctor") {
			$string .=",'$d_d','$d_t','$ip'";
			if(!empty($file_destinationpath3) || !empty($file_destination_path2) || !empty($file_destination_path3)) {
					$string .=",'$file_destination_path1','$file_destination_path2','$file_destination_path3'";
			}
			else{
				$string .=",'','',''";
			}
			if(!empty($file_destination_pathp)){
				$string .=",'$file_destination_pathp'";
			}
			else{
				$string .=",''";
			}
			$string .=",'0'";
		}
		if($tab=="booking")
		{
			$string .=",'empty','empty','$d_all','$ip'";	
		}
		$string = "INSERT INTO $tab VALUES ('0', $string )";
		var_dump($string);
		
			$result = $this->con->query($string);
			if($result) {
				return 1;
				 $onj= new mail_otp;
  				 $otp = $onj->ver_otp();
			} 
			else {
				return mysqli_error($this->con);
			}

	}
}

class mail_otp {


	function ver_otp(){
		if($_SERVER['REQUEST_METHOD']==="POST")
{

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_SESSION['pass'];
require_once('phpmailer/class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

// $body             = file_get_contents('contents.html');
// $body             = eregi_replace("[\]",'',$body);
$body = "Wellcome to Bigcarry Hello $name your Password is <h4>$pass</h4>";
$mail->IsSMTP(); // telling the class to use SMTPDebug
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
		unset($_SESSION['pass']);
		alert("Password sent on your email..!");
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
?>