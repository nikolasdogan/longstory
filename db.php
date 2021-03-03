
<?php
//error_reporting(0);
// Veritabani Baglanti
$host 	= ''; //host
$user 	= ''; //kullanici adi
$pass 	= ''; //sifre
$db		= ''; //veritabani ismi
$con = mysqli_connect($host, $user, $pass, $db) or die (mysqli_Error()); //baglanti
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();

mysqli_query($con,"SET CHARACTER SET 'utf8'");
mysqli_query($con,"SET NAMES 'utf8'");
mysqli_set_charset("utf8", $con);
}

?>
