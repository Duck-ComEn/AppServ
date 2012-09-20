<?php require_once('Connections/ros.php'); 

$queryLogin = "SELECT username, user_right,firstname,lastname FROM ros_user_admin WHERE username='".$_POST['name']."' AND password = '".$_POST['password']."' "; 
$rcsLogin = mysql_query($queryLogin);
$totalRows = mysql_num_rows($rcsLogin);
$rowLogin = mysql_fetch_array($rcsLogin);
	if ($totalRows == 1){
		$_SESSION['MM_FirstName'] = $rowLogin['firstname'];
		$_SESSION['MM_LastName'] = $rowLogin['lastname'];
		$_SESSION['MM_UserName'] = $rowLogin['username'];
		$_SESSION['MM_UserRight'] = $rowLogin['user_right'];    
	echo "<meta http-equiv='refresh' content='0;URL=main2.php'>";
	}else{
	echo ("login ไม่ถูกต้อง");
	
	}
		
	
?>