<?php require_once('Connections/ros.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE ros_user_admin SET firstname=%s, lastname=%s, password=%s, email=%s WHERE username=%s",
                       GetSQLValueString($_POST['name'], "text"),
                       GetSQLValueString($_POST['lastname'], "text"),
                       GetSQLValueString($_POST['pass'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['username'], "text"));

  mysql_select_db($database_ros, $ros);
  $Result1 = mysql_query($updateSQL, $ros) or die(mysql_error());

  $updateGoTo = "main-edit.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$name_Recordset1 = "null";
if (isset($_GET['user'])) {
  $name_Recordset1 = $_GET['user'];
}
mysql_select_db($database_ros, $ros);
$query_Recordset1 = sprintf("SELECT ros_user_admin.username, ros_user_admin.firstname, ros_user_admin.lastname, ros_user_admin.password, ros_user_admin.email FROM ros_user_admin WHERE ros_user_admin.username = %s", GetSQLValueString($name_Recordset1, "text"));
$Recordset1 = mysql_query($query_Recordset1, $ros) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<?php require_once('Connections/ros.php'); 
if(!isset($_SESSION)){
session_start();

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
<title>ROS-หน้าหลัก</title>
<link href="twoColLiqLtHdr.css" rel="stylesheet" type="text/css" />
<!--[if IE]>
<style type="text/css"> 
/* place css fixes for all versions of IE in this conditional comment */
.twoColLiqLtHdr #sidebar1 { padding-top: 30px; }
.twoColLiqLtHdr #mainContent { zoom: 1; padding-top: 15px; }
/* the above proprietary zoom property gives IE the hasLayout it needs to avoid several bugs */
</style>
<![endif]-->
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {color: #0000FF;
	font-weight: bold;
	font-style: italic;
}
.style4 {color: #0000FF;
	height: 30px;
}
.style4 {font-size: 16px
}
-->
</style>
</head>


<body class="twoColLiqLtHdr">

<div id="container"> 
  <div id="header">
 <?php echo $_GET['user'];?>
    <h1>Recertification Online System(ROS)</h1>
    <p align="right"><span class="style4">ยินดีต้อนรับ คุณ <span class="style3"><?php echo $_SESSION['MM_FirstName'].' '.$_SESSION['MM_LastName'] ;?></span></span></p>
  <!-- end #header --></div>
  <div id="sidebar1">
    <ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="main.php">หน้าหลัก</a>      </li>
      <li><a href="#">แจ้งเตือน</a></li>
    <li><a class="MenuBarItemSubmenu" href="#">สมาชิก</a>
      <ul>
                <li><a href="#">แก้ไขสมาชิก</a>                </li>
          <li><a href="#">เพิ่ม Supervisor</a></li>
          <li><a href="#">เพิ่ม Admin</a></li>
        </ul>
      </li>
      <li><a href="#">ผลสอบพนักงาน</a></li>
      <li><a href="logout.php">ออกจากระบบ</a></li>
    </ul>
    <h3>&nbsp;</h3>
  <!-- end #sidebar1 --></div>
  <div id="mainContent">
    <h2>แก้ไขสมาชิก</h2>
    <form action="<?php echo $editFormAction; ?>" id="form1" name="form1" method="POST">
      <table id="rounded-corner" width="495" border="0">
        <tr>
          <td colspan="2"><div align="right"><span class="style1">ช่องที่มี * ต้องกรอกข้อมูล</span></div></td>
        </tr>
        <tr>
          <td width="162"><div align="right">*FirstName :</div></td>
          <td width="323"><span id="sprytextfield1">
            <label>
            <input name="name" type="text" id="name" value="<?php echo $row_Recordset1['firstname']; ?>" />
            </label>
          <span class="textfieldRequiredMsg">A value is required.</span></span>
          <input name="hf" type="hidden" id="hf" value="<?php echo $row_Recordset1['username']; ?>" /></td>
        </tr>
        <tr>
          <td><div align="right">*LastName :</div></td>
          <td><span id="sprytextfield2">
            <label>
            <input name="lastname" type="text" id="lastname" value="<?php echo $row_Recordset1['lastname']; ?>" />
            </label>
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
        <tr>
          <td><div align="right">*username :</div></td>
          <td><span id="sprytextfield3">
            <label>
            <input name="username" type="text" id="username" value="<?php echo $row_Recordset1['username']; ?>" />
            </label>
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
        <tr>
          <td><div align="right">*password :</div></td>
          <td><span id="sprytextfield4">
            <label>
            <input name="pass" type="password" id="pass" value="<?php echo $row_Recordset1['password']; ?>" />
            </label>
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
        <tr>
          <td><div align="right">*E-mail :</div></td>
          <td><span id="sprytextfield6">
          <label>
          <input name="email" type="text" id="email" value="<?php echo $row_Recordset1['email']; ?>" />
          </label>
          <span class="textfieldInvalidFormatMsg">Invalid format.</span><span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
        <tr>
          <td><div align="right">
            <label>
            
              
              <div align="center"></div>
              </label>
</div>            <span id="sprytextfield5">
            <label></label>
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td><input type="submit" name="add" id="add" value="เปลี่ยนแปลง" /></td>
        </tr>
      </table>
      
      
      <input type="hidden" name="MM_update" value="form1" />
    </form>
    
    <p>&nbsp;</p>
    <p></p>
    <!-- end #mainContent --></div>
  <!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
  <div id="footer">
    <p>Footer</p>
  <!-- end #footer --></div>
<!-- end #container --></div>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["blur"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "email", {validateOn:["blur"]});
//-->
</script>


</body>
</html>
<?php
mysql_free_result($Recordset1);

break ;
default : echo"<center><h2>หน้านี้อนุญาติให้ผู้ดูแลระบบเข้าใช้เท่านั้น</h2></center><bt><br>";
echo"<center><h4>ระบบจะพาท่านกลับสู่หน้าหลัก ภายใน 3 วินาที</h4></center>";
echo "<meta http-equiv='refresh' content=3;URL=index.php>";
break ; }
?>