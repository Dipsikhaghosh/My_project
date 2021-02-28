<?php
$conn = mysqli_connect("localhost","root","","hotel") or die(mysqli_error($conn)); 

//$myCustomArray = array();
$string = '';

foreach ($_POST as $key => $value) {
	if($key=="tab" or $key=="okay"){
		continue;
	} else {
		if($key=="password"){
			$value = md5($value);
		} 
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

//

if(!empty($_FILES['music']['name'])){
	$dir_1 = 'music';
	if(!file_exists($dir_1)){
		mkdir($dir_1);
	}
	$filename_1 = $_FILES['music']['name'];
	$filesize_1 = $_FILES['music']['size'];
	$filetype_1 = $_FILES['music']['type'];
	$file_tmp_copy_1 = $_FILES['music']['tmp_name'];
	$file_error_1 = $_FILES['music']['error'];
	$file_destination_path_1 = $dir_1.'/'.rand(000,999).'_'.$filename_1;

	move_uploaded_file($file_tmp_copy_1, $file_destination_path_1) or die($file_error_1);

	if($filesize_1 > 11000000) {
		echo "File size exceeds 10 MB limit";
		exit;
	}
}

if(!empty($_FILES['video']['name'])){
	$dir_2 = 'video';
	if(!file_exists($dir_2)){
		mkdir($dir_2);
	}
	$filename_2 = $_FILES['video']['name'];
	$filesize_2 = $_FILES['video']['size'];
	$filetype_2 = $_FILES['video']['type'];
	$file_tmp_copy_2 = $_FILES['video']['tmp_name'];
	$file_error_2 = $_FILES['video']['error'];
	$file_destination_path_2 = $dir_2.'/'.rand(000,999).'_'.$filename_2;

	move_uploaded_file($file_tmp_copy_2, $file_destination_path_2) or die($file_error_2);

	if($filesize_2 > 11000000) {
		echo "File size exceeds 10 MB limit";
		exit;
	}
} 

//

$string = substr($string,0,-1);
if(!empty($file_destination_path) OR !empty($file_destination_path_1) OR !empty($file_destination_path_2)) {
	$string .= ",'$file_destination_path','$file_destination_path_1','$file_destination_path_2'";
}

$tab = $_POST['tab'];
//var_dump($myCustomArray);
//exit;
// [0] -> "name"=>"Joydeep Banerjee";

$string = "INSERT INTO $tab VALUES ('0', $string )";

$exec = mysqli_query($conn,$string) or die(mysqli_error($conn));


if($exec) {
	echo 1;
}

?>