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
		switch($_SESSION['MM_UserRight']){
		case "admin" : 
	?>
	<title>Benchmark Garde - Administrator::แก้ไขสมาชิก</title>
	<link rel="shortcut icon" href="BEI_icon.ico" type="image/x-icon" />
	<link rel="icon" href="BEI_icon.ico" type="image/x-icon" />
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link href="styles_table.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="topheader">
	<div class="logo"></div>
	</div>
	<div id="search_strip"></div>
	
	<div id="body_area">
		<div class="left">
			<div class="left_menutop"></div>
			<div class="left_menu_area">
			<div align="right">
			    <a href="main.php" class="left_menu">Home</a><br />
				<a href="main-warn.php" class="left_menu">แจ้งเตือนทั้งหมด</a><br />
				<a href="main-warn-7day.php" class="left_menu">แจ้งเตือน 7 วัน</a><br />
				<a href="main-warn-14day.php" class="left_menu">แจ้งเตือน 14 วัน</a><br />
				<a href="main-edit.php" class="left_menu">แก้ไขสมาชิก</a><br />
				<a href="main-add-s.php" class="left_menu">เพิ่ม Supervisor</a><br />
				<a href="main-add-a.php" class="left_menu">เพิ่ม Admin</a><br />
				<a href="main-result.php" class="left_menu">ผลสอบพนักงาน</a><br />
				<a href="logout.php" class="left_menu">ออกจากระบบ</a><br /></div>
			</div>
		</div>
		
		<div class="midarea">
			<div class="head">Welcome <?php echo $_SESSION['MM_FirstName'].' '.$_SESSION['MM_LastName'] ;?></div>
			<div class="body_textarea">
				<div align="justify" style="font-size: 16pt">แก้ไขสมาชิก</div><br>
				<div id="mytable">
				<table id="mytable" cellspacing="0">
					<?php 
						$result=mysql_query("SELECT
							ros_user_admin.username,
							ros_user_admin.firstname,
							ros_user_admin.lastname,
							ros_user_admin.user_right
						FROM
							ros_user_admin");
						@$num_rows=mysql_num_rows($result);
						if(!$num_rows){
							echo "<meta http-equiv='refresh' content=0;URL=main-edit.php>";
						}
						echo"<caption align=\"bottom\">result $num_rows E/N </caption>";
						echo"<tr><th>UserName</th><th>Name</th><th align=center>Right</th><th align='center'>Delete</th></tr>";
						while($data = mysql_fetch_array($result)){
							echo"<tr>";
							echo"<td><a href='update-user.php?user={$data['username']}'>{$data['username']}</a></td><td>".$data['firstname']."  ".$data['lastname']."</td><td>{$data['user_right']}</td><td align=center><a href='deluser.php?user={$data['username']}'>Delete</a> </td>";
							echo"</tr>";
						}
						echo"</table>";	
					?>
				</table>
				</div>
			</div>
		</div>
	</div>
	<div id="fotter">
		<div class="fotter_links">
			<div align="center"><a href="#" class="fotterlink">Home</a>  |  <a href="#" class="fotterlink">About Us</a>  |  <a href="#" class="fotterlink">Companies Success</a>  |  <a href="#" class="fotterlink">Client Testimonials</a>  |  <a href="#" class="fotterlink">Methods of Development</a>  |  <a href="#" class="fotterlink">Newsletter</a>  |  <a href="#" class="fotterlink">Subscribe Info</a>  |  <a href="#" class="fotterlink">Oppotunities</a>  |  <a href="#" class="fotterlink">Current Events</a>  |  <a href="#" class="fotterlink">Contact Us</a></div>
		</div>
		<div class="fotter_copyrights">
			<div align="center">&copy; Benchmark Electronics (Thailand) Public Co., Ltd.</div>
		</div>
	</div>	
	
</html>
<?php
	break ;
	default : echo"<center><h2>หน้านี้อนุญาติให้ผู้ดูแลระบบเข้าใช้เท่านั้น</h2></center><bt><br>";
	echo"<center><h4>ระบบจะพาท่านกลับสู่หน้าหลัก ภายใน 3 วินาที</h4></center>";
	echo "<meta http-equiv='refresh' content=3;URL=index.php>";
	break ; }
?>