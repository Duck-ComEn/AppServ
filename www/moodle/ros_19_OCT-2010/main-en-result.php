﻿<?php
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
	<title>Benchmark Garde :: Empolyee ผมคะแนนสอบ</title>
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
			    <a href="main-en.php" class="left_menu">Home</a><br />
				<a href="main-en-warn.php" class="left_menu">การแจ้งเตือน</a><br />
				<a href="main-en-result.php" class="left_menu">ผลคะแนนสอบ</a><br />
				<a href="logout.php" class="left_menu">ออกจากระบบ</a><br /></div>
			</div>
		</div>
		
	<div class="midarea">
		<div class="head">Welcome <?php print ucfirst($_SESSION['MM_FirstName']).' '.ucfirst($_SESSION['MM_LastName']) ;?></div>
		<div class="body_textarea">
			<div align="justify" style="font-size: 16pt">รายงานผมการสอบ<br>
			<a href="en-pdf-result.php"><img src="images/PDF_Logo.png" width="64" height="64" border="0" align="right"></a></div>
			</div>
			<div class="body_textarea">
			<div id="mytable">
			<table id="mytable" cellspacing="0">
				<tbody>
				<tr>
					<th width="88"><div align="left"><strong>คุณชื่อ</strong></div></td>
					<td width="208"><?php echo $_SESSION['MM_FirstName'];?></td>
					<th width="84"><div align="left"><strong>นามสกุล</strong></div></td>
					<td width="275"><?php echo $_SESSION['MM_LastName'] ;?></td>
				</tr>
				<tr>
					<th><div align="left"><strong>E/N</strong></div></td>
					<td><?php echo $_SESSION['MM_Idnumber'];?></td>
					<th><div align="left"><strong>แผนก</strong></div></td>
					<td><?php echo $_SESSION['MM_Department'];?></td>
				</tr>
				<tr>
					<th><div align="left"><strong>หัวหน้างาน</strong></div></td>
					<td colspan="3"><?php echo $_SESSION['MM_Institution'];?></td>
				</tr>
				<tr>
					<th><div align="left"><strong>โรงงาน</strong></div></td>
					<td colspan="3"><?php echo $_SESSION['MM_City'];?></td>
				</tr>
				<tr>
					<th><strong>E-mail</strong></td>
					<td colspan="3"><?php echo $_SESSION['MM_Email'];?></td>
				</tr>
				</tbody>
			</table>
			</div>
			<br>
			<div id="mytable">
			<table id="mytable" cellspacing="0">
				<?php 
					require_once('Connections/ros.php');
					$result=mysql_query("SELECT
										mdl_course.fullname,
										mdl_quiz_attempts.attempt,
										mdl_quiz_attempts.sumgrades,
										mdl_quiz_attempts.timefinish,
										mdl_quiz.grade
					FROM
						mdl_quiz_attempts
						INNER JOIN mdl_user ON mdl_quiz_attempts.userid = mdl_user.id
						INNER JOIN mdl_quiz ON mdl_quiz_attempts.quiz = mdl_quiz.id
						INNER JOIN mdl_course ON mdl_quiz.course = mdl_course.id
					WHERE
						mdl_user.username ='".$_SESSION['MM_UserName']."'");
					$p=1;
					@$num_rows=mysql_num_rows($result);
						if(!$num_rows){
							echo "<meta http-equiv='refresh' content=0;URL=main-en-result.php>";
						}
					echo"<tr><th><center>course</center></th><th width=40><center>1</center></th><th width=40><center>2</center></th><th width=40><center>3</center></th><th><center>Latest Time</center></th><th><center>Next Time</center></th></tr>";
					for($i=0;$i<$num_rows;$i++){
						echo"<tr>";
						$cf=mysql_result($result,$i,0);
						@$cs=mysql_result($result,$i+1,0);
						if($cf==$cs){
							$p++;
							continue;
						}
						echo"<td>$cf</td> ";
						if($p==3){
							@$a1=mysql_result($result,$e,1);
							if($a1==1){
								print "<td width=40 align=center>".round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 ."%</td>";
								$e++;
							}else if($a1==2){
								print "<td width=40 align=center>".round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 ."%</td>";
								$e++;
							}else if ($a1==3){
								print "<td width=40 align=center>".round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 ."%</td>";
								$e++;
							}else {print "<td>None</td>";
								$e++; 
							}
							//echo" col2 ";
							@$a1=mysql_result($result,$e,1);
							if($a1==1){
								print "<td width=40 align=center>".round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 ."%</td>";
								$e++;
							}else if($a1==2){
								print "<td width=40 align=center>".round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 ."%</td>";
								$e++;
							}else if ($a1==3){
								print "<td width=40 align=center>".round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 ."%</td>";
								$e++;
							}else {print "<td>None</td>";
								$e++; 
							}
							//echo" col3 ";
							@$a1=mysql_result($result,$e,1);
							if($a1==1){
								print "<td width=40 align=center>".round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 ."%</td>";
								$e++;
							}else if($a1==2){
								print "<td width=40 align=center>".round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 ."%</td>";
								$e++;
							}else if ($a1==3){
								print "<td width=40 align=center>".round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 ."%</td>";
								$e++;
							}else {print "<td>None></td>";
							}
							$fday = getdate(mysql_result($result,$e-1,3));
							if(strlen($fday['mon'])<=1){
													$fday['mon']='0'.$fday['mon'];
												}
												if(strlen($fday['mday'])<=1){
													$fday['mday']='0'.$fday['mday'];
												}
							$day= $fday['mon'].'/'.$fday['mday'].'/'.$fday['year'];
							print "<td align=center>".$day."</td>";
							$today = getdate(mysql_result($result,$e-1,3));
							$nextyear  = mktime(0, 0, 0, $today['mon'],$today['mday'],   $today['year']+1);
							$today = getdate($nextyear);
							if(strlen($today['mon'])<=1){
													$today['mon']='0'.$today['mon'];
												}
												if(strlen($today['mday'])<=1){
													$today['mday']='0'.$today['mday'];
												}
							echo "<td align=center>".$today['mon'].'/'.$today['mday'].'/'.$today['year']."</td>";
						}else if($p==2){
							@$a1=mysql_result($result,$e,1);
							if($a1==1){
								print "<td width=40 align=center>".round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 ."%</td>";
								$e++;
							}else if($a1==2){
								print "<td width=40 align=center>".round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 ."%</td>";
								$e++;
							}else if ($a1==3){
								print "<td width=40 align=center>".round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 ."%</td>";
								$e++;
							}else {print "<td>None</td>";
								$e++; 
							}
							//echo" col3 ";
							@$a1=mysql_result($result,$e,1);
							if($a1==1){
								print "<td width=40 align=center>".round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 ."%</td>";
								$e++;
							}else if($a1==2){
								print "<td width=40 align=center>".round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 ."%</td>";
								$e++;
							}else if ($a1==3){
								print "<td width=40 align=center>".round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 ."%</td>";
								$e++;
							}else {print "<td>None</td> ";
							}echo"<td align='center'>-</td>";
							$fday = getdate(mysql_result($result,$e-1,3));
							if(strlen($fday['mon'])<=1){
													$fday['mon']='0'.$fday['mon'];
												}
												if(strlen($fday['mday'])<=1){
													$fday['mday']='0'.$fday['mday'];
												}
							$day= $fday['mon'].'/'.$fday['mday'].'/'.$fday['year'];
							print "<td align=center>".$day."</td>";
							$today = getdate(mysql_result($result,$e-1,3));
							$nextyear  = mktime(0, 0, 0, $today['mon'],$today['mday'],   $today['year']+1);
							$today = getdate($nextyear);
							if(strlen($today['mon'])<=1){
													$today['mon']='0'.$today['mon'];
												}
												if(strlen($today['mday'])<=1){
													$today['mday']='0'.$today['mday'];
												}
							echo "<td align=center>".$today['mon'].'/'.$today['mday'].'/'.$today['year']."</td>";
						}else if($p==1){
							@$a1=mysql_result($result,$e,1);
							if($a1==1){
								print "<td width=40 align=center>".round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 ."%</td>";
								$e++;
							}else if($a1==2){
								print "<td width=40 align=center>".round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 ."%</td>";
								$e++;
							}else if ($a1==3){
								print "<td width=40 align=center>".round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 ."%</td>";
								$e++;
							}else {print "<td>None</td>";
								//$e++; 
							}echo "<td align='center'>-</td><td align='center'>-</td> ";
							$fday = getdate(mysql_result($result,$e-1,3));
							if(strlen($fday['mon'])<=1){
													$fday['mon']='0'.$fday['mon'];
												}
												if(strlen($fday['mday'])<=1){
													$fday['mday']='0'.$fday['mday'];
												}
							$day= $fday['mon'].'/'.$fday['mday'].'/'.$fday['year'];
							print "<td align=center>".$day."</td>";
							$today = getdate(mysql_result($result,$e-1,3));
							$nextyear  = mktime(0, 0, 0, $today['mon'],$today['mday'],   $today['year']+1);
							$today = getdate($nextyear);
							if(strlen($today['mon'])<=1){
													$today['mon']='0'.$today['mon'];
												}
												if(strlen($today['mday'])<=1){
													$today['mday']='0'.$today['mday'];
												}
							echo "<td align=center>".$today['mon'].'/'.$today['mday'].'/'.$today['year']."</td>";
						}
						echo" </tr>";
						$p=1;
					}
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