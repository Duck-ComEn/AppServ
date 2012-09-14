<?php
	if(!isset($_SESSION)){
	@session_start(); 
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
		switch($_SESSION['MM_UserRight']){
		case "en" : 
	?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Benchmark Garde - Empolyee::Home</title>
	<link rel="shortcut icon" href="BEI_icon.ico">
	<link href="style.css" rel="stylesheet" type="text/css" />
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
			    <a href="main-en.php" class="left_menu">Home</a><br />
				<a href="main-en-warn.php" class="left_menu">การแจ้งเตือน</a><br />
				<a href="main-en-result.php" class="left_menu">ผลคะแนนสอบ</a><br />
				<a href="logout.php" class="left_menu">ออกจากระบบ</a><br /></div>
			</div>
		</div>
		
	<div class="midarea">
		<div class="head">Welcome <?php print ucfirst($_SESSION['MM_FirstName']).' '.ucfirst($_SESSION['MM_LastName']) ;?></div>
		<div class="body_textarea">
			<div align="justify">หนักหลักพนักงาน<br>
			เนื้อหาหน้านี้สามารถแก้ไขได้โดย ผู้ดูแลระบบโดยจะสามารถแสดงข้อความให้หนักงานเห็นเท่านั้น</div>
		</div>
	</div>
	</div>
	
	<div id="fotter">
		<div class="fotter_links">
			<div align="center"><a href="#" class="fotterlink">Home</a>  |  <a href="#" class="fotterlink">About Us</a>  |  <a href="#" class="fotterlink">Companies Success</a>  |  <a href="#" class="fotterlink">Client Testimonials</a>  |  <a href="#" class="fotterlink">Methods of Development</a>  |  <a href="#" class="fotterlink">Newsletter</a>  |  <a href="#" class="fotterlink">Subscribe Info</a>  |  <a href="#" class="fotterlink">Oppotunities</a>  |  <a href="#" class="fotterlink">Current Events</a>  |  <a href="#" class="fotterlink">Contact Us</a></div>
		</div>
		<div class="fotter_copyrights">
			<div align="center">&copy; Benchmark Electronic PCL.(Thailand)</div>
		</div>
	</div>	
	
</body>
</html>
<?php
	break ;
	default : echo"<center><h2>หน้านี้อนุญาติให้พนักงานข้าใช้เท่านั้น</h2></center><bt><br>";
	echo"<center><h4>ระบบจะพาท่านกลับสู่หน้าหลัก ภายใน 3 วินาที</h4></center>";
	echo "<meta http-equiv='refresh' content=3;URL=index.php>";
	break ; }
?>