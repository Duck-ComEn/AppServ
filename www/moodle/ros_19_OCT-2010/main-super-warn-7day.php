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
		case "super" : 
	?>
	<title>Benchmark Garde - Supervisor::แจ้งเตือน 7 วัน</title>
	<link rel="shortcut icon" href="BEI_icon.ico" type="image/x-icon" />
	<link rel="icon" href="BEI_icon.ico" type="image/x-icon" />
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link href="styles_table.css" rel="stylesheet" type="text/css" />
	<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
	<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
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
			    <a href="main-super.php" class="left_menu">Home</a><br />
				<a href="main-super-en.php" class="left_menu">พนักงานในสังกัด</a><br />
				<a href="main-super-warn-7day.php" class="left_menu">แจ้งเตือน 7 วัน</a><br />
				<a href="main-super-warn-14day.php" class="left_menu">แจ้งเตือน 14 วัน</a><br />
				<a href="main-super-en-result.php" class="left_menu">ผลสอบทั้งหมด</a><br />
				<a href="logout.php" class="left_menu">ออกจากระบบ</a><br /></div>
			</div>
		</div>
		
		<div class="midarea">
			<div class="head">Welcome <?php print ucfirst($_SESSION['MM_FirstName']).' '.ucfirst($_SESSION['MM_LastName']) ;?></div>
			<div class="body_textarea">
				<div align="justify">แจ้งเตือนรายชื่อพนักงานที่เหลืออีก 7 วันครบกำหนดการสอบ<br>
				<a href="super-pdf-7.php"><img src="images\PDF_Logo.png" align="right" border="0" width="64" height="64"></a><a href="super-exl-7.php"><img src="images\Excel2007Logo.png" align="right" border="0" width="60" height="64"></a></div>
			</div>
			<div class="body_textarea">		
				<div id="mytable">
				<table id="mytable" cellspacing="0">
				<?php
					function duration($begin,$end){
						$thisday=getdate();
						$remain=intval(strtotime($begin)-$thisday[0]);
						$wan=floor($remain/86400)+1;
						$l_wan=$remain%86400;
						$hour=floor($l_wan/3600);
						$l_hour=$l_wan%3600;
						$minute=floor($l_hour/60);
						$second=$l_hour%60;
						if($second<0){
							return "expire";
						}else return $wan."วัน";
					}
			/**		$result=mysql_query("SELECT
							mdl_user.idnumber,
							mdl_quiz_attempts.attempt,
							mdl_user.firstname,
							mdl_user.lastname,
							mdl_course.fullname,
							mdl_quiz_attempts.sumgrades,
							mdl_quiz_attempts.timefinish
						FROM
							mdl_quiz_attempts
							INNER JOIN mdl_user ON mdl_quiz_attempts.userid = mdl_user.id
							INNER JOIN mdl_quiz ON mdl_quiz_attempts.quiz = mdl_quiz.id
							INNER JOIN mdl_course ON mdl_quiz.course = mdl_course.id
						WHERE
							mdl_user.institution = '".$_SESSION['MM_FirstName'].' '.$_SESSION['MM_LastName']."' ORDER BY
							mdl_user.idnumber ASC,
							mdl_quiz_attempts.timemodified ASC");**/
							
							$result=mysql_query("SELECT
							mdl_user.idnumber,
							max(mdl_quiz_attempts.attempt),
							mdl_user.firstname,
							mdl_user.lastname,
							mdl_course.fullname,
							mdl_quiz_attempts.sumgrades,
							mdl_quiz_attempts.timefinish
						FROM
							mdl_quiz_attempts
							INNER JOIN mdl_user ON mdl_quiz_attempts.userid = mdl_user.id
							INNER JOIN mdl_quiz ON mdl_quiz_attempts.quiz = mdl_quiz.id
							INNER JOIN mdl_course ON mdl_quiz.course = mdl_course.id
						WHERE
							mdl_user.institution = '".$_SESSION['MM_FirstName'].' '.$_SESSION['MM_LastName']."' and
							mdl_course.visible = 1
						GROUP BY
							mdl_user.id,
							mdl_course.fullname
						ORDER BY
							mdl_quiz_attempts.timefinish ASC");
					$p=1;
					@$num_rows=mysql_num_rows($result);
					if(!$num_rows){
						echo "can not connect database";
					}
					$p=1;
					$t=0;
					for($i=0;$i<$num_rows;$i++){
						@$name2=mysql_result($result,$i+1,2)." ".mysql_result($result,$i+1,3);
						@$name=mysql_result($result,$i,2)." ".mysql_result($result,$i,3);
						$id=mysql_result($result,$i,0);
						$cf=mysql_result($result,$i,4);
						@$cs=mysql_result($result,$i+1,4);
						if($cf==$cs && $name==$name2){
							$p++;
							continue;
   						}
 						$a[$t][0]=$id;$a[$t][1]=$name;$a[$t][2]=$cf;
   						if($p==3){
							@$a1=mysql_result($result,$e,1);
							if($a1==1){
								$e++;
							}else if($a1==2){
								$e++;
							}else if ($a1==3){
								$e++;
							}else {
								$e++; 
							}
							//echo" col2 ";
							@$a1=mysql_result($result,$e,1);
							if($a1==1){
								$e++;
							}else if($a1==2){
								$e++;
							}else if ($a1==3){
								$e++;
							}else {
								$e++; 
							}
							//echo" col3 ";
							@$a1=mysql_result($result,$e,1);
							if($a1==1){
								$e++;
							}else if($a1==2){
								$e++;
							}else if ($a1==3){
								$e++;
							}else {
							}

							$today = getdate(mysql_result($result,$e-1,6));
							$nextyear  = mktime(0, 0, 0, $today['mon'],$today['mday'],   $today['year']+1);
							$today = getdate($nextyear);
								if(strlen($today['mon'])<=1){
									$today['mon']='0'.$today['mon'];
								}
								if(strlen($today['mday'])<=1){
									$today['mday']='0'.$today['mday'];
								}
							$a[$t][3]=$today['mon'].'/'.$today['mday'].'/'.$today['year'];
							$fday = getdate(mysql_result($result,$e-1,6));
							$day= $fday['mon'].'/'.$fday['mday'].'/'.$fday['year'];
							$a[$t][4]=duration($today['year'].'-'.$today['mon'].'-'.$today['mday'] ."00:00:01",date("Y-m-d H:i:s"));
						}else if($p==2){
							@$a1=mysql_result($result,$e,1);
							if($a1==1){
								$e++;
							}else if($a1==2){
								$e++;
							}else if ($a1==3){
								$e++;
							}else {
								$e++; 
							}
							//echo" col3 ";
							@$a1=mysql_result($result,$e,1);
							if($a1==1){
								$e++;
							}else if($a1==2){
								$e++;
							}else if ($a1==3){
								$e++;
							}else {
							}
							$today = getdate(mysql_result($result,$e-1,6));
							$nextyear  = mktime(0, 0, 0, $today['mon'],$today['mday'],   $today['year']+1);
							$today = getdate($nextyear);
								if(strlen($today['mon'])<=1){
									$today['mon']='0'.$today['mon'];
								}
								if(strlen($today['mday'])<=1){
									$today['mday']='0'.$today['mday'];
								}
							$a[$t][3]=$today['mon'].'/'.$today['mday'].'/'.$today['year'];
							$fday = getdate(mysql_result($result,$e-1,6));
							$day= $fday['mon'].'/'.$fday['mday'].'/'.$fday['year'];
							$a[$t][4]=duration($today['year'].'-'.$today['mon'].'-'.$today['mday'] ."00:00:01",date("Y-m-d H:i:s"));
						}else if($p==1){
							@$a1=mysql_result($result,$e,1);
							if($a1==1){
								$e++;
							}else if($a1==2){
								$e++;
							}else if ($a1==3){
								$e++;
							}else {
								//$e++; 
							}
							$today = getdate(mysql_result($result,$e-1,6));
							$nextyear  = mktime(0, 0, 0, $today['mon'],$today['mday'],   $today['year']+1);
							$today = getdate($nextyear);
								if(strlen($today['mon'])<=1){
									$today['mon']='0'.$today['mon'];
								}
								if(strlen($today['mday'])<=1){
									$today['mday']='0'.$today['mday'];
								}
							$a[$t][3]=$today['mon'].'/'.$today['mday'].'/'.$today['year'];
							$fday = getdate(mysql_result($result,$e-1,6));
							$day= $fday['mon'].'/'.$fday['mday'].'/'.$fday['year'];
							$a[$t][4]=duration($today['year'].'-'.$today['mon'].'-'.$today['mday'] ."00:00:01",date("Y-m-d H:i:s"));
						}
						$p=1;
						$t++;
					}
					$n=0;
					for($j=0;$j<$t;$j++){
						if($a[$j][4]<=7){
							$b[$n++]=$j;
						}
					}
					if($n<=0){
						echo"No result";
					}else{
					
						echo"<tr><th>NO.</th><th>E/N</th><th>Name</th><th>Course</th><th>Time</th><th>NextTime</th></tr>";
						//echo"<tr><th>E/N</th></tr>";
						for($i=0;$i<$n;$i++){
							echo"<tr><td align=center>".($i+1).".</td><td>{$a[$b[$i]][0]}</td><td>{$a[$b[$i]][1]}</td><td>{$a[$b[$i]][2]}</td><td>{$a[$b[$i]][3]}</td><td>{$a[$b[$i]][4]}</td></tr>";
						}
					}
					if($n==0){
					$n=1;
					}
					echo "<caption align=\"bottom\">result : ".($n)." </caption>";
					
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

	<script type="text/javascript">
		var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
	</script>
	
</body>	
</html>
<?php
	break ;
	default : echo"<center><h2>หน้านี้อนุญาติให้หัวหน้า่งานเข้าใช้เท่านั้น</h2></center><bt><br>";
	echo"<center><h4>ระบบจะพาท่านกลับสู่หน้าหลัก ภายใน 3 วินาที</h4></center>";
	echo "<meta http-equiv='refresh' content=3;URL=index.php>";
	break ; }
?>