<?php
function menu_user_kontrol($agenttitle,$agentstatus,$requestip,$allowip,$adminmail){
if($_COOKIE['session_log'] == $adminmail){
	if($requestip == $allowip){
		if($agentstatus == 1){
			if ($agenttitle == "YONETICI"){include 'menu.php';
				}elseif($agenttitle == "AVUKAT"){
				}elseif($agenttitle == "BAYI"){
				}elseif($agenttitle == "EKSPER"){
				}elseif($agenttitle == "BILIRKISI"){
				}elseif($agenttitle == "TAKIP-ADLIYE"){
				}elseif($agenttitle == "ONMUHASEBE"){
				}elseif($agenttitle == "FINANS"){
				}elseif($agenttitle == "AGENT"){include 'menu.php';                         
				}elseif($agenttitle == ""){
					echo '<script type="text/javascript">alert("Yetkisiz Kullanıcı");</script>';
					$body = "Yetkisiz Kullanıcı Girişi Engellendi"."-ip->".$requestip;
					TelegramBildirim($body);
					echo '<script type="text/javascript">window.location = "logout.php"</script>';
				}
						}else{
								$body = "Pasif Kullanıcı Girişi Engellendi"." -ip->".$requestip;
								TelegramBildirim($body);
								echo '<script type="text/javascript">alert("Pasif Kullanıcı*** Log Kaydı Yöneticiye İletildi.");</script>';
								echo '<script type="text/javascript">window.location = "logout.php"</script>';
										}}else{
												$body = "Kayıtsız IP Denemesi Giriş Reddedildi."."-ip- >".$requestip;
												TelegramBildirim($body);	
												echo '<script type="text/javascript">alert("Kayıtsız IP Denemesi Giriş Reddedildi. Yönetici ile iletişime Geçiniz.");</script>';
												echo '<script type="text/javascript">window.location = "logout.php"</script>';
										}}else{												$body = "Geçersiz COOKIE Denemesi Giriş Reddedildi."."-ip- >".$requestip;
												TelegramBildirim($body);	
												echo '<script type="text/javascript">alert("Geçersiz COOKIE Denemesi Giriş Reddedildi. Yönetici ile iletişime Geçiniz.");</script>';
												echo '<script type="text/javascript">window.location = "logout.php"</script>';}}


?>
