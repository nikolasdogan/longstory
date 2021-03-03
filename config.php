<?php
session_start();
include("db.php");
include("checklogin.php");
include("fonk.php");
check_login();
$datetime = date('YYYY-MM-DD');
error_reporting(0);

$clock=date('H:i');

$query=mysqli_query($con,"select * from admin where mail='".$_SESSION['login']."'");
while($row=mysqli_fetch_array($query)) {$namesurname = $row['namesurname'];
										$agent = $row['agent'];
										$agenttitle = $row['title']; 
										$agentstatus = $row['status']; 
										$allowip = $row['allowip']; 
										$userimage = $row['userimage'];
									    $adminmail = $row['mail'];
									    $admitableid = $row['id'];
									    $birthday	= $row['birthday'];}
// ben kullancığım tablonun tüm değerlerini sayfa içerisinde adı soyadı id si türü bilgileri kod karmaşarı olmasın diye sayfa sayfa bölüyorum...
?>
