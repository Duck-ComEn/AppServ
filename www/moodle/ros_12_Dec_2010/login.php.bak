<?php require_once('Connections/ros.php'); 
session_start();
if (isset($_POST['login'])) { // กรณีที่คลิกปุ่ม "เข้าสู่ระบบ" จะตรวจสอบชื่อผู้ใช้ และรหัสผ่าน

if ($_POST['level']!="en"){
	// mysql_select_db($database_ros, $ros);
	$queryLogin = "SELECT username, user_right,firstname,lastname FROM ros_user_admin WHERE username='".$_POST['name']."' AND password = '".$_POST['password']."' "; 
	//$rcsLogin = mysql_query($queryLogin, $ros) or die(mysql_error());
	$rcsLogin = mysql_query($queryLogin);
	$totalRows = mysql_num_rows($rcsLogin);
	$rowLogin = mysql_fetch_array($rcsLogin);
	if ($totalRows==1){
		$_SESSION['MM_FirstName'] = $rowLogin['firstname'];
		$_SESSION['MM_LastName'] = $rowLogin['lastname'];
		$_SESSION['MM_UserName'] = $rowLogin['username'];
		$_SESSION['MM_UserRight'] = $rowLogin['user_right'];   
			switch($_POST['level']){
			case "superadmin":echo "<meta http-equiv='refresh' content='0;URL=super_admin-home.php'>";
			break;
			case "admin":echo "<meta http-equiv='refresh' content='0;URL=main.php'>";
			break;
			case "super":echo "<meta http-equiv='refresh' content='0;URL=main-super.php'>";
			break;
			}
	
	}else{
		echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
  		echo "<script language='javascript'>alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง กรุณาลองใหม่');</script>";
  		echo "<meta http-equiv='refresh' content='0;URL=index.php'>";	
	}
}else{
	//mysql_select_db($database_ros, $ros);
	$queryLogin = "SELECT username,firstname,lastname,idnumber,email,institution,department,city FROM mdl_user WHERE username='".$_POST['name']."' AND password = '".md5($_POST['password'])."' "; 
	//$rcsLogin = mysql_query($queryLogin, $ros) or die(mysql_error());
	$rcsLogin = mysql_query($queryLogin);
	$totalRows = mysql_num_rows($rcsLogin);
	$rowLogin = mysql_fetch_array($rcsLogin);
	if($totalRows == 1){ // กรณีที่ชื่อผู้ใช้ และรหัสผ่านถูกต้อง จะกำหนดค่าตัวแปร Session เพื่อให้เรียกใช้ได้ทุกเพจ
		$_SESSION['MM_FirstName'] = $rowLogin['firstname'];
		$_SESSION['MM_LastName'] = $rowLogin['lastname'];
		$_SESSION['MM_UserName'] = $rowLogin['username'];
		$_SESSION['MM_Idnumber'] = $rowLogin['idnumber'];
		$_SESSION['MM_Email'] = $rowLogin['email'];
		$_SESSION['MM_Institution'] = $rowLogin['institution'];
		$_SESSION['MM_Department'] = $rowLogin['department'];
		$_SESSION['MM_City'] = $rowLogin['city'];
		$_SESSION['MM_UserRight'] = "en";    
		echo "<meta http-equiv='refresh' content='0;URL=main-en.php'>";
	}else{ // กรณีที่ข้อมูลไม่ถูกต้อง จะแจ้งให้ผู้ใช้ระบบทราบ
  		echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
  		echo "<script language='javascript'>alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง กรุณาลองใหม่');</script>";
  		echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
		}
}
	
}
?>