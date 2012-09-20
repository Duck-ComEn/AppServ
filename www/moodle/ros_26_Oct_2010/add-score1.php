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
	<title>Benchmark Garde - Administrator::Home</title>
	<link rel="shortcut icon" href="BEI_icon.ico" type="image/x-icon" />
	<link rel="icon" href="BEI_icon.ico" type="image/x-icon" />
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link href="styles_table.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
<!--
.style2 {
	font-size: 16px;
	font-weight: bold;
}
-->
    </style>
    <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
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
				  <h2>เพิ่มคะแนน รายบุคคล</h2>
				  <p>&nbsp;</p>
				  <form id="form1" name="form1" method="POST" action="">
				    <table width="300" border="0">
                      <tr>
                        <th><div align="center" class="style2">รายละเอียดพนักงาน</div></th>
                        <th><div align="center" class="style2">รายละเอียดผลการสอบ</div></th>
                      </tr>
                      <tr>
                        <td><table width="332" border="0">
                          <tr>
                            <td width="91" height="35"><div align="right">รหัสพนักงาน:</div></td>
                            <td width="252"><?php echo $_SESSION['idnumber'];?> </td>
                          </tr>
                          <tr>
                            <td height="35"><div align="right">ชื่อ:</div></td>
                            <td><?php echo $_SESSION['name'];?></td>
                          </tr>
                          <tr>
                            <td height="35"><div align="right">นามสกุล:</div></td>
                            <td><?php echo $_SESSION['lastname'];?></td>
                          </tr>
                          <tr>
                            <td height="35"><div align="right">แผนก:</div></td>
                            <td><?php echo $_SESSION['department'];?></td>
                          </tr>
                          <tr>
                            <td height="35"><div align="right">หัวหน้างาน:</div></td>
                            <td><?php echo $_SESSION['super'];?></td>
                          </tr>
                          <tr>
                            <td height="35"><div align="right">โรงงาน:</div></td>
                            <td><?php echo $_SESSION['city'];?></td>
                          </tr>
                        </table></td>
                        <td><table width="332" border="0">
                          <tr>
                            <td width="120" height="35"><div align="right">ชื่อวิชา:</div></td>
                            <td width="202"><label><?php
												$sql = "SELECT
															ros_subject.`name`,
															ros_subject.`code`
														FROM ros_subject
														WHERE ros_subject.vision = 1
														ORDER BY ros_subject.`name` ASC";
														$query = mysql_query($sql);
														echo "<select id='subject' name='subject'>";
														while($rs = mysql_fetch_array($query)){
														$data = $rs['0'];
														echo "<option>$data</option>";
														}
														echo "</select>"; 
											?></label></td>
                          </tr>
                          <tr>
                            <td height="35"><div align="right">วันที่สอบ:</div></td>
                            <td><label><span id="sprytextfield1">
                            <input type="text" name="date" id="date" />
                            <br /><span class="textfieldRequiredMsg">ต้องกรอกข้อมูล.</span><span class="textfieldInvalidFormatMsg">รูปแบบผิด.</span></span></label></td>
                          </tr>
                          <tr>
                            <td height="35"><div align="right">คะแนนเต็ม:</div></td>
                            <td><label>
                              <input type="text" name="max" id="max" />
                            </label></td>
                          </tr>
                          <tr>
                            <td height="35"><div align="right">คะแนนครั้งที่1:</div></td>
                            <td><label>
                              <input type="text" name="1" id="1" />
                            </label></td>
                          </tr>
                          <tr>
                            <td height="35"><div align="right">คะแนนครั้งที่2:</div></td>
                            <td><label>
                              <input type="text" name="2" id="2" />
                            </label></td>
                          </tr>
                          <tr>
                            <td height="35"><div align="right">คะแนนครั้งที่3:</div></td>
                            <td><label>
                              <input type="text" name="3" id="3" />
                            </label></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td colspan="2"><div align="center">
                          <label>
                          <input type="submit" name="add" id="add" value="เพิ่มผลการสอบ" />
                          </label>
                          <label>
                          <input type="submit" name="clear" id="clear" value="ล้างข้อมูล" />
                          </label>
                        </div></td>
                      </tr>
                    </table>
				  </form>
				  <?php
				   if($_POST['add']){
				$date = $_POST['date'];
				list($month, $day, $year) = split('[/.-]', $date);
			//	echo "Month: $month; Day: $day; Year: $year<br />\n";
							$nextyear  = mktime(0, 0, 0, $month,$day,$year+1);
							$today = getdate($nextyear);
								if(strlen($today['mon'])<=1){
									$today['mon']='0'.$today['mon'];
								}
								if(strlen($today['mday'])<=1){
									$today['mday']='0'.$today['mday'];
								}
							$next=$today['mon'].'/'.$today['mday'].'/'.$today['year'];
			$result=mysql_query("insert into ros_score(uid,subject,time1,time2,time3,max,date_time,next_date) values('".$_SESSION['id']."','".$_POST['subject']."','".$_POST['1']."','".$_POST['2']."','".$_POST['3']."','".$_POST['max']."','".$_POST['date']."','".$next."')");
			echo "<meta http-equiv='refresh' content='0;URL=add-score.php'>";
			          }
				

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
	
    <script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "date", {validateOn:["blur"], hint:"MM/DD/YYYY", format:"mm/dd/yyyy"});
//-->
    </script>
</body>	
</html>
<?php
	break ;
	default : echo"<center><h2>หน้านี้อนุญาติให้ผู้ดูแลระบบเข้าใช้เท่านั้น</h2></center><bt><br>";
	echo"<center><h4>ระบบจะพาท่านกลับสู่หน้าหลัก ภายใน 3 วินาที</h4></center>";
	echo "<meta http-equiv='refresh' content=3;URL=index.php>";
	break ; }
?>