<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Edi-Mo Web Application : Total Clicks</title>
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


$GLOBALS["in_mdl_course_categories_id"] = "";

function getChild($parent) {
	$mysql = new MySQL();
	
	$sql = "SELECT * FROM edimo_course_categories ";
	$sql .= "WHERE mdl_course_categories_parent = " . $parent . " ";
	$sql .= "ORDER BY mdl_course_categories_sortorder ";
	//print $sql . "<br>";
	$result = $mysql->executeQuery($sql);
	while($rs = $mysql->fetchArray()) {
		//print " -" . $rs["nameTH"] . "<br>";
		$GLOBALS["in_mdl_course_categories_id"] .= $rs["mdl_course_categories_id"] . ",";
		
		getChild($rs["mdl_course_categories_id"]);
	}
}

$mdl_course_categories_id = $_GET["mdl_course_categories_id"];

if($mdl_course_categories_id == "*") {
	$mdl_course_categories_name = "ทุกวิชาในระบบ";	
} else {
	$sql = "SELECT * FROM edimo_course_categories ";
	$sql .= "WHERE mdl_course_categories_id = " . $mdl_course_categories_id . " ";
	$sql .= "ORDER BY mdl_course_categories_sortorder";
	//print $sql . "<br>";
	$result = $mysql->executeQuery($sql);
	if($rs = $mysql->fetchArray()) {
		$mdl_course_categories_name = $rs["nameTH"];
	}
	//print "mdl_course_categories_id: " . $mdl_course_categories_id . "<br>";
	getChild($mdl_course_categories_id);
	//print "GLOBALS['in_mdl_course_categories_id']: " . $GLOBALS["in_mdl_course_categories_id"] . "<br>";
	//print "GLOBALS['in_mdl_course_categories_id']: " . substr($GLOBALS["in_mdl_course_categories_id"], 0, strlen($GLOBALS["in_mdl_course_categories_id"]) - 1) . "<br>";
}

