<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Edi-Mo Web Application</title>
</head>

<body>

<?php
       // index.php - the front page.
    if (!file_exists('../config.php')) {
        header('Location: install.php');
        die;
    }

/// Bounds for block widths on this page
    define('BLOCK_L_MIN_WIDTH', 160);
    define('BLOCK_L_MAX_WIDTH', 210);
    define('BLOCK_R_MIN_WIDTH', 160);
    define('BLOCK_R_MAX_WIDTH', 210);

    require_once('../config.php');
    require_once($CFG->dirroot .'/course/lib.php');
    require_once($CFG->dirroot .'/lib/blocklib.php');
	include_once($CFG->dirroot .'/lib/moodlelib.php');  // Contains various admin-only functions

	//include_once($CFG->dirroot .'/lib/adminlib.php');  // Contains various admin-only functions


    $PAGE = page_create_object(PAGE_COURSE_VIEW, SITEID);
    $pageblocks = blocks_setup($PAGE);
    $editing = $PAGE->user_is_editing();
    $preferred_width_left  = bounded_number(BLOCK_L_MIN_WIDTH, blocks_preferred_width($pageblocks[BLOCK_POS_LEFT]), BLOCK_L_MAX_WIDTH);
    $preferred_width_right = bounded_number(BLOCK_R_MIN_WIDTH, blocks_preferred_width($pageblocks[BLOCK_POS_RIGHT]), BLOCK_R_MAX_WIDTH);

	print_header('Edi-Mo Program', '', 'home', '', '', true, true, "<div align=\"right\"><font color=\"#993300\"><h3>Edi-Mo Program&nbsp;&nbsp;</h3></font></div>");
	
/** Code Edi-MO Here **/
require_once("inc/class.mysql.inc.php");
$mysql = new MySQL();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>สถิติรายวิชา</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
}
.style2 {color: #FFFFD6; font-weight: bold; }
.style3 {
	font-size: medium;
	font-weight: bold;
}
.style4 {color: #000066}
-->
</style></head>

<body>
<form id="form1">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  					  <?
					  	$sql = "SELECT * FROM edimo_def_course WHERE mdl_course_id = " . $_REQUEST["course"] . " ";
						//print $sql . "<br>";
						$result = $mysql->executeQuery($sql);
						while($rs = $mysql->fetchArray()) {
						?>
					     <td align="center" >&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
  </tr>
             <tr>
               <td height="30" align="center" class="left content"><span class="style3">สถิติการเข้าใช้บทเรียน
                 <input name="course" type="hidden" id="course" value="<?=$_REQUEST["course"]?>"/>
               </span></td>
             </tr>
  <tr>
    <td height="30" align="center" class="content left"><span class="left header"><strong>รายวิชา&nbsp;<span class="style4"><?=$rs["mdl_course_idnumber"]?> : 
          <?=$rs["course_nameTH"]?>
    </span></strong></span></td>
  </tr>
  	 <?php
				  	}
			 ?>
  <tr>
    <td height="30" align="center" class="content left"><table width="50%" border="1" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td bordercolor="#DDE3D5" bgcolor="#439240"><div align="center" class="style2">ภาคการศึกษาที่</div></td>
        <td bordercolor="#DDE3D5" bgcolor="#439240"><div align="center" class="style2">จำนวนครั้งการใช้งาน<br />
          (ครั้ง) </div></td>
        <td bordercolor="#DDE3D5" bgcolor="#439240"><div align="center" class="style2">จำนวนผู้เข้าใช้งาน<br />
          (ราย)</div></td>
      </tr>
      <?php
						//$sql = "SELECT  * FROM edimo_count_semester WHERE course_id= " . $_REQUEST["course"] . " and  week=0";
						$sql = "SELECT * ";
						$sql .= "FROM edimo_count_semester T1 ";
						$sql .= "INNER JOIN edimo_def_year T2 ON T1.edu_year_id = T2.edu_year_id ";
						$sql .= "WHERE T1.course_id= " . $_REQUEST["course"] . " and T1.week = 0 ";
						$sql .= "ORDER BY T2.acadYear, T2.semester ";
						//print $sql . "<br>";
						$result = $mysql->executeQuery($sql);
						$i = 0;
						while($rs = $mysql->fetchArray()) {
					  ?>
      <tr>
        <td bordercolor="#DDE3D5" bgcolor="#EFC94A"><div align="center"><?=$rs["SEMESTER"] . "/" . $rs["ACADYEAR"]?></div></td>
        <td bordercolor="#DDE3D5" bgcolor="#EFC94A"><div align="center">
            <?=number_format($rs["totalClick"], 0)?>
        </div></td>
        <td bordercolor="#DDE3D5" bgcolor="#EFC94A"><div align="center">
            <?=number_format($rs["totalUsers"], 0)?>
        </div></td>
      </tr>
      <?php
					  	}
						 
				
					  ?>
      <tr>
        <td bordercolor="#DDE3D5" bgcolor="#A4C740">&nbsp;</td>
        <td bordercolor="#DDE3D5" bgcolor="#A4C740">&nbsp;</td>
        <td bordercolor="#DDE3D5" bgcolor="#A4C740">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  
  
  <tr>
    <td height="30" align="center" class="content left">จำนวนบทเรียนรวมทุกโมดูลของรายวิชานี้มีทั้งหมด
      <?
   					    	$mysql2 = new MySQL();
							$sql = "SELECT COUNT(id) AS rows ";
							$sql .= "FROM edimo_course_modules WHERE course_id = " . $_REQUEST["course"] . " ";
							$result2 = $mysql2->executeQuery($sql);
							$rows = 0;
							if($rs2 = $mysql2->fetchArray()) {
								$rows = $rs2["rows"];
								print number_format($rs2["rows"], 0);
							}
						?>
&nbsp;บทเรียน</td>
  </tr>
  <tr>
    <td align="center" class="content left">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="center" class="content left"><input name="Button" type="button" onclick="gotoURL('<?=$_REQUEST["course"]?>');" value="เข้าสู่บทเรียน"/></td>
  </tr>
</table>
</form>
</body>
</html>
<script language="javascript">
function gotoURL(course) {
	var url = "../course/view.php?id=" + course;
	document.location.href = url;
}
</script>
</body>
</html>