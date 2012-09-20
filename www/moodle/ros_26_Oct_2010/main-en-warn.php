<?php
require_once('Connections/ros.php');
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
	<title>Benchmark Garde :: Empolyee การแจ้งเตือน</title>
	<link rel="shortcut icon" href="BEI_icon.ico">
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
			   <?php
			   //import menu from database
					$result=mysql_query("SELECT
											ros_menu.`name`,
											ros_menu.link
										FROM
											ros_menu
										WHERE
											ros_menu.`mode` = 'en'
										ORDER BY
											ros_menu.sort ASC");
						@$num_rows=mysql_num_rows($result);
						if(!$num_rows){
							echo "Can not connect Database";
						}
						while($data = mysql_fetch_array($result)){
						?>
						<a href="<?php echo $data['link'] ;?>" class="left_menu"><?php echo $data['name']; ?></a><br />
						<?php
						}
						?>
						</div>
			</div>
		</div>
		
	<div class="midarea">
		<div class="head">Welcome <?php echo $_SESSION['MM_FirstName'].' '.$_SESSION['MM_LastName'] ;?></div>
		<div class="body_textarea">
			<div align="justify" style="font-size: 16pt">แจ้งเตือนวิชาสอบหมดอายุ
		</div>
<br>
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
				
				$result=mysql_query("SELECT
					mdl_course.fullname,
					mdl_quiz_attempts.attempt,
					mdl_quiz_attempts.sumgrades,
					mdl_quiz_attempts.timefinish
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
							echo "<meta http-equiv='refresh' content=0;URL=main-en-warn.php>";
						}
				
			?>
			<div id="mytable">
			<table id="mytable" cellspacing="0">
			<!-- <caption>Table</caption> --><br>
				<tbody>
				<tr>
					<th scope="col" abbr="Course"><center>Course</center></th>
					<th scope="col" abbr="Time"><center>Time</center></th>
					<th scope="col" abbr="Remain Time"><center>Remain Time</center></th>
				</tr>
				<?php					
					for($i=0;$i<$num_rows;$i++){ ?>
						<tr>
							<?php
							$cf=mysql_result($result,$i,0);
							@$cs=mysql_result($result,$i+1,0);
						if($cf==$cs){
							$p++;
							continue;
						} ?>
						<td><?php echo $cf; ?></td>
						<?php
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
							$today = getdate(mysql_result($result,$e-1,3));
							$nextyear  = mktime(0, 0, 0, $today['mon'],$today['mday'],   $today['year']+1);
							$today = getdate($nextyear); 
							if(strlen($today['mon'])<=1){
													$today['mon']='0'.$today['mon'];
												}
												if(strlen($today['mday'])<=1){
													$today['mday']='0'.$today['mday'];
												}?>
							
							<td align=center><?php echo $today['mon'].'/'.$today['mday'].'/'.$today['year'] ?></td>
							<?php
							$day= $fday['mday'].'/'.$fday['mon'].'/'.$fday['year']; ?>
							<td align=center><?php echo duration($today['year'].'-'.$today['mon'].'-'.$today['mday'] ."00:00:01",date("Y-m-d H:i:s")); ?></td>
						<?php
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
							$today = getdate(mysql_result($result,$e-1,3));
							$nextyear  = mktime(0, 0, 0, $today['mon'],$today['mday'],   $today['year']+1);
							$today = getdate($nextyear); 
							if(strlen($today['mon'])<=1){
													$today['mon']='0'.$today['mon'];
												}
												if(strlen($today['mday'])<=1){
													$today['mday']='0'.$today['mday'];
												}?>
							<td align=center><?php echo $today['mon'].'/'.$today['mday'].'/'.$today['year']; ?></td>
							<?php
							$fday = getdate(mysql_result($result,$e-1,3));
							$day= $fday['mday'].'/'.$fday['mon'].'/'.$fday['year']; ?>
							<td align=center><?php echo duration($today['year'].'-'.$today['mon'].'-'.$today['mday'] ."00:00:01",date("Y-m-d H:i:s")); ?></td>
						<?php
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
							$today = getdate(mysql_result($result,$e-1,3));
							$nextyear  = mktime(0, 0, 0, $today['mon'],$today['mday'],   $today['year']+1);
							$today = getdate($nextyear); 
							if(strlen($today['mon'])<=1){
													$today['mon']='0'.$today['mon'];
												}
												if(strlen($today['mday'])<=1){
													$today['mday']='0'.$today['mday'];
												}?>
							<td align=center><?php echo $today['mon'].'/'.$today['mday'].'/'.$today['year']; ?></td>
							<?php
							$fday = getdate(mysql_result($result,$e-1,3));
							$day= $fday['mday'].'/'.$fday['mon'].'/'.$fday['year']; ?>
							<td align=center><?php echo duration($today['year'].'-'.$today['mon'].'-'.$today['mday'] ."00:00:01",date("Y-m-d H:i:s")); ?></td>
							<?php
						} ?>
						</tr>
							<?php
							$p=1;
					}
				?>
				</tbody>	
			</table>
			</div>			
		</div>
	</div>
	</div>
	
	<?php
	require_once('footer.php'); 
	?>		
	
</body>
</html>
<?php
	break ;
	default : echo"<center><h2>หน้านี้อนุญาติให้พนักงานข้าใช้เท่านั้น</h2></center><bt><br>";
	echo"<center><h4>ระบบจะพาท่านกลับสู่หน้าหลัก ภายใน 3 วินาที</h4></center>";
	echo "<meta http-equiv='refresh' content=3;URL=index.php>";
	break ; }
?>