$data_update = "";
$sql = "SELECT CONCAT(DAYOFMONTH(time), ' ', ";
$sql .= "CASE MONTH(time) ";
$sql .= "WHEN 1 THEN 'มกราคม' ";
$sql .= "WHEN 2 THEN 'กุมภาพันธ์' "; 
$sql .= "WHEN 3 THEN 'มีนาคม' ";
$sql .= "WHEN 4 THEN 'เมษายน' ";
$sql .= "WHEN 5 THEN 'พฤษภาคม' "; 
$sql .= "WHEN 6 THEN 'มิถุนายน' "; 
$sql .= "WHEN 7 THEN 'กรกฎาคม' "; 
$sql .= "WHEN 8 THEN 'สิงหาคม' "; 
$sql .= "WHEN 9 THEN 'กันยายน' "; 
$sql .= "WHEN 10 THEN 'ตุลาคม' "; 
$sql .= "WHEN 11 THEN 'พฤศจิกายน' "; 
$sql .= "WHEN 12 THEN 'ธันวาคม' "; 
$sql .= "END, ' ', YEAR(time) + 543, ' เวลา ', HOUR(time), '.', MINUTE(time) , ' น.') AS DateUpdate "; 
$sql .= "FROM `edimo_config_time` "; 
$sql .= "WHERE action_id = 3 "; 
$sql .= "ORDER BY time DESC ";
$result = $mysql->executeQuery($sql);
if($rs = $mysql->fetchArray()) {
	$date_update = $rs["DateUpdate"];
}
?>
<style type="text/css">
<!--
.style13 {
	color: #FFFFFF;
	font-size: large;
}
.style14 {
	font-size: medium;
	font-weight: bold;
	color: #FFFF00;
}
.style24 {color: #6A98C9}
.style25 {font-size: small}
.style26 {color: #FFFFFF}
.style28 {color: #FF0000}
.style31 {color: #0000CC}
.style32 {font-weight: bold}
-->
</style>

<script language="JavaScript"> 
function setPointer(field, action, defaultColor, pointerColor, markColor) { 
var newColor 
var currentColor 

currentColor=field.style.backgroundColor; 

if (action == 'over' && currentColor.toLowerCase() == defaultColor.toLowerCase()) { 
newColor=pointerColor; } 

if (action == 'out' && currentColor.toLowerCase() == pointerColor.toLowerCase()) { 
newColor=defaultColor; } 

if (action == 'click' && currentColor.toLowerCase() == defaultColor.toLowerCase()) { 
newColor=markColor; } 
if (action == 'click' && currentColor.toLowerCase() == pointerColor.toLowerCase()) { 
newColor=markColor; } 
if (action == 'click' && currentColor.toLowerCase() == markColor.toLowerCase()) { 
newColor=pointerColor; } 

if (newColor) { 
field.style.backgroundColor=newColor; } 
} 

if (document.images)
{
	imgOne = new Image();
	imgOne.src = "icons/left02.gif";
	imgOff = new Image();
	imgOff.src =  "icons/left01.gif";
}

function msOver(num)
{
	if (document.images)	{
	if (num==0)	{
		document.images[num].src = imgOne.src;
		}
	}
}

function msOut(num)
{
	if (document.images)	{
		document.images[num].src = imgOff.src;
	}
}



</script> 


<form method="post">
<table width="100%" border="0" cellpadding="0" cellspacing="0" >  
  <tr >
  <td  background="icons/topBG.jpg" width="100%" height="40"><div align="left"  valign="top" >
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="950" height="56">
      <param name="movie" value="icons/LogoProFinal.swf" />
      <param name="quality" value="high" />
      <br />
      <param name="wmode" value="transparent" />
      <embed src="icons/LogoProFinal.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="950" height="56"></embed>
    </object>
  </div></td>
</tr>
</table>

<table width="100%" border="0" cellpadding="0" cellspacing="0" >
  <tr>
    <td ><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" id="layout-table">
      <tr>
        <td width="18%" valign="top" ><table width="100%" border="0" cellspacing="0" cellpadding="0"  bgcolor="#F5F5F5">
          <tr>
            <td valign="top">

<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#F5F5F5" class="text" >
  <tr>
    <td colspan="3" background="icons/bg_menu.gif" ><img src="icons/mainmenu.gif" width="175" height="35" /></td>
  </tr>
    <tr>
    <td colspan="3" ><img src="icons/icon01.gif" width="15" height="9" /><a href="EdiMo_totalClick.php?mdl_course_categories_id=*" title="สถิติจำนวนครั้งการใช้งาน">สถิติจำนวนครั้งการใช้งาน</a></td>
  </tr>
  <tr>
    <td width="8" align="right" valign="top"><img src="icons/left0.gif" width="8" height="125" /></td>
    <td width="164" align="left">

<div id="panel" class="panel" >
<script language="JavaScript">

function getArray(id)
{
  var splitarray = link[id].split("|");
  return splitarray;
}
function info(i,obj,col)
{
 sublink = getArray(i);
 infobar = document.getElementById("infob");
 infobar.innerHTML = "<img src='icons/icon02.gif'>  "+sublink[2];
 obj.style.backgroundColor=col;
}

function endi(obj,col)
{
 obj.style.backgroundColor=col;
 infobar = document.getElementById("infob");
 infobar.innerHTML = "<img src='icons/icon02.gif'> <br>";
}
<?php
$sql = "SELECT * FROM edimo_course_categories WHERE categories_ID = 1 ORDER BY mdl_course_categories_sortorder";
//$result = $db->executeQuery(true);	// true = สั่งทำงาน, false = ไม่ทำ
$result = $mysql->executeQuery($sql);
print("var link = new Array();");
print("link[0] = \"<img src='icons/icon02.gif'>ทุกวิชาในระบบ|EdiMo_totalClick.php?mdl_course_categories_id=*|ทุกวิชาในระบบ\";");
$i = 1;
while($rs = $mysql->fetchArray()) {
	print("link[" . $i . "] = \"<img src='icons/icon02.gif'>" . $rs["nameTH"] . "|EdiMo_totalClick.php?mdl_course_categories_id=" . $rs["mdl_course_categories_id"] . "|" . $rs["nameTH"] . "\";");
	++$i;
}
?>
//  document.write("<div align='center' valign='center' class='move' onmouseover='over=false;' onmouseout='over=false;' style='cursor:move'><font color=blue><b>MAIN MENU</b></font></div><div class='menu'><br></div>");
for(i=0;i<link.length;i++) {
  sublink = getArray(i);
  document.write("<a href='"+sublink[1]+"'><div class='menu' onmouseover=\"info("+i+",this,'#A8FF11')\" onmouseout=\"endi(this,'#F5F5F5')\" style='cursor:hand'>  "+ sublink[0] +"</div></a>");
}
  document.write("<div class='menu'><br></div><div class='info' id='infob' name='infob'><img src='icons/icon02.gif'> <br></div>");
</script>	</td>
  </tr>
</table></td>
          </tr>

    <tr>
           <td valign="top" background="" bgcolor="EAEAEA"></td>
          </tr>
   <tr>
    <td colspan="3" width="175"   bgcolor="#F5F5F5"><img src="icons/icon01.gif" width="15" height="9" /><a href="EdiMo_totalUser.php?mdl_course_categories_id=*" title="สถิติตามจำนวนผู้ใช้งาน">สถิติตามจำนวนผู้ใช้งาน</a></td>
  </tr>
    <tr>
    <td colspan="3"  width="175" bgcolor="#F5F5F5">&nbsp;</td>
  </tr>

    <tr>
    <td colspan="3" width="175"  bgcolor="#F5F5F5">&nbsp;<!--<img src="icons/icon01.gif" width="15" height="9" />แจ้งขอใช้บริการ &lt;ชื่อย่อระบบ&gt;--></td>
  </tr>
    <tr>
    <td colspan="3" >&nbsp;</td>
  </tr>
          <tr>
            <td align="center" valign="top">&nbsp;</td>
          </tr>

		  <tr>
            <td valign="top" ></td>
          </tr>


        </table>          </td>
        <td colspan="3" valign="top" bgcolor="#FFFFFF"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" >
          
          <tr>
            <td width="1%" rowspan="5">&nbsp;</td>
            <td width="99%" height="28" colspan="2" align="center"><div align="left"><span class="style13"><img src="icons/stat.gif" alt="stat" width="23" height="23" /><span class="style14 style24"> Top Twenty Course : สถิติจำนวนครั้งการใช้งาน <img src="icons/icon02.gif" width="3" height="6" /></span></span><span class="style28">
              <?=$mdl_course_categories_name?>
            </span></div></td>
          </tr>
          
          <tr>
            <td colspan="2" ><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" >
              <tr >
                <td align="left" ><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="1">
                  <tr>
                    <td valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0">
                      <tr bordercolor="#FFFFFF">
                        <td width="4%" height="20" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC"><span class="style4"><strong>ลำดับ</strong></span></td>
                        <td width="9%" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC"><span class="style4"><strong>จำนวนครั้งที่ใช</strong>้</span></td>
                        <td width="32%" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC"><span class="style4"><strong>ชื่อวิชาภาษาไทย </strong></span></td>
                        <td width="25%" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC"><span class="style4"><strong>ผู้สอน</strong></span></td>
                        <td width="30%" bordercolor="#FFFFFF" bgcolor="#CCCCCC"><span class="style4"><strong>สังกัด/กลุ่มรายวิชา</strong></span></td>
                        </tr>
					  <?php
						//print !is_null($mdl_course_categories_id) . " : " . ($mdl_course_categories_id == NULL) . "<br/>";
						//print $mdl_course_categories_id . "<br/>";
						$sql = "SELECT T1.mdl_course_id, T1.totalClick, ";
						$sql .= "CONCAT(' ', T1.course_nameTH) AS courseName, T1.course_Teacher, T2.nameTH ";
						$sql .= "FROM edimo_def_course T1 ";
						$sql .= "INNER JOIN edimo_course_categories T2 ON T1.mdl_course_categories_id = T2.mdl_course_categories_id ";
						
						if($mdl_course_categories_id != "*") {
							$sql .= "WHERE T1.mdl_course_categories_id IN(" . ($GLOBALS["in_mdl_course_categories_id"] != NULL ? substr($GLOBALS["in_mdl_course_categories_id"], 0, strlen($GLOBALS["in_mdl_course_categories_id"]) - 1) : $mdl_course_categories_id) . ") ";
						}
						
						$sql .= "ORDER BY T1.totalClick DESC ";
						$sql .= "LIMIT 0, 20 ";
						//print $sql . "<br>";
						$result = $mysql->executeQuery($sql);
						$i = 0;
						while($rs = $mysql->fetchArray()) {
					  ?>
                      <tr bgcolor="<?=$i % 2 != 0 ? "#EEEEEE" : "#F5F5F5"?>" bordercolor="#FFFFFF">
                        <td height="20" align="center"><?=++$i?></td>
                        <td align="center"><?=number_format($rs["totalClick"], 0)?></td>
                        <td><a href="alert_result.php?course=<?=$rs["mdl_course_id"]?>"><?=$rs["courseName"]?></a></td>
                        <td><?=$rs["course_Teacher"]?></td>
                        <td><?=$rs["nameTH"]?></td>
                        </tr>
					  <?php
					  	}
						 
						 if($i == 0) {
					  ?>
                      <tr bgcolor="<?=$i % 2 != 0 ? "#EEEEEE" : "#F5F5F5"?>" bordercolor="#FFFFFF">
                        <td height="20" colspan="6" align="center">--- ไม่พบรายการข้อมูล --- </td>
                      </tr>
					  <?
					    }
					  ?>
                    </table></td>
                  </tr>
                </table>                  <p align="right"><strong>ปรับปรุงข้อมูลล่าสุดเมื่อ</strong> <span class="style31">วันที่
                    <?=$date_update?>
                </span></p></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="bottom" bgcolor="A8FF11"><div align="left" class="style24"><span class="style25"><font color="006C1C">Copyright &copy;2007 Wanapu, All Rights Reserved.</font></span></div></td>
		<td width="27%" background="icons/bottombg.gif"><img src="icons/bottom01.gif" width="176" height="35" /></td>
        <td width="24%" background="icons/bottombg.gif"><div align="right" class="style26 style32"><a href="index.php" title="หน้าหลัก">HOME</a>&nbsp;&nbsp;<a href="<?=$CFG->wwwroot?>" title="<?=$CFG->wwwroot?>"><strong><?
				$shortname = "";
				
				$sql = "SELECT * FROM edimo_config";
				$result = $mysql->executeQuery($sql);
				while($rs = mysql_fetch_array($result, MYSQL_ASSOC)) {
					$shortname = $rs["shortName"];
					print $shortname;
				}
			?>
        </strong></a>&nbsp;&nbsp;<a href="http://sutonline.sut.ac.th/edi-mo/"  title="About Edi-Mo Program">Edi-Mo</a></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<script language="javascript">
function menuLinks(index) {
	var url = "admin"+index+".php";
	window.location.replace(url);
}
</script>
<table width="100%" border="0">
 <tr>
    <td><div align="right"><span class="style24"><strong>      สนับสนุนโดย</strong> กองทุนนวัตกรรมและสิ่งประดิษฐ์ สมเด็จพระเทพรัตนราชสุดาฯ สยามบรมราชกุมารี<strong><?php
    //print_footer('home');     // Please do not modify this line
?>
    </strong></span></div></td>
  </tr>
</table>
</form>
</body>
</html>

