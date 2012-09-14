<?php
	require_once('Connections/ros.php'); 
	if(!isset($_SESSION)){
	@session_start();
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php
	$i=0;
			$result=mysql_query("SELECT
									ros_mail.link,
									ros_mail.sup
								FROM
									ros_mail
								where ros_mail.link='mail-link-7.php?id=".$_GET['id']."'");
			$mail=mysql_fetch_array($result);	
			list($firstname, $lastname) = split(' ', $mail['sup']);
			if(substr($mail[link],19)==$_GET['id']){
			$_SESSION['MM_UserRight']='super';
			$_SESSION['MM_FirstName']=$firstname;
			$_SESSION['MM_LastName']=$lastname;
		//	echo $firstname.' '.$lastname;
			echo "<meta http-equiv='refresh' content=0;URL=super-exl-7.php?sup=>";
			}
			

	//echo "<meta http-equiv='refresh' content='0;URL=main-super-warn-7day.php'>";
	
?>