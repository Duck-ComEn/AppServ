﻿<?php
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
	<title>Benchmark Garde - Administrator::เพิ่มรายวิชา</title>
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
				<?php
				//import menu from database
					$result=mysql_query("SELECT
											ros_menu.`name`,
											ros_menu.link
										FROM
											ros_menu
										WHERE
											ros_menu.`mode` = 'admin'
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
			<div class="head">Welcome <?php echo ucfirst($_SESSION['MM_FirstName']).' '.ucfirst($_SESSION['MM_LastName']) ;?></div>
			<div class="body_textarea">
				<div align="justify">
				  <h2>เพิ่มรายวิชา</h2>
				  <p>&nbsp;</p>
				  <form id="form1" name="form1" method="POST" action="add-subject.php">
				    <table width="268" border="0">
                      <tr>
                        <td width="70"><div align="right">รหัสวิชา</div></td>
                        <td width="161"><label>
                          <input type="text" name="code" id="code" />
                        </label></td>
                      </tr>
                      <tr>
                        <td><div align="right">ชื่อวิชา</div></td>
                        <td><label>
                          <input type="text" name="name" id="name" />
                        </label></td>
                      </tr>
                      <tr>
                        <td colspan="2"><div align="center">
                          <label>
                          <input type="submit" name="add" id="add" value="add" />
                          </label>
                          <label>
                          <input type="reset" name="clear" id="clear" value="clear" />
                          </label>
                        </div></td>
                      </tr>
                    </table>
				  </form>
				  <?php
				  if(!($_POST['code']=='' ||$_POST['name'=='']))
			$result=mysql_query("insert into ros_subject(code,name,vision) values('".$_POST['code']."','".$_POST['code'].' : '.$_POST['name']."',1)");
					

				  ?>
                  
                  
				  <p>&nbsp;</p>
	  <p>&nbsp;</p>
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
	default : echo"<center><h2>หน้านี้อนุญาติให้ผู้ดูแลระบบเข้าใช้เท่านั้น</h2></center><bt><br>";
	echo"<center><h4>ระบบจะพาท่านกลับสู่หน้าหลัก ภายใน 3 วินาที</h4></center>";
	echo "<meta http-equiv='refresh' content=3;URL=index.php>";
	break ; }
?>